<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Application;
use App\Models\Schedule;
use App\Models\ExamSchedule;
use App\Models\Permit;
class SelectSchedule extends Component
{
    public $application_id;
    public $init='';
    public $selectedSchedule='';
    public function mount($application_id)
    {
        $application = Application::findOrFail($application_id);
        if($application->status == 'payment-approved'){
            $this->application_id = $application_id;
        }else{
            abort(403,'You have already selected a schedule. Please check your examination permit.');
        }
    }

    public function getApplicationProperty()
    {
        return Application::where('id',$this->application_id)->first();
    }
    public function render()
    {
        return view('livewire.student.select-schedule',[
            'schedules' => Schedule::where('portal_id',$this->application->portal_id)->with('examinationFacilities.facility')->get(),
        ])
        ->layout('layouts.student');
    }

    public function selectSchedule()
    {
        $this->validate([
            'selectedSchedule'=>'required',
        ]);
        $this->application->update([
            'status'=>'schedule-selected',
        ]);

        $examSchedule = ExamSchedule::create([
            'application_id'=>$this->application->id,
            'examination_facility_id'=>$this->selectedSchedule,
        ]);

        Permit::create([
            'exam_schedule_id'=>$examSchedule->id,
            'exam_permit_number'=>'SKSU-PAS-'.$this->application->portal_id.$this->application->id.$examSchedule->id.auth()->user()->id,
        ]);
        return redirect()->route('student.home');
    }
}