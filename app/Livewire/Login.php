<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $cpf;
    public $password;

    public function login()
    {
        // Remove formatação do CPF antes de validar
        $cpfLimpo = preg_replace('/[^0-9]/', '', $this->cpf);

        $this->validate([
            'cpf' => 'required',
            'password' => 'required'
        ], [
            'cpf.required' => 'O campo CPF é obrigatório',
            'password.required' => 'O campo senha é obrigatório'
        ]);

        $autenticated = Auth::attempt([
            'cpf' => $cpfLimpo,
            'password' => $this->password
        ]);

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
