<?php

namespace App\Http\Controllers;

use App\Events\PropertyCreate;
use App\Events\PropertyDelete;
use App\Http\Requests\StorePropertyRequest;
use App\Models\Image;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $properties = Property::with(['type', 'images'])
            ->latest()
            ->get();
        return view('property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $types = Type::all();
        $states = ['Neuf', 'Rénovation', 'Abandonner', 'Ancien'];
        return view("property.create", compact(['types', 'states']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePropertyRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(StorePropertyRequest $request)
    {
        $property = Property::create($request->except(['_token', 'images', 'image']));
        $images = explode(",", $request->input('images'));
        foreach ($images as $image) {
            Image::create([
                    'url' => $image,
                    'property_id' => $property->id,
                    'alternative' => 'alternative',]
            );
        }
        event(new PropertyCreate($property));
        session()->flash('success', 'Le bien a bien été crée');
        return redirect()->route("properties.index");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $property = Property::with(['type', 'images'])->findOrFail($id);
        return view('property.show', compact(['property', 'test']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $types = Type::all();
        $states = ['Neuf', 'Rénovation', 'Abandonner', 'Ancien'];
        $property = Property::with(['type', 'images'])->findOrFail($id);
        $images = $property->images->pluck('url')->toArray();//Image que l'on va passer au composant.
        return view('property.edit', compact(['property', 'types', 'states', 'images']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(StorePropertyRequest $request, $id)
    {
        $property = Property::findOrFail($id)->update($request->except(['_token', 'images', 'image']));

        //On supprime les anciennes images.
        Image::where('property_id', $id)->delete();

        $images = explode(",", $request->input('images'));
        foreach ($images as $image) {
            Image::create([
                    'url' => $image,
                    'property_id' => $id,
                    'alternative' => 'alternative',]
            );
        }
        session()->flash('success', 'Le bien a bien été modifié');
        return redirect()->route("admin.properties.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Property::findOrFail($id)->delete();
        event(new PropertyDelete($id));
        session()->flash('success', 'Le bien a bien été supprimer');
        return redirect()->route("admin.properties.index");
    }
}
