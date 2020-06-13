@extends('layout.default')

@section('titulo', 'Meu Perfil | Portal do Aluno Unime')

@section('conteudo')

<style>
    #inicias_nome{
        width: 150px;
        height: 150px;
        display: inline-block;
        border-radius: 100%;
        background-color: #337ab7;
    }

    #letra{
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        color: white;
        margin-top: 30px;
        font-size: 70px;
    }
</style>
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Meu Perfil
                    <small></small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="tab-pane active">
            <div class="row">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="tab-content">
                    <!-- 1 -->
                    <div class="col-md-4">
                        <div class="portlet light profile-sidebar-portlet bordered">
                            <!-- SIDEBAR USERPIC -->
                            {{-- <div class="profile-userpic">
                                <img src="{{asset('imagens/loading_duplo.gif')}}" id="fotoperfil" class="img-responsive" alt="Foto de Perfil"> </div> --}}

                                <div class="text-center">
                                    <div id="inicias_nome">
                                        <div id="letra">
                                            {{$iniciais_nome}}
                                        </div>
                                    </div>    
                                </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">                                
                                <div class="profile-usertitle-name"> {{$nome_sobrenome}} </div>
                            </div>
                            
                            <!-- SIDEBAR MENU -->
                            <div class="tab-pane active profile-usermenu">
                                <ul class="nav">
                                    <li class="{{ (!session('active')) ? 'active' : '' }}">
                                        <a data-toggle="tab" href="#tab_1">
                                            <i class="icon-user"></i> Perfil 
                                        </a>
                                    </li>
                                    <li class="{{ (session('active') && session('active') == 'alterar_senha') ? 'active' : '' }}">
                                        <a data-toggle="tab" href="#tab_3">
                                            <i class="icon-lock"></i> Alterar Senha 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                    </div>
                    <!-- END 1 -->
                    <div class="col-md-8">
                        
                        <!--Mensagem de Sucesso-->
                        @if (session('msg')) {!! session('msg') !!} @endif
                        <div id="teste"></div>
                        <!--Mensagem de Erro-->
                                                            
                        <div class="portlet light bordered">
                            <div class="tab-content">

                                <div id="tab_1" class="tab-pane {{ (!session('active')) ? 'active' : '' }}">                                   
                                    @include('view.meu_perfil.perfil')
                                </div>
                                
                                
                                <div id="tab_3" class="tab-pane {{ (session('active') && session('active') == 'alterar_senha') ? 'active' : '' }}">                                    
                                    @include('view.meu_perfil.alterar_senha')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
    </div>
</div>
 
<script type="text/javascript">
    $('#senhaAtual').change(function(){
        var senhaAtual = $('#senhaAtual').val();
        if (senhaAtual != ''){
            $.ajax({
                url: "{{ route('verifica.alterar.senha') }}",
                type: 'GET',
                data: {
                    senhaAtual : senhaAtual
                },
                beforeSend: function() {
                    swal({
                        position: 'center',
                        title: 'Verificando senha',
                        imageUrl: "{{asset('imagens/loading_duplo.gif')}}",
                        imageAlt: 'Custom image',
                        showConfirmButton: false,
                    });
                },
                success: function(data) {
                    if (data == 'true'){
                        setTimeout(function(){
                            swal({
                                type: "success",
                                title: "",
                                timer: 1200,
                                showConfirmButton: false
                            });
                        }, 1000);                        
                        $('#inputPassword').focus();
                    }else{
                        setTimeout(function(){
                            swal({
                                type: "warning",
                                title: "Senha atual inválida",
                                timer: 2000,
                                showConfirmButton: false
                            });
                            $('#senhaAtual').val('');
                            $('#senhaAtual').focus();
                        }, 1000);
                    }
                    window.onkeydown = null;
                    window.onfocus = null;
                }
            });
        }
    });
</script>

@endsection()