<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Application;
use App\Models\Schedule;
use App\Models\ExamSchedule;
use App\Models\Permit;
use App\Models\ExaminationTestCenter;

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
            'schedules' => Schedule::where('portal_id',$this->application->portal_id)->with('examinationTestCenters.testCenter')->get(),
        ])
        ->layout('layouts.student');
    }

    public function selectSchedule()
    {
        $this->validate([
            'selectedSchedule'=>'required',
        ]);

        $examTestCenter = ExaminationTestCenter::where('id',$this->selectedSchedule)->first();

        if($examTestCenter->slot > 0){
            // decrement slot
            $examTestCenter->update([
                'slot'=>$examTestCenter->slot-1,
            ]);

            $this->application->update([
            'status'=>'schedule-selected',
            ]);
            $examSchedule = ExamSchedule::create([
                'application_id'=>$this->application->id,
                'examination_test_center_id'=>$this->selectedSchedule,
            ]);
            Permit::create([
                'exam_schedule_id'=>$examSchedule->id,
                'exam_permit_number'=>'SKSU-PAS-'.$this->application->portal_id.$this->application->id.$examSchedule->id.auth()->user()->id,
            ]);
            return redirect()->route('student.home');
        }
    }

    public function isFull($slot)
    {
        if($slot > 0){
            return false;
        }
        return true;
    }
}