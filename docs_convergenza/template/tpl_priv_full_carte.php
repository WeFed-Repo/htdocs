<?php
$carte = (!isset($_GET['carte']) || $_GET['carte'] != 'n');
if ($carte) {
	virtual("/include/oggetti/Tabelle/Milano/Tabella_001__Carte/oggetto.php");
}
?>
<!--<script>
	var carteList = {
		"schedaBancomat": {
			"hasCarta" : "true",
			"linkMovimenti": "",
			"linkScopri": "",
			"linkRichiedi": "",
			"linkLeggi":""
		},
		"schedaCredito": {
			"hasCarta" : "false",
			"linkMovimenti": "",
			"linkScopri": "",
			"linkRichiedi": "",
			"linkLeggi":""
		},
		"schedaPrepagata": {
			"hasCarta" : "false",
			"linkMovimenti": "",
			"linkScopri": "",
			"linkRichiedi": "",
			"linkLeggi":""
		},
		"schedaNews": {
			"hasCarta" : "false",
			"linkMovimenti": "",
			"linkScopri": "",
			"linkRichiedi": "",
			"linkLeggi":""
		}
	}
	
</script>-->
<script>
var arrCarte = [
    {
        tipo:'bancomat',
        possiede:true,
        richiestaCarta:false,
        idFormMovimenti:'movimentiBancomatForm',
        urlRichiestaInCorso:'/carte/aperturaCartaBancomatStatoRichiesta.do',
        urlRichiedi:'/carte/aperturaCartaBancomatInserimento.do',
        urlScheda:'wb/content/debitoScheda.do',
        mancanzaRequisiti:false
	},
	{
        tipo:'cartimpronta',
        possiede:false,
        richiestaCarta:false,
        idFormMovimenti:'dettagliCartaCreditoForm',
        urlRichiestaInCorso:'/carte/richiestaCartaCreditoStatoRichiesta.do',
        urlRichiedi:'/carte/richiestaCartaCredito.do',
        urlScheda:'/wb/content/k4Scheda.do',
        mancanzaRequisiti:false
	},
	{
        tipo:'prepagata',
        possiede:false,
        richiestaCarta:true,
        idFormMovimenti:'movimentiPrepagataForm',
        urlRichiestaInCorso:'/cartaConto/aperturaK4StatoRichiesta.do',
        urlRichiedi:'/cartaConto/aperturaK4Inserimento.do',
        urlScheda:'/wb/content/k4Scheda.do',
        mancanzaRequisiti:false
	},
	{
        tipo:'schedaNews',
        possiede:false,
        richiestaCarta:'false',
        idFormMovimenti:'',
        urlRichiestaInCorso:'',
        urlRichiedi:'',
        urlScheda:'/wb/content/cardNews.do',
        mancanzaRequisiti:false
    }
    
];

</script>
<form id="movimentiBancomatForm" method="post" action="/WEBWB/cartaConto/movimenti.do" style="display: none">
	<input type="hidden" name="tipoCarta" value="DEBITO">
</form>
<!-- Testo introduttivo -->
<section>
	<h4 class="">
		NON ESISTE LA CARTA GIUSTA PER TUTTI. MA <strong>ESISTE LA CARTA GIUSTA PER TE!</strong>
	</h4>
	<p>
		Per questo ti mettiamo a disposizione un'offerta di Carte di debito e Carte di credito che hanno tutte le caratteristiche per diventare <b>le tue Carte.</b>
	</p>
