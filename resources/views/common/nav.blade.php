<nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Travel Genie</span>
        </a>
        <button data-toggle-nav="navbar-hamburger" type="button"
            class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-hamburger" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="fixed right-0 top-0 h-screen w-80 bg-white z-50 transform transition-transform duration-300 translate-x-full" id="navbar-hamburger">
            <div class="w-full mx-auto p-4 flex flex-wrap items-center justify-between">
                <a href="{{route("index")}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Travel
                        Genie</span>
                </a>
                <button data-toggle-nav="navbar-hamburger" type="button"
                    class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-hamburger" aria-expanded="false">
                    <span class="sr-only">Close main menu</span>
                    <i class="w-5 h-5 mdi mdi-close-thick text-[16px]" aria-hidden="true">
                    </i>
                </button>
            </div>
            <ul class="flex flex-col font-medium mt-4 p-4 rounded-lg">
                <li>
                    <a href="{{route("index")}}" class="block py-2 px-3 rounded {{ request()->routeIs('index') ? 'text-white bg-blue-700' : 'text-gray-900 hover:bg-gray-100' }}"
                        aria-current="{{ request()->routeIs('index') ? 'page' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{route("packages")}}"
                    class="block py-2 px-3 rounded {{ request()->routeIs('packages') ? 'text-white bg-blue-700' : 'text-gray-900 hover:bg-gray-100' }}"
                    aria-current="{{ request()->routeIs('index') ? 'page' : '' }}">Packages</a>
                </li>
                <li class="text-center">
                    <a href="{{route("user.auth")}}"
                    class="inline-flex py-2 px-4 mt-2 text-white bg-blue-600 hover:bg-white hover:text-black hover:border-2 hover:border-solid hover:border-blue-800 rounded transition-colors duration-300">
                       Login / Register
                    </a>
            </li>
            </ul>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    const menuButtons = document.querySelectorAll('[data-toggle-nav="navbar-hamburger"]');
    const navbarMenu = document.getElementById('navbar-hamburger');

    menuButtons.forEach(button => {
        button.addEventListener('click', () => {
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
               menuButtons.forEach(btn => {
                btn.setAttribute('aria-expanded', !isExpanded);
            });
            navbarMenu.classList.toggle('translate-x-full');
            navbarMenu.classList.toggle('nav__left-shadow');
        });
    });
</script>
@endpush
