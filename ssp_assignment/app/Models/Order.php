<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'cart_id',

        // Shipping details
        'shipping_first_name',
        'shipping_last_name',
        'shipping_address',
        'shipping_post_code',
        'shipping_city',
        'shipping_mobile',
//        'shipping_total',
        'total',
        'status',
        'payment_status',
    ];

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }
}
