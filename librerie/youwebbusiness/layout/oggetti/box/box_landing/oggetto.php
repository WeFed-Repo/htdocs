<div class="box-landing bordered mt-3 mb-3 p-3 pb-4 pt-4">
	<h2>Titolo prodotto</h2>
	<h3>Sottotitolo</h3>
	<p id="text-to-ellipse" class="text-ellipsed" >Con <strong>Pay‑by‑Link trasformi il tuo POS Nexi </strong>in uno strumento per incassare anche a distanza in modo semplice e sicuro.</p>
	<div class="row row-eq-height align-items-top pb-5 pt-3">
		<div class="col-md-8 col-12 pb-3 left-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis diam quis purus tempor cursus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam tincidunt tempus accumsan. Fusce pharetra ac neque vitae venenatis. Curabitur eu eleifend urna. </p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis diam quis purus tempor cursus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam tincidunt tempus accumsan. Fusce pharetra ac neque vitae venenatis. Curabitur eu eleifend urna. </p>
		</div>
		<div class="col-md-4 col-12 pr-3 pl-3">
			<div class="row align-items-top justify-content-center">			
				<img class="d-flex img-fluid" src="./fe/img/placeholder_box_landing.jpg" alt="immagine box landing">				
			</div>
		</div>
	</div>
	<p class="cta-claim">Testo che suppporta alla Call To Action</p>
	<div class="row align-items-center justify-content-center p-2">
		<button class="col-sm-auto btn btn-primary">CALL TO ACTION</button>
    </div>
	<div class="note mt-3">
		<p><strong>Messaggio pubblicitario con finalità promozionale.</strong></br>Per le condizioni economiche e contrattuali fare riferimento ai Fogli Informativi disponibili presso le filiali Banco BPM e nella sezione Trasparenza del sito bancobpm.it.</p>
	</div>
</div>

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