<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Portal;
use App\Models\Campus;
use App\Models\Program;
use App\Models\Application;
use Livewire\WithPagination;
// with upload
use Livewire\WithFileUploads;
class PreRegistration extends Component
{
    use WithPagination;
    use WithFileUploads;
     // -------------------------------------
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
     // -------------------------------------
    public $portal_id;
    public $student_type;
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
    public $scan_shs_id;
    public $first_choice;
    public $second_choice;
    public $transferee_choice;
    public $transferee_last_school_attended;
    public $previous_program;
    public $school_year_last_attended;

    public $sex;
    public $status;
     // -------------------------------------
    protected $listeners=['change'=>'$refresh'];

    public function mount($portal_id)
    {
        $this->portal_id = $portal_id;
        $this->campuses = Campus::all();

    }
    public function updatedFirstCampus()
    {
        $this->programs = Program::where('campus_id',$this->campus)->get();
    }
    public function getApplicationProperty()
    {
        return Application::where('user_id',auth()->user()->id)->where('portal_id',$this->portal_id)->first();
    }
    public function updatedStudentType()
    {
        $this->validate([
            'student_type'=>'required|in:Freshmen,Transferee',
        ]);
        $this->application->student_type=$this->student_type;
        $this->application->save();
        $this->reset([
            'first_name',
            'middle_name',
            'last_name',
            'permanent_address',
            'present_address',
            'age',
            'date_of_birth',
            'place_of_birth',
            'nationality',
            'citizenship',
            'civil_status',
            'tribe',
            'religion',
            'school_last_attended',
            'school_address',
            'track_taken',
            'school_year_graduated',
            'awards_received',
            'student_photo',
            'first_sem_gpa_photo',
            'shs_cor_photo',
            'first_choice',
            'second_choice',
            'transferee_choice',
            'scan_shs_id',
            'transferee_last_school_attended',
            'previous_program',
            'school_year_last_attended',
            'sex',
            'status',
        ]);
    }
    public function render()
    {
        $this->student_type=$this->application->student_type;
        return view('livewire.student.pre-registration')
        ->layout('layouts.student');
    }

    protected function createValidation()
    {
        $this->validate([
            'first_name'=>'required',
            'middle_name'=>'nullable',
            'last_name'=>'required',
            'permanent_address'=>'required',
            'present_address'=>'required',
            'age'=>'required',
            'date_of_birth'=>'required',
            'place_of_birth'=>'required',
            'nationality'=>'required',
            'citizenship'=>'required',
            'civil_status'=>'required',
            'tribe'=>'required',
            'religion'=>'required',
            'school_last_attended'=>$this->application->student_type=='Freshmen'? 'required':'nullable',
            'school_address'=>$this->application->student_type=='Freshmen'? 'required':'nullable',
            'track_taken'=>$this->application->student_type=='Freshmen'? 'required':'nullable',
            'school_year_graduated'=>$this->application->student_type=='Freshmen'? 'required':'nullable',
            'awards_received'=>$this->application->student_type=='Freshmen'? 'required':'nullable',
            'student_photo'=>'required',
            'first_sem_gpa_photo'=>$this->application->student_type=='Freshmen'? 'required':'nullable',
            'shs_cor_photo'=>$this->application->student_type=='Freshmen'? 'required':'nullable',
            'first_choice'=>$this->application->student_type=='Freshmen'? 'required':'nullable',
            'second_choice'=>$this->application->student_type=='Freshmen'? 'required':'nullable',
            'scan_shs_id'=>$this->application->student_type=='Freshmen'? 'required':'nullable',
            'transferee_choice'=>$this->application->student_type=='Transferee'? 'required':'nullable',
            'transferee_last_school_attended'=>$this->application->student_type=='Transferee'? 'required':'nullable',
            'previous_program'=>$this->application->student_type=='Transferee'? 'required':'nullable',
            'school_year_last_attended'=>$this->application->student_type=='Transferee'? 'required':'nullable',
            'sex'=>'required|in:Male,Female',
        ]);
    }

    protected function saveApplicationDetails()
    {
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
            'student_photo'=>$this->student_photo ? $this->student_photo->store('student-photos','public'):null,
            'first_sem_gpa_photo'=>$this->first_sem_gpa_photo ? $this->first_sem_gpa_photo->store('gpa-photos','public'):null,
            'shs_cor_photo'=>$this->shs_cor_photo ? $this->shs_cor_photo->store('cor-photos','public') : null,
            'first_choice'=>$this->first_choice,
            'second_choice'=>$this->second_choice,
            'scan_shs_id'=>$this->scan_shs_id ? $this->scan_shs_id->store('id-photos','public') : null,
            'transferee_choice'=>$this->transferee_choice,
            'transferee_last_school_attended'=>$this->transferee_last_school_attended,
            'previous_program'=>$this->previous_program,
            'school_year_last_attended'=>$this->school_year_last_attended,
            'sex'=>$this->sex,
            'status'=>'approved',
       ]);

       return redirect()->route('student.home');
    }

    public function saveApplication()
    {
        $this->createValidation();

        $this->saveApplicationDetails();
    }


    
}