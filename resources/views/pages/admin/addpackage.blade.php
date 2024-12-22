@extends('layout.adminlayout')
@include('pages.admin.component.sidebar')
@section('content')
<div class="p-4 sm:ml-64">
<div class="bg-white rounded-lg shadow-md p-6 max-w-6xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Create New Travel Package</h2>

    <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Basic Details Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Package ID</label>
                <input type="text" name="package_id" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Package Name</label>
                <input type="text" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                <select name="category" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Category</option>
                    <option value="delux">Delux</option>
                    <option value="superior">Superior</option>
                    <option value="luxury">Luxury</option>
                </select>
            </div>
        </div>

        <!-- Location and Duration Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">City</label>
                <select name="city" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select City</option>
                    <option value="siliguri">Siliguri</option>
                    <option value="darjeeling">Darjeeling</option>
                    <option value="gangtok">Gangtok</option>
                    <option value="kalimpong">Kalimpong</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">City Code</label>
                <input type="text" name="city_code" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Duration</label>
                <select name="duration" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Duration</option>
                    <option value="1n2d">1 Night 2 Days</option>
                    <option value="2n3d">2 Nights 3 Days</option>
                    <option value="3n4d">3 Nights 4 Days</option>
                </select>
            </div>
        </div>

        <!-- Pricing Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Adult Price (₹)</label>
                <input type="number" name="adult_price" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Child Price (₹)</label>
                <input type="number" name="child_price" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Number of Pax</label>
                <input type="number" name="pax" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
        </div>
        <!-- Description Section -->
        <div class="grid grid-cols-1 gap-6 mb-8">
            <div class="editor-container">
                <label class="block text-sm font-medium text-gray-700 mb-2">Short Description</label>
                <textarea id="short_description" name="short_description" class="w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
            </div>

            <div class="editor-container">
                <label class="block text-sm font-medium text-gray-700 mb-2">Full Description</label>
                <textarea id="full_description" name="description" class="w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
            </div>
        </div>

        <!-- Add custom styles -->
        <style>
        .editor-container {
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .cke_chrome {
            border: 1px solid #d1d5db !important;
            border-radius: 6px !important;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05) !important;
        }

        .cke_top {
            background: #f8fafc !important;
            border-bottom: 1px solid #e2e8f0 !important;
            border-radius: 6px 6px 0 0 !important;
        }

        .cke_bottom {
            background: #f8fafc !important;
            border-top: 1px solid #e2e8f0 !important;
            border-radius: 0 0 6px 6px !important;
        }
        </style>

        <!-- CKEditor Script -->
        <script src="https://cdn.ckeditor.com/4.25.0-lts/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('short_description', {
                height: 120,
                removePlugins: 'image,table,horizontalrule,link,elementspath',
                toolbar: [
                    { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
                    { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
                    { name: 'editing', items: ['Undo', 'Redo'] }
                ],
                toolbarLocation: 'top',
                removeButtons: '',
                contentsCss: ['body {font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial; font-size: 14px; line-height: 1.5;}']
            });

            CKEDITOR.replace('full_description', {
                height: 300,
                toolbar: [
                    { name: 'styles', items: ['Styles', 'Format'] },
                    { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
                    { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                    { name: 'links', items: ['Link', 'Unlink'] },
                    { name: 'insert', items: ['Image', 'Table'] },
                    { name: 'tools', items: ['Maximize'] },
                    { name: 'editing', items: ['Undo', 'Redo'] },
                    { name: 'document', items: ['Source'] }
                ],
                toolbarLocation: 'top',
                removeButtons: '',
                contentsCss: ['body {font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial; font-size: 14px; line-height: 1.5;}']
            });
        </script>
        <!-- Image Upload Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Thumbnail Image</label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-4">
                    <input type="file" name="thumbnail" accept="image/*" class="w-full">
                    <p class="text-sm text-gray-500 mt-1">Recommended size: 800x600px (Max: 2MB)</p>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Gallery Images</label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-4">
                    <input type="file" name="gallery[]" accept="image/*" multiple class="w-full">
                    <p class="text-sm text-gray-500 mt-1">Upload up to 5 images (Max: 2MB each)</p>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
                Create Package
            </button>
        </div>
    </form>
</div>
</div>



@endsection

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
