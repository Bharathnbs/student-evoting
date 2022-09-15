<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Candidate;

class ShowCandidate extends Component
{
    public $candidates, $counts ;

    public function mount()
    {
        $this->candidates = Candidate::get();
        $this->count = count($this->candidates);
    }

    public function deletecandidate($id)
    {
       $candidate = Candidate::find($id);
    //    dd($candidate);
       $candidate->delete();
       return redirect()->route('admin.show_candidate');
    
    }
    public function render()
    {
        return view('livewire.admin.show-candidate')->layout('layouts.admin.candidate.show');
    }
}
