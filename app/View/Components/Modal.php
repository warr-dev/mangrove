<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public $scrollable;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$scrollable=false)
    {
        $this->id=$id;
        $this->scrollable=$scrollable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $id=$this->id;
        return view('components.modal',compact('id'));
    }
}
