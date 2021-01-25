<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsletterRequest;
use App\Models\Post;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //home
    public function home()
    {
        //Les trois dernier biens et posts
        $properties = Property::with(['type', 'images'])->latest()->limit(3)->get()->reverse();
        $posts = Post::with(['category', 'tags'])->latest()->limit(3)->get()->reverse();
        return view('welcome', compact(['properties', 'posts']));
    }
    //mention légales

    //Qui sommes nous?

    public function storeNotification(StoreNewsletterRequest $request)
    {
        DB::table('newsletters')->insert([
            'email' => $request->newsletterMail,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        session()->flash('info', 'Votre email à bien été stocker');
        return redirect()->back();
    }

}

