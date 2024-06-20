<?php 
  $id = $p[1]?? NULL;
  $dadosApi = file_get_contents("http://localhost/projetoComApi/API/jogosAPI.php");

  $dadosApi = json_decode($dadosApi);

  $dados = $dadosApi -> $id;
?>


<div class="d-none d-md-flex flex-sm-column marginBor">
<div class="manage">
    <div class="imgMain">
      <img src="<?php echo $dados -> img ?>">
    </div>

   <div>
      <div class="crazy">
        <button class="button-29" role="button"><a class="crazy" href="<?php echo $dados -> link ?>">JOGUE AGORA</a></button>
   </div>

    <div class="card" style="width: 20rem; background-color:  #44496B;">
        <img src="<?php echo $dados -> criador?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-light"><?php echo $dados -> nomeCria ?></h5>
        <p class="card-text text-light"><?php echo $dados -> desCria ?></p>
      </div>
    </div>

  </div> 
</div>

    <div class="title">
      <h1 style="margin: 0px 0px 0px 8px;"> <?php echo $dados -> nome ?></h1>
    </div>
    <h1 class="space">Informações:</h1>
    <div class="information">
      <h4><strong>controles:</strong> teclado e mouse</h4>
      <h4><strong>Plataformas:</strong> PC</h4>
    
      <h4><strong>Online:</strong> SinglePlayer</h4>
      <?php echo $dados-> descricao ?>
    </span>
   
  </div>
</div>


    
<div class="d-sm-flex d-md-none d-lg-none justify-content-center">

    <div class="imgMain2">
      <img src="./conteudoDosOutros/imgGameVanderleia.jpeg">
    </div>

   
      <div class="crazy">
        <button class="button-29" role="button"><a class="crazy" href="#">JOGUE AGORA</a></button>
   </div>

   <div class="title">
    <h1 style="margin: 0px 0px 0px 8px;"><?php echo $dados -> nome ?></h1>
  </div>
  <h1 class="space">Informações:</h1>
  <div class="information">
    <h4><strong>controles:</strong> teclado e mouse</h4>
    <h4><strong>Plataformas:</strong> PC</h4>
    <span id="dots">...</style></span><span id="more">
    <h4><strong>Online:</strong> SinglePlayer</h4>
    <?php echo $dados-> descricao ?>
    </span>
    <button onclick="myFunction()" id="myBtn">Mostrar mais</button>
  </div>
</div>
</div>

   <div class="d-flex justify-content-center d-sm-flex d-md-none d-lg-none">
    <div class="card d-sm-flex d-md-none d-lg-none justify-content-center" style="width: 100%; background-color:  #44496B;">
        <img src="<?php echo $dados -> criador?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-light"><?php echo $dados -> nomeCria ?></h5>
        <p class="card-text text-light">Criadora do jogo: Bug from the hell 1.0</p>
      </div>
    </div>

  </div> 


   