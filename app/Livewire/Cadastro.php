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

    protected $rules = [
        'name' => 'required|string|max:255',
        'cpf' => 'required|string|max:14|unique:pacientes,cpf',
        'password' => 'required|string|min:8',
    ];

    public function cadastrar()
    {
        $this->validate();

        // Remove formatação do CPF para armazenamento
        $cpfLimpo = preg_replace('/[^0-9]/', '', $this->cpf);

        // Cria o usuário
        $user = User::create([
            'name' => $this->name,
            'password' => Hash::make($this->password),
            'cpf' => $cpfLimpo, // Armazena sem formatação também no User
        ]);

        // Cria o paciente relacionado ao usuário
        Paciente::create([
            'name' => $this->name,
            'cpf' => $cpfLimpo, // Armazena sem formatação
            'user_id' => $user->id, // Padronizando para user_id (mais comum)
        ]);

        $this->reset();
        return redirect()->to('/login')->with('success', 'Cadastro realizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.cadastro');
    }
}
