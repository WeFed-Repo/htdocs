<h2>Simulatore PAC</h2>

<!-- HTML per sviluppo - inizio -->
<section>
    <p>
        <strong>Crea le tue simulazioni</strong> e scopri l'andamento storico di un capitale versato con un Piano di Accumulo in fondi (fino a 5). Usa <strong>una delle tre modalit&agrave; di &laquo;Selezione Fondi&raquo;</strong>: scegli fondo, importo, frequenza del versamento periodico e durata del Piano di Accumulo.</p>
</section>

<section>
    <h3>1. Selezione fondi</h3>
    <section>
        <h4>Scegli una modalit&agrave; di selezione fondi.</h4>
        <div class="form-group btnWrapper" id="btnRicGroup">
            <div class="btn-align-left">
                <a type="button" class="btn btn-primary" id="btnRicLib">Ricerca libera</a>
            </div>
            <div class="btn-align-left">
                <a type="button" class="btn btn-default" id="btnRicAss">Ricerca assistita</a>
            </div>
            <div class="btn-align-left">
                <a type="button" class="btn btn-default" id="btnTopSel">Top Selection</a>
            </div>
            <br class="clear">
        </div>
    </section>
    <div class="ricWrap">
        <div class="ricCont">
            <section class="ricFilter">
                <h4>Effettua una ricerca per parola chiave (es. codice ISIN, nome fondo)</h4>
                <form class="formGenerico borderFormRounded" role="form">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" id="ricLiberaAutocomplete" class="form-control clear-x">
                            </div>
                            <div class="col-sm-6">
                                <a id="submitRicLib" type="button" class="btn btn-primary btn-disabled" href="#!">ricerca</a>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
            <section id="ricLibRes" class="ricRes" style="display:none">
                <section>
                    <div class="tithelp">
                        <h4 id="ricLibTitle"></h4>
                        <div class="flRight">
                            <a href="#!" class="no-underline btn-icon" data-toggle="modal" data-target="#layerRating"><i class="icon icon-info_fill icon-2x"></i ></a><br class="clear">
                        </div>
                        <br class="clear">
                    </div>
                    <table id="tableRicLib" cellspacing="0" cellpadding="0" border="0" class="sortableTable" data-checkbox-header="false" data-maintain-selected="true">
                        <thead>
                            <tr>
                                <th data-field="nome" data-sortable="true" class="hidden-xs" data-formatter="pacRicerca.thNomeFormatter" data-rowspan="2">
                                    Nome Fondo</th>
                                <th data-field="casadigestione" data-sortable="true" class="hidden-xs" data-rowspan="2" data-width="120">
                                    Casa di Gestione</th>
                                <th data-field="nomecategoriabrating" data-sortable="true" class="hidden-xs" data-rowspan="2" data-width="120">
                                    Cat. Assogestione</th>
                                <th data-field="rating" data-sortable="true" class="hidden-xs" data-rowspan="2" data-width="75" data-formatter="pacRicerca.thRatingFormatter">
                                    Rating</th>
                                <th data-colspan="2" class="center colGroup">
                                    Rendimento</th>
                                <th data-sortable="false" class="center nodet" data-checkbox="true" data-rowspan="2">Seleziona</th>
                            </tr>
                            <tr>
                                <th class="right" data-field="perc1a" data-sortable="true" data-width="90" data-formatter="pacRicerca.thPercFormatter">
                                    a 1 anno</th>
                                <th class="right" data-field="perc5a" data-sortable="true" data-width="90" data-formatter="pacRicerca.thPercFormatter">
                                    a 5 anni</th>
                            </tr>
                        </thead>
                    </table>
                </section>
                <section>
                    <div class="form-group btnWrapper">
                        <div class="btn-align-right">
                            <a id="nextRicLib" type="button" class="btn btn-primary btn-disabled" href="#!">prosegui</a>
                        </div>
                        <br class="clear">
                    </div>
                </section>
            </section>
        </div>
        <div class="ricCont" style="display:none">
            <section class="ricFilter">
                <section>
                    <h4>Seleziona la Casa di Gestione</h4>
                    <div class="formGenerico borderFormRounded pad_bottom_0" role="form">
                        <div class="caseGest form-group last">
                            <div class="caseGestWrap selector-wrap selector-mini selector-casegestione" data-input-type="checkbox" data-input-name="selectCat">
                                <input id="selectCat" name="selectCat" type="hidden" value="">
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <h4>Seleziona la categoria</h4>
                    <div class="formGenerico borderFormRounded" role="form">
                        <div class="form-group last" id="btnCatGroup"></div>
                </section>
                <section>
                    <h4>Seleziona i proventi</h4>
                    <div class="formGenerico borderFormRounded" role="form">
                        <div class="form-group last">
                            <div class="row" id="btnProvGroup"></div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="form-group btnWrapper">
                        <div class="btn-align-right">
                            <a id="submitRicGui" type="button" class="btn btn-primary" href="#!">ricerca</a>
                        </div>
                        <br class="clear">
                    </div>
                </section>
            </section>
            <section id="ricGuiRes" class="ricRes" style="display:none">
                <hr class="spacer">
                <section>
                    <div class="tithelp">
                        <h4 id="ricGuiTitle"></h4>
                        <div class="flRight">
                            <a href="#!" class="no-underline btn-icon" data-toggle="modal" data-target="#layerRating"><i class="icon icon-info_fill icon-2x"></i ></a><br class="clear">
                        </div>
                        <br class="clear">
                    </div>
                    <table id="tableRicGui" cellspacing="0" cellpadding="0" border="0" class="sortableTable" data-checkbox-header="false" data-maintain-selected="true">
                        <thead>
                            <tr>
                                <th data-field="nome" data-sortable="true" class="hidden-xs" data-formatter="pacRicerca.thNomeFormatter" data-rowspan="2">
                                    Nome Fondo</th>
                                <th data-field="casadigestione" data-sortable="true" class="hidden-xs" data-rowspan="2" data-width="120">
                                    Casa di Gestione</th>
                                <th data-field="nomecategoriabrating" data-sortable="true" class="hidden-xs" data-rowspan="2" data-width="120">
                                    Cat. Assogestione</th>
                                <th data-field="rating" data-sortable="true" class="hidden-xs" data-rowspan="2" data-width="75" data-formatter="pacRicerca.thRatingFormatter">
                                    Rating</th>
                                <th data-colspan="2" class="center colGroup">
                                    Rendimento</th>
                                <th data-sortable="false" class="center nodet" data-checkbox="true" data-rowspan="2">Seleziona</th>
                            </tr>
                            <tr>
                                <th class="right" data-field="perc1a" data-sortable="true" data-width="90" data-formatter="pacRicerca.thPercFormatter">
                                    a 1 anno</th>
                                <th class="right" data-field="perc5a" data-sortable="true" data-width="90" data-formatter="pacRicerca.thPercFormatter">
                                    a 5 anni</th>
                            </tr>
                        </thead>
                    </table>
                </section>
                <section>
                    <div class="form-group btnWrapper">
                        <div class="btn-align-right">
                            <a id="nextRicGui" type="button" class="btn btn-primary btn-disabled" href="#!">prosegui</a>
                        </div>
                        <br class="clear">
                    </div>
                </section>
            </section>
        </div>
        <div class="ricCont" style="display:none">
            <section id="topSelRes" class="ricRes" style="display:none">
            	<section>
                    <p>Scegli fino a 5 fondi della &laquo;<strong>Top Selection</strong>&raquo;, la selezione di fondi
                        e Sicav, collocati da Webank, con il <strong>migliore rapporto rischio/rendimento</strong>.</p>
                    <div class="tithelp">
                        <div class="flRight">
                            <a href="#!" class="no-underline btn-icon" data-toggle="modal" data-target="#layerRatingRischio"><i class="icon icon-info_fill icon-2x"></i ></a><br class="clear">
                        </div>
                        <br class="clear">
                    </div>
	                <table id="tableTopSel" cellspacing="0" cellpadding="0" border="0" class="sortableTable" data-checkbox-header="false" data-maintain-selected="true">
	                    <thead>
	                        <tr>
	                            <th data-rowspan="2" class="left" data-field="nome" data-sortable="true" data-formatter="pacRicerca.thNomeFormatter">
	                                Nome Fondo</th>
	                            <th data-colspan="2" class="center colGroup">
	                                Rendimento</th>
	                            <th data-rowspan="2" class="left" data-field="rischio" data-sortable="true" data-width="145" data-formatter="pacRicerca.thProfRisFormatter">
	                                Profilo di rischio e di rendimento</th>
	                            <th data-rowspan="2" class="left" data-field="rating" data-sortable="true" data-width="75" data-formatter="pacRicerca.thRatingFormatter">
	                                Rating</th>
	                            <th data-rowspan="2" data-sortable="false" class="center nodet" data-checkbox="true">Seleziona</th>
	                        </tr>
	                        <tr>
	                            <th class="right" data-field="perc1a" data-sortable="true" data-width="90" data-formatter="pacRicerca.thPercFormatter">
	                                a 1 anno</th>
	                            <th class="right" data-field="perc5a" data-sortable="true" data-width="90" data-formatter="pacRicerca.thPercFormatter">
	                                a 5 anni</th>
	                        </tr>
	                    </thead>
	                </table>
            	</section>
	            <section>
	                <div class="form-group btnWrapper">
	                    <div class="btn-align-right">
	                        <a id="nextTopSel" type="button" class="btn btn-primary btn-disabled" href="#!">prosegui</a>
	                    </div>
	                    <br class="clear">
	                </div>
	            </section>
            </section>
        </div>
    </div>
