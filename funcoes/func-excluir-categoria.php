<?php

include '../funcoes/geral.php';

$acao = isset($_GET["acao"]) ? $_GET["acao"] : "";

$cod = (int)isset($_GET["cod"]) ? $_GET["cod"] : "";

if($acao == 'excluir'){
    
    $excluir = new Categorias();
    
    if($excluir->excluir($cod)){
        echo "<script>alert('Registro excluido com sucesso!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=../../categorias'>";
    }else{
        echo "<script>alert('Falha ao excluido os dados!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=../../categorias'>";
    }
}