<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    @livewireStyles
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

        }

        body {
            display: flex;
            justify-content: center;
            background-color: var(--light-color);

            height: 100vh;
        }

        .nav-menu {


            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 250px;
            background-color: var(--primary-color);
            padding: 2rem 1rem;
            overflow-y: auto;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;


        }

        .nav-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-menu li {
            margin-bottom: 1rem;
        }

        .nav-menu a {
            color: var(--light-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 0.5rem;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            background-color: var(--secondary-color);
            color: white;
        }

        .nav-menu i {
            margin-right: 10px;
        }

        .logout-btn-container {
            position: fixed;
            bottom: 20px;
            left: 20px;
        }


        .card-title {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
            border-bottom: 1px solid #eee;
            padding-bottom: 0.5rem;
        }

        /* Grid responsivo de exames */
        .exams-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        /* Cartão individual de exame */
        .exam-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            transition: all 0.3s;
            border-left: 4px solid var(--secondary-color);
        }

        .exam-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .exam-card h3 {
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .exam-card p {
            color: #666;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .exam-date {
            font-size: 0.8rem;
            color: #999;
        }

        /* Botão de download */
        .download-btn {
            display: inline-block;
            margin-top: 0.5rem;
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;


        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .card-title {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
            border-bottom: 1px solid #eee;
            padding-bottom: 0.5rem;
        }

        main {

            border: 3px solid black;


        }

        header {
            margin-bottom: 100px;

        }

        .main-content {
            margin-left: 250px;
            /* mesmo valor do width do nav-menu */
            padding: 2rem;
            box-sizing: border-box;
        }


         .sidebar {
            width: 300px;
            background-color: var(--primary-color);
            color: white;
            padding: 2rem;
            display: flex;
            flex-direction: column;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 2rem;
            color: var(--light-color);
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            color: var(--secondary-color);
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet" />


</head>

<body>
    @livewire('menu-painel')


    <div class="container">
        @yield('content')
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    @livewireScripts
</body>

</html>