</section>

<a href="/webankpri/wbOnetoone/2l/do/wbOnetoone/schedaPrivata.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=LANDINGPAGE-1320417316993" title="Commizzioni Zero%"><img src="/wscmn/fe/img/bnr_commissioni0.jpg" alt="Commizzioni Zero%" title="Commizzioni Zero%" style="width:100%;"></a>
<br><br><br>
<hr>
<section>
    <div id="fesDisclaimer" class="note"></div>
</section>

<form id="showFondo" action="" method="POST" style="display:none">
    <!-- Preimpostati -->
    <input type="hidden" name="OBSCNT" value="FNZ_NAV">
    <input type="hidden" name="OBSKEY" value="nav_priv_wbx_acquisto">
    <input type="hidden" name="tabId" value="nav_priv_wbx_investimenti">

    <!-- Da valorizzare -->
    <input type="hidden" id="divisa" name="divisa" value="">
    <input type="hidden" id="fondosicav" name="fondosicav" value="">
    <input type="hidden" id="rand" name="rand" value="">
    <input type="hidden" id="codicesocieta" name="codicesocieta" value="">
    <input type="hidden" id="codicecomparto" name="codicecomparto" value="">
    <input type="hidden" id="codicefida" name="codicefida" value="">

    <!-- Da farsi ritornare per ripristinare lo stato attuale -->
    <input type="hidden" id="JSON" name="JSON" value="">
