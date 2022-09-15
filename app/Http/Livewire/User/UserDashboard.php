<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Candidate;
use App\Models\Voting;

class UserDashboard extends Component
{
    public $candidates, $candidate_id, $user_id;

    public function mount()
    {
        $this->candidates = Candidate::get();
    }

    public function store($id)
    {
        // dd($id);
        Voting::create([

            'candidate_id' =>$id,
            'user_id' => Auth()->id(),
        ]);
    }
    public function render()
    {
        return view('livewire.user.user-dashboard');
    }
}
