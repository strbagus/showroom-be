<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carimage extends Model
{
    use HasFactory;
    protected $fillable = [
        'filename', 'car_code'
    ];
    protected $table = 'mst_carimage';
}
