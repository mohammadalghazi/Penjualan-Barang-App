<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $orders = Order::all();
       return view('dashboard.orders.index', [
           'title' => 'Orders', 
           'orders' => $orders
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.orders.create', [
            "title" => "Create Order"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $validateData = $request->validated();
        Order::create($validateData);
        return redirect('/orders')->with(
            'response', [
                'status' => 'success',
                'messages' => 'Order created successfully'
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $orders = Order::find($order->id);
        return view('dashboard.orders.show', [
            "title" => "Detail Order", 
            "order" => $orders
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $orders = Order::find($order->id);
        return view('dashboard.orders.edit', [
            "title" => "Edit Order", 
            "order" => $orders
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $validateData = $request->validated();
        $order->update($validateData);
        return redirect('/orders')->with(
            'response', [
                'status' => 'success',
                'messages' => 'Order updated successfully'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect('/orders')->with(
            'response', [
                'status' => 'success',
                'messages' => 'Order deleted successfully'
            ]);
    }
}
