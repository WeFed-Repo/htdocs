

						
						<div class="visible-print-block"> 
							<img src="/HT/fe/img/logo_youweb.png" title="Torna all'homepage" alt="Torna all'homepage">
							<div class="pull-right">
								  
								12/06/2017	
							</div>
						</div>
						

						

						
						





<script type="text/javascript">
	$(document).ready(function()
	{
		$(".valoreVuoto").each(function()
		{
		  if ($(this).text()=='')
		  	$(this).text('-');
		});
		fixHeightBoxDefault();
		$('#checkBoxPresaVisioneDichiarazione').live('click', function(event)
		{
			if ($('#checkBoxPresaVisioneDichiarazione').is(':checked'))
				$('#btnConferma').removeAttr('disabled');
			else
				$('#btnConferma').attr('disabled', 'disabled');
		});
	});
	$(window).resize(function() 
	{
		fixHeightBoxDefault();
	});
	function fixHeightBoxDefault()
	{
		var default_alt = 0;
		$(".col-sm-6").each(function(index)
		{
			var alt = $(this).find('.boxDefault').height();
			if(index % 2 != 0)
			{
				if(alt > default_alt )
				{
					var previous = index  - 1;
					$(".col-sm-6:eq("+previous+")").find(".boxDefault").height(alt);
				}
				else
				{
					$(this).find(".boxDefault").height(default_alt);
				}
				default_alt = 0;
			}
			else
			{
				default_alt = alt;
			}
		});
	}
</script>



<form id="formRichiestaFinanziamento" method="post" action="/WEBHT/finanziamento/richiestaFinanziamentoEsito.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="3e32f05800d4e09ee47ad776834871d8"></div>
	<div class="riquadro clearfix">
		
		









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag richiestaFinanziamento">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Richiesta finanziamento</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			<p style="text-align: center;"><img src="/HT/IMAGES/CONTENUTI/ricFin_riepilogo.png" alt=""></p>
		</div>



			</div>
		
	
