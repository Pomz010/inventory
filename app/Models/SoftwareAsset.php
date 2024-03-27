<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareAsset extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'version',
        'license',
        'exp_date',
        'developer',
        'category',
        'date_installed',
        'serial_#',
        'purchase_date',
        'vendor',
        'product_key'
    ];
}
