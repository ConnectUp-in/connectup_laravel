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
        Schema::create('events', function (Blueprint $table) {
            // title, slug, type, content, image, r_dates, e_dates, location, attachments, active, event_link, suspended, creator, creator_type, interests, tags, required_fields, additional_fields , created_at, updated_at
            $table->string('id');
            $table->primary('id');
            $table->string('title');
            $table->string('slug');
            $table->string('type')->default('w');
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->json('r_dates')->nullable();
            $table->json('e_dates')->nullable();
            $table->string('location')->nullable();
            $table->json('attachments')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('suspended')->default(false);
            $table->string('creator')->nullable();
            $table->string('creator_type')->nullable();
            $table->json('interests')->nullable();
            $table->json('tags')->nullable();
            $table->json('required_fields')->nullable();
            $table->json('additional_fields')->nullable();
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
        Schema::dropIfExists('events');
    }
};
