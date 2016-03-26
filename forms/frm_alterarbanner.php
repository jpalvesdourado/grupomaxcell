<div class="modal fade" id="frm_alterarbanner<?php echo $id_banner; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title centro" id="exampleModalLabel">Alterar Banner</h4>
            </div>
            <div class="modal-body">
                <form name="frm_alterarbanner<?php echo $id_banner; ?>" id="frm_alterarbanner<?php echo $id_banner; ?>" method="POST" action="#">
                    <div class="form-group">
                        <label for="imagem" class="control-label">Insira a imagem a ser ultilizada:</label>
                        <div class="container-fluid">
                            <div class="col-md-4">
                                <a class="thumbnail">
                                    <img src="./imagens/<?php echo $alt_imagem; ?>"/>
                                </a>
                            </div>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="imagem" name="imagem" placeholder="Escolha sua imagem..." required="">
                                <input type="hidden" class="form-control" id="imagem" name="imagem2" placeholder="Escolha sua imagem..." required="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="titulo" class="control-label">Informe um titulo para este banner:</label>
                        <input type="text" name="titulo" class="form-control" id="titulo" required="" value="<?php echo $alt_titulo; ?>">
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="control-label">Informe uma breve descrição:</label>
                        <textarea name="descricao" class="form-control" id="descricao" required="" rows="8"><?php echo $alt_descricao; ?></textarea>
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
