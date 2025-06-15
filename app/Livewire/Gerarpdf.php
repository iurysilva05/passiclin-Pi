<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;


class GerarPdf extends Component
{
    public $titulo = 'Resultado de Hemograma Completo';
    public $user;
    public $resultados;
    public $carregando = false;
    public $erro = null;

    public function mount()
    {
        $this->carregarDadosUsuario();
    }

    protected function carregarDadosUsuario()
    {
        try {
            $this->user = Auth::user();

            if (!$this->user) {
                throw new \Exception('Usuário não autenticado');
            }

            $this->resultados = [
                'Hemoglobina' => ['valor' => '15.2', 'referencia' => '13.5 - 17.5', 'unidade' => 'g/dL', 'status' => 'normal'],
                'Hematócrito' => ['valor' => '45.0', 'referencia' => '40.0 - 50.0', 'unidade' => '%', 'status' => 'normal'],
                'Leucócitos' => ['valor' => '7.8', 'referencia' => '4.0 - 10.0', 'unidade' => 'mil/µL', 'status' => 'normal'],
                'Plaquetas' => ['valor' => '220', 'referencia' => '150 - 450', 'unidade' => 'mil/µL', 'status' => 'normal']
            ];

        } catch (\Exception $e) {
            $this->erro = $e->getMessage();
        }
    }

    public function gerarPdf()
    {
        $this->carregando = true;
        $this->erro = null;

        try {
            $this->carregarDadosUsuario();

            $pdf = Pdf::loadView('pdf.hemograma', [
                'titulo' => $this->titulo,
                'user' => $this->user,
                'resultados' => $this->resultados,
                'data_emissao' => now()->format('d/m/Y H:i'),
                'responsavel_tecnico' => 'Dr. Carlos Mendes - CRM/SP 12345'
            ]);

            $nomeArquivo = 'Hemograma_'.str_replace(' ', '_', $this->user->name).'_'.now()->format('Ymd_His').'.pdf';

            return $pdf->download($nomeArquivo);

        } catch (\Exception $e) {
            $this->erro = $e->getMessage();
        } finally {
            $this->carregando = false;
        }
    }

    private function formatarSexo($sexo)
    {
        return match($sexo) {
            'M' => 'Masculino',
            'F' => 'Feminino',
            'O' => 'Outro',
            default => 'Não informado'
        };
    }

    public function render()
    {
        return view('livewire.gerar-exame-pdf');
    }
}
