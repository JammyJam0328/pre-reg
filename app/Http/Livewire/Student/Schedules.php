<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class Schedules extends Component
{
    public function render()
    {
        return view('livewire.student.schedules')
        ->layout('layouts.student');
    }
}