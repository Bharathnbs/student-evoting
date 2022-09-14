<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class UserIndex extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::get();   
    }

    public function render()
    {
        return view('livewire.admin.user-index')->layout('layouts.admin.user');
    }
}
