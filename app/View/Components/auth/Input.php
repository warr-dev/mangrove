<?php

namespace App\View\Components\auth;

use Illuminate\View\Component;

class Input extends Component
{
    
    public $name;
    public $type;
    public $id;
    public $placeholder;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$placeholder=null,$type='text', $id=null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->id = $id??$name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        <div class="relative mb-4" {{$attributes}}>
            <input type="{{$type}}" value="{{old($name)}}" id="{{$id}}"  name="{{$name}}" placeholder="{{$placeholder}}" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
            @error($name)
                <small class="text-red-500 p-l-5">{{$message}}</small>
            @enderror
        </div>
blade;
    }
}
