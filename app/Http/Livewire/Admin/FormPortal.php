<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Portal;
//use livewire\pagination
use Livewire\WithPagination;
class FormPortal extends Component
{
    use WithPagination;
    public $action='showList';

    public $title;
    public $school_year;
    public $schoolYears=[
        '2022-2023',
        '2023-2024',
        '2024-2025',
        '2025-2026',
        '2026-2027',
        '2027-2028',
        '2028-2029',
        '2029-2030',
    ];
    protected $listeners = [
        'openPortal' => 'openPortal',
        'closePortal' => 'closePortal',
    ];
    public function render()
    {
        return view('livewire.admin.form-portal',[
            'portals'=>Portal::paginate(10)
        ])
        ->layout('layouts.admin-layout');
    }

    public function create()
    {
        $this->validate([
            'title' => 'required',
            'school_year' => 'required|in:'.implode(',',$this->schoolYears),
        ]);
        Portal::create([
            'title' => $this->title,
            'school_year' => $this->school_year,
        ]);

        $this->reset([
            'title',
            'school_year',
        ]);
        $this->action='showList';
        $this->dispatchBrowserEvent('alert',[
            'type' => 'success',
            'message' => 'Portal successfully created.',
            'action'=>'displayList',
        ]);
    }

    public $set_id;
    public function confirmOpenPortal($portal_id)
    {
        $this->set_id = $portal_id;
        $this->emit('confirm-modal', [
            'returnAction'=>'openPortal',
            'message'=>'Are you sure you want to open this portal? Other open portals will be closed.',
        ]);
    }

    public function confirmClosePortal($portal_id)
    {
        $this->set_id = $portal_id;
        $this->emit('confirm-modal', [
            'returnAction'=>'closePortal',
            'message'=>'Are you sure you want to close this portal?',
        ]);
    }

    public function openPortal()
    {
       $portal = Portal::where('id',$this->set_id)->with('schedules')->first();
    
         if(count($portal->schedules)){
            // get all open portal and close it
            $newPortals = Portal::where('status','open')->get();
            foreach($newPortals as $newPortal){
                $newPortal->status = 'close';
                $newPortal->save();
            }
            
            $portal->update([
                'status'=>'open'
            ]);
            $this->dispatchBrowserEvent('alert',[
                'type' => 'success',
                'message' => 'Portal is now open.',
                'action'=>'displayList'
            ]);
        }else{
            $this->dispatchBrowserEvent('alert',[
                'type' => 'error',
                'message' => 'Portal must have atleast one schedule',
                'action'=>'displayList'
            ]);
        }
         
    }

    public function closePortal()
    {
        $portal = Portal::where('id',$this->set_id)->first();
        $portal->update([
            'status'=>'close'
        ]);
        $this->dispatchBrowserEvent('alert',[
            'type' => 'success',
            'message' => 'Portal is now closed.',
            'action'=>'displayList'
        ]);
    }

    public function sessionRemove()
    {
        session()->forget('success');
    }
}