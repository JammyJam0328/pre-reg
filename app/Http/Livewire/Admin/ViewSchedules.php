<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Portal;
use App\Models\Schedule;
use App\Models\TestCenter;

use Livewire\WithPagination;

class ViewSchedules extends Component
{
    use WithPagination;
    public $action='showList';
    public $portal_id;
    public $portal_details;
    public $date;
    public $slots;

    public $testCenters=[];

    public function mount($id)
    {
        $this->portal_id = $id;
        $this->portal_details = Portal::find($id);
        if(!$this->portal_details){
            // return 404
            abort(404);
        }

        $this->testCenters = TestCenter::get();
    }
    public function getSchedules()
    {
        $schedule = Schedule::where('portal_id', $this->portal_id)
                    ->withCount('examinationTestCenters')
                    ->paginate(10);
        abort_if(!$schedule, 404, 'Page not found');
        return $schedule;
    }
    public function render()
    {
        return view('livewire.admin.view-schedules',[
            'schedules'=>$this->getSchedules(),
        ])
        ->layout('layouts.admin-layout');
    }


    public $selectedTestCenters=[];
    public $selecteds=[];


    public function addSelectedTestCenter($id, $name)
    {
        $this->selectedTestCenters[$id] = $name;
        $this->selecteds[] = $id;
    }

    public function removeSelectedTestCenter($id)
    {
        unset($this->selectedTestCenters[$id]);
        $this->selecteds = array_diff($this->selecteds, [$id]);
    }

    public function create()
    {
        /*
            Every schedule must have at least one facility.
            Every facility assigned to a schedule can only cater 200 slots per day.
            100 slots in the morning and 100 slots in the afternoon.
        */



        $this->validate([
            'date' => 'required|date',
        ]);
        
        // schedule must have at least one facility
        if (count($this->selectedTestCenters)==0) {
            $this->dispatchBrowserEvent('alert',[
                'type' => 'error',
                'message' => 'Please select at least one facility.',
                'action'=>'add',
            ]);
            return;
        }

        $schedule = Schedule::create([
            'portal_id'=>$this->portal_id,
            'date' => $this->date,
        ]);

        foreach ($this->selectedTestCenters as $key => $value) {
           $schedule->examinationTestCenters()->create([
                'test_center_id'=>$key,
                'day_time'=>'AM',
                'slot'=>'100',
            ]);
            $schedule->examinationTestCenters()->create([
                 'test_center_id'=>$key,
                 'day_time'=>'PM',
                 'slot'=>'100',
            ]);
        }

        $this->reset([
            'date',
        ]);
        $this->selectedTestCenters = [];
        $this->selecteds = [];
        $this->action='showList';
        $this->dispatchBrowserEvent('alert',[
            'type' => 'success',
            'message' => 'Schedule successfully created.',
        ]);
            
    }
    
   
 
}