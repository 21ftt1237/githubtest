<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime; // Import DateTime class

class OrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')->get();

        foreach ($orders as $order) {
            // Convert ordered_datetime to a DateTime object
            $order->ordered_datetime = new DateTime($order->ordered_datetime);
            $order->delivery_time = new DateTime($order->delivery_time);
           
        }

        return view('order', compact('orders'));
    }
}
