<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Import our seeders
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(AcadBackSeeder::class);
        $this->call(InterestSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CollegeSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(ObjectiveSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(StageSeeder::class);
        $this->call(StartupSeeder::class);

    }
}
