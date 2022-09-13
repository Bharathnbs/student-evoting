<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;

class CreateUser extends Component
{
    public $name, $roll_no, $password, $email;

    protected $rules =[
        'name' => 'required',
        'email' => 'required',  
        'roll_no' => 'required',
        'password' => 'required',
    ];

    public function submit()
    {
        $this->validate();
        // dd($this->rollno);
        User::create([
           'name' => $this->name,
           'email' =>$this->email,
           'roll_no' => $this->roll_no,
           'password' =>  bcrypt($this->password),
        ]);
    }
    public function render()
    {
        return view('livewire.user.create-user')->layout('layouts.user.usercreate');
    }
}
