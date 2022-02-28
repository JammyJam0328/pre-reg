<?php

namespace App\Http\Livewire\Shared;

use Livewire\Component;

class Confirmation extends Component
{
    protected $listeners = [
        'confirm-modal' => 'openModal',
    ];
    public $returnAction;
    public $message;
    public function openModal($params)
    {
        $this->returnAction = $params['returnAction'];
        $this->message = $params['message'];
        $this->dispatchBrowserEvent('open-modal');
    }

    public function confirm()
    {
        $this->dispatchBrowserEvent('close-modal');

        $this->emitUp($this->returnAction);
    }
    public function render()
    {
        return view('livewire.shared.confirmation');
    }


}