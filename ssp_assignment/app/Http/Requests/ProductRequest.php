<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required'],
            'image' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'stock' => ['required'],
            'sale_price' => ['nullable'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
