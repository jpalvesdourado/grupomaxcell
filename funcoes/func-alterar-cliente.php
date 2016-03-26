<?php

include '../funcoes/geral.php';

$acao = isset($_GET["acao"]) ? $_GET["acao"] : "";

//echo "<script>alert('$acao');</script>";

if ($acao == 'alterar') {

    $id = $_POST['id'];
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $org_exp = $_POST['org_exp'];
    $uf_exp = $_POST['uf_exp'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];
    $status = $_POST['status'];
    $endereco = $_POST['endereco'];
    $num = $_POST['num'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $data_cadastro = $_POST['data_cadastro'];

    $alterar = new Clientes();

    $alterar->nome = $nome;
    $alterar->cpf = $cpf;
    $alterar->rg = $rg;
    $alterar->org_exp = $org_exp;
    $alterar->uf_exp = $uf_exp;
    $alterar->email = $email;
    $alterar->data_nascimento = $data_nascimento;
    $alterar->data_cadastro = $data_cadastro;
    $alterar->status = $status;
    $alterar->endereco = $endereco;
    $alterar->num = $num;
    $alterar->complemento = $complemento;
    $alterar->bairro = $bairro;
    $alterar->cidade = $cidade;
    $alterar->uf = $uf;

    if ($alterar->alterar($id)) {
        echo "<script>alert('Registro alterado com sucesso!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=../clientes'>";
    } else {
        echo "<script>alert('Falha ao alterar os dados!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=../clientes'>";
    }
}