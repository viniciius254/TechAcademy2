<?php 

    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");
    
    $jogo[1] = array(
        "id" => 1,
        "nome" => "Bug from hell 1.0",
        "ano" => 2024,
        "nomeCria" => "Vanderleia",
        "criador" => "./conteudoDosOutros/vanderleia.jpeg",
        "desCria" => "Criadora do jogo: Bug from the hell 1.0",
        "img" => "./conteudoDosOutros/imgGameVanderleia.jpeg",
        "controles" => "controles: teclado e mouse",
        "plataformas" => "Plataformas: PC",
        "online" => "Online: SinglePlayer",
        "descricao" => '<h4><strong>Descrição:</strong> "BUG FROM HELL 1.0 
        Está versão do jogo foi pensada para a diversão dos usuários;<br> o jogo se resume a um
          dinossauro(personagem principal) que está buscando sair de uma<br> floresta repleta de
            obstáculos, porém quando ele chega ao fim dela é surpreendido por um<br> bug que o levará
            para outra dimensão misteriosa, que será revelada na próxima versão do<br> jogo."
        </p></h4>',
        "link" => "./conteudoDosOutros/jogoVanderleia/index.php"
            
    );
    $jogo[2] = array(
        "id" => 2,
        "nome" => "Walka",
        "ano" => 2024,
        "nomeCria" => "Elaine",
        "img" => "http://localhost/projetoComApi/conteudoDosOutros/walkaimg.jpeg",
        "criador" => "./conteudoDosOutros/elaine.jpeg",
        "desCria" => "Criadora do jogo: Walka",
        "img" => "./conteudoDosOutros/walkaimg.jpeg",
        "controles" => "controles: teclado e mouse",
        "plataformas" => "Plataformas: PC",
        "online" => "Online: SinglePlayer",
        "descricao" => '<h4><strong>Descrição:</strong>"BUG FROM HELL 1.0 Está versão do jogo foi pensada para a diversão dos usuários;
                        o jogo se resume a um dinossauro(personagem principal) que está buscando sair de uma
                        floresta repleta de obstáculos, porém quando ele chega ao fim dela é surpreendido por um
                        bug que o levará para outra dimensão misteriosa, que será revelada na próxima versão do
                        jogo.',
        "link" => "./conteudoDosOutros/jogoVanderleia/index.php"
    );
    $jogo[3] = array(
        "id" => 3,
        "nome" => "HelpSauro",
        "ano" => 2024,
        "nomeCria" => "Erika",
        "img" => "http://localhost/projetoComApi/conteudoDosOutros/dino.jpeg",
        "criador" => "./conteudoDosOutros/erika.jpeg",
        "desCria" => "Criadora do jogo: HelpSauro",
        "img" => "./conteudoDosOutros/dino.jpeg",
        "controles" => "controles: teclado e mouse",
        "plataformas" => "Plataformas: PC",
        "online" => "Online: SinglePlayer",
        "descricao" => '<h4><strong>Descrição:</strong>"BUG FROM HELL 1.0 Está versão do jogo foi pensada para a diversão dos usuários;
                        o jogo se resume a um dinossauro(personagem principal) que está buscando sair de uma
                        floresta repleta de obstáculos, porém quando ele chega ao fim dela é surpreendido por um
                        bug que o levará para outra dimensão misteriosa, que será revelada na próxima versão do
                        jogo.',
        "link" => "./conteudoDosOutros/jogoVanderleia/index.php"
    );
    $jogo[4] = array(
        "id" => 4,
        "nome" => "Rocket On The Rocks",
        "ano" => 2024,
        "nomeCria" => "Leonardo",
        "img" => "http://localhost/projetoComApi/conteudoDosOutros/logojogo.jpg",
        "criador" => "./conteudoDosOutros/leonardo.png",
        "desCria" => "Criador do jogo: Rocket On The Rocks",
        "img" => "http://localhost/projetoComApi/conteudoDosOutros/logojogo.jpg",
        "controles" => "controles: teclado e mouse",
        "plataformas" => "Plataformas: PC",
        "online" => "Online: SinglePlayer",
        "descricao" => '<h4><strong>Descrição:</strong> " O jogador é recem contratado para fazer parte da companhia espacial. A companhia esta sempre a busca de jovens aventureiros que estao a busca de novos desafios e jornadas agitadas. Em sua primeira aventura, voce é levado a investigar uma area sombria no meio de um cinturão de asteroides. Segundo os relatos, muitas naves foram enviadas, mas nao tiveram retornos, e cabe a voce investigar. Apos coletar algumas estrelas, o jogador consegue avancar alem das rochas. Em seu radio a ultima captura registrada é...
        </p></h4>',
        "link" => "./conteudoDosOutros/jogoVanderleia/index.php"
    );
   
    echo json_encode($jogo);

    