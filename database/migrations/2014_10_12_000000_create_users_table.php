<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id');
            $table->primary('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // role, active, stream, college, bio, about, graduation_year,  interests,  cover_image
            $table->integer('role')->default(0);
            $table->boolean('active')->default(false);
            $table->string('stream')->nullable();
            $table->string('college')->nullable();
            $table->string('bio')->nullable();
            $table->string('about')->nullable();
            $table->integer('graduation_year')->nullable();
            $table->json('interests')->default(json_encode([]));
            $table->string('cover_image')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('google_id')->nullable();
            $table->string('linkedin_id')->nullable();
            $table->string('github_id')->nullable();
            $table->string('refferal')->nullable();
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
        Schema::dropIfExists('users');
    }
};
