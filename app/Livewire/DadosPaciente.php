<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Paciente;

class DadosPaciente extends Component
{
     public $pacienteId = null; // Armazena o ID do paciente quando em modo de edição (null para cadastro novo)
    public $name;
    public $telefone;
    public $email;
    public $cep;
    public $cpf;
    public $isEditing = false; //  Flag que indica se estamos editando (true) ou cadastrando (false)

    protected $listeners = ['editPaciente' => 'loadPaciente'];

    public function mount($pacienteId = null)
    {
        if ($pacienteId) {
            $this->loadPaciente($pacienteId);
        }
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|max:100|unique:pacientes,email,'.$this->pacienteId,
            'cep' => 'required|string|max:15',
            'cpf' => 'required|string|max:11',
        ];
    }

    public function loadPaciente($id)
    {
        $paciente = Paciente::findOrFail($id);

        $this->pacienteId = $id;
        $this->name = $paciente->name;
        $this->telefone = $paciente->telefone;
        $this->email = $paciente->email;
        $this->cep = $paciente->cep;
        $this->cpf = $paciente->cpf;
        $this->isEditing = true;
    }

    public function resetForm()
    {
        $this->reset();
        $this->resetErrorBag();
    }

    public function savePaciente()
    {
        $validatedData = $this->validate();

        if ($this->isEditing) {
            $paciente = Paciente::findOrFail($this->pacienteId);
            $paciente->update($validatedData);
            $message = 'Paciente atualizado com sucesso!';
        } else {
            Paciente::create($validatedData);
            $message = 'Paciente cadastrado com sucesso!';
        }

        session()->flash('message', $message);
        $this->resetForm();

        // Emite evento para atualizar listagem se necessário
        $this->dispatch('pacienteSaved');
    }

    public function render()
    {
        return view('livewire.dados-paciente');
    }
}
