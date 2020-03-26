<script>
	$(function(){
		OpenHelp('/template/pop_mifid.php');
	})
</script>
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


<!--TITOLO PAGINA CON PAGER -->
<div class="riquadro clearfix">
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
			<div class="circle current_page">&nbsp;</div>
			<div class="circle ">&nbsp;</div>
			<div class="circle ">&nbsp;</div>
			<div class="circle ">&nbsp;</div>
	</div>
	<div class="clearfix">
	<style>
	.imgSrv{
		float: none;
	}
	</style>
		<h1>
			<div class="hidden-print hidden-xxs flag investimentiMifid">&nbsp;</div>
			<span>Titolo MIFID</span>
	 	</h1>
		<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=670')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
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

<!--FINE TITOLO PAGINA -->
<!--TESTO INTRODUTTIVO -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
<!--FINE TESTO INTRODUTTIVO -->

<!--dati intestatario -->
<div class="section clearfix">
		<div class="col-sm-6 col-xs-12">
			<h3 class="titleSection">Intestatario</h3>
			<div class="row">
				<div class="col-sm-12 margin-bottom20">
					<label class="control-label">Nome e cognome</label>
					<span class="pull-right resume">Mauro Tallo</span>
				</div>
				<div class="col-sm-12 margin-bottom20">
					<label class="control-label">Data di nascita</label>
					<span class="pull-right resume">XX/XX/XXXX</span>
				</div>
				<div class="col-sm-12">
					<label class="control-label">NDC</label>
					<span class="pull-right resume">XXXXXXXXXX</span>
				</div>
			</div>
			
		</div>
</div>
<div class="pull-right margin-bottom20">
	<input type="submit" name="confermaQuestionario" value="Compila" id="Compila" class="btn btn-primary" alt="Compila">
</div>

<!--QUESTIONARIO -->
<h2 class="titleSection">1. NUCLEO FAMIGLIARE</h2>
<div class="bs-example form-horizontal">
	<div class="form-group">
		<div class="form-field-resume">
			<p><strong>1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus  </strong></p>
		</div>
		<div class="form-field-resume">
			<input type="hidden" name="questionario.sezione[1].domanda[0].risposta[0].selezionata" value="false" class="259 1">
			<img src="/HT/fe/img/pager_item_current.png" style="margin-right:10px" class="259 1 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 259, 1);submitForm(this, false, false, 1);">
			<img src="/HT/fe/img/pager_item.png" style="margin-right:10px" class="259 1 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 259, 1);submitForm(this, false, false, 1);">
			<span class="leftl">Lorem ipsum dolor sit amet, consectetur adipisicing</span>
		</div>
		<div class="form-field-resume">
			<input type="hidden" name="questionario.sezione[1].domanda[0].risposta[1].selezionata" value="true" class="259 2">
			<img src="/HT/fe/img/pager_item_current.png" style="margin-right:10px" class="259 2 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 259, 2);submitForm(this, false, false, 1);">
			<img src="/HT/fe/img/pager_item.png" style="margin-right:10px" class="259 2 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 259, 2);submitForm(this, false, false, 1);">
			<span class="leftl">Lorem ipsum dolor sit amet, consectetur adipisicing</span>
		</div>
		<div class="form-field-resume">
			<input type="hidden" name="questionario.sezione[1].domanda[0].risposta[2].selezionata" value="false" class="259 3">
			<img src="/HT/fe/img/pager_item_current.png" style="margin-right:10px" class="259 3 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 259, 3);submitForm(this, false, false, 1);">
			<img src="/HT/fe/img/pager_item.png" style="margin-right:10px" class="259 3 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 259, 3);submitForm(this, false, false, 1);">
			<span class="leftl">Lorem ipsum dolor sit amet, consectetur adipisicing</span>
		</div>
		<div class="form-field-resume">
			<input type="hidden" name="questionario.sezione[1].domanda[0].risposta[3].selezionata" value="false" class="259 4">
			<img src="/HT/fe/img/pager_item_current.png" style="margin-right:10px" class="259 4 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 259, 4);submitForm(this, false, false, 1);">
			<img src="/HT/fe/img/pager_item.png" style="margin-right:10px" class="259 4 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 259, 4);submitForm(this, false, false, 1);">
			<span class="leftl">Lorem ipsum dolor sit amet, consectetur adipisicing</span>
		</div>
		<div class="form-field-resume">
			<input type="hidden" name="questionario.sezione[1].domanda[0].risposta[4].selezionata" value="false" class="259 5">
			<img src="/HT/fe/img/pager_item_current.png" style="margin-right:10px" class="259 5 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 259, 5);submitForm(this, false, false, 1);">
			<img src="/HT/fe/img/pager_item.png" style="margin-right:10px" class="259 5 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 259, 5);submitForm(this, false, false, 1);">
			<span class="leftl">Lorem ipsum dolor sit amet, consectetur adipisicing</span>
		</div>
		<br>
		<div class="form-field-resume margin-top10">
			<p><strong>2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus  </strong></p>
		</div>
		
		<form>
			<div class="bs-example">
				<div>
					<div class="form-field col-xs-4 col-sm-2 margin-top10">
							<label class="control-label">Minorenni</label>
						</div>
					<div class="form-field-input col-xs-8 col-sm-3">
						<div class="form-field">
							<input type="text" class="form-control" placeholder="inserisci un valore">
						</div>
					</div>
					<div class="form-field-input col-sm-1 hidden-xs"></div>
					<div class="form-field col-xs-4 col-sm-3 margin-top10">
							<label class="control-label">Da 18 ai 35 anni</label>
					</div>
					<div class="form-field-input col-xs-8 col-sm-3">
							<div class="form-field">
								<input type="text" class="form-control" placeholder="inserisci un valore">
							</div>
					</div>
				</div>
				<div>
					<div class="form-field col-xs-4 col-sm-2 margin-top10">
							<label class="control-label">Da 36 ai 55 anni</label>
						</div>
					<div class="form-field-input col-xs-8 col-sm-3">
						<div class="form-field">
							<input type="text" class="form-control" placeholder="inserisci un valore">
						</div>
					</div>
					<div class="form-field-input col-sm-1 hidden-xs"></div>
					<div class="form-field col-xs-4 col-sm-3 margin-top10">
							<label class="control-label">Da 56 ai 75 anni</label>
					</div>
					<div class="form-field-input col-xs-8 col-sm-3">
							<div class="form-field">
								<input type="text" class="form-control" placeholder="inserisci un valore">
							</div>
					</div>
				</div>
				<div>
					<div class="form-field col-xs-4 col-sm-2 margin-top10">
							<label class="control-label">Oltre i 75 anni</label>
						</div>
					<div class="form-field-input col-xs-8 col-sm-3">
						<div class="form-field">
							<input type="text" class="form-control" placeholder="inserisci un valore">
						</div>
					</div>
					<div class="form-field-input col-sm-1 hidden-xs"></div>
					<div class="form-field col-xs-4 col-sm-3 margin-top10">
							<label class="control-label">Totale componenti del vostro nucleo</label>
					</div>
					<div class="form-field-input col-xs-8 col-sm-3">
							<div class="form-field">
								<input type="text" class="form-control" placeholder="inserisci un valore" disabled>
							</div>
					</div>
				</div>
			</div>

		</form>

	</div>
	<div class="pull-right margin-bottom20">
	
	<input type="button" name="annullaCompilazioneQuestionario" value="Indietro" class="btn btn-primary" alt="Indietro">
	
	<input type="submit" name="confermaQuestionario" value="Avanti" id="Avanti" class="btn btn-primary" alt="Avanti">
	</div>
