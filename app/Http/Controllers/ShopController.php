<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Requests\UpdateShopRequest;
use App\Models\Order;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function authorizeShop(Request $request)
    {
        $payload = json_decode($request->getContent(), true);
        $shop = Shop::find($payload['shop_id']);
        if (!$shop) {
            return response()->json([
                'data' => null,
                'message' => 'Invalid Shop Id',
                'success' => false
            ]);
        } else {
            $shop->is_authorized = true;
            $shop->save();
            return response()->json([
                'data' => $shop,
                'message' => $payload['extra'],
                'success' => $payload['success']
            ]);
        }
    }
    public function updateOrderStatus(Request $request){
        $payload = json_decode($request->getContent(), true);
        $order = Order::where('trace_order_id', $payload['trace_order_id'])->first();
        $order->status = $request->order_status;
        $order->save();


    }
    public function orders(){
        return view('orders')
            ->with('orders',Order::all());
    }
    public function Shops(){
        return view('shops')
            ->with('shops',Shop::all());
    }
}
