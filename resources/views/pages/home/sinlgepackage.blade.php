@extends('layout.mainlayout')
@section('content')
<div class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-7xl mx-auto">
            <!-- Package Header with Enhanced Styling -->
            <div class="mb-8 text-center">
                <h1 class="text-5xl font-bold text-gray-800 mb-4">Darjeeling Explorer Package</h1>
                <div class="flex items-center justify-center gap-4">
                    <div class="flex items-center bg-white px-4 py-2 rounded-full shadow-sm">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="ml-2 font-semibold">4.8</span>
                        </div>
                        <span class="mx-2 text-gray-400">|</span>
                        <span class="text-gray-600">120 reviews</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Content Section -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Enhanced Image Gallery -->
                    <div class="grid grid-cols-12 gap-4 rounded-2xl overflow-hidden">
                        <div class="col-span-12 h-[500px] relative group">
                            <img src="{{ asset('asset/images/darjeeling-4998356.jpg') }}" alt="Main Package View" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/30"></div>
                        </div>
                        <div class="col-span-6 h-80 overflow-hidden rounded-xl">
                            <img src="{{ asset('asset/images/darjeeling-4998356.jpg') }}" alt="Package View" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="col-span-6 h-80 overflow-hidden rounded-xl">
                            <img src="{{ asset('asset/images/darjeeling-4998356.jpg') }}" alt="Package View" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                        </div>
                    </div>

                    <!-- Enhanced Package Details -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <div class="prose max-w-none">
                            <h2 class="text-3xl font-bold mb-6 text-gray-800">About This Package</h2>
                            <p class="text-gray-600 text-lg leading-relaxed">Experience the enchanting beauty of Darjeeling with our meticulously curated package. Immerse yourself in the rich culture, breathtaking landscapes, and unforgettable experiences that await you in this himalayan paradise.</p>

                            <div class="my-8">
                                <h3 class="text-2xl font-bold mb-4 flex items-center gap-2">
                                    <span class="text-2xl">✨</span> Highlights
                                </h3>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="flex items-center gap-3 bg-blue-50 p-4 rounded-xl">
                                        <span class="text-blue-600">●</span>
                                        <span>World-famous Tea Gardens</span>
                                    </div>
                                    <div class="flex items-center gap-3 bg-blue-50 p-4 rounded-xl">
                                        <span class="text-blue-600">●</span>
                                        <span>Tiger Hill Sunrise</span>
                                    </div>
                                    <div class="flex items-center gap-3 bg-blue-50 p-4 rounded-xl">
                                        <span class="text-blue-600">●</span>
                                        <span>Himalayan Railway Ride</span>
                                    </div>
                                    <div class="flex items-center gap-3 bg-blue-50 p-4 rounded-xl">
                                        <span class="text-blue-600">●</span>
                                        <span>Local Cuisine Experience</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Enhanced Itinerary Section -->
                            <div class="space-y-6">
                                <h3 class="text-2xl font-bold flex items-center gap-2">
                                    <span class="text-2xl">🗓️</span> Your Journey
                                </h3>
                                <div class="space-y-4">
                                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                                        <h4 class="font-bold text-xl text-blue-600 mb-2">Day 1: Welcome to Darjeeling</h4>
                                        <p class="text-gray-600">Luxury airport pickup, traditional welcome ceremony, and gourmet dinner with mountain views</p>
                                    </div>
                                    <!-- Add more days similarly -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Booking Section -->
                <div class="lg:col-span-1">
                    <div class="sticky top-4 bg-white rounded-2xl shadow-xl p-6 border border-gray-100">
                        <div class="text-center mb-6 bg-blue-50 py-4 rounded-xl">
                            <span class="text-4xl font-bold text-blue-600">$599</span>
                            <span class="text-gray-600 block text-sm">per person</span>
                        </div>

                        <!-- Enhanced Booking Form -->
                        <form class="space-y-6">
                            <!-- Form fields remain same but with improved styling -->
                            <!-- Add your existing form fields here -->

                            <button class="w-full bg-blue-600 text-white px-6 py-4 rounded-xl hover:bg-blue-700 transform hover:scale-105 transition-all duration-300 font-medium text-lg">
                                Book Your Adventure
                            </button>
                        </form>

                        <!-- Enhanced Features Section -->
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <h4 class="font-semibold text-gray-800 mb-4">What's Included:</h4>
                            <div class="space-y-4">
                                <!-- Add your existing features with enhanced styling -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add the new section here -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mt-8">
                <!-- ... all the new content (Recent Bookings, Calendar, Tabs, Weather) ... -->
            </div>

        </div>
    </div>
</div>
@endsection
