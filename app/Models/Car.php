<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_code', 'name', 'year', 'transmition', 'mileage', 'merk_code', 'type_code', 'machine', 'color', 'sell_price', 'buy_price', 'plat', 'fuel', 'status'
    ];
    protected $table = 'mst_car';
}