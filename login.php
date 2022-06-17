<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="_images/logo.png">
  <title>My little Pony</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="_css/login.css" type="text/css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body class="text-center">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form class="form-signin " action="" method="POST">
          <img class="mb-4" src="_images/logo.png" alt="Tela de Login" width="200px" height="200px">

          <input type="text" id="inputUsuario" name="usuario" class="form-control" placeholder="Usuário" required autofocus><br>

          <input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Senha" required><br>

          <button class="btn btn-lg btn-primary" type="submit">Entrar</button>
          <p class="mt-5 mb-3 text-muted">&copy;2022</p>
        </form>
      </div>

    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
include '_scripts/config.php';

// Executa o código quando os campos de úsuario e senha não estiverem vazios
if (isset($_POST['usuario']) || isset($_POST['senha'])) {

  // Adiciona os valores do inputs ás váriaveis (real_escape_string para previnir sql injector)
  $usuario = $mysqli->real_escape_string($_POST['usuario']);
  $senha = $mysqli->real_escape_string($_POST['senha']);

  //Código sql para checar na tabela "dados_user" se o úsuario e a senha estão corretos
  $sql = "SELECT * FROM dados_user WHERE usuario = '$usuario' AND senha = '$senha'";
  //Executa o código sql e em caso de falha retorna o erro
  $query = $mysqli->query($sql) or die("ERRO: " . $mysqli->error);


  $qtd = $query->num_rows;

  if ($qtd == 1) {
    echo "<h1 id='test'>Funcionou<br>Usuario:" . $usuario . "<br>Senha:" . $senha . "</h1></div>";
  } else {
    echo "<h1 id='test'>E-mail ou senha incorretos<br>Usuario:" . $usuario . "<br>Senha:" . $senha . "</h1>";
  }
}

?>