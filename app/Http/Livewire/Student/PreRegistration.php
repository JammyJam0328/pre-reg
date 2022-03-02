<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Portal;
use App\Models\Campus;
use App\Models\Course;


class PreRegistration extends Component
{
    public $portal_id;
    public $campuses=[];

     public $schoolYears=[
        '2014-2015',
        '2015-2016',
        '2016-2017',
        '2017-2018',
        '2018-2019',
        '2019-2020',
        '2020-2021',
        '2021-2022',
        '2022-2023',
        '2023-2024',
    ];
    public function mount($portal_id)
    {

        $this->portal_id = $portal_id;
        $this->campuses = Campus::with('programs')->get();
        //set school_year_graduated to current year
        $this->school_year_graduated = (date('Y')-1). '-' . date('Y');
       
    }

    public function getPortalProperty()
    {
       return Portal::find($this->portal_id);
    }

  
    public function render()
    {
        return view('livewire.student.pre-registration')
        ->layout('layouts.student');
    }
    public $first_choice='';
    public $second_choice='';
    public function setChoice($course)
    {

        // check if the course is already  selected
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

    public $school_year_graduated;
    public $permanent_address;
    public $present_address;

    
}