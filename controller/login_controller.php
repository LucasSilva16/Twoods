<?php
    require_once('conexao.php');

    session_start();
    $email = $_POST['loginEmail'];
    $senha = $_POST['loginSenha'];

    try{
        $sql = "select id, nome from usuario where email=:EMAIL and senha=:SENHA;";
        $stmt = $conn->prepare($sql);
        $stmt -> bindParam(":EMAIL", $email);
        $stmt -> bindParam(":SENHA", $senha);

        $stmt-> execute();
        $result = $stmt->fetch();

        if($result > 0 ){
            $_SESSION['idUsuario'] = $result['id'];
            $_SESSION['usuario'] = $result['nome'];
            header('location: ../index.php');
        }else{
            header('location: ../login.php?erro=100');
        }

    }catch(PDOException $ex){
        echo("Ocorreu erro:" . $ex->getMessage());
        die();
    }


?>