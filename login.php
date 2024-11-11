<?php 
    $erro = 10;
    if(isset($_GET['erro'])) {
        $erro = $_GET['erro'];
    }

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Twoods</title>
    <link rel="icon" href="./public/imagens/imagens/favicon.png"/>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/signin.css">

    
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body{
        background-color: #FBF3DE;
      }
      .btn-colour-1 {
        color: #fff;
        background-color: #D88C35;
        border-color: #D88C35;
        font-weight: bold;
        letter-spacing: 0.05em;
        border-radius: 2;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="controller/login_controller.php" method="POST">
  <img class="mb-4" src="public/Imagens/imagens/favicon.png" alt="Logo do site" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Faça seu login, por favor</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="loginEmail" placeholder="email" required>
      <label for="floatingInput">Endereço de email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="loginSenha" placeholder="senha" required>
      <label for="floatingPassword">Senha</label>
    </div>


    <button class="btn-colour-1" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
  <?php
      if($erro == 100){
    ?>
      <h4 style='color:red'>E-mail ou senha inválidos!</h4>
    <?php
    } else {
    ?>
      <p></p>
    <?php
    }
  ?>
</main>


    
  </body>
</html>
