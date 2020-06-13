<div class="portlet-body" id="perfil">
    <div class="tabbable tabbable-tabdrop">

        <div class="portlet box blue" >
            
            <div class="portlet-title">
                <div class="caption">
                    Perfil
                </div>
            </div>

            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-8">
                        <div style="padding-bottom: 15px">
                            <h5><b>Nome:</b></h5>

                           
                            <h5>{{mb_strtoupper($registros->name)}}</h5>
                        </div>

                        <div style="padding-bottom: 15px">
                            <h5><b>E-mail:</b></h5>
                            <h5>{{$registros->email}}</h5>
                        </div>

                        <div style="padding-bottom: 15px">
                            <h5><b>Telefone:</b></h5>
                            <h5>{{$registros->telefone}}</h5>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-shield" style="font-size: 20px"></i> <span>Perfis de Acesso</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                @foreach ($perfis_acesso as $pa)
                                    <h5><b>{{$pa->nome}}</b></h5 >                                    
                                @endforeach
                            </div>
                        </div>
                    </div>

                    @empty(!$registros->o_nome)
                    <div class="col-md-12">
                        <h5><b>Órgão:</b></h5>
                        <h5>{{mb_strtoupper($registros->o_nome)}}</h5>
                    </div>                        
                    @endempty
           
                </div>
            </div>                    
        </div>

    </div>
</div>