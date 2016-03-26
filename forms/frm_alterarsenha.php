<div class="modal fade" id="frm_alterarsenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title centro" id="exampleModalLabel">Alterar sua senha</h4>
            </div>
            <div class="modal-body">
                <form name="frm_alterarsenha" id="frm_alterarsenha" method="POST" action="#">
                    <div class="form-group">
                        <label for="senha" class="control-label">Informe sua nova senha:</label>
                        <input type="password" name="senha" class="form-control" id="senha" required="">
                    </div>
                    <div class="form-group">
                        <label for="rpt_senha" class="control-label">Repita sua nova senha:</label>
                        <input type="password" name="rpt_senha" class="form-control" id="rpt_senha" required="">
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