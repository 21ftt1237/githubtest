<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = DB::table('orders')->get();
        $incompleteOrderCount = DB::table('orders')->where('delivery_status', 'incomplete')->count();

        foreach ($orders as $order) {
            $order->ordered_datetime = new DateTime($order->ordered_datetime);
            if ($order->delivery_time != null) {
                $order->delivery_time = new DateTime($order->delivery_time);
            } else {
                $order->delivery_time = null;
            }
        }

        return view('order', compact('orders', 'incompleteOrderCount'));
    }

    public function track(Request $request)
    {
        $order_id = $request->input('order_id');

        // Retrieve the order data directly from the database
        $order = DB::table('orders')->where('id', $order_id)->first();

        if ($order) {
            // Convert date/time fields to DateTime objects if needed
            $order->ordered_datetime = new DateTime($order->ordered_datetime);
            if ($order->delivery_time != null) {
                $order->delivery_time = new DateTime($order->delivery_time);
            }

            return view('order_status', compact('orders'));
        } else {
            // Handle the case where the order doesn't exist, e.g., redirect or display an error message.
        }
    }
}
