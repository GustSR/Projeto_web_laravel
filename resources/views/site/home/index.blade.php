<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morals and Good - Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/Logos/favicon-png.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-md bg-black navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><h1 class="n-0">Morals and Good</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fale conosco</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Entrar</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 rounded-0" type="search" placeholder="Pesquise o produto" aria-label="Search">
                    <button class="btn btn-outline-light rounded-0" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">


        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid d-md-none" src="assets/Imagens Slide/Primeiro slide mobile.png" alt="tres-mulheres-em-quadros-usando-roupas-coloridas">
                <img class="img-fluid d-none d-md-block d-xl-none" src="assets/Imagens Slide/Primeiro slide tablet.png" alt="tres-mulheres-em-quadros-usando-roupas-coloridas">
                <img class="img-fluid d-none d-md-none d-xl-block"src="assets/Imagens Slide/Primeiro slide desktop.png" alt="tres-mulheres-em-quadros-usando-roupas-coloridas">
        
            </div>
            <div class="carousel-item">
                <img class="img-fluid d-md-none" src="assets/Imagens Slide/Segundo slide mobile.png" alt="seis-quadros-com-imagens-de-roupas">
                <img class="img-fluid d-none d-md-block d-xl-none" src="assets/Imagens Slide/Segundo slide tablet.png" alt="seis-quadros-com-imagens-de-roupas">
                <img class="img-fluid d-none d-md-none d-xl-block"src="assets/Imagens Slide/Segundo slide desktop.png" alt="seis-quadros-com-imagens-de-roupas">
    
            </div>
            <div class="carousel-item">
                <img class="img-fluid d-md-none" src="assets/Imagens Slide/Terceiro slide mobile.png" alt="mulher-de-casaco-e-chapeu">
                <img class="img-fluid d-none d-md-block d-xl-none" src="assets/Imagens Slide/Terceiro slide tablet.png" alt="mulher-de-casaco-e-chapeu">
               <img class="img-fluid d-none d-md-none d-xl-block"src="assets/Imagens Slide/Terceiro slide desktop.png" alt="mulher-de-casaco-e-chapeu">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Anterior</font>
                </font>
            </span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Próximo</font>
                </font>
            </span>
        </button>

    </div>


        <h2 class="text-center my-3 my-xl-5">Produtos que estão bombando</h2>
        <div class="container row mx-auto g-4">

            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card">
                    <img src="assets/Produtos/camiseta.jpg" alt="camiseta-vermelha">
                    <div class="card-body">
                        <h5 class="card-title">Camiseta</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <P>R$ 30</p>
                        <a href="/camisetas" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card">
                   <img src="assets/Produtos/shorts.jpg" alt="shorts-azul">
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Shorts</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <P>R$ 50</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card">
                   <img src="assets/Produtos/casaco.webp" alt="casaco-bege">
                    <div class="card-body">
                        <h5 class="card-title">Casaco</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <P>R$ 100</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card">
                   <img src="assets/Produtos/calça.jpg" alt="calca-bege">
                    <div class="card-body">
                        <h5 class="card-title">Calça</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <P>R$ 70</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card">
                    <img src="assets/Produtos/vestido.webp" alt="vestido-floral-azul">
                    <div class="card-body">
                        <h5 class="card-title">Vestido</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <P>R$ 60</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card">
                   <img src="assets/Produtos/cinto.webp" alt="cinto-preto">
                    <div class="card-body">
                        <h5 class="card-title">Cinto</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <P>R$ 30</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="pb-4">

            <br><h2 class="text-center py-3">Conheça nossas facilidades</h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3 px-3">
                <div class="divs-facilidades d-flex  align-items-center">
                    <div><i class="bi bi-x-diamond fs-1"></i></div>

                    <div>
                        <div class="ms-3 mb-1">Pague pelo PIX</div>
                        <div class="texto-menor ms-3">Ganhe 5% OFF em
                            pagamentos via PIX</div>
                    </div>
                </div>

                <div class="divs-facilidades d-flex">
                    <div><i class="bi bi-arrow-repeat fs-1"></i></div>

                    <div>
                        <div class="ms-3 mb-1">Troca Grátis</div>
                        <div class="texto-menor ms-3">Fique livre para trocar em até 30 dias.</div>
                    </div>
                </div>
                <div class="divs-facilidades d-flex">
                    <div><i class="bi bi-flower1 fs-1"></i></div>

                    <div>
                        <div class="ms-3 mb-1">Sustentabilidade</div>
                        <div class="texto-menor ms-3">Moda responsável, que respeita o meio ambiente.</div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="text-center">
            <p class="py-3"><img  class="d=block">
                2023 <i class="bi bi-c-circle"></i> Desenvolvido por Hellen e Geneviê | Projeto fictício sem fins comerciais.
            </p>
        </footer>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
</body>

</html>
