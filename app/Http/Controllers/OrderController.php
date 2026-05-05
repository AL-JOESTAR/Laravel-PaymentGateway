<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('home');
    }

    public function checkout(Request $request) {
        $request->request->add(['total_price' => $request->qty * 100000, 'status' => 'unpaid']);
        $order = Order::create($request->all());
    }
}
