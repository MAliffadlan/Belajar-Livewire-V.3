<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;                     
use Illuminate\Support\Facades\Hash;     

class Users extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';

    public function createNewUser()
    {
        User::create([                       
            'name' =>  $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $this->reset([
            'name',
            'email',
            'password']);
    }

    public function render()
    {
        return view('livewire.users', [
            'title' => 'Users Page',
            'users' => User::all(),
        ]);
    }
}
