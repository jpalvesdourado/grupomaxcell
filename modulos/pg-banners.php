<?php
$pagina = "TogaWeb | Banners";
include '../template/cabecalho.php';
?>

<div class="container-fluid" style="background-color: #ffffff">
    <p class="titulo">Lançamento de banners na página principal</p>
    <br>
    <div class="pull-right" style="padding: 7px;">
        <a class="btn btn-default" href="#" data-toggle="modal" data-target="#frm_novobanner">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Novo Banner
        </a>
    </div>
    <div>
        <table class="table table-striped table-hover table-bordered table-responsive">
            <thead>
                <tr>
                    <th class="col-md-1">Cod.</th>
                    <th class="col-md-2">Imagem</th>
                    <th class="col-md-3">Titulo</th>
                    <th class="col-md-3">Descrição</th>
                    <th class="col-md-3">Operações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center; vertical-align: middle;">0001</td>
                    <td style="text-align: center; vertical-align: middle;"><img class="img_banner" src="./imagens/1.png"/></td>
                    <td style="text-align: left; vertical-align: middle;">Banner Inicial</td>
                    <td style="text-align: justify; vertical-align: middle;">
                        Mono mono, mono mono mono mono mono mono mono mono mono mono mono mono, mono mono mono mono mono mono mono mono mono.
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <?php
                            $alt_titulo = "Banner Inicial";    
                            $alt_imagem = "1.png";
                            $id_banner = "0001";
                            $acao_excluir = "#";
                            $alt_descricao = "Mono mono, mono mono mono mono mono mono mono mono mono mono mono mono, mono mono mono mono mono mono mono mono mono.";
                        ?>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#frm_alterarbanner<?php echo $id_banner; ?>">
                            <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            Alterar
                        </button>
                        <?php
                            include '../forms/frm_alterarbanner.php';
                        ?>
                        &nbsp;
                        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#diag_excluir<?php echo $id_banner; ?>">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            Excluir
                        </button>
                        <?php
                            include '../forms/diag_excluir.php';
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; vertical-align: middle;">0002</td>
                    <td style="text-align: center; vertical-align: middle;"><img class="img_banner" src="./imagens/2.png"/></td>
                    <td style="text-align: left; vertical-align: middle;">Banner Inicial 2</td>
                    <td style="text-align: justify; vertical-align: middle;">
                        Mono mono, mono monxxxo mono mono mono mono mono mono mono mono mono mono, mono mono mono mono mono mono mono mono mono.
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <?php
                            $alt_titulo = "Banner Inicial";    
                            $alt_imagem = "2.png";
                            $id_banner = "0002";
                            $acao_excluir = "#";
                            $alt_descricao = "Mono mono, mono monxxxo mono mono mono mono mono mono mono mono mono mono, mono mono mono mono mono mono mono mono mono.";
                        ?>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#frm_alterarbanner<?php echo $id_banner; ?>">
                            <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            Alterar
                        </button>
                        <?php
                            include '../forms/frm_alterarbanner.php';
                        ?>
                        &nbsp;
                        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#diag_excluir<?php echo $id_banner; ?>">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            Excluir
                        </button>
                        <?php
                            include '../forms/diag_excluir.php';
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
include '../template/rodape.php';
?>