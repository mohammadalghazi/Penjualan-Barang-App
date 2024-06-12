<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Brand::orderBy('created_at', 'desc')->paginate(20);
        return view('dashboard.brand.index',[
            "title" => "Brands", "data" => $brand
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.brand.create', [
            "title" => "Create Brand",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        // dd($request->validated());
        $validateData = $request->validated();
        $code = Carbon::now()->format('YmdHis') . mt_rand(100000, 999999);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() .'.'. uniqid() .'.'. $image->getClientOriginalExtension();
            $image->storeAs('public/Brands', $imageName);
            $validateData['image'] = $imageName;
        } else {
            $validateData['image'] = null;
        }

        $validateData['code'] = $code;

        Brand::create($validateData);
        
        return redirect()->route('brands.index')->with('response', ['status' => 'success', 'messages' => 'Brand created successfully']);
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
            Storage::delete('public/Brands'.$oldImage);
            $image = $request->file('image');
            $imageName = time().'.'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/Brands', $imageName);
            $validateData['image'] = $imageName;
        } else {
            $validateData['image'] = $brand->image;
        }
        
        $brand->update($validateData);
        return redirect('brands.index')->with('response',['status' => 'success', 'messages' => 'Brand updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand = Brand::find($brand->id);
        if($brand->image) {
            Storage::delete('public/Brands'.$brand->image);
        }    
        $brand->delete();
        return redirect('brands.index')->with('response',['status' => 'success', 'messages' => 'Brand updated successfully']);
    }
}
