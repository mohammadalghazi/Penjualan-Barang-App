<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Models\Category;
use Carbon\Carbon;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategory = SubCategory::orderBy('created_at', 'desc')->paginate(20);
        return view('dashboard.subcategory.index', [
            "title" => "Sub-Category", 'data' => $subCategory
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('dashboard.subcategory.create', [
            "title" => "Create Sub-Category", 'categories' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubCategoryRequest $request)
    {
        $code = Carbon::now()->format('YmdHis') . mt_rand(100000, 999999);
        SubCategory::create([
            'name' => $request->name,
            'code' => $code,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('subcategory.index')->with('response', ['status' => 'success', 'messages' => 'Sub-Category created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        $subCategory = SubCategory::find($subCategory->id);
        return view('dashboard.subcategory.show', [
            "title" => "Show Sub-Category", 'data' => $subCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        $category = Category::all();
        $subCategory = SubCategory::find($subCategory->id);
        return view('dashboard.subcategory.edit', [
            "title" => "Edit Sub-Category", 'data' => $subCategory, 'categories' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubCategoryRequest $request, SubCategory $subCategory)
    {
        $code = Carbon::now()->format('YmdHis') . mt_rand(100000, 999999);
        $subCategory->updated([
            'name' => $request->name,
            'code' => $code,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('subcategory.index')->with('response', ['status' => 'success', 'messages' => 'Sub-Category updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->route('subcategory.index')->with('response', ['status' => 'success', 'messages' => 'Sub-Category deleted successfully']);
    }
}
