<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
            :root {
                --primary-color: #2c3e50;
                --secondary-color: #3498db;
                --accent-color: #e74c3c;
                --light-color: #ecf0f1;
                --dark-color: #2c3e50;
                --success-color: #27ae60;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;

            }

            body {
                background-color: #f5f7fa;
                color: var(--dark-color);
            }

            .login-container {
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background: #f4f7fa;
                padding: 20px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            /* Card branco com sombra suave e cantos arredondados */
            .login-card {
                background: #fff;
                padding: 30px 40px;
                border-radius: 12px;
                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 380px;
            }

            /* Espaçamento interno do corpo */
            .login-body {
                display: flex;
                flex-direction: column;
            }

            /* Título centralizado, cor forte */
            .login-title {
                font-size: 1.8rem;
                color: #2c3e50;
                text-align: center;
                margin-bottom: 25px;
                font-weight: 700;
            }

            /* Labels */
            .form-label {
                display: block;
                margin-bottom: 6px;
                font-weight: 600;
                color: #34495e;
            }

            /* Inputs com borda arredondada e sombra leve no foco */
            .form-control {
                width: 100%;
                padding: 12px 15px;
                font-size: 1rem;
                border: 1.8px solid #bdc3c7;
                border-radius: 8px;
                transition: border-color 0.3s ease;
                outline: none;
                box-sizing: border-box;
            }

            .form-control:focus {
                border-color: #3498db;
                box-shadow: 0 0 6px rgba(52, 152, 219, 0.3);
            }

            /* Estilo para erros */
            .error-text {
                color: #e74c3c;
                font-size: 0.9rem;
                margin-top: 6px;
                display: block;
            }

            /* Espaçamento para erros gerais */
            .error-session {
                margin-bottom: 15px;
                text-align: center;
            }

            /* Botões com largura total e estilo consistente */
            .btn-block {
                margin-top: 15px;
            }

            /* Botão primário azul */
            .btn-primary {
                background-color: #3498db;
                border: none;
                color: white;
                width: 100%;
                padding: 12px;
                border-radius: 8px;
                font-size: 1.1rem;
                font-weight: 600;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .btn-primary:hover {
                background-color: #2980b9;
            }

            /* Botão sucesso verde */
            .btn-success {
                display: block;
                text-align: center;
                background-color: #2ecc71;
                color: white;
                padding: 12px;
                border-radius: 8px;
                font-size: 1.1rem;
                font-weight: 600;
                text-decoration: none;
                transition: background-color 0.3s ease;
            }

            .btn-success:hover {
                background-color: #27ae60;
            }

            .login-logo {
                text-align: center;
                margin-bottom: 1.5rem;
                font-size: 2rem;
                font-weight: bold;
                color: var(--secondary-color);
            }
        </style>


    @livewireStyles
</head>
<body class="bg-light">

    <div class="container">

        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
</body>
</html>
