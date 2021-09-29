<?php
session_start();

if (!isset($_SESSION["nomeusuario"])) {
    header("Location: index.php?msg=1");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
                
        <style>
            .bold{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div id="dvTopo" class="max-width">
            <div class="row">
                <div class="col-xs-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">LOGIN TXT</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="?pagina=home">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="?pagina=pedidos">Pedidos</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configurações <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="?pagina=minhaconta">Minha conta</a></li>
                                            <li><a href="#">...</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="logout.php" onclick="return confirm('Deseja realmente sair?');">Sair</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>

        <div class="max-width" id="dvConteudo">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    $pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_STRING);

                    switch ($pagina) {
                        case "pedidos":
                            require_once("View/Pedidos.php");
                            break;

                        case "minhaconta":
                            require_once("View/Minhaconta.php");
                            break;
                        
                        default:
                            require_once("View/Home.php");
                    }
                    ?>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>