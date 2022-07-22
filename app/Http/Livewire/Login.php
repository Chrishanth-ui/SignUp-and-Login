<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\facades\Auth;

class Login extends Component
{

    public $error = "";
    public $email = "";
    public $password = "";

    public function render()
    {
        return view('livewire.login')->layout('layouts.app');
    }

    public function submit()
    {
        # code...
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            session()->flash('success','you are logged in');
            return redirect(route('projects'));

        }else{
                $this->password = '';
                $this->email = '';
                return $this->error = "wrong data";
        }

        dd($this->email,$this->password);
    }
}


