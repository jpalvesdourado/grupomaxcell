<div class="modal fade" id="frm_excCategoria<?php echo $id; ?>" tabindex="-1" role="dialog">
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
                <a href="./categorias/excluir/<?php echo $id; ?>" class="btn btn-default">Confirmar</a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->