<?php
include 'bootstrap/header.php';

?>



<div class="imagem">
    <img class="imagem_inicio" src="img/fundo_pagina_n.jpg" alt="">
</div>

<div class="texto">
    <div class="row">
        <div class="col-lg-6">
            <h3 class="texto_inicio">Se cadastre de forma simples para tem acesso a pontos de biclicleta espalhados pelo Brasil.</h3>
            <a href="login.php">
                <button style="margin-bottom: -150px;" type="button" class="btn btn-outline-secondary botao_inicial">CADASTRAR-SE</button>
            </a>
        </div>

        <div class="col-lg-6 segundacoluna">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/imagem1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/imagem2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/imagem3.jpg" alt="Third slide">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
            </div>
        </div>
    </div>
</div>


<?php
include 'bootstrap/footer.php';
?>