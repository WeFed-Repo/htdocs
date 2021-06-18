<script>
//funzione di apertura layer
$(function() {

resizeTab('secondTab2',0);
    //al click vado a popolare l'overlayer relativo alla sicav selezioanta
    $('.selector-box').each(function(index){
        $(this).click(function(index) {
           /*definisco i vari componenti */
           var indexSelected = $('input[name=selectBoxes]').val(),
                wrapOuterSelected = $("#detailSicavWrapper").find('.detailSicav[data-detail-index=' + indexSelected +']'),
                h2DetSelected =    wrapOuterSelected.find('h2').html(),
                tabFDetSelected =  wrapOuterSelected.find('.contentInfo').html(),
                tabSDetSelected =  wrapOuterSelected.find('.contentDoc').html(),
                btnDetSelected =   wrapOuterSelected.find('.footerBtn').html(),
                h2Overl = $('#layerSicav h2'),
                wrapOverl = $('#layerSicav .tab-wrap'),
                footOverl = $('#layerSicav .modal-footer');
            /*popolo l'overlayer */
            h2Overl.html(h2DetSelected);
            wrapOverl.eq(0).html(tabFDetSelected);
            wrapOverl.eq(1).html(tabSDetSelected);
            footOverl.html(btnDetSelected);
            /*apro l'overlayer */
            $('#layerSicav').modal('show');
            $('#layerSicav').on('hidden.bs.modal', function (e) {
                /*svuoto l'overlayer */
                $(h2Overl).empty();
                $(wrapOverl).empty();
                $(footOverl).empty();
                $(this).find('.tabWrapper li:first-child a').trigger('click');
                /*deseleziono*/
                $('input[name=selectBoxes]').val('');
                $('.selector-box').removeClass('selected');
            })

       })
    })
    })
</script>

<h2>La nostra offerta</h2>

<!-- BANNER DINAMICO -->
<div id="dynBanner" class="loading"></div>
<script type="text/javascript">
    $(function() { $.getScript("/common/fe/js/banner_dinamico.js?rel="+Math.random())});
</script>
<!-- FINE BANNER DINAMICO -->


<!--TOP BANNER VIA CONTENT IMG RESPONSIVE RIDIMENSIONABILE -->
<div class="topbanner">
	<a href="#"><img src="/wscmn/fe/img/placeholder_banner.png" alt="" title="" class="img-resp"></a>
</div>
<section>
<!--INSERIRE TESTO PER SPIEGARE CHE AL CLICK SU OGNI ELEMENTO SI APRONO I DETTAGLI -->
<p>Un'offerta  di qualità con <strong>oltre 3.000 Fondi e Sicav di  Case di Gestione,  protagoniste del risparmio gestito,</strong>  selezionate per  solidità , esperienza  e  specializzazione.  Un’ampia offerta  per  un servizio all'altezza delle tue aspettative.<br><strong>Clicca sulle icone per maggiori dettagli sulle  Case di Gestione</strong></p>


