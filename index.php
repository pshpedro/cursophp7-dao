<?php

require_once("config.php");

/* Exemplo PDO - DAO
$sql = new Sql();
$consulta_usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($consulta_usuarios);*/

// Exemplo PDO - DAO - SELECT
$id = new Usuario();
$id->loadById(6);
echo $id;

?>