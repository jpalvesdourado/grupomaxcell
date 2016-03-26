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
                        <label for="titulo" class="control-label">Descrição:</label>
                        <input type="text" name="titulo" class="form-control" id="titulo" required="">
                    </div>
                    <div class="form-group">
                        <label for="titulo" class="control-label">Tipo:</label>
                        <input type="text" name="titulo" class="form-control" id="titulo" required="">
                        <section name="titulo" class="form-control" id="titulo" required="">
                            <option value="1">PRODUTO</option>
                            <option value="2">SERVIÇO</option>
                        </section> 
                    </div>
                    <div class="form-group">
                        <label for="titulo" class="control-label">Categoria:</label>
                        <input type="text" name="titulo" class="form-control" id="titulo" required="">
                        <section name="titulo" class="form-control" id="titulo" required="">
                            <option value="1">PRODUTO</option>
                            <option value="2">SERVIÇO</option>
                        </section> 
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="control-label">Valor: </label>
                        <textarea name="descricao" class="form-control" id="descricao" required="" rows="8"></textarea>
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