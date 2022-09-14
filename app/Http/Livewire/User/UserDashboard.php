<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Candidate;

class UserDashboard extends Component
{
    public $candidates;

    public function mount()
    {
        $this->candidates = Candidate::get();
    }
    public function render()
    {
        return view('livewire.user.user-dashboard');
    }
}
