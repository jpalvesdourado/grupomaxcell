<?php
// Verificador de Sessão
require '../verifica.php';

$pagina = "TogaWeb | Administração do Website";
include '../template/cabecalho.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-2">
            <a class="btn btn-default icone-principal" href="./produtos">
                <img src="./imagens/palm.png"/>
                <p>Produtos</p>
            </a>
            <p class="espaco">&nbsp;</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-2">
            <a class="btn btn-default icone-principal">
                <img src="./imagens/utilities.png"/>
                <p>Serviços</p>
            </a>
            <p class="espaco">&nbsp;</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-2">
            <a class="btn btn-default icone-principal">
                <img src="./imagens/agt_family.png"/>
                <p>Clientes</p>
            </a>
            <p class="espaco">&nbsp;</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-2">
            <a class="btn btn-default icone-principal">
                <img src="./imagens/kspread_ksp.png"/>
                <p>Vendas</p>
            </a>
            <p class="espaco">&nbsp;</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-2">
            <a class="btn btn-default icone-principal">
                <img src="./imagens/money.png"/>
                <p>Caixa</p>
            </a>
            <p class="espaco">&nbsp;</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-2">
            <a class="btn btn-default icone-principal">
                <img src="./imagens/printer.png"/>
                <p>Relatórios</p>
            </a>
            <p class="espaco">&nbsp;</p>
        </div>
    </div>
</div>

<?php
include '../template/rodape.php';
