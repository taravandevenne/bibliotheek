<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adressen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('straat');
            $table->string('huisnummer');
            $table->string('busnummer');
            $table->string('postcode');
            $table->string('plaats');
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
        Schema::dropIfExists('adressen');
    }
}
