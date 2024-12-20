@extends('layout.adminlayout')
@section('content')
@include('pages.admin.component.sidebar')
<div class="p-4 sm:ml-64">
    <div class="p-8 mt-20">


        <!-- Add State Form Section -->
        <div class="mb-10 max-w-2xl mx-auto bg-white rounded-lg shadow-xl dark:bg-gray-800 p-6">
            <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Add New State</h2>

            <form class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            State Name
                        </label>
                        <input type="text" id="state"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Enter state name" required>
                    </div>

                    <div>
                        <label for="state_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            State Code
                        </label>
                        <input type="text" id="state_code"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Enter state code" maxlength="2" required>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Add State
                    </button>
                </div>
            </form>
        </div>

        <!-- States Table Section -->


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-3 py-3">
                    STATE NAME
                </th>
                <th scope="col" class="px-3 py-3">
                    STATE CODE
                </th>
                <th scope="col" class="px-3 py-3">
                    CITIES COUNT
                </th>
                <th scope="col" class="px-3 py-3">
                    ACTION
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    WEST BENGAL
                </th>
                <td class="px-6 py-4">
                    WB
                </td>
                <td class="px-6 py-4">
                    15
                </td>
                <td class="px-6 py-4">

                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    DELHI
                </th>
                <td class="px-6 py-4">
                    DL
                </td>
                <td class="px-6 py-4">
                    4
                </td>
                <td class="px-6 py-4">
                    {{-- 7000/- --}}
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    PUNJAB
                </th>
                <td class="px-6 py-4">
                    PB
                </td>
                <td class="px-6 py-4">
                    3
                </td>
                <td class="px-6 py-4">
                    {{-- $99 --}}
                </td>
            </tr>
        </tbody>
    </table>
</div>


    <!-- Cities Management Modal -->
    <div id="citiesModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Manage Cities - West Bengal
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="citiesModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                <div class="p-4 md:p-5 space-y-4">
                    <div class="mb-4">
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Enter city name">
                    </div>
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add City
                    </button>

                    <div class="mt-4">
                        <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-3">Current Cities</h4>
                        <ul class="space-y-2">
                            <li class="flex justify-between items-center p-2 bg-gray-50 dark:bg-gray-600 rounded">
                                <span class="text-gray-900 dark:text-white">Kolkata</span>
                                <button class="text-red-600 hover:text-red-800 dark:text-red-400">Remove</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Flowbite modals
    const modals = document.querySelectorAll('[data-modal-toggle]');
    modals.forEach(modal => {
        modal.addEventListener('click', function() {
            const targetModal = document.getElementById(this.getAttribute('data-modal-target'));
            targetModal.classList.toggle('hidden');
        });
    });

    // Close modal functionality
    const closeButtons = document.querySelectorAll('[data-modal-hide]');
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetModal = document.getElementById(this.getAttribute('data-modal-hide'));
            targetModal.classList.add('hidden');
        });
    });
});
</script>

@endpush
