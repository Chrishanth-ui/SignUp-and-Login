<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\facades\Auth;

class Logout extends Component
{


    public function logout()
    {
        # code...
        Auth::logout();
        return redirect(route('login'));
    }

    public function render()
    {
        return view('livewire.logout');
    }
}