</div>
<!--ALERT -->
<div class="col-xs-12 messagePanel error hidden-print" style="display: block;">
		<h3 class="titleSection hidden-print">Attenzione!</h3>
		<div>
			<p>Lorem ipsum dolor sit </p>
		</div>
</div>
<!--QUESTIONARIO -->
<h2 class="titleSection">2. OBIETTIVI DI INVESTIMENTO</h2>
<div class="bs-example form-horizontal">
	<div class="form-group">
		<form>
			<div class="bs-example">
				<div>
					<div class="form-field col-xs-12 col-sm-9">
							<label class="control-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</label>
						</div>
					<div class="form-field-input col-xs-12 col-sm-3">
						<div class="form-field">
							<input type="text" class="form-control auto" placeholder="inserisci un valore" style="width:auto">&nbsp;&nbsp;%
						</div>
					</div>
					
				</div>
				<div>
					<div class="form-field col-xs-12 col-sm-9">
							<label class="control-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</label>
						</div>
					<div class="form-field-input col-xs-12 col-sm-3">
						<div class="form-field">
							<input type="text" class="form-control auto" placeholder="inserisci un valore" style="width:auto">&nbsp;&nbsp;%
						</div>
					</div>
					
				</div>
				<div>
					<div class="form-field col-xs-12 col-sm-9">
							<label class="control-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</label>
						</div>
					<div class="form-field-input col-xs-12 col-sm-3">
						<div class="form-field">
							<input type="text" class="form-control auto" placeholder="inserisci un valore" style="width:auto">&nbsp;&nbsp;%
						</div>
					</div>
					
				</div>
			</div>
		</form>
	</div>
</div>
<!--MESSAGGIO ATTENZIONE-->
<div class="msgBox msgAlert">
	<div class="iconAlert"></div>
	<p>Attenzione la risposta è incoerente rispetto alle informazioni a nostra disposizione, torna alla <strong>domanda N. X</strong></p>
</div>
<!--MESSAGGIO POSITIVO-->
<div class="msgBox msg">
	<div class="iconMessage"></div>
	<p>Attenzione la risposta è incoerente rispetto alle informazioni a nostra disposizione, torna alla <strong>domanda N. X</strong></p>
</div>