</div>
		








	


		<div class="section clearfix">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="boxDefault">
						<h3>
							Dati intestatario
						</h3>
						<div>
							<div class="row">
								<label>Nome e cognome:</label>
								<span class="valoreVuoto" id="nomeCognome">Mauro Luca Tallo</span>
							</div>
							<div class="row">
								<label>Conto di appoggio:</label>
								<span class="valoreVuoto">00001657</span>
							</div>
							<div class="row">
								<label>Indirizzo di residenza:</label>
								<span class="valoreVuoto">FRAZIONE BARAZZINA II 24 - 26812 BORGHETTO LODIGIANO LO</span>
							</div>
							<div class="row">
								<label>Cellulare:</label>
								<span class="valoreVuoto">3351081820</span>
							</div>
							<div class="row">
								<label>Email:</label>
								<span class="valoreVuoto">MAUROLUCA.TALLO2@BANCOPOPOLARE.IT</span>
							</div>
						</div>
					</div>
				</div>			
				<div class="col-sm-6 col-xs-12">
					<div class="boxDefault" style="height: 297px;">
						<h3>
							Situazione abitativa
						</h3>
						<div>
							<div class="row">
								<label>Sei proprietario di immobili?:</label>
								<span class="valoreVuoto">No</span>
							</div>
							<div class="row">
								<label>Situazione abitativa:</label>
								<span class="valoreVuoto">AFFITTO</span>
							</div>
							<div class="row">
								<label>Importo affitto al mese (euro):</label>
								<span class="valoreVuoto">200,00</span>
							</div>
							<div class="row">
								<label>Anzianit&agrave; abitativa (anni):</label>
								<span class="valoreVuoto">1</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="boxDefault" style="height: 377px;">
						<h3>
							Situazione lavorativa
						</h3>
						<div>
							<div class="row">
								<label>Professione:</label>
								<span class="valoreVuoto">DISOCCUPATO/STUDENTE/MILITARE LEVA</span>
							</div>
							<div class="row">
								<label>Anno inizio attivit&agrave; lavorativa/pensione:</label>
								<span class="valoreVuoto">2017</span>
							</div>
							<div class="row">
								<label>Tipo contratto lavoro:</label>
								<span class="valoreVuoto">SENZA OCCUPAZIONE</span>
							</div>
							<div class="row">
								<label>Settore attivit&agrave;:</label>
								<span class="valoreVuoto">DATO NON CONOSCIUTO</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="boxDefault" style="height: 377px;">
						<h3>
							Situazione patrimoniale
						</h3>
						<div>
							<div class="row">
								<label>Stipendio/pensione (euro):</label>
								<span class="valoreVuoto">-</span>
							</div>
							<div class="row">
								<label>Redditi diversi (euro):</label>
								<span class="valoreVuoto">-</span>
							</div>
							<div class="row">
								<label>Altre spese mensili:</label>
								<span class="valoreVuoto">-</span>
							</div>
							<div class="row">
								<label>Hai la cessione del quinto?:</label>
								<span class="valoreVuoto">No</span>
							</div>
							<div class="row">
								<label>Hai accreditato lo stipendio/pensione sul conto?:</label>
								<span class="valoreVuoto">No</span>
							</div>
							<div class="row">
								<label>Carte di credito:</label>
								<span class="valoreVuoto">NESSUNA</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="boxDefault">
						<h3>
							Situazione famigliare
						</h3>
						<div>
							<div class="row">
								<label>Stato civile:</label>
								<span class="valoreVuoto">CONIUGATO/A</span>
							</div>
							<div class="row">
								<label>Regime patrimoniale:</label>
								<span class="valoreVuoto">SEPARAZIONE</span>
							</div>
							<div class="row">
								<label>Numero componenti nucleo famigliare:</label>
								<span class="valoreVuoto">1</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section clearfix">
			<h3 class="titleSection">Dichiarazione di consapevolezza</h3>
			<div class="bs-example"> 
				<div class="form-group">
					<div class="form-field col-sm-12 col-xs-12">
						<span class="floatl">
							<input type="checkbox" name="presaVisioneDichiarazione" value="on" id="checkBoxPresaVisioneDichiarazione">
							
							<b>Dichiarazione di consapevolezza</b>
						</span>
					</div>
					<div class="form-field-resume col-sm-12 col-xs-12 margin-top10">
						<div style="width:100%; height: 70px; overflow: auto; background: #fff; margin-bottom: 5px;">
							
							Il Conto Corrente indicato in fase di compilazione delle richiesta &egrave; necessario per l'erogazione del Finanziamento, che, in seguito, potr&agrave; comunque essere mantenuto anche in caso di chiusura di tale Conto Corrente (con gestione delle rate a mezzo Addebiti Diretti - SDD).<br>Sono consapevole delle sanzioni penali, amministrative e civili, nel caso di dichiarazioni mendaci, richiamate dall'art. 76 del DPR n.445 del 28/12/2000 e fornisco queste informazioni sotto la mia responsabilit&agrave;.
						</div>
					</div>
				</div>
			</div>
		</div>
		






		
<div class="section clearfix">
	<div class="bs-example fgvbhn">
		<div class="form-group">
			
	
		
		
			
			
				
					
				
				
							
			
				
					
				
				
			
						
	
	
	
	
		
		<div style="clear:both">
			<h3 class="titleSection">
				








		
			Conferma richiesta
		
		
		
		


				
			</h3>
		</div>
		
					<div class="form-field col-sm-6 col-xs-12">
						<label class="control-label">
							Per proseguire &egrave; necessario inserire la <b>Password usa e getta</b> riportata sul display del dispositivo di sicurezza Servizi You.
						</label>
					</div>
					<div class="form-field col-sm-5 col-xs-11 col-xs-offset-1 otp" id="bonOrdR">
						<div class="form-field-input">
							<img src="/HT/fe/img/OTPW.png" title="opt" alt="otp">
							<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control with-help" style="margin-top:5px" autofocus="">
							
								<a href="#" onclick="javascript:OpenHelp('/HT/HTML/HelpOtp.html')">
								<img src="/HT/fe/img/i_help.png" style="margin-top:0px;margin-left:3px" title="Help On Line" alt="Help On Line">
					</a>
				
						</div>		
					</div>
	
	
		</div>
	</div>
</div>








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
	</div>
	<div class="pull-right">
		
		<input type="button" name="" value="Modifica" onclick="$('#formIndietro').submit();" class="btn btn-primary" alt="Modifica">
		
		<input type="submit" name="esito" value="Conferma" disabled="disabled" id="btnConferma" class="btn btn-primary execute" alt="Conferma">
	</div>
</form>

<form id="formIndietro" method="post" action="/WEBHT/finanziamento/richiestaFinanziamentoEsito.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="3e32f05800d4e09ee47ad776834871d8"></div>
	<input type="hidden" name="indietro" value="indietro">
</form>	
