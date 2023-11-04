<?php
require_once(dirname(__FILE__) . '/../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Creature.php');

function indexAction(){
    $creatureDAO = new CreatureDAO();
    return $creatureDAO->selectAll();
}
?>