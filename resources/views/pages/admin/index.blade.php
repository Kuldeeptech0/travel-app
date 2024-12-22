@extends('layout.adminlayout')

@section('content')
<div class="flex">
    @include('pages.admin.component.sidebar')

    <div class="flex-1 ml-64 bg-gray-100 min-h-screen">
        <nav class="bg-white shadow-md px-6 py-4 fixed right-0 left-64 z-10">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-gray-800">Travel Dashboard</h2>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Welcome, Admin</span>
                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin" alt="Admin">
                </div>
            </div>
        </nav>

        <div class="p-6 mt-16">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-gray-500 text-sm">Total Revenue</h3>
                    <p class="text-2xl font-bold">₹8,45,290</p>
                    <span class="text-green-500 text-sm">+12.5% from last month</span>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-gray-500 text-sm">Active Bookings</h3>
                    <p class="text-2xl font-bold">245</p>
                    <span class="text-green-500 text-sm">+8.1% from last week</span>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-gray-500 text-sm">Total Users</h3>
                    <p class="text-2xl font-bold">1,890</p>
                    <span class="text-green-500 text-sm">+5.4% new users</span>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-gray-500 text-sm">Destinations</h3>
                    <p class="text-2xl font-bold">48</p>
                    <span class="text-blue-500 text-sm">Active locations</span>
                </div>
            </div>
            <!-- Replace the existing graph and destinations section with this -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <!-- Circular Revenue Graph -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-lg font-semibold mb-4">Revenue Distribution</h4>
                    <div style="height: 300px;"> <!-- Fixed height container -->
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>

                <!-- Monthly Bookings Graph -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-lg font-semibold mb-4">Monthly Bookings</h4>
                    <div style="height: 300px;"> <!-- Fixed height container -->
                        <canvas id="barChart"></canvas>
                    </div>
                </div>

                <!-- Top Destinations -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-lg font-semibold mb-4">Popular Destinations</h4>
                    <div class="space-y-4">
                        <div class="relative rounded-lg overflow-hidden h-24">
                            <img src="{{asset('asset/images/darjeeling-4998356.jpg')}}" class="w-full h-full object-cover" alt="Darjeeling">
                            <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-2">
                                <p class="font-semibold">Darjeeling</p>
                            </div>
                        </div>
                        <div class="relative rounded-lg overflow-hidden h-24">
                            <img src="{{asset('asset/images/small-town-near-blue-body-water-surrounded-by-beautiful-mountains.jpg')}}" class="w-full h-full object-cover" alt="Sikkim">
                            <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-2">
                                <p class="font-semibold">Sikkim</p>
                            </div>
                        </div>
                        <div class="relative rounded-lg overflow-hidden h-24">
                            <img src="{{asset('asset/images/tourism-leisure-survival-scout-freedom.jpg')}}" class="w-full h-full object-cover" alt="Kalijhora">
                            <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-2">
                                <p class="font-semibold">Kalijhora</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Bookings Table -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h4 class="text-lg font-semibold mb-4">Recent Bookings</h4>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Customer</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Destination</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Duration</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Amount</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4">Rahul Sharma</td>
                                <td class="px-6 py-4">Darjeeling</td>
                                <td class="px-6 py-4">5 Days</td>
                                <td class="px-6 py-4">₹25,000</td>
                                <td class="px-6 py-4"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full">Active</span></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">Priya Patel</td>
                                <td class="px-6 py-4">Sikkim</td>
                                <td class="px-6 py-4">7 Days</td>
                                <td class="px-6 py-4">₹35,000</td>
                                <td class="px-6 py-4"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Pie Chart
        const pieCtx = document.getElementById('pieChart');
        new Chart(pieCtx, {
            type: 'doughnut',
            data: {
                labels: ['Darjeeling', 'Sikkim', 'Kalijhora', 'Gangtok'],
                datasets: [{
                    data: [30, 25, 20, 25],
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });

        // Bar Chart
        const barCtx = document.getElementById('barChart');
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Bookings',
                    data: [65, 59, 80, 81, 56],
                    backgroundColor: '#36A2EB'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endsection
