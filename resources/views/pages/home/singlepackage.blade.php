@extends('layout.mainlayout')
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Main Grid Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Content Column -->
        <div class="lg:col-span-2">
            <!-- Image Gallery Grid -->
            <div class="grid grid-cols-2 gap-4 mb-8">
                <!-- Featured Large Image -->
                <div class="col-span-2 h-[400px]">
                    <img src="{{asset('asset/images/darjeeling-4998356.jpg')}}"
                         class="w-full h-full object-cover rounded-xl shadow-lg"
                         alt="Darjeeling Main View">
                </div>
                <!-- Smaller Image Grid -->
                <div class="h-[200px]">
                    <img src="{{asset('asset/images/darjeeling.jpg')}}"
                         class="w-full h-full object-cover rounded-xl shadow-lg"
                         alt="Darjeeling View">
                </div>
                <div class="h-[200px]">
                    <img src="{{asset('asset/images/small-town-near-blue-body-water-surrounded-by-beautiful-mountains.jpg')}}"
                         class="w-full h-full object-cover rounded-xl shadow-lg"
                         alt="Mountain View">
                </div>
                <div class="h-[200px]">
                    <img src="{{asset('asset/images/tourism-leisure-survival-scout-freedom.jpg')}}"
                         class="w-full h-full object-cover rounded-xl shadow-lg"
                         alt="Tourism View">
                </div>
                <div class="h-[200px]">
                    <img src="{{asset('asset/images/darjeeling-4998356.jpg')}}"
                         class="w-full h-full object-cover rounded-xl shadow-lg"
                         alt="Additional View">
                </div>
            </div>

            <!-- Package Title and Details -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Darjeeling Adventure Package</h1>
                <div class="grid grid-cols-3 gap-4 mb-6">
                    <div class="flex items-center bg-blue-50 p-3 rounded-lg">
                        <i class="fas fa-clock text-blue-600 mr-3"></i>
                        <div>
                            <p class="text-sm text-gray-500">Duration</p>
                            <p class="font-semibold">7 Days</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-green-50 p-3 rounded-lg">
                        <i class="fas fa-users text-green-600 mr-3"></i>
                        <div>
                            <p class="text-sm text-gray-500">Group Size</p>
                            <p class="font-semibold">Max 12</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-yellow-50 p-3 rounded-lg">
                        <i class="fas fa-star text-yellow-600 mr-3"></i>
                        <div>
                            <p class="text-sm text-gray-500">Rating</p>
                            <p class="font-semibold">4.8/5</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Itinerary Timeline -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold mb-6">Daily Itinerary</h2>
                <div class="space-y-6">
                    @foreach(range(1, 7) as $day)
                    <div class="relative pl-8 pb-8 border-l-2 border-blue-500 last:pb-0">
                        <div class="absolute -left-2.5 top-0 w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center">
                            <span class="text-white text-xs">{{$day}}</span>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <h3 class="font-bold text-lg mb-2">Day {{$day}}</h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-sun text-orange-500 w-6"></i>
                                    <span class="ml-2">Morning Activities</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-cloud-sun text-blue-500 w-6"></i>
                                    <span class="ml-2">Afternoon Tour</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-moon text-indigo-500 w-6"></i>
                                    <span class="ml-2">Evening Events</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Right Booking Panel -->
        <div class="lg:col-span-1">
            <div class="sticky top-6 bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Price Header -->
                <div class="bg-blue-600 p-6 text-white">
                    <div class="text-center">
                        <p class="text-4xl font-bold">₹7,999</p>
                        <p class="text-sm opacity-90">per person</p>
                    </div>
                </div>

                <!-- Booking Form -->
                <div class="p-6">
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium mb-2">Select Date</label>
                            <input type="date"
                                   class="w-full rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Travelers</label>
                            <select class="w-full rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                                @foreach(range(1, 12) as $count)
                                    <option value="{{$count}}">{{$count}} {{$count == 1 ? 'Person' : 'People'}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700
                                     transition duration-300 flex items-center justify-center">
                            <i class="fas fa-check-circle mr-2"></i>
                            Book Now
                        </button>
                    </form>

                    <!-- Additional Info -->
                    <div class="mt-6 space-y-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-calendar-check mr-2 text-green-500"></i>
                            <span>Instant Confirmation</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-shield-alt mr-2 text-blue-500"></i>
                            <span>Secure Payment</span>
                        </div>
                    </div>

                    <!-- Contact Support -->
                    <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                        <h3 class="font-semibold">Need Help?</h3>
                        <p class="text-sm text-gray-600 mt-1">Contact our travel experts</p>
                        <p class="font-bold text-blue-600 mt-2">
                            <i class="fas fa-phone-alt mr-2"></i>
                            +91 1234567890
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://kit.fontawesome.com/42d5adcbca.js"></script>
@endpush
