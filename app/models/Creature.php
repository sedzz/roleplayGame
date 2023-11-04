<?php
class Creature{
    
    private $idCreature;
    private $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weapon;

    public function __construct(){

    }
    public function getIdCreature(){
        return $this->idCreature;
    }
    public function getName(){
        return $this->name;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getAvatar(){
        return $this->avatar;
    }
    public function getAttackPower(){
        return $this->attackPower;
    }
    public function getLifeLevel(){
        return $this->lifeLevel;
    }
    public function getWeapon(){
        return $this->weapon;
    }

    // SETTERS

    public function setIdCreature($idCreature){
        $this->idCreature = $idCreature;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }
    public function setAttackPower($attackPower){
        $this->attackPower = $attackPower;
    }
    public function setLifeLevel($lifeLevel){
        $this->lifeLevel = $lifeLevel;
    }
    public function setWeapon($weapon){
        $this->weapon = $weapon;
    }

  //Función para pintar cada ofertas
    function privateOffer2HTML() {
        $result = '<div class="col-md-4">';
        $result .= '<div class="card">';
        $result .= '<h2 class="card-title">' . $this->getName() . '</h2>';
        $result .= '<div class="row">';
        $result .= '<div class="col-md-4"><img src="' . $this->getAvatar() . '" class="w-100 h-250" alt="Avatar"></div>';
        $result .= '<div class="col-md-8">';
        $result .= '<p class="card-text">' . $this->getDescription() . '</p>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '<div class="btn-group card-footer" role="group">';
        $result .= '<a type="button" class="btn btn-secondary" href="creature/detail.php?id=' . $this->getIdCreature() . '">Detalles</a>';
        $result .= '<a type="button" class="btn btn-success" href="creature/edit.php?id=' . $this->getIdCreature() . '">Modificar</a>';
        $result .= '<a type="button" class="btn btn-danger" href="../../controllers/creature/deleteController.php?id=' . $this->getIdCreature() . '">Borrar</a>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '</div>';

return $result;
    }

    function publicOffer2HTML() {
        $result = '<div class="col-md-4">';
        $result .= '<div class="card">';
        $result .= '<h2 class="card-title">' . $this->getName() . '</h2>';
        $result .= '<div class="row">';
        $result .= '<div class="col-md-4"><img src="' . $this->getAvatar() . '" class="w-100 h-250" alt="Avatar"></div>';
        $result .= '<div class="col-md-8">';
        $result .= '<p class="card-text">' . $this->getDescription() . '</p>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '<div class="btn-group card-footer" role="group">';
        $result .= '<a type="button" class="btn btn-secondary" href="creature/detail.php?id=' . $this->getIdCreature() . '">Detalles</a>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '</div>';

return $result;
     }

}




?>