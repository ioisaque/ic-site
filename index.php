<!DOCTYPE html>
<html lang="pt-br" class="js">
<head>
	<!-- META DEFAULT -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="robots" content="index, follow" />    
	<meta name="author" content="Isaque Costa" />
	
	<!-- META CLIENT -->
    <meta name="description" content="Isaque Costa - Desenvolvedor Web" />
	<meta name="keywords" content="Designer, site, website, meu site, novo site, como criar um site, responsivo, desenvolvimento, desenvolvimento de sites, aplicativos, android, iOS, iPhone, apple">
	
	<!-- CLIENT TITLE -->
    <title>Isaque Costa - Desenvolvedor Web</title>

    <!-- DEFAULT FAVICONS -->
    <?php $icon = file_get_contents('http://cdn.isaquecosta.com.br/pages/defaults/favicon.php'); ?>
	
    <link rel="shortcut icon" href="<?=$icon;?>">
    <link rel="apple-touch-icon" href="<?=$icon;?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$icon;?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=$icon;?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=$icon;?>">
    
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136056589-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-136056589-2');
	</script>

	<!-- END OF DEFAULT CONFIGS -->	
    
    <!-- ADDING SLIM SCROLL -->
    <?=file_get_contents('http://cdn.isaquecosta.com.br/pages/defaults/slimScroll.php'); ?>    
	
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="./assets/css/vendor.bundle.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/theme.css" id="layoutstyle">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#mainnav" data-offset="80" class="no-touch loaded">
    <!-- Header -->
    <header id="top" class="site-header is-sticky">
        <!-- Navbar -->       
        <div id="mainnav" class="navbar navbar-expand-lg is-transparent">
            <nav class="container">
                <a class="navbar-brand" href="/">
                    <img class="logo logo-dark" alt="logo" src="assets/images/logo.png">
                </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"><span class="navbar-toggler-icon"><em class="fas fa-bars"></em></span></button>
                <div id="navbarToggle" class="collapse navbar-collapse justify-content-between">
                    <ul class="navbar-nav nav">
                        <li class="nav-item"><a class="nav-link menu-link" href="#top">Início</a></li>
                        <li class="nav-item"><a class="nav-link menu-link" href="#services">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link menu-link" href="#contact">Contato</a></li>
                    </ul>
                    <ul class="social alt">
                    	<li class="language"><a href="https://isaquecosta.com/"><img src="assets/images/en-us.svg"></a></li>
                        <li><a class="whats" href="https://api.whatsapp.com/send?phone=5531995882203&text=Ol%C3%A1%2c%20gostaria%20de%20conhecer%20mais%20sobre%20os%20seus%20servi%C3%A7os" target="_blank"><em class="fab fa-whatsapp"></em></a></li>                        
                        <li><a href="https://www.facebook.com/Isaquecostaa" target="_blank"><em class="fab fa-facebook-f"></em></a></li>
                        <li><a href="https://www.linkedin.com/in/isaquecostaa" target="_blank"><em class="fab fa-linkedin"></em></a></li>
                        <li><a href="mailto:contato@isaquecosta.com.br"><em class="far fa-envelope"></em></a></li>
                    </ul>                    
                </div>
            </nav>
        </div><!-- End Navbar -->
        <!-- Banner/Slider -->
        <div id="header" class="banner banner-wave section-pad">
            <div class="container">
                <div class="banner-content d-flex align-items-center">
                    <div class="row align-items-center mobile-center">
                        <div class="col-lg-6 col-md-12 order-first">
                            <div class="header-text clip-text">
                                <h2>Sua empresa deve <br> estar presente ONLINE.</h2>
                                <p class="lead" style="width: 23.5rem;">Em um mundo cada dia mais conectado, é de grande importância ter o seu espaço garantido na rede.</p>
                                <ul class="btns">
                                    <li><a href="https://api.whatsapp.com/send?phone=5531995882203&text=Ol%C3%A1%2c%20gostaria%20de%20conhecer%20mais%20sobre%20os%20seus%20servi%C3%A7os" class="btn btn-alt">QUERO O MEU ESPAÇO!</a></li>
                                </ul>
                            </div>
                        </div><!-- .col  -->
                        <div class="col-lg-6 col-md-12">
                            <div class="header-image"><img src="assets/images/header-banner.png" alt="header"></div>
                        </div><!-- .col  -->
                    </div><!-- .row  -->
                </div><!-- .banner-content  -->
            </div><!-- .container  -->
        </div><!-- End Banner/Slider -->
    </header>
    <!-- End Header -->

    <!-- Start Section -->
    <div class="section overview light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="img"><img src="assets/images/img-a.png" alt=""></div>
                </div><!-- .col  -->
                <div class="col-md-5">
                    <div class="text-block">
                        <p class="lead">Ter uma presença online relevante ajuda a criar mais possibilidades de conquistar novos clientes, diminuindo custos e aumentando a visibilidade da marca.</p>
                    </div>
                </div><!-- .col  -->
            </div><!-- .row  -->
        </div><!-- .container  -->
        <div class="section-pad"></div>
    </div>
    <!-- End Section -->

    <!-- Start Section -->
    <div id="services" class="section section-pad">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 col-sm-8 mx-auto">
                    <div class="section-head">
                        <h3>Tudo que você precisa</h3>
                        <p class="lead">Temos uma grande gama de serviços que podem ser incluídos <br> no seu site, de acordo com a sua necessidade.</p>
                    </div>
                </div>
            </div>
            <div class="row pd-2x d-flex justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="content-wrap">
                        <img class="icon" alt="" src="assets/images/icon-1.svg">
                        <h4>Interação com Redes Sociais</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="content-wrap">
                        <img class="icon" alt="" src="assets/images/icon-2.svg">
                        <h4>Chat Online</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="content-wrap">
                        <img class="icon" alt="" src="assets/images/icon-3.svg">
                        <h4>Portal de Notícias</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="content-wrap">
                        <img class="icon" alt="" src="assets/images/icon-4.svg">
                        <h4>Site Seguro</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="content-wrap">
                        <img class="icon" alt="" src="assets/images/icon-5.svg">
                        <h4>E-mail Profissional</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="content-wrap">
                        <img class="icon" alt="" src="assets/images/icon-6.svg">
                        <h4>Suporte Técnico</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->

    <!-- Start Section -->
    <div class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 order-last">
                    <div class="text-block text-right">
                        <h3>Gerenciador de Conteúdo</h3>
                        <p class="lead">Para você que deseja ter um site mais completo e atualizado, temos um gerenciador de conteúdo com interface simples e amigável.</p>
                    </div>
                </div><!-- .col  -->
                <div class="col-md-7 order-md-first">
                    <div class="img"><img src="assets/images/content-manager.png" alt=""></div>
                </div><!-- .col  -->                
            </div><!-- .row  -->
        </div><!-- .conatiner  -->
    </div>
    <!-- End Section -->

    <!-- Start Section -->
    <div class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="img"><img src="assets/images/img-c.png" alt=""></div>
                </div><!-- .col  -->
                <div class="col-md-5 order-md-first order-last">
                    <div class="text-block text-right">
                        <h3>WhatsApp</h3>
                        <p class="lead">Receba mensagem de seus visitantes diretamente no WhatsApp de sua empresa! Torne o contato com o cliente algo mais rápido e pessoal.</p>
                    </div>
                </div><!-- .col  -->
            </div><!-- .row  -->
        </div><!-- .conatiner  -->
    </div>
    <!-- End Section -->

    <!-- Start Section -->
    <div class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 order-last">
                    <div class="text-block text-right">
                        <h3>Site SEGURO</h3>
                        <p class="lead">Obtenha a credibilidade e confiança de seus clientes garantindo o certificado SSL de seu site. <br> Cada visitante, será informado de que o site é SEGURO!</p>
                    </div>
                </div><!-- .col  -->
                <div class="col-md-7 order-md-first">
                    <div class="img"><img src="assets/images/secure-site.png" alt=""></div>
                </div><!-- .col  -->                
            </div><!-- .row  -->
        </div><!-- .conatiner  -->
    </div>
    <!-- End Section -->   
    
    <!-- Start Section -->
    <div class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="img"><img src="assets/images/img-b.png" alt=""></div>
                </div><!-- .col  -->
                <div class="col-md-5 order-md-first order-last">
                    <div class="text-block text-right">
                        <h3>Chat Online</h3>
                        <p class="lead">Atenda os visitantes de seu site e seus clientes, <br> de forma rápida e eficiente.</p>
                    </div>
                </div><!-- .col  -->
            </div><!-- .row  -->
        </div><!-- .conatiner  -->
    </div>
    <!-- End Section -->    
    
    <!-- Start Section -->
    <div class="section section-pad pd-2x">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-md-12 order-md-first order-last">
                    <div class="text-block text-right">
                        <h3>E tudo isso... com design RESPONSIVO!</h3>
                        <p class="lead">Não importa se seu cliente irá acessar do computador, laptop, tablet, celular ou até mesmo pela TV... <br> O visual do seu site irá permanecer impecável!</p>
                    </div>
                </div><!-- .col  -->                
                <div class="col-md-12">
                    <div class="img"><img src="assets/images/responsive-design.png" alt=""></div>
                </div><!-- .col  -->
            </div><!-- .row  -->
        </div><!-- .conatiner  -->
    </div>
    <!-- End Section -->    

    <!-- Start Section -->
    <div id="contact" class="section quote-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-head">
                        <h3>Seja nosso cliente</h3>
                        <p class="lead">Queremos criar cada dia mais sites INCRÍVEIS, <br> que tal o seu ser o próximo?</p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                </div>
            </div>
            <div class="subscribe section-pad pd-2x no-pb">
                <div class="row text-center light">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="section-head">
                            <h1>Vamos começar?</h1>
                            <p class="lead">Me mande um "Olá" no WhatsApp e vamos criar juntos um site incrível!</p>
                            <!--<p class="lead">Me mande um "Olá" no WhatsApp ou um E-mail e vamos criar juntos um site incrível!</p>-->
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-lg-8 col-sm-10 mx-auto">
                        
                        <a class="btn btn-alt whatsapp" href="https://api.whatsapp.com/send?phone=5531995882203&text=Ol%C3%A1%2c%20gostaria%20de%20conhecer%20mais%20sobre%20os%20seus%20servi%C3%A7os" target="_blank">Abrir o WhatsApp</a>

                        <!--<form id="subscribe-form" action="#form/subscribe.php" method="post"
                            class="subscription-form inline-form" novalidate="novalidate"><label><i class="fa fa-envelope"
                                    aria-hidden="true"></i></label><input type="text" name="youremail" class="input required email"
                                placeholder="Seu E-mail" aria-required="true"><input type="text" class="d-none"
                                name="form-anti-honeypot" value=""><button type="submit" class="btn btn-alt">Enviar</button>
                            <div class="subscribe-results"></div>
                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->
    <!-- Start Section -->
    <div class="section footer-section primary section-pad-sm no-pt light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 order-last">
                    <span class="copyright-text">
                        <?php echo file_get_contents('http://cdn.isaquecosta.com.br/pages/defaults/footer.php?type=light'); ?>
                    </span>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="lead">
                    <a href="https://api.whatsapp.com/send?phone=5531995882203&text=Ol%C3%A1%2c%20gostaria%20de%20conhecer%20mais%20sobre%20os%20seus%20servi%C3%A7os"><em class="fab fa-whatsapp"></em> 31 9 9588 2203</a>
                        <br>
                        <a href="mailto:contato@isaquecosta.com.br">contato@isaquecosta.com.br</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->

    <!-- Preloader -->
    <div id="preloader" style="display: none;">
        <div id="loader" style="display: none;"></div>
        <div class="loader-section loader-top"></div>
        <div class="loader-section loader-bottom"></div>
    </div>
    <!-- End Preloader -->

    <!-- JavaScript (include all script here) -->
    <script src="assets/js/jquery.bundle.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>