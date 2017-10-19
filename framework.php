<!DOCTYPE html>
<html lang="pt-br">
	<head>

        <title>C3 Framework</title>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    
	    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/framework.css">
	</head>
    <!-- Corpo da página -->
    <body>
        <!-- Barra de navegação -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">C3 Framework</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Principal</a></li>
                        <li class="active"><a href="framework.php">Conheça o C3</a></li>
                        <li><a href="guia.php">Guia do C3</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <header>
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                        <h1>C3 - Framework para Construção Científica na Ciência da Computação</h1>
                        <h2>Apoio à condução de pesquisas científicas na Ciência da Computação</h2>
                    </div>
                </div>
            </div>
        </header>
        <!-- Ciclos -->
        <div id="ciclos">
            <!-- Visualizações do Framework -->     
            <div class="container">
                <div class="row centered">
                    <h1>Visão geral do C3 Framework</h1>
                    <p>Passe o mouse sobre o elemento para detalhes</p> 
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active">Geral</li>
                            <li data-target="#myCarousel" data-slide-to="1" ">Scrum</li>
                            <li data-target="#myCarousel" data-slide-to="2" ">DSR</li>
                        </ol>
                        <div class="tooltip">
                            <a style="width: 100px; height: 215px; position: absolute; top: 290px; left: -290px;">
                                <span class="tooltip tooltiptext">
                                    <h1>Ciclo de Conscientização do Problema</h1>
                                    <hr>
                                    <p>Aprofundamento no Problema da pesquisa, buscando extrair a Visão do Produto</p>
                                    <p><b>Entrada:</b> Ideia/Problema inicial </p>
                                    <div class="dropdown">
                                        <p><b>Atividades (+)</b></p>
                                        <div class="dropdown-content">
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-atv-gen">Escolher tema</li>
                                                <li class="list-group-item list-group-item-atv-gen">Definir contexto do assunto</li>
                                                <li class="list-group-item list-group-item-atv-gen">Delimitar escopo</li>
                                                <li class="list-group-item list-group-item-atv-gen">Identificar problema</li>
                                                <li class="list-group-item list-group-item-atv-gen">Formular problema</li>
                                                <li class="list-group-item list-group-item-atv-gen">Extrair estado da arte do tema</li>
                                                <li class="list-group-item list-group-item-atv-gen">Delimitar o escopo da pesquisa</li>
                                                <li class="list-group-item list-group-item-atv-gen">Definir objetivo</li>

                                                <li class="list-group-item list-group-item-atv-met">Confeccionar fichas de leitura</li>
                                                <li class="list-group-item list-group-item-atv-met">Realizar observações do objeto</li>
                                                <li class="list-group-item list-group-item-atv-met">Realizar entrevistas</li>
                                                <li class="list-group-item list-group-item-atv-met">Realizar coleta de informações</li>

                                          </ul>
                                        </div>
                                    </div>
                                    <p><b>Saída:</b> Visão da Pesquisa: Problema de pesquisa formalizado, Objetivo, Justificativa, Metodologia </p>
                                </span>
                            </a>
                        </div>
                        <div class="tooltip">
                            <a style="width: 100px; height: 215px; position: absolute; top: 290px; left: -148px;">
                                <!-- Proposta de Solução -->
                                <span class="tooltip tooltiptext">
                                    <h1>Ciclo da Proposta de Solução</h1>
                                    <hr>
                                    <p>Proposição de um artefato, com seus requisitos e funcionalidades, que atenda ao Problema da pesquisa </p>
                                    <p><b>Entrada:</b> Visão da Pesquisa, informações coletadas na Conscientização do Problema </p>
                                    <div class="dropdown">
                                        <p><b>Atividades (+)</b></p>
                                        <div class="dropdown-content">
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-atv-gen">Formalizar hipóteses</li>

                                                <li class="list-group-item list-group-item-atv-met">Identificar requisitos</li>
                                                <li class="list-group-item list-group-item-atv-met">Formalizar requisitos</li>
                                                <li class="list-group-item list-group-item-atv-met">Identificar restrições</li>
                                                <li class="list-group-item list-group-item-atv-met">Definir funcionalidades</li>
                                                <li class="list-group-item list-group-item-atv-met">Identificar critérios de aceitação</li>
                                                <li class="list-group-item list-group-item-atv-met">Definir técnicas para construção</li>
                                                <li class="list-group-item list-group-item-atv-met">Definir ferramentas para construção</li>

                                                <li class="list-group-item list-group-item-atv-fin">Definir universo da coleta</li>
                                                <li class="list-group-item list-group-item-atv-fin">Definir critérios de amostragem</li>

                                                <li class="list-group-item list-group-item-atv-abor">Definir forma de análise</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p><b>Saída:</b> Requisitos do Artefato, Critérios de Aceitação do Artefato </p>
                                </span>
                            </a>
                        </div>
                        <div class="tooltip">
                            <a style="width: 100px; height: 215px; position: absolute; top: 290px; left: -43px;">
                                <!-- Construção do Artefato -->
                                <span class="tooltip tooltiptext">
                                    <h1>Ciclo de Construção do Artefato</h1>
                                    <hr>
                                    <p>Desenvolvimento do artefato conforme proposta, utilizando técnicas e ferramentas necessárias para construir a solução</p>
                                    <p><b>Entrada:</b> Proposta de Artefao </p>
                                    <div class="dropdown">
                                        <p><b>Atividades (+)</b></p>
                                        <div class="dropdown-content">
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-atv-met">Construir artefato</li>
                                                <li class="list-group-item list-group-item-atv-met">Realizar coleta de dados</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p><b>Saída:</b> Artefato em estado funcional </p>
                                </span>
                            </a>
                        </div>
                        <div class="tooltip">
                            <a style="width: 100px; height: 215px; position: absolute; top: 290px; left: 62px;">
                                <!-- Avaliação do Artefato -->
                                <span class="tooltip tooltiptext">
                                    <h1>Ciclo de Avaliação do Artefato</h1>
                                    <hr>
                                    <p>Avaliação do artefato quanto a sua utilidade e eficácia para resolver o Problema da pesquisa</p>
                                    <p><b>Entrada:</b> Artefato em estado funcional, Critérios de Aceitação </p>
                                    <div class="dropdown">
                                        <p><b>Atividades (+)</b></p>
                                        <div class="dropdown-content">
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-atv-gen">Aplicar instrumento de avaliação</li>
                                                <li class="list-group-item list-group-item-atv-gen">Avaliar critérios de aceitação</li>

                                                <li class="list-group-item list-group-item-atv-met">Tabular resultados obtidos</li>

                                                <li class="list-group-item list-group-item-atv-abor">Analisar resultado qualitativamente</li>
                                                <li class="list-group-item list-group-item-atv-abor">Analisar resultado quantitativamente</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p><b>Saída:</b> Artefato validado </p>
                                </span>
                            </a>
                        </div>
                        <div class="tooltip">
                            <a style="width: 100px; height: 215px; position: absolute; top: 290px; left: 170px;">
                                <!-- Conclusão  da Pesquisa -->
                                <span class="tooltip tooltiptext">
                                    <h1>Ciclo de Conclusão do Artefato</h1>
                                    <hr>
                                    <p>Finalização da pesquisa, extraindo resultados obtidos para comunicação do estudo</p>
                                    <p><b>Entrada:</b> Artefato avaliado, Estado da Arte do Tema, Heurísticas</p>
                                    <div class="dropdown">
                                        <p><b>Atividades (+)</b></p>
                                        <div class="dropdown-content">
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-atv-gen">Avaliar proposta e resultados obtidos</li>

                                                <li class="list-group-item list-group-item-atv-dsr">Explicar aprendizagens</li>
                                                <li class="list-group-item list-group-item-atv-dsr">Apresentações contribuições</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p><b>Saída:</b> Resultado final da pesquisa </p>
                                </span>
                            </a>
                        </div>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <img src="img/PenduloGeral.png" alt="Visão geral" style="width:100%;">
                                <div class="carousel-caption">

                                    <h3>Visão Geral</h3>
                                </div>
                            </div>

                            <div class="item">
                                <img src="img/PenduloScrum.png" alt="Scrum" style="width:100%;">
                                    <div class="carousel-caption">

                                    <h3>Scrum</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/PenduloDSR.png" alt="Design Science Research" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3><i>Design Science Research</i></h3>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Componentes do Framework -->
        <div id="componentesframework">
            <div class="container">
                <div class="row centered">
                    <br><br>
                    <h1>Elementos do C3 Framework</h1>
                    <p>Passe o mouse sobre o elemento para detalhes</p>
                    <img src="img/Componentes.png" alt="Visão geral" style="width:100%;">
                    <!-- Cerimônias -->
                    <div class="tooltip">
                        <a style="width: 60px; height: 185px; position: absolute; top: -556px; left: -430px;">
                            <span class="tooltip tooltiptext">
                                <h1>Encontro de Planejamento</h1>
                                <hr>
                                <p><b>Participantes:</b> Dono da Pesquisa, Time Pesquisador, Orientador </p>
                                <p><b>Propósito:</b> Planejar atividades científicas que serão realizadas no próximo ciclo da pesquisa</p>
                                <hr>
                                <p><b>Entrada:</b> Backlog da Pesquisa</p>
                                <p><b>Saída:</b> Backlog do Ciclo</p>
                            </span>
                        </a>
                    </div>
                    <div class="tooltip">
                        <a style="width: 60px; height: 85px; position: absolute; top: -556px; left: -153px;">
                            <span class="tooltip tooltiptext">
                                <h1>Encontro de Orientação</h1>
                                <hr>
                                <p><b>Participantes:</b> Dono da Pesquisa, Time Pesquisador, Orientador </p>
                                <p><b>Propósito:</b> Verificar andamento das atividades científicas previstas para o ciclo. Identificar impedimentos que possam comprometer a execução do ciclo</p>
                                <hr>
                                <p><b>Entrada:</b> Estado das atividades previstas para o ciclo </p>
                                <p><b>Saída:</b> Todos os membros cientes do estado atual do ciclo da pesquisa </p>
                            </span>
                        </a>
                    </div>
                    <div class="tooltip">
                        <a style="width: 60px; height: 185px; position: absolute; top: -556px; left: 132px;">
                            <span class="tooltip tooltiptext">
                                <h1>Encontro de Revisão</h1>
                                <hr>
                                <p><b>Participantes:</b> Dono da Pesquisa, Time Pesquisador, Orientador </p>
                                <p><b>Propósito:</b>Revisar resultado das atividades científicas realizadas, verificando se atendem aos critérios científicos do ciclo. Caso o resultado não seja satisfatório ou nem todas as atividades tenham sido finalizadas, o ciclo pode ser repetido</p>
                                <hr>
                                <p><b>Entrada:</b> Atividades científicas realizadas e não realizadas, Critérios Científicos </p>
                                <p><b>Saída:</b> Incremento da Pesquisa </p>
                            </span>
                        </a>
                    </div>
                    <div class="tooltip">
                        <a style="width: 60px; height: 185px; position: absolute; top: -556px; left: 220px;">
                            <span class="tooltip tooltiptext">
                                <h1>Encontro de Retrospectiva</h1>
                                <hr>
                                <p><b>Participantes:</b> Dono da Pesquisa, Time Pesquisador, Orientador </p>
                                <p><b>Propósito:</b>Avaliar processo, métodos e técnicas utilizadas, assim como pontos positivos e negativos do ciclo anterior, inspecionando tais elementos quanto adaptações necessárias. Momento para extrair aprendizados, heurísticas e contribuições obtidas pelo estudo </p>
                                <hr>
                                <p><b>Entrada:</b> Processos e percepções do Time de Pesquisa </p>
                                <p><b>Saída:</b> Heurísticas de construção e/ou contigenciais </p>
                            </span>
                        </a>
                    </div>
                    <!-- Componentes -->
                    <div class="tooltip"> 
                        <a style="width: 70px; height: 70px; position: absolute; top: -320px; left: -480px;">
                            <span class="tooltip tooltiptext">
                                <h1>Backlog da Pesquisa</h1>
                                <hr>
                                <p>Lista de atividades a serem executadas ao longo da pesquisa </p>
                            </span>
                        </a>
                    </div>
                    <div class="tooltip">
                        <a style="width: 70px; height: 70px; position: absolute; top: -320px; left: -370px;">
                            <span class="tooltip tooltiptext">
                                <h1>Backlog do Ciclo</h1>
                                <hr>
                                <p>Lista de tarefas a serem realizadas ao longo de um ciclo. Uma atividade científica pode gerar N tarefas</p>
                            </span>
                        </a>
                    </div>
                    <div class="tooltip">
                        <a style="width: 70px; height: 70px; position: absolute; top: -320px; left: 87px;">
                            <span class="tooltip tooltiptext">
                                <h1>Critérios Científicos</h1>
                                <hr>
                                <p>Itens que devem ser atendidos por um ciclo para garantir o carácter científico do resultado final </p>
                            </span>
                        </a>
                    </div>
                    <div class="tooltip">
                        <a style="width: 70px; height: 70px; position: absolute; top: -320px; left: 155px;">
                            <span class="tooltip tooltiptext">
                                <h1>Incremento da Pesquisa</h1>
                                <hr>
                                <p>Resultado obtido ao final de um ciclo </p>
                            </span>
                        </a>
                    </div>
                    <div class="tooltip">
                        <a style="width: 70px; height: 70px; position: absolute; top: -320px; left: 300px;">
                            <span class="tooltip tooltiptext">
                                <h1>Heurísticas</h1>
                                <hr>
                                <p>Aprendizados obtidos </p>
                            </span>
                        </a>
                    </div>
                    <!-- Papéis -->
                    <div class="tooltip">
                        <a style="width: 80px; height: 50px;  position: absolute; top: -490px; left: 440px;">
                            <span class="tooltip tooltiptext">
                                <h1>Dono da Pesquisa</h1>
                                <hr>
                                <p>Autor principal, é quem realiza a pesquisa e gerencia a Visão da Pesquisa</p>
                            </span>
                        </a>
                    </div>
                    <div class="tooltip">
                        <a style="width: 80px; height: 50px; position: absolute; top: -420px; left: 440px;">
                            <span class="tooltip tooltiptext">
                                <h1>Orientador</h1>
                                <hr>
                                <p>Guia o Time de Pesquisa na prática científica</p>
                            </span>
                        </a>
                    </div>
                    <div class="tooltip">
                        <a style="width: 80px; height: 50px; position: absolute; top: -350px; left: 440px;">
                            <span class="tooltip tooltiptext">
                                <h1>Time Pesquisador</h1>
                                <hr>
                                <p>Constroem a pesquisa científica, executando as tarefas necessárias para atingir o objetivo</p>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Atividades Científicas -->
        <div id="atividadesCientificas">
            <div class="container">
                <div class="row centered">
                    <h1>Atividades Científicas</h1>
                    <p>Atividades necessárias para realizar uma investigação científica. Compõem o Backlog da Pesquisa.</p>            
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Ciclo</th> <th>Tipo</th> <th>Atividade</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td rowspan="12">Conscientização do Problema</td><td rowspan="8">Genérica</td><td>Escolher tema</td>
                            </tr>
                            <tr>
                                <td>Definir contexto do assunto</td>
                            </tr>
                            <tr>
                                <td>Delimitar escopo</td>
                            </tr>
                            <tr>
                                <td>Identificar problema</td>
                            </tr>
                            <tr>
                                <td>Formular problema</td>
                            </tr>
                            <tr>
                                <td>Extrair estado da arte do tema</td>
                            </tr>
                            <tr>
                                <td>Delimitar escopo da pesquisa</td>
                            </tr>
                            <tr>
                                <td>Definir objetivo</td>
                            </tr>
                            <tr>
                                <td rowspan="4">Abordagem</td>
                                <td>Confeccionar fichas de leitura</td>
                            </tr>
                            <tr>
                                <td>Realizar observações do objeto</td>
                            </tr>
                            <tr>
                                <td>Realizar entrevistas</td>
                            </tr>
                            <tr>
                                <td>Realizar coleta de informações</td>
                            </tr>
                            <tr>
                                <td rowspan="6">Método de Pesquisa</td><td>Identificar requisitos</td>
                            </tr>
                            <tr>
                                <td>Identificar restrições</td>
                            </tr>
                            <tr>
                                <td>Definir funcionalidades</td>
                            </tr>
                            <tr>
                                <td>Identificar critérios de aceitação</td>
                            </tr>
                            <tr>
                                <td>Definir técnicas para construção</td>
                            </tr>
                            <tr>
                                <td>Definir ferramentas para construção</td>
                            </tr>
                            <tr>
                                <td rowspan="2">Finalidade</td><td>Definir universo da coleta</td>
                            </tr>
                            <tr>
                                <td>Definir critérios de amostragem</td>
                            </tr>
                            <tr>
                                <td>Abordagem</td><td>Definir forma de análise</td>
                            </tr>
                            <tr>
                                <td rowspan="2">Construção do Artefato</td><td rowspan="2">Método de Pesquisa</td><td>Construir artefato</td>
                            </tr>
                            <tr>
                                <td>Realizar coleta de dados</td>
                            </tr>
                            <tr>
                                <td rowspan="5">Avaliação do Artefato</td><td rowspan="2">Genérica</td><td>Aplicar instrumento de avaliação</td>
                            </tr>
                            <tr>
                                <td>Avaliar critérios de aceitação</td>
                            </tr>
                            <tr>
                                <td>Método de Pesquisa</td><td>Tabular dados obtidos</td>
                            </tr>
                            <tr>
                                <td rowspan="2">Abordagem</td><td>Analisar resultados qualitativamente</td>
                            </tr>
                            <tr>
                                <td>Analisar resultados quantitativamente</td>
                            </tr>
                            <tr>
                                <td rowspan="3">Conclusão da Pesquisa</td><td rowspan="3">Genérica</td><td>Avaliar proposta e resultados obtidos</td>
                            </tr>
                            <tr>
                                <td>Explicar aprendizagens</td>
                            </tr>
                            <tr>
                                <td>Apresentações contribuições</td>
                            </tr>
                                    

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Critérios Científicas -->
        <div id="criteriosCientificas">
            <div class="container">
                <div class="row centered">
                    <h1>Critérios Científicos</h1>
                    <p>Itens para auxiliar na revisão do Incremento da Pesquisa no final de cada ciclo</p>            
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Ciclo</th><th>Critério</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="10">Conscientização do Problema</td><td>Adequação ao pesquisador</td>
                            </tr>
                            <tr>
                                <td>Atualidade do tema</td>
                            </tr>
                            <tr>
                                <td>Contribuição científica</td>
                            </tr>
                            <tr>
                                <td>Propósito sintetizado no objetivo geral</td>
                            </tr>
                            <tr>
                                <td>Coerência</td>
                            </tr>
                            <tr>
                                <td>Originalidade</td>
                            </tr>
                            <tr>
                                <td>Viabilidade</td>
                            </tr>
                            <tr>
                                <td>Exequibilidade</td>
                            </tr>
                            <tr>
                                <td>Utilidade</td>
                            </tr>
                            <tr>
                                <td>Relevância</td>
                            </tr>
                            <tr>
                                <td rowspan="5">Proposta de Solução</td><td>Consistência lógica</td>
                            </tr>
                            <tr>
                                <td>Verificabilidade</td>
                            </tr>
                            <tr>
                                <td>Embasamento das decisões</td>
                            </tr>
                            <tr>
                                <td>Plausibilidade e clareza</td>
                            </tr>
                            <tr>
                                <td>Profundidade e originalidade</td>
                            </tr>
                            <tr>
                                <td rowspan="4">Construção do Artefato</td><td>Registro sistemático</td>
                            </tr>
                            <tr>
                                <td>Verificabilidade</td>
                            </tr>
                            <tr>
                                <td>Clareza na apresentação</td>
                            </tr>
                            <tr>
                                <td>Alinhamento com a proposta</td>
                            </tr>
                            <tr>
                                <td rowspan="4">Avaliação do Artefato</td><td>Ordenação lógica dos resultados</td>
                            </tr>
                            <tr>
                                <td>Alinhamento com problema </td>
                            </tr>
                            <tr>
                                <td>Alinhamento com proposta</td>
                            </tr>
                            <tr>
                                <td>Confronto com a base teórica da pesquisa</td>
                            </tr>
                            <tr>
                                <td rowspan="4">Conclusão da Pesquisa</td><td>Destaque para contribuições</td>
                            </tr>
                            <tr>
                                <td>Destaque para aprendizados</td>
                            </tr>
                            <tr>
                                <td>Avalia resultado e o objetivo</td>
                            </tr>
                            <tr>
                                <td>Avalia resultado e o problema</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <!-- Rodapé da página -->
        <footer>
            <div class="container">
                <div class="row centered">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p>
                        <a href="mailto:nicoledavilaa@gmail.com">nicoledavilaa@gmail.com</a>
                    </p>
                </div>
            </div>
        </footer>

        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="js/framework.js"></script>
        <!-- Script to Activate the Carousel -->
        <script>
        $('.carousel').carousel({
            interval: 500000 //changes the speed
        })
        </script>
    </body>
</html>      
