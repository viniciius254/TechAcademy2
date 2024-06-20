<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CloudGame</title>
  <base href="http://localhost/projetoComApi/">
  <link rel="stylesheet" href="pagesGame.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/fac54659f5.js" crossorigin="anonymous"></script>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-expand-sm" style="background-color: #6E98BF; -webkit-box-shadow: 0px 11px 20px 1px rgba(8,11,31,1);
        -moz-box-shadow: 0px 11px 20px 1px rgba(8,11,31,1);
        box-shadow: 0px 11px 20px 1px rgba(8,11,31,1);" data-bs-theme="dark">
      <div class="container-fluid">
        <nav class="navbar">
          <div class="container">
            <a class="navbar-brand " href="catalogo">
              <img src="imagens/Logo.png" alt="CloudGame" width="90x" height="auto">
            </a>
          </div>
        </nav>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
              <i class="fa-solid fa-user"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="suporte">Suporte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="planos">Planos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Iniciar Sessão
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Games</a></li>
                <li><a class="dropdown-item" href="login">login</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item"  href="registrar">registrar</a></li>
              </ul>
            </li>
          </ul>
          <form class="container-fluid d-flex justify-content-start justify-content-md-end px-0">
            <button class="btn btn-sm btn-outline btn-primary" type="button"><a style="text-decoration: none; color: white;" href="registrar">Cadastre-se</a></button>
            <button class="btn btn-outline me-2 mx-2 btn-info"  type="button"><a style="text-decoration: none; color: white;" href="login">Entrar</a></button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <main>
  <?php

  
?>
    
  <?php 

    if (isset($_GET["param"])){
      $param = $_GET["param"];
      $p = explode("/", $param);
    }

    $page = $p[0] ?? "catalogo";
    $jogos = $p[1] ?? NULL;

    if($page == "jogos") {
        $pagina = "jogo/{$jogos}.php";
    } else {
        $pagina = "pages/{$page}.php";
    }
    
    if (file_exists($pagina)) {
      include $pagina;
    } else {
      include "pages/erro.php";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST["email"] ?? NULL;
      $date = $_POST["date"] ?? NULL;
      $senha = $_POST["senha"] ?? NULL;
      $senhaConfirm = $_POST["senhaConfirm"] ?? NULL;
    function mensagem($msg){
      echo "<script>alert('{$msg}');history.back();</script>";
    };

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      mensagem("Escreva um email válido");
    }else if (empty($date)) {
      mensagem("Escreva uma idade válida");
    } else if($senha != $senhaConfirm) {
      mensagem("As senhas não coincidem");
    }

  }
   ?>
  </main>
  
  <footer class="">

    <div class="redes">

      <a href="instagram"><i class="fa-brands fa-instagram"></i></a>

      <a href="https://github.com/viniciius254"><i class="fa-brands fa-github"></i></a>

      <a href="email"><i class="fa-solid fa-envelope"></i></a>

      <a href="discord"><i class="fa-brands fa-discord"></i></a>
    </div>
   </footer>
  <!--     
  <?php

      $pagina = $pagina[0] ?? "home";
      if (file_exists($pagina)) {
        include $pagina;
      } else {
        include "pages/erro.php";
      };
  ?> -->

   
  <script>
    AOS.init();
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">     
  </script>
  <script> 
  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Mostrar mais";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Mostrar menos";
      moreText.style.display = "inline";
    }
  }</script>
  

<script>

const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
  
</script>
   
</body>

