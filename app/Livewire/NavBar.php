<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NavBar extends Component
{

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        
        $request->session()->regenerate();

        return $this->redirect('/login', navigate:true);
    }

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
