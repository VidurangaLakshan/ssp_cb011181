<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'image',
        'image2',
        'image3',
        'image4',
        'description',
        'price',
        'stock',
        'status',
        'slug',
        'category_id',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function inWishlist()
    {
        return $this->belongsToMany(User::class, 'wishlists')->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
