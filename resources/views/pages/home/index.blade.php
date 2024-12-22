@extends('layout.mainlayout')

@section('content')
    <!-- Hero Section with Image Slider -->
    <div class="relative">
        @include('pages.home.imageslider')
    </div>
    <!-- Search Section - Now Below Slider -->
    <div class="bg-gray-100 py-12">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-6 text-center">Find Your Perfect Tour Package</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="md:col-span-1">
                        <label class="block text-gray-700 mb-2 font-medium">Destination</label>
                        <select class="w-full p-3 rounded-lg border-2 focus:border-blue-500">
                            <option>Select Location</option>
                            <option>Darjeeling</option>
                            <option>Sikkim</option>
                            <option>Kalimpong</option>
                            <option>Kalijhora</option>
                        </select>
                    </div>
                    <div class="md:col-span-1">
                        <label class="block text-gray-700 mb-2 font-medium">Choose Your Journey Date</label>
                        <input type="date" class="w-full p-3 rounded-lg border-2 focus:border-blue-500">
                    </div>
                    <div class="md:col-span-1">
                        <label class="block text-gray-700 mb-2 font-medium">Duration</label>
                        <select class="w-full p-3 rounded-lg border-2 focus:border-blue-500">
                            <option>Select Days</option>
                            <option>2-3 Days</option>
                            <option>4-5 Days</option>
                            <option>6-7 Days</option>
                            <option>8+ Days</option>
                        </select>
                    </div>
                    <div class="md:col-span-1">
                        <label class="block text-gray-700 mb-2 font-medium">Search</label>
                        <button class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition mt-[1px]">
                            Search Packages
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Packages Section with Enhanced Design -->
    <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-blue-600 font-semibold text-sm tracking-wider uppercase">Featured Tours</span>
                <h2 class="text-4xl font-bold mt-2">Popular Tour Packages</h2>
                <p class="text-gray-600 mt-4">Explore our most booked destinations</p>
            </div>
            <!-- Popular Package Cards with Hot Deals -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
                <!-- Darjeeling Hot Deal Package -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group h-full">
                    <div class="relative h-[250px]">
                        <img src="{{asset('asset/images/darjeeling-4998356.jpg')}}" class="absolute w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Hot Deal - 20% OFF
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-2xl font-bold">Darjeeling Explorer</h3>
                            <div class="text-2xl font-bold text-blue-600">₹29,999</div>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">★★★★★</div>
                            <span class="text-gray-600 ml-2">(128 reviews)</span>
                        </div>
                        <p class="text-gray-600 mb-4">Experience the Queen of Hills with Tiger Hill sunrise and tea gardens.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm">5 Days</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm">4★ Hotels</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm">All Meals</span>
                        </div>
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Book Now</button>
                    </div>
                </div>

                <!-- Sikkim Adventure Package -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group h-full">
                    <div class="relative h-[250px]">
                        <img src="{{asset('asset/images/small-town-near-blue-body-water-surrounded-by-beautiful-mountains.jpg')}}" class="absolute w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Flash Sale - 15% OFF
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-2xl font-bold">Sikkim Adventure</h3>
                            <div class="text-2xl font-bold text-blue-600">₹34,999</div>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">★★★★★</div>
                            <span class="text-gray-600 ml-2">(96 reviews)</span>
                        </div>
                        <p class="text-gray-600 mb-4">Explore Gangtok, Nathula Pass and serene lakes.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm">7 Days</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm">4★ Hotels</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm">All Meals</span>
                        </div>
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Book Now</button>
                    </div>
                </div>

                <!-- Adventure Package -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group h-full">
                    <div class="relative h-[250px]">
                        <img src="{{asset('asset/images/tourism-leisure-survival-scout-freedom.jpg')}}" class="absolute w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Early Bird - 25% OFF
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-2xl font-bold">Adventure Trek</h3>
                            <div class="text-2xl font-bold text-blue-600">₹24,999</div>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">★★★★★</div>
                            <span class="text-gray-600 ml-2">(84 reviews)</span>
                        </div>
                        <p class="text-gray-600 mb-4">Thrilling trekking and camping experience in the Himalayas.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm">4 Days</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm">Camping</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm">Meals</span>
                        </div>
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Luxury Package Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Glenburn Tea Estate Luxury Stay -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <div class="relative">
                        <img src="{{asset('asset/images/glenburn.jpg')}}" class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">

                        <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-full">
                            Premium
                        </div>
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                            <span class="text-blue-600 font-bold">₹49,999</span>
                            <span class="text-gray-600">/person</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Glenburn Tea Estate</h3>
                        <p class="text-gray-600 mb-4">Luxury colonial tea estate experience with Kanchenjunga views.</p>
                        <div class="space-y-4">
                            <div class="flex items-center text-gray-600">
                                <span class="mr-2">🌟</span> 5-Star Luxury Accommodation
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="mr-2">🍽️</span> Gourmet Dining
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="mr-2">🌿</span> Private Tea Tasting
                            </div>
                        </div>
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition mt-6">
                            Book Luxury Stay
                        </button>
                    </div>
                </div>

                <!-- Mayfair Darjeeling -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <div class="relative">
                        <img src="{{asset('asset/images/mayfair.jpg')}}" class="w-full h-72 object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-full">
                            Premium
                        </div>
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                            <span class="text-blue-600 font-bold">₹45,999</span>
                            <span class="text-gray-600">/person</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Mayfair Resort Experience</h3>
                        <p class="text-gray-600 mb-4">Heritage luxury in the heart of Darjeeling.</p>
                        <div class="space-y-4">
                            <div class="flex items-center text-gray-600">
                                <span class="mr-2">🏰</span> Heritage Property
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="mr-2">💆</span> Spa & Wellness
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="mr-2">🎯</span> Premium Activities
                            </div>
                        </div>
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition mt-6">
                            Book Luxury Stay
                        </button>
                    </div>
                </div>

                <!-- Sinclair Darjeeling -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                    <div class="relative">
                        <img src="{{asset('asset/images/sinclair.jpg')}}" class="w-full h-72 object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-full">
                            Premium
                        </div>
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                            <span class="text-blue-600 font-bold">₹42,999</span>
                            <span class="text-gray-600">/person</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Sinclair Retreat</h3>
                        <p class="text-gray-600 mb-4">Modern luxury with traditional charm.</p>
                        <div class="space-y-4">
                            <div class="flex items-center text-gray-600">
                                <span class="mr-2">🌅</span> Premium Valley View
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="mr-2">🍷</span> Fine Dining
                            </div>
                            <div class="flex items-center text-gray-600">
                                <span class="mr-2">🎭</span> Cultural Experiences
                            </div>
                        </div>
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition mt-6">
                            Book Luxury Stay
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section -->
    <div class="bg-gray-50 py-16 mt-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-blue-600 font-semibold text-sm tracking-wider uppercase">Experience The Best</span>
                <h2 class="text-4xl font-bold mt-2">Why Travel With Us?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Expert Local Guides -->
                <div class="text-center">
                    <div class="bg-white rounded-full p-6 w-24 h-24 mx-auto mb-6 shadow-lg">
                        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Expert Local Guides</h3>
                    <p class="text-gray-600">Our guides are certified locals with years of experience, ensuring authentic and enriching experiences.</p>
                </div>

                <!-- Customized Experiences -->
                <div class="text-center">
                    <div class="bg-white rounded-full p-6 w-24 h-24 mx-auto mb-6 shadow-lg">
                        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Tailored For You</h3>
                    <p class="text-gray-600">Every package can be customized to match your preferences, creating your perfect travel story.</p>
                </div>

                <!-- Best Value -->
                <div class="text-center">
                    <div class="bg-white rounded-full p-6 w-24 h-24 mx-auto mb-6 shadow-lg">
                        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Best Price Guarantee</h3>
                    <p class="text-gray-600">Get unbeatable value with our price match promise and early bird discounts.</p>
                </div>
            </div>

            <!-- Testimonial Section -->
            <div class="mt-20 bg-white rounded-xl shadow-lg p-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h3 class="text-2xl font-bold mb-8">What Our Travelers Say</h3>
                    <p class="text-xl text-gray-600 italic mb-6">"The attention to detail and local knowledge made our Darjeeling trip unforgettable. From sunrise at Tiger Hill to tea tasting at heritage estates, every moment was perfect!"</p>
                    <div class="flex items-center justify-center">
                        <img src="{{asset('asset/images/dummy_people.jpg')}}" alt="Happy Traveler" class="w-16 h-16 rounded-full mr-4">
                        <div class="text-left">
                            <div class="font-bold">Sarah Johnson</div>
                            <div class="text-gray-600">Traveled April 2023</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Travel Tips Section -->
            <div class="mt-20">
                <h3 class="text-2xl font-bold mb-8 text-center">Essential Travel Tips</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <h4 class="font-bold mb-4">Best Time to Visit</h4>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">●</span>
                                March to May: Perfect for clear mountain views
                            </li>
                            <li class="flex items-center">
                                <span class="text-orange-500 mr-2">●</span>
                                September to November: Ideal for outdoor activities
                            </li>
                            <li class="flex items-center">
                                <span class="text-blue-500 mr-2">●</span>
                                December to February: Snow and winter sports
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <h4 class="font-bold mb-4">What to Pack</h4>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">●</span>
                                Comfortable walking shoes
                            </li>
                            <li class="flex items-center">
                                <span class="text-orange-500 mr-2">●</span>
                                Layered clothing for varying temperatures
                            </li>
                            <li class="flex items-center">
                                <span class="text-blue-500 mr-2">●</span>
                                Camera for stunning mountain views
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
