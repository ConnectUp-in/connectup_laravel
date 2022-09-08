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
        Schema::table('events', function (Blueprint $table) {

            // Add capacity and tickets_allowed columns
            $table->integer('capacity')->nullable();
            $table->boolean('tickets_allowed')->default(false);
        });

        Schema::table('event_registrations', function (Blueprint $table) {

            // Add ticket_id, confirmed_at, checked_in_at columns
            $table->integer('ticket_id')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('checked_in_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            // Drop capacity and tickets_allowed columns
            $table->dropColumn('capacity');
            $table->dropColumn('tickets_allowed');
        });

        Schema::table('event_registrations', function (Blueprint $table) {
            // Drop ticket_id, confirmed_at, checked_in_at columns
            $table->dropColumn('ticket_id');
            $table->dropColumn('confirmed_at');
            $table->dropColumn('checked_in_at');
        });

    }
};
