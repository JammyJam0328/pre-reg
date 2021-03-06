<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Application;
use App\Models\Payment;
// use livewire/upload
use Livewire\WithFileUploads;
class Payments extends Component
{
    use WithFileUploads;
    public $pagination=10;
    public $filter='review';
    public $set_id; 
    public $action='showList';
    protected $listeners=[
        'approve'=>'approve',
    ];
    public function getPaymentProperty()
    {
        return Payment::where('id',$this->set_id)->with(['application.portal','proofs'])->first();
    }
    public function render()
    {
        return view('livewire.admin.payments',[
            'payments' => Payment::with(['portal','application'])->where('status','like','%'.$this->filter.'%')->paginate($this->pagination),
        ])
        ->layout('layouts.admin-layout');
    }

    public function approveConfirmation($id)
    {
        $this->set_id = $id;
         $this->emit('confirm-modal', [
            'returnAction'=>'approve',
            'message'=>'Are you sure you want to approve this payment?',
        ]);
    }

    public function approve()
    {
        $this->payment->update([
            'status'=>'approved',
        ]);
        $this->payment->application->update([
            'status'=>'payment-approved',
        ]);
        $this->action='showList';
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>'Payment successfully approved.',
        ]);
    }


    public function viewPaymentDetails($id)
    {
        $this->action='viewPaymentDetails';
        $this->set_id = $id;
    }
    
}