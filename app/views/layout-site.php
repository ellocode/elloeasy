<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ello Code">
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRMODULES . 'bootstrap\dist\css\bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo DIRCSS . 'style.min.css' ?>">
    <?php echo $this->addHead(); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand h4 mb-0" href="#">
                <img src="<?php echo DIRIMG . 'logo-normal.png'; ?>">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Depoimentos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                            Social
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">Twitter</a>
                            <a class="dropdown-item" href="#">Instagram</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control ml-4 mr-2" type="search" placeholder="Buscar..."></input>
                    <button class="btn btn-primary" type="submit">OK</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="carousel-site" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-site" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-site" data-slide-to="1"></li>
            <li data-target="#carousel-site" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo DIRIMG . 'carousel-1.png'; ?>" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1>Moodle</h1>
                    <p class="lead">Instalacação, configuração, customizações e integraçoes em ambientes moodle</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo DIRIMG . 'carousel-2.png'; ?>" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1>Moodle</h1>
                    <p class="lead">Instalacação, configuração, customizações e integraçoes em ambientes moodle</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo DIRIMG . 'carousel-3.png'; ?>" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1>Moodle</h1>
                    <p class="lead">Instalacação, configuração, customizações e integraçoes em ambientes moodle</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-site" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel-site" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avançar</span>
        </a>
    </div>
    <div class="container">
        <div class="row first_row">
            <div class="col-6 text-center my-5">
                <img src="<?php echo DIRIMG . 'negocios.png'; ?>" class="img-fluid d-block">
            </div>
            <div class="col-6 text-left my-5 bloco">
                <h1 class="display-5 text-white font-weight-bold ">Obtenha a melhor solução para o seu negócio!</h1>
                <p>
                    Trabalhamos com eficiência, agilidade e qualidade para garantir a sua confiança.
                </p>
            </div>

        </div>
        <div class="row mb-5">
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo DIRIMG . 'card-image-exemplo.png'; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo DIRIMG . 'card-image-exemplo.png'; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo DIRIMG . 'card-image-exemplo.png'; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo DIRIMG . 'card-image-exemplo.png'; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo DIRMODULES . 'jquery\dist\jquery.min.js' ?>"></script>
    <script src="<?php echo DIRMODULES . 'popper.js\dist\umd\popper.js' ?>"></script>
    <script src="<?php echo DIRMODULES . 'bootstrap\dist\js\bootstrap.min.js' ?>"></script>
    <script src="<?php echo DIRJS . 'scripts.min.js' ?>"></script>
</body>

</html>