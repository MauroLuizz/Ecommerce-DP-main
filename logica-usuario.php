<?php

session_start();

function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
	if(!usuarioEstaLogado()){
		$_SESSION["danger"] = "Você não tem acesso a essa funcionalidade";
		header("Location: login.php");
		die();
	}
}

function usuarioLogado(){
	return $_SESSION["usuario_logado"];
}

function logaUsuario($email){
	$_SESSION["usuario_logado"] = $email; //adm@gmail.com
}

function logout(){
	session_destroy();
	session_start();
}