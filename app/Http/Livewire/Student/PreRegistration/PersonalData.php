<?php

namespace App\Http\Livewire\Student\PreRegistration;
use App\Models\Program;
use App\Models\Campus;
use App\Models\Application;
use Livewire\Component;

class PersonalData extends Component
{
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
    public $portalid;
    public $application;



    public function mount()
    {
        $this->first_name=$this->application['first_name'];
        $this->middle_name=$this->application['middle_name'];
        $this->last_name=$this->application['last_name'];
        $this->permanent_address=$this->application['permanent_address'];
        $this->present_address=$this->application['present_address'];
        $this->age=$this->application['age'];
        $this->date_of_birth=$this->application['date_of_birth'];
        $this->place_of_birth=$this->application['place_of_birth'];
        $this->nationality=$this->application['nationality'];
        $this->citizenship=$this->application['citizenship'];
        $this->civil_status=$this->application['civil_status'];
        $this->tribe=$this->application['tribe'];
        $this->religion=$this->application['religion'];
        $this->school_last_attended=$this->application['school_last_attended'];
        $this->school_address=$this->application['school_address'];
        $this->track_taken=$this->application['track_taken'];
        $this->school_year_graduated=$this->application['school_year_graduated'];
        $this->awards_received=$this->application['awards_received'];
        $this->sex=$this->application['sex'];
        $this->status=$this->application['status'];
    }
    public function render()
    {
        return view('livewire.student.pre-registration.personal-data');
    }
            
    public $first_name;
    public $middle_name;
    public $last_name;
    public $permanent_address;
    public $present_address;
    public $age;
    public $date_of_birth;
    public $place_of_birth;
    public $nationality;
    public $citizenship;
    public $civil_status;
    public $tribe;
    public $religion;
    public $school_last_attended;
    public $school_address;
    public $track_taken;
    public $school_year_graduated;
    public $awards_received;
    public $student_photo;
    public $first_sem_gpa_photo;
    public $shs_cor_photo;
    public $first_choice;
    public $second_choice;
    public $sex;
    public $status;

    protected $validationAttributes = [
        'track_taken' => 'Track/Strand taken',
        'first_sem_gpa_photo'=>'SHS First Sem GPA photo',
        'shs_cor_photo'=>'SHS School Certification',
    ];

   


    protected function validateInfo()
    {
        $this->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'permanent_address' => 'required',
            'present_address' => 'required',
            'age' => 'required',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required',
            'nationality'=> 'required',
            'citizenship'=> 'required',
            'civil_status'=> 'required',
            'tribe'=> 'required',
            'religion'=> 'required',
            'school_last_attended'=> 'required',
            'school_address'=> 'required',
            'track_taken'=> 'required',
            'school_year_graduated'=> 'required',
            'awards_received'=> 'nullable',
            'sex'=> 'required|in:Male,Female',
            'status'=> 'required',
        ]);
    }

    public function updateInfo()
    {
       $this->validateInfo();
       $this->application->update([
            'first_name'=>$this->first_name,
            'middle_name'=>$this->middle_name,
            'last_name'=>$this->last_name,
            'present_address'=>$this->present_address,
            'permanent_address'=>$this->permanent_address,
            'age'=>$this->age,
            'date_of_birth'=>$this->date_of_birth,
            'place_of_birth'=>$this->place_of_birth,
            'nationality'=>$this->nationality,
            'citizenship'=>$this->citizenship,
            'civil_status'=>$this->civil_status,
            'tribe'=>$this->tribe,
            'religion'=>$this->religion,
            'school_last_attended'=>$this->school_last_attended,
            'school_address'=>$this->school_address,
            'track_taken'=>$this->track_taken,
            'school_year_graduated'=>$this->school_year_graduated,
            'awards_received'=>$this->awards_received,
            'sex'=>$this->sex,
            'status'=>$this->status,
       ]);
        $this->emit('change');
       $this->dispatchBrowserEvent('next-3');

    }

    
}