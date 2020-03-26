<div id="mainContent" class="center col-sm-80 col-xs-12">
					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							29/06/2017	
						</div>
					</div>
					
					
					
					








<script>
	
	$(document).ready(function(e) {
		$(".hidden-sm").hide();
	  	if (isMobile()) {
	  		$(".hidden-sm").show();
			$("#tabellaCellulari").cardBoxTable({
				colTitleIdx: 3,
				colActionIdx: 0,
				hideColIdx:1,
				colActionPos: "top-right",
				defaultLabel: ["","","","",""],
				defaultValue: ["","","","",""],
				show: function() {
					$('.section').addClass('cardbox-background');
				}
			});
			//nascondere il titolo per la parte mobile
	  		var title = document.getElementById('titolo');
			title.style.display = 'none'; 
	  	} 
	});

	function changeSubmitUrl(button, url){
		const pageUrlPath = window.location.pathname;
		const modulePath = pageUrlPath.substring(0, (pageUrlPath.substring(1).indexOf("/") + 1));
		const enclosingForm = $(button).closest("form");
		enclosingForm.attr("action", modulePath + url + ".do");
	}	
	
	function setHiddenFields(rowIndex){
		const selectedRow = $("#row" + rowIndex);
		$("#tipologiaField").val(selectedRow.find("#tipologia" + rowIndex).val());
		$("#contattoField").val(selectedRow.find("#contatto" + rowIndex).val());
		$("#prefissoField").val(selectedRow.find("#prefisso" + rowIndex).val());
		$("#predefinitoField").val(selectedRow.find("#predefinito" + rowIndex).val());
	}
	
	function elimina(rowIndex){
		setHiddenFields(rowIndex);
		$("#eliminaSubmit").click();
	}
	
	function modifica(rowIndex){
		setHiddenFields(rowIndex);
		$("#modificaSubmit").click();
	}
	
	function aggiungi(){
		$("#aggiungiSubmit").click();
	}	
</script>

<div class="riquadro clearfix">
	
	
	









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag gestioneContatti">&nbsp;</div>
			
			
		
		
			
		
		
			
				Gestione Cellulari
			
		
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	
	<div class="innerBoxWhite  clearfix inner">
		
		
		
		








	


		
		<!-- TABELLA CONTATTI CELLULARE -->
		<form id="formGestioneCellulari" method="post" action="/WEBHT/serviziPerTe/contattiERecapiti/Cellulari/inserimento.do">
			<input type="hidden" name="tipologia" value="" id="tipologiaField">
			<input type="hidden" name="prefisso" value="" id="prefissoField">
			<input type="hidden" name="numeroCellulare" value="" id="contattoField">
			<input type="hidden" name="flagPredefinito" value="false" id="predefinitoField">
			<div style="display:none">
				<input type="submit" name="elimina" value="elimina" onclick="changeSubmitUrl(this, '/serviziPerTe/contattiERecapiti/Cellulari/eliminazione');" id="eliminaSubmit">
				<input type="submit" name="modifica" value="modifica" id="modificaSubmit">
				<input type="submit" name="modifica" value="aggiungi" id="aggiungiSubmit">
			</div>
		</form>
		<div class="table-responsive">
			<table class="table table-striped dataTable no-footer" id="tabellaCellulari">
				<colgroup>
					<col width="10%">
					<col width="10%">
					<col width="30%">
					<col width="30%">
					<col width="20%">
				</colgroup>
				<thead>
					<tr class="hover">
						<th style="width: 0px;" class="oCenter"></th>
						<th style="width: 0px;" class="oCenter"></th>
						<th style="width: 0px;" class="oCenter">Tipologia contatto</th>
						<th style="width: 0px;" class="oCenter">Numero cellulare</th>
						<th style="width: 0px;" class="oCenter">Predefinito</th>
					</tr>
				</thead>
				
				
				
					
					<tbody><tr id="row0">
						<td class="min-width-85px">
							<img src="/HT/IMAGES/i_modifica.gif" class="imgSrv hover-hand" title="Modifica contatto cellulare" alt="Modifica contatto cellulare" onclick="modifica(0); "> 
							
						</td>
						<td>
							<img src="/HT/IMAGES/ico-contatti-cellulari.png">
						</td>
						<td class="oCenter">
							<input type="hidden" name="tipologia" value="Altro recapito" id="tipologia0">
							Altro recapito
						</td>
						<td class="oCenter">
							<input type="hidden" name="prefisso" value="" id="prefisso0">
							<input type="hidden" name="numeroCellulare" value="3281751525" id="contatto0">
							<div style="overflow:hidden; text-overflow:ellipsis">
								
								3281751525
							</div>
						</td>
						<td class="oCenter">
							<input type="hidden" name="flagPredefinito" value="true" id="predefinito0">
							
								
									<img src="/HT/IMAGES/TOL/spunta.gif" class="hidden-xs">
									<span class="hidden-sm" style="display: none;">SI</span>
								
								
							
						</td>
					</tr>
				
			</tbody></table>
		</div>	
	</div>
</div>

<!-- BOTTONI ANNULLA/AGGIUNGI-->
<div class="pull-right margin-bottom20">
	<form id="formContattiERecapiti" method="post" action="/WEBHT/serviziPerTe/contattiERecapiti.do">
		<input type="submit" name="loadContattiERecapiti" value="Annulla" class="btn btn-primary">
		<input type="button" name="modifica" value="Aggiungi" onclick="aggiungi();" class="btn btn-primary">
	</form>
</div>
				</div>