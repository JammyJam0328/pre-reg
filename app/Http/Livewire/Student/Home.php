<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Portal;
class Home extends Component
{
    public function render()
    {
        return view('livewire.student.home',[
            'portals' => Portal::where('status','open')->get()
        ])
        ->layout('layouts.student');
    }
}