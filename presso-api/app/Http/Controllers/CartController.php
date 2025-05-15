<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Capsule;

class CartController extends Controller
{
    /**
     * Show all items in cart
     */
    public function index()
    {
        return Cart::with('capsule')->get();    // include capsule details
    }

    /**
     * Add capsule to cart OR increase quantity if already exists
     */
    public function store(Request $request)
    {
        $request->validate([
            'capsule_id' => 'required|exists:capsules,id',
            'quantity' => 'required|integer|min:1'
        ]);

        // Check if item already exists
        $item = Cart::where('capsule_id', $request->capsule_id)->first();

        if ($item) {
            $item->quantity += $request->quantity;
            $item->save();
        } else {
            $item = Cart::create([
                'capsule_id' => $request->capsule_id,
                'quantity' => $request->quantity
            ]);
        }

        return response()->json($item->load('capsule'), 201);
    }

    /**
     * Update quantity of an item with the cart line ID
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $item = Cart::findOrFail($id);
        $item->quantity = $request->quantity;
        $item->save();

        return response()->json($item->load('capsule'));
    }

    /**
     * Remove item from cart
     */
    public function destroy($id)
    {
        $item = Cart::findOrFail($id);
        $item->delete();

        return response()->json(['message' => 'Item removed from cart']);
    }
}