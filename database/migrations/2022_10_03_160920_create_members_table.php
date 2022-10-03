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
        Schema::create('members', function (Blueprint $table) {
            // user, contact, founder, startupname, description, reasons, website, linkedin
            $table->id();
            $table->string('user');
            $table->string('contact');
            $table->string('founder');
            $table->string('startupname')->nullable();
            $table->string('description')->nullable();
            $table->string('reasons')->nullable();
            $table->string('website')->nullable();
            $table->string('linkedin')->nullable();
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
        Schema::dropIfExists('members');
    }
};
