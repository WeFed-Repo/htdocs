					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
					
					
					




<!-- This Page Is Valid XHTML 1.0 Transitional -->
<form id="formAllarmiFondi" method="post" action="/WEBHT/sm/fondi.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="7b04613eeb827929266bc339aa6319ef"></div>
	<div class="riquadro clearfix">
		<script type="text/javascript" src="/WEBHT/jsp/ht/allarmi/fondi/fondiJavascript.jsp"></script>

		
		
		
		



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag pannelloControlloAlert">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Allarmi Fondi</span>
 					
				
			
			
		
	</h1>
	
	


		

		








	


		<div class="divForm">
			<input type="hidden" name="descrizione" value="">
			<input type="hidden" name="flagRp" value="1">

			

			
				<div class="section clearfix">
					<h3 class="titleSection">
						
						








		
			Cerca strumento finanziario
		
		
		
		


					</h3>
					<div class="bs-example">
						<div class="form-group clearfix">
							<div class="form-field-input col-xs-4 col-sm-5">
								<label class="control-label" for="campoRicerca">Cerca fondo:
								</label>
						
								<div class="form-field">
									<!-- campoRicerca -->
									<div class="col-xs-8">
									<input type="text" name="campoRicerca" maxlength="20" size="16" value="" id="campoRicerca" class="form-control">
									</div>
									<div class="form-field-input col-xs-4">
									<input type="submit" name="ricerca" value="Cerca" onclick="javascript:return ricercaFondo(campoRicerca.value)" class="button btn" alt="Cerca"></div>
									
								</div>
							</div>						
							<div class="form-field-input col-xs-4">

								<label class="control-label" for="chiave">Fondo selezionato:</label>
									<div class="field-buttons">
										<select name="chiave" onchange="submit()" id="chiave" class="form-control"><option value="">Non Trovato</option></select>
									</div>
							</div></div>
					</div>
				</div>
			
			<div class="section clearfix">
				<h3 class="titleSection">
					
					








		
			Impostazione Allarmi
		
		
		
		


				</h3>
				<table class="tabellaBlu table allarmi">
					<tbody>
						<tr>
							<th colspan="4">Descrizione del messaggio di allarme
							</th>
							<th style="text-align: center" data-th="Sms">Sms</th>
							<th style="text-align: center" data-th="Email">E-mail</th>
							<th style="text-align: center" data-th="App">App</th>
						</tr>
						<tr>
							<td colspan="4">
							<div class="col-xs-6">Valore del fondo a frequenza </div>
							<div class="col-xs-6"> <select name="frequenza.frequenza" id="frequenza.frequenza" class="form-control"><option value="GIORNALIERA">GIORNALIERA</option>
									<option value="SETTIMANALE">SETTIMANALE</option>
									<option value="MENSILE">MENSILE</option></select></div></td>
							<td style="text-align: center" data-td="Sms"><input type="checkbox" name="frequenza.flagSMS" value="on" class="sfondoForm"></td>
							<td style="text-align: center" data-td="Email"><input type="checkbox" name="frequenza.flagEMAIL" value="on" class="sfondoForm"></td>
							<td style="text-align: center" data-td="App"><input type="checkbox" name="frequenza.flagAPP" value="on" class="sfondoForm"></td>
						</tr>
						<tr>
							<td colspan="4"><div class="col-xs-6">
								<div class="col-xs-6" style="padding:0">Se la quotazione
							</div>
										<div class="col-xs-6"><select name="variazione.versoVariazione" id="variazione.versoVariazione" class="form-control"><option value="sale">Sale</option>
									<option value="scende">Scende</option></select></div>
							 </div>
							<div class="col-xs-6">
					
					<div class="col-xs-4 align-vertical">
								fino a
						</div>	<div class="col-xs-4">
							<input type="text" name="variazione.valore" size="12" value="0,00" id="variazione.valore" class="form-control">
								</div><div class="col-xs-4 align-vertical">Euro
							</div></div>
							</td>
							<td style="text-align: center" data-td="Sms"><input type="checkbox" name="variazione.flagSMS" value="on" id="variazione.flagSMS" class="sfondoForm"></td>
							<td style="text-align: center" data-td="Email"><input type="checkbox" name="variazione.flagEMAIL" value="on" id="variazione.flagEMAIL" class="sfondoForm"></td>
							<td style="text-align: center"  data-td="App"><input type="checkbox" name="variazione.flagAPP" value="on" id="variazione.flagAPP" class="sfondoForm"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<!-- BOTTONI -->
	<div class="pull-right margin-bottom20">
		<div class="actions">
			
			<input type="submit" name="annulla" value="Annulla" class="button btn btn-primary" alt="Annulla">

			
			<input type="submit" name="modifica" value="Conferma" class="button btn btn-primary execute" alt="Conferma">
		</div>
	</div>
</form>

<br>