<div class="d-flex justify-content-center" style="background-color: rgb(39, 12, 100);">
    <img class="d-flex justify-content-center imgTLW" src="./imagens/capaTLW.jpeg" data-aos="fade-right">
</div>

    <div class="des">
        <h1>ADICIONADOS RECENTEMENTES:</h1>
    </div>

   
    <div class="container">
      <div class="row d-flex justify-content-center"> 
      <?php
      $dadosApi = file_get_contents("http://localhost/projetoComApi/API/jogosAPI.php");
      $dadosApi = json_decode($dadosApi);

      foreach($dadosApi as $dados){
        ?>

              <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="col-md-4" data-aos="fade-up" style="width: 16rem;">
              <a href="gameVanderleia/<?= $dados -> id ?>"><img src="<?php echo $dados -> img ?>" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><?php echo $dados -> nome ?></h5>
                <p class="card-text"></p>
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
   
