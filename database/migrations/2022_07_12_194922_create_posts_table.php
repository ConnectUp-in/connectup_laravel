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
        Schema::create('posts', function (Blueprint $table) {
            // id, user, caption, images, tags, ytlink, type, question,  options, answer, active, shares, likes, dislikes, created_at, updated_at
            $table->string('id');
            $table->primary('id');
            $table->string('user_id');
            $table->string('caption')->nullable();
            $table->json('images')->default(json_encode([]));
            $table->json('tags')->default(json_encode([]));
            $table->string('ytlink')->nullable();
            $table->string('type')->default('n');
            $table->string('question')->nullable();
            $table->json('options')->default(json_encode([]));
            $table->string('answer')->nullable();
            $table->boolean('active')->default(true);
            $table->json('shares')->default(json_encode([]));
            $table->json('likes')->default(json_encode([]));
            $table->json('dislikes')->default(json_encode([]));
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
        Schema::dropIfExists('posts');
    }
};
