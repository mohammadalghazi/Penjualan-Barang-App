<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Brand::orderBy('created_at', 'desc')->get();
        return view('dashboard.brands.index',[
            "title" => "Brands", "brand" => $brand
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.brands.create', [
            "title" => "Create Brand",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $validateData = $request->validate();

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().rand().'.'.$image->getClientOriginalExtension();
            $image->storeAs('brands', $image, $imageName, 'public');
            $validation['image'] = $imageName;
        } else {
            $validation['image'] = null;
        }

        Brand::create($validateData);
        
        return redirect('/dashboard/brands')->with('success', 'Brand created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        $brands = Brand::find($brand->id);
        return view('dashboard.brands.show', [
            "title" => "Detail Brand", "brand" => $brands
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        $brands = Brand::find($brand->id);
        return view('dashboard.brands.edit', [
            "title" => "Edit Brand",
            "brand" => $brands
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $brand = Brand::find($brand->id);
        $validateData = $request->validated();

        if($request->hasFile('image')) {
            $oldImage = Brand::find($brand->id)->image;
            Storage::delete('public/brands/'.$oldImage);
            $image = $request->file('image');
            $imageName = time().rand().'.'.$image->getClientOriginalExtension();
            $image->storeAs('brands', $image, $imageName, 'public');
            $validation['image'] = $imageName;
        } else {
            $validation['image'] = $brand->image;
        }
        
        $brand->update($validateData);
        return redirect('/dashboard/brands')->with('success', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand = Brand::find($brand->id);
        if($brand->image) {
            Storage::delete('public/brands/'.$brand->image);
        }    
        $brand->delete();
        return redirect('/dashboard/brands')->with('success', 'Brand deleted successfully');
    }
}
