<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ErrorText extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        <small id="error-{{$name}}" class="p-l-10 text-red-500" style="display:none"></small>
blade;
    }
}
