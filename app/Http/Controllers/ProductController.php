<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Discount;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $discounts = Discount::all();
        return view('dashboard.products.index', [
            'title' => 'Product', 'products' => $products, 'subcategories' => $subcategories, 'brands' => $brands, 'discounts' => $discounts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.products.create', [
            'title' => 'Create Product'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validateData = $request->validate();
        Product::create($validateData);
        return redirect('dashboard.products.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(UpdateProductRequest $product)
    {
        $products = Product::find($product->id);
        return view('dashboard.products.show', [
            'title' => 'Detail Product', 'products' => $products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $products = Product::find($product->id);
        return view('dashboard.products.edit', [
            'title' => 'Edit Product', 'products' => $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validateData = $request->validate();
        $product->update($validateData);
        return redirect('dashboard.products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('dashboard.products.index')->with('success', 'Product deleted successfully');
    }
}
