<?php include 'header.php' ?>
<title>Contato | Sandim Vidraçaria</title>
<!-- ================================================ Navbar Munu ======================================================= -->
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="portfolios.php">Portfólios</a></li>
                    <li class="active"><a href="contato.php">Contato</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

<!-- ================================================ Informações ======================================================= -->
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Contato</h1>
                    <p>Entre em contato conosco, será um prazer atendê-lo.</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contato</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->    

    <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-6"> <!-- Formulário de email -->
                <h4>Formulário de Contato</h4>
                <div class="status alert alert-success" style="display: none"></div>
                <form action="" method="POST">
                    <input class="form-control" name="nome" type="text" maxlength="100" placeholder="Nome" required="">
                    <input class="form-control" name="email" type="email" placeholder="E-mail" required="">
                    <textarea class="form-control" name="mensagem" placeholder="Mensagem"></textarea>
                    <button class="submit btn btn-primary btn-lg" type="submit" name="BTEnvia">Enviar Mensagem</button>
                </form>
            </div>
            <div class="col-sm-6"> <!-- Localização -->
                <h4>Localização</h4>
                <iframe width="100%" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.58604255591!2d-46.302566685327086!3d-23.975074082884387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce023988c6fdb1%3A0x6d791e178351c7c7!2sSandim+Vidra%C3%A7aria!5e0!3m2!1spt-BR!2sbr!4v1469458692773"></iframe>
            </div>
        </div>
    </section>

<!-- ================================================ Footer ======================================================= -->
<?php include 'footer.php' ?>

<!-- ================================================ Enviar Email ======================================================= -->
<?php include 'enviaEmail.php' ?>