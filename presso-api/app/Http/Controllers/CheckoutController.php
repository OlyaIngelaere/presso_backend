<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Capsule;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        return Order::all();
    }

    public function store(Request $request)
    {
        // your cart-to-order logic
    }

}