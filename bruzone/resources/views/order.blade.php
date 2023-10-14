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
                                <th>User ID</th>
                                <th>Order Date & Time</th>
                                <th>Total Orders</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $previousUserId = null;
                                $previousDateTime = null;
                                $totalOrders = 0;
                                $totalPrice = 0;
                            @endphp
                            @foreach($orders as $order)
                                @if ($order->user_id != $previousUserId || $order->ordered_datetime != $previousDateTime)
                                    @if ($previousUserId !== null)
                                        <tr>
                                            <td>{{ $previousUserId }}</td>
                                            <td>{{ $previousDateTime->format('Y-m-d h:i A') }}</td>
                                            <td>{{ $totalOrders }}</td>
                                            <td>${{ number_format($totalPrice, 2) }}</td>
                                            
                                        </tr>
                                    @endif
                                    @php
                                        $previousUserId = $order->user_id;
                                        $previousDateTime = $order->ordered_datetime;
                                        $totalOrders = 1;
                                        $totalPrice = $order->price;
                                    @endphp
                                @else
                                    @php
                                        $totalOrders++;
                                        $totalPrice += $order->price;
                                    @endphp
                                @endif
                            @endforeach
                            @if ($previousUserId !== null)
                                <tr>
                                    <td>{{ $previousUserId }}</td>
                                    <td>{{ $previousDateTime->format('Y-m-d h:i A') }}</td>
                                    <td>{{ $totalOrders }}</td>
                                    <td>${{ number_format($totalPrice, 2) }}</td>
                                </tr>
                            @endif
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
       .button {
       text-color:blue;
       }
       @media screen and (max-width: 768px) {
    /* Define styles for mobile screens */
    .track-order-link {
        display: block; /* or any other suitable style */
    }
}
       
      
       
    </style>
