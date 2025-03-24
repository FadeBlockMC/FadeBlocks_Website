<?php
namespace App\Livewire;

use Livewire\Component;

class Rules extends Component
{
    public $activeRule = 'general';

    public function setRule($rule)
    {
        $this->activeRule = $rule;
    }

    public function render()
    {
        return view('livewire.rules');
    }
}
