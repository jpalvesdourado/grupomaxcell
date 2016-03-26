<?php
// Verificador de Sessão
require '../verifica.php';

require '../classes/db.php';
require '../classes/clientes.php';

$pagina = "TogaWeb | Clientes";
include '../template/cabecalho.php';

$acao = isset($_GET['acao']);

?>

<p class="titulo">Cadastro de Clientes</p>
<br>
<div class="pull-right" style="padding: 7px;">
    <a class="btn btn-default" href="#" data-toggle="modal" data-target="#frm_novocliente">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        Novo Cliente
    </a>
</div>
<div>
    <table class="table table-striped table-hover table-bordered table-responsive">
        <thead>
            <tr>
                <th class="" style='text-align: center;'>Cod.</th>
                <th class="">Cpf</th>
                <th class="" style='text-align: center;'>Nome do Cliente</th>
                <th class="" style='text-align: center;'>Operações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $clientes = new Clientes();

            $consulta = $clientes->listar_clientes();

            $quant_registros = count($consulta);
            
            //echo "<script>alert('$consulta');</script>";

            if (($quant_registros > 0) && ($consulta <> 'vazio') ) {
                for ($i = 0; $i < $quant_registros; $i++) {
                    $id = $consulta[$i]['id'];
                    $cpf = $consulta[$i]['cpf'];
                    $nome = $consulta[$i]['nome'];
                    $rg = $consulta[$i]['rg'];
                    $org_exp = $consulta[$i]['org_exp'];
                    $uf_exp = $consulta[$i]['uf_exp'];
                    $email = $consulta[$i]['email'];
                    $data_nascimento = $consulta[$i]['data_nascimento'];
                    $status = $consulta[$i]['status'];
                    $endereco = $consulta[$i]['endereco'];
                    $num = $consulta[$i]['num'];
                    $complemento = $consulta[$i]['complemento'];
                    $bairro = $consulta[$i]['bairro'];
                    $cidade = $consulta[$i]['cidade'];
                    $uf = $consulta[$i]['uf'];
                    $data_cadastro = $consulta[$i]['data_cadastro'];
                    
                    echo "<tr>";
                    echo "<td class='' style='text-align: center; vertical-align: middle;'>$id</td>";
                    echo "<td class='' style='text-align: center; vertical-align: middle;'>$cpf</td>";
                    echo "<td class='' style='text-align: left; vertical-align: middle;'>$nome</td>";
                    echo "<td class='' style='text-align: center; vertical-align: middle;'>";
                    include '../forms/form_alterarcliente.php';
                    echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#frm_alterarcliente$id' data-whatever='@mdo'>Alterar</button>&nbsp;";
                    include '../forms/frm_excluirclientes.php';
                    echo "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#frm_excluirclientes$id' data-whatever='@mdo'>Excluir</button></td></tr>";
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
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $org_exp = $_POST['org_exp'];
    $uf_exp = $_POST['uf_exp'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];
    $data_cadastro = date("Y-m-d");
    $status = $_POST['status'];
    $endereco = $_POST['endereco'];
    $num = $_POST['num'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    
    $salvar = new Clientes();
    
    $salvar->nome = $nome;
    $salvar->cpf = $cpf;
    $salvar->rg = $rg;
    $salvar->org_exp = $org_exp;
    $salvar->uf_exp = $uf_exp;
    $salvar->email = $email;
    $salvar->data_nascimento = $data_nascimento;
    $salvar->data_cadastro = $data_cadastro;
    $salvar->status = $status;
    $salvar->endereco = $endereco;
    $salvar->num = $num;
    $salvar->complemento = $complemento;
    $salvar->bairro = $bairro;
    $salvar->cidade = $cidade;
    $salvar->uf = $uf;
    
    if($salvar->salvar()){
        echo "<script>alert('Registro salvo com sucesso!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=./clientes'>";
    }else{
        echo "<script>alert('Falha ao salvar os dados!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=./clientes'>";
    }
}

include '../template/rodape.php';
?>