<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//  Import blade
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::directive('import', function ($args) {
            $args = Blade::stripParentheses($args);
    
            $viewBasePath = Blade::getPath();
            foreach ($this->app['config']['view.paths'] as $path) {
                if (substr($viewBasePath,0,strlen($path)) === $path) {
                    $viewBasePath = substr($viewBasePath,strlen($path));
                    break;
                }
            }
    
            $viewBasePath = dirname(trim($viewBasePath,'\/'));
            $args = substr_replace($args, $viewBasePath.'.', 1, 0);
            return "<?php echo \$__env->make({$args}, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>";
        });


        Blade::directive('widget', function ($args) {
            $args = Blade::stripParentheses($args);
            return "<?php echo \$__env->make('pages.components.widgets.'.$args, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>";
        });
        Blade::directive('grid', function ($args) {
            $args = Blade::stripParentheses($args);
            return "<?php echo \$__env->make('pages.components.grids.'.$args, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>";
        });

    }
}
