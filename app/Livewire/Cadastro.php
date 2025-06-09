<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Cadastro extends Component
{
    public $name;
    public $cpf;
    public $password;



    public function cadastrar()
    {
        $this->validate([
            'name' => 'required',
            'cpf' => 'required|unique:users,cpf',
            'password' => 'required',
        ]);



        $this->cpf = str_replace("-","", $this->cpf);
        $this->cpf = str_replace(".", "", $this->cpf);





        User::create([
            'name' => $this->name,
            'cpf' => $this->cpf,   // ESSENCIAL
            'password' => Hash::make($this->password),
        ]);

        $this->reset();

        $this->redirect('/login');
    }

    public function render()
    {
        return view('livewire.cadastro');
    }
}


