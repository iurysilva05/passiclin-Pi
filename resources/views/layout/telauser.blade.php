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
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #0066cc;
            padding-bottom: 10px;
        }

        .header h1 {
            color: #0066cc;
            margin: 0;
        }

        .patient-info {
            margin-bottom: 30px;
        }

        .patient-info table {
            width: 100%;
            border-collapse: collapse;
        }

        .patient-info th,
        .patient-info td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .exam-results {
            margin-bottom: 30px;
        }

        .exam-results h2 {
            color: #0066cc;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }

        .exam-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .exam-table th {
            background-color: #f2f2f2;
            text-align: left;
            padding: 10px;
        }

        .exam-table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .exam-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 0.8em;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        .abnormal {
            color: #cc0000;
            font-weight: bold;
        }

        .normal {
            color: #009900;
        }

        .contate-nos {
            text-align: center;
            padding: 60px 20px;
            background-color: #ffffff;
            max-width: 600px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .contate-nos h2 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #333;
        }

        .contate-nos p {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
        }

        .redes-sociais a {
            margin: 0 15px;
            font-size: 28px;
            color: #555;
            transition: color 0.3s;
        }

        .redes-sociais a:hover {
            color: #007BFF;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>

<body>




    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    @livewireScripts




</body>

</html>