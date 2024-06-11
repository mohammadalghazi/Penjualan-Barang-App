<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::orderBy('created_at', 'desc')->get();
        return view('dashboard.categories.index', [
            'title' => 'Categories', 'category' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'title' => 'Create Category'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $validateData = $request->validate();
        Category::create($validateData);
        return redirect('/dashboard/categories')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        return view('dashboard.categories.show', [
            'title' => 'Detail Category', 'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $category = Category::find($category->id);
        return view('dashboard.categories.edit', [
            'title' => 'Edit Category', 'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $validateData = $request->validate();
        $category->update($validateData);
        return redirect('/dashboard/categories')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/dashboard/categories')->with('success', 'Category deleted successfully');
    }
}
