<div class="modal fade" id="frm_alterarcategoria<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title centro" id="exampleModalLabel">Alterar Categoria</h4>
            </div>
            <div class="modal-body">
                <form name="frm_alterarcategoria<?php echo $id; ?>" id="frm_alterarcategoria<?php echo $id; ?>" method="POST" action="./alterarcategoria/<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="descricao" class="control-label">Descrição:</label>
                        <input type="descricao" name="descricao" class="form-control" id="descricao" required="" value="<?php echo $descricao; ?>">
                        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $id; ?>">
                    </div>
                    <div class="form-group">
                        <label for="valor_comissao" class="control-label">Comissão de Venda:</label>
                        <input type="valor_comissao" name="valor_comissao" class="form-control" id="valor_comissao" value="<?php echo $valor_comissao; ?>">
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