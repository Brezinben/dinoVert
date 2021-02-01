<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Property;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function editHome()
    {
        $text = DB::select("select wysiwyg_text from contents where page = 'Home'");
        $properties = Property::with(['type', 'images'])->latest()->limit(3)->get()->reverse();
        $posts = Post::with(['category', 'tags'])->latest()->limit(3)->get()->reverse();
        return view('admin.edit-welcome', compact(['properties', 'posts', 'text']));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function storeEditHome(Request $request): RedirectResponse
    {
        $text = DB::select("select wysiwyg_text from contents where page = 'Home' limit 1");
        $newText = $request->input('wysiwygTextHome');
        if ($text[0]->wysiwyg_text != $newText) {
            $request->validate([
                'wysiwygTextHome' => 'bail|required|string',
            ]);
            //Update de l'info
            DB::update("update contents set wysiwyg_text = ? where page = 'Home' limit 1", [$newText])
                ? session()->flash('success', 'Le texte a bien modifier 🤓')
                : session()->flash('error', 'Nous avons rencontrer une erreur 😱');

            return redirect()->route("admin.dashboard");
        } else {
            session()->flash('warning', 'Les informations sont identiques.');
            return redirect()->back();
        }
    }

    /**
     * @return Application|Factory|View
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
