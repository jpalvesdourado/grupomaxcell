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
                <th class="col-xs-1 col-md-1">Cod.</th>
                <th class="col-xs-2 col-md-4">Descrição</th>
                <th class="col-xs-1 col-md-2">Qtd.</th>
                <th class="col-xs-1 col-md-2">Preço</th>
                <th class="col-xs-1 col-md-3">Operações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center; vertical-align: middle;" colspan="5">Nenhum registro encontrado!</td>
            </tr>
        </tbody>
    </table>
</div>

<?php

include '../template/rodape.php';
?>