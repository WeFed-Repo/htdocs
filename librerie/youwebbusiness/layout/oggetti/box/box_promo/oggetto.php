<!-- BOX PROMO VIA CONTENT-->
<section>
	<div class="box-promo">
		<div class="row">
			<div class="col-md-auto col-sm-12">
			<div class="h-100 box-promo-left  d-flex justify-content-center align-items-center">
					<img src="./fe/img/placeholder_box_promo.png" alt="immagine box promo"/>
				</div>
			</div>
			<div class="col-md col-sm-12">
				<div class="box-promo-top">
					<h4>Lorem ipsum dolor sit</h4>
					<p id="text-to-ellipse" class="text-ellipsed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum fine</p>
					<hr>
				</div>
				<div class="box-promo-bottom">
					<div class="box-promo-doc pull-left">
						<span class="pull-left"><a href="#" aria-label="PDF"><span><img src="./fe/img/icon/pdf.svg"></span>lorem ipsum1.pdf</a></span>
						<span class="pull-left"><a href="#" aria-label="PDF"><span><img src="./fe/img/icon/pdf.svg"></span>lorem ipsum2.pdf</a></span>
						<span class="pull-left"><a href="#" aria-label="PDF"><span><img src="./fe/img/icon/pdf.svg"></span>lorem ipsum3.pdf</a></span>
					</div>
					<span class="pull-right"><a href="#" aria-label="Dettagli">Dettagli</a></span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FINE BOX PROMO VIA CONTENT-->

<!--- POSSIBILE FUNZIONE PER IL TRONCAMENTO se è presente la classe text-ellipsed---->
<script>
    //var txt = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum fine'
	var txt = $('#text-to-ellipse').html();
	function ellipsizeTextPromo(id,txt) {
		
		var el = $('#' + id);
		el.html(txt);
		if(el.hasClass('text-ellipsed'))
			{
				var textArray = txt.split(' ');
				while(el.prop('scrollHeight') > el.innerHeight()) {
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




