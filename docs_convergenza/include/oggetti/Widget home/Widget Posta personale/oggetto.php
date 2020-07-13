<script>
	var height = 189;

	function callPostaPersonale(){
		//$('#PostapersonaleHomepage').fadeTo( 0, 0.33 );
		$('#PostapersonaleHomepage').fadeTo( 0, 1 );
		$('#loadingPostaPersonale').height(height);
		$('#loadingPostaPersonale').show();
		
		$.ajax({
			async: true,
			dataType: 'html',
			url: getPathContext() + '/common/homePagePostaPersonale.do',
			success: function(response) {
				$('#PostapersonaleHomepage').html(response);
				$('#PostapersonaleHomepage').fadeTo( 0, 1 );
				$('#loadingPostaPersonale').hide();
			}
		 });
	}
	$(document).ready(function(){
		callPostaPersonale();
	});
</script>
<div id="boxPostaPersonale" class="riquadro clearfix hidden-xs">
	<h1>
		<div class="flag hidden-xxs postaArrivo">&nbsp;</div>
		Posta personale
	</h1>
	<!--div id="loadingPostaPersonale" class="col-xs-12 oCenter" style="height: 189px; display: none;">
			<img src="/HT/IMAGES//caricamento.gif">
	</div-->
	<div id="PostapersonaleHomepage" class="clearfix" style="opacity: 1;">
		<div class="section clearfix">
			<h3 class="titleSection">Notifiche</h3>
			<div class="col-xs-12 margin-bottom10 text-center">
				<span>		
					<img src="/HT/IMAGES/nGrafica/busta_inviata.png" id="divImgBustaClosed0" style="visibility:visible" border="0">
					Nella posta in arrivo ci sono <b>2 documenti da leggere</b> 
				</span>
			</div>
		</div>
		<div class="pull-right margin10">
			<input type="button" name="" value="Posta in arrivo" onclick="goToPage('/postaPersonale/nuoviDocumenti.do')" style="margin-right:0px" class="btn">
		</div>
	</div>
</div>