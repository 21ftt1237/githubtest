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

   <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
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
        /* Updated CSS for the navigation menu/bar */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #04AA6D;
        }
    </style>
