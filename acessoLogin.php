<?php
include("conexao.php");
include("banco-usuario.php");
include("logica-usuario.php");

$usuario = buscaUsuario($conn, $_POST["email"], $_POST["senha"]);

//var_dump($usuario);

if($usuario == null){
	$_SESSION["danger"] = "Usuário ou senha invalida!";
	header("Location: login.php");
} else {
	$_SESSION["success"] = "Usuário logado com sucesso!";
	logaUsuario($usuario["email"]);
	header("Location: index.php");
}
die();