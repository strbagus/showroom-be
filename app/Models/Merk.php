<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'merk_code', 'logoname'
    ];
    protected $table = 'ref_merk';
}