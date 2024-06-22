<div class="d-flex justify-content-center" style="background-color: rgb(39, 12, 100);">
   <a href="Cenario" ><img class="d-flex justify-content-center imgTLW" src="./imagens/capaTLW.jpeg" data-aos="fade-right"></a>
</div>

    <div class="des">
        <h1>ADICIONADOS RECENTEMENTES:</h1>
    </div>

   
    <div class="container">
      <div class="row"> 
      <?php
      $dadosApi = file_get_contents("http://localhost/projetoComApi/API/jogosAPI.php");
      $dadosApi = json_decode($dadosApi);

      foreach($dadosApi as $dados){
        ?>

              <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
                <div class="card bg-dark col-md-4" data-aos="fade-up" style="width: 16rem;">
              <a href="gameVanderleia/<?= $dados -> id ?>"><img src="<?php echo $dados -> img ?>" class="card-img-top" alt="..." style="height: 254px;" ></a>
              <div class="card-body">
                <h5 class="card-title text-light"><?php echo $dados -> nome ?></h5>
                <p class="card-text"></p>
                <a href="gameVanderleia/<?= $dados -> id ?>" class="btn-primary">INFORMAÇÕES DO JOGO</a>
              </div>
              <ul class="list-group list-group-flush">
              </ul>
            </div>
      </div>
    
        <?php
      }
      ?>
      </div>
    </div>
    </div>
   