<!--OPT -->
<div class="section clearfix" id="divOTP">
<div id="otp">
	<h3 class="titleSection">Conferma richiesta</h3>
			<a href="#" class="floatr" onclick="javascript:OpenHelp('/HT/HTML/HelpOtp.html')">
					<img src="/HT/fe/img/i_help.png" style="margin-top:0px;margin-left:3px" title="Help On Line" alt="Help On Line">
			</a>
		
			<div class="form-horizontal" style="margin-top:10px">
					<div class="form-field col-sm-6 col-xs-12">
						<div class="form-field-input">
							<label class="control-label">
								Per proseguire è necessario inserire la <b>Password usa e getta</b> riportata sul display del dispositivo di sicurezza Servizi You.
							</label>
						</div>
					</div>
					<div class="form-field col-sm-6 col-xs-12 otp ">
						<div class="row">
							<div class="col-xs-6">
								<img src="/HT/fe/img/OTPW.png" class="floatr">
							</div>
							
							<div class="col-xs-6">
								<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control" autofocus=""> 
							</div>
						</div>
						
					</div>
			</div>

</div>
<div class="clearfix">
<div class="pull-right margin-bottom20">
	<input type="button" name="annullaCompilazioneQuestionario" value="Annulla" onclick="$('#formAnnulla').submit();" class="btn btn-primary" alt="Annulla">
	<input type="submit" name="confermaQuestionario" value="Conferma" id="conferma" class="btn btn-primary disabled" alt="Conferma" disabled="">
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
<!--checkbox -->
<div class="bs-example form-horizontal">
	<div class="form-group">
		<div class="form-field-resume">
			<p><strong>1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus  </strong></p>
		</div>
		<div class="form-field-input">
			<div class="form-field">
				<div class="col-xs-12  margin-bottom20">
					<input type="checkbox" name="bonificoVersoNazione" value="" class="margin-right10">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit
				</div>
			</div>
			<div class="form-field">
				<div class="col-xs-12 margin-bottom20">
					<input type="checkbox" name="bonificoVersoNazione" value="" class="margin-right10">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus
				</div>
			</div>
			<div class="form-field">
				<div class="col-xs-12 margin-bottom20">
					<input type="checkbox" name="bonificoVersoNazione" value="" class="margin-right10">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus
				</div>
			</div>
			<div class="form-field">
				<div class="col-xs-12 margin-bottom20">
					<input type="checkbox" name="bonificoVersoNazione" value="" class="margin-right10">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus
				</div>
			</div>
		</div>
	</div>
</div>
<!--conferma -->
<div class="section clearfix"> 
	<h3 class="titleSection">Lorem ispum dolor</h3>
	<div class="row-height">
	<div class="col-sm-6 col-xs-12 col-prt-12 col-height margin-bottom-xs-10 margin-top-xs-10">
		<div class="boxDefault inside inside-full-height" style="min-height:0">
			<div>
					<div class="row">
						<label>Nome e cognome:</label>
						<span>Lorem</span>
					</div>					
					<div class="row">
						<label>Data di nascita:</label>
						<span>XX/XX/XXXX</span>
					</div>					
					<div class="row">
						<label>NDG:</label>
						<span>XXXXXXXXXXXXXXXXXXXXXXXX</span>
					</div>					
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-xs-12 col-height margin-bottom-xs-10">
			<div class="boxDefault inside inside-full-height" style="min-height:0">
				
				<div>
					<div class="row">
						<label>Data compilazione:</label>
						<span>XX/XX/XXXX</span>
					</div>					
					<div class="row"> 
						<label>Valido fino al:</label>
						<span>XX/XX/XXXX</span>
					</div>					
					<div class="row">
						<label>Canale compilazione:</label>
						<span>Web</span>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<div class="pulsanti pull-right">
		<div class="context-buttons pull-left" style="margin-right:10px;min-width: 200px">
			<a href="" target="_blank" id="linkInformativa" class="moduloCondizioni btnMifid questionario"></a>
		</div>
		<div class="pull-left">
			<a href="" target="_blank" id="linkInformativa" class="moduloCondizioni btnMifid questionario"></a>
			<input type="submit" name="visualizza" tabindex="2" value="Visualizza" class="btn btn-primary execute">
		</div>
	</div>
</div>
<!--Tabella -->
<table class="table table-striped small">
	<tbody>
		<tr class="tr-dark-grey">
			<td><strong>Lorem ipsum dolor sit amet,</strong> </td>
			<td class="oRight">ALTA</td>
		</tr>
		<tr class="tr-light-grey">
			<td class=""><strong>Lorem ipsum dolor sit amet</strong></td>
			<td class="oRight">LORM IPSUM DOLOR</td>
		</tr>
		<tr class="tr-dark-grey">
			<td class="tot"><strong>Lorem ipsum dolor sit amet,</strong> </td>
			<td class="oRight">LOREM IPSUM DOLOR<br>LOREM IPSUM DOLOR SIT</td>
		</tr>
		<tr class="tr-light-grey">
			<td class=""><strong>Lorem ipsum dolor sit amet</strong></td>
			<td class="oRight">LOREM IPSUM DOLOR<br>LOREM IPSUM DOLOR<br>LOREM IPSUM DOLOR SIT</td>
		</tr>
	</tbody>
</table>

</div>