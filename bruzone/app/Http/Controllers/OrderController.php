<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime; // Import DateTime class
use App\Order; // Import the Order model

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = DB::table('orders')->get();
        $incompleteOrderCount = DB::table('orders')->where('delivery_status', 'incomplete')->count();

        foreach ($orders as $order) {
            // Convert ordered_datetime to a DateTime object
            $order->ordered_datetime = new DateTime($order->ordered_datetime);
            if ($order->delivery_time != null) {
                $order->delivery_time = new DateTime($order->delivery_time);
            } else {
                $order->delivery_time = null; // Set it to null for cases with no scheduled time.
            }
        }

        return view('order', compact('orders', 'incompleteOrderCount'));
    }

   public function track(Request $request)
{
    $order_id = $request->input('order_id');
    
   
    
    return view('order_status', compact('order'));
}
}
