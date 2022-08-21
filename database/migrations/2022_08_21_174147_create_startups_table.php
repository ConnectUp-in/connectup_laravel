<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startups', function (Blueprint $table) {
            // id, name, image.pngbio, about, logo, cover, socials, founded_at, contact_email, hiring_email, founder, category, stage, contact, funded, interests, active, lookingfor, created_at, updated_at

            $table->string('id');
            $table->primary('id');
            $table->string('name')->nullable();
            $table->text('bio')->nullable();
            $table->text('about')->nullable();
            $table->string('username')->unique();
            $table->string('logo')->nullable();
            $table->string('cover')->nullable();
            $table->json('socials')->nullable();
            $table->date('founded_at')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('hiring_email')->nullable();
            $table->string('founder')->nullable();
            $table->string('category')->nullable();
            $table->string('stage')->nullable();
            $table->string('contact')->nullable();
            $table->boolean('funded')->default(false);
            $table->json('interests')->nullable();
            $table->boolean('active')->default(true);
            $table->json('lookingfor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('startups');
    }
};