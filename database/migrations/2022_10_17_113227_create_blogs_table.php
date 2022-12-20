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
        Schema::create('blogs', function (Blueprint $table) {
            $table->string('id');
            $table->primary('id');
            $table->string('title');
            $table->string('type')->default('b');
            $table->longText('content');
            $table->string('creator');
            $table->string('creator_type');
            $table->integer('category')->nullable();
            $table->json('attachments')->nullable();
            $table->string('slug');
            $table->string('tags')->nullable();
            $table->integer('readtime')->nullable();
            $table->string('image');
            $table->string('image_compressed')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('suspended')->default(false);
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
        Schema::dropIfExists('blogs');
    }
};
