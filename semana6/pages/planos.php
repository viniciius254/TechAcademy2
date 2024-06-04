<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CloudGame</title>
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
              <a class="nav-link active" aria-current="page" href="catalogo.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="suporte.php">Suporte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="planos.php">Planos</a>
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
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Fechar</a>
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
    <div>
        <h1>PLANOS MENSAIS</h1>
    </div>
    <div class="plans__center">
        
    <div class="plans">
        <div class="cost">
            <h1>CASUAL</h1>
            <h1>R$29,99</h1>
        </div>
    </div>
    <div class="plans2">
        <div class="cost">
            <h1>PRO</h1>
            <h1>R$39,99</h1>
        </div>
    </div>
    <div class="plans3">
        <div class="cost">
            <h1>HARDCORE</h1>
            <h1>R$59,99</h1>
        </div>
    </div>
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
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

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
 </script>      
</body>

