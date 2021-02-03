<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EasterEgg extends Component
{
    public int $count = 0;
    public int $limit = 5;
    public $routeName;

    public function mount(string $routeName)
    {
        $this->routeName = $routeName;
    }

    public function increment()
    {
        if ($this->count++ === $this->limit)
            return $this->redirect('https://www.youtube.com/watch?t=425&v=z1lmj932rSk');


    }

    public function render()
    {
        return view('livewire.easter-egg');

    }
}
