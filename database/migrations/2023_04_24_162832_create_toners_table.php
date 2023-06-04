<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toners', function (Blueprint $table) {
            $table->id();
            $table->string('printer_brand');
            $table->string('printer_model');
            $table->string('printer_type');
            $table->string('cartridge_model');
            $table->string('output');
            $table->string('black');
            $table->string('cyan');
            $table->string('magenta');
            $table->string('yellow');
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
        Schema::dropIfExists('toners');
    }
}
