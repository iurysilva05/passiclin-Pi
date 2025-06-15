<div class="main-content">
    <h2 class="card-title">Meus Exames</h2>
<p>Aqui você encontra todos os seus exames realizados. Clique em "Baixar" para salvar em seu dispositivo ou em "Enviar por WhatsApp" para receber no seu celular.</p>


<table class="table">
    <thead>
        <tr>
            <th>Data</th>
            <th>Exame</th>
            <th>Tipo</th>
            <th>Local</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>10/05/2023</td>
            <td>Hemograma Completo</td>
            <td>Análise Clínica</td>
            <td>Lab. Diagnóstico</td>
            <td><span class="badge badge-success">Disponível</span></td>
            <td>
              <a href="/baixar-hemograma"class="btn btn-primary btn-sm">Baixar</a>
                <a href="https://wa.me/558195404147?text=Olá,%20gostaria%20de%20receber%20o%20resultado%20do%20meu%20Hemograma%20Completo%20realizado%20em%2010/05/2023.%20Poderia%20me%20enviar%20por%20favor?"
                   class="btn btn-success btn-sm"
                   target="_blank">WhatsApp</a>
            </td>
        </tr>
        <tr>
            <td>05/05/2023</td>
            <td>Eletrocardiograma</td>
            <td>Cardiológico</td>
            <td>Hospital Vida</td>
            <td><span class="badge badge-success">Disponível</span></td>
            <td>
               <a href="/baixar-cardiograma"class="btn btn-primary btn-sm">Baixar</a>
                <a href="https://wa.me/558195404147?text=Olá,%20gostaria%20de%20receber%20o%20resultado%20do%20meu%20Eletrocardiograma%20realizado%20em%2005/05/2023.%20Poderia%20me%20enviar%20por%20favor?"
                   class="btn btn-success btn-sm"
                   target="_blank">WhatsApp</a>
            </td>
        </tr>
        <tr>
            <td>28/04/2023</td>
            <td>Ultrassom Abdominal</td>
            <td>Imagem</td>
            <td>Clínica Imagem</td>
            <td><span class="badge badge-success">Disponível</span></td>
            <td>
                <a href="#" class="btn btn-primary btn-sm" onclick="downloadExam('ultrassom')">Baixar</a>
                <a href="https://wa.me/558195404147?text=Olá,%20gostaria%20de%20receber%20o%20resultado%20do%20meu%20Ultrassom%20Abdominal%20realizado%20em%2028/04/2023.%20Poderia%20me%20enviar%20por%20favor?"
                   class="btn btn-success btn-sm"
                   target="_blank">WhatsApp</a>
            </td>
        </tr>
        <tr>
            <td>15/04/2023</td>
            <td>Colesterol Total</td>
            <td>Análise Clínica</td>
            <td>Lab. Diagnóstico</td>
            <td><span class="badge badge-success">Disponível</span></td>
            <td>
                <a href="#" class="btn btn-primary btn-sm" onclick="downloadExam('colesterol')">Baixar</a>
                <a href="https://wa.me/558195404147?text=Olá,%20gostaria%20de%20receber%20o%20resultado%20do%20meu%20Colesterol%20Total%20realizado%20em%2015/04/2023.%20Poderia%20me%20enviar%20por%20favor?"
                   class="btn btn-success btn-sm"
                   target="_blank">WhatsApp</a>
            </td>
        </tr>
    </tbody>
</table>

<script>
function downloadExam(examId) {
    // Sua implementação existente para download
    console.log('Baixar exame:', examId);
}
</script>
    <br><br>

    <!-- Seção de Consultas -->

    <div class="card">
        <h2 class="card-title">Minhas Consultas</h2>
        <p>Acompanhe suas consultas agendadas e histórico de atendimentos.</p>

        <table class="table">
            <thead>
                <tr>
                    <th>Data/Hora</th>
                    <th>Médico</th>
                    <th>Especialidade</th>
                    <th>Local</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>15/06/2023 - 14:30</td>
                    <td>Dra. Ana Claudia</td>
                    <td>Cardiologia</td>
                    <td>Hospital Vida - Sala 302</td>
                    <td><span class="badge bg-warning text-dark">Agendada</span></td>
 <td>
                <a href="https://wa.me/558195404147?text=Olá,%20gostaria%20de%20CANCELAR%20minha%20consulta%20com%20a%20Dra.%20Ana%20Claudia%20(Cardiologia)%20marcada%20para%2015/06/2023%20às%2014:30%20na%20Clínica%20Cardiológica.%20Por%20favor,%20poderia%20me%20ajudar?"
                   class="btn btn-danger btn-sm"
                   target="_blank">
                   <i class="fas fa-times-circle"></i> Cancelar
                </a>
            </td>
                </tr>
                <tr>
                    <td>22/06/2023 - 09:15</td>
                    <td>Dr. Carlos Eduardo</td>
                    <td>Ortopedia</td>
                    <td>Clínica OrtoCenter</td>
                    <td><span class="badge bg-warning text-dark">Agendada</span></td>
                   <td>
                <a href="https://wa.me/558195404147?text=Olá,%20gostaria%20de%20CANCELAR%20minha%20consulta%20com%20o%20Dr.%20Carlos%20Eduardo%20(Ortopedia)%20marcada%20para%2022/06/2023%20às%2009:15%20na%20Clínica%20OrtoCenter.%20Por%20favor,%20poderia%20me%20ajudar?"
                   class="btn btn-danger btn-sm"
                   target="_blank">
                   <i class="fas fa-times-circle"></i> Cancelar
                </a>
            </td>
</td>
                </tr>
                <tr>
                    <td>05/05/2023 - 10:00</td>
                    <td>Dra. Juliana Mendes</td>
                    <td>Dermatologia</td>
                    <td>Clínica Pele Saudável</td>
                    <td><span class="badge badge-success">Realizada</span></td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Detalhes</a>
                    </td>
                </tr>
            </tbody>
        </table>

       <div style="text-align: center; margin-top: 1.5rem;">
    <a href="https://wa.me/558195404147?text=Olá,%20gostaria%20de%20agendar%20uma%20nova%20consulta.%20Poderia%20me%20ajudar?"
       class="btn btn-primary"
       target="_blank">
       <i class="fab fa-whatsapp"></i> Agendar via WhatsApp
    </a>
</div>



    </div>
</div>
