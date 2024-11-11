<?php 
  session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoods</title>
    <link rel="icon" href="./public/imagens/imagens/favicon.png"/>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/offcanvas.css">
    <script src="./public/js/offcanvas.js"></script>

    <style>

      body {
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
      #logo {
        margin-right: 40px;
        list-style: none;
      }

      #menu {
        justify-content: center; 
        list-style: none;
        padding: 0;
        margin: 0;
      }

      #menu li{
        display: inline;
      }

      #menu li a{
        padding: 10px;
        text-decoration: none;
        font-weight: bold;
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

    
</head>
<body>
    <!-- Cabeçalho do site -->
    <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      
        <ul id=logo>
          <li> <a href="#"> <img src="public/Imagens/imagens/LogoOf.png" alt="logo do site"></a> </li>
        </ul>
        <ul id=menu>
          <li> <a href="#" class="btn btn-colour-1"> Redações</a> </li>
          <li> <a href="#" class="btn btn-colour-1"> Repertórios </a> </li>
          <li> <a href="#" class="btn btn-colour-1"> Escrever redação</a> </li>
        </ul>

      <div class="col-md-3 text-end">
      <?php 
      if (isset($_SESSION['usuario'])){
      ?>

        <a href="controller/logout.php" class="btn btn-colour-1" >Sair</a>
      
      <?php
      }else{
      ?>
        <a href="login.php" class="btn btn-colour-1">Entrar</a></button>
        <a href="cadastro.php" class="btn btn-colour-1">Cadastrar</a></button>
      <?php }?>
      </div>
    </header>
    </div>
    <!-- Fim do cabeçalho -->

<!-- Conteúdo do site -->
<main class="container">
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Redações recentes</h6>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <p class="pb-3 mb-0 small lh-sm border-bottom" id="posts">
        <strong class="d-block text-gray-dark" >@username</strong>
        Redação1
      </p>
    </div>

    <small class="d-block text-end mt-3">
      <a href="#">Todas Atualizaçõs</a>
    </small>
  </div>

  </div>
</main>
<!-- Fim do conteúdo -->


<!-- Modais -->

    

    
</body>
</html>