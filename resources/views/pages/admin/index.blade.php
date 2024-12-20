@extends('layout.adminlayout')

@section('content')
<div class="flex">
    <!-- Sidebar -->
    @include('pages.admin.component.sidebar')

    <!-- Main Content Area -->
    <div class="flex-1 ml-64"> <!-- Added ml-64 for sidebar width offset -->
        <!-- Top Navigation Bar -->
        <nav class="bg-white shadow-md px-6 py-4 fixed right-0 left-64 z-10"> <!-- Fixed nav with left offset -->
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Admin Name</span>
                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin" alt="Admin">
                </div>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="p-6 mt-16"> <!-- Added top margin to account for fixed nav -->
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <!-- Existing cards remain unchanged -->
            </div>

            <!-- Recent Activity Section -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                <h4 class="text-lg font-semibold text-gray-800 mb-4">Recent Bookings</h4>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Destination</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Payment Status</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                                <td class="px-6 py-4 whitespace-nowrap">Paris, France</td>
                                <td class="px-6 py-4 whitespace-nowrap">2024-02-15</td>
                                <td class="px-6 py-4 whitespace-nowrap">$1,200</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Confirmed</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                                <td class="px-6 py-4 whitespace-nowrap">Rome, Italy</td>
                                <td class="px-6 py-4 whitespace-nowrap">2024-03-20</td>
                                <td class="px-6 py-4 whitespace-nowrap">$950</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Pending</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Sales Report Graph -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h4 class="text-lg font-semibold text-gray-800 mb-4">Sales Report</h4>
                <canvas id="salesReportChart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('salesReportChart').getContext('2d');
    const salesReportChart = new Chart(ctx, {
        type: 'line', // Change to 'bar', 'pie', etc., as needed
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'], // Example months
            datasets: [{
                label: 'Revenue ($)',
                data: [1200, 1900, 3000, 5000, 2300, 4200], // Example data
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                tension: 0.4,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                },
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Months',
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Revenue ($)',
                    }
                }
            }
        }
    });
</script>
@endpush
