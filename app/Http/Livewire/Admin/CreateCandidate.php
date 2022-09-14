<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Candidate;

class CreateCandidate extends Component
{
    public $roll_no, $name, $dept, $user_id;

    protected $rules =[
        'name' => 'required',
        'dept' => 'required',
    ];

    public function updateName()
    {
        $user = User::where('roll_no','=',$this->roll_no)->first();
        // dd($user[0]->id);user data all are come to array.

        if($user != null) {
            $this->name = $user->name;
            $this->user_id = $user->id;
        }else{
            session()->flash('message', 'Roll Number is Missmatch');
        }
        // dd($this->user_id);   
    }
    public function apply()
    {
        $this->validate();
        
        Candidate::create([
            'user_id' => $this->user_id,
            'name' => $this->name,
            'dept' => $this->dept,  
        ]);
    }

    public function render()
    {
        return view('livewire.admin.create-candidate')->layout('layouts.admin.candidate.create');
    }
}
