<?php

namespace App\Http\Livewire\Student\PreRegistration;

use Livewire\Component;
use App\Models\Campus;
use App\Models\Application;
use Livewire\WithFileUploads;
use File;
class RequirementsUpload extends Component
{
    use WithFileUploads;
    public $portalid;
    public $application;

    public $student_photo;
    public $first_sem_gpa_photo;
    public $shs_cor_photo;
    public $studentPhotoNewUrl;
    public $firstSemGpaPhotoNewUrl;
    public $shsCorPhotoNewUrl;
    public function mount()
    {
        $this->studentPhotoNewUrl = $this->application['student_photo'];
        $this->firstSemGpaPhotoNewUrl = $this->application['first_sem_gpa_photo'];
        $this->shsCorPhotoNewUrl = $this->application['shs_cor_photo'];
    }

    protected $validationAttributes = [
        'student_photo' => 'Student Photo',
        'first_sem_gpa_photo' => 'First Semester GPA Photo',
        'shs_cor_photo' => 'SHS Principal/Heap Certificate Photo',
    ];

  
  

    public function render()
    {
        return view('livewire.student.pre-registration.requirements-upload');
    }

    public function updatedStudentPhoto()
    {
        $this->validate([
            'student_photo' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $this->studentPhotoNewUrl = $this->student_photo->store('student-photos','public');
        $this->application->update([
            'student_photo' => $this->studentPhotoNewUrl,
        ]);
        $this->emit('change');
    }

    public function updatedFirstSemGpaPhoto()
    {
        $this->validate([
            'first_sem_gpa_photo' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $this->firstSemGpaPhotoNewUrl = $this->first_sem_gpa_photo->store('gpa-photos','public');
        $this->application->update([
            'first_sem_gpa_photo' => $this->firstSemGpaPhotoNewUrl,
        ]);
        $this->emit('change');
    }

    public function updatedShsCorPhoto()
    {
        $this->validate([
            'shs_cor_photo' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $this->shsCorPhotoNewUrl = $this->shs_cor_photo->store('cor-photos','public');
        $this->application->update([
            'shs_cor_photo' => $this->shsCorPhotoNewUrl,
        ]);
          $this->emit('change');
    }

    public function finalize()
    {
        $this->application->update([
            'status' => 'pending',
        ]);
        return redirect()->route('student.home');
    }
}