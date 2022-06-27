<?php
include '../login/protect.php';
include "../_scripts/functions.php";

?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link rel="icon" href="../_images/bx-package.svg">

    <link rel="stylesheet" href="../_css/menu.css">
    <link rel="stylesheet" href="../_css/telavendedor.css">
    <title>Painel do Vendedor</title>

</head>

    <?php include "../menu/menuVendedor.php" ?>

        <div class="col-md-12 d-flex justify-content-center">
            <div class="alert alert-warning alert-dismissible alert-light fade show" role="alert">
                <strong>
                    <h3> ATENÇÃO!</h3>
                </strong>
                Alguns produtos estão quase acabando. <a href="../produtos/estoque_baixo.php" class="alert-link">Confira</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>

        <section class="mb-4" id="vendas">

            <!--SESSÃO VENDAS-->
            <div class="container-fluid">
                <div class="cards-intro">
                    <div class="row titulo mb-4">
                        <h1>Vendas</h1>
                    </div>
                    <div class="row ">

                        <div class="col-md-3 container">
                            <button onclick="window.location.href = '../vendas/venda.php'" type="submit" class="btn btn-confirmar mb-1 card-body">
                                <p class="card-text">Nova Venda</p>
                                <i class="fa-solid fa-cart-shopping fa-3x card-icon"></i>
                            </button>
                        </div>

                        <div class="col-md-3 container">
                            <button onclick="window.location.href = '../vendas/listar_vendas.php'" type="submit" class="btn btn-confirmar mb-1 card-body">
                                <p class="card-text">Pesquisar</p>
                                <i class="fa-solid fa-magnifying-glass fa-3x card-icon"></i>
                            </button>
                        </div>

                        <div class="col-md-3 container">
                            
                        </div>

                        <div class="col-md-3 container">

                        </div>

                    </div>
                </div>
            </div>

        </section>

        <!--SESSÃO PRODUTOS-->
        <section class="mb-8" id="produtos">
            <div class="container-fluid">
                <div class="cards-intro">
                    <div class="row titulo mb-4">
                        <h1>Produtos</h1>
                    </div>
                    <div class="row ">

                        <div class="col-md-3 container">
                            <button onclick="window.location.href = '../produtos/listar_produtos_Sessao.php'" type="submit" class="btn btn-confirmar mb-1 card-body">
                                <p class="card-text">Pesquisar</p>
                                <i class="fa-solid fa-magnifying-glass fa-3x card-icon"></i>
                            </button>
                        </div>

                        <div class="col-md-3 container">
                            <button onclick="window.location.href = '../produtos/listar_produtos.php'" type="submit" class="btn btn-confirmar mb-1 card-body">
                                <p class="card-text">editar</p>
                                <i class="fa-solid fa-pen-to-square card-icon"></i>
                            </button>
                        </div>

                        <div class="col-md-3 container">
                         
                        </div>

                        <div class="col-md-3 container">
                         
                         </div>
                    </div>
                </div>
            </div>
        </section>

        <!--SESSÃO ESTOQUE-->
      

        


        <!--Container Main end-->
        <?php include "../componentes/js.php" ?>

</body>

</html>