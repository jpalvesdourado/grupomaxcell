<?php

include '../funcoes/geral.php';

$acao = isset($_GET["acao"]) ? $_GET["acao"] : "";

//echo "<script>alert('$acao');</script>";

if($acao == 'alterar'){
    
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $valor_comissao = $_POST['valor_comissao'];
    
    $alterar = new Categorias();
    
    $alterar->id = $id;
    $alterar->descricao = $descricao;
    $alterar->valor_comissao = $valor_comissao;
    
    if($alterar->alterar($id)){
        echo "<script>alert('Registro alterado com sucesso!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=../categorias'>";
    }else{
        echo "<script>alert('Falha ao alterar os dados!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=../categorias'>";
    }
}