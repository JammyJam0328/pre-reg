<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Applications extends Component
{
    public function render()
    {
        return view('livewire.admin.applications')
        ->layout('layouts.admin');
    }
}