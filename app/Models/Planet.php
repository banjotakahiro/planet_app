<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_ja',
        'name_en',
        'radius',
        'weight'
    ];
    public $timestamps = false;
}

