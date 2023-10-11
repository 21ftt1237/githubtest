<x-app-layout>

     <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-gray dark:text-gray-200 leading-tight">
            {{ __('Order Status:') }}
        </h2>
    </x-slot>
      <div class="py-12">
        <div class="bg-blue dark:bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="min-h-screen bg-blue-200">
    <h1>Welcome to my page!</h1>
    </div>
    </div>
    </div>

     <div class="py-12">
        <div class="bg-blue dark:bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="min-h-screen bg-blue-200">
                <main>
                    <h1>Order List</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Status</th>
                                <th>Name</th>
                                <th>Total Price</th>
                                <th>Order Date & Time</th>
                                <th>Delivery Time</th>
                                <th>Delivery Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->delivery_status }}</td>
                                <td>{{ $order->name }}</td>
                                <td>${{ number_format($order->price, 2) }}</td>
                                <td>{{ $order->ordered_datetime->format('Y-m-d h:i A') }}</td>
                                <td>{{ $order->delivery_time != null ? $order->delivery_time->format('h:i A') : 'Not scheduled' }}</td>
                                <td>{{ $order->delivery_location }}</td>
                                <td class="track-order-link">
                                   <form method="post" action="{{ route('order_status') }}">
                                  @csrf
                             <input type="hidden" name="order_id" value="{{ $order->id }}">
                               <button type="submit">
                              {{ __('Track Order') }}
                                </button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>

</x-app-layout>
