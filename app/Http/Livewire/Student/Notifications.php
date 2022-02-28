<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class Notifications extends Component
{
    public function render()
    {
        return view('livewire.student.notifications')
        ->layout('layouts.student');

    }
}