<?php
/* Define o limitador de cache para 'private' */
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* Define o limite de tempo do cache em 30 minutos */
session_cache_expire(1);
$cache_expire = session_cache_expire();

session_start();

# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');

require './classes/db.php';
require './classes/usuarios.php';

$usuario = new Usuarios();

$email = $_POST['email'];
$senha = $_POST['senha'];

if (!$usuario->logar($email, $senha)): {
        echo "<meta http-equiv='refresh' content='0; url=./erro-login'>";
    }
else: {
        $_SESSION["id"] = $usuario->id;
        $_SESSION["nome"] = $usuario->nome;
        $_SESSION["email"] = $usuario->email;
        $_SESSION["tipo_usuario"] = $usuario->tipo_usuario;
        $_SESSION["id_usuario"] = $usuario->id_usuario;
        $_SESSION["sessiontime"] = time();
        header("Location: ./index.php");

        exit();
    }
endif;
?>