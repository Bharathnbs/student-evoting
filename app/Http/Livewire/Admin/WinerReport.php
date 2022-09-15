<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\voting;
use App\Models\Candidate;

class WinerReport extends Component
{
    public $candidates , $voting, $result;

    public function mount()
    {
        $this->candidates = Candidate::withCount('voting')->get();
    }

    public function render()
    {
        return view('livewire.admin.winer-report');
    }
}
