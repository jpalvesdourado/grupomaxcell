<div class="modal fade" id="frm_novoproduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title centro" id="exampleModalLabel">Novo Produto/Serviço</h4>
            </div>
            <div class="modal-body">
                <form name="frm_novobanner" id="frm_novobanner" method="POST" action="#">
                    <div class="form-group">
                        <label for="descricao" class="control-label">Descrição:</label>
                        <input type="text" name="descricao" class="form-control" id="descricao" required="">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="tipo" class="control-label">Tipo:</label>
                            <select name="tipo" class="form-control" id="tipo" required="">
                                <option value="1">PRODUTO</option>
                                <option value="2">SERVIÇO</option>
                            </select> 
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_categoria" class="control-label">Categoria:</label>
                            <select name="id_categoria" class="form-control" id="id_categoria" required="">
                                <option value="1">PRODUTO</option>
                                <option value="2">SERVIÇO</option>
                            </select> 
                        </div>
                        <div class="form-group col-md-5">
                            <label for="valor" class="control-label">Valor: </label>
                            <input type="text" name="valor" class="form-control" id="valor" required="">
                        </div>
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