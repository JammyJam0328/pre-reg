<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Portal;
use App\Models\Application;
use App\Models\User;

class Home extends Component
{
    public $pendings=[];
    public $approveds=[];
    public $paymentSubmitted=[];
    public $paymentApproved=[];
    public $scheduleSelected=[];
    public $denieds=[];



    public $ongoings=[];
    public $allNone=[];
    public $portal;
    // public function isApplied($portal_id)
    // {
    //     $application = Application::where('user_id',auth()->user()->id)->where('portal_id',$portal_id)->first();
    //     if($application){
    //         return true;
    //     }
    //     return false;
    // }
    public function mount()
    {
        // $this->denieds = Application::where('user_id',auth()->user()->id)->where('status','denied')->pluck('portal_id')->toArray();
        // $this->scheduleSelected = Application::where('user_id',auth()->user()->id)->where('status','schedule-selected')->pluck('portal_id')->toArray();
        // $this->paymentApproved = Application::where('user_id',auth()->user()->id)->where('status','payment-approved')->pluck('portal_id')->toArray();
        // $this->allNone = Application::where('status','')->where('user_id',auth()->user()->id)->pluck('portal_id')->toArray();
        // $this->pendings = Application::where('status','pending')->where('user_id',auth()->user()->id)->pluck('portal_id')->toArray();
        // $this->approveds = Application::where('status','approved')->where('user_id',auth()->user()->id)->pluck('portal_id')->toArray();
        // $this->paymentSubmitted = Application::where('status','payment-submitted')->where('user_id',auth()->user()->id)->pluck('portal_id')->toArray();
        // $this->ongoings = Application::where('status','ongoing')->where('user_id',auth()->user()->id)->pluck('portal_id')->toArray();
    }
    public function render()
    {
        $this->portal =Portal::where('status','open')->first();
        return view('livewire.student.home')
        ->layout('layouts.student');
    }

    public function checkApplication()
    {
        $application = Application::where('user_id',auth()->user()->id)->where('portal_id',$this->portal->id)->first();
        if ($application) {
           return $application->status;
        }else{
            return 'none';
        }
    }
    public function initialRegister($id)
    {
        $application = Application::where('user_id',auth()->user()->id)->where('portal_id',$id)->first();
        
        if($application){
           if ($application->status == 'ongoing') {
                return redirect()->route('student.pre-registration',['portal_id'=>$id]);
           }elseif($application->status == 'pending'){
               dd('Your application has been submitted. Please wait for the admin to approve your application.');
           }
           
        }else{
            
            Application::create([
                'user_id' => auth()->user()->id,
                'portal_id' => $id,
                'status' => 'ongoing'
            ]);
            return redirect()->route('student.pre-registration',['portal_id'=>$id]);
        }
    }
}