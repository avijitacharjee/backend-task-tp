<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders(){
        return view('orders')
            ->with('orders',Order::all());
    }
    public function updateOrderStatus(Request $request){
        $payload = json_decode($request->getContent(), true);
        $order = Order::where('trade_order_id', $payload['data']['trade_order_id'])->first();
        if(!$order){
            return response()->json([
                'data' => null,
                'message' => 'Invalid Oder Id',
                'success' => false
            ]);
        }else {
            $order->status = $payload['data']['order_status'];
            $order->save();
            return response()->json([
                'data' => $order,
                'message' => 'Successfully Saved',
                'success' => true
            ]);
        }
    }
}
