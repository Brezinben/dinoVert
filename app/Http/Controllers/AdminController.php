<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Property;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function properties()
    {
        $properties = Property::with(['type', 'images'])
            ->latest('id')
            ->get()
            ->reverse();
        return view('admin.propertiesIndex', compact('properties'));
    }

    /**
     * @return Application|Factory|View
     */
    public function posts()
    {
        $posts = Post::with(['tags', 'category'])
            ->latest()
            ->get();
        return view('admin.postsIndex', compact('posts'));
    }

    /**
     * @return Application|Factory|View
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
