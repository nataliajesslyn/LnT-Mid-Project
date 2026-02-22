<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $fillable = [
        'name',
        'age',
        'address',
        'phone_number',
        'created_at',
        'update_at',
    ];
}
