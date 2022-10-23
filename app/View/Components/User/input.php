<?php

namespace App\View\Components\User;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $placeholder;
    public $value;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$title,$placeholder='',$value='')
    {
        $this->name=$name;
        $this->placeholder=$placeholder;
        $this->value=$value;
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        <div class="w-full mx-2 flex flex-col items-center svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase w-full"> {{ucfirst($title)}} </div>
            <div class=" w-1/2 bg-white mt-2 p-1 flex border border-gray-200 rounded">
                <input placeholder="{{$placeholder}}" class="p-1 px-2 appearance-none outline-none w-full text-gray-800" name="{{$name}}" value="{{$value}}"> 
            </div>
            <div class="w-1/2 text-left ml-4"> <small id="error-{{$name}}" class="text-red-500 p-l-5 indent-1"></small></div>
        </div>
blade;
    }
}
