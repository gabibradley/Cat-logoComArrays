<?php

$roupaNome = ['Conj Legging Top', 'Jaqueta Jeans', 'Vestido de Noiva'];
$roupaPreco = [125.50, 90.00, 300.00];
$roupaImagem = ['img/conj-leggintop.jpeg', 'img/jaqueta-jeans.jpeg', 'img/vestido-longo1.avif'];
$acessorioNome = ['Anel de prata', 'Bolsa de Palha', 'Pulseira'];
$acessorioPreco = [89.00, 55.00, 15.00];
$acessorioImagem = ['img/anelcatalogo.jpg', 'img/bolsadePalha.webp', 'img/pulseira-catalogo.jpg'];
$maquiagemNome = ['Batom', 'Rímel', 'Sombra'];
$maquiagemPreço = [50.00, 35.00, 20.00];
$maquiagemImagem = ['img/batons-modelo.avif', 'img/rimelimg.png', 'img/sombra-laranja.avif'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="catalogo.css">
    <title>Catálogo - arrays</title>
</head>

<body>
    <header class="container">
        <div class="row">
            <div class="col-9 titulo">
                <h1 class="fw-light">MINHA LOJA</h1>
            </div>
            <div class="col-3 foto">
                <img src="img/0001catalogologo.png" class="rounded-circle" width="100%">
            </div>
        </div>
    </header>

    <br><br>

    <div class="container">
        <div class="alert alert-secondary" role="alert">
            ROUPAS:
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
            $roupaImagem = ['img/conj-leggintop.jpeg', 'img/jaqueta-jeans.jpeg', 'img/vestido-longo1.avif'];
            $roupaNome = ['Conj Legging e top', 'Jaqueta Jeans', 'Vestido de noiva'];
            for ($i = 0; $i < count($roupaNome); $i++) {
            ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="<?php echo $roupaImagem[$i]; ?>">
                        <div class="card-body">
                            <p class="card-text"><?php echo $roupaNome[$i]; ?> </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <small class="text-muted">R$<?php echo $roupaPreco[$i];?></small>
                                    <br>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="margin-left:202px;">COMPRAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    </div>

    <br><br>

    <div class="container">
        <div class="alert alert-secondary" role="alert">
            ACESSORIOS:
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
            $acessorioImagem = ['img/anelcatalogo.jpg', 'img/bolsadepalha.webp', 'img/pulseira-catalogo.jpg'];
            $acessorioNome = ['Anel de prata', 'Bolsa de palha', 'Pulseira'];
            for ($i = 0; $i < count($acessorioNome); $i++) {
            ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="<?php echo $acessorioImagem[$i]; ?>">
                        <div class="card-body">
                            <p class="card-text"><?php echo $acessorioNome[$i]; ?> </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <small class="text-muted">R$<?php echo $acessorioPreco[$i]; ?></small>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="margin-left:202px;">COMPRAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    </div>


    <div class="album py-5 bg-light">
        <div class="container">
            <div class="alert alert-secondary" role="alert">
                MAQUIAGEM:
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                $maquiagemImagem = ['img/batons-modelo.avif', 'img/rimelimg.png', 'img/sombra-laranja.avif'];
                $maquiagemNome = ['Batom', 'Rímel', 'Sombra'];
                for ($i = 0; $i < count($maquiagemNome); $i++) {
                ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="<?php echo $maquiagemImagem[$i]; ?>">

                            <div class="card-body">
                                <p class="card-text"><?php echo $maquiagemNome[$i]; ?> </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <small class="text-muted">R$<?php echo $maquiagemPreço[$i];?></small>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" style="margin-left:202px;"> COMPRAR</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>