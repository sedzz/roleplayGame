<?php
require_once((__DIR__) . '/../conf/PersistentManager.php');

class UserDAO{

    const USER_TABLE = 'users';

    private $conn = null;

    public function __construct(){
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function check($user) {
        $query = "SELECT user FROM " . UserDAO::USER_TABLE . " WHERE user=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $auxUser = $user->getUser();
                 
        mysqli_stmt_bind_param($stmt, 's', $auxUser);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt); 
        $rows = mysqli_stmt_num_rows($stmt);
        if($rows>0)         
            return true;
        else
            return false;
    }
    
    
    public function selectById($id) {
        $query = "SELECT name FROM " . UserDAO::USER_TABLE . " WHERE idUser=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $user);

        $user = new User();
        while (mysqli_stmt_fetch($stmt)) {
            $user->setIdUser($id);
            $user->setUser($user);
       }

        return $user;
    }


}

?>