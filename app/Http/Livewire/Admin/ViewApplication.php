<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Application;
class ViewApplication extends Component
{

    public $application_id;
    public function mount($application_id)
    {
        $this->application_id = $application_id;
    }
    public function render()
    {
        return view('livewire.admin.view-application',[
            'application' =>  Application::findOrFail($this->application_id)->with('portal')->first()
        ])
            ->layout('layouts.admin-layout');
    }
}