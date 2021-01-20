<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Property;

class AdminController extends Controller
{
    //Les pages liée a l'admisnistration test
    public function properties()
    {
        $properties = Property::with(['type', 'images'])
            ->latest('id')
            ->get()
            ->reverse();
        return view('admin.propertiesIndex', compact('properties'));
    }

    public function posts()
    {
        $posts = Post::with(['tags', 'category'])
            ->latest()
            ->get();
        return view('admin.postsIndex', compact('posts'));
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
