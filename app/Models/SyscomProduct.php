<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyscomProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'brand',
        'stock',
        'price',
    ];
}
