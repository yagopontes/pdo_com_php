<?php

include_once('conexao.php');

$id = $_GET['id'];

$querySQL = "UPDATE usuario_yago SET status = 0 WHERE cod_usuario LIKE $id";

$exec = $conn->prepare(query: $querySQL);

$exec->execute(params: [':code']);

header(header: 'Location http://192.168.1.35/TRILHAS4/yago/pdo_com_php/usuarios.php');

?>