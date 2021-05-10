<div class="box-landing bordered mt-3 mb-3 p-3 pb-4 pt-4">
	<h2>Titolo prodotto</h2>
	<h3>Sottotitolo</h3>
	<p id="text-to-ellipse" class="text-ellipsed" >Con <strong>Pay‑by‑Link trasformi il tuo POS Nexi </strong>in uno strumento per incassare anche a distanza in modo semplice e sicuro.</p>
	<div class="row pt-3">
		<div class="col-md-12 col-12 pb-3 left-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis diam quis purus tempor cursus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam tincidunt tempus accumsan. Fusce pharetra ac neque vitae venenatis. Curabitur eu eleifend urna. </p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis diam quis purus tempor cursus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam tincidunt tempus accumsan. Fusce pharetra ac neque vitae venenatis. Curabitur eu eleifend urna. </p>
		</div>
	</div>
	<div class="row pb-5 pt-3">
		<div class="col-md-12 col-12">
			<div class="row justify-content-center">
				<div id="video-container-1" class="col-12 col-sm-12 col-md-10 col-lg-6">
					 
				</div>
			</div>
		</div>
	</div>
	<p class="cta-claim"><strong>Testo che suppporta alla Call To Action</strong></p>
	<div class="row align-items-center justify-content-center p-2">
		<button class="btn btn-primary">CALL TO ACTION</button>
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

<script>
/* Gestione del Video(proporzionato e responsive)
/* Embed video Vimeo */
	$.getScript("https://player.vimeo.com/api/player.js",function(){
		var vimeoIframe = $("<iframe>").attr({
			src: "https://player.vimeo.com/video/56282283",
			frameborder:"0", 
			allow:'autoplay; fullscreen; picture-in-picture', 
			allowfullscreen: true
		}).css({background: "transparent no-repeat center center",position:"absolute",top:"0",left:"0",width:"100%",height:"100%"})
		var blVimeo = $("<div>").css({padding:"56.25% 0 0 0",position:"relative", minHeight:"200px"}).append(vimeoIframe);
		$("#video-container-1").append(blVimeo);
	})
</script>