</form>
<form id="showSimPac" action="" method="POST" style="display:none">
    <!-- Da valorizzare -->
    <input type="hidden" id="codicifida" name="codicifida" value="">
</form>

<div class="modal fade slide-right" id="layerTopSel1" tabindex="-1" role="dialog" aria-labelledby="labelTopSel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" data-target="#layerTopSel2" data-toggle="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="labelTopSel1">Top Selection</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>
                                Investire in fondi comuni d'investimento e/o comparti di sicav pu&ograve; risultare molto complicato dato l'elevato numero e la diversa tipologia di prodotti offerti sul mercato.<br>
                                Per orientarsi nell'offerta dei prodotti collocati da Webank il Cliente pu&ograve; fare riferimento alle Soluzioni Guidate denominate <i>"Top Selection"</i> e <i>"Portafogli Modello"</i>, differenziate su 5 profili di investimento di utilizzo pi&ugrave; comune (difensivo, prudente, moderato, attivo, dinamico) che tengono genericamente conto dei rischi, dei rendimenti attesi e dell'orizzonte temporale degli investimenti.<br>
                                Le selezioni dei fondi comuni d'investimento e/o comparti di Sicav presenti nelle Soluzioni Guidate <strong>non costituiscono una raccomandazione o un consiglio personalizzato di investire nei singoli fondi comuni d'investimento e/o comparti di sicav</strong>, in quanto si tratta di mere indicazioni che si basano su criteri di carattere oggettivo e, per tale ragione, generiche e non riconducibili alle specifiche caratteristiche del singolo investitore.<br>
                                Il cliente &egrave; consapevole che il servizio Webank e tutte le funzionalit&agrave; ad esso connesse sono offerti dalla banca esclusivamente tramite tecniche di comunicazione a distanza (<i>online</i>), a cui <strong>non &egrave; in alcun caso associato il servizio di consulenza</strong> come definito dall'articolo 1, comma <i>5-septies</i> del D. Lgs. 58/98 (TUF).<br>
                                Si ricorda che, prima dell'adesione, occorre sempre <strong>leggere attentamente la documentazione d'offerta</strong> disponibile sul sito.<br>
                                L'investimento in fondi e/o comparti di Sicav non garantisce sempre e comunque un rendimento, pertanto chi investe in tali strumenti finanziari potrebbe non ottenere la restituzione dell'intero capitale versato. I rendimenti passati dei singoli fondi e/o comparti di sicav non sono indicativi di quelli futuri. Con riguardo agli strumenti finanziari quotati sul mercato, il rendimento pu&ograve; variare nel tempo anche in funzione del prezzo di negoziazione sul mercato. Per informazioni in merito ai servizi di investimento e agli strumenti finanziari consultare l'Informativa preliminare MiFID.<br>
                                <span class="note">
                                Il cliente pu&ograve; scegliere se proseguire o meno nell'utilizzo delle Soluzioni Guidate e, in caso affermativo, accetta il rischio di operare autonomamente di propria iniziativa effettuando investimenti che potrebbero non essere adeguati al proprio profilo di rischio.</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group btnWrapper">
                    <div class="btn-align-right">
                        <a type="button" class="btn btn-primary btnTopSelOK" id="">accetto</a>
                    </div>
                    <div class="btn-align-right">
                        <a type="button" class="btn btn-primary" data-dismiss="modal" data-target="#layerTopSel2" data-toggle="modal">non accetto</a>
                    </div>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade slide-right" id="layerTopSel2" tabindex="-1" role="dialog" aria-labelledby="labelTopSel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon btnTopSelKO" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="labelTopSel2">Top Selection</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Se non accetti non potrai accedere a questa sezione del sito.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group btnWrapper">
                    <div class="btn-align-right">
                        <a type="button" class="btn btn-primary btnTopSelOK" data-dismiss="modal">accetto</a>
                    </div>
                    <div class="btn-align-right">
                        <a type="button" class="btn btn-primary btnTopSelKO" data-dismiss="modal">non accetto</a>
                    </div>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade slide-right" id="layerError" tabindex="-1" role="dialog" aria-labelledby="labelError">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="labelError"></h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <p id="errorMsg"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="layerRating" tabindex="-1" role="dialog" aria-labelledby="labelRating">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="labelRating">Rating</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Il <strong>rating</strong> &egrave; un <strong>giudizio sintetico</strong>, rappresentato su una scala da 1 a 5 &quot;corone&quot;, attribuito da BRating ai prodotti di risparmio gestito (fondi e Sicav).<br>
                            Il procedimento parte dall'<strong>analisi qualitativa</strong> delle caratteristiche d'<strong>investimento</strong> per giungere a una valutazione <strong>quantitativa</strong> basata sulla posizione del singolo <strong>fondo</strong> nella categoria di appartenenza, ordinata sulla base di parametri di rendimento e rischio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="layerRatingRischio" tabindex="-1" role="dialog" aria-labelledby="labelRatingRischio">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="labelRatingRischio">Rating e Profilo di rischio</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Rating</h4>
                            <p>Il <strong>rating</strong> &egrave; un <strong>giudizio sintetico</strong>, rappresentato su una scala da 1 a 5 &quot;corone&quot;, attribuito da BRating ai prodotti di risparmio gestito (fondi e Sicav).<br>
                            Il procedimento parte dall'<strong>analisi qualitativa</strong> delle caratteristiche d'<strong>investimento</strong> per giungere a una valutazione <strong>quantitativa</strong> basata sulla posizione del singolo <strong>fondo</strong> nella categoria di appartenenza, ordinata sulla base di parametri di rendimento e rischio.</p>
                            <h4>Profilo di rischio</h4>
                            <p>Il profilo di rischio e di rendimento del fondo espresso &egrave; su una scala da 1 a 7 riportato nella documentazione d'offerta (KIID - Informazione Chiave per l'Investitore).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HTML per sviluppo - fine -->

