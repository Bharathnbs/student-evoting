<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserAuthenticate extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function authenticate()
    {
        $validated = $this->validate();
        // dd($validated);
        if(Auth::guard('web')->attempt($validated)) {
            session()->regenerate();
            return redirect()->route('user.dashboard');
        } else {
            $this->addError('password', 'Password mismatch');
        }

       return back()->withErrors([ 'please check email and password' ]);

    }

    public function render()
    {
        return view('livewire.user.user-authenticate')->layout('layouts.user.authenticate');
    }
}
