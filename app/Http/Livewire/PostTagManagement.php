<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Illuminate\Support\Arr;
use Livewire\Component;

class PostTagManagement extends Component
{
    public $chooseTags;
    public $allTags = [];
    public $inputTag;

    /**
     * PostTagManagement constructor.
     */
    public function mount()
    {
        $this->chooseTags = collect();
        $this->allTags = Tag::orderBy('title')->get();
        $this->inputTag = $this->allTags[0]->id;
    }


    public function addTag()
    {
        //Je met mon tag trouver dans mon tableau de choisi
        $this->chooseTags->push($this->allTags->find($this->inputTag));
        //Je filtre sur tout les tags pour pas qu'il appraise
        $this->allTags->filter(function ($tag, $key) {
            return $tag->id != $this->inputTag;
        });
    }

    public function render()
    {
        return view('livewire.post-tag-management');
    }

    public function refreshKey(int $index)
    {
        //renvoie l'id du tags clické
        $this->inputTag = Arr::get($this->allTags, $index + 1);
    }
}
