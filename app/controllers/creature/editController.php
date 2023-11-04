<?php
require_once(dirname(__FILE__) . '/../../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Creature.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Llamo a la función en cuanto se redirige el action a esta página mediante metodo POST
    editAction();
}

function editAction(){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $avatar = $_POST["avatar"];
    $attackPower = $_POST["attackPower"];
    $lifeLevel = $_POST["lifeLevel"];
    $weapon = $_POST["weapon"];

    $creature = new Creature();
    $creature->setIdCreature($id);
    $creature->setName($name);
    $creature->setDescription($description);
    $creature->setAvatar($avatar);
    $creature->setAttackPower($attackPower);
    $creature->setLifeLevel($lifeLevel);
    $creature->setWeapon($weapon);

    //llamda a la database
    $creatureDAO = new CreatureDAO();
    $creatureDAO->update($creature);

    header('Location: ../../../index.php');
}

?>