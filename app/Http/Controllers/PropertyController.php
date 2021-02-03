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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PropertyController extends Controller
{
    private array $propertyColumn = ['id', 'title', 'description', 'price', 'surface', 'rooms', 'state', 'constructionYear', 'postcode', 'town', 'type_id'];

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $properties = Property::with([
            'images' => fn($query) => $query->select('id', 'url', 'property_id'),
            'type' => fn($query) => $query->select('id', 'title'),
        ])->latest()
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
        $states = ['Neuf', 'Rénovation', 'Abandonner', 'Ancien'];
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
     * @return Application|Factory|View|RedirectResponse
     */
    public function show(int $id)
    {
        $property = $this->findPropertyWithRelation($id);
        return view('property.show', compact(['property']));
    }

    /**
     * Renvoie le model Property avec les relations
     * @param int $id
     * @return Builder|Builder[]|Collection|Model|null
     */
    private function findPropertyWithRelation(int $id)
    {
        $property = Property::with([
            'images' => fn($query) => $query->select('id', 'url', 'property_id'),
            'type' => fn($query) => $query->select('id', 'title'),
        ])->findOrFail($id, $this->propertyColumn);

        return $property;
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
        $states = ['Neuf', 'Rénovation', 'Abandonner', 'Ancien'];
        $property = $this->findPropertyWithRelation($id);
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
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Property::findOrFail($id)->delete();
        event(new PropertyDelete($id));
        session()->flash('success', 'Le bien a bien été supprimer');
        return redirect()->route("admin.properties.index");
    }
}
