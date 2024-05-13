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
        'description',
        'price',
        'stock',
        'sale_price',
        'status',
        'slug',
//        'category_id',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function getThumbnailImage(){
        $isUrl = str_contains($this->image, 'http');

        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }
}
