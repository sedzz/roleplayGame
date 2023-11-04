<?php
require_once(dirname(__FILE__) . '/../../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Creature.php');
require_once(dirname(__FILE__) . '/../../../app/models/validations/ValidationRules.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    createAction();
}

function createAction(){
    $name = ValidationRules::test_input($_POST["name"]);
    $description = ValidationRules::test_input($_POST["description"]);
    $avatar = ValidationRules::test_input($_POST["avatar"]);
    $attackPower = ValidationRules::test_input($_POST["attackPower"]);
    $lifeLevel = ValidationRules::test_input($_POST["lifeLevel"]);
    $weapon = ValidationRules::test_input($_POST["weapon"]);

    $creature = new Creature();
    $creature->setName($name);
    $creature->setDescription($description);
    $creature->setAvatar($avatar);
    $creature->setAttackPower($attackPower);
    $creature->setLifeLevel($lifeLevel);
    $creature->setWeapon($weapon);

    $creatureDAO = new CreatureDAO();
    $creatureDAO->insert($creature);

    header('Location: ../../../index.php');
}
?>