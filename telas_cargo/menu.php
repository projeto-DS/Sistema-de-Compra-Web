
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
    <link rel="stylesheet" href="../_css/telagerente.css">
    <title>Painel do Gerente</title>

</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <!-- <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> -->
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Titulo</span></a>
                <a href="#" class="nav_cargo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Titulo</span></a>
                <div class="nav_list">
                    <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Painel</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Produtos</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Análise</span></a>
                    <a href="#usuarios" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuários</span> </a>

                </div>
            </div>

            <a href="../login/logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sair</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 ">

        
    </div>
    <!--Container Main end-->
    <script src="sidebar.js"></script>
    <?php include "../componentes/js.php" ?>

</body>

</html>