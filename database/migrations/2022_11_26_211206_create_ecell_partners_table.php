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
        Schema::create('partner_ecells', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('society');
            $table->string('college');
            $table->string('url');
            $table->string('state');
            $table->string('city');
            $table->string('linkein');
            $table->string('instagram');
            $table->string('role');
            $table->string('wanumber');
            $table->string('replinkedin');
            $table->integer('activeyears');
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
        Schema::dropIfExists('ecell_partners');
    }

};
