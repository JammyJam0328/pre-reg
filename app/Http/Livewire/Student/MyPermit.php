<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Application;
class MyPermit extends Component
{
    public $application_id;
    public function mount($application_id)
    {
        $this->application_id = $application_id;
        
    }
    public function render()
    {
        return view('livewire.student.my-permit',[
            'application' => Application::findOrFail($this->application_id)->with(['examSchedule.permit','portal','examSchedule.examinationFacility.facility','examSchedule.examinationFacility.schedule'])->first()
        ])
            ->layout('layouts.student');
    }
}