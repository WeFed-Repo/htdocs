<!-- BOX PROMO VIA CONTENT-->
<section class="no-margin-section">
	<div class="box-promo">
		<div class="row">
			<div class="col-md-auto col-sm-12">
				<div class="h-100 box-promo-left  d-flex justify-content-center align-items-center">
					<img src="./fe/img/placeholder_box_promo.png" alt="immagine box promo"/>
					<!-- immagin ebox altri prodotti-->
					<img src="./fe/img/placeholder_box_altri_prodotti.png" alt="immagine box altri prodotti"/>
				</div>
			</div>
			<div class="col-md col-sm-12">
				<div class="box-promo-top">
					<h4 class="title-blue">Lorem ipsum dolor sit</h4>
					<p id="text-to-ellipse" class="text-box text-ellipsed">Con la conversione in legge del D.L. n.23 dell’8 aprile 2020 (Decreto Liquidità), sono state introdotte ulteriori novità sui finanziamenti agevolati assistiti dalla garanzia del Fondo di Garanzia per le Piccole e Medie Imprese. Se sei una micro, piccola o media impresa, una persona fisica esercente attività di impresa, arti o professioni, puoi presentare richiesta</p>
					<hr>
				</div>
				<div class="box-promo-bottom">
					<div class="box-promo-doc pull-left">
						<span class="pull-left"><a href="#" aria-label="PDF"><span><img src="./fe/img/icon/pdf.svg"></span>lorem ipsum1.pdf</a></span>
						<span class="pull-left"><a href="#" aria-label="PDF"><span><img src="./fe/img/icon/pdf.svg"></span>lorem ipsum2.pdf</a></span>
						<span class="pull-left"><a href="#" aria-label="PDF"><span><img src="./fe/img/icon/pdf.svg"></span>lorem ipsum3.pdf</a></span>
					</div>
					<span class="pull-right">
						<a href="#" class="number-info"><span class="number">2</span>Richieste da completare</a>
						<a href="#" aria-label="Dettagli">Dettagli</a>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FINE BOX PROMO VIA CONTENT-->

<!--- POSSIBILE FUNZIONE PER IL TRONCAMENTO se è presente la classe text-ellipsed---->
<script>
    //definizione di variabili: testo da troncare, altezza massima del testo su desktop, altezza massima del testo su mobile.
	var txt = $('#text-to-ellipse').html(),
		hMaxDesktop = '90', //massimo tre righe
		hMaxMobile = '190'; //massimo sette righe

	/* Verifica se schermo minore di... */
	var viewdim = function () {
		var e, a;

		if (!('innerWidth' in window)) {
			e = document.documentElement || document.body;
			a = 'client';
		} else {
			e = window;
			a = 'inner';
		}

		return { width: e[a + 'Width'], height: e[a + 'Height'] };
		};
		
	
	function ellipsizeTextPromo(id,txt) {
		var hMax = viewdim().width < 768 ? hMaxMobile : hMaxDesktop;
		
		var el = $('#' + id);
		el.html(txt);
		if(el.hasClass('text-ellipsed'))
			{
				var textArray = txt.split(' ');
				while(el.prop('scrollHeight') > hMax ) {
					textArray.pop();
					el.html(textArray.join(' ') + '...');
				}
			}
		}
	$( window ).resize(function() {
		ellipsizeTextPromo('text-to-ellipse',txt);
		
	})
  ellipsizeTextPromo('text-to-ellipse',txt);
 
</script>




