<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            
            $table->float('af');
            $table->float('am');
            $table->float('as');
            $table->float('ao');

            $table->float('mf');
            $table->float('mm');
            $table->float('ms');
            $table->float('mo');

            $table->float('of');
            $table->float('om');
            $table->float('os');
            $table->float('oo');

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
        Schema::dropIfExists('rates');
    }
}
