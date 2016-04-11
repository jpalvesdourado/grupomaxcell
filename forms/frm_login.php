<div class="container">
    <div class="login-box">

        <div class="login-box-body">
            <div class="login-logo">
                <div class="row nomargim">
                    <div class="pull-left">
                        <p><b>www.grupomaxcel.com.br</b></p>
                    </div>
                    <div class="pull-right">
                        <a href="http://www.playtecnologia.com.br/togaweb"><img src="imagens/Letter-W-icon.png" width="38" height="38"></a>
                        <a href="http://www.playtecnologia.com.br/togaweb"><b>Toga</b>WEB</a>
                    </div>
                </div>
                <hr>
            </div><!-- /.login-logo -->
            <div class="container-fluid">
                <div class="col-md-8">
                    <img src="./imagens/vivo.png">
                </div>
                <div class="col-md-4 thumbnail" style="padding: 15px;">
                    <p class="login-box-msg">Acesso ao WebMaxcel</p>
                    <form name="login" method="POST" action="logar.php">
                        <div class="form-group has-feedback">
                            <input class="form-control" name="email" required="" placeholder="E-mail"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="senha" required="" placeholder="Senha"/>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        <div class="row">
                            <div class="col-xs-4 col-xs-offset-8">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                            </div><!-- /.col -->
                        </div>
                    </form>

                    <a href="#">Perdi minha senha</a><br>
                    <?php
                    $messagem = isset($_GET["messagem"]) ? $_GET["messagem"] : "";

                    if ($messagem != "") {
                        echo "<div class = 'alert alert-danger alert-dismissible fade in' role = 'alert'>";
                        echo "<button type = 'button' class = 'close' data-dismiss = 'alert' aria-label = 'Close'><span aria-hidden = 'true'>×</span></button>";
                        echo "<h4 id = 'oh-snap!-you-got-an-error!'>Aviso!<a class = 'anchorjs-link' href = '#oh-snap!-you-got-an-error!'><span class = 'anchorjs-icon'></span></a></h4>";
                        echo "<p>Usuário ou senha incorreta.</p>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div><!-- /.login-box-body -->


    </div><!-- /.login-box -->
</div>


