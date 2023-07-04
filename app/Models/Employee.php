<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'business_units_id',
        'departments_id',
        'sections_id',
        'firstname',
        'lastname',
        'middle_name',
        'ext_name',
        'gender',
        'position',
        'date_hired',
        'email'
    ];
}
