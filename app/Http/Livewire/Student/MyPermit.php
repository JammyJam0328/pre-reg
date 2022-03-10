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
        // check if application status is schedule-selected
        $application = Application::findOrFail($application_id);
        if($application->status != 'schedule-selected'){
            abort(403);
        }
        
        
    }
    public function render()
    {
        return view('livewire.student.my-permit',[
            'application' => Application::findOrFail($this->application_id)->with(['examSchedule.permit','portal','examSchedule.examinationTestCenter.testCenter','examSchedule.examinationTestCenter.schedule'])->first()
        ])
            ->layout('layouts.student');
    }
}