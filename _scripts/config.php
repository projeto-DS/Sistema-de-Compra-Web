<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'banco_sistemaweb';

//INTANCIAMOS A CLASSE PARA ACESSAR O BANCO
$mysqli = new mysqli($servidor,$usuario,$senha,$banco);

//Verifica se houve erro
if(mysqli_connect_errno()) trigger_error(mysqli_connect_errno())


?>