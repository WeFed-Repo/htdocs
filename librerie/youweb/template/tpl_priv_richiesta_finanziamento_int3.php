
						




						
						<div class="visible-print-block"> 
							<img src="/HT/fe/img/logo_youweb.png" title="Torna all'homepage" alt="Torna all'homepage">
							<div class="pull-right">
								  
								12/06/2017	
							</div>
						</div>
						

						

						
						










<script type="text/javascript">
	$(document).ready(function()
	{
		
			
			
				
				
					$('#formUpload_ULT_CU_DICRED').find('.primaUpload').show();	
				
				
			
		
			
			
				
				
					$('#formUpload_ULT_BUST').find('.primaUpload').show();	
				
				
			
		
			
			
				
				
					$('#formUpload_BUST_MES_PREC').find('.primaUpload').show();	
				
				
			
		
		$("#dialog-alert").dialog({
			modal : true,
			autoOpen : false,
			title: "Attenzione"
		});
		$("#dialog-indietro").dialog({
			modal : true,
			autoOpen : false,
			title: "Attenzione"
		});
		/*CODICE JAVASCRPIT CHE OCCORRE PER CENTRARE IN ALTEZZA L'IMMAGINE*/
		var altezzaImmagine = $('#immagineFinanziamento').height();
		var altezzaContenitore = $('#divContenitoreImmagine').parent().height();
		var margine = Math.floor((altezzaContenitore-altezzaImmagine)/2);
		$('#immagineFinanziamento').css('margin-top',margine+'px');
	});
	function verificaDocumenti()
	{
		
		var fileCaricati = false;
		
		if ($('div.dopoUpload:visible').length)
		{
			fileCaricati = true;
		}
		if (fileCaricati)
			$('#dialog-indietro').dialog('open');
		else
			$('#formIndietro').submit();
	}
</script>









<style type="text/css">
	.gruppoTesta {padding: 0; margin-top: 5px;}
	.gruppoCentro {padding: 0;margin-top: 5px; margin-bottom: 5px;}
	.gruppoCoda {padding: 0; margin-bottom: 5px;}
</style>

