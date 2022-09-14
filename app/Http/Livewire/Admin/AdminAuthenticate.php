<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Admins;
use Illuminate\Support\Facades\Auth;


class AdminAuthenticate extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function mount()
    {
        // dd(auth()->user());
    }

    public function authenticate()
    {
        $validated = $this->validate();
        // dd($validated);
        if(Auth::guard('admin')->attempt($validated)) {
            session()->regenerate();
            return redirect()->route('admin.dashboard');
        } else {
            $this->addError('password', 'Password mismatch');
        }

       return back()->withErrors([ 'please check email and password' ]);

    }

    public function render()
    {
        return view('livewire.admin.admin-authenticate')->layout('layouts.admin.authenticate');
    }
}
