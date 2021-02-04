<?php

namespace App\Http\Controllers;

use App\Events\PostCreate;
use App\Events\PostDelete;
use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $posts = Post::with('category')
            ->latest()
            ->paginate(10, ['id', 'title', 'wysiwyg_text', 'imageUrl', 'category_id', 'created_at']);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $tags = Tag::all(['id', 'title']);
        $categories = Category::all(['id', 'title']);
        return view("post.create", compact(['categories', 'tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return RedirectResponse
     */
    public function store(StorePostRequest $request): RedirectResponse
    {
        //On crée le post avec les data de la request validé
        $post = Post::create($request->except(['_token', 'tags']));
        //On lui associes les tags
        $post->tags()->attach($request->input('tags'));
        event(new PostCreate($post));
        //On active un flash message
        session()->flash('success', 'L\' actualité a bien été crée!');
        return redirect()->route("posts.index");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function show(int $id)
    {
        $post = Post::with(['category', 'tags'])
            ->findOrFail($id, ['id', 'title', 'wysiwyg_text', 'imageUrl', 'category_id', 'created_at']);
        return view('post.show', compact(['post']));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function edit(int $id)
    {
        $tags = Tag::all(['id', 'title']);
        $categories = Category::all(['id', 'title']);
        $post = $post = Post::with(['category', 'tags'])
            ->findOrFail($id, ['id', 'title', 'wysiwyg_text', 'imageUrl', 'category_id', 'created_at']);

        return view('post.edit', compact(['post', 'categories', 'tags']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $post = Post::findOrFail($id);
        //On update
        $post->update($request->except(['_token', 'tags']));
        //On enlève les anciens tags associé
        $post->tags()->detach();
        //On attache les  nouveaux.
        $post->tags()->attach($request->input('tags'));
        session()->flash('success', 'L\'actualité a bien été modifié');
        return redirect()->route("admin.posts.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $post = Post::findOrFail($id);
        $post->tags()->detach();
        $post->delete();
        event(new PostDelete($id));
        session()->flash('success', 'L\'actualité a bien été supprimer');
        return redirect()->route("admin.posts.index");
    }
}
