<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        return view('windmill-admin.product.index', [
            'products' => Product::orderBy('id', 'ASC')->paginate(10),
            ''
        ]);
    }

    public function create()
    {
        return view('windmill-admin.product.form', [
            'product' => new Product(),
            'purpose' => 'Create Product',
        ]);
    }

    public function store(Request $request)
    {
//        $validated = $request->validate([
//            'name' => 'required',
//            'slug' => 'required|unique:products,slug',
//            'description' => 'required',
//            'price' => 'required',
//            'stock' => 'required',
//            'sale_price' => 'nullable',
//            'status' => 'required',
////            'category_id' => 'required',
//            'meta_title' => 'nullable',
//            'meta_description' => 'nullable',
//            'meta_keywords' => 'nullable',
//        ]);

        //        Product::create($validated);

        $product = new Product();

        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->image = $request->input('image') ?? 0;
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->status = $request->input('status');
//        $product->category_id = $request->input('category_id') ?? 0;
        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keywords = $request->input('meta_keywords');

        $product->save();



        return redirect()->route('admin.product.index')->with('success', 'Product Created Successfully!');

    }

    public function show(Product $product)
    {
//        return redirect('/product/' . $product->slug);
        return view('pages.product', [
            'product' => $product,
        ]);
    }


    public function edit(Product $product)
    {
        return view('windmill-admin.product.form', [
            'product' => $product,
            'purpose' => 'Edit Product',
        ]);
    }

    public function update(Request $request, Product $product)
    {
//        $product->update($request->validated());

        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->image = $request->input('image') ?? 0;
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->status = $request->input('status');
//        $product->category_id = $request->input('category_id') ?? 0;
        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->update();

        return redirect()->route('admin.product.index')->with('success', 'Product Updated Successfully!');

    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.product.index')->with('success', 'Product Deleted Successfully!');
    }
}
