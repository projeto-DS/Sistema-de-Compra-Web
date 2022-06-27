<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../_images/logo.png">
  <title>My little Pony</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../_css/login.css" type="text/css" rel="stylesheet">
  <link rel="icon" href="../_images/bx-package.svg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body class="text-center">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form class="form-signin mt-5 " action="" method="POST">
          <input type="text" id="inputUsuario" name="usuario" class="form-control mt-4" placeholder="Usuário" required autofocus><br>

          <input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Senha" required><br>

          <button class="btn btn-lg btn-primary" type="submit">Entrar</button>
          <p class="mt-5 mb-3 text-muted">&copy;2022</p>
        </form>
      </div>

    </div>
  </div>



  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php

// Executa o código quando os campos de úsuario e senha não estiverem vazios
if (isset($_POST['usuario']) || isset($_POST['senha'])) {
    include '../_scripts/functions.php';

  login($_POST);


}

?>