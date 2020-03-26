
						





						
						<div class="visible-print-block"> 
							<img src="/HT/fe/img/logo_youweb.png" title="Torna all'homepage" alt="Torna all'homepage">
							<div class="pull-right">
								  
								12/06/2017	
							</div>
						</div>
						

						

						
						





<script type="text/javascript">
	var url = getPathContext()+"/finanziamento/richiestaFinanziamentoIntestazioneAjax.do" ;
	$(document).ready(function()
	{
		$('#btnAvanti').attr('disabled', 'disabled');
		/*REGISTRO L'EVENTO SULLA COMBO RAPPORTI PER RICARICARE LA PARTE VARIABILE DI PAGINA*/
		$('#contoAppoggio').live('change', function()
		{
			var valore = $('#contoAppoggio :selected').val();
			/*NASCONDO LA SEZIONE DELLE CONDIZIONI*/
			$('#datiIntestatario').empty();
			$('#btnAvanti').attr('disabled', 'disabled');
			if(valore != '0')
			{
				$.ajax({
		    		url: url,
		    		data: {contoAppoggio:valore},
					success: function(data) 
		    		{
						$('#datiIntestatario').empty();
						$('#datiIntestatario').append(data);
		    		}
		  		});
			}
		});
		<!-- QUESTA CHIAMATA SERVE PER RICARICARE LA PAGINA QUANDO STO FACENDO MODIFICA DALLA PAGINA SUCCESSIVA -->
		var datiIntestatarioVuoti = $('#datiIntestatario').is(':empty');
		var valoreSelezioneCC = $( "#contoAppoggio" ).val();
		if (datiIntestatarioVuoti && valoreSelezioneCC != '0')
			$("#contoAppoggio").change();
		<!-- QUESTA CHIAMATA SERVE PER SELEZIONARE L'UNICO RAPPORTO NELLA LISTA SE PRESENTE UN SOLO RAPPORTO -->
		var valore = $('#contoAppoggio :selected').val();
		if (valore=='0')
		{
			var numeroRapporti = $('#contoAppoggio option').length;
			if (numeroRapporti == 2)
			{
				<!-- IN QUESTO CASO DEVO SELEZIONARE IL SECONDO ELEMENTO E POI CHIAMARE L'EVENTO CHANGE -->
				$("#contoAppoggio option:eq(1)").attr("selected", "selected");
				$("#contoAppoggio").change();
			}
		}
	});
</script>

<form id="formRichiestaFinanziamento" method="post" action="/WEBHT/finanziamento/richiestaFinanziamentoApprofondimenti.do" class="form-horizontal">
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
			<p style="text-align: center;"><img src="/HT/IMAGES/CONTENUTI/ricFin_intestazione.png" alt=""></p>
		</div>



			</div>
		
	
</div>
		








	


		<div class="section clearfix">
			<h3 class="titleSection">Conto di appoggio</h3>
			<div class="bs-example">
				<div class="form-group">
					<div class="col-sm-12 col-xs-12 margin-bottom10">
						<label class="control-label">
							Seleziona il conto corrente di appoggio sul quale verr&agrave; erogato il finanziamento e sul quale verranno addebitate le rate.
						</label>
					</div>
					<div class="col-sm-12 col-xs-12">
			  			<select name="chiaveRapporto" id="contoAppoggio" class="form-control w-auto"><option value="0">Seleziona un conto corrente...</option>
							
								<option value="001|2001|200100001657">200100001657 - SEDE DI LODI - TALLO MAURO,TALLO ANDREA</option>
							
								<option value="001|2001|200100003610">200100003610 - SEDE DI LODI - TALLO MAURO LUCA</option></select>
					</div>
				</div>
			</div>
		</div>
		<div id="datiIntestatario">





<script type="text/javascript">
	$(document).ready(function() 
	{
		$('#btnAvanti').removeAttr('disabled');
	});
	var popolaEmail = function(email) {
		$('#email').html('<strong>'+email+'</strong>'); 
	}	
	$(function() {
		var urlAjax = getPathContext()+ '/serviziPerTe/modificaContatto.do?popup=true'
		$('#contatti').ajaxDialog('dialogEmail', urlAjax, { title:'Modifica contatti' });
		if ($('#email').val()=='')
			$('#email').val("Inserisci e-mail");
	});
</script>

<div class="section clearfix">
	<h3 class="titleSection">Indirizzo di residenza</h3>
	<div class="bs-example">
		<div class="form-group">
			<div class="form-field-input col-sm-6 col-xs-12 clear-padding">
				<div class="col-sm-3 col-xs-3">
					<label class="control-label">Indirizzo:</label>
				</div>
				<div class="col-sm-9 col-xs-9">
					<label class="control-label"><strong>FRAZIONE BARAZZINA II 24 - 26812 BORGHETTO LODIGIANO LO</strong></label>
				</div>
			</div>
			<div class="form-field-input col-sm-6 col-xs-12 clear-padding">
				<div class="col-sm-3 col-xs-3">
					<label class="control-label">Nazione:</label>
				</div>
				<div class="col-sm-9 col-xs-9">
					<label class="control-label"><strong>
						
							ITALIA
							
						
					</strong></label>
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="section clearfix margin-bottom10">
	<h3 class="titleSection">Dati intestatario</h3>
	<div class="bs-example">
		<div class="form-group">
			<div class="form-field-input col-sm-6 col-xs-12 clear-padding">
				<div class="col-sm-3 col-xs-3">
					<label class="control-label">Nome:</label>
				</div>
				<div class="col-sm-9 col-xs-9">
					<label class="control-label"><strong>MAURO LUCA</strong></label>
				</div>
			</div>
			<div class="form-field-input col-sm-6 col-xs-12 clear-padding">
				<div class="col-sm-3 col-xs-3">
					<label class="control-label">Cellulare:</label>
				</div>
				<div class="col-sm-9 col-xs-9">
					<label class="control-label"><strong>3351081820</strong></label>
				</div>
			</div>
			<div class="form-field-input col-sm-6 col-xs-12 clear-padding">
				<div class="col-sm-3 col-xs-3">
					<label class="control-label">Cognome:</label>
				</div>
				<div class="col-sm-9 col-xs-9">
					<label class="control-label"><strong>TALLO</strong></label>
				</div>
			</div>
			<div class="form-field-input col-sm-6 col-xs-12 clear-padding">
				<div class="col-sm-3 col-xs-3">
					<label class="control-label">Email:</label>
				</div>
				<div class="col-sm-9 col-xs-9">
					<label class="control-label col-xs-10" style="padding-left: 0;" id="email"><strong>MAUROLUCA.TALLO2@BANCOPOPOLARE.IT</strong></label>
					<input type="button" name="contatti" value="&nbsp;" id="contatti" class="btnEdit hidden-xs">
				</div>
			</div>
		</div>
	</div>	
</div></div>
	</div>
	<div class="pull-right">
		
		<input type="submit" name="approfondimenti" value="Avanti" id="btnAvanti" class="btn btn-primary" alt="Avanti">
	</div>
</form>
