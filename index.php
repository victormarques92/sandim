<?php include 'header.php' ?>
<title>Home | Sandim Vidraçaria</title>
<!-- ================================================ Navbar Menu ======================================================= -->
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="portfolios.php">Portfólios</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
        </div>
    </header>
    
<!-- ================================================ Carousel ======================================================= -->
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators"> <!-- Indicadores -->
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner"> <!-- Conteúdo do Carousel -->
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)"></div><!-- Imagem 01 -->
                <div class="item" style="background-image: url(images/slider/bg2.jpg)"></div><!-- Imagem 02 -->
                <div class="item" style="background-image: url(images/slider/bg3.jpg)"></div><!-- Imagem 03-->
            </div>
        </div>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev"> <!-- Botão Prev. -->
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next"> <!-- Botão Next -->
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </section>

<!-- ================================================ Informações ======================================================= -->
    <section id="services" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-truck icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">À PRONTRA ENTREGA</h3>
                            <p>Todos os BOX À PRONTA ENTREGA. Instalamos em 24 horas!</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-compress icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SOB MEDIDA</h3>
                            <p>Espelhos, portas e janelas tudo sob medida para seu ambiente!</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-plus icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">PARA VIDRACEIROS</h3>
                            <p>Distribuímos para vidraceiros também, com preços especiais.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section><!--/#services-->

<!-- ================================================ Projetos ======================================================= -->
    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Modelos de Projetos</h3>
                    <p>
                        Serviços executados pela Vidraçaria Sandim.
                        Box, portas, espelhos, janelas.
                    </p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/modelos/mini-item01.jpg" alt="Box em Vidro Incolor Temperado">
                                                <h5>
                                                    Box em Vidro Incolor Temperado
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Box em Vidro Incolor Temperado" href="images/modelos/item01.jpg" rel="prettyPhoto"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/modelos/mini-item02.jpg" alt="Espelho em Porta de Guarda-Roupa">
                                                <h5>
                                                    Espelho em Porta de Guarda-Roupa
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Espelho em Porta de Guarda-Roupa" href="images/modelos/item02.jpg" rel="prettyPhoto"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/modelos/mini-item03.jpg" alt="Porta em Vidro Temperado">
                                                <h5>
                                                    Porta em Vidro Temperado
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Porta em Vidro Temperado" href="images/modelos/item03.jpg" rel="prettyPhoto"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/modelos/mini-item04.jpg" alt="Janela Basculante em Vidro Temperado">
                                                <h5>
                                                    Basculante em Vidro Temperado
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Janela Basculante em Vidro Temperado" href="images/modelos/item04.jpg" rel="prettyPhoto"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/modelos/mini-item05.jpg" alt="Box com kit Elegance">
                                                <h5>
                                                    Box com kit Elegance
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Box com kit Elegance" href="images/modelos/item05.jpg" rel="prettyPhoto"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/modelos/mini-item06.jpg" alt="Painel de Espelho com Vidro Serigrafado">
                                                <h5>
                                                    Painel com Vidro Serigrafado
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Painel de Espelho com Vidro Serigrafado" href="images/modelos/item06.jpg" rel="prettyPhoto"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

<!-- ================================================ Depoimento de Clientes ======================================================= -->
    <section id="testimonial" class="alizarin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                        <h2>Depoimento dos Clientes</h2>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <blockquote>
                                <p>Ótimo atendimento, rápida entrega e execução do trabalho!</p>
                                <small>Gabriela Santana Gois via <a href="https://www.facebook.com/VidracariaSandim">Facebook</a></small>
                            </blockquote>
                            <blockquote>
                                <p>Excelentes profissionais</p>
                                <small>Edilson Huguinho de Melo via <a href="https://www.facebook.com/VidracariaSandim">Facebook</a></small>
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>Eu recomendooooo....</p>
                                <small>Ana Paula de Souza via <a href="https://www.facebook.com/VidracariaSandim">Facebook</a></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

<!-- ================================================ Footer ======================================================= -->
<?php include 'footer.php' ?>