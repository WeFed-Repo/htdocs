<?php 
	if ($site == "webank") 
	{
		?>	
<script>
var arrCarte = [
    {
        tipo:'bancomat',
        possiede:true,
        richiestaCarta:true,
        idFormMovimenti:'movimentiBancomatForm',
        urlRichiestaInCorso:'/carte/aperturaCartaBancomatStatoRichiesta.do',
        urlRichiedi:'/carte/aperturaCartaBancomatInserimento.do',
        urlScheda:'wb/content/debitoScheda.do',
        mancanzaRequisiti:false  
    },
	{
        tipo:'cartimpronta',
        possiede: true,
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
        richiestaCarta:false,
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
        urlRichiestaInCorso:'ff',
        urlRichiedi:'',
        urlScheda:'/wb/content/cardNews.do',
        mancanzaRequisiti:false
    },
    {
        tipo:'schedaNexi',
        possiede:true,
        richiestaCarta:true,
        idFormMovimenti:'movimentiNexi',
        urlRichiestaInCorso:'ff',
        urlRichiedi:'',
        urlScheda:'/wb/content/cardNews.do',
        mancanzaRequisiti:false
    }
    
];

</script>
<!-- Testo introduttivo -->

<section>
<div id="testoCartaImpronta"></div>
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
<div class="arrCarte-btn" arrcarte-btn-id="bancomat"></div>
</div>
</div>
</div>
<!-- scheda carousel --> <!-- scheda carousel -->
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
<div class="arrCarte-btn" arrcarte-btn-id="cartimpronta"></div>
</div>
</div>
</div>
<!-- scheda carousel --> <!-- scheda carousel -->
<div class="item" id="schedaPrepagata">
<div class="row">
<div class="col-sm-4"><img src="/WB/fe/img/carta_big_prepaid.png" /></div>
<div class="col-sm-8">
<h3>LA NUOVA ALTERNATIVA AL DENARO CONTANTE</h3>
<p>Puoi tenere sotto controllo, quando vuoi, i movimenti della tua Carta. <br />Consulta la lista movimenti!</p>
<!--BOTTONE/I PER C.PREPAGATA -->
<div class="arrCarte-btn" arrcarte-btn-id="prepagata"></div>
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
<div class="arrCarte-btn" arrcarte-btn-id="schedaNews"></div>
</div>
</div>
</div>
<!-- scheda carousel --></div>
<!-- Carousel indicators --><hr class="hidden-xs hidden-sm" />
<div class="row">
<div class="col-md-4 hidden-sm hidden-xs"></div>
<div class="col-md-8 col-xs-12">
<div class="carousel-indicators"><a data-target="#carouselCarte" data-slide-to="0" class="active"> <img src="/WB/fe/img/carta_small_bancomat.gif" /> <span> Carta di debito </span> </a> <a data-target="#carouselCarte" data-slide-to="1"> <img src="/WB/fe/img/carta_small_cartiprone.gif" /> <span> Carta di credito </span> </a> <a data-target="#carouselCarte" data-slide-to="2"> <img src="/WB/fe/img/carta_small_cartaprepaid.gif" /> <span> Carta prepagata </span> </a> <a data-target="#carouselCarte" data-slide-to="3"> <img src="/WB/fe/img/news_icon.png" /> </a></div>
</div>
</div>
</div>
</section>
<!-- fine carousel --> <!--SCRIPT PER LA GESTIONE/COSTRUZIONE BOTTONI -->
<script type="text/javascript">// <![CDATA[
//controlla se c'? l'array delle carte
	if (typeof arrCarte !=="undefined") {
		//elementi in pagina di classe arrCarte-btn da popolare con i bottoni
		var arrCarteBtn = $(".arrCarte-btn");

       

		//ciclo su array delle carte 
		$.each(arrCarte, function(i,k) {
			 //appendo il testo se ha carta di credito
             if(arrCarte[i].tipo=="cartimpronta" && arrCarte[i].possiede=== true) {
                var testoCi = '<section><h4>HAI CARTIMPRONTA? RENDI ANCORA PI&Ugrave; SICURI I TUOI PAGAMENTI</h4><p>&Egrave; necessario confermare l\'operazione con il codice usa e getta inviato via SMS sul tuo cellulare certificato e con il <strong>codice e-PIN.</strong></p><h4>NON HAI ANCORA CERTIFICATO IL TUO NUMERO DI CELLULARE?</h4><ul><li>Recupera il <strong>&quot;Codice Posizione&quot;</strong>: &egrave; composto da 10 cifre, lo trovi in alto a sinistra nel rendiconto di Cartimpronta o nella descrizione del movimento di addebito di Cartimpronta che trovi in Saldo e movimenti. Tieni a portata di mano la Carta, il tuo Codice Fiscale e il numero del Conto Corrente.</li><li>Clicca su &laquo;Vai al Portale&raquo; e segui i passaggi per certificarlo.</li><li>Seleziona la voce <strong>&quot;Protezione acquisti online&quot;</strong> per abilitare il 3D Secure e creare il tuo e-PIN.</li></ul><h4>HAI GI&Agrave; CERTIFICATO IL TUO NUMERO DI CELLULARE?</h4><p><strong>Ti basta creare il tuo e-PIN:</strong> tieni a portata di mano il cellulare, clicca sul pulsante &laquoVai al Portale&raquo;, seleziona la voce <strong>&quot;Protezione acquisti online&quot;</strong> e segui le istruzioni.</p></div></section>'
                $("#testoCartaImpronta").html(testoCi);
             }
            
            //e se l'attributo arrCarte-btn-id corrisponde al type di un oggetto di questo array....
			if($(".arrCarte-btn").eq(i).attr("arrCarte-btn-id") === k.tipo) {
				var thisBtnWrapper = arrCarteBtn.eq(i);
				thisBtnWrapper.append($("<div>").addClass("btn-align-left"));
				
				//se possiede la carta deve apparire il bottone con tutti i movimenti per il successivo submit del form
				if(k.possiede===true && k.idFormMovimenti!=="" && k.richiestaCarta===false) {
					var btnMovimenti = '<a type="button" title="lista movimenti" onclick="submitForm(' + k.idFormMovimenti +')" class="btn btn-primary">Lista movimenti	</a>'
					thisBtnWrapper.find(".btn-align-left").append(btnMovimenti)
				}
				//se non possiede la carta e non ha richieste in corso ci sar? scopri di pi? ed eventualmente richiedi carta
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
// ]]></script>
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