<script type="text/javascript">
var isLibrerie = true,
    ricJsonOptions = {
        /* Ricerca libera */
        ricLib: {
            "btnCat": "btnRicLib",
            "ricParams": {
                "isin": ""
            },
            "selectedVals": ["INVE0009", "PSEURBO", "INGCBYA"]
        },
        /* Ricerca guidata */
        ricGui: {
            "btnCat": "btnRicAss",
            "ricParams": {
                "codSocieta": "20,110,130,190",
                "macroCat": "2",
                "dividendi": "0"
            },
            "selectedVals": ["PSEURBO", "INGCBYAH", "INVF02"]
        },
        /* Config top selection */
        topSel: {
            "btnCat": "btnTopSel",
            "ricParams": {},
            "selectedVals": ["MGGROA", "MGRECA"]
        },
        /* Config di default */
        default: null
    }
    ricJson = ricJsonOptions.default,
    fesConfig = {
        "dividendi": {
            "1": {
                "nome": "Con Dividendi"
            },
            "0": {
                "nome": "Senza Dividendi"
            }
        },
        "codSocieta": {
            <?php virtual("/librerie/include/commons/ajax/fes/obj_societa_gestione.php"); ?>
        },
        "macroCat": {
            "6": {
                "nome": "Altri"
            },
            "1": {
                "nome": "Azionari"
            },
            "165": {
                "nome": "Bilanciati"
            },
            "164": {
                "nome": "Flessibili"
            },
            "8": {
                "nome": "Monetari"
            },
            "2": {
                "nome": "Obbligazionari"
            }
        },
        "codRating": {
        "5": {
            "nome": "5 corone"
        },
        "4": {
            "nome": "4 corone"
        },
        "3": {
            "nome": "3 corone"
        },
        "2": {
            "nome": "2 corone"
        },
        "1": {
            "nome": "1 corone"
        },
        "0": {
            "nome": "0 corone"
        }
    }
};
// Dati per Tabella Top Selection
var topSelConfig = {
    "data": [{
        "codicefida": "MGAMAXD",
        "codicesocieta": "135",
        "codiceisin": "GB00B1RXYR32",
        "rischio": "3",
        "perc5a": "80.8868",
        "perc1a": "-5.5762",
        "nome": "M&G North American Dividend A $",
        "rating": "3",
        "codicecomparto": "MA024"
    }, {
        "codicefida": "MGGGRA",
        "codicesocieta": "135",
        "codiceisin": "GB00B3K51G86",
        "rischio": "2",
        "perc5a": "49.3343",
        "perc1a": "-8.2115",
        "nome": "M&G Global Select A $",
        "rating": "3",
        "codicecomparto": "MA029"
    }, {
        "codicefida": "MGAMAX",
        "codicesocieta": "135",
        "codiceisin": "GB0030926959",
        "rischio": "7",
        "perc5a": "80.0788",
        "perc1a": "-5.4924",
        "nome": "M&G North American Dividend A EUR",
        "rating": "3",
        "codicecomparto": "MA001"
    }, {
        "codicefida": "MGEUAX",
        "codicesocieta": "135",
        "codiceisin": "GB0030928997",
        "rischio": "5",
        "perc5a": "42.4705",
        "perc1a": "-10.2934",
        "nome": "M&G European Select A EUR",
        "rating": "2",
        "codicecomparto": "MA005"
    }, {
        "codicefida": "MGGROA",
        "codicesocieta": "135",
        "codiceisin": "GB0030938145",
        "rischio": "4",
        "perc5a": "48.7917",
        "perc1a": "-8.1276",
        "nome": "M&G Global Select A EUR",
        "rating": "3",
        "codicecomparto": "MA014"
    }, {
        "codicefida": "MGJAX",
        "codicesocieta": "135",
        "codiceisin": "GB0030938582",
        "rischio": "3",
        "perc5a": "76.731",
        "perc1a": "-16.2461",
        "nome": "M&G Japan A EUR",
        "rating": "4",
        "codicecomparto": "MA016"
    }, {
        "codicefida": "MGJSMAX",
        "codicesocieta": "135",
        "codiceisin": "GB0030939119",
        "rischio": "1",
        "perc5a": "134.7118",
        "perc1a": "-5.2964",
        "nome": "M&G Japan Smaller Companies A EUR",
        "rating": "4",
        "codicecomparto": "MA018"
    }, {
        "codicefida": "MGUKGA",
        "codicesocieta": "139",
        "codiceisin": "GB00B23X9910",
        "rischio": "6",
        "perc5a": "49.2163",
        "perc1a": "-16.5155",
        "nome": "M&G UK Select A EUR",
        "rating": "2",
        "codicecomparto": "ME001"
    }, {
        "codicefida": "MGRECA",
        "codicesocieta": "136",
        "codiceisin": "GB0032139684",
        "rischio": "6",
        "perc5a": "12.4321",
        "perc1a": "-19.296",
        "nome": "M&G Recovery A EUR",
        "rating": "1",
        "codicecomparto": "MB007"
    }, {
        "codicefida": "MGAMAXH",
        "codicesocieta": "135",
        "codiceisin": "GB00B2QWD268",
        "rischio": "6",
        "perc5a": "39.2561",
        "perc1a": "-3.2732",
        "nome": "M&G North American Dividend AH EUR",
        "rating": "2",
        "codicecomparto": "MA023"
    }]
};
</script>

<script type="text/javascript" src="/wscmn/fe/js/priv_fes_pac_ricerca.js"></script>

<script type="text/javascript">
$(function() {
    if (!is4s && $("#fesDisclaimer").length) {
        $.ajax({
            url: "/wscmn/html/SimulPac_Disclaimer.html?rand=" + Math.random(),
            dataType: "html",
            success: function(data) {
                $("#fesDisclaimer").append(data);
            }
        });
    }
});
</script>