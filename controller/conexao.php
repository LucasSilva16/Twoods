<?php
     $dsn = "mysql:dbname=Twoods;host=localhost";

     $usuario = "root";

     $senha = "etec";


     try{
        $conn = new PDO($dsn, $usuario, $senha);
     } catch(PDOException $ex){
        echo("Ocoreu erro: " . $ex->getMessage());
        die();
     }

?>