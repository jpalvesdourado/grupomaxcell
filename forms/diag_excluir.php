<div class="modal fade" id="diag_excluir<?php echo $id_banner; ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirmação</h4>
            </div>
            <div class="modal-body">
                <p>Deseja realmente excluir esse registro?</p>
            </div>
            <div class="modal-footer">
                <a href="<?php echo $acao_excluir;?>" class="btn btn-default">Confirmar</a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->