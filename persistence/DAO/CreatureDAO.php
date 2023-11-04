<?php
//dirname(__FILE__) Es el directorio del archivo actual
require_once(dirname(__FILE__) . '\..\conf\PersistentManager.php');

class CreatureDAO{
    const CREATURE_TABLA = 'creature';

    //conexion db
    private $conn = null;

    public function __construct(){
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectAll(){
        $query = "SELECT * FROM " . CreatureDAO::CREATURE_TABLA;
        $result = mysqli_query($this->conn,$query);
        $creatures = array();
        while ($creatureDB = mysqli_fetch_array($result)){
            $creature = new Creature();

            $creature->setIdCreature($creatureDB["idCreature"]);
            $creature->setName($creatureDB["name"]);
            $creature->setDescription($creatureDB["description"]);
            $creature->setAvatar($creatureDB["avatar"]);
            $creature->setAttackPower($creatureDB["attackPower"]);
            $creature->setLifeLevel($creatureDB["lifeLevel"]);
            $creature->setWeapon($creatureDB["weapon"]);

            array_push($creatures,$creature);
        }
        return $creatures;
    }

    public function insert($creature){
        $query = "INSERT INTO " . CreatureDAO::CREATURE_TABLA .
                " (name, description, avatar, attackPower, lifeLevel, weapon) VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weapon = $creature->getWeapon();

        mysqli_stmt_bind_param($stmt, 'ssssss', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);
        return $stmt->execute();
    }

    public function selectById($id){
        $query = "SELECT name, description, avatar, attackPower, lifeLevel, weapon FROM  " . CreatureDAO::CREATURE_TABLA . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn,$query);
        mysqli_stmt_bind_param($stmt,'i',$id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $name, $description, $avatar,$attackPower, $lifeLevel, $weapon);

        $creature = new Creature();
        while(mysqli_stmt_fetch($stmt)){
            $creature->setIdCreature($id);
            $creature->setName($name);
            $creature->setDescription($description);
            $creature->setAvatar($avatar);
            $creature->setAttackPower($attackPower);
            $creature->setLifeLevel($lifeLevel);
            $creature->setWeapon($weapon);
        }

        return $creature;

    }

    public function update($creature){
        $query = "UPDATE " . CreatureDAO::CREATURE_TABLA .
                " SET name=?, description=?, avatar=?, attackPower=?, lifeLevel=?, weapon=?" .
                " WHERE idCreature=?";

        $stmt = mysqli_prepare($this->conn,$query);
        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weapon = $creature->getWeapon();
        $id = $creature->getIdCreature();
        mysqli_stmt_bind_param($stmt,'ssssssi',$name, $description, $avatar, $attackPower, $lifeLevel, $weapon, $id);

        return $stmt->execute();
    }

    public function delete($id){
        $query = "DELETE FROM " . CreatureDAO::CREATURE_TABLA . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn,$query);
        mysqli_stmt_bind_param($stmt,'i',$id);

        return $stmt->execute();

    }

}


?>