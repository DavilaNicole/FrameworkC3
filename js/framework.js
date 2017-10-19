/*!
 * JavaSprint - C3 Framework
 */

 // Tabela de Atividades Científicas
var tabAtiv = new Array();
// Tabela de Critérios Científicos
var tabCrit = new Array();

// Retorno da seleção do usuário
var fExploratoria;
var fExplicativa;
var fDescritiva;

var aQuantitativa;
var aQualitativa;

var mDsr;
var mBibliografico;
var mDocumental;
var mLevantamento;
var mPesquisaAcao;
var mPesquisaCampo;
var mEstudoCaso;

//Papéis
var donoPesquisa;
var orientadorPesquisa;
var timePesquisador;

// Prioridade no Backlog da Pesquisa
var prioridade;

// Variável auxiliar
var i = 0;

/*!
 * Carrega proposta do C3 Framework conforme formulário
 *
 */
 function carregarProposta() {

    exibe('proposta');
    if (tabAtiv.length == 0){
        carregarTodasAtividades();
    }

    carregarVariaveisForm();

    prioridade = 1;
    carregarAtividadesEtapa("E1");
    carregarAtividadesEtapa("E2");
    carregarAtividadesEtapa("E3");
    carregarAtividadesEtapa("E4");
    carregarAtividadesEtapa("E5");

    carregarCriterios();

}
/*!
 * Carregar variáveis do formulário
 *
 */

function carregarVariaveisForm(){
    var titulo = document.getElementById("titulo").value;
    document.getElementById("tituloproposta").innerHTML = titulo;

    donoPesquisa       = document.getElementById("pesquisadorPrincipal").value;
    orientadorPesquisa = document.getElementById("orientador").value;
    timePesquisador    = document.getElementById("outrospesquisadores").value;

    document.getElementById("exbDonoPesquisa").innerHTML = titulo;
    document.getElementById("exbOrientador").innerHTML = acc_orientador;
    document.getElementById("exbPesquisadores").innerHTML = acc_donoPesquisa + ", " + acc_timePesquisador;

    // Carrega informações sobre as características da pesquisa
    fExplicativa  = document.getElementById("cb-fin-explicativa").value;
    fExploratoria = document.getElementById("cb-fin-exploratoria").value;
    fDescritiva   = document.getElementById("cb-fin-descritiva").value;

    aQuantitativa  = document.getElementById("cb-abor-quan").value;
    aQualitativa   = document.getElementById("cb-abor-qual").value;

    mDsr           = document.getElementById("cb-met-dsr").checked;
    mBibliografico = document.getElementById("cb-met-bibliografica").checked;
    mDocumental    = document.getElementById("cb-met-documental").checked;
    mLevantamento  = document.getElementById("cb-met-levantamento").checked;
    mPesquisaacao  = document.getElementById("cb-pesquisaAcao").checked;
    mEstudocaso    = document.getElementById("cb-estudoCaso").checked;
    mPesquisacampo = document.getElementById("cb-pesquisaCampo").checked;

}

/*!
 * Carregar atividades científicas conforme etapa
 *
 */
function carregarAtividadesEtapa(etapa){
    for (var i=0;i<tabAtiv.length;i++) {
        if (tabAtiv[i].etapa == etapa){
            carregarAtividades(i);
        }
    }
}

/*!
 * Carrega uma atividade para a tabela do Backlog da Pesquisa
 *
 */
function carregarAtividades(i){
    // Se tipo genérico, inclui no backlog
    if (tabAtiv[i].tipo == "Genérico"){
        inserirLinhaBacklogPesquisa(i);
    }

    if (aQualitativa && tabAtiv[i].tipo  == "Abordagem Qualitativa"){
        inserirLinhaBacklogPesquisa(i);
    }
    if (aQuantitativa && tabAtiv[i].tipo == "Abordagem Quantitativa"){
        inserirLinhaBacklogPesquisa(i);
    }

    if ((mDsr            && tabAtiv[i].tipo == "Método DSR"           ) ||
        (mBibliografico  && tabAtiv[i].tipo == "Método Bibliografico" ) ||
        (mDocumental     && tabAtiv[i].tipo == "Método Documental"    ) ||
        (mLevantamento   && tabAtiv[i].tipo == "Método Levantamento"  ) ||
        (mPesquisaacao   && tabAtiv[i].tipo == "Método Pesquisa Ação" ) ||
        (mEstudocaso     && tabAtiv[i].tipo == "Método Estudo de Caso") ||
        (mPesquisacampo  && tabAtiv[i].tipo == "Método Pesquisa de campo")){
        inserirLinhaBacklogPesquisa(i);
    }
}

/*!
 * Insere linha na tabela
 *
 */
