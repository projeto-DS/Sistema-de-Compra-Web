<?php

    function cadastro_produto($codigo){
        include "config.php";
        $sql = "SELECT codigo_produto FROM cad_produto WHERE codigo_produto='$codigo'";
        $query = $mysqli->query($sql);
        $total = mysqli_num_rows($query);
        
        return $total;
    }

    function login(){

    }
?>
