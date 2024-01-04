<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;700;900&display=swap">
    <link rel="stylesheet" href="styles_01.css">

    <!-- Adicionar icones do material google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!---Adicionar icones awesome---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--- font google roboto --->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap">

    <!--- font inconsolata google --->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400&display=swap">

    <!--- Icone boxicon---->
    <!---Icone do boxicons--->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Carlos::Binário</title>
</head>

<body class="bodyAll">
    <header class="bgHeader">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
                    <div class="logo">AC705</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Formação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <button class="btnLogin" id="btnLogin">Login</button>
                                <button class="btnCadastro" id="btnCadastro">Cadastro</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <section id="apresentacion" class="bgPadrao">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 pt-5 pb-5">
                    <h2 class="titulo pb-3">Soluções para sua empresa</h2>
                    <h4 class="titulo pb-3">
                        Criando interfaces visuais em sites, tornando a experiência do usuário atraente e funcional.
                    </h4>
                    <button class="btn_introducao">Introdução</button>
                    <button class="btn_mais">Mais e+</button>
                </div>
                <div class="col col-sm-12 col-md-6 pt-0 movimentarImagem">
                    <img src="https://bootstrapmade.com/demo/templates/Arsha/assets/img/hero-img.png" alt="Imagem principal" class="img">
                </div>
            </div>
        </div>
    </section>

    <section id="patrocinios" class="p-4">
        <div class="container">
            <div class="row">
                <div class="col patricionador"> BOOT5</div>
                <div class="col patricionador"> W3School</div>
                <div class="col patricionador"> Alura</div>
                <div class="col patricionador"> VsCode</div>
                <div class="col patricionador"> Css</div>
                <div class="col patricionador"> Github</div>
            </div>
        </div>
    </section>

    <section id="about" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="titulo pt-5 pb-4 text-center">Sobre nós</h2>
                    <span class="tracinho"></span>
                </div>
                <div class="col-sm-12 col-md-6">
                    <p class="txtAbout">
                        Pofissional em desenvolvimento web, com habilidades tanto no front-end para back-end, e utiliza uma variedade de tecnologias populares para criar aplicações web modernas e eficientes.
                    </p>
                    <p class="txt-itemList"><i class="fa-solid fa-check-double"></i>Programação estática </p>
                    <p class="txt-itemList"><i class="fa-solid fa-check-double"></i> Programação dinâmica</p>
                    <p class="txt-itemList"><i class="fa-solid fa-check-double"></i> Programação web e mobile </p>
                </div>
                <div class="col col-sm-12 col-md-6">
                    <p class="txtAbout">
                        HTML5 e CSS3: Desenvolve interfaces modernas e estilizadas, utilizando as últimas especificações.
                        JavaScript (ES6+): Utiliza JavaScript para criar interatividade e dinamismo nas aplicações.
                        Bootstrap: Aproveita o poder do Bootstrap para criar layouts responsivos e componentes consistentes.
                    </p>
                    <button class="btn_mais_inform mt-5">Mais informações </button>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="utilitarios pt-5 pb-5 bg-danger">
        <div class="container">

            <div class="row py-5">
                <div class="col-12">
                    <h2 class="titulo text-white text-center">Formação web</h2>
                </div>
                <div class="col-12 pt-2 text-center">
                    <h4 class="text-white fweight"> Sequências de cursos e conteúdos para minha imersão tecnológica e desafios da carreira</h4>

                    <!---
              <img src="https://bootstrapmade.com/demo/templates/Arsha/assets/img/why-us.png" alt="" class="img">
            --->
                </div>

                <div class="col col-sm-12 col-md-4">
                    <h4 class="text-white pt-5 fweight"> <i class="fa-solid fa-quote-left"></i> Básico ao avançado</h4>
                    <p class="text-white fweight">
                        Desde o uso do softwares e sistemas operacionais, segurança, internet, dados, computadores, a criação de algoritmos.
                    </p>
                </div>

                <div class="col col-sm-12 col-md-4">
                    <h4 class="text-white pt-5 fweight"><i class="fa-solid fa-quote-left icon-formation"></i>Autodidata em formação</h4>
                    <p class="text-white fweight">
                        Especialista na arte de aprender, na gestão de tempo, busca de perfeição e desenvolvimento profissional contínuo.
                    </p>
                </div>

                <div class="col ">
                    <h4 class="text-white pt-5 fweight"><i class="fa-solid fa-quote-left"></i>Carreira CN</h4>
                    <p class="text-white fweight">
                        Jornada profissional dedicada à área administrativa e tecnológica com experiência no setor público e privado. </p>
                </div>

            </div>

    </section>

    <section id="services">
        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="titulo text-center p-5">Serviços 2.0 </h2>
                </div>
            </div>
            <div class="container mt-2">
                <div class="row">

                    <!-- Card 1 -->
                    <div class="col-md-3">
                        <div class="card hover-effect h-100 bg-white">
                            <img src="https://images.pexels.com/photos/3862132/pexels-photo-3862132.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="card-img-top" alt="Imagem Card 1">
                            <div class="card-body">
                                <h5 class="card-title">Tecnologia</h5>
                                <p class="card-text">Inovação digital, automação e gerência de dados, conectividade, algoritmos, projetos de softwares e codificação.</p>
                            </div>
                            <div class="card-footer">
                                Digital e conexão
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-3">
                        <div class="card hover-effect h-100  bg-white">
                            <img src="https://images.pexels.com/photos/147413/twitter-facebook-together-exchange-of-information-147413.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="card-img-top" alt="Imagem Card 2">
                            <div class="card-body">
                                <h5 class="card-title">Ferramentas</h5>
                                <p class="card-text">Navegação online, sites, interação, design responsivo, conteúdo multimídia, experiência do usuário.</p>
                            </div>
                            <div class="card-footer">
                                Redes integradas
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-3">
                        <div class="card hover-effect h-100  bg-white">
                            <img src="https://images.pexels.com/photos/270640/pexels-photo-270640.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="card-img-top" alt="Imagem Card 3">
                            <div class="card-body">
                                <h5 class="card-title">Dispositivos</h5>
                                <p class="card-text">Web para Smartphones, tablets, desktops, com conectividade leve, portabilidade, código limpo e moderno.</p>
                            </div>
                            <div class="card-footer">
                                Multi-telas
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-3">
                        <div class="card hover-effect h-100  bg-white">
                            <img src="https://images.pexels.com/photos/12941588/pexels-photo-12941588.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="card-img-top" alt="Imagem Card 4">
                            <div class="card-body">
                                <h5 class="card-title">Businnes</h5>
                                <p class="card-text">Desenvolvimento de software, automação, eficiência operacional, inovação, soluções cem negócios.</p>
                            </div>
                            <div class="card-footer">
                                Gestão empresarial
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="newsletter" class="newsletter pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="titulo"> Newsletter
                </div>
                <div class="col-12 pb-5">
                    <span class="txtNewsletter">
                        Receba comunicação digital regular via e-mail, que contém informações, notícias, atualizações, ofertas sobre um determinado tópico, produto, serviço ou sobre nossa empresa.
                    </span>
                </div>
            </div>
            <div class="row">
                <form action="cadastrar.php">
                    <div class="col">
                        <div class="input-group">
                            <input type="text" placeholder="E-mail para cadastro" class="inputEmail" id="inputEmail">
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="submit" id="button-addon2">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id=" " class="pt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center"> GALERY PH</h2>
                    <h5 class="text_width text-center mx-auto py-3"> Confira a galeria de equipamentos disponíveis e que suportam tecnologia para programação WEB</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d_flex justify-content-center flex-wrap">
                        <p> <button id="btnAll" class="btn_photo"> Todas </button> </p>
                        <p> <button id="btnComputer" class="btn_photo"> Computadores </button> </p>
                        <p> <button id="btnMobile" class="btn_photo"> Celulares </button> </p>
                        <p> <button id="btnNotebooks" class="btn_photo"> Notebooks </button> </p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="container_galery">
                    <div class="box"> <img src="https://images.unsplash.com/photo-1614624532983-4ce03382d63d?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"> </div>
                    <div class="box"> <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?q=80&w=2042&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"> </div>
                    <div class="box"> <img src="https://plus.unsplash.com/premium_photo-1683880731785-e5b632e0ea13?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGVzY3JpdCVDMyVCM3Jpb3xlbnwwfHwwfHx8MA%3D%3D">
                    </div>

                    <div class="box"> <img src="https://images.unsplash.com/photo-1590935217281-8f102120d683?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                    </div>

                    <div class="box"> <img src="https://images.unsplash.com/photo-1523206489230-c012c64b2b48?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                    </div>

                    <div class="box"> <img src="https://images.unsplash.com/photo-1556656793-08538906a9f8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"> </div>



                </div>
    </section>

    <!---footer--->
    <footer>

        <div class="container">
            <div class="row">

                <div class="col">
                    <ul>
                        <li class="footer-title">Company</a>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Our services</a></li>
                        <li><a href="">Privacy policy</a></li>
                        <li><a href="">Affiate program</a></li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li class="footer-title">Get help</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Shipping</a></li>
                        <li><a href="">Returns</a></li>
                        <li><a href="">Opções de pagamento</a></li>
                    </ul>
                </div>
                <div class="col">

                    <ul>
                        <li class="footer-title">Compras online</a></li>
                        <li><a href="">Sites</a></li>
                        <li><a href="">Nosso blog</a></li>
                        <li><a href="">Patrocinios</a></li>
                        <li><a href="">Affiate program</a></li>
                    </ul>
                </div>
                <div class="col">

                    <div>
                        <ul>
                            <li class="footer-title">Redes sociais</a></li>
                        </ul>

                        <ul class="container-link-redeSocial">
                            <li> <a href=""> <i class='bx bxl-facebook'></i> </a> </li>
                            <li> <a href=""> <i class='bx bxl-whatsapp'></i> </a> </li>
                            <li> <a href=""> <i class='bx bxl-instagram'></i> </a> </li>
                            <li> <a href=""> <i class='bx bxl-linkedin'></i> </a> </li>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div class="direitosAutorais">
        <div class="container">Desenvolvido por Carlos Nascimento - 2024 - CSS Puro</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>