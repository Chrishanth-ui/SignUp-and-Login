<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\facades\Hash;

class Signup extends Component
{

    //variables
    public $name;
    public $email;
    public $password;
    public $cpassword;
    public $error;

    // public $rules =[
       
    //     'name'=> 'required|min:3',
    //     'email'=> 'required|unique:users|email',
    //     'password'=> 'required|min:8|confirm:cpassword',
    //     'cpassword'=> 'required',

    // ];

    //save
    public function submit()
    {
        # code...

        $this->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|unique:users|email',
            'password'=> 'required|min:8|same:cpassword',
            'cpassword'=> 'required',
    
        ]);

        
        
        
        // dd($this->form);

        //encripting password
        $hashpassword = Hash::make($this->password);

        //creating user
        $user = User::create([
            'name'=> $this->name,
            'email'=> $this->email,
            'password'=>$hashpassword,
        ]);

        //routeing to login page
        if($user){
            session()->flash('success','You Are In '); 
            return redirect(route("login"));
        }else{
            
            $this->error = "Something went wrong!";
        }
    }

    //view
    public function render()
    {
        return view('livewire.signup')->layout('layouts.app');
    }
}
