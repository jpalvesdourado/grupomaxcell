<?php
// Verificador de Sessão
require '../verifica.php';   

require '../classes/db.php';
require '../classes/categorias.php';
require '../classes/produtos.php';

$pagina = "TogaWeb | Banners";
include '../template/cabecalho.php';
?>

<p class="titulo">Cadastro de Produtos</p>
<br>
<div class="pull-right" style="padding: 7px;">
    <a class="btn btn-default" href="#" data-toggle="modal" data-target="#frm_novoproduto">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        Novo produto
    </a>
</div>
<div>
    <table class="table table-striped table-hover table-bordered table-responsive">
        <thead>
            <tr>
                <th>Cod.</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Qtd.</th>
                <th>Preço</th>
                <th>Operações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center; vertical-align: middle;" colspan="6">Nenhum registro encontrado!</td>
            </tr>
        </tbody>
    </table>
</div>

<?php

include '../template/rodape.php';
?>