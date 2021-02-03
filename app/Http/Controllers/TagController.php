<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $tags = Tag::withCount('posts')->get(['id', 'title', 'description', 'posts_count']);
        return view('tag.index', compact(['tags']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTagRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTagRequest $request)
    {
        //On crée le tag avec les data de la request validé
        Tag::create($request->except(['_token']));
        //On active un flash message
        session()->flash('success', 'Le Tag a bien été crée!');
        return redirect()->route("tags.index");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function show(int $id)
    {
        $tag = Tag::with(['posts' => fn($query) => $query->select(['posts.id', 'title', 'wysiwyg_text', 'imageUrl'])])
            ->findOrFail($id, ['id', 'title', 'description']);
        return view('tag.show', compact(['tag']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id, ['id', 'title', 'description']);
        return view('tag.edit', compact(['tag']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //On crée le tag avec les data de la request validé
        Tag::findOrFail($id)->update($request->except(['_token']));
        //On active un flash message
        session()->flash('success', 'Le Tag a bien été modifié!');
        return redirect()->route("tags.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $tag = Tag::findOrFail($id);
        if (!($tag->posts()->exists())) {
            $tag->delete()
                ? session()->flash('success', 'Le tag à bien supprimer 🤓')
                : session()->flash('error', 'Nous avons rencontré une erreur 😱');
            return redirect()->route("admin.tags.index");
        } else {
            session()->flash('error', 'Le tag est lié à une ou plusieurs Actualitées');
            return redirect()->back();
        }

    }
}
