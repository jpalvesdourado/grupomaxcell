<div class="modal fade" id="frm_novocliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title centro" id="exampleModalLabel">Novo Cliente</h4>
            </div>
            <div class="modal-body">
                <form name="frm_novacategoria" id="frm_novacategoria" method="POST" action="./novocliente">
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome:</label>
                        <input type="text" name="nome" class="form-control" id="nome" required="">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="cpf" class="control-label">Cpf:</label>
                            <input type="text" name="cpf" class="form-control" id="cpf" required="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="rg" class="control-label">Rg:</label>
                            <input type="text" name="rg" class="form-control" id="rg">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="org_exp" class="control-label">Orgão Expeditor:</label>
                            <input type="text" name="org_exp" class="form-control" id="org_exp">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="uf_exp" class="control-label">Uf Expeditor:</label>
                            <select name="uf_exp" class="form-control" id="uf_exp">
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="email" class="control-label">E-mail:</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="data_nascimento" class="control-label">Data de Nascimento:</label>
                            <input type="text" name="data_nascimento" class="form-control" id="data_nascimento">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="status" class="control-label">Status:</label>
                            <select name="status" class="form-control" id="status">
                                <option value="1" selected="">Ativo</option>
                                <option value="2">Suspenso por inadimplência</option>
                                <option value="3">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-9">
                            <label for="endereco" class="control-label">Endereço:</label>
                            <input type="text" name="endereco" class="form-control" id="endereco">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="num" class="control-label">Número:</label>
                            <input type="text" name="num" class="form-control" id="num">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="complemento" class="control-label">Complemento:</label>
                            <input type="text" name="complemento" class="form-control" id="complemento">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="bairro" class="control-label">Bairro:</label>
                            <input type="text" name="bairro" class="form-control" id="bairro">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cidade" class="control-label">Cidade:</label>
                            <input type="text" name="cidade" class="form-control" id="cidade">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="uf" class="control-label">Uf:</label>
                            <select name="uf" class="form-control" id="uf">
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                            </select>
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