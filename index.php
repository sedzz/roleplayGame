<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php

    require_once('utils/SessionUtils.php');

    if(SessionUtils::loggedIn()){
        header("Location: app/private/views/index.php");
    }else{
        header("Location: app/public/views/index.php");
    }

    



?>
