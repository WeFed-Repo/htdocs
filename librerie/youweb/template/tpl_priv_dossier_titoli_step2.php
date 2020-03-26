<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		22/05/2017	

	</div>
</div>
<div class="riquadro clearfix">
<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		<div class="circle current_page">&nbsp;</div>
		<div class="circle current_page">&nbsp;</div>
		<div class="circle ">&nbsp;</div>
</div>
<div class="clearfix">
<style>
.imgSrv{
	float: none;
}
</style>
	<h1>
				<div class="hidden-print hidden-xxs flag dossierTitoli">&nbsp;</div>
 					<span>Apri il dossier titoli</span>
	</h1>
<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=663')" class="general-help help-icon hidden-xs"><img src="/HT/fe/img/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>
			<div class="col-xs-12 hidden-xs hidden-print">
		<div class="contentPagina">
			Per poter aprire un dossier titoli online e accedere ai servizi di  negoziazione, collocamento e consulenza &egrave; necessario identificare il  conto corrente di appoggio su cui regolare le operazioni effettuate.
		</div>
			</div>
</div>
<form id="dossierApri" method="post" action="/WEBHT/investimenti/dossierApri.do?resetCCregolamento=false">
<div style="display:none">
	<input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="817fed71dced546f04b28037221a6126">
</div>
	<div class="section clearfix">
		<h3 class="titleSection">		
			
			








		
			Conto di appoggio del dossier
		
		
		

 
		</h3>
		<div class="bs-example">
			<div class="form-group clearfix section">
				<div class="form-field col-xs-12">
					<span class="floatl margin-right20">
				  		<b>Conto di appoggio del dossier</b>
				  	</span>
			  		<span class="floatl col-xs-11">
			  			200100001657  - SEDE DI LODI              - TALLO MAURO,TALLO AN                               
		    		</span>
		    		<div class="pull-right">
						<input type="button" name="add" value="Modifica"  class="btn button-green" alt="Modifica">
					</div>
		    	</div>
			</div>
		</div>
	</div>
</form>

<form id="modifica" method="post" action="/WEBHT/investimenti/dossierIntestazione.do">
<div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="817fed71dced546f04b28037221a6126"></div>
	<div class="section clearfix">
		<h3 class="titleSection">
			A chi vuoi intestare il dossier titoli?
		</h3>
		<div class="bs-example">
			<div class="form-group clearfix">
				<div class="form-field-input col-sm-4  col-xs-12">
		  			<label class="control-label bold" for="contoCointestato">	
		  				Intestazione dossier titoli
		  			</label>
				  	<div class="form-field">
			  			<select name="ndgCointestazione" onchange="this.form.submit()" id="contoCointestato" class="form-control w-auto"><option value="000000251455" selected="selected">TALLO MAURO LUCA</option>
							
								<option value="000005688280">TALLO MAURO,TALLO ANDREA</option></select>
				  	</div>
			  	</div>
			</div>
		</div>
	</div>
</form>
<form id="formInvestimentiDossier" method="post" action="/WEBHT/investimenti/dossierAttivazioneApprofondimenti.do">
<div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="817fed71dced546f04b28037221a6126"></div>
	
		<div class="section clearfix">
			<h3 class="titleSection">	
			
			Primo intestatario
		</h3>
			<div class="accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
				<h3 class="intestazione ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons" role="tab" id="ui-id-2" aria-controls="ui-id-3" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>	
					<a href="#">TALLO MAURO LUCA</a>
				</h3>
				<div class="bs-example form-horizontal ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-3" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="false" style="display: block;">
					
					<div class="form-group">
						<div class="col-xs-12 clear-padding">
						  	<strong>Contatti:</strong>
						</div>
						<div class="form-field-input col-xs-12 col-sm-6 clear-padding">
						  	<label class="control-label" for="indirizzoEmail">
						  		Indirizzo e-mail di TALLO MAURO LUCA
						  	</label>
						</div>
					 	<div class="form-field-input col-xs-12 col-sm-6 clear-padding">
						  	
						  		
							  		<script type="text/javascript">
										var popolaEmail = function(email) {
											$('#email').val(email); 
											$('#dialogEmail').dialog('close');
										}
										function popolaEmailCopia(email) {
											$('#email').val(email); 
											$('#dialogEmail').dialog('close');
										}	
										function modificaMail(){
											var urlAjax = '/template/modale_modifica_contatti.php?popup=true'
											$('#contatti').ajaxDialog('dialogEmail', urlAjax, { title:'Modifica contatti' }, true);
											if ($('#email').val()=='')
												$('#email').val("Inserisci e-mail");
										
										}
									</script>
<div class="form-field">
	<input type="text" name="listaCointestatarioDossier[0].indirizzoEmail" value="mauroluca.tallo2@bancopopolare.it" readonly="readonly" id="email" style="border:0px;background-color:transparent;" class="col-xs-10 floatl">&nbsp;&nbsp;&nbsp;
	<input type="button" name="contatti floatl" value="&nbsp;" onclick="modificaMail();" id="contatti" class="btnEdit">
</div>
						  		
						  		
							
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	
</form>






<script>
	var visualizza = 'S';
	$(document).ready(function() {
		$('tr.pdfDossier').hide();
		if (visualizza=='S') {
			$('tr.pdfDossier').show();
		}	
	});
</script>
		
</div>

<div class="pull-right margin-bottom20">
	<input type="button" name="apriDossierIntestazione" value="Avanti" onclick="$('#formInvestimentiDossier').submit()" class="btn btn-primary">	
</div>
<script type="text/javascript">
	$(document).ready(function() 
	{
		$('.accordion').each(function(i, div) 
		{
			$(div).accordion({
				active: 0, //tutti aperti di default, poi il cliente può decidere di chiuderli
				animated: ($.browser.msie && parseInt($.browser.version) <= 6) ? false : 'slide',
				heightStyle: "content",
				collapsible: true
			});
		});		
	});
</script>
			