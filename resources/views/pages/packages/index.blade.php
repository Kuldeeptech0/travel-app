@extends('layout.mainlayout')

@section('content')
    <div class="bg-gray-100 py-12 ">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-4xl font-bold">Travel Packages</h1>

               <!-- Search Bar 1 -->
                <div class="hidden md:block w-full md:w-1/3 relative">
                    <input type="text"
                        placeholder="Search packages..."
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                    <button class="absolute right-3 top-1/2 transform -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Filter Button -->
                <button id="filterButton" type="button"
                    class="md:hidden inline-flex items-center p-2 text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open filters</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

               <!-- Search Bar 2 -->
               <div class="w-full mb-6 md:hidden">
                <div class="relative">
                    <input type="text"
                        placeholder="Search packages..."
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                    <button class="absolute right-3 top-1/2 transform -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Sort Dropdown -->
            <div class="mb-6">
                <select id="sort"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2.5">
                    <option value="newest">Newest First</option>
                    <option value="popular">Most Popular</option>
                    <option value="oldest">Oldest First</option>
                </select>
            </div>

            <div class="flex flex-col md:flex-row gap-8">
                <!-- Sidebar Filters - Hidden on mobile by default -->
                <div id="filterMenu"
                    class="md:w-1/4 hidden md:block fixed md:relative top-0 left-0 h-full md:h-auto w-full bg-white md:bg-transparent z-50">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex justify-between items-center md:hidden mb-4">
                            <h2 class="text-xl font-bold">Filters</h2>
                            <button id="closeFilter" class="text-gray-500 hover:text-gray-700">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Rating Filter Collapse -->
                        <div class="mb-4">
                            <button type="button"
                                class="flex items-center justify-between w-full py-2 font-medium text-left text-gray-500 border-b border-gray-200"
                                data-collapse-toggle="rating-filter">
                                <span>Rating</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                            <div id="rating-filter" class="py-4">
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="w-4 h-4 text-blue-600 rounded focus:ring-blue-500">
                                        <span class="ml-2 flex items-center">
                                            <span class="flex text-yellow-400">★★★★★</span>
                                            <span class="ml-1 text-sm">(5.0)</span>
                                        </span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="w-4 h-4 text-blue-600 rounded focus:ring-blue-500">
                                        <span class="ml-2 flex items-center">
                                            <span class="flex text-yellow-400">★★★★</span>
                                            <span class="ml-1 text-sm">(4.0+)</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Destinations Filter Collapse -->
                        <div class="mb-4">
                            <button type="button"
                                class="flex items-center justify-between w-full py-2 font-medium text-left text-gray-500 border-b border-gray-200"
                                data-collapse-toggle="destinations-filter">
                                <span>Destinations</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                            <div id="destinations-filter" class="hidden py-4">
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="w-4 h-4 text-blue-600 rounded focus:ring-blue-500">
                                        <span class="ml-2">Darjeeling</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="w-4 h-4 text-blue-600 rounded focus:ring-blue-500">
                                        <span class="ml-2">Sikkim</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="w-4 h-4 text-blue-600 rounded focus:ring-blue-500">
                                        <span class="ml-2">Kalimpong</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button
                            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                            Apply Filters
                        </button>
                    </div>
                </div>

                <!-- Packages Grid -->
                <!-- [Previous package grid code remains the same] -->
                <div class="md:w-3/4">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                        <!-- Package Card 1 -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                            <img src="{{ asset('asset/images/darjeeling-4998356.jpg') }}" alt="Package"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-xl font-bold">Darjeeling Explorer</h3>
                                    <span class="text-blue-600 font-bold">$599</span>
                                </div>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <span class="ml-2">4.8 (120 reviews)</span>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4">Experience the beauty of Darjeeling with our curated package
                                    including tea gardens and mountain views.</p>
                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-blue-600 hover:underline">Read more</a>
                                    <button
                                        class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">Book
                                        Now</button>
                                </div>
                            </div>
                        </div>

                        <!-- Duplicate the package card div above for more packages -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                            <img src="{{ asset('asset/images/darjeeling-4998356.jpg') }}" alt="Package"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-xl font-bold">Darjeeling Explorer</h3>
                                    <span class="text-blue-600 font-bold">$599</span>
                                </div>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <span class="ml-2">4.8 (120 reviews)</span>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4">Experience the beauty of Darjeeling with our curated package
                                    including tea gardens and mountain views.</p>
                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-blue-600 hover:underline">Read more</a>
                                    <button
                                        class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">Book
                                        Now</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                            <img src="{{ asset('asset/images/darjeeling-4998356.jpg') }}" alt="Package"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-xl font-bold">Darjeeling Explorer</h3>
                                    <span class="text-blue-600 font-bold">$599</span>
                                </div>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <span class="ml-2">4.8 (120 reviews)</span>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4">Experience the beauty of Darjeeling with our curated package
                                    including tea gardens and mountain views.</p>
                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-blue-600 hover:underline">Read more</a>
                                    <button
                                        class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">Book
                                        Now</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                            <img src="{{ asset('asset/images/darjeeling-4998356.jpg') }}" alt="Package"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-xl font-bold">Darjeeling Explorer</h3>
                                    <span class="text-blue-600 font-bold">$599</span>
                                </div>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <span class="ml-2">4.8 (120 reviews)</span>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4">Experience the beauty of Darjeeling with our curated package
                                    including tea gardens and mountain views.</p>
                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-blue-600 hover:underline">Read more</a>
                                    <button
                                        class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">Book
                                        Now</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                            <img src="{{ asset('asset/images/darjeeling-4998356.jpg') }}" alt="Package"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-xl font-bold">Darjeeling Explorer</h3>
                                    <span class="text-blue-600 font-bold">$599</span>
                                </div>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <span class="ml-2">4.8 (120 reviews)</span>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4">Experience the beauty of Darjeeling with our curated package
                                    including tea gardens and mountain views.</p>
                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-blue-600 hover:underline">Read more</a>
                                    <button
                                        class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">Book
                                        Now</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                            <img src="{{ asset('asset/images/darjeeling-4998356.jpg') }}" alt="Package"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-xl font-bold">Darjeeling Explorer</h3>
                                    <span class="text-blue-600 font-bold">$599</span>
                                </div>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <span class="ml-2">4.8 (120 reviews)</span>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4">Experience the beauty of Darjeeling with our curated package
                                    including tea gardens and mountain views.</p>
                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-blue-600 hover:underline">Read more</a>
                                    <button
                                        class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">Book
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="flex items-center -space-x-px h-10 text-base justify-center">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Next</span>
                                    <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
        <script>
            // Mobile filter menu toggle
            const filterButton = document.getElementById('filterButton');
            const filterMenu = document.getElementById('filterMenu');
            const closeFilter = document.getElementById('closeFilter');

            filterButton.addEventListener('click', () => {
                filterMenu.classList.toggle('hidden');
            });

            closeFilter.addEventListener('click', () => {
                filterMenu.classList.add('hidden');
            });

            // Close filter menu on larger screens if window is resized
            // window.addEventListener('resize', () => {
            //     if (window.innerWidth >= 768) {
            //         filterMenu.classList.remove('hidden');
            //     }
            // });

            // Initialize Flowbite collapse functionality
            const collapseButtons = document.querySelectorAll('[data-collapse-toggle]');
            collapseButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const targetId = button.getAttribute('data-collapse-toggle');
                    const target = document.getElementById(targetId);
                    target.classList.toggle('hidden');
                    button.querySelector('[data-accordion-icon]').classList.toggle('rotate-180');
                });
            });
        </script>
    @endpush
