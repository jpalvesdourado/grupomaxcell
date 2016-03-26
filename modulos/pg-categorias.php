<?php
// Verificador de Sessão
require '../verifica.php';

require '../classes/db.php';
require '../classes/categorias.php';

$pagina = "TogaWeb | Banners";
include '../template/cabecalho.php';

$acao = isset($_GET['acao']);

?>

<p class="titulo">Cadastro de Categorias</p>
<br>
<div class="pull-right" style="padding: 7px;">
    <a class="btn btn-default" href="#" data-toggle="modal" data-target="#frm_novacategoria">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        Nova categoria
    </a>
</div>
<div>
    <table class="table table-striped table-hover table-bordered table-responsive">
        <thead>
            <tr>
                <th class="" style='text-align: center;'>Cod.</th>
                <th class="">Descrição</th>
                <th class="" style='text-align: center;'>Valor da Comissão</th>
                <th class="" style='text-align: center;'>Operações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $categorias = new Categorias();

            $consulta = $categorias->listar_categorias();

            $quant_registros = count($consulta);

            if (($quant_registros > 0) && ($quant_registros <> 'vazio') ) {
                for ($i = 0; $i < $quant_registros; $i++) {
                    $id = $consulta[$i]['id'];
                    $descricao = $consulta[$i]['descricao'];
                    $valor_comissao = $consulta[$i]['valor_comissao'];
                    echo "<tr>";
                    echo "<td class='' style='text-align: center; vertical-align: middle;'>$id</td>";
                    echo "<td class='' style=' vertical-align: middle;'>$descricao</td>";
                    echo "<td class='' style='text-align: right; vertical-align: middle;'>$valor_comissao</td>";
                    echo "<td class='' style='text-align: center; vertical-align: middle;'>";
                    include '../forms/form_alterarcategoria.php';
                    echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#frm_alterarcategoria$id' data-whatever='@mdo'>Alterar</button>&nbsp;";
                    include '../forms/frm_excluircategoria.php';
                    echo "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#frm_excCategoria$id' data-whatever='@mdo'>Excluir</button></td></tr>";
                }
            } else {
                ?>
                <tr>
                    <td style="text-align: center; vertical-align: middle;" colspan="5">Nenhum registro encontrado!</td>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php

if($acao == 'salvar'){
    $descricao = $_POST['descricao'];
    $valor_comissao = $_POST['valor_comissao'];
    
    $salvar = new Categorias();
    
    $salvar->descricao = $descricao;
    $salvar->valor_comissao = $valor_comissao;
    
    if($salvar->salvar()){
        echo "<script>alert('Registro salvo com sucesso!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=./categorias'>";
    }else{
        echo "<script>alert('Falha ao salvar os dados!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=./categorias'>";
    }
}

include '../template/rodape.php';
?>