<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "oop_login";
    
    try {
        $con = new PDO("mysql:host=$server;dbname=$db_name", $user, $pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $con->beginTransaction();

        function reg_user($usernmae,$email,$pass,$cpass){
            echo "hi";

        }

    }
    catch(PDOException $e){
        $con->rollBack();
        echo "ERROR: " . $e->getMessage();
    }

    $con=null;

?>