<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }
    public function logout(){
        Auth::logout();
        $this->redirect('/');
    }

}
