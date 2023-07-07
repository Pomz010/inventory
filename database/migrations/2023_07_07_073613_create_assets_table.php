<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hardware_assets', function (Blueprint $table) {
            $table->id();
            $table->string('asset_tag')->unique();
            $table->string('item');
            $table->string('brand');
            $table->string('model');
            $table->string('processor')->nullable();
            $table->string('memory')->nullable();
            $table->string('storage')->nullable();
            $table->string('gpu')->nullable();
            $table->string('motherboard')->nullable();
            $table->string('serial_#');
            $table->string('os_name')->nullable();
            $table->string('os_category')->nullable();
            $table->string('os_productKey')->nullable();
            $table->string('hostname')->nullable();
            $table->string('vendor');
            $table->date('purchase_date');
            $table->date('warranty');
            $table->string('dr_#');
            $table->string('po_#');
            $table->string('price');
            $table->string('printer_type')->nullable();
            $table->string('mac_address')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('printer_output')->nullable();
            $table->string('cartridge_model')->nullable();
            $table->string('device_ownership')->nullable();
            $table->string('mobile_imei_#1')->nullable();
            $table->string('mobile_imei_#2')->nullable();
            $table->string('mobile_sim_#')->nullable();
            $table->string('account_#')->nullable();
            $table->string('data_plan')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
