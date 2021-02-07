<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class BadgeType extends Component
{
    public string $title;
    public string $class;
    public string $addClass;
    public array $colors = [
        'Maison individuelle' => 'text-blue-50 bg-blue-600',
        'Appartement' => 'text-green-50 bg-green-600',
        "Enclos à dinosaure" => 'text-gray-50  bg-dino-600',
    ];

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $class
     */
    public function __construct(string $title, string $class = ' ')
    {
        $this->title = $title;
        $this->addClass = $class;
        $this->class = Arr::exists($this->colors, $this->title) ? $this->colors[$this->title] : 'text-gray-200 bg-gray-600';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return <<<'blade'
        <span class="inline-flex  justify-center items-center py-1 px-2 mr-2 text-xs font-bold leading-none rounded-full cursor-pointer {{$addClass}} {{$class}}">{{$title}}</span>
        blade;
    }
}
