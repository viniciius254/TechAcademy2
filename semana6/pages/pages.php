<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="../styles/pagesGame.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/fac54659f5.js" crossorigin="anonymous"></script>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #6E98BF; -webkit-box-shadow: 0px 11px 20px 1px rgba(8,11,31,1);
        -moz-box-shadow: 0px 11px 20px 1px rgba(8,11,31,1);
        box-shadow: 0px 11px 20px 1px rgba(8,11,31,1);" data-bs-theme="dark">
      <div class="container-fluid">
        <nav class="navbar">
          <div class="container">
            <a class="navbar-brand" href="catalogo.php">
              <img src="../imagens/Logo.png" alt="CloudGame" width="90" height="auto">
            </a>
          </div>
        </nav>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-user"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="suporte.php">Suporte</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Iniciar Sessão
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Opções</a></li>
                <li><a class="dropdown-item" href="login.php">Login</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="registrar.php">Resgistrar</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <main>
  
    <div class="tittleGame">
        <img src="../imagens/call of duty (1).jpg">
    </div>
    <div class="title">
      <h1 style="margin: 0px 0px 0px 8px;">Call of Duty: Modern Warfare 3</h1>
    </div>
    <div class="crazy">
      <button class="button-29" role="button"><a class="crazy" href="ninjapixel/index.html">JOGUE AGORA</a></button>
  </div>

    
    
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="../imagens/campain.jpg"></div>
        <div class="swiper-slide"><img src="../imagens/cod map.jpg"></div>
        <div class="swiper-slide"><img src="../imagens/cod MP.jpg"></div>
        
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
    
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

    </div>

    <div class="information">
      <h4><strong>controles:</strong> Joystick, teclado e mouse</h4>
      <h4><strong>Plataformas:</strong> PS5 & PS4, XBOX S & X, ONE e ONE X, PC</h4>
      <span id="dots">...</style></span><span id="more">
      <h4><strong>Online:</strong> 1 - 12 ou mais pessoas</h4>
      <h4><p><strong>Descrição:</strong> "Experimente a intensidade da guerra moderna com 'Call of Duty'. Este renomado jogo de tiro em primeira pessoa coloca você no centro de conflitos épicos e combates emocionantes em todo o mundo. Desde batalhas urbanas até operações secretas, 'Call of Duty' oferece uma experiência de jogo imersiva, repleta de ação e adrenalina.</p>

        <p>Escolha entre uma variedade de modos de jogo, incluindo campanhas cinematográficas, multijogador competitivo e emocionantes modos cooperativos. Personalize seu arsenal com uma ampla seleção de armas modernas e equipamentos táticos. Domine habilidades e estratégias para se tornar um verdadeiro soldado de elite em batalhas intensas e emocionantes.</p> 
        
        <p>Com gráficos impressionantes, uma jogabilidade fluida e uma comunidade global de jogadores, 'Call of Duty' redefine os padrões dos jogos de tiro em primeira pessoa. Prepare-se para entrar no campo de batalha e provar sua coragem em um dos jogos mais icônicos da indústria dos videogames."</p>
        </h4>
    </span>
    <button onclick="myFunction()" id="myBtn">Mostrar mais</button>
  </div>
    
   </main>
   <footer>

    <div class="redes">

      <a href="#"><i class="fa-brands fa-instagram"></i></a>

      <a href="#"><i class="fa-brands fa-github"></i></a>

      <a href="#"><i class="fa-solid fa-envelope"></i></a>

      <a href="#"><i class="fa-brands fa-discord"></i></a>
    </div>
   </footer>
 <script>
  const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay: true,

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
}
 </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

