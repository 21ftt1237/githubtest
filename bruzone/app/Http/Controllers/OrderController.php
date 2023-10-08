<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class OrderController extends Controller
{
    public function index()
    {
        // Use the DB facade to fetch data from the "orders" table
        $orders = DB::table('orders')->get();

        return view('order', compact('orders'));
    }
}
