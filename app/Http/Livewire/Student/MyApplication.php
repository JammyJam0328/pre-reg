<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Application;
class MyApplication extends Component
{
    public function render()
    {
        return view('livewire.student.my-application',[
            'applications' => Application::where('user_id',auth()->user()->id)->get()
        ])
        ->layout('layouts.student');

    }
}