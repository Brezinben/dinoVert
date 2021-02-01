<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Post;
use App\Models\Property;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


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
        $content = Content::where('page', 'Home')->first(['id', 'wysiwyg_text']);
        $properties = Property::with(['type', 'images'])->latest()->limit(3)->get()->reverse();
        $posts = Post::with(['category', 'tags'])->latest()->limit(3)->get()->reverse();
        return view('admin.edit-welcome', compact(['properties', 'posts', 'content']));
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function storeEditHome(Request $request, int $id): RedirectResponse
    {
        $content = Content::findOrFail($id);
        $text = $content->pluck('wysiwyg_text')->toArray()[0];
        $newText = $request->input('wysiwygTextHome');

        if ($text != $newText) {
            $request->validate([
                'wysiwygTextHome' => 'bail|required|string',
            ]);
            //Update de l'info
            $content->update(["wysiwyg_text" => $newText])
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
