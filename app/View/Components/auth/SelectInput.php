<?php

namespace App\View\Components\auth;

use Illuminate\View\Component;

class SelectInput extends Component
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
            <select name="{{$name}}" id="{{$id}}" value="{{old($name)}}"  placeholder class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @forelse($options as $index=>$option)
                    <option value="{{$index}}">{{$option}}</option>
                @empty
                    <option value="">No options available</option>
                @endforelse
            </select>
            @error($name)
                <small class="text-red-500 p-l-5">{{$message}}</small>
            @enderror
        </div>
blade;
    }
}
