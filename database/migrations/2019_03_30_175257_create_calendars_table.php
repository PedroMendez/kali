<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('campo11');
            $table->string('campo12');
            $table->string('campo13');
            $table->string('campo21');
            $table->string('campo22');
            $table->string('campo23');
            $table->string('campo31');
            $table->string('campo32');
            $table->string('campo33');
            $table->string('campo41');
            $table->string('campo42');
            $table->string('campo43');
            $table->string('campo51');
            $table->string('campo52');
            $table->string('campo53');
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
        Schema::dropIfExists('calendars');
    }
}
