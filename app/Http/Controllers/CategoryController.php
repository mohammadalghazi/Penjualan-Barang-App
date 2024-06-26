<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::orderBy('created_at', 'desc')->paginate(20);
        return view('dashboard.category.index', [
            'title' => 'Categories', 
            'data' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.category.create', [
            'title' => 'Create Category'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $code = Carbon::now()->format('YmdHis') . mt_rand(100000, 999999);

        Category::create([
            'name' => $request->name,
            'code' => $code,
            'description' => $request->description
        ]);

        return redirect()->route('category.index')->with(
            'response', [
                'status' => "success", 
                'messages' => "Category created successfully!"
            ]);
    }

    /**
     * Display the specified resource.
     */
    /**
 * Display the specified resource.
 */
public function show($id)
{
    // dd($category->id);
    $category = Category::findOrFail($id);
    return view('dashboard.category.__show', [
        'title' => 'Category',
        'category' => $category
    ]);
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.category.__edit', [
            'title' => 'Edit Category',
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
{
    // dd($request->all());
    $code = Carbon::now()->format('YmdHis') . mt_rand(100000, 999999);
    $category = Category::find($id);
    $category->update([
        'name' => $request->name,
        'code' => $code,
        'description' => $request->description
    ]);

    return redirect()->route('category.index')->with(
        'response', [
            'status' => 'success', 
            'messages' => 'Category updated successfully'
        ]);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('category.index')->with(
            'response', [
                'status' => 'success', 
                'messages' => 'Category deleted successfully'
            ]);
    }
}
