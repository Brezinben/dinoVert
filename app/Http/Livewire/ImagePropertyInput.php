<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

/**
 * Class ImagePropertyInput
 * @package App\Http\Livewire
 */
class ImagePropertyInput extends Component
{
    /**
     * Contient toutes les url
     * @var array
     */
    public $images = [];
    /**
     * Contient une url
     * @var string
     */
    public $image = '';

    /**
     * Règles à respecter lors de l'ajout dans $images
     * @var string[]
     */
    protected $rules = [
        'image' => 'required|url',
    ];
    /**
     * Les messages d'erreurs
     * @var string[]
     */
    protected $messages = [
        'image.required' => 'Vous ne pouvez pas ajouter une Url vide.',
        'image.url' => 'Cela doit être une Url.',
    ];

    /**
     * @param $images
     */
    public function mount(array $images)
    {
        $this->images = $images;
    }

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('livewire.image-property-input');
    }

    //On pourait faire un système d'ordre pour les images.

    /**
     *On ajoute une images à la liste d'images
     */
    public function addImage()
    {
        $this->validate();
        array_push($this->images, $this->image);
        $this->reset('image');
    }

    /**
     * On supprime une images avec son index dans le tableau d'$images
     * @param $index
     */
    public function deleteImage($index)
    {
        array_splice($this->images, $index, $index);
        $this->reset('image');
    }
}
