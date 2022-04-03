<?php

namespace App\View\Components\auth;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $type, $value, $placeholder, $required)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.input',compact('data'));
    }
}
