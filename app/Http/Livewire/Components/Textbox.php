<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Textbox extends Component
{
    public $name;
    public $fieldId;
    public $class;
    public $label;
    public $value;
    public $type;
    public $isRequired;

    public function __contruct($name,$fieldId,$class,$label,$value,$type,$isRequired){
        $this->name = $name;
        $this->fieldId = $fieldId;
        $this->class = $class;
        $this->label = $label;
        $this->value = $value;
        $this->type = $type;
        $this->isRequired = $isRequired;
  
    }

    public function render()
    {
        return view('livewire.components.textbox',);
    }
}
