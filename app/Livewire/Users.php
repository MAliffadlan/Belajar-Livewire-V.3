<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;                     
use Illuminate\Support\Facades\Hash;     

class Users extends Component
{


    public function createUser()
    {
        User::create([                       
            'name' => 'M Alif Fadlan',
            'email' => 'test3@email.com',
            'password' => Hash::make('password'),
        ]);
    }

    public function render()
    {
        return view('livewire.users', [
            'title' => 'Users Page',
            'users' => User::all(),
        ]);
    }
}
