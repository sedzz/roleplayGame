<?php
// Analizo la sesión
?>
<!DOCTYPE html>
<html lang="en">
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
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href="../../../../index.php"><img src="../../../../assets/img/header-mini-logo.png" alt="" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a  class="nav-link text-light" href="contact.php">Crear criatura</a>
                    </li>
                </ul>
                <?php
                // if (SessionUtils::loggedIn())
                //     echo "<span class='badge badge-success  '> Has iniciado sesión: " . $_SESSION['user'] . "</span>";
                // else {
                //     // En caso de no estar registrado redirigimos a la visualización pública
                //     header('Location: ../../public/views/index.php');
                // }
                ?>
            </div>  
        </nav>
       <!-- Page Content -->
       <div class="container">
            <form class="form-horizontal" method="post" action="../../../controllers/creature/insertController.php">

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="title" placeholder="Name" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                    <div class="col-sm-10">
                        <input type="textbox" class="form-control" id="avatar" name="avatar" placeholder="Avatar" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="attackPower" class="col-sm-2 control-label">Attack Power</label>
                    <div class="col-sm-10">
                        <input type="textbox" class="form-control" id="attack-power" name="attackPower" placeholder="AttackPower" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lifeLevel" class="col-sm-2 control-label">Life Level</label>
                    <div class="col-sm-10">
                        <input type="textbox" class="form-control" id="life-level" name="lifeLevel" placeholder="LifeLevel" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="weapon" class="col-sm-2 control-label">Weapon</label>
                    <div class="col-sm-10">
                        <input type="textbox" class="form-control" id="weapon" name="weapon" placeholder="Weapon" value="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Create</button>
                    </div>
                </div>
            </form>
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; sebastian diez</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.container -->
        <!-- Java Script Boostrap-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
    </body>
</html>


