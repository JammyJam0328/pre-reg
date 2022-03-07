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
    public $set_id; 
    protected $listeners=[
        'approve'=>'approve',
    ];
    public function getPaymentProperty()
    {
        return Payment::findOrFail($this->set_id);
    }
    public function render()
    {
        return view('livewire.admin.payments',[
            'payments' => Payment::with(['portal','application'])->where('status','review')->paginate($this->pagination),
        ])
        ->layout('layouts.admin');
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
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>'Payment successfully approved.',
        ]);
    }
}