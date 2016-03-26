<script type="text/javascript">// <![CDATA[
    /* Máscaras ER */
    function mascara(o, f) {
            v_obj = o
            v_fun = f
            setTimeout("execmascara()", 1)
    }
    function execmascara() {
            v_obj.value = v_fun(v_obj.value)
    }
    function mtel(v) {
            v = v.replace(/\D/g, "");             //Remove tudo o que não é dígito
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v = v.replace(/(\d)(\d{4})$/, "$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
            return v;
    }
    function id(el) {
            return document.getElementById(el);
    }
    window.onload = function () {
            id('telefone').onkeypress = function () {
                    mascara(this, mtel);
            }
    }
// ]]>
</script>

<div class="modal fade" id="frm_alterardados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title centro" id="exampleModalLabel">Alterar dados do Usuário</h4>
            </div>
            <div class="modal-body">
                <form name="frm_alterardados" id="frm_alterardados" method="POST" action="#">
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome:</label>
                        <input type="text" name="nome" class="form-control" id="nome" required="">
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">E-mail:</label>
                        <input type="text" name="email" class="form-control" id="email" required="">
                    </div>
                    <div class="form-group">
                        <label for="telefone" class="control-label">Telefone:</label>
                        <input type="text" name="telefone" class="form-control" id="telefone" maxlength="15" required="">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-default">
                            <span class="glyphicon glyphicon-erase" aria-hidden="true"></span>
                            Limpar Campos
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