<form class="formGenerico borderFormRounded formCaseGestione" role="form">
      <!-- pannello selettore -->
        <div class="selector-wrap selector-auto selector-casegestione" data-input-type="radio" data-input-name="selectBoxes" id="listFondi">
            <input name="selectBoxes" type="hidden" value="">
            <div class="row">
               <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="0" title="Allianz Global Investors Lux."><img src="/common/fe/img/lgsoc_allianz.png" class="img-resp"></div>
				</div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="1" title="Amundi Funds"><img src="/common/fe/img/lgsoc_amundi.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="2" title="Anima Asset Management ltd"><img src="/common/fe/img/lgsoc_prima_new.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="3" title="Anima Sgr Spa"><img src="/common/fe/img/lgsoc_anima_new.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="4" title="BlackRock (Luxembourg) S.A."><img src="/common/fe/img/lgsoc_blackrock.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="5" title="Carmignac Gestion"><img src="/common/fe/img/lgsoc_carmignac_fondi.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="6" title="Carmignac Portfolio Sicav"><img src="/common/fe/img/lgsoc_carmignac_port.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="7" title="Columbia Threadneedle"><img src="/common/fe/img/lgsoc_threadneedle.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="8" title="Deutsche Asset & Wealth Man.e"><img src="/common/fe/img/lgsoc_dws.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="9" title="Epsilon Sgr Spa"><img src="/common/fe/img/lgsoc_epsilon.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="10" title="Etica Sgr Spa"><img src="/common/fe/img/lgsoc_etica.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="11" title="Eurizon Capital Sgr Spa"><img src="/common/fe/img/lgsoc_eurizon.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="12" title="Fidelity Investments Lux. S.A."><img src="/common/fe/img/lgsoc_fidelity.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="13" title="GAM I.M. Ltd-Julius Baer Funds"><img src="/common/fe/img/lgsoc_jb.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="14" title="HSBC Global Investment Funds"><img src="/common/fe/img/lgsoc_hsbc.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="15" title="Invesco Fund"><img src="/common/fe/img/lgsoc_invesco.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="16" title="JPMorgan Funds"><img src="/common/fe/img/lgsoc_jpmorganam.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="17" title="JPMorgan Investment Funds"><img src="/common/fe/img/lgsoc_jpminv.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="18" title="Janus Capital Funds plc"><img src="/common/fe/img/lgsoc_janus.png" class="img-resp"></div>
                </div>
                 <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="19" title="Legg Mason Global Asset Management"><img src="/common/fe/img/lgsoc_legg_mason.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="20" title="Lombard Odier Funds"><img src="/common/fe/img/lgsoc_lombard_odier.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="21" title="M&G Global"><img src="/common/fe/img/lgsoc_mg.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="22" title="Morgan Stanley Investment Fund"><img src="/common/fe/img/lgsoc_morganstanley.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="22" title="Muzinich & Co."><img src="/common/fe/img/lgsoc_muzinich.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="23" title="NN(L) Investment Funds"><img src="/common/fe/img/lgsoc_nn.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="23" title="Nordea"><img src="/common/fe/img/lgsoc_nordea.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="24" title="Pictet Funds (Europe) S.A."><img src="/common/fe/img/lgsoc_pictet.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="25" title="Pimco Funds Gl.Inv. Series Plc"><img src="/common/fe/img/lgsoc_pimco.png" class="img-resp"></div>
                </div>
                <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="26" title="Raiffeisen capital management"><img src="/common/fe/img/lgsoc_raffeisen.png" class="img-resp"></div>
                </div>
                 <div class="col-sm-2 col-xs-4 align-center">
                    <div class="selector-box " data-value="27" title="Schroder Int. Selection Fund"><img src="/common/fe/img/lgsoc_schroders.png" class="img-resp"></div>
                </div>
            </div>
        </div>
</form>
 <!-- fine pannello selettori -->
