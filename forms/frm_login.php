<div class="container">
    <div class="login-box">

        <div class="login-box-body col-md-4 col-md-offset-4">
            <div class="login-logo">
                <div class="pull-left">
                    <p>www.grupomaxcel.com.br</p>
                </div>
                <div class="pull-right">
                    <a href="http://www.playtecnologia.com.br/togaweb"><img src="imagens/Letter-W-icon.png" width="72" height="72"></a>
                    <a href="http://www.playtecnologia.com.br/togaweb"><b>Toga</b>WEB</a>
                </div>
            </div><!-- /.login-logo -->
            <p class="login-box-msg">Insira seus dados para iniciar a sessão</p>
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

            <p style="text-align: center; margin: 12px;"><a href="http://www.playtecnologia.com.br">JP Desenvolvimentos</a></p>
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
        </div><!-- /.login-box-body -->


    </div><!-- /.login-box -->
</div>


