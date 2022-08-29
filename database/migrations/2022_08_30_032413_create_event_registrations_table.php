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
        Schema::create('event_registrations', function (Blueprint $table) {
            // id, user_id, event_id, name, email, required_fields, additional_fields, created_at, updated_at
            $table->id();
            $table->string('user_id');
            $table->string('event_id');
            $table->string('name');
            $table->string('email');
            $table->json('required_fields');
            $table->json('additional_fields');
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
        Schema::dropIfExists('event_registrations');
    }
};
