<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gray-200">
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- Your header content goes here -->
                <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-200">Welcome to Our Website</h1>
            </div>
        </header>


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
                    <tr>
                        <td>Complete</td>
                        <td>Item 1</td>
                        <td>$10.99</td>
                        <td>2023-10-06 09:30 AM</td>
                        <td>2:00 PM</td>
                        <td>123 Main St, City</td>
                    </tr>
                    <tr>
                        <td>Incomplete</td>
                        <td>Item 2</td>
                        <td>$19.99</td>
                        <td>2023-10-06 11:45 AM</td>
                        <td>Not scheduled</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Complete</td>
                        <td>Item 3</td>
                        <td>$15.49</td>
                        <td>2023-10-06 01:15 PM</td>
                        <td>3:30 PM</td>
                        <td>456 Elm St, Town</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </main>
        </div>
    </div>
</x-app-layout>
