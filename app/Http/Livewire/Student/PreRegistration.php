<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Portal;
use App\Models\Campus;
use App\Models\Course;
use App\Models\Application;
class PreRegistration extends Component
{
    public $portal_id;
    protected $listeners=['change'=>'$refresh'];
    public function mount($portal_id)
    {
        $this->portal_id = $portal_id;
    }
    public function isStepOneFilled()
    {
        return $this->application->first_choice && $this->application->second_choice != null;
    }
    public function isStepTwoFilled()
    {
        return $this->application->first_name && $this->application->last_name && $this->application->permanent_address && $this->application->present_address && $this->application->age && $this->application->date_of_birth && $this->application->place_of_birth && $this->application->nationality && $this->application->citizenship && $this->application->civil_status && $this->application->tribe && $this->application->religion && $this->application->school_last_attended && $this->application->school_address && $this->application->track_taken && $this->application->school_year_graduated && $this->application->sex && $this->application->status != null;
    }

      public function isStepThreeFilled()
    {
        return $this->application->student_photo && $this->application->first_sem_gpa_photo && $this->application->shs_cor_photo != null;
    }

    // computed properties
    public function getApplicationProperty()
    {
        return Application::where('user_id',auth()->user()->id)->where('portal_id',$this->portal_id)->first();
    }
    // end of computed properties

    public $campuses=[];
    public function render()
    {
        return view('livewire.student.pre-registration')
        ->layout('layouts.student');
    }
    public $permanent_address;
    public $present_address;
    public function isApplied()
    {
       $result = Application::where('portal_id', $this->portal_id)->where('user_id', auth()->user()->id)->first();
        if(!$result){
            return false;
        };
        return true;
    }
}