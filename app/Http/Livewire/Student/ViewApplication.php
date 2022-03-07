<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Application;
class ViewApplication extends Component
{
    public $portal_id;
    public function mount($portal_id)
    {
        $this->portal_id = $portal_id;
    }

    public function getApplicationProperty()
    {
        return Application::findOrFail($this->portal_id)->with('portal')->first();
    }
    public function render()
    {
        return view('livewire.student.view-application')
                    ->layout('layouts.student');    
    }
}