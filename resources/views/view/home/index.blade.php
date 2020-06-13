@extends('layout.default')

@section('titulo', 'Portal | UNIME')

@section('conteudo')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-head">
            <div class="page-title">
                <h1>Início</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <span class="caption-subject bold uppercase">Portal do aluno</span>
                        </div>

                    </div>
                    <div class="portlet-body">
                        <!-- @php
                        $nome_completo = explode(' ', Auth::user()->name);
                        $nome = $nome_completo[0];
                        @endphp                         -->
                        <i class="fa fa-thumbs-o-up fa-2x"></i> Bem Vindo, {{ $nome }}!<br>
                        {{-- <br>Para começar, escolha uma das opções ao lado. --}}<br>

                    </div>
                    <div>
                       
                    <div class="row">
                    
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                                    <div class="visual">
                                                        <i class="fa fa-comments"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="number">
                                                            <span data-counter="counterup" data-value=""></span>
                                                        </div>
                                                        <div class="desc"> Financeiro</div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                                    <div class="visual">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="number">
                                                        <span data-counter="counterup" data-value="">  </span></div>
                                                        <div class="desc"> Desempenho</div>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <a class="dashboard-stat dashboard-stat-v2 green" href="">
                                                    <div class="visual">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="number">
                                                        <span data-counter="counterup" data-value=""></span>
                                                        </div>
                                                        <div class="desc"> Disciplinas</div>
                                                    </div>                                    
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                                                    <div class="visual">
                                                        <i class="fa fa-globe"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="number">
                                                        <span data-counter="counterup" data-value=""></span>
                                                    </div>
                                                        <div class="desc"> Lives </div>

                                                    </div>

                                                </a>
                                            </div><!-- Fim do Col -->

                                        </div><!-- Fim do Row -->
                    </div>
                </div>
            </div>
        </div>
        
        

    </div>

</div>

<script>
    
</script>

@endsection()