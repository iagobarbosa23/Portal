<div class="portlet-body" id="alterar_senha">
    <div class="tabbable tabbable-tabdrop">

        <div class="portlet box blue" >
            
            <div class="portlet-title">
                <div class="caption">
                    Alterar Senha
                </div>
            </div>

            <div class="portlet-body">

                <div class="row">
                    <div class="col-md-12">
                        <form role="form" id="alterar_senha" method="post" data-toggle="validator" action="{{ route('alterar.senha') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-5" style="padding-top: 5px">
                                    <label class="control-label">Senha Atual</label>
                                    <input type="password" name="senhaAtual" id="senhaAtual" class="form-control" required="true" /> 
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="control-label">Nova Senha</label>
                                    <input type="password" name="password" data-minlength="6" id="inputPassword" class="form-control" required="true" /> 
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="control-label">Confirmar nova senha</label>
                                    <input type="password" name="rPassword" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Essas senhas não coincidem." class="form-control" required="true" /> 
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="margin-top-10">
                                <button type="sumit" id="salvar" class="btn blue"><i class="fa fa-save"></i> Salvar </button>
                                <!--<a href="javascript:;" class="btn default"> Cancel </a>-->
                            </div>
                        </form>       
                    </div>
                </div>
            </div>                    
        </div>

    </div>
</div>