<div>


<header>

        <div class="container header-container">
            <div class="logo">
                <i class="fas fa-heartbeat"></i> PASSICLIN
            </div>
            <nav>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Como Funciona</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#" class="btn btn-outline">Acessar Sistema</a></li>
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

    <!-- How it works -->
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
                        <li><a href="#">Contato</a></li>
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
