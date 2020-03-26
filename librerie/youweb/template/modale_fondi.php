<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<div id="gridBody">
<div class="contentFull">
	
	




<script type="text/javascript">
	function confermaRinominaSelezione()
	{
		var nuovoValore = $('#txtNome').val();
		if (nuovoValore==null || nuovoValore.trim()=='')
		{
			$('#messaggioErrore').show();
		}
		else
		{
			$('#formRinominaSelezione').submit();		
		}
	}
</script>

<form id="formRinominaSelezione" method="post" action="/WEBHT/investimenti/fondiPreferitiRinominaSelezione.do" class="form-horizontal">
	<div class = "section clearfix">
		<h3 class="titleSection">Rinomina lista</h3>
		<div class="bs-example" >
			<input type="hidden" name="idPortafoglio" value="240658" />
			<div class="form-group">
				<div>				
					<div class="form-field-input col-xs-12">
						<div class="form-field-input col-xs-6">
							<label for="txtNome" class="control-label">Assegna un nome alla lista:</label>
							<div class="form-field">
			    				<input type="text" name="nomePortafoglio" maxlength="20" size="20" value="" onfocus="$('#messaggioErrore').hide();" id="txtNome" class="form-control" />
							</div>	
						</div>
						<div class="col-xs-6">
							<label for="messaggioErrore" class="control-label">&nbsp;</label>
							<div class="form-field">
								<span id="messaggioErrore" style="display:none; color: red;">Attenzione, il nome è obbligatorio</span>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="actions pull-right margin-top20" >
		
		
		<input type="button" name="" value="Annulla" onclick="closeAjaxDialog(this, false)" class="btn" alt="Annulla" />
		<input type="button" name="" value="Conferma" onclick="confermaRinominaSelezione();" class="btn" alt="Conferma" />
	</div>
</form>
	
</div>
</div>