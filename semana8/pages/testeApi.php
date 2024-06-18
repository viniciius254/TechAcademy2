<?php
$dadosApi = file_get_contents("http://localhost/retest/testeApi");
$dadosApi = json_decode($dadosApi);

foreach($dadosApi as $dados) {
    echo "<p>{$dados -> id} - {$dados -> nome} <br> {$dados -> descricao}</p>";
};
?>