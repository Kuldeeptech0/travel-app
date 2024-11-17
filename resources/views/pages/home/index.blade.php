@extends('layout.mainlayout')

{{-- @section('content')
    @include('pages.home.imageslider')
@endsection --}}


@section('content')
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white">
        <div class="container mx-auto px-6 py-24">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-16 md:mb-0">
                    <h1 class="text-5xl font-bold leading-tight mb-6 opacity-0 animate-slide-up delay-300">Discover Amazing Places</h1>
                    <p class="text-xl mb-8 opacity-0 animate-slide-up delay-500">Experience the world's most breathtaking destinations with our curated travel experiences.</p>
                    <button class="bg-white text-blue-600 font-bold py-3 px-8 rounded-full hover:bg-blue-100 transition duration-300 opacity-0 animate-bounce-in" style="animation-delay: 900ms;">
                        Start Your Journey
                    </button>
                </div>
                <div class="md:w-1/2 opacity-0 animate-fade-in-right delay-500">
                    <img src="{{ asset('asset/images/darjeeling-4998356.jpg') }}" alt="Travel" class="rounded-lg shadow-2xl hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
    </div>

    <!-- Image Slider Section -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Featured Destinations</h2>
            @include('pages.home.imageslider')
        </div>
    </div>

    <!-- Services Section -->
    <div class="py-16 reveal">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 scroll-trigger delay-200 scroll-trigger-slide-up">
                    <div class="text-blue-600 mb-4 transition-all transform duration-300 scroll-trigger-left delay-300">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 transition-all transform duration-300 scroll-trigger-right delay-300">Luxury Accommodations</h3>
                    <p class="text-gray-600">Experience world-class hotels and resorts handpicked for your comfort.</p>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 animate-slide-up delay-300">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Best Price Guarantee</h3>
                    <p class="text-gray-600">Get the best rates and exclusive deals on all our travel packages.</p>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 animate-slide-up delay-500">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">24/7 Support</h3>
                    <p class="text-gray-600">Our travel experts are available round the clock to assist you.</p>
                </div>
            </div>
        </div>
    </div>
     <!-- Travel Packages Section -->
     <div class="py-16 bg-gray-50 reveal">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Popular Packages</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Package Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl scroll-trigger scroll-trigger-left delay-200">
                    <img src="{{asset('asset/images/darjeeling-4998356.jpg')}}" alt="Package" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold">Darjeeling Explorer</h3>
                            <span class="text-blue-600 font-bold">$599</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="ml-2">4.8 (120 reviews)</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Experience the beauty of Darjeeling with our curated package including tea gardens and mountain views.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 hover:underline">Read more</a>
                            <button class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">Book Now</button>
                        </div>
                    </div>
                </div>
                <!-- Add more package cards here -->
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="py-16 reveal">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">What Our Clients Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 animate-fade-in">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('asset/images/dummy_people.jpg') }}" alt="Client" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h4 class="font-bold">Sarah Johnson</h4>
                            <div class="flex text-yellow-400">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <!-- Add more stars -->
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Amazing experience! The trip was perfectly organized and exceeded all our expectations."</p>
                </div>
                <!-- Add more testimonials -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    const observerOptions = {
        threshold: 0.2
    };

    const animateElement = (element) => {
        element.classList.add('active');
        element.classList.remove('opacity-0');
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateElement(entry.target);
                observer.unobserve(entry.target); // Stop observing once animated
            }
        });
    }, observerOptions);

    // Start observing elements when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
        const elements = document.querySelectorAll('.reveal, .scroll-trigger, .scroll-trigger-left, .scroll-trigger-right, .scroll-trigger-slide-up, [class*="animate-"]');

        elements.forEach(element => {
            observer.observe(element);
        });
    });
</script>
@endpush