<script type="text/javascript">
	var erroreTipologia = 'Il formato accettato per i documenti è solo PDF. Si prega di modificare o cambiare il file selezionato.';
	var erroreDimensione = 'La dimensione massima supportata è 4MB. Si prega di modificare o cambiare il file selezionato.';
	$(document).ready(function()
	{
		$(".progressbar").progressbar({
			value: false
   		});
		$('input:file').live('change', function()
		{
			var file = $(this).prop('files')[0];
			var errore = false;
			if (file!=null)
			{
				var fileName = file.name;
				
				if (!(/.pdf$/.test(fileName)))
				{
					$('#testoAlert').text(erroreTipologia);
					$("#dialog-alert").dialog('open');
					return;
				}
				var fileSize = file.size;
				if (fileSize>4096000)
				{
					$('#testoAlert').text(erroreDimensione);
					$("#dialog-alert").dialog('open');
					return;
				}
				/*HO PASSATO I CONTROLLI, DEVO FARE SUBMIT DEL FORM*/
				$(this).closest("form").submit();
			}
		});
		$("#dialog-alert").dialog({
			title:'Attenzione',
			modal: true,
			autoOpen: false,
			resizable: false,
			close: function () {$('#dialog-alert').dialog('close');}
		});
		/*METODO PER GESTIRE IL SUBMIT VIA AJAX DEL FORM PER L'UPLOAD DEI FILE*/
		$('form.ajaxSubmit').ajaxForm({
			/*EVENTO CHIAMATO PRIMA DI FARE SUBMIT DEL FORM*/
	        beforeSubmit: function(p1, form, p3) {
	        	$(form).find('.primaUpload').hide();
	        	$(form).find('.duranteUpload').show();
	        	var nomeFile = $(form).find('input:file').prop('files')[0].name;
	        	$(form).find('.nomeFile').text(nomeFile);
	        	fixHeightContenitoreUploadFile();
	        	fixVerticalAlignCenterContenitoreUploadFile();
	        },
	        /*EVENTO CHIAMATO SUCCESSIVAMENTE AL SUBMIT. RITORNA SEMPRE ESITO POSITIVO (A MENO CHE L'APPLICATION SERVER NON SIA GIU')*/
	        success: function(data, p1, p2, form) {
	            if (data.indexOf('UPLOAD ESITO POSITIVO')!=-1) 
	            {
					var elementoSelezionato = $(form).find('.selectDataRiferimento option:selected').text();
	            	$(form).find('.labelDataRiferimento').text(elementoSelezionato); 
					$(form).find('.duranteUpload').hide();
					$(form).find('.dopoUpload').show();
	            }
	            else
	            {
	            	$(form).find('.duranteUpload').hide();
	            	$(form).find('.primaUpload').show();
	            	$('#testoAlert').html(data);
					$("#dialog-alert").dialog('open');
	            }
	            fixHeightContenitoreUploadFile();
	            fixVerticalAlignCenterContenitoreUploadFile();
	        }
	    });
	    $('.selectDataRiferimento').change(function()
	    {
	    	var value = $(this).val();
	    	var form = $(this).closest('form');
	    	if (value=='')
	    	{
	    		$(form).find(".pulsateUploadFile").prop('disabled', true);
	    		$(form).find(".pulsateUploadFile").addClass('disabled');
	    	}
	    	else
	    	{
	    		$(form).find(".pulsateUploadFile").prop('disabled', false);
	    		$(form).find(".pulsateUploadFile").removeClass('disabled');
	    	}
	    });
	    fixHeightContenitoreUploadFile();
	    fixVerticalAlignCenterContenitoreUploadFile();
	});
	$(window).resize(function() 
	{
		fixHeightContenitoreUploadFile();
		fixVerticalAlignCenterContenitoreUploadFile();
	});
	var urlEliminaFile = getPathContext()+"/finanziamento/richiestaFinanziamentoEliminaFile.do" ;
	function eliminaFile(form)
	{
		$.ajax({
    		url: urlEliminaFile,
    		data: {tipoUpload:$(form).find('.tipoUpload').val()},
			success: function(data) 
    		{
				if (data.indexOf('CANCELLAZIONE ESITO POSITIVO')!=-1) 
	            {
					$(form).find('.dopoUpload').hide();
					$(form).find('.primaUpload').show();
					$(form).find('.selectDataRiferimento').val('');
					$(form).find('.nomeFile').text('');
					$(form).find(".pulsateUploadFile").prop('disabled', true);
	    			$(form).find(".pulsateUploadFile").addClass('disabled');
	            }
	            else
	            {
	            	$('#testoAlert').html(data);
					$("#dialog-alert").dialog('open');
	            }
	            fixHeightContenitoreUploadFile();
	            fixVerticalAlignCenterContenitoreUploadFile();
    		}
  		});
	}
	function fixHeightContenitoreUploadFile()
	{
		
		var maxHeight = 0;
		$('.contenitoreUploadFile .gruppoTesta').each(function()
		{
			
			$(this).css('height','');
			var altezza = $(this).height();
			if (altezza>maxHeight) maxHeight=altezza;
		});
		$('.contenitoreUploadFile .gruppoTesta').each(function(){$(this).height(maxHeight);});
		maxHeight = 0;
		$('.contenitoreUploadFile .gruppoCentro').each(function()
		{
			$(this).css('height','');
			var altezza = $(this).height();
			if (altezza>maxHeight) maxHeight=altezza;
		});
		$('.contenitoreUploadFile .gruppoCentro').each(function(){$(this).height(maxHeight);});
		maxHeight = 0;
		$('.contenitoreUploadFile .gruppoCoda').each(function()
		{
			$(this).css('height','');
			var altezza = $(this).height();
			if (altezza>maxHeight) maxHeight=altezza;
		});
		$('.contenitoreUploadFile .gruppoCoda').each(function(){$(this).height(maxHeight);});
	}
	function fixVerticalAlignCenterContenitoreUploadFile()
	{
		
		$('.contenitoreUploadFile .primaUpload:visible').each(function()
		{
			var altezza = $(this).height();
			var altezzaContenitore = $(this).parent().height();
			var margine = Math.floor((altezzaContenitore-altezza)/2);
			$(this).css('margin-top',margine+'px');
		});
		$('.contenitoreUploadFile .duranteUpload:visible').each(function()
		{
			var altezza = $(this).height();
			var altezzaContenitore = $(this).parent().height();
			var margine = Math.floor((altezzaContenitore-altezza)/2);
			$(this).css('margin-top',margine+'px');
		});
		$('.contenitoreUploadFile .dopoUpload:visible').each(function()
		{
			var altezza = $(this).height();
			var altezzaContenitore = $(this).parent().height();
			var margine = Math.floor((altezzaContenitore-altezza)/2);
			$(this).css('margin-top',margine+'px');
		});
		
	}
