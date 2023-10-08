<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gray-200">
        <main>
            <h1>Order List</h1>
            <table>
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Order Date & Time</th>
                        <th>Delivery Time</th>
                        <th>Delivery Location</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
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
</x-app-layout>
