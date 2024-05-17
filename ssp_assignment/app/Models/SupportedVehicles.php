<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportedVehicles extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'year',
        'brand',
        'model'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
