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

    public function showStatus($user_id, $order_date)
{
    // Fetch the list of items for the specified user ID and order date
    $items = OrderItem::where('user_id', $user_id)
        ->where('order_date', $order_date)
        ->get();

    // Return the view with the list of items
    return view('order_status', ['items' => $items]);
}
}
