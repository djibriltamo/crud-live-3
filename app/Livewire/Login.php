<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function login(Request $request)
    {
        $validated = $this->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        if(Auth::attempt($validated))
        {
            $request->session()->regenerate();

            session()->flash('info', 'You are logged In');

            return $this->redirect('/customers', navigate:true);
        }

        $this->addError('email', 'The email provider doesn\'t match our record');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
