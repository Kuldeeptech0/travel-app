@extends('layout.mainlayout')
@include('pages.admin.component.sidebar')
@section('content')




<div class="p-4 sm:ml-64">
    <!-- Parent Flex Container -->
    <div class="flex flex-wrap gap-6">
      <!-- Package Categories -->
      <div class="mb-6 w-full lg:w-1/4">
        <form class="max-w-sm mx-auto">
          <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            PACKAGE CATEGORIES
          </label>
          <select
            id="categories"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          >
            <option value="DE">DELUX</option>
            <option value="SU">SUPERIOR</option>
            <option value="LU">LUXURY</option>
          </select>
        </form>
      </div>

      <!-- City -->
      <div class="mb-6 w-full lg:w-1/4">
        <form class="max-w-sm mx-auto">
          <label for="Place" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            CITY
          </label>
          <select
            id="states"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          >
            <option selected>Choose Location</option>
            <option value="SI">Siliguri</option>
            <option value="GO">Gorubathan</option>
            <option value="WH">Sevok</option>
            <option value="FL">Mirik</option>
            <option value="VG">Kurseong</option>
            <option value="GE">Darjeeling</option>
            <option value="MI">Lataguri</option>
          </select>
        </form>
      </div>

      <!-- Duration -->
      <div class="mb-6 w-full lg:w-1/4">
        <form class="max-w-sm mx-auto">
          <label for="Place" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            DURATION
          </label>
          <select
            id="states"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          >
            <option selected>Trip Length</option>
            <option value="1&2">One Night Two Days</option>
            <option value="GO">Two Night Three Days</option>
            <option value="WH">Three Night Four Days</option>
            <option value="FL">Four Night Five Days</option>
            <option value="VG">Five Night Six Days</option>
          </select>
        </form>
      </div>
    </div>
  </div>


        {{-- ADD PACKAGE INPUT FIELDS --}}

        <div class="p-4 sm:ml-64">
            <!-- Flex container for inputs -->
            <div class="flex flex-wrap gap-6">
              <!-- First Input -->
              <div class="mb-6 w-full lg:w-1/4">
                <div class="relative">
                    <input type="text" id="add_package_name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="add_package_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">ADD PACKAGE NAME</label>
                </div>
              </div>

              <!-- Second Input -->
              <div class="mb-6 w-full lg:w-1/4">
                <div class="relative">
                    <input type="text" id="Add short description" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="Add short description" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">ADD SHORT DESCRIPTION</label>
                </div>
              </div>

              <!-- Third Input -->
              <div class="mb-6 w-full lg:w-1/4">
                <div class="relative">
                  <input
                    type="text"
                    id="ADD LONG DESCRIPTION"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" "
                  />
                  <label
                    for="ADD LONG DESCRIPTION"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1"
                  >
                    ADD LONG DESCRIPTION
                  </label>
                </div>
              </div>
            </div>
          </div>

          {{-- Fourth Input --}}

          <div class="p-4 sm:ml-64">
            <!-- Flex container for inputs -->
            <div class="flex flex-wrap gap-6">
              <!-- Fourth Input -->
              <div class="mb-6 w-full lg:w-1/4">
                <div class="relative">
                    <div class="relative">
                        <input type="text" id="Number_Of_Pax" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Number_Of_Pax" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">NUMBER OF PAX</label>
                    </div>
                </div>
              </div>


              <!-- Sixth input -->
              <div class="mb-6 w-full lg:w-1/4">
                <div class="relative">
                <div class="relative">
                  <input
                    type="text"
                    id="ADD LONG DESCRIPTION"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" "
                  />
                  <label
                    for="ADD LONG DESCRIPTION"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1"
                  >
                    TERMS & CONDITIONS
                  </label>
                </div>
              </div>
            </div>
          </div>

           {{-- UPLOAD THUMBNAIL IMAGE --}}
           <div class="mb-6 w-full lg:w-1/4">
            <div class="relative">
            <div class="relative">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">UPLOAD THUMBNAIL IMAGE</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG,JPG (MAX. 800x400px).</p>
            </div>
            </div>
        </div>

      {{-- UPLOAD IMAGES FOR GALLERY --}}
       {{-- UPLOAD IMAGES --}}
       <div class="mb-6 w-full lg:w-1/4">
          <div class="relative">
          <div class="relative">
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">UPLOAD IMAGE</label>
      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
      <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG,JPG (MAX. 800x400px).</p>





@endsection
