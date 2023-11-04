<?php
class ValidationRules{

    public static function test_input($data){
        $data = trim($data);
        $data = addslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