</script>





<div class="riquadro clearfix form-horizontal">
	
	









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
			<p style="text-align: center;"><img src="/HT/IMAGES/CONTENUTI/ricFin_documenti.png" alt=""></p>
		</div>



			</div>
		
	
</div>
	








	


	<div class="section clearfix">
		<h3 class="titleSection">Caricamento documenti</h3>
		<div class="row">
			
			<div class="col-sm-12 col-xs-12">
				<div class="col-sm-12 col-xs-12">
					
					Nella sezione "Approfondimenti" hai dichiarato di essere <b>DISOCCUPATO/STUDENTE/MILITARE LEVA</b>. Per completare la tua pratica avremmo bisogno di ricevere i seguenti documenti (solo file PDF):
				</div>
				
				
					
						
						
					
					<div class="col-sm-4  col-xs-12 margin-top10">
						
						












<div class="col-sm-12 col-xs-12">
	<form id="formUpload_ULT_CU_DICRED" method="post" action="/WEBHT/finanziamento/richiestaFinanziamentoFileUpload.do" class="form-horizontal ajaxSubmit" enctype="multipart/form-data">
		<input type="hidden" name="tipoUpload" value="ULT_CU_DICRED" class="tipoUpload">
		<div class="contenitoreUploadFile">
			<!-- HEADER -->
			<div class="gruppoTesta col-sm-12 col-xs-12 oCenter" style="height: 79px;">
				<div class="primaUpload duranteUpload row" style="margin-top: 19px;">
					<b>Ultima CU o ultima dichiarazione dei redditi</b>
				</div>
				<div class="dopoUpload row" style="display:none;">
					<b>
						Ultima CU o ultima dichiarazione dei redditi
						<br>
						<span class="labelDataRiferimento">
							
							
								
							
								
							
								
							
								
							
								
							
								
							
						</span>
					</b>
				</div>
			</div>
			<!-- CENTER -->
			<div class="gruppoCentro col-sm-12 col-xs-12" style="height: 109px;">
				<div class="primaUpload row" style="margin-top: 19px;">
					<div>
						<label>Data riferimento</label>
					</div>
					<div>
						<select name="dataRiferimento(ULT_CU_DICRED)" class="form-control selectDataRiferimento"><option value="">Seleziona...</option>
							
								<option value="31/12/2016">2016</option>
							
								<option value="31/12/2015">2015</option>
							
								<option value="31/12/2014">2014</option>
							
								<option value="31/12/2013">2013</option>
							
								<option value="31/12/2012">2012</option>
							
								<option value="31/12/2011">2011</option></select>
					</div>
				</div>
				<div class="duranteUpload row oCenter" style="display:none;">
					<span class="nomeFile">
						
					</span>
				</div>
				<div class="dopoUpload row oCenter" style="display:none;">
					<img src="/HT/IMAGES/ico_pdf2.gif" alt="File PDF" title="File PDF">
					&nbsp;
					<a href="/WEBHT/finanziamento/richiestaFinanziamentoDownloadFile?tipoFile=ULT_CU_DICRED" target="_blank"><span class="nomeFile" style="display: block; overflow: hidden;">
							
						</span></a>
				</div>
			</div>
			<!-- BOTTOM -->
			<div class="gruppoCoda col-sm-12 col-xs-12 oCenter" style="height: 53px;">
				<div class="primaUpload row" style="margin-top: 19px;">
					
					<input type="button" name="" value="Allega file" onclick="$(this).next().click();" disabled="disabled" class="btn btn-primary pulsateUploadFile disabled" alt="Allega file">
					<input type="file" name="file(ULT_CU_DICRED)" accept=".pdf" value="" style="display:none;">
				</div>
				<div class="duranteUpload row" style="display:none;">
					<div class="progressbar ui-progressbar ui-widget ui-widget-content ui-corner-all ui-progressbar-indeterminate" style="height: 15px;" role="progressbar" aria-valuemin="0"><div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 102%;"><div class="ui-progressbar-overlay"></div></div></div>
				</div>
				<div class="dopoUpload row" style="display:none;">
					
					<input type="button" name="" value="Elimina" onclick="eliminaFile($(this).closest('form'));"  class="btn btn-primary eliminaFile" alt="Elimina">
				</div>
			</div>
		</div>
	</form>
