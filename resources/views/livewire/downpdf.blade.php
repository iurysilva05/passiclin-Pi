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
                <td>{{ now()->format('d/m/Y - H:i') }}</td>
                <th>Data do Resultado:</th>
                <td>{{ now()->format('d/m/Y - H:i') }}</td>
            </tr>
        </table>
    </div>

    <div class="exam-results">
        <h2>HEMOGRAMA COMPLETO</h2>

        <h3>Eritrograma</h3>
        <table class="exam-table">
            <tr>
                <th>Exame</th>
                <th>Resultado</th>
                <th>Valor de Referência</th>
                <th>Unidade</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>Hemoglobina</td>
                <td>15.2</td>
                <td>13.5 - 17.5</td>
                <td>g/dL</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>Hematócrito</td>
                <td>45.0</td>
                <td>40.0 - 50.0</td>
                <td>%</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>Eritrócitos</td>
                <td>5.2</td>
                <td>4.5 - 5.9</td>
                <td>milhões/µL</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>VCM (Volume Corpuscular Médio)</td>
                <td>86.5</td>
                <td>80.0 - 100.0</td>
                <td>fL</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>HCM (Hemoglobina Corpuscular Média)</td>
                <td>29.2</td>
                <td>27.0 - 33.0</td>
                <td>pg</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>CHCM (Conc. Hemoglobina Corpuscular Média)</td>
                <td>33.8</td>
                <td>32.0 - 36.0</td>
                <td>g/dL</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>RDW (Distribuição dos Eritrócitos)</td>
                <td>12.5</td>
                <td>11.5 - 14.5</td>
                <td>%</td>
                <td class="normal">Normal</td>
            </tr>
        </table>

        <h3>Leucograma</h3>
        <table class="exam-table">
            <tr>
                <th>Exame</th>
                <th>Resultado</th>
                <th>Valor de Referência</th>
                <th>Unidade</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>Leucócitos Totais</td>
                <td>7.8</td>
                <td>4.0 - 10.0</td>
                <td>mil/µL</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>Neutrófilos</td>
                <td>4.5 (58%)</td>
                <td>1.8 - 7.0 (40-70%)</td>
                <td>mil/µL (%)</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>Linfócitos</td>
                <td>2.3 (30%)</td>
                <td>1.0 - 3.0 (20-50%)</td>
                <td>mil/µL (%)</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>Monócitos</td>
                <td>0.6 (8%)</td>
                <td>0.2 - 1.0 (2-10%)</td>
                <td>mil/µL (%)</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>Eosinófilos</td>
                <td>0.3 (4%)</td>
                <td>0.0 - 0.5 (1-5%)</td>
                <td>mil/µL (%)</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>Basófilos</td>
                <td>0.1 (1%)</td>
                <td>0.0 - 0.2 (0-2%)</td>
                <td>mil/µL (%)</td>
                <td class="normal">Normal</td>
            </tr>
        </table>

        <h3>Plaquetas</h3>
        <table class="exam-table">
            <tr>
                <th>Exame</th>
                <th>Resultado</th>
                <th>Valor de Referência</th>
                <th>Unidade</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>Plaquetas</td>
                <td>220</td>
                <td>150 - 450</td>
                <td>mil/µL</td>
                <td class="normal">Normal</td>
            </tr>
            <tr>
                <td>VPM (Volume Plaquetário Médio)</td>
                <td>8.5</td>
                <td>7.0 - 11.0</td>
                <td>fL</td>
                <td class="normal">Normal</td>
            </tr>
        </table>

        <div class="reference">
            <p><strong>Observações:</strong> Todos os parâmetros estão dentro dos valores de referência para adultos do sexo {{ Auth::user()->sexo == 'F' ? 'feminino' : 'masculino' }}.</p>
        </div>
    </div>

    <div class="footer">
        <p>Este laudo foi emitido eletronicamente e dispensa assinatura conforme Resolução CFM nº 2.227/2018</p>
        <p>Responsável Técnico: Dr. Carlos Mendes - CRM/SP 12345</p>
    </div>
</div>
