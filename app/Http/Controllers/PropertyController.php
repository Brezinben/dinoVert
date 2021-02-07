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
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    private array $propertyColumn = ['id', 'title', 'description', 'price', 'surface', 'rooms', 'state', 'constructionYear', 'postcode', 'town', 'type_id'];
    private array $states = ['Neuf', 'Rénovation', 'Abandonner', 'Ancien'];

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        // J'ai modifié le modèle pour les requêtes opti "Fat Model Thin Controller"
        $properties = Property::with(['images', 'type'])
            ->latest()
            ->get(['id', 'title', 'description', 'price', 'type_id']);
        return view('property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $types = Type::all(['id', 'title']);
        $states = $this->states;
        return view("property.create", compact(['types', 'states']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePropertyRequest $request
     * @return RedirectResponse
     */
    public function store(StorePropertyRequest $request): RedirectResponse
    {
        DB::transaction(function () use ($request) {
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
        });
        return redirect()->route("properties.index");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|RedirectResponse
     */
    public function show(int $id)
    {
        $property = Property::with(['images', 'type'])->findOrFail($id, $this->propertyColumn);
        return view('property.show', compact(['property']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function edit(int $id)
    {
        $types = Type::all(['id', 'title']);
        $states = $this->states;
        $property = Property::with(['images', 'type'])->findOrFail($id, $this->propertyColumn);
        $images = $property->images->pluck('url')->toArray();//Image que l'on va passer au composant.
        return view('property.edit', compact(['property', 'types', 'states', 'images']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StorePropertyRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StorePropertyRequest $request, int $id): RedirectResponse
    {
        DB::transaction(function () use ($id, $request) {
            $property = Property::findOrFail($id)->update($request->except(['_token', 'images', 'image']));
            //On supprime les anciennes images.
            Image::where('property_id', $id)->delete();
            //On crée un tableau avec les url(s)
            $images = explode(",", $request->input('images'));
            foreach ($images as $image) {
                Image::create([
                        'url' => $image,
                        'property_id' => $id,
                        'alternative' => 'alternative',]
                );
            }
            session()->flash('success', 'Le bien a bien été modifié');
        });
        return redirect()->route("admin.properties.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        //A noté que la relations avec les images se delete également
        if (Property::findOrFail($id)->delete()) {
            event(new PropertyDelete($id));
            session()->flash('success', 'Le bien a bien été supprimer');
        } else {
            session()->flash('error', 'Le bien n\'a pas bien été supprimer');
        }
        return redirect()->route("admin.properties.index");
    }
}
