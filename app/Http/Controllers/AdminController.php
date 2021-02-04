<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Post;
use App\Models\Property;
use App\Models\Tag;
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
        $properties = Property::with(['type' => fn($query) => $query->select('id', 'title')])
            ->latest()
            ->get(['id', 'title', 'description', 'price', 'town', 'state', 'type_id']);
        return view('admin.propertiesIndex', compact('properties'));
    }

    /**
     * @return Application|Factory|View
     */
    public function posts()
    {
        $posts = Post::with([
            'category' => fn($query) => $query->select('id', 'title'),
            'tags' => fn($query) => $query->select('tags.id', 'title'),])
            ->latest()
            ->get(['id', 'title', 'category_id', 'created_at']);
        return view('admin.postsIndex', compact('posts'));
    }

    public function tags()
    {
        $tags = Tag::withCount('posts')
            ->orderBy('posts_count', 'desc')
            ->get(['id', 'title', 'description', 'posts_count']);
        return view('admin.tagsIndex', compact(['tags']));
    }

    /**
     * @return Application|Factory|View
     */
    public function editHome()
    {
        $content = Content::where('page', 'Home')->first(['id', 'wysiwyg_text']);

        $properties = Property::with([
            'images' => fn($query) => $query->select('id', 'url', 'property_id'),
            'type' => fn($query) => $query->select('id', 'title'),
        ])->latest()->limit(3)->get(['id', 'price', 'surface', 'postcode', 'town', 'type_id'])->reverse();

        $posts = Post::with(['category' => fn($query) => $query->select('id', 'title')])
            ->latest()
            ->limit(3)
            ->get(['id', 'title', 'wysiwyg_text', 'imageUrl', 'category_id', 'created_at'])
            ->reverse();

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
