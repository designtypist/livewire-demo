<?php

namespace App\Livewire;

use Livewire\Component;

class Calendar extends Component
{
    public $title = 'Calendar';

    public function render()
    {
        return view('livewire.calendar');
    }
}
