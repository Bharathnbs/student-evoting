<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Candidate;
use App\Models\Voting;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Component
{
    public $candidates, $candidate_id, $user_id;

    public function mount()
    {
        $this->candidates = Candidate::get();
        session()->flash('message', 'Hello voter be careful you have only one vote , your voting completed this page as closed');
    }

    public function store($id)
    {
        // dd($id);
        Voting::create([

            'candidate_id' =>$id,
            'user_id' => Auth()->id(),
        ]);

        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('user.login');
    }
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('user.login');
    }
    public function render()
    {
        return view('livewire.user.user-dashboard');
    }
}
