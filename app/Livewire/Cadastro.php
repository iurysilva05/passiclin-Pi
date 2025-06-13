<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Paciente;

class Cadastro extends Component
{
    public $name;
    public $cpf;
    public $password;

    public function cadastrar()
    {
        $this->validate([
            'name' => 'required',
            'cpf' => 'required|unique:pacientes,cpf', // note o nome da tabela em minúsculo
            'password' => 'required',
        ]);

        // Limpar CPF
        $cpfLimpo = str_replace(['-', '.'], '', $this->cpf);

        // Cria o usuário
        $user = User::create([
            'name' => $this->name,
            'password' => Hash::make($this->password),
            'cpf' => $this->cpf,
        ]);

        // Cria o paciente relacionado ao usuário
        Paciente::create([
            'name' => $this->name,
            'cpf' => $cpfLimpo,
            'id_user' => $user->id, // se houver relacionamento com o usuário
        ]);

        $this->reset();
        $this->redirect('/login');
    }

    public function render()
    {
        return view('livewire.cadastro');
    }
}
