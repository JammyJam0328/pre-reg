<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Portal;
use App\Models\Application as ApplicationModel;
// user livewire pagination
use Livewire\WithPagination;
class Applications extends Component
{
    use WithPagination;
    public $portal_id;
    public $pagination=10;
    public $searchPortal='';

    protected $listeners=[
        'approve'=>'approve',
        'reject'=>'reject'
    ];

    public function render()
    {
        return view('livewire.admin.applications',[
            'applications' => ApplicationModel::where('portal_id',$this->portal_id)->where('status','pending')->with('portal')->paginate($this->pagination),
            'searchResults'=>$this->searchPortal == '' ? [] : $this->getSearchPortals(),
            ])
        ->layout('layouts.admin');
    }
    public function getSearchPortals()
    {
        return Portal::where('title','like','%'.$this->searchPortal.'%')->get();
    }

    public function newPortal($id)
    {
        $this->portal_id = $id;
        $this->dispatchBrowserEvent('exit-search');
    }

    public function approveConfirmation($id)
    {
        $this->set_id = $id;
        $this->emit('confirm-modal', [
            'returnAction'=>'approve',
            'message'=>'Are you sure you want to approve this application?',
        ]);
    }

    public function approve()
    {
        $this->application->update([
            'status'=>'approved',
        ]);
    }

    public function rejectConfirmation($id)
    {
        $this->set_id = $id;
        $this->emit('confirm-modal', [
            'returnAction'=>'reject',
            'message'=>'Are you sure you want to reject this application?',
        ]);
    }

    public function reject()
    {
        $this->application->update([
            'status'=>'rejected',
        ]);
    }


    public $set_id;
    public function getApplicationProperty()
    {
        return ApplicationModel::where('id',$this->set_id)->first();
    }

    
}