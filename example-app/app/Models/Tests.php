<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    use HasFactory;
    // trỏ tới bảng trong csdl mà chúng ta cần sử dụng
    protected $table = 'tests';

    protected $filltable = [
        'name',
        'email',
        'phone',
        'date',
        'address',
        'gender',
        'img'
    ];
}
