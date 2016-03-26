<?php
// Inicia sessões 
$temposessao = 7200; //em segundos

session_start(); 

if ($_SESSION["sessiontime"]) { 
	if ($_SESSION["sessiontime"] < (time() - $temposessao)) { 
		session_unset();
                header("Location: ./erro-login"); 
                exit;
		} 
} else { 
	session_unset();

} 

// Verifica se existe os dados da sessão de login 
if(!isset($_SESSION["id"]) || !isset($_SESSION["nome"])) 
{ 
// Usuário não logado! Redireciona para a página incial 
header("Location: ./login"); 
exit; 
}

?>
