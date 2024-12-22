<div class="relative">
    <div id="default-carousel" class="relative container mx-auto px-6" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-[350px] overflow-hidden rounded-lg md:h-[450px]">
              <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('asset/images/darjeeling-4998356.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="Darjeeling">
                <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-transparent">
                    <div class="container mx-auto px-6 h-full flex items-center">
                        <div class="max-w-xl text-white">
                            <h1 class="text-4xl font-bold mb-4">Darjeeling</h1>
                            <p class="text-lg">Experience the Queen of Hills</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('asset/images/darjeeling.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="Darjeeling">
                <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-transparent">
                    <div class="container mx-auto px-6 h-full flex items-center">
                        <div class="max-w-xl text-white">
                            <h1 class="text-4xl font-bold mb-4">Tea Gardens</h1>
                            <p class="text-lg">Discover World Famous Tea Estates</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('asset/images/small-town-near-blue-body-water-surrounded-by-beautiful-mountains.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="Sikkim">
                <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-transparent">
                    <div class="container mx-auto px-6 h-full flex items-center">
                        <div class="max-w-xl text-white">
                            <h1 class="text-4xl font-bold mb-4">Sikkim</h1>
                            <p class="text-lg">Explore the Mystical Mountains</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('asset/images/tourism-leisure-survival-scout-freedom.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="Adventure">
                <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-transparent">
                    <div class="container mx-auto px-6 h-full flex items-center">
                        <div class="max-w-xl text-white">
                            <h1 class="text-4xl font-bold mb-4">Adventure</h1>
                            <p class="text-lg">Experience Thrilling Activities</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
    new Splide('#thumbnail-carousel', {
        perPage: 3,
        gap: '1rem',
        pagination: false,
        arrows: false,
        autoplay: true,
        interval: 3000,
    }).mount();
</script>
@endpush
