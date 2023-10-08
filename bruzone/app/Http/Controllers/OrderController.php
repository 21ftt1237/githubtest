<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Your code for handling the "order" page goes here
        return view('order'); // This assumes you have a "order.blade.php" view file
    }
}
