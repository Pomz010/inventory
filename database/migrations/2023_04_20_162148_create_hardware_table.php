<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardware', function (Blueprint $table) {
            $table->id();
            $table->string('asset_tag');
            $table->string('item');
            $table->string('brand');
            $table->string('model');
            $table->string('processor')->nullable();
            $table->string('memory')->nullable();
            $table->string('storage')->nullable();
            $table->string('serial_#');
            $table->string('imei_#1')->nullable();
            $table->string('imei_#2')->nullable();
            $table->string('hostname')->nullable();
            $table->date('purchase_date');
            $table->string('vendor');
            $table->integer('warranty');
            $table->string('sim_#')->nullable();
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
        Schema::dropIfExists('hardware');
    }
}
