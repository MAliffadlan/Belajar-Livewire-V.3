<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;

class Users extends Component
{
    #[Validate('required|min:3')]
    public $name = '';
    
    #[Validate('required|email:dns|unique:users')]
    public $email = '';

    #[Validate('required|min:3')]
    public $password = '';

    public function createNewUser()
    {
        // validasi attribute annotations akan dipakai oleh $this->validate()
        $this->validate();

        User::create([
            'name' =>  $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // reset input field
        $this->reset(['name', 'email', 'password']);

       
        session()->flash('success', 'User successfully created.');
    }

    public function render()
    {
        return view('livewire.users', [
            'title' => 'Users Page',
            'users' => User::all(),
        ]);
    }
}
