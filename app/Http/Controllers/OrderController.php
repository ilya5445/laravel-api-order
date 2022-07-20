<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return response()->json([
            'data' => $orders
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderStoreRequest $request)
    {
        try {

            Order::create([
                'full_name' => $request->full_name,
                'total_sum' => $request->total_sum,
                'delivery_address' => $request->delivery_address
            ]);

            return response()->json([
                'message' => "Order successfully created."
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => "Something went really wrong!"
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);

        if(!$order) {
            return response()->json([
                'message' => 'Order Not Found.'
            ], 404);
        }

        return response()->json([
            'data' => $order
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            $order = Order::find($id);

            if (!$order) return response()->json([
                'message' => 'Order Not Found.'
            ], 404);
    
            $order->update($request->all());
    
            return response()->json([
                'message' => "Order successfully updated."
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => "Something went really wrong!"
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);

        if (!$order) return response()->json([
            'message' => 'Order Not Found.'
        ], 404);

        $order->delete();

        return response()->json([
            'message' => "Order successfully deleted."
        ], 200);
    }
}
