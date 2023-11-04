<?php

/**
 * Class User
 * 
 * Encapsulates a user.
 *
 * @version    0.1
 * 
 * @author     Ander Frago <ander_frago@cuatrovientos.org>
 */
class User{

    private $userid;
    private $user;

//Getters and setters of User Class.

public function getUserid() {
    return $this->userid;
}

public function setUserid($userid) {
    $this->userid = $userid;
}

public function getUser() {
    return $this->user;
}

public function setUser($user) {
    $this->user = $user;
}
}

?>
