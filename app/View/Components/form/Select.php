<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Select extends Component
{
    public $label;
    public $name;
    public $options;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $options=[], $id=null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
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
        <div id="input-{{$name}}" {{$attributes}}>
            <label for="{{$id}}" class="text-gray-700 text-xs sm:text-md">{{$label}}</label>
            <select name="{{$name}}" id="{{$id}}" value="{{old($name)}}"  placeholder class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @forelse($options as $index=>$option)
                    <option value="{{$index}}">{{$option}}</option>
                @empty
                    <option value="">No options available</option>
                @endforelse
            </select>
            <div><small id="error-{{$name}}" class="text-red-500 p-l-5"></small></div>
        </div>
blade;
    }
}
