<?php

    $db_name = 'mysql:localhost;dbname=web-shop';
    $db_user = 'root';
    $db_password = 'root';

    $conn = new PDO($db_name, $db_user, $db_password);

    if($conn) {
        echo "connected";
    }
    function unique_id() {
        $chars = 'dsdsdwwd3edewd2d2d';
        $charLenght = strlen($chars);
        $randomString = '';
        for ($i=0; $i < 20; $i++) { 
            $randomString.=$chars=[mt_rand(0, $charLenght - 1)];
        }
        return $randomString;
    }
?>