</div>
<div class="col-sm-12 col-xs-12 oCenter">
	
		OBBLIGATORIO
		
	
</div>

					</div>
				
					
						
						
					
					<div class="col-sm-4  col-xs-12 margin-top10">
						
						












<div class="col-sm-12 col-xs-12">
	<form id="formUpload_ULT_BUST" method="post" action="/WEBHT/finanziamento/richiestaFinanziamentoFileUpload.do" class="form-horizontal ajaxSubmit" enctype="multipart/form-data">
		<input type="hidden" name="tipoUpload" value="ULT_BUST" class="tipoUpload">
		<div class="contenitoreUploadFile">
			<!-- HEADER -->
			<div class="gruppoTesta col-sm-12 col-xs-12 oCenter" style="height: 79px;">
				<div class="primaUpload duranteUpload row" style="margin-top: 29px;">
					<b>Ultima busta paga</b>
				</div>
				<div class="dopoUpload row" style="display:none;">
					<b>
						Ultima busta paga
						<br>
						<span class="labelDataRiferimento">
							
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
						</span>
					</b>
				</div>
			</div>
			<!-- CENTER -->
			<div class="gruppoCentro col-sm-12 col-xs-12" style="height: 109px;">
				<div class="primaUpload row" style="margin-top: 19px;">
					<div>
						<label>Data riferimento</label>
					</div>
					<div>
						<select name="dataRiferimento(ULT_BUST)" class="form-control selectDataRiferimento"><option value="">Seleziona...</option>
							
								<option value="12/06/2017">GIU 2017</option>
							
								<option value="31/05/2017">MAG 2017</option>
							
								<option value="30/04/2017">APR 2017</option>
							
								<option value="31/03/2017">MAR 2017</option>
							
								<option value="28/02/2017">FEB 2017</option>
							
								<option value="31/01/2017">GEN 2017</option>
							
								<option value="31/12/2016">DIC 2016</option>
							
								<option value="30/11/2016">NOV 2016</option>
							
								<option value="31/10/2016">OTT 2016</option>
							
								<option value="30/09/2016">SET 2016</option>
							
								<option value="31/08/2016">AGO 2016</option>
							
								<option value="31/07/2016">LUG 2016</option>
							
								<option value="30/06/2016">GIU 2016</option></select>
					</div>
				</div>
				<div class="duranteUpload row oCenter" style="display:none;">
					<span class="nomeFile">
						
					</span>
				</div>
				<div class="dopoUpload row oCenter" style="display:none;">
					<img src="/HT/IMAGES/ico_pdf2.gif" alt="File PDF" title="File PDF">
					&nbsp;
					<a href="/WEBHT/finanziamento/richiestaFinanziamentoDownloadFile?tipoFile=ULT_BUST" target="_blank"><span class="nomeFile" style="display: block; overflow: hidden;">
							
						</span></a>
				</div>
			</div>
			<!-- BOTTOM -->
			<div class="gruppoCoda col-sm-12 col-xs-12 oCenter" style="height: 53px;">
				<div class="primaUpload row" style="margin-top: 19px;">
					
					<input type="button" name="" value="Allega file" onclick="$(this).next().click();" disabled="disabled"  class="btn btn-primary pulsateUploadFile disabled" alt="Allega file">
					<input type="file" name="file(ULT_BUST)" accept=".pdf" value="" style="display:none;">
				</div>
				<div class="duranteUpload row" style="display:none;">
					<div class="progressbar ui-progressbar ui-widget ui-widget-content ui-corner-all ui-progressbar-indeterminate" style="height: 15px;" role="progressbar" aria-valuemin="0"><div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 102%;"><div class="ui-progressbar-overlay"></div></div></div>
				</div>
				<div class="dopoUpload row" style="display:none;">
					
					<input type="button" name="" value="Elimina" onclick="eliminaFile($(this).closest('form'));"  class="btn btn-primary eliminaFile" alt="Elimina">
				</div>
			</div>
		</div>
	</form>
</div>
<div class="col-sm-12 col-xs-12 oCenter">
	
		
		Opzionale
	
</div>

					</div>
				
					
						
						
					
					<div class="col-sm-4 col-xs-12 margin-top10">
						
						












