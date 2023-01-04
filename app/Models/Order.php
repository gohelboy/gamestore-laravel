<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cart_id',
        'total',
        'firstname',
        'lastname',
        'email',
        'phone',
        'state',
        'city',
        'address',
        'payment'
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function cart()
    {
        return $this->belongsTo(cart::class);
    }
}
