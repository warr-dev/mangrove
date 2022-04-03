<?php

namespace App\View\Components\table;

use Illuminate\View\Component;

class Badge extends Component
{
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$label='')
    {
        $this->type=$type;
        $this->label=$label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $type=$this->type;
        $label=$this->label;
        return view('components.table.badge',compact('type','label'));
    }
}
