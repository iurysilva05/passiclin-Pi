<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $cpf;
    public $password;

    public function login(){

        $this->validate([
            'cpf' => 'required',
            'password' => 'required'
        ]);

        $autenticated = Auth::attempt(['cpf' => $this->cpf, 'password' => $this->password]);

        if(!$autenticated){
            return session()->flash('error','CPF ou senha inválidos');
        }

        $this->redirect('/dashboard');

    }

    public function render()
    {
        return view('livewire.login');
    }
}
