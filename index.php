<?php

require_once("config.php");

/* Exemplo PDO - DAO
$sql = new Sql();
$consulta_usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($consulta_usuarios);*/

/* Exemplo PDO - DAO - SELECT
$id = new Usuario();
$id->loadById(6);
echo $id;*/

/* Exemplo PDO - DAO - LISTA 1
$lista = Usuario::getList();
echo json_encode($lista);*/

/* Exemplo PDO - DAO - LISTA 2
$busca = Usuario::search("a");
echo json_encode($busca);*/

// Exemplo PDO - DAO - LISTA 3 - Passando o login
$usuario = new Usuario();
$usuario->login("Predo","12345");
echo $usuario;

?>