					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							25/05/2017	
						</div>
					</div>
					
					
					
					





<script type="text/javascript">
	$(document).ready(function()
	{
		
		$('#linkInformativa').click(function()
		{
			$('#presaVisione').removeAttr('disabled');

		});
		$('#presaVisione').change(function()
		{
			if ($(this).is(':checked'))
			{
				$('#primaRisposta').show();
				if($('input[name="questionario.sezione[0].domanda[0].risposta[1].selezionata"]').attr('value') == 'true')
				{
					$('#codiceOTP').val('');
					$('#divOTP').show();
					$('#avanti').attr('disabled', true);

				}
				if($('input[name="questionario.sezione[0].domanda[0].risposta[0].selezionata"]').attr('value') == 'true')
				{
					$('#avanti').removeAttr('disabled');
				}
			}
			else{$('#primaRisposta').hide();}
		});
		$('img').click(function()
		{
			
			if($('input[name="questionario.sezione[0].domanda[0].risposta[0].selezionata"]').attr('value') == 'true')
			{
				$('#divOTP').hide();
				$('#codiceOTP').val('');
				$('#avanti').removeAttr('disabled');
			}
			if($('input[name="questionario.sezione[0].domanda[0].risposta[1].selezionata"]').attr('value') == 'true')
			{
				$('#codiceOTP').val('');
				$('#divOTP').show();
				$('#avanti').attr('disabled', true);

			}
		});
		$('input[name="codiceOTP"]').keyup(function()
		{
			$('#avanti').removeAttr("disabled");
			if($('input[name="codiceOTP"]').val().length==0){
				$('#avanti').attr('disabled', true);
			}		
		});
	});
</script>

<form id="formQuestionarioMifid" method="post" action="/WEBHT/investimenti/mifidConfermaPrimaRisposta.do">
	<div class="riquadro clearfix">
		
		









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag investimentiMifid">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Questionario Mifid</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Questionario MIFID&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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
				









			</div>
		
	
</div>
		








	


		




<div class="clearfix">
	<div class="col-sm-6 clearfix clear-padding-left margin-top10" style="padding-right:15px">
		<div class="innerBoxSkyBlue margin-left10  clearfix col-xs-12">
			<div>
				<div class="row">
					<div class="titolo">
						<div class="daytrader"><h1 class="boxTitle txt_center">Intestatario</h1></div>
		 			</div>
		 		</div>
				<div class="row">
					<div class="col-xs-6">Nome:</div>
					<div class="col-xs-6"><b>LOAAM UURC</b></div>
				</div>
				<div class="row">
					<div class="col-xs-6">Cognome:</div>
					<div class="col-xs-6"><b>TLOLA</b></div>
				</div>
				<div class="row">
					<div class="col-xs-6">Codice Fiscale:</div>
					<div class="col-xs-6"><b>TLLMLC70A30F205O</b></div>
				</div>
			</div>
		</div>	
	</div>
	<div class="col-sm-6 clearfix clear-padding-left margin-top10" style="padding-right:15px">
		<div class="innerBoxSkyBlue margin-left10  clearfix col-xs-12">
			<div>
		 		<div class="row">
		 			<div class="titolo">
						<div class="daytrader"><h1 class="boxTitle txt_center">Questionario Mifid </h1></div>
		 			</div>
		 		</div>
				<div class="row"> 
					<div class="col-xs-6">Stato:</div>
					<div class="col-xs-6"><b>
					Questionario completo</b>
					</div>
				</div>
				<div class="row"> 
					<div class="col-xs-6">Dichiarazione del:</div>
					<div class="col-xs-6"><b>06/12/2016</b></div>
				</div>
				<div class="row"> 
					<div class="col-xs-6">Valido fino al:</div>
					<div class="col-xs-6"><b>05/12/2019</b></div>
				</div>
			</div>
		</div>
	</div>
</div>
			<div class="clearfix">
				<!--<div class="form-field col-xs-12 margin-top10">
				 	<div style="clear:left">
					 	<img src="/HT/IMAGES/frecciaGrande.png">
					  	<img src="/HT/IMAGES/ico_pdf2.gif">
					  	<a href="/HT/05034/PDF/MIFID/Informativa preventiva.pdf" target="_blank" id="linkInformativa" class="moduloCondizioni">MiFID: Informativa preventiva</a>
					</div> 
				</div>-->
				<p>Per proseguire scarica e leggi il documento sottostante:</p>
				<div class="pulsanti">
					<div class="context-buttons pull-left" style="margin-left:10px">
						<a href="/HT/05034/PDF/MIFID/Informativa preventiva.pdf" target="_blank" id="linkInformativa" class="moduloCondizioni btnMifid"></a>
					</div>
				</div>
				<div class="form-field col-xs-12 margin-top10">
					<div style="clear:left">
					  	<label class="control-label" for="presaVisioneModuloConsensoPrivacy">
						   	<input type="checkbox" name="presaVisione" value="on" disabled="disabled" id="presaVisione">
					  		<span class="font-normal">Dichiaro di aver letto il documento di Informativa Preventiva alla compilazione del questionario MiFID</span>
					  	</label>
					  </div>
			  	</div>
			</div>
			<div class="section clearfix" id="primaRisposta" style="margin-bottom: 10px; display: none;">
				<!--<h3 class="titleSection">Compila il questionario</h3>-->
			<style type="text/css">
	div.bs-example {
		line-height: 1.5;
	}
