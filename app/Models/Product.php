<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'main_img',
        'img1',
        'img2',
        'img3',
        'img4',
        'price',
        'description',
    ];
}
