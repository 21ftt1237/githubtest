<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-gray dark:text-gray-200 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="bg-blue dark:bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="min-h-screen bg-blue-200">
        <main>
            <h1>Order List</h1>
            <table>
                <thead>
                    <tr>
                        <th>order ID</th>
                        <th>User ID</th>
                        <th>Status</th>
                        <th>Name</th>
                        <th>Total Price</th>
                        <th>Order Date & Time</th>
                        <th>Delivery Time</th>
                        <th>Delivery Location</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                       
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->delivery_status }}</td>
                        <td>{{ $order->name }}</td>
                        <td>${{ number_format($order->price, 2) }}</td>
                        <td>{{ $order->ordered_datetime->format('Y-m-d h:i A') }}</td>
                        <td>{{ $order->delivery_time != null ? $order->delivery_time->format('h:i A') : 'Not scheduled' }}</td>
                        <td>{{ $order->delivery_location }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
             </div>
    </div>
</x-app-layout>

   <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        /* Updated CSS for the logo placement */
        .logo {
            position: absolute;
            top: 0;
            left: 0;
            margin: 20px; /* Adjust margin as needed */
        }
        .notification-badge {
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 4px 8px;
            position: absolute;
            top: 0;
            right: 0;
            font-size: 14px;
        }
       main{
           background-color:white;
       }
      
       
    </style>