</style>



<div class="bs-example form-horizontal">
	<div class="form-group">
		
			
			
			
				
			
			
				
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px;">
				
				<strong>Gentile cliente, intende procedere con la compilazione del questionario?</strong><p> in caso di risposta negativa, la banca non potra' effettuare la valutazione di appropriatezza ne' di adeguatezza e non potra' erogarmi il servizio di consulenza, qualora sia stato stipulato il relativo contratto </p>
				
				
			</div>
			
				
				
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[0].domanda[0].risposta[0].selezionata" value="true" class="250 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="250 1 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 250, 1);submitForm(this, false, false, 0);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px;" class="250 1 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 250, 1);submitForm(this, false, false, 0);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Si
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[0].domanda[0].risposta[1].selezionata" value="false" class="250 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="250 2 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 250, 2);submitForm(this, false, false, 0);">
								<img src="/HT/fe/img/pager_item.png"  class="250 2 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 250, 2);submitForm(this, false, false, 0);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									No
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
	</div>
</div>


<style type="text/css">
	.invisible {display: none;}
</style>
<script type="text/javascript">
	function cambiaSelezione(immagineCliccata, checkbox, numeroDomanda, numeroRisposta)
	{
		if (checkbox == true)
		{
			$('input.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				if ($(this).val()=='true')
					$(this).val('false');
				else
					$(this).val('true');
			});
			$('img.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				$(this).toggleClass('invisible');
			});
		}
		else
		{
			var inputHidden = $('input.' + numeroDomanda + '.' + numeroRisposta).first();
			if ($(inputHidden).val()=='true')
				return;
			$('input.' + numeroDomanda).each(function(){
				$(this).val('false');
			});
			$('img.' + numeroDomanda + '.rispostaSel').each(function(){
				if (!($(this).hasClass('invisible')))
					$(this).addClass('invisible');
			});
			$('img.' + numeroDomanda + '.rispostaNonSel').each(function(){
				if ($(this).hasClass('invisible'))
					$(this).removeClass('invisible');
			});
			$('input.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				$(this).val('true');
			})
			$('img.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				$(this).toggleClass('invisible');
			});
		}
	}
	function submitForm(elementoCliccato, submitAutomatico, confermaSezione, indiceSezioneSubmit)
	{
		if (submitAutomatico==true && confermaSezione==true)
		{
			alert('Errore nella impostazione dei parametri al metodo submitForm');
			return;
		}
		if (submitAutomatico==true || confermaSezione==true)
		{
			if (submitAutomatico==true)
			{
				$('#submitAutomatico').val('true');
				$('#confermaSezione').val('false');	
			}
			else
			{
				$('#submitAutomatico').val('false');
				$('#confermaSezione').val('true');	
			}
			$('#indiceSezioneSubmit').val(indiceSezioneSubmit);
			$(elementoCliccato).parents('form')[0].submit();
			block();
		}
	}
	function block() 
	{
        $.blockUI({ 
            theme:     true, 
            title:    'Aggiornamento questionario in corso', 
            message:  '<p style="font-size:10pt"><br />Attendere prego...</p><br /><br />' 
        }); 	
	}
</script>
			</div>
			<div class="section clearfix" style="display:none;" id="divOTP">
				





<span id="otp">

	
		
		
			
			
				
					
				
				
							
			
				
					
				
				
			
						
	
	
	
	
		
			<h3 class="titleSection">Conferma richiesta</h3>
			<a href="#" class="floatr" onclick="javascript:OpenHelp('/HT/HTML/HelpOtp.html')">
					<img src="/HT/fe/img/i_help.png" style="margin-top:0px;margin-left:3px" title="Help On Line" alt="Help On Line">
			</a>
		
			<div class="form-horizontal" style="margin-top:10px">
					<div class="form-field col-sm-6 col-xs-12">
						<div class="form-field-input">
							<label class="control-label">
								Per proseguire &egrave; necessario inserire la <b>Password usa e getta</b> riportata sul display del dispositivo di sicurezza Servizi You.
							</label>
						</div>
					</div>
					<div class="form-field col-sm-6 col-xs-12 otp ">
						<div class="row">
							<div class="col-xs-5">
								<img src="/HT/fe/img/OTPW.png" class="floatr">
							</div>
							<div class="col-xs-1 arrow">
								>
							</div>
							<div class="col-xs-6">
								<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control" autofocus=""> 
							</div>
						</div>
						
					</div>
			</div>

		
			

		
	
	
	

</span>






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
			</div>
	</div>
	<div class="pull-right margin-bottom20">
		
		<input type="button" name="infoQuestionario" value="Annulla" onclick="$('#formIndietro').submit();" class="btn btn-primary" alt="Annulla">
		
		<input type="submit" name="confermaPrimaRisposta" value="Avanti" disabled="disabled" id="avanti" class="btn btn-primary" alt="Avanti">
	</div>
</form>
<form id="formIndietro" method="post" action="/WEBHT/investimenti/mifid.do"></form>