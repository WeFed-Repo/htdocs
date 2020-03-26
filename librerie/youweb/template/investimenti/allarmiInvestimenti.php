<div id="gridBody">
	<div class="contentFull">
<form id="formInvestimentiAllarmi" method="post" action="/template/investimenti/allarmiInvestimenti_conferma.php">
	<input type="hidden" name="chiaveDossier" value="007|2001|000000106440" />
    <input type="hidden" name="valoreDossier.sms" value="false" />
    <input type="hidden" name="valoreDossier.email" value="false" />
    <input type="hidden" name="valoreDossier.app" value="false" />
	    
	<div class="divForm section clearfix">				
		
		<h3 class="titleSection">
			Impostazione Allarmi
</h3>
	    
		<table class="tabellaBlu table allarmi" >
			<colgroup> 
				<col width="40%"></col> 
				<col width="39%"></col> 
				<col width="7%"></col>
				<col width="7%"></col>
				<col width="7%"></col>
			</colgroup>
			<tbody> 			
				<tr>
					<th colspan="2">Descrizione del messaggio di allarme</th>
					<th style="text-align:center">Sms</th>
					<th style="text-align:center">E-mail</th>
					<th style="text-align:center">App</th>
				</tr>
				<tr>	
					<td colspan="2">Eseguiti Ineseguiti di borsa</td>
		  	      	<td style="text-align:center"><input type="checkbox" name="eseguitiIneseguiti.sms" value="on" id="eseguitiIneseguiti.sms" class="sfondoForm" title="Avviso tramite SMS" /></td>
				  	<td style="text-align:center"><input type="checkbox" name="eseguitiIneseguiti.email" value="on" checked="checked" class="sfondoForm" title="Avviso tramite email" /></td>
				  	<td style="text-align:center"><input type="checkbox" name="eseguitiIneseguiti.app" value="on" class="sfondoForm" title="Avviso tramite Notifica" /></td>
				</tr>
			</tbody> 
		</table>	
	</div>

	<div class="actions pull-right margin-top10">
		
		
		<input type="button" name="" value="Annulla" onclick="closeAjaxDialog(this, false)" class="btn" alt="Annulla" />
		<input type="submit" name="conferma" value="Conferma" class="btn" alt="Conferma" />
	</div>
	  
</form>

<style>
	#formAllarmiInvestimenti .intestazioneSelezioneCC .labelIntestazioneSelezioneCC {
		width: 50%;
	}
</style>
</div>
</div>