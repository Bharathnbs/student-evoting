<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        // dd(auth()->user());
        return view('livewire.admin.admin-dashboard');
    }
}
