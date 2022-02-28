<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class PaymentSection extends Component
{
    public function render()
    {
        return view('livewire.student.payment-section')
        ->layout('layouts.student');
    }
}