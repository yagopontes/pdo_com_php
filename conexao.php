<?php

include_once('conexao.php');

$executa = $conn->prepare(query: 'SELECT * FROM usuario_yago');

$executa->execute();

$resultados = $executa->fetchAll(modo: PDO::FETCH_OBJ);

foreach($resultados as $resultado) {

    echo $resultado->nome . '<br />';

}



?>