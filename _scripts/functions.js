// onblur="pesquisacep(this.value);


function trocar(event) {
    event.preventDefault();
    var input = document.querySelector("#inputLink");
    var link = input.value;
    var img = document.querySelector(".produto_img");
    img.src = link;

    if(link == ''){
      img.src = "_images/img_nãoCarregada.png";

    }

  }

 


// preencher vendedores

  // <?php
  // include '_scripts/config.php';
  // $sql = "SELECT nome FROM dados_user WHERE tipo = 'Vendedor'";
  // $query = $mysqli->query($sql) or die("ERRO: " . $mysqli->error);

  // while ($row = mysqli_fetch_assoc($query)) {
  //     echo "<option>" . $row['nome'] . "</option>";
  // }
  // ?>