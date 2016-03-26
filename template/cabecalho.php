<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--[if IE]><link rel="shortcut icon" href="./img/favicon.ico" sizes="16x16"><![endif]-->
        <link rel="icon" href="./imagens/favicon.ico" sizes="16x16">

        <title><?php echo $pagina; ?></title>
        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./css/stilos.css" rel="stylesheet" type="text/css" />
        <style>
            body {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                background-color: #ffffff;
                /**background-image: url(./imagens/Letter-W-icon.png);
                background-repeat: no-repeat;
                background-position: center 200px;**/
            }
        </style>
    </head>
    <body class='pag-normal'>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-principal">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand inline" href="./">
                        <img alt="Brand" class="img-brand" src="./imagens/Letter-W-icon.png">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="menu-principal">
                    <ul class="nav navbar-nav">
                        <li class="<?php if($pagina == "TogaWeb | Administração do Website"){ echo "active";} ?>">
                            <a href="./inicio">Inicio</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./categorias">Categorias</a></li>
                                <li><a href="./clientes">Clientes</a></li>
                                <li><a href="#">Lojas#</a></li>
                                <li><a href="./produtos">Produtos</a></li>
                                <li><a href="#">Serviços#</a></li>
                                <li><a href="#">Usuários#</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Financeiro <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Administração Financeira</li>
                                <li><a href="#">Contas a Pagar#</a></li>
                                <li><a href="#">Contas a Receber#</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Caixa</li>
                                <li><a href="#">Sangria de valor#</a></li>
                                <li><a href="#">Suprimento de valor#</a></li>
                                <li><a href="#">Abertura de Caixa#</a></li>
                                <li><a href="#">Fechamento de Caixa#</a></li>
                                <li><a href="#">Caixa atual#</a></li>
                                <li><a href="#">Caixa anteriores#</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lançamentos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Operações de Venda</li>
                                <li><a href="#">Vendas de Produtos e Serviços#</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Operações de Estoque</li>
                                <li><a href="#">Entrada de Estoque#</a></li>
                                <li><a href="#">Retirada de Estoque#</a></li>
                                <li><a href="#">Transferência de Estoque#</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Operações de Venda</li>
                                <li><a href="#">Relatório de vendas por periodo#</a></li>
                                <li><a href="#">Relatório de vendas por produto/serviço#</a></li>
                                <li><a href="#">Relatório de vendas por loja#</a></li>
                                <li><a href="#">Relatório de vendas por usuário#</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Operações de Estoque</li>
                                <li><a href="#">Relatório Geral de Estoque#</a></li>
                                <li><a href="#">Relatório de itens recebidos#</a></li>
                                <li><a href="#">Relatório de itens transferidos#</a></li>
                                <li><a href="#">Relatório de baixa/entrada de estoque#</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Operações de Financeiro</li>
                                <li><a href="#">Relatório geral de movimentação de caixa#</a></li>
                                <li><a href="#">Relatório geral de contas a pagar#</a></li>
                                <li><a href="#">Relatório geral de contas a receber#</a></li>
                                <li><a href="#">Relatório geral de caixas anteriores#</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">TogaWeb 3.0 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION['nome']; ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#" onclick="$('#frm_alterarsenha').modal('show');" class="centro">Alterar senha</a></li>
                                <li><a href="#" onclick="$('#frm_alterardados').modal('show');" class="centro">Alterar dados</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="./sair.php" class="centro">Sair do Sistema</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">