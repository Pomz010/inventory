<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HardwareAsset extends Model
{
    use HasFactory;

    protected $fillable = [
        'asset_tag',
        'item',
        'brand',
        'model',
        'processor',
        'memory',
        'storage',
        'gpu',
        'motherboard',
        'serial_number',
        'os_name',
        'os_category',
        'os_productKey',
        'hostname',
        'vendor',
        'purchase_date',
        'warranty',
        'dr_number',
        'po_number',
        'price',
        'printer_type',
        'mac_address',
        'ip_address',
        'printer_output',
        'cartridge_model',
        'device_ownership',
        'mobile_imei_#1',
        'mobile_imei_#2',
        'mobile_sim_#',
        'account_#',
        'data_plan',
        'description'
    ];
}
