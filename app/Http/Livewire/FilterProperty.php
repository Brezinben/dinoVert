<?php

namespace App\Http\Livewire;

use App\Models\Property;
use App\Models\Type;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FilterProperty extends Component
{
    /**
     * @var $properties
     * Contient  tout les biens
     */
    public $properties;
    /**
     * @var string
     * C'est ce que l'utilisateur va chercher
     */
    public $query = "";
    /**
     * @var
     * Les biens une fois filtrer
     */
    public $filtered;
    /**
     * @var
     * Les catégorie de bien
     */
    public $types;

    protected $rules = [
        'query' => '',
    ];


    /**
     * @param $properties
     */
    public function mount($properties)
    {
        $this->properties = $properties;
        $this->filtered = $this->properties;
        $this->types = Type::all();
    }

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('livewire.filter-property');
    }

    /**
     * @param $type
     * Revoie les bien avec le type qui est passer
     */
    public function filterType($type)
    {
        $this->filtered = $this->properties->filter(function ($property) use ($type) {
            return $property->type_id == $type['id'];
        });
    }

    /**
     *Revoie les biens qui match avec $this->query
     */
    public function search()
    {
        $this->properties = Property::with(['images', 'type'])
            ->where('title', 'like', '%' . $this->query . '%')
            ->latest()
            ->get(['id', 'title', 'description', 'price', 'type_id']);
        $this->resetFilter();
    }

    /**
     *Reset le filtre
     */
    public function resetFilter()
    {
        $this->filtered = $this->properties;
    }
}