<!--HTML DELL'overlayer -->
<div class="modal fade" id="layerSicav" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel"></h2>
            </div>
            <div class="modal-body">
                <div class="navContSecondLev" id="secondTab2">
                <div class=" outerTab">
                    <ul class="tabWrapper tabflex hidden-xs">
                        <li class=""><a href="#heading1b">Info</a></li>
                        <li class=""><a href="#heading2b">Documentazione legale</a></li>
                    </ul>
                </div>
                <div class="separator"></div>
                <div class="panel-group panel-fill" id="accordion2" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading visible-xs" role=" tab"="" id="heading1b">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b" aria-expanded="false" aria-controls="collapse1b" class="collapsed">Info<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                            </h4>
                        </div>
                        <div id="collapse1b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1b">
                            <div class="panel-body scroll-body">
                                <div class="tab-wrap">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading visible-xs" role=" tab"="" id="heading2b">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b" aria-expanded="false" aria-controls="collapse2b" class="collapsed">Documentazione legale<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                            </h4>
                        </div>
                        <div id="collapse2b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2b">
                            <div class="panel-body scroll-body">
                                <div class="tab-wrap">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!--HTML DETTAGLI DA INSERIRE NEI MODALI-->
 <div id="detailSicavWrapper" style="display:none">
    <div class="detailSicav" data-detail-index="0">
        <div class="wrapperToappend">

            <!--CONTENUTO SICAV -->
            <h2>Allianz</h2>
            <div class="contentInfo">
                <p><strong>Allianz Global Investors (AllianzGI)</strong>, gestore del Gruppo Allianz SE si avvale di oltre 510 professionisti degli investimenti in tutto il mondo, di cui più di 290 in Europa, oltre 110 negli Stati Uniti e circa 110 in Asia Pacific con attivi in gestione  pari a 345mld €(*).</p><p><strong>L'importanza di essere informati</strong>- Forti della convinzione che la conoscenza e l'informazione siano fattori chiave del proprio successo, <strong>AllianzGI</strong> attribuisce un'importanza fondamentale al valore della ricerca ed alla condivisione del capitale intellettuale al proprio interno. Integrata con la Ricerca Fondamentale, un'altra importante fonte di conoscenza è Grassroots Research, la ricerca investigativa proprietaria, che unisce il lavoro di oltre 65 giornalisti e 300 ricercatori sul campo, che ogni anno conducono più di 360 studi aziendali e di settore. Il fattore umano e la ricerca proprietaria sono per <strong>AllianzGI</strong> un'opportunità per approfondire i fattori specifici e culturali di ogni paese consentendo una chiara visione su tematiche di interesse.</p><p><strong>Il Team &amp; la Filosofia d'Investimento</strong>- I Team di Gestione si distinguono per l'approccio imprenditoriale e la conoscenza capillare dei mercati nei quali investono e nei quali sono presenti i gestori. <strong>AllianzGI</strong> gestisce i portafogli con l'obiettivo di produrre performance solide e durature nel tempo, attraverso un processo d'investimento disciplinato e strutturato. In tutte le strategie d'investimento, il contributo intellettuale e la ricerca di <strong>AllianzGI</strong> rappresentano il vero vantaggio competitivo e la chiave di successo per conseguire performance.</p>
                 Fonte: (*)<a class="linkFonte" href="http://www.allianzgi.it" target="_blank">AllianzGI</a> dati aggiornati al 31-12-2013
            </div>
            <div class="contentDoc">
                <ul class="documenti">
                    <li><a href="javascript:;" class="btn-icon" onclick="javascript:window.open('/wscmn/doc/ret/AGIF_prospetto_semplificato.pdf');" class="colorBank"><i class="icon icon icon-pdf_circle_filled"></i><span>Allianz Global Investors Fund: Informazione chiave per l'investitore (KIID), Modulo di sottoscrizione e Allegato</span></a></li>
                    <li><a href="javascript:;" class="btn-icon" onclick="javascript:window.open('/wscmn/doc/ret/AGIF_prospetto_informativo.pdf');" class="colorBank"><i class="icon icon icon-pdf_circle_filled"></i><span>Allianz Global Investors Fund: Prospetto informativo</span></a></li>
                    <li><a href="javascript:;" class="btn-icon" onclick="javascript:window.open('/wscmn/doc/ret/AGIF_relazione_annuale.pdf');" class="colorBank"><i class="icon icon icon-pdf_circle_filled"></i><span>Allianz Global Investors Fund: Relazione annuale</span></a></li>
                    <li><a href="javascript:;" class="btn-icon" onclick="javascript:window.open('/wscmn/doc/ret/AGIF_relazione_semestrale.pdf');" class="colorBank"><i class="icon icon icon-pdf_circle_filled"></i><span>Allianz Global Investors Fund: Relazione semestrale</span></a></li>
                    <li><a href="javascript:;" class="btn-icon" onclick="javascript:window.open('/wscmn/doc/ret/AGIF_statuto.pdf');" class="colorBank"><i class="icon icon icon-pdf_circle_filled"></i><span>Allianz Global Investors Fund: Statuto</span></a></li>
                    <li><a href="javascript:;" class="btn-icon" onclick="javascript:window.open('/wscmn/doc/ret/AGIF_soggetti.pdf');" class="colorBank"><i class="icon icon icon-pdf_circle_filled"></i><span>Allianz Global Investors Fund: Elenco soggetti collocatori</span></a></li>
                </ul>
            </div>
            <div class="footerBtn">
                <div class="btn-align-center">
                    <a type="button" class="btn btn-primary" id="btnInvio">Compra un fondo <span class="hidden-xs">di Allianz Global Investors Lux.</span></a>
                    <br class="clear">
                </div>
            </div>
             <!--FINE CONTENUTO SICAV -->
        </div>
    </div>
    <div class="detailSicav" data-detail-index="1">
        <div class="wrapperToappend">
            <h2>Amundi Funds</h2>
            <div class="contentInfo">
                testi Amundi
            </div>
             <div class="contentDoc">
                doc Amundi
            </div>
            <div class="footerBtn">
                <div class="btn-align-center">
                    <a type="button" class="btn btn-primary" id="btnInvio">Compra un fondo<span class="hidden-xs"> di Amundi Funds</span></a>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="detailSicav" data-detail-index="2">
        <div class="wrapperToappend">
            <h2>Anima Asset Management ltd</h2>
            <div class="contentInfo">
                testi Anima Asset Management ltd
            </div>
             <div class="contentDoc">
                doc Anima Asset Management ltd
            </div>
             <div class="footerBtn">
                <div class="btn-align-center">
                    <a type="button" class="btn btn-primary" id="btnInvio">Compra un fondo di Anima Asset Management ltd</a>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="detailSicav" data-detail-index="3">
        <div class="wrapperToappend">
            <h2>Anima Sgr Spa</h2>
            <div class="contentInfo">
                testi Anima Sgr Spa
            </div>
             <div class="contentDoc">
                doc Anima Sgr Spa
            </div>
             <div class="footerBtn">
                <div class="btn-align-center">
                    <a type="button" class="btn btn-primary" id="btnInvio">Compra un fondo di Anima Sgr Spa</a>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="detailSicav" data-detail-index="4">
        <div class="wrapperToappend">
            <h2>BlackRock (Luxembourg) S.A.</h2>
            <div class="contentInfo">
                testi BlackRock (Luxembourg) S.A.
            </div>
             <div class="contentDoc">
                doc BlackRock (Luxembourg) S.A.
            </div>
            <div class="footerBtn">
                <div class="btn-align-center">
                    <a type="button" class="btn btn-primary" id="btnInvio">Compra un fondo di BlackRock (Luxembourg) S.A.</a>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="detailSicav" data-detail-index="5">
        <div class="wrapperToappend">
            <h2>Carmignac Gestion</h2>
            <div class="contentInfo">
                testi Carmignac Gestion
            </div>
             <div class="contentDoc">
                doc Carmignac Gestion
            </div>
            <div class="footerBtn">
                <div class="btn-align-center">
                    <a type="button" class="btn btn-primary" id="btnInvio">Compra un fondo di Carmignac Gestion</a>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="detailSicav" data-detail-index="6">
        <div class="wrapperToappend">
            <h2>Carmignac Portfolio Sicav</h2>
            <div class="contentInfo">
                testi Carmignac Portfolio Sicav
            </div>
             <div class="contentDoc">
                doc Carmignac Portfolio Sicav
            </div>
             <div class="footerBtn">
                <div class="btn-align-center">
                    <a type="button" class="btn btn-primary" id="btnInvio">Compra un fondo di Carmignac Portfolio Sicav</a>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="detailSicav" data-detail-index="7">
        <div class="wrapperToappend">
            <h2>Columbia Threadneedle</h2>
            <div class="contentInfo">
                testi Columbia Threadneedle
            </div>
             <div class="contentDoc">
                doc Columbia Threadneedle
            </div>
             <div class="footerBtn">
                <div class="btn-align-center">
                    <a type="button" class="btn btn-primary" id="btnInvio">Compra un fondo di Columbia Threadneedle</a>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="detailSicav" data-detail-index="8">
        <div class="wrapperToappend">
            <h2>Deutsche Asset & Wealth Man.</h2>
            <div class="contentInfo">
                testi Deutsche Asset & Wealth Man.
            </div>
             <div class="contentDoc">
                doc Deutsche Asset & Wealth Man.
            </div>
            <div class="footerBtn">
                <div class="btn-align-center">
                    <a type="button" class="btn btn-primary" id="btnInvio">Compra un fondo di Deutsche Asset & Wealth Man.</a>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="detailSicav" data-detail-index="9">
        <div class="wrapperToappend">
            <h2>Epsilon Sgr Spa</h2>
            <div class="contentInfo">
                testi Epsilon Sgr Spa
            </div>
             <div class="contentDoc">
                doc Epsilon Sgr Spa
            </div>
             <div class="footerBtn">
                <div class="btn-align-center">
                    <a type="button" class="btn btn-primary" id="btnInvio">Compra un fondo  di Epsilon Sgr Spa</a>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<?php /*
<!--BOX BOTTOM -->
<section>
    <div class="row noMargin">
        <div class="col-sm-12  nostraOffertaTop">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Semplifica il tuo modo di investire</h2>
                    <p>La <strong>soluzione su misura per te</strong>, pensata per farti cogliere le <strong>migliori opportunità</strong> di investimento nell'ampia gamma di fondi delle migliori Case di Gestione offerta da Webank.<br>
                    <strong>Scopri i servizi esclusivi a tua disposizione:</strong></p>
                </div>
            </div>
            <div class="row nostraOffertaTabs">
                <div class="col-sm-6 nostraOffertaTab align-center">
                    <div class="inner">
                        <h3>Soluzioni Guidate</h3>
                        <div class="iconeTabWrapper">
                            <span class="glyph glyph-top_selection"></span>
                            <span class="glyph glyph-portafoglio_modello"></span>
                        </div>
                        <p>Orientarti nella scelta dei migliori Fondi e Sicav per costruirti un <strong>portafoglio diversificato o investire in un singolo fondo</strong> diventa pi&ugrave;<strong>semplice</strong> grazie agli strumenti esclusivi a tua disposizione.</p>
                        <div class="btn-align-center">
                            <a type="button" class="btn btn-primary" id="">scopri le soluzioni</a>
                            <br class="clear">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 nostraOffertaTab align-center">
                    <h3>Soluzione Self</h3>
                    <div class="iconeTabWrapper">
                        <span class="glyph glyph-ricerca_confronta"></span>
                    </div>
                    <p><strong>A tua disposizione i migliori strumenti innovativi</strong> ed <strong>evoluti, informazioni approfondite</strong>, schede di dettaglio sempre aggiornate su Case di Gestione, Fondi e Sicav. Costruisci in piena <strong>autonomia</strong> il tuo portafoglio.</p>
                    <div class="btn-align-center">
                        <a type="button" class="btn btn-primary" id="">scopri le soluzioni</a>
                        <br class="clear">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
*/ ?>
<section>
    <div class="row">
        <div class="col-sm-12">
            <img src="/wscmn/fe/img/placeholder_banner.png" alt="" title="" class="img-resp">
        </div>
    </div>
</section>
