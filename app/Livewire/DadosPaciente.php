<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Paciente;

class DadosPaciente extends Component
{
    public $name;
    public $telefone;
    public $email;
    public $cep;

    public function salvar()
    {
        $this->validate([
            'name' => 'required|string|max:100',
            'telefone' => 'required|string|max:15',
            'email' => 'required|email|max:100',
            'cep' => 'required|string|max:15',
        ]);

        Paciente::create([
            'name' => $this->name,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'cep' => $this->cep,
        ]);

        session()->flash('message', 'Paciente cadastrado com sucesso!');

        $this->reset(['name', 'telefone', 'email', 'cep']);
    }

    public function render()
    {
        return view('livewire.dados-paciente');
    }
}

