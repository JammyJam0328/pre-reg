<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Application;
use App\Models\Payment;

// use livewire/upload
use Livewire\WithFileUploads;
class PaymentSection extends Component
{   
    use WithFileUploads;
    public $application_id;
    public function mount($application_id)
    {
        $this->application_id = $application_id;
        $this->application = Application::findOrFail($this->application_id);
        if($this->application->status == 'approved'|| $this->application->status == 'payment-submitted'){
           
        }else{
            abort(404);
        }
    }

    public function getApplicationProperty()
    {
        return Application::findOrFail($this->application_id)->with('portal')->first();
    }
    public function render()
    {
        return view('livewire.student.payment-section')
                ->layout('layouts.student');
    }
    public $proof_of_payments=[];
    protected $validationAttributes = [
        'proof_of_payments' => 'Proof of Payment',
    ];
    public function submitPayment()
    {
        $amount = "275";
        $this->validate([
            'proof_of_payments.*'=>'required|mimes:png,jpg|max:20000',
        ]);

        $this->application->update([
            'status' => 'payment-submitted',
        ]);

        $payment = Payment::create([
            'application_id'=>$this->application->id,
            'portal_id'=>$this->application->portal_id,
            'amount'=>$amount,
            'status'=>'review',
        ]);

        foreach($this->proof_of_payments as $proof){
            $payment->proofs()->create([
                'image'=>$proof->store('pop-photos','public'),
            ]);
        }

    }
}