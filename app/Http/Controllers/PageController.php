<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Property;

class PageController extends Controller
{
    //home
    public function home()
    {
        //Les trois dernier biens
        $properties = Property::with(['type', 'images'])->latest()->limit(3)->get()->reverse();
        $posts = Post::with(['category', 'tags'])->latest()->limit(3)->get()->reverse();
        return view('welcome', compact(['properties', 'posts']));
    }
    //mention légales

    //Qui sommes nous?

}

