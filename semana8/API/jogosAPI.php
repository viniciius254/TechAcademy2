<?php 

    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");
    
    $jogo[1] = array(
        "id" => 1,
        "nome" => "Bug from hell 1.0",
        "ano" => 2024,
        "descricao" => "controles: teclado e mouse
                        Plataformas: PC
                        Online: SinglePlayer
                        Descrição: BUG FROM HELL 1.0 Está versão do jogo foi pensada para a diversão dos usuários;
                        o jogo se resume a um dinossauro(personagem principal) que está buscando sair de uma
                        floresta repleta de obstáculos, porém quando ele chega ao fim dela é surpreendido por um
                        bug que o levará para outra dimensão misteriosa, que será revelada na próxima versão do
                        jogo."
    );
    $jogo[2] = array(
        "id" => 2,
        "nome" => "HelpSauro",
        "ano" => 2024,
        "descricao" => "Ainda não tem"
    );
    echo json_encode($jogo);
    ?>