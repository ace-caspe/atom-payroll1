<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Dropdown extends Component
{
    public $title;
    public $selections;

    public function mount($title,$selections)
    {
        $this->title = $title;
        $this->selections = $selections;
    }


    public function render()
    {
        return view('livewire.components.dropdown');
    }
}
