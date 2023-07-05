<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_number',
        'business_unit_id',
        'department_id',
        'section_id',
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
