<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use File;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.product.index');
    }

    public function create()
    {
        return view('windmill-admin.product.form', [
            'product' => new Product(),
            'purpose' => 'Create Product',
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
//        $validated = $request->validate([
//            'name' => 'required',
//            'slug' => 'required|unique:products,slug',
//            'image' => 'required|mimes:jpeg,png,jpg,webp',
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

        $hasImage1 = false;
        $hasImage2 = false;
        $hasImage3 = false;
        $hasImage4 = false;

        //pull the category data from the request
//        dd($request->input('category'));


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $path = 'uploads/products/';
            $filename1 = time() . '1.' . $extension;
            $file->move($path, $filename1);
            $hasImage1 = true;

        }


        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();

            $path = 'uploads/products/';
            $filename2 = time() . '2.' . $extension;
            $file->move($path, $filename2);
            $hasImage2 = true;
        }


        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();

            $path = 'uploads/products/';
            $filename3 = time() . '3.' . $extension;
            $file->move($path, $filename3);
            $hasImage3 = true;
        }


        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();

            $path = 'uploads/products/';
            $filename4 = time() . '4.' . $extension;
            $file->move($path, $filename4);
            $hasImage4 = true;
        }

//        dd($hasImage1, $hasImage2, $hasImage3, $hasImage4);


//                Product::create($validated);

//        Product::create([
//            'name' => $request->input('name'),
//            'slug' => $request->input('slug'),
//            'image' => $path . $filename1,
//            'image2' => $path . $filename2,
//            'image3' => $path . $filename3,
//            'image4' => $path . $filename4,
//            'description' => $request->input('description'),
//            'price' => $request->input('price'),
//            'stock' => $request->input('stock'),
//            'status' => $request->input('status'),
////        'category_id' = $request->input('category_id') ?? 0;
//            'meta_title' => $request->input('meta_title'),
//            'meta_description' => $request->input('meta_description'),
//            'meta_keywords' => $request->input('meta_keywords'),
//        ]);


        if ($hasImage1 && $hasImage2 && $hasImage3 && $hasImage4) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image' => $path . $filename1,
                'image2' => $path . $filename2,
                'image3' => $path . $filename3,
                'image4' => $path . $filename4,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage1 && $hasImage2 && $hasImage3) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image' => $path . $filename1,
                'image2' => $path . $filename2,
                'image3' => $path . $filename3,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage1 && $hasImage2 && $hasImage4) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image' => $path . $filename1,
                'image2' => $path . $filename2,
                'image4' => $path . $filename4,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage1 && $hasImage3 && $hasImage4) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image' => $path . $filename1,
                'image3' => $path . $filename3,
                'image4' => $path . $filename4,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage1 && $hasImage2) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image' => $path . $filename1,
                'image2' => $path . $filename2,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage1 && $hasImage3) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image' => $path . $filename1,
                'image3' => $path . $filename3,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage1 && $hasImage4) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image' => $path . $filename1,
                'image4' => $path . $filename4,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage1) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image' => $path . $filename1,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage2 && $hasImage3 && $hasImage4) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image2' => $path . $filename2,
                'image3' => $path . $filename3,
                'image4' => $path . $filename4,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage2 && $hasImage3) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image2' => $path . $filename2,
                'image3' => $path . $filename3,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage2 && $hasImage4) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image2' => $path . $filename2,
                'image4' => $path . $filename4,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage2) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image2' => $path . $filename2,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage3 && $hasImage4) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image3' => $path . $filename3,
                'image4' => $path . $filename4,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage3) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image3' => $path . $filename3,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);

        } elseif ($hasImage4) {
            Product::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'image4' => $path . $filename4,
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'meta_keywords' => $request->input('meta_keywords'),
            ]);
        }


        if ($hasImage1 == null) {
            abort(403, 'Please upload at least one image');
        } else {
            return redirect()->route('admin.product.index')->with('success', 'Product Created Successfully!');
        }


//        $product->name = $request->input('name');
//        $product->slug = $request->input('slug');
//        $product->image = $request->input('image') ?? 0;
//        $product->description = $request->input('description');
//        $product->price = $request->input('price');
//        $product->stock = $request->input('stock');
//        $product->status = $request->input('status');
////        $product->category_id = $request->input('category_id') ?? 0;
//        $product->meta_title = $request->input('meta_title');
//        $product->meta_description = $request->input('meta_description');
//        $product->meta_keywords = $request->input('meta_keywords');

//        $product->save();


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
            'categories' => Category::all(),
        ]);
    }

    public function update(Request $request, Product $product)
    {
//        $validated = $request->validate([
//            'name' => 'required',
//            'slug' => 'required',
//            'image' => 'required|mimes:jpeg,png,jpg,webp',
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


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $path1 = 'uploads/products/';
            $filename1 = time() . '1.' . $extension;
            $file->move($path1, $filename1);
            $product->image = $path1 . $filename1;
        }

        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();

            $path2 = 'uploads/products/';
            $filename2 = time() . '2.' . $extension;
            $file->move($path2, $filename2);
            $product->image2 = $path2 . $filename2;
        }


        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();

            $path3 = 'uploads/products/';
            $filename3 = time() . '3.' . $extension;
            $file->move($path3, $filename3);
            $product->image3 = $path3 . $filename3;

        }


        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();

            $path4 = 'uploads/products/';
            $filename4 = time() . '4.' . $extension;
            $file->move($path4, $filename4);
            $product->image4 = $path4 . $filename4;

        }


        //


//                Product::create($validated);

//        $product->update([
//            'name' => $request->input('name'),
//            'slug' => $request->input('slug'),
//            'image' => $path.$filename,
//            'description' => $request->input('description'),
//            'price' => $request->input('price'),
//            'stock' => $request->input('stock'),
//            'status' => $request->input('status'),
////        'category_id' = $request->input('category_id') ?? 0;
//            'meta_title' => $request->input('meta_title'),
//            'meta_description' => $request->input('meta_description'),
//            'meta_keywords' => $request->input('meta_keywords'),
//        ]);
//        $product->update($request->validated());

        $product->name = $request->input('name');
        $product->slug = $request->input('slug');

        // if path is null then image2 is 1 else 0

        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->status = $request->input('status');
        $product->category_id = $request->input('category');
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

    public function removeSecondaryImages(Product $product)
    {
        $product->image2 = 'uploads/products/';
        $product->image3 = 'uploads/products/';
        $product->image4 = 'uploads/products/';
        $product->save();

        return redirect()->back()->with('success', 'All Secondary Images Removed Successfully!');
    }
}
