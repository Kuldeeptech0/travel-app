@extends('layout.adminlayout')
@section('content')
    @include('pages.admin.component.sidebar')

    <div class="p-4 sm:ml-64">
        <!-- Page Header -->
        <div class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Transaction History</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">View and manage all transaction records</p>
        </div>

        <!-- Stats Cards Row -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-white rounded-lg shadow p-4 dark:bg-gray-800">
                <h3 class="text-gray-500 text-sm">Total Transactions</h3>
                <p class="text-2xl font-bold">2,451</p>
                <span class="text-green-500 text-sm">+12.5% from last month</span>
            </div>
            <div class="bg-white rounded-lg shadow p-4 dark:bg-gray-800">
                <h3 class="text-gray-500 text-sm">Total Revenue</h3>
                <p class="text-2xl font-bold">$124,550</p>
                <span class="text-green-500 text-sm">+8.2% from last month</span>
            </div>
            <div class="bg-white rounded-lg shadow p-4 dark:bg-gray-800">
                <h3 class="text-gray-500 text-sm">Average Transaction</h3>
                <p class="text-2xl font-bold">$890</p>
                <span class="text-red-500 text-sm">-2.1% from last month</span>
            </div>
            <div class="bg-white rounded-lg shadow p-4 dark:bg-gray-800">
                <h3 class="text-gray-500 text-sm">Pending Transactions</h3>
                <p class="text-2xl font-bold">24</p>
                <span class="text-yellow-500 text-sm">5 require attention</span>
            </div>
        </div>

        <!-- Filters and Actions Bar -->
        <div class="bg-white p-4 rounded-lg shadow mb-6 dark:bg-gray-800">
            <div class="flex flex-wrap gap-4 justify-between items-center">
                <!-- Date Range Picker -->
                <div class="flex items-center gap-4">
                    <input type="date" class="rounded-lg border-gray-300 dark:bg-gray-700">
                    <span class="text-gray-500">to</span>
                    <input type="date" class="rounded-lg border-gray-300 dark:bg-gray-700">
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-3">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Export CSV
                    </button>
                    <button class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                        Print Report
                    </button>
                </div>
            </div>
        </div>

        <!-- Transaction Table -->
        <div class="bg-white rounded-lg shadow dark:bg-gray-800">
            <div class="p-4 border-b dark:border-gray-700">
                <div class="flex justify-between items-center">
                    <input type="search"
                           placeholder="Search transactions..."
                           class="rounded-lg border-gray-300 w-64 dark:bg-gray-700">
                    <select class="rounded-lg border-gray-300 dark:bg-gray-700">
                        <option>All Statuses</option>
                        <option>Completed</option>
                        <option>Pending</option>
                        <option>Failed</option>
                    </select>
                </div>
            </div>

            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3">Transaction ID</th>
                        <th class="px-6 py-3">Customer</th>
                        <th class="px-6 py-3">Amount</th>
                        <th class="px-6 py-3">Status</th>
                        <th class="px-6 py-3">Date</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample row - Repeat as needed -->
                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium">#TRX-789456</td>
                        <td class="px-6 py-4">john.doe@example.com</td>
                        <td class="px-6 py-4">$2,999</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4">2024-02-15</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:underline">View</button>
                            <button class="text-red-600 hover:underline ml-3">Delete</button>
                        </td>
                    </tr>
                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium">#TRX-785512</td>
                        <td class="px-6 py-4">sarah.wilson@gmail.com</td>
                        <td class="px-6 py-4">$1,499</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Completed</span>
                        </td>
                        <td class="px-6 py-4">2024-02-14</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:underline">View</button>
                            <button class="text-red-600 hover:underline ml-3">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium">#TRX-785513</td>
                        <td class="px-6 py-4">mike.brown@yahoo.com</td>
                        <td class="px-6 py-4">$3,299</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Pending</span>
                        </td>
                        <td class="px-6 py-4">2024-02-13</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:underline">View</button>
                            <button class="text-red-600 hover:underline ml-3">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium">#TRX-785514</td>
                        <td class="px-6 py-4">emma.davis@hotmail.com</td>
                        <td class="px-6 py-4">$899</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Completed</span>
                        </td>
                        <td class="px-6 py-4">2024-02-12</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:underline">View</button>
                            <button class="text-red-600 hover:underline ml-3">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium">#TRX-785515</td>
                        <td class="px-6 py-4">alex.turner@outlook.com</td>
                        <td class="px-6 py-4">$2,199</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Failed</span>
                        </td>
                        <td class="px-6 py-4">2024-02-11</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:underline">View</button>
                            <button class="text-red-600 hover:underline ml-3">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium">#TRX-785516</td>
                        <td class="px-6 py-4">lisa.zhang@gmail.com</td>
                        <td class="px-6 py-4">$1,799</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Completed</span>
                        </td>
                        <td class="px-6 py-4">2024-02-10</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:underline">View</button>
                            <button class="text-red-600 hover:underline ml-3">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium">#TRX-785517</td>
                        <td class="px-6 py-4">david.miller@yahoo.com</td>
                        <td class="px-6 py-4">$4,599</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Pending</span>
                        </td>
                        <td class="px-6 py-4">2024-02-09</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:underline">View</button>
                            <button class="text-red-600 hover:underline ml-3">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium">#TRX-785518</td>
                        <td class="px-6 py-4">sophia.garcia@outlook.com</td>
                        <td class="px-6 py-4">$999</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Completed</span>
                        </td>
                        <td class="px-6 py-4">2024-02-08</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:underline">View</button>
                            <button class="text-red-600 hover:underline ml-3">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium">#TRX-785519</td>
                        <td class="px-6 py-4">james.wilson@gmail.com</td>
                        <td class="px-6 py-4">$2,899</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Failed</span>
                        </td>
                        <td class="px-6 py-4">2024-02-07</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:underline">View</button>
                            <button class="text-red-600 hover:underline ml-3">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium">#TRX-785520</td>
                        <td class="px-6 py-4">olivia.smith@hotmail.com</td>
                        <td class="px-6 py-4">$1,299</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Completed</span>
                        </td>
                        <td class="px-6 py-4">2024-02-06</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:underline">View</button>
                            <button class="text-red-600 hover:underline ml-3">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium">#TRX-785521</td>
                        <td class="px-6 py-4">ryan.taylor@gmail.com</td>
                        <td class="px-6 py-4">$3,499</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Pending</span>
                        </td>
                        <td class="px-6 py-4">2024-02-05</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:underline">View</button>
                            <button class="text-red-600 hover:underline ml-3">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="p-4 border-t dark:border-gray-700">
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-700 dark:text-gray-400">
                        Showing 1 to 10 of 50 entries
                    </span>
                    <div class="flex gap-2">
                        <button class="px-3 py-1 rounded border dark:border-gray-600">Previous</button>
                        <button class="px-3 py-1 rounded border dark:border-gray-600">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
