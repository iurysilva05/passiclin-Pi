<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DadosPaciente extends Component
{
    // Dados Pessoais
    public $name;
    public $cpf;
    public $data_nascimento;
    public $sexo;
    public $telefone;
    public $email;

    // Endereço
    public $cep;
    public $endereco;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $estado;

    // Informações de Saúde
    public $tipo_sanguineo;
    public $alergias;
    public $medicacoes;
    public $condicoes_medicas;

    protected function rules()
    {
        return [
            // Dados Pessoais
            'name' => 'required|string|max:100',
            'cpf' => 'required|string|max:14|unique:users,cpf,'.Auth::id(),
            'data_nascimento' => 'nullable|date',
            'sexo' => 'nullable|in:M,F,O',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|max:100|unique:users,email,'.Auth::id(),

            // Endereço
            'cep' => 'nullable|string|max:9',
            'endereco' => 'nullable|string|max:200',
            'numero' => 'nullable|string|max:20',
            'complemento' => 'nullable|string|max:100',
            'bairro' => 'nullable|string|max:100',
            'cidade' => 'nullable|string|max:100',
            'estado' => 'nullable|string|max:2',

            // Informações de Saúde
            'tipo_sanguineo' => 'nullable|string|max:3|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
            'alergias' => 'nullable|string',
            'medicacoes' => 'nullable|string',
            'condicoes_medicas' => 'nullable|string',
        ];
    }

    public function mount()
    {
        $this->loadPaciente();
    }

    public function loadPaciente()
    {
        $paciente = Auth::user();

        // Dados Pessoais
        $this->name = $paciente->name ?? '';
        $this->cpf = $paciente->cpf ?? '';
        $this->data_nascimento = $paciente->data_nascimento?->format('Y-m-d') ?? '';
        $this->sexo = $paciente->sexo ?? '';
        $this->telefone = $paciente->telefone ?? '';
        $this->email = $paciente->email ?? '';

        // Endereço
        $this->cep = $paciente->cep ?? '';
        $this->endereco = $paciente->endereco ?? '';
        $this->numero = $paciente->numero ?? '';
        $this->complemento = $paciente->complemento ?? '';
        $this->bairro = $paciente->bairro ?? '';
        $this->cidade = $paciente->cidade ?? '';
        $this->estado = $paciente->estado ?? '';

        // Informações de Saúde
        $this->tipo_sanguineo = $paciente->tipo_sanguineo ?? '';
        $this->alergias = $paciente->alergias ?? '';
        $this->medicacoes = $paciente->medicacoes ?? '';
        $this->condicoes_medicas = $paciente->condicoes_medicas ?? '';
    }

    public function savePaciente()
    {
        $validatedData = $this->validate();

        // Remove máscaras antes de salvar
        $validatedData['cpf'] = preg_replace('/[^0-9]/', '', $validatedData['cpf']);
        $validatedData['telefone'] = preg_replace('/[^0-9]/', '', $validatedData['telefone']);
        $validatedData['cep'] = preg_replace('/[^0-9]/', '', $validatedData['cep']);

        /** @var \App\Models\User $paciente */
        $paciente = Auth::user();

        // Atualiza os campos individualmente para evitar problemas com fillable
        foreach ($validatedData as $key => $value) {
            $paciente->{$key} = $value;
        }

        $paciente->save();

        // Recarrega os dados para aplicar os mutators
        $this->loadPaciente();

        session()->flash('success', 'Dados atualizados com sucesso!');
    }


    public function buscarCep()
    {
        $this->validateOnly('cep');

        $cep = preg_replace('/[^0-9]/', '', $this->cep);

        if (strlen($cep) === 8) {
            $url = "https://viacep.com.br/ws/{$cep}/json/";

            try {
                $response = file_get_contents($url);
                $data = json_decode($response, true);

                if (!isset($data['erro'])) {
                    $this->endereco = $data['logradouro'] ?? '';
                    $this->bairro = $data['bairro'] ?? '';
                    $this->cidade = $data['localidade'] ?? '';
                    $this->estado = $data['uf'] ?? '';
                    $this->complemento = $data['complemento'] ?? '';

                    session()->flash('info', 'CEP encontrado e preenchido automaticamente.');
                } else {
                    session()->flash('error', 'CEP não encontrado.');
                }
            } catch (\Exception $e) {
                session()->flash('error', 'Erro ao buscar CEP: ' . $e->getMessage());
            }
        }
    }

    public function render()
    {
        return view('livewire.dados-paciente');
    }
}
