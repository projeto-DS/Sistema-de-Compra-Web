<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="_css/cadastro_produtos.css">

    <title>Cadastro usuario</title>
</head>

<body>
    <!-- <div class="botao">
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#addUsuarioModal">
            Cadastrar
        </button>
    </div>

    <div id="addUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title modal-title w-100 font-weight-bold" id="amoda">Cadastrar Produto</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="insert_form">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome completo">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10">
                                <input name="email" type="email" class="form-control form-control-lg" id="email" placeholder="Seu melhor E-mail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="submit" name="CadUser" id="CadUser" value="Cadastrar" class="btn btn-outline-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="orangeForm-name" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="orangeForm-email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="orangeForm-pass" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-deep-orange">Sign up</button>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
            Modal Register Form</a>
    </div> -->


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="form">
                    <form action="" method="POST">
                        <div class="form-header">
                            <div class="title text-center">
                                <h1>Cadastrar Produtos</h1>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-box">
                                <label for="nome_produto">Nome do Produto</label>
                                <input type="text" id="inputNome_produto" name="nomeProduto" class="form-control" placeholder="Digite o nome do produto" required><br>
                            </div>

                            <div class="input-box">
                                <label for="codigo">Código</label>
                                <input type="text" id="inputCodigo" name="codigo" class="form-control" placeholder="Digite o código do produto" required><br>
                            </div>


                            <div class="input-box">
                                <label for="fornecedor">Fornecedor</label>
                                <input type="text" id="inputFornecedor" name="fornecedor" class="form-control" placeholder="Digite o nome do Fornecedor" required><br>
                            </div>

                            <div class="input-box">
                                <label for="custo">Custo do Produto</label>
                                <input type="text" id="inputCusto" name="custo" class="form-control" placeholder="Digite o custo do produto" required><br>
                            </div>

                            <div class="input-box">
                                <label for="valor">Valor do Produto</label>

                                <input type="text" id="inputValor_venda" name="valor" class="form-control" placeholder="Digite o valor do produto" required>
                            </div>

                            <div class="input-box">
                                <label for="select">Vendedor</label>
                                <select name="vendedor" class='form-select'>
                                    <option selected></option>
                                    <?php
                                    include '_scripts/config.php';
                                    $sql = "SELECT nome FROM dados_user WHERE tipo = 'Vendedor'";
                                    $query = $mysqli->query($sql) or die("ERRO: " . $mysqli->error);

                                    while ($row = mysqli_fetch_assoc($query)) {
                                        echo "<option>" . $row['nome'] . "</option>";
                                    }
                                    ?>
                                </select>

                            </div>


                        </div>
                        <div class="continue-button">
                            <button><a href="#">Cadastrar</a> </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>



</html>


<?php
if (isset($_POST['nomeProduto']) || isset($_POST['codigo'])) {

    include '_scripts/config.php';
    include '_scripts/functions.php';

    $nome = $_POST['nomeProduto'];
    $codigo = $_POST['codigo'];
    $fornecedor = $_POST['fornecedor'];
    $custo = $_POST['custo'];
    $valor = $_POST['valor'];
    $vendedor = $_POST['vendedor'];


    if (cadastro_produto($codigo) == 0) {

        $sql = "INSERT INTO `cad_produto` (`id`, `data_cadastro`, `nome_produto`, `nome_vendedor`, `fornecedor`, `custo_produto`, `valor_venda`, `codigo_produto`) VALUES (NULL, current_timestamp(), '$nome', '$vendedor', '$fornecedor', '$custo', '$valor', '$codigo')";

        $query = $mysqli->query($sql) or die("ERRO: " . $mysqli->error);

    } else {
    }
}
?>