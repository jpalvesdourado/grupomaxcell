<?php
date_default_timezone_set('America/Sao_Paulo');


// leitura das datas
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$semana = date('w');


// configuração mes

switch ($mes) {

    case 1: $mes = "janeiro";
        break;
    case 2: $mes = "fevereiro";
        break;
    case 3: $mes = "março";
        break;
    case 4: $mes = "abril";
        break;
    case 5: $mes = "maio";
        break;
    case 6: $mes = "junho";
        break;
    case 7: $mes = "julho";
        break;
    case 8: $mes = "agosto";
        break;
    case 9: $mes = "setembro";
        break;
    case 10: $mes = "outubro";
        break;
    case 11: $mes = "novembro";
        break;
    case 12: $mes = "dezembro";
        break;
}


// configuração semana

switch ($semana) {

    case 0: $semana = "Domingo";
        break;
    case 1: $semana = "Segunda-feira";
        break;
    case 2: $semana = "Terça-feira";
        break;
    case 3: $semana = "Quarta-feira";
        break;
    case 4: $semana = "Quinta-feira";
        break;
    case 5: $semana = "Sexta-feira";
        break;
    case 6: $semana = "Sábado";
        break;
}
$hr = date(" H ");
if ($hr >= 12 && $hr < 18) {
    $resp = "Boa tarde";
} else if ($hr >= 0 && $hr < 12) {
    $resp = "Bom dia";
} else {
    $resp = "Boa noite";
}
?>
</div>
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 centro" style="padding-top: 15px;">
                <?php
                echo $resp . ", <b>João Paulo Alves Dourado</b>.";
                ?>
            </div>
            <div class="col-md-6 centro" style="padding-top: 15px;">
                <?php
                echo "$semana $dia de $mes de $ano.";
                ?>
            </div>
        </div>
    </div>
</nav>

<?php
//Formulários
include '../forms/frm_alterarsenha.php';
include '../forms/frm_alterardados.php';
include '../forms/form_novobanner.php';
include '../forms/form_novacategoria.php';
include '../forms/form_novoclientes.php';

//Relatórios
include '../relatorios/rel_paginasvisitadas.php';
include '../relatorios/rel_navegadormaisusado.php';
include '../relatorios/rel_acessospordia.php';
include '../relatorios/rel_ultimosacessos.php';
?>

<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>