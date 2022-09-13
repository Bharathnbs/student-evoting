<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Admins;

class CreateAdmin extends Component
{
    public $name, $email, $password;

    protected $rules =[
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        Admins::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
    }
    public function render()
    {
        return view('livewire.admin.create-admin');
    }
}
