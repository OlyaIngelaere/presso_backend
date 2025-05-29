<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;

class CheckoutController extends Controller
{
    
    public function index(Request $request)
    {
        return Order::all();
    }
    
    
    
    /**
     * Receive full cart and create order
     * Clear cart after order is saved
     */
    public function store(Request $request)
    {
        // get cart items directly from database
        $cartItems = Cart::with('capsule')->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Cart is empty'], 400);
        }

        // Create order
        $order = Order::create([
            'order_data' => $cartItems->map(function($item) {
                return [
                    'capsule_id' => $item->capsule_id,
                    'capsule_name' => $item->capsule->name,
                    'quantity' => $item->quantity
                ];
            })->toArray()
        ]);

        // Clear cart
        Cart::truncate();

        return response()->json([
            'message' => 'Order placed successfully!',
            'order' => $order
        ], 201);
    }
}