</section>
<!-- Fine testo introduttivo -->
<!-- Carousel -->
<section>
<div id="carouselCarte" class="carousel carousel-catalogo slide">
	<!-- Lista elementi del carousel -->
	<div class="carousel-inner">

		<!-- scheda carousel -->
		<div class="item active" id="schedaBancomat">
			<div class="row">
				<div class="col-sm-4">
					<img
						src="/WB/fe/img/carta_big_bancomat.png" />
				</div>
				<div class="col-sm-8">
					<h3>
						LO UTILIZZI OVUNQUE, SENZA COMMISSIONI
					</h3>
					
							<p>
								Puoi tenere sotto controllo, quando vuoi, i movimenti della tua Carta. <br/>Consulta la lista movimenti!
							</p>
							<!--BOTTONE PER BANCOMAT -->
							<div class="arrCarte-btn" arrCarte-btn-id="bancomat"></div>
							<!--
							<div class="btn-align-left">
								
								<a type="button" class="btn btn-primary" 
									name='movimentiBancomat'
									data-accountid='01973 - 0000015868 - EUR'>
									Lista movimenti	
								</a>
								
							</div>
							-->
					</div>
			</div>
		</div>
		<!-- scheda carousel -->
            <!-- scheda carousel carta NEXI -->
            <div class="item" id="schedaNexi">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="/WB/fe/img/carta_big_cartanexi.png" alt="Immagine carta">
                    </div>
                    <div class="col-sm-8">
                        <h3>LA CARTA EVOLUTA CHE TI PERMETTE DI PAGARE TRAMITE SMARTPHONE</h3>
                        <ul><li><strong>VERSATILE</strong>: puoi pagare tramite smartphone e smartwatch con Apple Pay, Samsung Pay, Google Pay e Garmin Pay</li> 
                        <li><strong>VANTAGGIOSA</strong>: programma fedelt&agrave; <strong>ios&igrave;</strong> e <strong>ioS&igrave; Plus</strong> per ottenere promozioni e vantaggi </li> 
                        <li><strong>SICURA</strong>: alert personalizzabili, Spending Control, Coperture assicurative gratuite previste dal Programma Multirischi Classic </li></ul>
                        <!--<div class="arrCarte-btn" arrCarte-btn-id="cartanexi"></div>-->
                        <!--<div class="btn-align-left">
							
						    <a type="button" class="btn btn-primary"  href="/WEBWB/wb/content/nexiRichiesta.do">Richiedi subito</a>
                            <a type="button" class="btn btn-primary" href="/WEBWB/wb/content/nexiScheda.do">Scopri di pi&ugrave;</a>
							<br class="clear">
							
                        </div>-->
                    </div>
                </div>
            </div>
		<!-- scheda carousel -->
		<div class="item" id="schedaCredito">
			<div class="row">
				<div class="col-sm-4">
					<img
						src="/WB/fe/img/carta_big_impronta.png">
				</div>
				<div class="col-sm-8">
					<h3>
						TANTI VANTAGGI IN UN'UNICA CARTA
					</h3>
					<ul> <li><strong>CONVENIENTE: zero commissioni</strong> sugli acquisti in area Euro </li> <li><strong>VANTAGGIOSA</strong>: sconti, convenzioni e coperture assicurative offerte da MasterCard </li> <li><strong>SICURA</strong>: microchip integrato e <strong>alert SMS</strong> dopo ogni acquisto </li></ul>
				    <div class="arrCarte-btn" arrCarte-btn-id="cartimpronta"></div>
					<!--<div class="btn-align-left"  arrCarte-btn="1">		
									
									
										<a type="button" class="btn btn-primary" onclick="$('#richiestaCartaCredito').submit()">
											Richiedi subito
										</a>									
									
								 
								<a type="button" class="btn btn-primary" name="scopriDiPiu" href='/WEBWB/wb/content/oneScheda.do'>
									Scopri di	pi&ugrave;
								</a> 
					</div>	
					-->	
					
				</div>
			</div>
		</div>
		<!-- scheda carousel -->

			<!-- scheda carousel -->
		<div class="item" id="schedaPrepagata">
			<div class="row">
				<div class="col-sm-4">
					<img
						src="/WB/fe/img/carta_big_prepaid.png">
				</div>
				<div class="col-sm-8">
					<h3>
						LA NUOVA ALTERNATIVA AL DENARO CONTANTE
					</h3>
					<p>
						Puoi tenere sotto controllo, quando vuoi, i movimenti della tua Carta. <br/>Consulta la lista movimenti!
					</p>
					<div class="arrCarte-btn" arrCarte-btn-id="prepagata"></div>
							<!--<div class="btn-align-left"  arrCarte-btn="2">
								<a type="button" class="btn btn-primary" name='movimentiPrepagata'
									data-tipo='KJe@ns'
									data-numerocarta='5400470861124253'>
									Lista movimenti	
								</a>
							</div>
						-->
						
					
				</div>
			</div>
		</div>

		<!-- scheda carousel -->
		<div class="item" id="schedaNews">
			<div class="row">
				<div class="col-sm-4">
					<img src="/WB/fe/img/vis_cards_640.png">
				</div>
				<div class="col-sm-8">
					<p>
						Aggiornati su sconti, promozioni e programmi fedeltà, nuove funzioni e servizi utili! <br/> Tutto quello che devi sapere sul mondo delle carte Webank.
					</p>
					<div class="arrCarte-btn" arrCarte-btn-id="schedaNews"></div>
					<!--
					<div class="btn-align-left" arrCarte-btn="3">
						<a type="button" class="btn btn-primary" id="" href='/WEBWB/wb/content/cardNews.do'>
							Leggi
						</a>
					</div>-->
				</div>
			</div>
		</div>
		<!-- scheda carousel -->
	</div>
    <!-- Carousel indicators -->
	<hr class="hidden-xs hidden-sm">
	<div class="row">
		<div class="col-md-3 hidden-sm hidden-xs"></div>
		<div class="col-md-9 col-xs-12">
			<div class="carousel-indicators">
				<a data-target="#carouselCarte" data-slide-to="0" class="active">
					<img src="/WB/fe/img/carta_small_bancomat.gif">
					<span>
						Carta di debito
					</span> 
				</a> 
                <a data-target="#carouselCarte" data-slide-to="1">
                        <img src="/WB/fe/img/carta_small_cartanexi.gif" alt="Immagine carta">
                        <span>Carta Nexi</span>
                    </a>
				<a data-target="#carouselCarte"	data-slide-to="2"> 
					<img src="/WB/fe/img/carta_small_cartiprone.gif">
					<span>
						Carta di credito
					</span> 
				</a>
				<a data-target="#carouselCarte" data-slide-to="3"> 
					<img src="/WB/fe/img/carta_small_cartaprepaid.gif"> 
					<span> 
						Carta prepagata 
					</span> 
				</a>

				<a data-target="#carouselCarte"	data-slide-to="4"> 
					<img src="/WB/fe/img/news_icon.png"> 
				</a> 
				<br	class="clear">
			</div>
		</div>
	</div>
