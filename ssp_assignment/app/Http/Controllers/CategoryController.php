<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        if (Auth::check() && auth()->user()->role->value == 1) {

            return redirect()->route('admin.category.index');
        } else {
            abort(403, 'Unauthorized Access');
        }
    }

    public function create()
    {
        if (Auth::check() && auth()->user()->role->value == 1) {

            return view('windmill-admin.category.form', [
                'category' => new Category(),
                'purpose' => 'Create Category',
            ]);
        } else {
            abort(403, 'Unauthorized Access');
        }
    }

    public function store(Request $request)
    {

        Category::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category Created Successfully!');

    }

    public function show(Category $category)
    {
        return view('pages.category', [
            'category' => $category,
        ]);
    }

    public function edit(Category $category)
    {
        if (Auth::check() && auth()->user()->role->value == 1) {

            return view('windmill-admin.category.form', [
                'category' => $category,
                'purpose' => 'Edit Category',
            ]);
        } else {
            abort(403, 'Unauthorized Access');
        }
    }

    public function update(Request $request, Category $category)
    {
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->update();

        return redirect()->route('admin.category.index')->with('success', 'Category Updated Successfully!');
    }

    public function destroy(Category $category)
    {
        if (Auth::check() && auth()->user()->role->value == 1) {

            $category->delete();

            return redirect()->route('admin.category.index')->with('success', 'Category Deleted Successfully!');
        } else {
            abort(403, 'Unauthorized Access');
        }
    }
}
