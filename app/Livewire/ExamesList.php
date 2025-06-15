<?php

namespace App\Livewire;

use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;

class ExamesList extends Component
{
    public function gerarPdf()
    {
        $dados = [
            'titulo' => 'Exemplo de PDF',
            'data' => now()->format('d/m/Y'),
            'conteudo' => 'Este é um PDF ilustrativo gerado diretamente do seu sistema.'
        ];

        $pdf = Pdf::loadView('livewire.pdf-simples', $dados);

        return $pdf->download('documento-ilustrativo.pdf');
    }

    public function render()
    {
        return view('livewire.gerar-pdf-simples');
    }
}
