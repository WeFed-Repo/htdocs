					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
					
					
					




<script type="text/javascript" src="/WEBHT/jsp/ht/allarmi/titoli/titoliJavascript.jsp"></script>
<!-- This Page Is Valid XHTML 1.0 Transitional --> 
<form id="formAllarmiTitoli" method="post" action="/WEBHT/sm/titoli.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="7b04613eeb827929266bc339aa6319ef"></div> 
<div class="riquadro clearfix">






<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		<div class="hidden-print hidden-xxs flag pannelloControlloAlert">&nbsp;</div>
			<span>Allarmi Titoli</span>
 	</h1>
	
	<input type="hidden" name="flagRp" value="1">
	<input type="hidden" name="descrizione" value="">
	<input type="hidden" name="operazione" value="">
	<div class="divForm">

	

	<!-- Nuovo allarme del titolo quindi ho la ricerca -->
	
		<div class="section clearfix">
			<h3 class="titleSection">
				Cerca strumento finanziario
			</h3>	
	
		<div class="bs-example">
			<div class="form-group clearfix">
				<div class="form-field-input col-xs-4">
			
						<label class="control-label">Strumento finanziario:</label>
				
				<div class="field-buttons">
						<select name="codiceRaggruppamento" onchange="submit()" id="codiceRaggruppamento" class="form-control"><option value="02ae">BI - Azioni Italia</option>
							
								<option value="02ac">BI - Azioni Italia Nuovo Mercato</option>
							
								<option value="03ae">BI - Azioni TAH</option>
							
								<option value="02ag">BI - ETF</option>
							
								<option value="02ab">BI - Obbligazioni</option>
							
								<option value="f0ac">BI - Obbligazioni Convertibili</option>
							
								<option value="f0af">BI - Warrants</option>
							
								<option value="03af">BI - Warrants TAH</option></select>
					</div>
				</div>
				<div class="form-field-input col-xs-4">
			
					<label class="control-label">Cerca titolo:</label>	
				
				<div class="field-buttons form-field">
				<div class="col-xs-6">
						<input type="text" name="campoRicerca" maxlength="20" value="" id="campoRicerca" class="form-control"></div>
						
						<div class="col-xs-4">
							<input type="submit" name="ricerca" value="Cerca" onclick="javascript:return ricercaTitolo(campoRicerca.value);" class="button btn" alt="Cerca">
						
					</div></div>				
				</div>
				<div class="form-field-input col-xs-4">
						<label class="control-label" for="chiave">Titolo selezionato:</label>
				<div class="field-buttons">	
					<select name="chiave" onchange="javascript:submitTitolo();" id="chiave" class="form-control"><option value="">Nessun titolo trovato...</option></select>
					</div>
				</div>
			</div>
		</div></div>
	
	<div class="section clearfix">
			<h3 class="titleSection">
 	
	








		
			Impostazione Allarmi
		
		
		
		

</h3>
	<table class="tabellaBlu table allarmi">
		<tbody>	
			<tr>
				<th colspan="3"><b>Descrizione del messaggio di allarme</b></th>
				<th style="text-align:center" data-th="Sms">Sms</th>
				<th style="text-align:center" data-th="Email">E-mail</th>
				<th style="text-align:center" data-th="App">App</th>
			</tr>
			<tr>
				<td colspan="3">
					<label for="mercatoApertura.flagSMS">Valore titolo all'apertura del mercato</label>
				</td>
				<td style="text-align:center" data-td="Sms">
					<input type="checkbox" name="mercatoApertura.flagSMS" value="on" id="mercatoApertura.flagSMS" class="sfondoForm">
				</td>
				<td style="text-align:center" data-td="Email">
					<input type="checkbox" name="mercatoApertura.flagEMAIL" value="on" id="mercatoApertura.flagEMAIL" class="sfondoForm">
				</td>
				<td style="text-align:center" data-td="App">
					<input type="checkbox" name="mercatoApertura.flagAPP" value="on" id="mercatoApertura.flagAPP" class="sfondoForm">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<label for="mercatoChiusura.flagSMS">Valore titolo alla chiusura del mercato</label>
				</td>
				<td style="text-align:center"  data-td="Sms">
					<input type="checkbox" name="mercatoChiusura.flagSMS" value="on" id="mercatoChiusura.flagSMS" class="sfondoForm">
				</td>
				<td style="text-align:center" data-td="Email">
					<input type="checkbox" name="mercatoChiusura.flagEMAIL" value="on" id="mercatoChiusura.flagEMAIL" class="sfondoForm">
				</td>
				<td style="text-align:center" data-td="App">
					<input type="checkbox" name="mercatoChiusura.flagAPP" value="on" id="mercatoChiusura.flagAPP" class="sfondoForm">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<label class="col-xs-3" for="percentuale.valore">Variazione</label>
				<div class="col-xs-3">
					<input type="text" name="percentuale.valore" size="8" value="0,00" id="percentuale.valore" class="form-control">
				</div>
					<label class="col-xs-3" for="sfondoForm">% rispetto alla chiusura <br>precedente</label>
				</td>
				<td style="text-align:center"  data-td="Sms">
					<input type="checkbox" name="percentuale.flagSMS" value="on" id="percentuale.flagSMS" class="sfondoForm">
				</td>
				<td style="text-align:center" data-td="Email">
					<input type="checkbox" name="percentuale.flagEMAIL" value="on" id="percentuale.flagEMAIL" class="sfondoForm">
				</td>
				<td style="text-align:center" data-td="App">
					<input type="checkbox" name="percentuale.flagAPP" value="on" id="percentuale.flagAPP" class="sfondoForm">
				</td>
			</tr>
			<tr>				
				<td colspan="3">
					<div class="col-xs-3">
						Se la quotazione
					</div>
					<div class="col-xs-3">
						<select name="variazione.versoVariazione" class="form-control">
							<option value="sale">Sale</option>
							<option value="scende">Scende</option>
						</select>
					</div>
					<div class="col-xs-2 align-vertical">
			        	fino a
			        </div>
					<div class="col-xs-2">
						<input type="text" name="variazione.valore" size="12" value="0,00" class="form-control">
					</div>
					<div class="col-xs-2 align-vertical">
						Euro
					</div>
				</td>
				<td style="text-align:center"  data-td="Sms">
					<input type="checkbox" name="variazione.flagSMS" value="on" class="sfondoForm">
				</td>
				<td style="text-align:center" data-td="Email">
					<input type="checkbox" name="variazione.flagEMAIL" value="on" class="sfondoForm">
				</td>
				<td style="text-align:center" data-td="App">
					<input type="checkbox" name="variazione.flagAPP" value="on" class="sfondoForm">
				</td>
			</tr>
		</tbody>
	</table></div>
</div></div>
	<div class="pull-right margin-bottom20">
<div class="actions">
	<b></b>
	<input type="submit" name="annulla" value="Annulla" class="button btn btn-primary " alt="Annulla">
	<b></b>
	<input type="submit" name="modifica" value="Conferma" class="button btn btn-primary execute" alt="Conferma">
</div></div>
</form>