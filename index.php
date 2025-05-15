<?php

include_once('conexao.php');

$executa = $conn->prepare('SELECT * FROM usuario_yago');

$executa->execute();

$resultado = $executa->fetchAll(PDO::FETCH_OBJ);


echo '<pre>';

var_dump($resultado);

echo '</pre>';


?>

