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

    <link rel="stylesheet" href="../_css/telagerente.css">
    <title>Painel do Gerente</title>

</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_cargo"><a href="#" class="nav_cargo"><span class="nav_logo-cargo"><?php echo $_SESSION['cargo']  ?></span></a>
 </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <?php include_once "../_scripts/functions.php";?>
                <a href="#" class="nav_logo mb-0"><i class='bx bxs-id-card nav_logo-icon'></i> <span class="nav_logo-name"><?php echo $_SESSION['nome'];?></span></a>
                <
                <hr>

                <div class="nav_list">
                    <a href="../telas_cargo/telaGerente.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Painel</span> </a>
                    <a href="../telas_cargo/telaGerente.php#analise" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Análise</span></a>
                    <a href="../telas_cargo/telaGerente.php#vendas" class="nav_link"> <i class='bx bx-cart nav_icon'></i> <span class="nav_name">Vendas</span></a>
                    <a href="../telas_cargo/telaGerente.php#produtos" class="nav_link"> <i class='bx bx-package nav_icon'></i> <span class="nav_name">Produtos</span> </a>
                    <a href="../telas_cargo/telaGerente.php#estoque" class="nav_link"> <i class='bx bx-purchase-tag-alt nav_icon'></i> <span class="nav_name">Estoque</span> </a>
                    <a href="../telas_cargo/telaGerente.php#usuarios" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuários</span> </a>

                </div>
            </div>

            <a href="../login/logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sair</span> </a>
        </nav>
    </div>
    <!--Container Main start-->

    <div class="height-100 ">

        <section class="mb-8" id="analise">
            <div class="row titulo mb-4">
                <h1>Análise</h1>
            </div>
            <div class="container-fluid">

                <div class="row justify-content-center">
                    
                    <div class="col-lg-6">
                        <div class="container-caixa">

                            <ul class="list-inline text-center mb-1">
                                <li class="ms-auto"><?php echo (vendasMes()); ?></li>
                                <h3 class="caixa-title">Produtos Vendidos no mês</h3>
                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="container-caixa">
                            <ul class="list-inline text-center mb-1">
                                <li class="ms-auto"><?php echo (vendasDia()); ?></li>
                                <h3 class="caixa-title">Produtos vendidos no dia</h3>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
        
                <div class="col-lg-6 d-flex justify-content-center text-center">

                    <div class="row  mt-4 mb-2">
                        <div class="col-lg-12 d-flex justify-content-center text-center">
                            <h2>Top 10 produtos mais vendidos No Mês</h2>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">     
                                <div id="chartdiv1">
                                    <?php include "../graf/top10ProdutosMes.php"; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="col-lg-6 d-flex justify-content-center text-center">

                    <div class="row  mt-4 mb-2">
                        <div class="col-lg-12 d-flex justify-content-center text-center">
                            <h2>Top 10 produtos mais vendidos No dia</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                    
                                    <div id="chartdiv">
                                        <?php include "../graf/top10ProdutosDia.php"; ?>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
                </div>

        </section>




        <div class="col-md-12 d-flex justify-content-center">
            <div class="alert alert-warning alert-dismissible alert-light fade show" role="alert">
                <strong>
                    <h3> ATENÇÃO!</h3>
                </strong>
                Alguns produtos estão quase acabando. <a href="../produtos/estoque_baixo.php" class="alert-link">Confira</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>

        <section class="mb-8" id="vendas">

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
                            <button onclick="window.location.href = '../vendas/cancelar_venda.php'" type="submit" class="btn btn-confirmar mb-1 card-body">
                                <p class="card-text">cancelar venda</p>
                                <i class="fa-solid fa-ban fa-3x card-icon"></i>
                            </button>
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
                            <button onclick="window.location.href = '../produtos/cadastro_produtos.php'" type="submit" class="btn btn-confirmar mb-1 card-body">
                                <p class="card-text">Novo</p>
                                <i class="fa-solid fa-plus fa-4x card-icon"></i>
                            </button>
                        </div>

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
                            <!-- <button type="submit" class="btn btn-confirmar mb-1 card-body">
                                    <p class="card-text">excluir</p>
                                    <i class="fa-solid fa-trash-can fa-3x card-icon"></i>
                                </button> -->
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--SESSÃO ESTOQUE-->
        <section class="mb-8" id="estoque">
            <div class="container-fluid">


                <div class="cards-intro">
                    <div class="row titulo mb-4">
                        <h1>Estoque</h1>
                    </div>

                    <!--ALERTA-->


                    <!--BOTÕES-->
                    <div class="row">



                        <div class="col-md-3 container">
                            <button type="submit" onclick="window.location.href = '../produtos/estoque_baixo.php'" class="btn btn-confirmar mb-1 card-body">
                                <p class="card-text">sugestão de compras</p>
                                <i class="fa-solid fa-list-check fa-3x card-icon"></i>
                            </button>
                        </div>

                        <div class="col-md-3 container">
                            <button type="submit" class="btn btn-confirmar mb-1 card-body">
                                <p class="card-text">comprar mais</p>
                                <i class="fa-solid fa-cart-arrow-down fa-3x card-icon"></i>
                            </button>
                        </div>

                        <div class="col-md-3 container">
                            <!-- <button type="submit" class="btn btn-confirmar mb-1 card-body">
                                <p class="card-text">comprar mais</p>
                                <i class="fa-solid fa-cart-arrow-down fa-3x card-icon"></i>
                            </button> -->
                        </div>

                        <div class="col-md-3 container">
                            <!-- <button type="submit" class="btn btn-confirmar mb-1 card-body">
                                <p class="card-text">Pesquisar</p>
                                <i class="fa-solid fa-magnifying-glass fa-3x card-icon"></i>
                            </button> -->
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <section class="mb-8" id="usuarios">
            <div class="container-fluid">
                <div class="cards-intro">
                    <div class="row titulo mb-4">
                        <h1>Usuários</h1>
                    </div>
                    <div class="row ">

                        <div class="col-md-3 container">
                            <button onclick="window.location.href = '../usuarios/cadastro_usuario.php'" type="submit" class="btn btn-confirmar mb-1 card-body">
                                <p class="card-text">Novo</p>
                                <i class="fa-solid fa-plus fa-4x card-icon"></i>
                            </button>
                        </div>



                        <div class="col-md-3 container">
                            <button onclick="window.location.href = '../usuarios/listar_usuarios.php'" type="submit" class="btn btn-confirmar mb-1 card-body">
                                <p class="card-text">editar</p>
                                <i class="fa-solid fa-pen-to-square card-icon"></i>
                            </button>
                        </div>

                        <div class="col-md-3 container">
                            <!-- <button type="submit" class="btn btn-confirmar mb-1 card-body">
                                    <p class="card-text">excluir</p>
                                    <i class="fa-solid fa-trash-can fa-3x card-icon"></i>
                                </button> -->
                        </div>

                        <div class="col-md-3 container">
                            <!-- <button type="submit" class="btn btn-confirmar mb-1 card-body">
                                    <p class="card-text">excluir</p>
                                    <i class="fa-solid fa-trash-can fa-3x card-icon"></i>
                                </button> -->
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!--Container Main end-->
        <?php include "../componentes/js.php" ?>

</body>

</html>