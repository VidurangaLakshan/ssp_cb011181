<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product_category.index', [
            'product_categories' => ProductCategory::orderBy('id', 'DESC')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product_category.form', [
            'category' => new ProductCategory(),
            'purpose' => 'Create Product Category',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductCategoryRequest $request)
    {
        // (new ProductCategory())->create($request->all());
        
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        ProductCategory::create($validated);
        
        return redirect()->route('product-category.index')->with('success', 'Product Category Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $productCategory)
    {
        return view('admin.product_category.form', [
            'category' => $productCategory,
            'purpose' => 'Update Product Category',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $productCategory->update($validated);

        return redirect()->route('product-category.index')->with('success', 'Product Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();

        return redirect()->route('product-category.index')->with('success', 'Product Category Deleted Successfully!');
    }
}
