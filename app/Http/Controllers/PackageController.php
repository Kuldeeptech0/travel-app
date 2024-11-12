<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::paginate(12);
        return view('packages.pack', compact('packages'));
    }

    public function show($id)
    {
        $package = Package::findOrFail($id);
        return view('packages.show', compact('package'));
    }
}
