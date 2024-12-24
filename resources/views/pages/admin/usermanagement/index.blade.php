@extends('layout.adminlayout')
@section('content')
    @include('pages.admin.component.sidebar')

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg bg-gray-50">
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">User Management</h2>
                    <p class="text-gray-600 mt-1">Monitor and manage user accounts</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3">
                    <div class="relative">
                        <input type="text"
                               class="w-full sm:w-72 pl-11 pr-4 py-2.5 rounded-lg border-2 border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200 bg-white"
                               placeholder="Search users...">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </div>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-lg font-medium transition duration-200 flex items-center justify-center gap-2">
                        Export Users
                    </button>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total Users</p>
                            <p class="text-2xl font-bold text-gray-900">1,234</p>
                        </div>
                        <div class="p-3 bg-blue-50 rounded-lg">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Active Users</p>
                            <p class="text-2xl font-bold text-green-600">1,180</p>
                        </div>
                        <div class="p-3 bg-green-50 rounded-lg">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Blocked Users</p>
                            <p class="text-2xl font-bold text-red-600">54</p>
                        </div>
                        <div class="p-3 bg-red-50 rounded-lg">
                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm font-medium text-gray-500">New Today</p>
                            <p class="text-2xl font-bold text-blue-600">12</p>
                        </div>
                        <div class="p-3 bg-blue-50 rounded-lg">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Table with reduced size -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">User Details</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">Contact Info</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">Location</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">Status</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <!-- User Row 1 -->
                            <tr class="hover:bg-gray-50 transition duration-200">
                                <td class="px-4 py-3">
                                    <div class="flex items-center gap-3">
                                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=6366f1&color=fff"
                                              class="w-8 h-8 rounded-full">
                                        <div>
                                            <p class="font-medium text-gray-900">John Doe</p>
                                            <p class="text-xs text-gray-500">#USER1001</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <p class="text-gray-900">john@example.com</p>
                                    <p class="text-xs text-gray-500">+1 234-567-8900</p>
                                </td>
                                <td class="px-4 py-3">
                                    <p class="text-gray-900">New York</p>
                                    <p class="text-xs text-gray-500">United States</p>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex gap-2">
                                        <button class="text-gray-400 hover:text-blue-600 transition-colors duration-200">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </svg>
                                        </button>
                                        <button class="text-gray-400 hover:text-red-600 transition-colors duration-200">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- User Row 2 -->
                            <tr class="hover:bg-gray-50 transition duration-200">
                                <td class="px-4 py-3">
                                    <div class="flex items-center gap-3">
                                        <img src="https://ui-avatars.com/api/?name=Sarah+Smith&background=14b8a6&color=fff"
                                              class="w-8 h-8 rounded-full">
                                        <div>
                                            <p class="font-medium text-gray-900">Sarah Smith</p>
                                            <p class="text-xs text-gray-500">#USER1002</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <p class="text-gray-900">sarah@example.com</p>
                                    <p class="text-xs text-gray-500">+1 234-567-8901</p>
                                </td>
                                <td class="px-4 py-3">
                                    <p class="text-gray-900">London</p>
                                    <p class="text-xs text-gray-500">United Kingdom</p>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        Blocked
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex gap-2">
                                        <button class="text-gray-400 hover:text-blue-600 transition-colors duration-200">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </svg>
                                        </button>
                                        <button class="text-gray-400 hover:text-green-600 transition-colors duration-200">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Add more user rows with different data -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
