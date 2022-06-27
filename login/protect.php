<?php 
  if(!isset($_SESSION)){
    session_start();
    
  }
  
  if(!isset($_SESSION['id'])){
    die("Você não está conectado<br><button><a href='../login/login.php'>Entrar</a></button>");
  }

?>
