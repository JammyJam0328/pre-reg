<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class MyApplication extends Component
{
    public function render()
    {
        return view('livewire.student.my-application')
        ->layout('layouts.student');

    }
}