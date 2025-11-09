<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
class Users extends Component


{
    
    public function render()
    {
        return view('livewire.users' , [
            'title' => 'Users Page' ,
            'users' => User::all()
        ]);
    }
}
