<?php
    require_once('conexao.php');

    session_start();

    $nome = $_POST['nomeCadastro'];
    $email = $_POST['emailCadastro'];
    $senha = $_POST['senhaCadastro'];

    print_r($nome);


        try{
            $sql = "insert into usuario (nome, email, senha) values (:NOME, :EMAIL, :SENHA);";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(":NOME",$nome);
            $stmt->bindParam(":EMAIL",$email);
            $stmt->bindParam(":SENHA",$senha);

            $stmt->execute();

            $_SESSION['email_usuario'] = $email;
            $_SESSION['usuario'] = $nome;

            header("location: ../index.php");

        } catch(PDOException $ex){
            echo("Ocorreu erro:" . $ex->getMessage());
            die();
        }
        

?>