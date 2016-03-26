<div class="modal fade" id="frm_alterarcliente<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title centro" id="exampleModalLabel">Alterar Cliente</h4>
            </div>
            <div class="modal-body">
                <form name="frm_alterarcliente" id="frm_alterarcliente" method="POST" action="./alterarcliente/<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome:</label>
                        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"/>
                        <input type="hidden" name="data_cadastro" id="data_cadastro" value="<?php echo $data_cadastro; ?>"/>
                        <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $nome; ?>" required="">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="cpf" class="control-label">Cpf:</label>
                            <input type="text" name="cpf" class="form-control" id="cpf" value="<?php echo $cpf; ?>" required="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="rg" class="control-label">Rg:</label>
                            <input type="text" name="rg" class="form-control" id="rg" value="<?php echo $rg; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="org_exp" class="control-label">Orgão Expeditor:</label>
                            <input type="text" name="org_exp" class="form-control" id="org_exp" value="<?php echo $org_exp; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="uf_exp" class="control-label">Uf Expeditor:</label>
                            <select name="uf_exp" class="form-control" id="uf_exp">
                                <option value="AC" <?php if($uf_exp == 'AC'){echo "selected=''";} ?>>AC</option>
                                <option value="AL" <?php if($uf_exp == 'AL'){echo "selected=''";} ?>>AL</option>
                                <option value="AM" <?php if($uf_exp == 'AM'){echo "selected=''";} ?>>AM</option>
                                <option value="AP" <?php if($uf_exp == 'AP'){echo "selected=''";} ?>>AP</option>
                                <option value="BA" <?php if($uf_exp == 'BA'){echo "selected=''";} ?>>BA</option>
                                <option value="CE" <?php if($uf_exp == 'CE'){echo "selected=''";} ?>>CE</option>
                                <option value="DF" <?php if($uf_exp == 'DF'){echo "selected=''";} ?>>DF</option>
                                <option value="ES" <?php if($uf_exp == 'ES'){echo "selected=''";} ?>>ES</option>
                                <option value="GO" <?php if($uf_exp == 'GO'){echo "selected=''";} ?>>GO</option>
                                <option value="MA" <?php if($uf_exp == 'MA'){echo "selected=''";} ?>>MA</option>
                                <option value="MG" <?php if($uf_exp == 'MG'){echo "selected=''";} ?>>MG</option>
                                <option value="MS" <?php if($uf_exp == 'MS'){echo "selected=''";} ?>>MS</option>
                                <option value="MT" <?php if($uf_exp == 'MT'){echo "selected=''";} ?>>MT</option>
                                <option value="PA" <?php if($uf_exp == 'PA'){echo "selected=''";} ?>>PA</option>
                                <option value="PB" <?php if($uf_exp == 'PB'){echo "selected=''";} ?>>PB</option>
                                <option value="PE" <?php if($uf_exp == 'PE'){echo "selected=''";} ?>>PE</option>
                                <option value="PI" <?php if($uf_exp == 'PI'){echo "selected=''";} ?>>PI</option>
                                <option value="PR" <?php if($uf_exp == 'PR'){echo "selected=''";} ?>>PR</option>
                                <option value="RJ" <?php if($uf_exp == 'RJ'){echo "selected=''";} ?>>RJ</option>
                                <option value="RN" <?php if($uf_exp == 'RN'){echo "selected=''";} ?>>RN</option>
                                <option value="RS" <?php if($uf_exp == 'RS'){echo "selected=''";} ?>>RS</option>
                                <option value="RO" <?php if($uf_exp == 'RO'){echo "selected=''";} ?>>RO</option>
                                <option value="RR" <?php if($uf_exp == 'RR'){echo "selected=''";} ?>>RR</option>
                                <option value="SC" <?php if($uf_exp == 'SC'){echo "selected=''";} ?>>SC</option>
                                <option value="SE" <?php if($uf_exp == 'SE'){echo "selected=''";} ?>>SE</option>
                                <option value="SP" <?php if($uf_exp == 'SP'){echo "selected=''";} ?>>SP</option>
                                <option value="TO" <?php if($uf_exp == 'TO'){echo "selected=''";} ?>>TO</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="email" class="control-label">E-mail:</label>
                            <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="data_nascimento" class="control-label">Data de Nascimento:</label>
                            <input type="text" name="data_nascimento" class="form-control" id="data_nascimento" value="<?php echo $data_nascimento; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="status" class="control-label">Status:</label>
                            <select name="status" class="form-control" id="status">
                                <option value="1" <?php if($status == 1){echo "selected=''";} ?>>Ativo</option>
                                <option value="2" <?php if($status == 2){echo "selected=''";} ?>>Suspenso por inadimplência</option>
                                <option value="3" <?php if($status == 3){echo "selected=''";} ?>>Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-9">
                            <label for="endereco" class="control-label">Endereço:</label>
                            <input type="text" name="endereco" class="form-control" id="endereco" value="<?php echo $endereco; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="num" class="control-label">Número:</label>
                            <input type="text" name="num" class="form-control" id="num" value="<?php echo $num; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="complemento" class="control-label">Complemento:</label>
                            <input type="text" name="complemento" class="form-control" id="complemento" value="<?php echo $complemento; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="bairro" class="control-label">Bairro:</label>
                            <input type="text" name="bairro" class="form-control" id="bairro" value="<?php echo $bairro; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cidade" class="control-label">Cidade:</label>
                            <input type="text" name="cidade" class="form-control" id="cidade" value="<?php echo $cidade; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="uf" class="control-label">Uf:</label>
                            <select name="uf" class="form-control" id="uf">
                                <option value="AC" <?php if($uf == 'AC'){echo "selected=''";} ?>>AC</option>
                                <option value="AL" <?php if($uf == 'AL'){echo "selected=''";} ?>>AL</option>
                                <option value="AM" <?php if($uf == 'AM'){echo "selected=''";} ?>>AM</option>
                                <option value="AP" <?php if($uf == 'AP'){echo "selected=''";} ?>>AP</option>
                                <option value="BA" <?php if($uf == 'BA'){echo "selected=''";} ?>>BA</option>
                                <option value="CE" <?php if($uf == 'CE'){echo "selected=''";} ?>>CE</option>
                                <option value="DF" <?php if($uf == 'DF'){echo "selected=''";} ?>>DF</option>
                                <option value="ES" <?php if($uf == 'ES'){echo "selected=''";} ?>>ES</option>
                                <option value="GO" <?php if($uf == 'GO'){echo "selected=''";} ?>>GO</option>
                                <option value="MA" <?php if($uf == 'MA'){echo "selected=''";} ?>>MA</option>
                                <option value="MG" <?php if($uf == 'MG'){echo "selected=''";} ?>>MG</option>
                                <option value="MS" <?php if($uf == 'MS'){echo "selected=''";} ?>>MS</option>
                                <option value="MT" <?php if($uf == 'MT'){echo "selected=''";} ?>>MT</option>
                                <option value="PA" <?php if($uf == 'PA'){echo "selected=''";} ?>>PA</option>
                                <option value="PB" <?php if($uf == 'PB'){echo "selected=''";} ?>>PB</option>
                                <option value="PE" <?php if($uf == 'PE'){echo "selected=''";} ?>>PE</option>
                                <option value="PI" <?php if($uf == 'PI'){echo "selected=''";} ?>>PI</option>
                                <option value="PR" <?php if($uf == 'PR'){echo "selected=''";} ?>>PR</option>
                                <option value="RJ" <?php if($uf == 'RJ'){echo "selected=''";} ?>>RJ</option>
                                <option value="RN" <?php if($uf == 'RN'){echo "selected=''";} ?>>RN</option>
                                <option value="RS" <?php if($uf == 'RS'){echo "selected=''";} ?>>RS</option>
                                <option value="RO" <?php if($uf == 'RO'){echo "selected=''";} ?>>RO</option>
                                <option value="RR" <?php if($uf == 'RR'){echo "selected=''";} ?>>RR</option>
                                <option value="SC" <?php if($uf == 'SC'){echo "selected=''";} ?>>SC</option>
                                <option value="SE" <?php if($uf == 'SE'){echo "selected=''";} ?>>SE</option>
                                <option value="SP" <?php if($uf == 'SP'){echo "selected=''";} ?>>SP</option>
                                <option value="TO" <?php if($uf == 'TO'){echo "selected=''";} ?>>TO</option>
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