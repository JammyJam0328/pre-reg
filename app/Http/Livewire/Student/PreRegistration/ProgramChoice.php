<?php

namespace App\Http\Livewire\Student\PreRegistration;

use Livewire\Component;
use App\Models\Program;
use App\Models\Campus;
use App\Models\Application;
class ProgramChoice extends Component
{
    public $portalid;

    public $application;

    public $first_choice;
    public $second_choice;
    public function mount()
    {
        $this->campuses = Campus::with('programs')->get();
        $this->first_choice = $this->application['first_choice'];
        $this->second_choice = $this->application['second_choice'];
    }


    public function render()
    {
        
        return view('livewire.student.pre-registration.program-choice');
    }

    public function setChoice($course)
    {
        if($this->first_choice == $course || $this->second_choice == $course){
            return;
        }
        if($this->first_choice == null && $this->second_choice == null){
            $this->first_choice = $course;
        }elseif($this->first_choice != null && $this->second_choice == null){
            $this->second_choice = $course;
        }elseif($this->first_choice != null && $this->second_choice != null){
            $this->second_choice = $this->first_choice;
            $this->first_choice = $course;
        };
    }
    
    public function updateProgramChoice()
    {
        $this->application->update([
            'first_choice' => $this->first_choice,
            'second_choice' => $this->second_choice
        ]);
        $this->emit('change');
        $this->dispatchBrowserEvent('next-2');
    }
}