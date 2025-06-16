<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
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
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: var(--dark-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--light-color);
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            color: var(--secondary-color);
        }

        /* Navigation */
        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 1.5rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--secondary-color);
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            background-color: var(--secondary-color);
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid white;
        }

        .btn-outline:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary-color), #34495e);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
        }

        /* Features */
        .features {
            padding: 4rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--primary-color);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        /* How it works */
        .how-it-works {
            background-color: var(--light-color);
            padding: 4rem 0;
            text-align: center;
        }

        .steps {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 3rem;
        }

        .step {
            flex: 1;
            min-width: 250px;
            max-width: 300px;
            position: relative;
        }

        .step-number {
            width: 50px;
            height: 50px;
            background-color: var(--secondary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        .step:not(:last-child)::after {
            content: "";
            position: absolute;
            top: 25px;
            left: calc(100% + 10px);
            width: 50px;
            height: 2px;
            background-color: var(--secondary-color);
        }

        /* Testimonials */
        .testimonials {
            padding: 4rem 0;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1rem;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 1rem;
        }

        .author-info h4 {
            color: var(--primary-color);
        }

        .author-info p {
            color: #666;
            font-size: 0.9rem;
        }

        /* CTA */
        .cta {
            background: linear-gradient(135deg, var(--secondary-color), #2980b9);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }

        .cta h2 {
            margin-bottom: 1.5rem;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }

        .cta .btn {
            background-color: white;
            color: var(--secondary-color);
        }

        .cta .btn-outline {
            background-color: transparent;
            border: 1px solid white;
            color: white;
        }

        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-column h3 {
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 0.5rem;
        }

        .footer-column ul li a {
            color: var(--light-color);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: var(--secondary-color);
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            color: white;
            font-size: 1.2rem;
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 2rem;
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
            }

            nav ul {
                margin-top: 1rem;
            }

            nav ul li {
                margin: 0 0.5rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .step:not(:last-child)::after {
                display: none;
            }
        }

        #sobre,#comofunciona{
             text-decoration: none; /* Remove o sublinhado */
            color: inherit; /* Herda a cor do elemento pai */
            }
                .password-input-group {
        position: relative;
    }

    .toggle-password {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        color: #3498db;
        padding: 5px;
        font-size: 1rem;
        z-index: 2;
    }

    .toggle-password:hover {
        color: #2980b9;
    }

    .forgot-password {
        text-align: right;
        margin-top: 8px;
        margin-bottom: 15px;
    }

    .forgot-password a {
        color: #6c757d;
        text-decoration: none;
        font-size: 0.9rem;
    }

    .forgot-password a:hover {
        text-decoration: underline;
        color: #3498db;
    }

    /* Ajuste para o input de senha ter espaço para o ícone */
    .password-input-group .form-control {
        padding-right: 40px;
    }
    </style>
    
</head>


<body>


   <div>


<header>

        <div class="container header-container">
            <div class="logo">
                <i class="fas fa-heartbeat"></i> PASSICLIN
            </div>
            <nav>
                <ul>

                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#comofunciona">Como Funciona</a></li>
                    <li><a href="{{ route('contato') }}">Contato</a></li>

                </ul>
            </nav>
        </div>
</header>


    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Seus exames médicos de forma simples e segura</h1>
            <p>Acesse seus resultados de exames a qualquer momento, de qualquer lugar, com toda a privacidade que sua saúde merece.</p>
            <!-- <a href="#" class="btn">Acessar Meus Exames</a> -->
            <a class="btn{{ request()->routeIs('login') ? 'active' : ''}}" @if(request()->routeIs('login')) aria-current="page" @endif href="{{route('login')}}"><i> Acessar Meus Exames</i> </a>
        </div>
    </section>

    <!-- Features -->
    <a href="#" id="sobre">
        <section class="features">
            <div class="container">
                <h2 class="section-title">Por que usar o PASSICLIN?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h3>Segurança e Privacidade</h3>
                        <p>Seus dados médicos protegidos com criptografia de última geração e acesso restrito.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Acesso em Qualquer Lugar</h3>
                        <p>Consulte seus exames de qualquer dispositivo, a qualquer momento.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <h3>Resultados Digitais</h3>
                        <p>Receba seus exames em formato digital e evite perdas de documentos físicos.</p>
                    </div>
                </div>
            </div>
        </section>
    </a>

    <!-- How it works -->
    <a href="#" id="comofunciona">
        <section class="how-it-works">
            <div class="container">
                <h2 class="section-title">Como Funciona</h2>
                <div class="steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <h3>Cadastro Simples</h3>
                        <p>Registre-se com seu CPF e número de celular para criar sua conta.</p>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <h3>Confirmação de Identidade</h3>
                        <p>Valide sua conta através de um código enviado por SMS.</p>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <h3>Acesso aos Exames</h3>
                        <p>Visualize e baixe todos os seus exames em um só lugar.</p>
                    </div>
                </div>
            </div>
        </section>
    </a>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">O que nossos pacientes dizem</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p class="testimonial-text">"Finalmente um sistema que facilita o acesso aos meus exames. Não preciso mais ficar guardando tantos papéis!"</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Maria Silva">
                        <div class="author-info">
                            <h4>Maria Silva</h4>
                            <p>Paciente desde 2022</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"Adorei a praticidade de poder mostrar meus exames para o médico diretamente do meu celular."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Carlos Oliveira">
                        <div class="author-info">
                            <h4>Carlos Oliveira</h4>
                            <p>Paciente desde 2023</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"Sistema muito intuitivo e seguro. Minha filha conseguiu acessar meus exames quando precisei de ajuda."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Ana Santos">
                        <div class="author-info">
                            <h4>Ana Santos</h4>
                            <p>Paciente desde 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container">
            <h2>Pronto para ter acesso aos seus exames?</h2>
            <p>Junte-se a milhares de pacientes que já simplificaram o acesso aos seus resultados médicos.</p>
            <div class="cta-buttons">
                <a href="#" class="btn">Acessar Meus Exames</a>
                <a href="#" class="btn btn-outline">Saiba Mais</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>PASSICLIN</h3>
                    <p>Solução digital para acesso seguro e simplificado a resultados de exames médicos.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Links Rápidos</h3>
                    <ul>
                        <li><a href="#">Início</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Como Funciona</a></li>
                        <li><a href="{{ route('contato') }}">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Suporte</h3>
                    <ul>
                        <li><a href="#">Central de Ajuda</a></li>
                        <li><a href="#">Perguntas Frequentes</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                        <li><a href="#">Termos de Uso</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contato</h3>
                    <ul>
                        <li><i class="fas fa-phone-alt"></i> (11) 1234-5678</li>
                        <li><i class="fas fa-envelope"></i> contato@passiclin.com</li>
                        <li><i class="fas fa-map-marker-alt"></i> São Paulo - SP</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 PASSICLIN. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
</div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    @livewireScripts
</body>

</html>