</div>
</section>
<!-- fine carousel -->



<!-- testo introduttivo -->
<section>
    <h4 class="strongTitle">Lorem ipsum dolor sit amet</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim eius cum vitae perferendis dolorem repellendus,
        autem minima ratione dignissimos omnis. Recusandae, mollitia autem tempore distinctio cupiditate cum consequatur
        corporis hic!</p>
</section>

<!-- Fine testo introduttivo -->
<style>
</style>

<!-- Configuratore -->
<?php /*
<script type="text/javascript">
	featChartInit("<%3Fxml%20version%3D%221.0%22%20encoding%3D%22windows-1250%22%3F><cards><card id=%22nav_priv_wbx_compara_carte_bancomat%22><name><![CDATA[ Bancomat ]]></name><link><![CDATA[ %2FwbOnetoone%2F3l%2Fdo%2FwbOnetoone%2FschedaProdotto.do%3FOBSCNT%3DTAB%26tabId%3Dnav_priv_wbx_carte%26OBSKEY%3Dnav_priv_wbx_info_gestione_carta%26OBSKEY3%3Dnav_priv_wbx_bancomat_int_cosa_e ]]></link></card><card id=%22nav_priv_wbx_compara_carte_cartiprOne%22><name><![CDATA[ Cartimpronta One ]]></name><link><![CDATA[ %2FwbOnetoone%2F3l%2Fdo%2FwbOnetoone%2FschedaProdotto.do%3FCOL%3Dcarte%26OBSCNT%3DTAB%26tabId%3Dnav_priv_wbx_carte%26OBSKEY%3Dnav_priv_wbx_info_gestione_cartimp_one%26OBSKEY3%3Dnav_priv_wbx_cartimp_one]]></link></card><card id=%22nav_priv_wbx_compara_carte_cartiprGoldPlus%22><name><![CDATA[ Cartimpronta Gold Plus ]]></name><link><![CDATA[ /wbOnetoone/3l/do/wbOnetoone/schedaProdotto.do?OBSCNT=TAB&tabId=nav_priv_wbx_carte&OBSKEY=nav_priv_wbx_info_gestione_gold&OBSKEY3=nav_priv_wbx_cartimpr_gold_cosa_e]]></link></card><card id=%22nav_priv_wbx_compara_carte_cartaJeans%22><name><![CDATA[ Carta Jeans ]]></name><link><![CDATA[ /wbOnetoone/3l/do/wbOnetoone/schedaProdotto.do?OBSCNT=TAB&tabId=nav_priv_wbx_carte&OBSKEY=nav_priv_wbx_info_gestione_carta_jeans&OBSKEY3=nav_priv_wbx_cartajeans_cosa_e]]></link></card></cards>");</script>
</script>
*/ ?>

