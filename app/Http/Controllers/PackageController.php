<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.addpackage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'package_id' => 'required|unique:packages',
            'name' => 'required',
            'category' => 'required',
            'city' => 'required',
            'city_code' => 'required',
            'duration' => 'required',
            'adult_price' => 'required|numeric',
            'child_price' => 'required|numeric',
            'pax' => 'required|numeric',
            'short_description' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image|max:2048',
            'gallery.*' => 'image|max:2048'
        ]);

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('packages/thumbnails', 'public');
            $validated['thumbnail'] = $thumbnailPath;
        }

        // Handle gallery images
        $galleryPaths = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $galleryPaths[] = $image->store('packages/gallery', 'public');
            }
        }

        $package = Package::create($validated);

        // Store gallery images in related table if needed
        // $package->gallery()->createMany([...]);

        return redirect()->route('packages.index')->with('success', 'Package created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $package = Package::findOrFail($id);
        return view('pages.home.singlepackage', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
    }
}
