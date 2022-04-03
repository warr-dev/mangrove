<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $label;
    public $placeholder;
    public $id;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label,$name,$id=null,$type='text',$placeholder="",$value='')
    {
        $this->label=$label;
        $this->name=$name;
        $this->type=$type;
        $this->value=$value;
        $this->id=$id??$name;
        $this->placeholder=$placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if($this->type=='textarea'){
            return <<<'blade'
            <label for="{{$id}}" class="text-gray-700 text-xs sm:text-md">{{$label}}</label>
            <textarea name="{{$name}}" cols="3" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" >{{$value}}</textarea> 
            <div><small id="error-{{$name}}" class="text-red-500 p-l-5"></small></div>
        blade;
        }
        return <<<'blade'
        <label for="{{$id}}" class="text-gray-700 text-xs sm:text-md">{{$label}}</label>
        <input value="{{$value}}" id="{{$id}}" name="{{$name}}" placeholder="{{$placeholder}}" type="{{$type}}" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />

        <div><small id="error-{{$name}}" class="text-red-500 p-l-5"></small></div>

blade;
    }
}
