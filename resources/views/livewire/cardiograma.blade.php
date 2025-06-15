<div>
    

    <div class="header">
        <h1>Laboratório de Análises Clínicas</h1>
        <p>Rua Exemplo, 123 - Centro - Cidade/Estado - CEP: 00000-000</p>
        <p>CNPJ: 00.000.000/0000-00 - CRM: 000000</p>
    </div>

    <div class="patient-info">
        <h2>Dados do Paciente</h2>
        <table>
            <tr>
                <th>Nome:  </th>
                <td>{{ Auth::user()->name }}</td>
                <th>Data de Nascimento:</th>
                <td>{{ Auth::user()->data_nascimento ? Auth::user()->data_nascimento->format('d/m/Y') : 'Não informado' }}</td>
            </tr>
            <tr>
                <th>Idade:</th>
                <td>{{ Auth::user()->data_nascimento ? Carbon\Carbon::parse(Auth::user()->data_nascimento)->age . ' anos' : 'Não informado' }}</td>
                <th>Sexo:</th>
                <td>
                    @switch(Auth::user()->sexo)
                        @case('M')
                            Masculino
                            @break
                        @case('F')
                            Feminino
                            @break
                        @case('O')
                            Outro
                            @break
                        @default
                            Não informado
                    @endswitch
                </td>
            </tr>
            <tr>
                <th>Médico Solicitante:</th>
                <td>Dra. Maria Oliveira</td>
                <th>CRM:</th>
                <td>SP-123456</td>
            </tr>
            <tr>
                <th>Data da Coleta:</th>
                <td>05/05/2023 - 08:30</td>
                <th>Data do Resultado:</th>
                <td>05/05/2023 - 14:15</td>
            </tr>
        </table>
    </div>

    <div class="exam-results">
        <h2>ELETROCARDIOGRAMA</h2>

        <h3>Dados do Exame</h3>
        <table class="exam-table">
            <tr>
                <th>Parâmetro</th>
                <th>Resultado</th>
                <th>Valor de Referência</th>
                <th>Unidade</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>Frequência Cardíaca</td>
                <td>72</td>
                <td>60 - 100</td>
                <td>bpm</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>Eixo Elétrico</td>
                <td>+60°</td>
                <td>-30° a +90°</td>
                <td>graus</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>Intervalo PR</td>
                <td>160</td>
                <td>120 - 200</td>
                <td>ms</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>Complexo QRS</td>
                <td>90</td>
                <td>80 - 120</td>
                <td>ms</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>Intervalo QT</td>
                <td>380</td>
                <td>350 - 440</td>
                <td>ms</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>Onda P</td>
                <td>0.10</td>
                <td>&lt; 0.12</td>
                <td>mV</td>
                <td class="normal">Normal</td>
            </tr>
        </table>

        <h3>Interpretação</h3>
        <table class="exam-table">
            <tr>
                <th>Aspecto</th>
                <th>Resultado</th>
            </tr>
            <tr>
                <td>Ritmo</td>
                <td>Sinusal regular</td>
            </tr>
            <tr>
                <td>Arritmias</td>
                <td>Não observadas</td>
            </tr>
            <tr>
                <td>Bloqueios</td>
                <td>Ausentes</td>
            </tr>
            <tr>
                <td>Hipertrofias</td>
                <td>Não evidenciadas</td>
            </tr>
            <tr>
                <td>Isquemia</td>
                <td>Sem sinais de isquemia</td>
            </tr>
            <tr>
                <td>Ondas T</td>
                <td>Normais em todas as derivações</td>
            </tr>
        </table>

        <div class="reference">
            <p><strong>Observações:</strong> Eletrocardiograma dentro dos padrões de normalidade para adultos do sexo {{ Auth::user()->sexo == 'F' ? 'feminino' : 'masculino' }}. Sem alterações significativas.</p>
        </div>
    </div>

    <div class="footer">
        <p>Este laudo foi emitido eletronicamente e dispensa assinatura conforme Resolução CFM nº 2.227/2018</p>
        <p>Responsável Técnico: Dr. Carlos Mendes - CRM/SP 12345</p>
    </div>
</div>
