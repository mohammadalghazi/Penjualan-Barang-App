<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Http\Requests\StoreDiscountRequest;
use App\Http\Requests\UpdateDiscountRequest;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discount = Discount::paginate(20);
        return view('dashboard.discounts.index', [
            'title' => 'Discounts', 'data' => $discount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.discounts.create', [
            'title' => 'Create Discount'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiscountRequest $request)
    {
        $validateData = $request->validated();
        Discount::create($validateData);
        return redirect('dashboard.discounts.index')->with('success', 'Discount created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Discount $discount)
    {
        $discount = Discount::find($discount->id);
        return view('dashboard.discounts.show', [
            'title' => 'Detail Discount', 'discount' => $discount
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discount $discount)
    {
        $discount = Discount::find($discount->id);
        if(!$discount) {
            return response()->json(['message' => 'Discount not found'], 404);
        }
        return view('dashboard.discounts.edit', [
            'title' => 'Edit Discount', 'discount' => $discount
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiscountRequest $request, Discount $discount)
    {
        $discount = Discount::find($discount->id);
        $validateData = $request->validated();
        $discount->update($validateData);
        return redirect('dashboard.discounts.index')->with('success', 'Discount updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();
        return redirect('dashboard.discounts.index')->with('success', 'Discount deleted successfully');
    }
}
