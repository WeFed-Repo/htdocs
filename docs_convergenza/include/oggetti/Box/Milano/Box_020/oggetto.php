<?php 
	if ($site == "webank") 
	{
		?>	
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
        mancanzaRequisiti:true
	},
	{
        tipo:'schedaNews',
        possiede:false,
        richiestaCarta:false,
        idFormMovimenti:'',
        urlRichiestaInCorso:'',
        urlRichiedi:'',
        urlScheda:'/wb/content/cardNews.do',
        mancanzaRequisiti:false
    }
    
];

</script>
<!-- Testo introduttivo -->

<section>
<h4>NON ESISTE LA CARTA GIUSTA PER TUTTI. MA <strong>ESISTE LA CARTA GIUSTA PER TE!</strong></h4>
<p>Per questo ti mettiamo a disposizione un'offerta di Carte di debito e Carte di credito che hanno tutte le caratteristiche per diventare <b>le tue Carte.</b></p>
</section>
<!-- Fine testo introduttivo --> <!-- Carousel -->
<section>
<div id="carouselCarte" class="carousel carousel-catalogo slide"><!-- Lista elementi del carousel -->
    <div class="carousel-inner"><!-- scheda carousel -->
        <div class="item active" id="schedaBancomat">
            <div class="row">
                <div class="col-sm-4"><img src="/WB/fe/img/carta_big_bancomat.png" /></div>
                <div class="col-sm-8">
                    <h3>LO UTILIZZI OVUNQUE, SENZA COMMISSIONI</h3>
                    <p>Puoi tenere sotto controllo, quando vuoi, i movimenti della tua Carta. <br />Consulta la lista movimenti!</p>
                    <!--BOTTONE/I PER BANCOMAT -->
                    <div class="arrCarte-btn" arrCarte-btn-id="bancomat"></div>
                </div>
            </div>
        </div>
        <!-- scheda carousel --> 
        <!-- scheda carousel -->
        <div class="item" id="schedaCredito">
            <div class="row">
                <div class="col-sm-4"><img src="/WB/fe/img/carta_big_impronta.png" /></div>
                <div class="col-sm-8">
                    <h3>TANTI VANTAGGI IN UN'UNICA CARTA</h3>
                    <ul>
                        <li><b>CONVENIENTE: zero commissioni</b> sugli acquisti in area Euro</li>
                        <li><b>VANTAGGIOSA</b>: sconti, convenzioni e coperture assicurative offerte da MasterCard</li>
                        <li><b>SICURA</b>: microchip integrato e <b>alert SMS</b> dopo ogni acquisto</li>
                    </ul>
                    <!--BOTTONE/I PER C.IMPRONTA -->
                    <div class="arrCarte-btn" arrCarte-btn-id="cartimpronta"></div>
                </div>
            </div>
        </div>
        <!-- scheda carousel --> 
        <!-- scheda carousel -->
        <div class="item" id="schedaPrepagata">
            <div class="row">
                <div class="col-sm-4"><img src="/WB/fe/img/carta_big_prepaid.png" /></div>
                <div class="col-sm-8">
                    <h3>LA NUOVA ALTERNATIVA AL DENARO CONTANTE</h3>
                    <p>Puoi tenere sotto controllo, quando vuoi, i movimenti della tua Carta. <br />Consulta la lista movimenti!</p>
                     <!--BOTTONE/I PER C.PREPAGATA -->
                    <div class="arrCarte-btn" arrCarte-btn-id="prepagata"></div>   
                </div>
            </div>
        </div>
        <!-- scheda carousel -->
        <div class="item" id="schedaNews">
            <div class="row">
                <div class="col-sm-4"><img src="/WB/fe/img/vis_cards_640.png" /></div>
                <div class="col-sm-8">
                    <p>Aggiornati su sconti, promozioni e programmi fedelt&agrave;, nuove funzioni e servizi utili! <br /> Tutto quello che devi sapere sul mondo delle carte Webank.</p>
                    <!--BOTTONE NEWS-->
                    <div class="arrCarte-btn" arrCarte-btn-id="schedaNews"></div>
                </div>
            </div>
        </div>
    <!-- scheda carousel -->
    </div>
    <!-- Carousel indicators --><hr class="hidden-xs hidden-sm" />
    <div class="row">
        <div class="col-md-4 hidden-sm hidden-xs"></div>
            <div class="col-md-8 col-xs-12">
            <div class="carousel-indicators"><a data-target="#carouselCarte" data-slide-to="0" class="active"> <img src="/WB/fe/img/carta_small_bancomat.gif" /> <span> Carta di debito </span> </a> <a data-target="#carouselCarte" data-slide-to="1"> <img src="/WB/fe/img/carta_small_cartiprone.gif" /> <span> Carta di credito </span> </a> <a data-target="#carouselCarte" data-slide-to="2"> <img src="/WB/fe/img/carta_small_cartaprepaid.gif" /> <span> Carta prepagata </span> </a> <a data-target="#carouselCarte" data-slide-to="3"> <img src="/WB/fe/img/news_icon.png" /> </a></div>
        </div>
    </div>
</div>
</section>
<!-- fine carousel -->
<!--SCRIPT PER LA GESTIONE/COSTRUZIONE BOTTONI -->
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

<?php
}?>	

<?php 
	if ($site == "youweb") 
	{
		?>	
		<p>casistica non contemplata</p>
<?php
}?>	