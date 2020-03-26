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
							
								<option value="2070" selected="selected">MONZA - VIA ZUCCHI, 28</option>
							
								<option value="-1">Altro</option></select>	
		  			</div>
				</div>
	  		</div>
		</div>
	</div>
</form>

<!-- CERCA FILIALE -->


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

	
		<form id="apriCCIntestazione" method="post" action="/WEBHB/cc/apriCCIntestazione.do" class="form-horizontal">
			<div class="section clearfix">
				<h3 class="titleSection">
					
					








		
			A chi vuoi intestarlo?
		
		
		
		


				</h3>
				 <div class="bs-example"> 
					<div class="form-group clearfix">
						<div class="form-field-input col-xs-4">
							<label for="intestatario">
								Intestazione conto corrente:
							</label>
							<div class="form-field">
								<select name="ndgCointestazione" onchange="this.form.submit()" id="intestatario" class="form-control w-auto"><option value="000015865341" selected="selected">COGNOME NONE</option></select>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<form id="formApriCCApprofondimenti" method="post" action="/WEBHB/cc/apriCCApprofondimenti.do">
			
				<div class="section clearfix">
					<h3 class="titleSection">	
						
						








		
			Primo intestatario
		
		
		
		


					</h3>
					<div class="accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
						<h3 class="ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>
							<a href="#">Primo intestatario - COGNOME NONE</a>
						</h3>
						<div class="bs-example form-horizontal ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="false" style="display: block;">
							<div class="form-group"> 
								<div class="col-xs-12 clear-padding">
								  	<strong>Contatti:</strong>
								</div>
								<div class="form-field-input col-xs-4 clear-padding">
									<label for="indirizzoEmail" class="control-label">
								  		Indirizzo e-mail di COGNOME NONE
								  	</label>
								</div>
								<div class="form-field-input col-xs-8 clear-padding">
								  	
								  		
									  		<script type="text/javascript">
												var popolaEmail = function(email) {
													$('#email').val(email); 
												}	
												$(function() {
													var urlAjax = getPathContext()+ '/serviziPerTe/modificaContatto.do?popup=true'
													$('#contatti').ajaxDialog('dialogEmail', urlAjax, { title:'Modifica contatti' });
													if ($('#email').val()=='')
														$('#email').val("Inserisci e-mail");
												});
											</script>
											<div class="form-field">
									  			<input type="text" name="listaCointestatari[0].indirizzoEmail" value="EMAIL@EMAIL.IT" readonly="readonly" id="email" style="border:0px;background-color:transparent;" class="col-xs-11 margin-top5 floatl">
						    					<input type="button" name="contatti" value="&nbsp;" id="contatti" class="btnEdit">
						    				</div>
								  		
								  		
									
								</div>

<!-- 									<div class="col-xs-12 clear-padding margin-top5"> -->

<!-- 									</div> -->
<!-- 									<div class="col-xs-12 clear-padding"> -->




<!-- 									</div> -->
<!-- 									<div class="col-xs-12 clear-padding margin-top5"> -->



<!-- 									</div>						 -->
<!-- 									<div class="col-xs-12 clear-padding margin-top5"> -->

<!-- 									</div>						 -->

								<div class="col-xs-12 clear-padding"></div>
								<div class="form-field-input col-xs-4 clear-padding">
									<label for="contattoTelefono" class="control-label">
								  		Contatto telefonico di COGNOME NONE
								  	</label>
								</div>
								<div class="form-field-input col-xs-8 clear-padding">
									
								  		
								  			<div class="margin-top5">
								  				0000000000
								  			</div>
								  		
								  		
								  	
								</div>
								
							</div>
						</div>
					</div>
				</div>
			
		</form>
		<script type="text/javascript"><!--
			$(document).ready(function() {
				$('.accordion').each(function(i, div) {
					$(div).accordion({
					
						active: 0, //tutti aperti in caso di errore				
						animated: ($.browser.msie && parseInt($.browser.version) <= 6) ? false : 'slide',
						heightStyle: "content",
						collapsible: true
					});
				});		
			});
		--></script>
	
</div>	



<div class="pull-right margin-bottom20">
	<input type="button" name="conferma" value="Avanti" onclick="$('#formApriCCApprofondimenti').submit()" class="btn btn-primary" alt="Avanti">	
</div>