<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Portal;
use App\Models\Schedule;

use Livewire\WithPagination;

class ViewSchedules extends Component
{
    use WithPagination;
    public $portal_id;
    public $portal_details;
    public $date;
    public $slots;


    public function mount($id)
    {
        $this->portal_id = $id;
        $this->portal_details = Portal::find($id);
    }
    public function getSchedules()
    {
        $schedule = Schedule::where('portal_id', $this->portal_id)->paginate(10);
        abort_if(!$schedule, 404, 'Page not found');
        return $schedule;
    }
    public function render()
    {
        return view('livewire.admin.view-schedules',[
            'schedules'=>$this->getSchedules(),
        ])
        ->layout('layouts.admin');
    }

    public function create()
    {
        $this->validate([
            'date' => 'required|date',
            'slots' => 'required|numeric',
        ]);
        $schedule = Schedule::create([
            'portal_id' => $this->portal_id,
            'date' => $this->date,
            'slots' => $this->slots,
        ]);

        $schedule->portal()->update([
            'slots' => $schedule->portal->slots + $schedule->slots,
        ]);
        
        $this->reset([
            'date',
            'slots',
        ]);

        $this->dispatchBrowserEvent('alert',[
            'type' => 'success',
            'message' => 'Schedule successfully created.',
            'action'=>'displayList',
        ]);
    }
 
}