function inserirLinhaBacklogPesquisa(ind){

    var newRow = document.createElement('tr');
    newRow.insertCell(0).innerHTML = prioridade++;
    newRow.insertCell(1).innerHTML = tabAtiv[ind].atividade;
    newRow.insertCell(2).innerHTML = tabAtiv[ind].tipo;
    newRow.insertCell(3).innerHTML = tabAtiv[ind].etapa;
    document.getElementById("atvBacklog").appendChild(newRow);
}


/*!
 * Exibe seção
 *
 */
function exibe(id){
    if(document.getElementById(id).style.display=="none") {
        document.getElementById(id).style.display = "inline";
    } else {
        document.getElementById(id).style.display = "none";
    }

    if (document.getElementById("proposta").style.display == "inline"){
        document.getElementById("btnGerarProposta").disabled = true;
    }
}

/*!
 * Inicialliza divisão da proposta
 *
 */
function inicializarProposta(){


    document.getElementById("proposta").style.display = "none";
    document.getElementById("btnGerarProposta").disabled = false;

    limparBacklog("atvBacklog");

}
/*!
 * Inicializa a tabela do Backlog da Pesquisa
 *
 */
function limparBacklog(idTab){
    var linhas = document.getElementById(idTab).rows;
    var i = 0;
    console.log("Tamanho Linhas: " + linhas.length);
    for (i= linhas.length-1; i > -1; i--){
        console.log("Deleta: " + i);

        document.getElementById(idTab).deleteRow(i);
    }
}

/*!
 * Objeto - Atividade Científica
 */

function Objeto(etapa, atividade, tipo) {
  this.atividade  = atividade;
  this.tipo       = tipo;
  this.etapa      = etapa;
}

/*!
 * Carrega cada atividade científicas para tabela
 */
function populaAtv(etapa, atividade, tipo) {
  tabAtiv[i++] = new Objeto(etapa, atividade, tipo);
}
/*!
 * Carrega todas as atividades Científicas existentes
 */
