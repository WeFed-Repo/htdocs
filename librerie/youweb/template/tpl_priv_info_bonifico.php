<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		  
		16/03/2017	
	</div>
</div>
					

<form id="formAllarmiBonifici" method="post" action="/WEBHT/sm/bonifici.do">
	<div style="display:none">
		<input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="7b04613eeb827929266bc339aa6319ef">
	</div>
<div class="riquadro clearfix">
		<div class="clearfix">
	
		
		

<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		<div class="hidden-print hidden-xxs flag pannelloControllo">&nbsp;</div>		
 			<span>Allarme Info Bonifico</span>
 	</h1>
	
	<div class="col-xs-12 hidden-xs hidden-print">
		<div class="contentPagina">
			Questo Alert ti consente di essere avvisato ogni volta che viene inserito un bonifico di importo maggiore/minore alla soglia che hai scelto. Imposta il limite d'importo e la modalità di comunicazione degli avvisi (SMS e/o Email) e clicca poi sul pulsante "Conferma".
		</div>
	</div>
		
	
	</div>



		<div class="section clearfix">
			<h3 class="titleSection">Impostazione allarme</h3>
	
			<table class="tabellaBlu table allarmi">
                  <colgroup>
	<col width="79%">
	<col width="7%">
	<col width="7%">
	<col width="7%">
                   </colgroup>
                  <tbody>
                         <tr>
	<th>Descrizione del messaggio di allarme</th>
	<th style="text-align:center" data-th="Sms">Sms</th>
	<th style="text-align:center" data-th="Email">E-mail</th>
	<th style="text-align:center" data-th="App">App</th>
                        </tr>
                         <tr>
	<td><div class="col-xs-5">Ricevere l'avviso per l'inserimento di bonifici di importo</div><div class="col-xs-3">
<select name="allarmeInfoBonifico.versoVariazione" id="allarmeInfoBonifico.versoVariazione" class="form-control">
	<option value="+" selected="selected">maggiore</option>
	<option value="-">minore</option>
</select></div><div class="col-xs-1">	di</div><div class="col-xs-2"><input type="text" name="allarmeInfoBonifico.valore" maxlength="10" size="10" value="0,00" id="valore" class="form-control"></div>
    	</td>
    	<td style="text-align:center" data-td="Sms">
    	          <input type="checkbox" name="allarmeInfoBonifico.flagSMS" value="on" class="sfondoForm">
    	</td>
	<td style="text-align:center" data-td="Email">
	<input type="checkbox" name="allarmeInfoBonifico.flagEMAIL" value="on" class="sfondoForm"></td>
	<td style="text-align:center" data-td="App"><input type="checkbox" name="allarmeInfoBonifico.flagAPP" value="on" checked="checked" class="sfondoForm">
	</td>
	</tr>
</tbody>
</table>

		</div>
</div>
 	
 	
 	
	<div class="pull-right margin-bottom20">
	<div class="actions">
		<input type="submit" name="annulla" value="Annulla" class="btn btn-primary" alt="Annulla">
		<input type="submit" name="conferma" value="Conferma" class="button btn btn-primary execute" alt="Conferma">
	</div>
</div>
	
	


	

</form>