<div class="col-sm-12 col-xs-12">
	<form id="formUpload_BUST_MES_PREC" method="post" action="/WEBHT/finanziamento/richiestaFinanziamentoFileUpload.do" class="form-horizontal ajaxSubmit" enctype="multipart/form-data">
		<input type="hidden" name="tipoUpload" value="BUST_MES_PREC" class="tipoUpload">
		<div class="contenitoreUploadFile">
			<!-- HEADER -->
			<div class="gruppoTesta col-sm-12 col-xs-12 oCenter" style="height: 79px;">
				<div class="primaUpload duranteUpload row" style="margin-top: 29px;">
					<b>Busta paga mese precedente</b>
				</div>
				<div class="dopoUpload row" style="display:none;">
					<b>
						Busta paga mese precedente
						<br>
						<span class="labelDataRiferimento">
							
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
								
							
						</span>
					</b>
				</div>
			</div>
			<!-- CENTER -->
			<div class="gruppoCentro col-sm-12 col-xs-12" style="height: 109px;">
				<div class="primaUpload row" style="margin-top: 19px;">
					<div>
						<label>Data riferimento</label>
					</div>
					<div>
						<select name="dataRiferimento(BUST_MES_PREC)" class="form-control selectDataRiferimento"><option value="">Seleziona...</option>
							
								<option value="12/06/2017">GIU 2017</option>
							
								<option value="31/05/2017">MAG 2017</option>
							
								<option value="30/04/2017">APR 2017</option>
							
								<option value="31/03/2017">MAR 2017</option>
							
								<option value="28/02/2017">FEB 2017</option>
							
								<option value="31/01/2017">GEN 2017</option>
							
								<option value="31/12/2016">DIC 2016</option>
							
								<option value="30/11/2016">NOV 2016</option>
							
								<option value="31/10/2016">OTT 2016</option>
							
								<option value="30/09/2016">SET 2016</option>
							
								<option value="31/08/2016">AGO 2016</option>
							
								<option value="31/07/2016">LUG 2016</option>
							
								<option value="30/06/2016">GIU 2016</option></select>
					</div>
				</div>
				<div class="duranteUpload row oCenter" style="display:none;">
					<span class="nomeFile">
						
					</span>
				</div>
				<div class="dopoUpload row oCenter" style="display:none;">
					<img src="/HT/IMAGES/ico_pdf2.gif" alt="File PDF" title="File PDF">
					&nbsp;
					<a href="/WEBHT/finanziamento/richiestaFinanziamentoDownloadFile?tipoFile=BUST_MES_PREC" target="_blank"><span class="nomeFile" style="display: block; overflow: hidden;">
							
						</span></a>
				</div>
			</div>
			<!-- BOTTOM -->
			<div class="gruppoCoda col-sm-12 col-xs-12 oCenter" style="height: 53px;">
				<div class="primaUpload row" style="margin-top: 19px;">
					
					<input type="button" name="" value="Allega file" onclick="$(this).next().click();" disabled="disabled"  class="btn btn-primary pulsateUploadFile disabled" alt="Allega file">
					<input type="file" name="file(BUST_MES_PREC)" accept=".pdf" value="" style="display:none;">
				</div>
				<div class="duranteUpload row" style="display:none;">
					<div class="progressbar ui-progressbar ui-widget ui-widget-content ui-corner-all ui-progressbar-indeterminate" style="height: 15px;" role="progressbar" aria-valuemin="0"><div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 102%;"><div class="ui-progressbar-overlay"></div></div></div>
				</div>
				<div class="dopoUpload row" style="display:none;">
					
					<input type="button" name="" value="Elimina" onclick="eliminaFile($(this).closest('form'));"  class="btn btn-primary eliminaFile" alt="Elimina">
				</div>
			</div>
		</div>
	</form>
</div>
<div class="col-sm-12 col-xs-12 oCenter">
	
		
		Opzionale
	
</div>

					</div>
				
			</div>
		</div>
	</div>
</div>

<form id="formRichiestaFinanziamento" method="post" action="/WEBHT/finanziamento/richiestaFinanziamentoRiepilogo.do" class="form-horizontal">
	<div class="pull-right">
		
		<input type="button" name="" value="Indietro" onclick="verificaDocumenti();" class="btn btn-primary" alt="Indietro">
		
		<input type="submit" name="riepilogo" value="Avanti" id="btnAvanti" class="btn btn-primary" alt="Avanti">
	</div>
</form>

<form id="formIndietro" method="post" action="/WEBHT/finanziamento/richiestaFinanziamentoRiepilogo.do">
	<input type="hidden" name="indietro" value="indietro">
</form>
