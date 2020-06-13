

                <div class="row">
                    <div class="col-md-12">
                        <form role="form" id="alterar_senha_usuario" method="post" data-toggle="validator" action="{{ route('alterar.senha.usuario') }}">
                            @csrf

                            <input type="hidden" name="user_id" id="user_id" value="{{ isset($registros->id) ? $registros->id : ''}}">
                           
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="control-label">Nova Senha</label>
                                    <input type="password" name="senha" data-minlength="6" id="senha" class="form-control" required="true" /> 
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="control-label">Confirmar nova senha</label>
                                    <input type="password" name="conf_senha" id="conf_senha" data-match="#senha" data-match-error="Essas senhas não coincidem." class="form-control" required="true" /> 
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="margin-top-10">
                                <button type="submit" id="salvar" class="btn blue"><i class="fa fa-save"></i> Salvar </button>
                                <!--<a href="javascript:;" class="btn default"> Cancel </a>-->
                            </div>
                        </form>       
                    </div>
                </div>
           