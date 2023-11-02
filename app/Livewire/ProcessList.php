<?php

namespace App\Livewire;

use Livewire\Component;

class ProcessList extends Component
{
    public function render()
    {
        return view('livewire.process-list', [
            'processes' => \App\Models\Process::all()
        ]);
    }
}
