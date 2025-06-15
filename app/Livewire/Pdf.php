<?php


use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Response;

class Pdf extends Component
{
    public function download()
    {
        // Configurações do PDF
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Permite CSS/imagens externas

        $dompdf = new Dompdf($options);

        // Renderiza uma view Blade como HTML
        $html = view('pdf.template', [
            'titulo' => 'Meu Relatório',
            'dados' => ['Jan' => 5000, 'Fev' => 7200]
        ])->render();

        $dompdf->loadHtml($html);
        $dompdf->render();

        // Gera a resposta de download
        return Response::streamDownload(
            fn () => print($dompdf->output()),
            "relatorio.pdf"
        );
    }

    public function render()
    {
        return view('livewire.download-pdf');
    }
}
