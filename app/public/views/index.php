<?php
require_once(dirname(__FILE__) . '/../../controllers/indexController.php');

$creatures = indexAction();
//Gestionar Sesion
require_once(dirname(__FILE__) . '/../../../utils/SessionUtils.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Roleplay Game</title>
            <!-- Bootstrap Core CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <a class="navbar-brand" href="#"><img src="../../../assets/img/header-mini-logo.png" alt="" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                </ul>
                <span class='badge badge-danger mr-2'>inicia sesión</span>
                    <form class="form-inline" role="form" method="POST" action="../../controllers/user/userController.php">
                            <input type="text" name="user" class="form-control" id="email"
                                   placeholder="usuario" required autofocus>
                        <button type="submit" class="btn btn-success" value="Login" id="login" name="btnsubmit"> Acceder</button>
                    </form> 

            </div>  
        </nav>

        <div class="container">
            <!-- Heading Row -->
            <div class="row">
                <div class="col-md-8">
                    <img class="img-fluid rounded" src="../../../assets/img/main-logo.jpeg" alt="">
                </div>
                <!-- /.col-md-8 -->
                <div class="col-md-4">
                    <h1>Comunidad de usuarios de Heroes</h1>
                    <p class="lead">La aventura comienza aqui, en tu navegador</p>
                    <button type="button" class="btn btn-primary">Juega ahora!</button>
                </div>
            </div>
        </div>
        <hr>
        <!-- Content Row -->
        <?php
            for($i = 0; $i < sizeof($creatures); $i+=3){
                ?>       
            <div class="card-group">
        <?php
            for($j = $i;$j < ($i +3); $j++){
                if(isset($creatures[$j])){
                    echo $creatures[$j]->publicOffer2HTML();
                }
            }
        ?>
        </div>
        <?php
        }
        ?>
</div>
<!-- Java Script Boostrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
    </body>

</html>
