<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Paciente;

class DadosPaciente extends Component
{
    public $name;
    public $telefone;
    public $email;
    public $cep;
    public $cpf;

    protected function rules()
    {
        return [
            'name' => 'nullable|string|max:100',
            'telefone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:100|unique:pacientes,email,'.Auth::id(),
            'cep' => 'nullable|string|max:9',
            'cpf' => 'nullable|string|max:14|unique:pacientes,cpf,'.Auth::id(),
        ];
    }

    public function mount()
    {
        $this->loadPaciente();
    }

    public function loadPaciente()
    {
        $paciente = Auth::user();

        $this->name = $paciente->name ?? '';
        $this->telefone = $paciente->telefone ?? '';
        $this->email = $paciente->email ?? '';
        $this->cep = $paciente->cep ?? '';
        $this->cpf = $paciente->cpf ?? '';
    }

    public function savePaciente()
    {
        $validatedData = $this->validate();

        // Filtra apenas os campos que foram preenchidos
        $dataToUpdate = array_filter($validatedData, function($value) {
            return !empty($value);
        });

        if (!empty($dataToUpdate)) {
            /** @var \App\Models\Paciente $paciente */
            $paciente = Auth::user();
            $paciente->update($dataToUpdate);

            session()->flash('success', 'Dados atualizados com sucesso!');
            $this->loadPaciente();
        } else {
            session()->flash('info', 'Nenhum dado foi alterado.');
        }
    }

    public function render()
    {
        return view('livewire.dados-paciente');
    }
}
