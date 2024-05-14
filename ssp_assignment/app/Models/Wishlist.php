<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wishlist extends Model
{

    protected $fillable = [
        'user_id',
        'product_id',
    ];


    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
