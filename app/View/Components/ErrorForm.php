<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ErrorForm extends Component
{
    public string $input;

    /**
     * Create a new component instance.
     *
     * @param String $input
     */
    public function __construct(String $input)
    {
        $this->input=$input;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.error-form');
    }
}