<section>
    <div id="confrontaCarte" class="loading">
        <div id="cardSelection">
            <div class="row"></div>
        </div>
        <hr>
        <div id="cardResults">
            <div id="noCardSelected">
                <span><img src="/WB/fe/img/arrow_indicazione_left.png" class="imgleft"
                           alt="Freccia sinistra">Nessun risultato presente in assenza di parametri selezionati<img
                            src="/WB/fe/img/arrow_indicazione_right.png" class="imgright"
                            alt="Freccia destra"></span>
            </div>
            <div class="row"></div>
        </div>
        <hr>
        <form method="post" action="" name="featConfrontaForm"><input type="hidden" name="elencoCarte" id="elCarte" value=""></form>
        <div class="form-group btnWrapper">
            <div class="btn-align-center">
                <a type="button" class="btn btn-disabled" id="btConfrontaCarte">Confronta carte</a>
                <br class="clear">
            </div>
        </div>
    </div>
</section>
<!-- fine configuratore -->

<script type="text/javascript" src="/WB/fe/js/fp_carte_links_librerie.js"></script>

<script>
	//controlla se c'è l'array delle carte
	if (typeof arrCarte !=="undefined") {
		//elementi in pagina di classe arrCarte-btn da popolare con i bottoni
		var arrCarteBtn = $(".arrCarte-btn");
		//ciclo su array delle carte 
		$.each(arrCarte, function(i,k) {
			//e se l'attributo arrCarte-btn-id corrisponde al type di un oggetto di questo array....
			if($(".arrCarte-btn").eq(i).attr("arrCarte-btn-id") === k.tipo) {
				var thisBtnWrapper = arrCarteBtn.eq(i);
				thisBtnWrapper.append($("<div>").addClass("btn-align-left"));
				
				//se possiede la carta deve apparire il bottone con tutti i movimenti per il successivo submit del form
				if(k.possiede===true && k.idFormMovimenti!=="") {
					var btnMovimenti = '<a type="button" title="lista movimenti" onclick="submitForm(' + k.idFormMovimenti +')" class="btn btn-primary">Lista movimenti	</a>'
					thisBtnWrapper.find(".btn-align-left").append(btnMovimenti)
				}
				//se non possiede la carta e non ha richieste in corso ci sarà scopri di più ed eventualmente richiedi carta
				else if (k.richiestaCarta !==true)  {
					if(k.urlRichiedi!=="" && k.mancanzaRequisiti!==true)
					{
						var btnRichiedi = '<a type="button" title="Richiedi subito" class="btn btn-primary"  href="' + k.urlRichiedi +'">Richiedi subito</a>';
						thisBtnWrapper.find(".btn-align-left").append(btnRichiedi);
					}
					if(k.urlScheda!=="") {
						var testoScopri = (k.tipo === "schedaNews") ? "Leggi" : "Scopri di pi&ugrave",
						    btnScopri = '<a type="button" title="' + testoScopri +'" class="btn btn-primary"  href="' + k.urlScheda +'">' + testoScopri + '</a>';
						thisBtnWrapper.find(".btn-align-left").append(btnScopri);
					}
				}
				//se ha una rischiesta in corso
				else if (k.richiestaCarta ===true && k.urlRichiestaInCorso!=="") {
					var btnVerifica = '<a type="button" title="Verifica" class="btn btn-primary"  href="' + k.urlRichiestaInCorso +'">Verifica</a>';
					thisBtnWrapper.find(".btn-align-left").append(btnVerifica);
				}
					
				
			}
		
		})
		//eventuale submit del form movimenti 
		function submitForm(el) {
			el.submit();
		}
	}
</script>
<script type="text/javascript" src="/WB/fe/js/fp_carte.js"></script>