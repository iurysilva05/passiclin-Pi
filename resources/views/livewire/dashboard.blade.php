<div class="main-content">








    <div>
        <div class="card">
            <h2 class="card-title">Bem-vindo ao PASSICLIN</h2>
            <p>Olá <span id="welcome-name">{{auth()->user()->name}}</span>, aqui você pode acessar todos os seus exames, dados médicos e informações de consultas de forma rápida e segura.</p>
        </div>
        <h2 class="card-title">Próximas Consultas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Médico</th>
                    <th>Especialidade</th>
                    <th>Local</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>15/06/2023 - 14:30</td>
                    <td>Dra. Ana Claudia</td>
                    <td>Cardiologia</td>
                    <td>Hospital Vida - Sala 302</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Detalhes</a></td>
                </tr>
                <tr>
                    <td>22/06/2023 - 09:15</td>
                    <td>Dr. Carlos Eduardo</td>
                    <td>Ortopedia</td>
                    <td>Clínica OrtoCenter</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Detalhes</a></td>
                </tr>
            </tbody>
        </table>
    </div>







    <h2 class="card-title">Exames Recentes</h2>

    <div class="exams-grid">
        <div class="exam-card">
            <h3>Hemograma Completo</h3>
            <p>Análise de sangue para verificar saúde geral</p>
            <div class="exam-date">Realizado em: 10/05/2023</div>
            <a href="/baixar-hemograma" class="download-btn" onclick="downloadExam('hemograma')">
                <i class="fas fa-download"></i> Baixar Exame
            </a>
        </div>
        <div class="exam-card">
            <h3>Eletrocardiograma</h3>
            <p>Exame para avaliar atividade cardíaca</p>
            <div class="exam-date">Realizado em: 05/05/2023</div>
            <a href="#" class="download-btn" onclick="downloadExam('eletro')">
                <i class="fas fa-download"></i> Baixar Exame
            </a>
        </div>
        <div class="exam-card">
            <h3>Ultrassom Abdominal</h3>
            <p>Exame de imagem dos órgãos abdominais</p>
            <div class="exam-date">Realizado em: 28/04/2023</div>
            <a href="#" class="download-btn" onclick="downloadExam('ultrassom')">
                <i class="fas fa-download"></i> Baixar Exame
            </a>
        </div>
    </div>




</div>