function carregarTodasAtividades(){
    populaAtv("E1", "Escolher Tema",                          "Genérico");
    populaAtv("E1", "Definir contexto do assunto",            "Genérico");
    populaAtv("E1", "Delimitar escopo",                       "Genérico");
    populaAtv("E1", "Identificar problema",                   "Genérico");
    populaAtv("E1", "Formular problema",                      "Genérico");
    populaAtv("E1", "Extrair estado da arte do tema",         "Genérico");
    populaAtv("E1", "Delimitar escopo da pesquisa",           "Generico");
    populaAtv("E1", "Definir objetivo",                       "Generico");
    populaAtv("E1", "Coletar material em fontes primárias",   "Método Documental");
    populaAtv("E1", "Coletar material em fontes secundárias", "Método Bibliografico");
    populaAtv("E1", "Realizar observações do objeto",         "Mérodo Experimental");
    populaAtv("E1", "Realizar observações do objeto",         "Método Ex-post-facto");
    populaAtv("E1", "Estudar objeto",                         "Método Levantamento");
    populaAtv("E1", "Estudar objeto",                         "Método Pesquisa de Campo");
    populaAtv("E1", "Estudar objeto",                         "Método Estudo de Caso");

    populaAtv("E2", "Formalizar hipóteses",                   "Genérico");
    populaAtv("E2", "Identificar requisitos",                 "Método DSR");
    populaAtv("E2", "Identificar restrições",                 "Método DSR");
    populaAtv("E2", "Definir funcionalidades",                "Método DSR");
    populaAtv("E2", "Identificar critérios de aceitação",     "Método DSR");
    populaAtv("E2", "Definir técnicas para construção",       "Método DSR");
    populaAtv("E2", "Definir ferramentas para construção",    "Método DSR");
    populaAtv("E2", "Definir universo da coleta",             "Método Ex-Post-Facto");
    populaAtv("E2", "Definir universo da coleta",             "Método Levantamento");
    populaAtv("E2", "Definir universo da coleta",             "Método Pesquisa de Campo");
    populaAtv("E2", "Definir universo da coleta",             "Método Estudo de Caso");
    populaAtv("E2", "Definir critérios de amostragem",        "Método Ex-Post-Facto");
    populaAtv("E2", "Definir critérios de amostragem",        "Método Levantamento");
    populaAtv("E2", "Definir critérios de amostragem",        "Método Pesquisa de Campo");
    populaAtv("E2", "Definir critérios de amostragem",        "Método Estudo de Caso");
    populaAtv("E2", "Elaborar questionário",                  "Método Ex-Post-Facto");
    populaAtv("E2", "Elaborar questionário",                  "Método Levantamento");
    populaAtv("E2", "Elaborar questionário",                  "Método Pesquisa de Campo");
    populaAtv("E2", "Elaborar questionário",                  "Método Estudo de Caso");
    populaAtv("E2", "Elaborar entrevista",                    "Método Ex-Post-Facto");
    populaAtv("E2", "Elaborar entrevista",                    "Método Levantamento");
    populaAtv("E2", "Elaborar entrevista",                    "Método Pesquisa de Campo");
    populaAtv("E2", "Elaborar entrevista",                    "Método Estudo de Caso");
    populaAtv("E2", "Elaborar formulário",                    "Método Ex-Post-Facto");
    populaAtv("E2", "Elaborar formulário",                    "Método Levantamento");
    populaAtv("E2", "Elaborar formulário",                    "Método Pesquisa de Campo");
    populaAtv("E2", "Elaborar formulário",                    "Método Estudo de Caso");
    populaAtv("E2", "Definir forma de análise",               "Abordagem Quantitativa");
    populaAtv("E2", "Definir forma de análise",               "Abordagem Qualitativa");

    populaAtv("E3", "Construir artefato",                       "Método DSR");
    populaAtv("E3", "Manipular condições e observar os efeitos","Método Experimental");
    populaAtv("E3", "Realizar observações",                     "Método Ex-Post-Facto");
    populaAtv("E3", "Aplicar questionário",                     "Método Ex-Post-Facto");
    populaAtv("E3", "Aplicar questionário",                     "Método Levantamento");
    populaAtv("E3", "Aplicar questionário",                     "Método Pesquisa de Campo");
    populaAtv("E3", "Aplicar questionário",                     "Método Estudo de Caso");
    populaAtv("E3", "Aplicar formulário",                       "Método Ex-Post-Facto");
    populaAtv("E3", "Aplicar formulário",                       "Método Levantamento");
    populaAtv("E3", "Aplicar formulário",                       "Método Pesquisa de Campo");
    populaAtv("E3", "Aplicar formulário",                       "Método Estudo de Caso");
    populaAtv("E3", "Realizar entrevista",                      "Método Ex-Post-Facto");
    populaAtv("E3", "Realizar entrevista",                      "Método Levantamento");
    populaAtv("E3", "Realizar entrevista",                      "Método Pesquisa de Campo");
    populaAtv("E3", "Realizar entrevista",                      "Método Estudo de Caso");

    populaAtv("E4", "Elaborar instrumento de avaliação",        "Genérico");
    populaAtv("E4", "Aplicar instrumento de avaliação",         "Genérico");
    populaAtv("E4", "Avaliar critérios de aceitação",           "Genérico");
    populaAtv("E4", "Elaborar índice dos resultados",           "Método Ex-Post-Facto");
    populaAtv("E4", "Elaborar índice dos resultados",           "Método Levantamento");
    populaAtv("E4", "Elaborar índice dos resultados",           "Método Pesquisa de Campo");
    populaAtv("E4", "Elaborar índice dos resultados",           "Método Estudo de Caso");
    populaAtv("E4", "Elaborar tabelas/quadros",                 "Método Ex-Post-Facto");
    populaAtv("E4", "Elaborar tabelas/quadros",                 "Método Levantamento");
    populaAtv("E4", "Elaborar tabelas/quadros",                 "Método Pesquisa de Campo");
    populaAtv("E4", "Elaborar tabelas/quadros",                 "Método Estudo de Caso");
    populaAtv("E4", "Elaborar gráficos",                        "Método Ex-Post-Facto");
    populaAtv("E4", "Elaborar gráficos",                        "Método Levantamento");
    populaAtv("E4", "Elaborar gráficos",                        "Método Pesquisa de Campo");
    populaAtv("E4", "Elaborar gráficos",                        "Método Estudo de Caso");
    populaAtv("E4", "Elaborar cálculos estatísticos",           "Abordagem Quantitativa");
    populaAtv("E4", "Analisar resultados objetivamente",        "Abordagem Quantitativa");
    populaAtv("E4", "Analisar resultados subjetivamente",       "Abordagem Qualitativa");

    populaAtv("E5", "Avaliar objetivos atendidos",             "Genérico");
    populaAtv("E5", "Explicar aprendizagens",                  "Genérico");
    populaAtv("E5", "Extrair contribuições",                   "Genérico");
    populaAtv("E5", "Elaborar comunicação da pesquisa",        "Genérico");
}

// Inserir sugestão de Critérios Científicos
function inserirSugestaoCriterios(fase, criterio){

    var newRow = document.createElement('tr');
    newRow.insertCell(0).innerHTML = fase;
    newRow.insertCell(1).innerHTML = criterio;
    document.getElementById("tabCriteriosCientificos").appendChild(newRow);
}

// Carregar critérios sugeridos
function carregarCriterios(){
    inserirSugestaoCriterios("a", "b");

}
