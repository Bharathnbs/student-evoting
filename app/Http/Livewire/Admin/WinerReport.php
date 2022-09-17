<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\voting;
use App\Models\Candidate;

class WinerReport extends Component
{
    public $candidates , $voting, $result = 0, $winner;

    public function mount()
    {
        $this->candidates = Candidate::withCount('voting')->get();
        // dd($this->candidates);
        foreach($this->candidates as $candidate)
        {
            if($this->result < $candidate->voting_count){
                $this->result = $candidate->voting_count;
                // echo($candidate->name);
                $this->winner = $candidate->name;   
            }
        }  
    }

    public function render()
    {
        return view('livewire.admin.winer-report')->layout('layouts.admin.voting.result');
    }
}
