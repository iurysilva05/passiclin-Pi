<div>
    <!-- <nav class="navbar navbar-expand-lg bg-primary border-bottom border-body mb-5" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="bi bi-list"></i>MENU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <span class="text text-light"><i class="bi bi-person"></i>{{auth()->user()->name}} </a></span>
                    </li>
                </ul>

            </div>
        </div>

    </nav>



    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div> -->


    <div class="nav-menu">

        <div class="logo">
            <i class="fas fa-heartbeat"></i> PASSICLIN
        </div>



        <ul>
            <li><a href="/dashboard" class="active"><i class="bi bi-house-door-fill"></i>Exames Recentes</a></li>
            <li class="list-group-item"><a href="{{route('paciente')}}"><i class="bi bi-person"></i>Meus Dados</li></a>
            <li class="list-group-item">
                <a href="{{ route('examesuser') }}">
                    <i class="fas fa-file-medical"></i> Exames/Consultas
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('listexames') }}">
                    <i class="fas fa-file-medical"></i> Exames/Consultas
                </a>
            </li>

            <!-- <li><a href="/exames-user" class="active"><i class="bi bi-people-fill"></i>Meus Exames</a></li>
            <li><a href="/agendamentos"><i class="bi bi-calendar-check-fill"></i> Agendamentos</a></li>
            <li><a href="/configuracoes"><i class="bi bi-gear-fill"></i> Configurações</a></li> -->
        </ul>

        <div class="logout-btn-container">
            <a href="/logout" class="btn btn-danger"><i class="bi bi-box-arrow-right"></i> Sair</a>
        </div>

    </div>

</div>
</div>
