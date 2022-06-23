<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Input2 extends Component
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
    public function __construct($label=null,$name,$id=null,$type='text',$placeholder="",$value='')
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
        
        return <<<'blade'
        <div class="w-full flex-1 mx-2 svelte-1l8159u">
            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                @if($label) <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> {{$label}}</div> @endif
                <div class="bg-white mt-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <input type="{{$type}}" placeholder="{{$placeholder}}" id="{{$id}}" name="{{$name}}" class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                </div>
            </div>
            <div class="w-full text-left ml-4"> <small id="error-{{$name}}" class="text-red-500 p-l-5 indent-1 error-{{$name}}"></small></div>
        </div>

blade;
    }
}
