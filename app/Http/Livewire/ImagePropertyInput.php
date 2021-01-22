<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImagePropertyInput extends Component
{
    public array $images = [];
    public $image = '';
    protected $rules = [
        'image' => 'required|url',
    ];
    protected $messages = [
        'image.required' => 'Vous ne pouvez pas ajouter une Url vide.',
        'image.url' => 'Cela doit être une Url.',
    ];

    public function render()
    {
        return view('livewire.image-property-input');
    }

    public function addImage()
    {
        $this->validate();
        array_push($this->images, $this->image);
        $this->reset('image');
    }

    public function deleteImage($index)
    {
        array_splice($this->images, $index, $index); //remove second element, re-index array
        $this->reset('image');
    }
}
