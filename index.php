<?php

require_once("config.php");

$sql = new Sql();

$consulta_usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($consulta_usuarios);

//echo $consulta_usuarios;

//var_dump($consulta_usuarios);

?>