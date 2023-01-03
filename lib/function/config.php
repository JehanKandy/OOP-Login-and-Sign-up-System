<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB_NAME','oop_login');

    try{
        $conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USER, PASS);
    }

    catch (PDOException $e){
        exit("ERROR: ". $e->getMessage());
    }
?>
