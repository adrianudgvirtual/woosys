<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = ['woo_url', 'sys_url'];
    protected $hidden = ['woo_ck', 'woo_cs', 'sys_ck', 'sys_cs'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


