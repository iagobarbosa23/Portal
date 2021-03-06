<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start ">
                <a href="{{ route('home.index') }}" class="nav-link ">
                    <i class="icon-home"></i>
                    <span class="title">Principal</span>
                </a>
            </li>
            {{-- @canany (['view_recadastramento','edit_recadastramento'])
            <li class="nav-item start ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-alt"></i>
                    <span class="title">Recadastramento</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">     
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <span class="title"> Realizar Recadastramento </span>
                        </a>
                    </li>
                    @can('realizar_suspencao')
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <span class="title"> Realizar Suspensão </span>
                        </a>
                    </li>  
                    @endcan
                    <li class="nav-item ">
                    <a href="#" class="nav-link ">
                                <span class="title">Informar Óbito </span>
                            </a>
                        </li>
                        @can('confirmar_obito')     
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <span class="title">Confirmar Óbito </span>
                            </a>
                        </li>                     
                    </li> 
                    @endcan
                    @can('importar_arquivo')
                    <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <span class="title"> Importar arquivo </span>
                            </a>
                    </li>  
                    @endcan 
                </ul>
            </li>
            @endcanany --}}
            
            @canany (['view_recadastramento','edit_recadastramento'])
            @can('view_cadastros_basicos')
            <li class="nav-item start ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-list"></i>
                    <span class="title">Cadastros</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">     
                    <li class="nav-item ">
                        <a href="{{ route('disciplina.index')}}" class="nav-link ">
                            <span class="title">Disciplinas</span>
                        </a>
                    </li>                                                            
                    <li class="nav-item ">
                        <a href="{{ route('assunto.index')}}" class="nav-link ">
                            <span class="title">Assuntos</span>
                        </a>
                    </li>  
                    <li class="nav-item ">
                        <a href="{{ route('questoe.index')}}" class="nav-link ">
                            <span class="title">Questões</span>
                        </a>
                    </li>        
                                   
                </ul>
            </li>
            @endcan
            @endcanany
            {{-- @can('view_logs_obito')
            <li class="nav-item start ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-eye"></i>
                    <span class="title">Auditoria</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">                                                                                   
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <span class="title">Registro de Auditoria
                            </span>
                        </a>
                    </li>                        
                </ul>
            </li>
            @endcan --}}
            {{-- @canany(['view_user','view_perfil_acesso'])             
            <li class="nav-item start">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-shield"></i>
                    <span class="title">Segurança</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu ">

                    @can('view_user') 
                   <li class="nav-item ">
                        <a href="{{ route('usuario.index')}}" class="nav-link ">
                            <span class="title">Usuários</span>
                        </a>
                    </li>                        
                   @endcan

                    @can('view_perfil_acesso')
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <span class="title">Perfil de Acesso</span>
                            <span class="selected"></span>
                        </a>
                    </li>                        
                    @endcan
                </ul>
            </li>
            @endcanany --}}
            {{-- @canany(['view_relatorio_recadastramento'])
            <li class="nav-item start">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-file-text-o"></i>
                    <span class="title">Relatórios</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu ">
        
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <span class="title">Recadastrados</span>
                            <span class="badge" style="background-color: #3598dc" id="servico_cadastrado"></span>
                        </a>
                    </li>
                    @can('view_relatorio_recadastramento')
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <span class="title">Em Recadastramento</span>
                            <span class="badge" style="background-color: #3598dc" id="servico_cadastrado"></span>
                        </a>
                    </li>
                    @endcan
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <span class="title">Desligados</span>
                            <span class="badge" style="background-color: #e7505a" id="servico_finalizados"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <span class="title">Visita Domiciliar</span>
                            <span class="badge" style="background-color: #e7505a" id="servico_finalizados"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <span class="title">Suspensos</span>
                            <span class="badge" style="background-color: #e7505a" id="servico_finalizados"></span>
                        </a>
                    </li> 
                                      
                </ul>
            </li>
          
            @endcanany --}}

            <li class="nav-item start">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                    <i class="fa fa-sign-out"></i>
                    <span class="title"> Sair</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>