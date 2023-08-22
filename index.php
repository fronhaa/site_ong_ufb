<?php include_once 'versao.php'; 

?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php
    $ufb = "Homepage";
    include_once 'views/head.php';
    ?>
    <body id="page-top" onload="loading()">    
        <?php include_once 'views/preload.php'; ?>
        <!-- Navegação-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top">UFB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#o_projeto">O projeto</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#">Campanhas</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#">Painel de doações</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Cadastre-se</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Título</h1>
                            <p class="lead fw-normal text-muted mb-5">Parágrafo</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <a class="me-lg-3 mb-4 mb-lg-0 text-decoration-none" href="#!"><button class="botao_doacao"><span>DOAR</span></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" id="cell_1" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                        <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="assets/img/demo-screen.mp4" type="video/mp4" /></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">"A UFB se dedica a ajudar aqueles que precisam, por isso criamos um site para arrecadar fundos e alimentos para distribuir regularmente para comunidades carentes. Nós acreditamos em soluções práticas e eficientes para problemas cotidianos, trabalhando para melhorar a qualidade de vida daqueles mais carentes!"</div>
                        <img src="assets/img/logo_ufb.jpg" alt="..." style="height: 3rem" />
                    </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-arrow-left-circle icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Doação única</h3>
                                        <p class="text-muted mb-0">Faça uma doação única e ajude a apoiar nossa causa hoje</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-arrow-right-circle icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Doação recorrente</h3>
                                        <p class="text-muted mb-0">Apoie nossa causa de forma contínua com uma doação recorrente</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-hourglass-split icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Doação de tempo</h3>
                                        <p class="text-muted mb-0">Junte-se a nós na UFB e contribua para nossa causa, doando seu tempo e habilidades valiosas</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-heart-fill icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Sistema de VERIFICAÇÃO</h3>
                                        <p class="text-muted mb-0">Seja verificado por suas contribuições na UFB. <button class="saiba_mais saiba_mais_verif">Saiba mais</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                        <div class="features-device-mockup">
                            <svg class="circle circle_intro_2" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg><svg class="x_intro_2 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg><svg class="shape-2 boli_intro_2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" id="cell_2" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                        <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="assets/img/demo-screen.mp4" type="video/mp4" /></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic features section-->
        <section class="bg-light">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">Título</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">Parágrafo</p>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." /></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <section class="cta" id="o_projeto">
            <div class="cta-content">
                <div class="container px-5">
                    <h2 class="text-white display-1 lh-1 mb-4">
                        Título
                        <br />
                        Título
                    </h2>
                    <a class="me-lg-3 mb-4 mb-lg-0 text-decoration-none" href="#!"><button class="botao_doacao"><span>DOAR</span></button></a>
                </div>
            </div>
        </section>
        <!-- App badge section-->
        <section class="bg-gradient-primary-to-secondary" id="download">
            <div class="container px-5">
                <h2 class="text-center text-white font-alt mb-4">Título</h2>
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                    <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                    <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; 2023 UFB. Todos os Direitos Reservados.</div>
                    <a href="views/ptf.php?privacidade=1">Privacidade</a>
                    <span class="mx-1">&middot;</span>
                    <a href="views/ptf.php?termos=1">Termos</a>
                    <span class="mx-1">&middot;</span>
                    <a href="views/ptf.php?faq=1">FAQ</a>
                </div>
            </div>
        </footer>
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Cadastro</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        
                        <form id="contactForm" action="controllers/cadastro.php" method="POST">
                            <div class="radio_cadastro">
                                <label class="container_radio_cadastro">
                                    <input required checked id="radio_beneficiario" class="radio_input" type="radio" value="1" name="nivel">
                                    <div class="checkmark"></div>
                                    Beneficiário(a)
                                </label>
                                <label class="container_radio_cadastro">
                                    <input required type="radio" id="radio_voluntario" class="radio_input" value="2" name="nivel">
                                    <div class="checkmark"></div>
                                    Voluntário(a)
                                </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input required class="form-control" id="name" name="name" placeholder="Maria Silva Jardim" data-sb-validations="required" />
                                <label for="name">Nome completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input required class="form-control" id="cpf" name="cpf" class="form-control" onkeypress="$(this).mask('000.000.000-00');" placeholder="123.456.789-12" data-sb-validations="required" />
                                <label for="name">CPF</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input required class="form-control" id="email" name="email" type="email" placeholder="nome@gmail.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input required class="form-control" id="phone" name="phone" type="text" placeholder="(74) 99999-9999" class="form-control" onkeypress="$(this).mask('(00) 00000-0009')" data-sb-validations="required" />
                                <label for="phone">Número de celular</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea required class="form-control" id="message" name="message" type="text" placeholder="Sou bom em comunicação com pessoas." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label id="lable_suas" for="message">Suas necessidades</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" id="button_vamos_la" type="button">Vamos lá</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include_once 'assets/scripts.php'; ?>
    </body>
</html>
