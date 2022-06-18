<?php

function produtoExiste($codigo)
{
    include "config.php";
    $sql = "SELECT codigo_produto FROM cad_produto WHERE codigo_produto='$codigo'";
    $query = $mysqli->query($sql);
    $total = mysqli_num_rows($query);

    return $total;
}



function cadastrarProduto($dados)
{
    include "config.php";

    $nome = $dados['nomeProduto'];
    $codigo = $dados['codigo'];
    $fornecedor = $dados['fornecedor'];
    $custo = $dados['custo'];
    $valor = $dados['valor'];
    $url = $dados['link'];


    if (produtoExiste($codigo) == 0) {

        $sql = "INSERT INTO `cad_produto` (`id`, `data_cadastro`, `nome_produto`, `fornecedor`, `custo_produto`, `valor_venda`, `codigo_produto`, `url_img`) VALUES (NULL, current_timestamp(), '$nome', '$fornecedor', '$custo', '$valor', '$codigo', '$url')";

        $query = $mysqli->query($sql) or die("ERRO: " . $mysqli->error);
        return $query;
    }

    else {
        return False;
    }

}


function login($dados)
{
    include "config.php";

    // Adiciona os valores do inputs ás váriaveis (real_escape_string para previnir sql injector)
    $usuario = $mysqli->real_escape_string($dados['usuario']);
    $senha = $mysqli->real_escape_string($dados['senha']);

    //Código sql para checar na tabela "dados_user" se o úsuario e a senha estão corretos
    $sql = "SELECT * FROM dados_user WHERE usuario = '$usuario' AND senha = '$senha'";
    //Executa o código sql e em caso de falha retorna o erro
    $query = $mysqli->query($sql) or die("ERRO: " . $mysqli->error);

    $qtd = $query->num_rows;

    if ($qtd == 1) {
      return true;
    }
    else {
        return false;
    }
}

?>
