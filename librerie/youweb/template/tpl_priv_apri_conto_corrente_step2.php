<div class="breadcrumb">
	
		<span>Servizi<span class="hidden-ux"> Per Te</span></span>
	
		<span>Apri Conto Corrente</span>
	
</div>

						 
						<div class="visible-print-block"> 
							<img src="/HT/fe/img/logo_bancobpm@2x.png" title="Torna all'homepage" alt="Torna all'homepage">
							<div class="pull-right">
								  
								15/09/2017	
							</div>
						</div>
						

						

						
						



<div class="riquadro clearfix">
	









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			
		
		
			
		
		
			
		
			
				
 					<span>Apertura conto corrente YouBanking</span>
 					
				
 					
 					<span class="hidden-xs">:&nbsp; intestazione</span>
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/WEBHB/help/page.do?id=1041')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>



		
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			<p>Questa sezione ti consente di aprire online il conto corrente YouBanking. L'intestazione di questo nuovo rapporto potr&agrave; essere uguale ad una delle intestazioni dei rapporti che hai gi&agrave; in essere (massimo 2 cointestatari).</p>
<p style="text-align: center;"><img src="/HT/IMAGES/CONTODEPOSITO/AttivazioneContoDepIntestazione.gif" alt="" width="637" height="57"></p>
		</div>



			</div>
		
	
</div>
	







	


	
	
	
	




<form id="formApriCC" method="post" action="/WEBHB/cc/apriCCIntestazione.do">
	<div class="section clearfix">
		<h3 class="titleSection">
			Su quale filiale vuoi aprire il conto?
		</h3>
		<div class="bs-example form-horizontal">
			<div class="form-group clearfix">
				<div class="form-field-input col-xs-12">
					<label for="sceltaFiliale" class="control-label">
						Filiale:
					</label>
		  			<div class="form-field">
						<select name="filiale" onchange="this.form.submit()" id="sceltaFiliale" class="form-control form-control-w-auto"><option value="0">Seleziona</option>
							
								<option value="2070">MONZA - VIA ZUCCHI, 28</option>
							
								<option value="-1" selected="selected">Altro</option></select>	
		  			</div>
				</div>
	  		</div>
		</div>
	</div>
</form>

<!-- CERCA FILIALE -->

<form id="formApriCC" method="post" action="/WEBHB/cc/apriCCIntestazione.do">
	<input type="hidden" name="flgCercaFiliale" value="1">
	<div class="section clearfix">
		<h3 class="titleSection">
			Cerca la filiale pi&ugrave; vicina a te
		</h3>
		<span class="rounded_corner">&nbsp;</span> 
		<div class="bs-example form-horizontal">
			<div class="form-group clearfix">
				<div class="form-field-input col-xs-4">
					<label for="sceltaFiliale" class="control-label">
						Indirizzo: 
					</label>
					<div class="form-field">
						<select name="tipoViaFiliale" class="form-control wauto floatl"><option value="via" selected="selected">Via</option>
<option value="viale">Viale</option>
<option value="piazza">Piazza</option>
<option value="corso">Corso</option>
<option value="frazione">Frazione</option>
<option value="vicolo">Vicolo</option>
<option value="strada">Strada</option>
<option value="contrada">Contrada</option>
<option value="localita">Localita</option>
<option value="largo">Largo</option>
<option value="altro">Altro</option></select>
						<input type="text" name="nomeViaFiliale" value="" class="form-control wauto margin-left10 floatl">
					</div>
				</div>
				<div class="form-field-input col-xs-4">
					<label for="sceltaFiliale" class="control-label">
						Citt&agrave;:
					</label>
					<div class="form-field">
						<input type="text" name="comuneFiliale" maxlength="30" size="30" value="" id="comuneFiliale" class="form-control ui-autocomplete-input" autocomplete="off">
						<input type="hidden" name="provinciaFiliale" value="" id="provinciaFiliale">
					</div>
				</div>
				<div class="form-field-input col-xs-4">
					<label class="control-label">
						CAP: 
					</label>
					<div class="form-field">
						<input type="text" name="capFiliale" maxlength="5" size="8" value="" id="capFiliale" class="form-control wauto">
					</div>
				</div>
				<div class="form-field-input col-xs-12">
					<label class="control-label">
						&nbsp;
					</label>
					<div class="form-field pull-right">
						<input type="submit" name="cercaFiliale" tabindex="2" value="CERCA FILIALE" class="btn">
					</div>
				</div>
			</div>
		</div> 	
	</div>
</form>


<!-- La tua filiale di riferimento -->


<script type="text/javascript">
$(document).ready(function() {
	// cerca filiale - ricerca comuni	
	$("#comuneFiliale").autocomplete({
		source: getPathContext() + '/cd/searchComuni.do',
		minLength: 3,
		select:function(event, ui){
			var prov_cap = ui.item.desc.split("|");
			$("#provinciaFiliale").attr("value", prov_cap[0]);
			$("#capFiliale").attr("value", prov_cap[1]);
		}
	});
	
	// cambia filiale
	var urlAjax = getPathContext()+ '/cc/cambiaFiliale.do'
	$('#cambiaFiliale').ajaxDialog('dialog', urlAjax, { title:'Cambia filiale', width:'650px' });
});

sceltaFiliali = function (codice, descrizioneCab, descrizione, indirizzo, cap, localita, provincia) {
	var filiale = [codice, descrizioneCab, descrizione, indirizzo, cap, localita, provincia];
	$.each (["codice", "descrizioneCab", "descrizione", "indirizzo", "cap", "localita", "provincia"], function (key, value){
		var element = $("#"+value);
		if (element!=undefined) {
			element.html(filiale[key]);
		}
		
		var formElement = $('input[name="filialeRapporto.'+value+'"][type="hidden"]');
		if (formElement.length!=0) {
			formElement.val(filiale[key]);
		} else {
			var submitForm = $('form[id="formApriCCApprofondimenti"]');
			if (submitForm!=undefined){
				var input = $("<input />", {type:"hidden", name:"filialeRapporto."+value, value:filiale[key]}); 
				submitForm.append(input);
			}
		}
	});
	$('#dialog').dialog('close');
}

</script>

	
</div>	



<div class="pull-right margin-bottom20">
	<input type="button" name="conferma" value="Avanti" onclick="$('#formApriCCApprofondimenti').submit()" class="btn btn-primary" alt="Avanti">	
</div>