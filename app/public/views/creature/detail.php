<?php
require_once(dirname(__FILE__) . '\..\..\..\..\persistence\DAO\CreatureDAO.php');
require_once(dirname(__FILE__) . '\..\..\..\models\Creature.php');
require_once(dirname(__FILE__) . '/../../../../utils/SessionUtils.php');


if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $creatureDAO = new CreatureDAO();
    $creature = $creatureDAO->selectById($id);

    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Roleplay Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="../../../../index.php"><img src="../../../../assets/img/small-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </div> 
        
    </nav>
    <div class="container">
        
            <div class="card-block">

            <div class="form-group">
                <label for="name" class="col-sm-2 control-label font-weight-bold">Name</label>
                <div class="col-sm-10">
                        <p><?php echo (isset($_GET["id"]) ? $creature->getName() : "");?></p>
                </div>
            </div>

            <div class="form-group">
                    <label for="description" class="col-sm-2 control-label font-weight-bold">Description</label>
                    <div class="col-sm-10">
                    <p><?php echo (isset($_GET["id"]) ? $creature->getDescription() : "");?></p>
                    </div>
            </div>
            <div class="form-group">
                    <label for="avatar" class="col-sm-2 control-label font-weight-bold">Avatar</label>
                    <div class="col-sm-10">
                        <p><img class="w-25 h-25" src="<?php echo (isset($_GET["id"]) ? $creature->getAvatar() : "");?>" alt=""></p>
                    </div>
            </div>
            <div class="form-group">
                    <label for="attackPower" class="col-sm-2 control-label font-weight-bold">Attack Power</label>
                    <div class="col-sm-10">
                        <p><?php echo (isset($_GET["id"]) ? $creature->getAttackPower() : "");?></p>
                    </div>
            </div>
                <div class="form-group">
                    <label for="lifeLevel" class="col-sm-2 control-label font-weight-bold">Life Level</label>
                    <div class="col-sm-10">
                        <p><?php echo (isset($_GET["id"]) ? $creature->getLifeLevel() : "");?></p>
                    </div>
            </div>
            <div class="form-group">
                    <label for="weapon" class="col-sm-2 control-label font-weight-bold">Weapon</label>
                    <div class="col-sm-10">
                        <p><?php echo (isset($_GET["id"]) ? $creature->getWeapon() : "");?></p>
                    </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>
