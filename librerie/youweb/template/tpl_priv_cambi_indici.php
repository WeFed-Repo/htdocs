					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
					
					
					



<!-- This Page Is Valid XHTML 1.0 Transitional --> 
<form id="formIndiciCambiAllarmi" method="post" action="/WEBHT/sm/indiciCambi.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="7b04613eeb827929266bc339aa6319ef"></div>
<div class="riquadro clearfix">









	




 





<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag pannelloControlloAlert">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Allarmi Cambi e Indici</span>
 					
				
			
			
		
	</h1>
	
	




<br>


<div class="divForm">
<div class="section clearfix">
			<h3 class="titleSection">

	








		
			Impostazione Allarmi
		
		
		
		

	</h3>
	<script>
		$(function() {
		var widthDevice = (window.innerWidth > 0) ? window.innerWidth : screen.width;  
		if (widthDevice<992) {$("#tableCambiIndici").cardBoxTable({   //deve diventare verticale già a 991px
			colTitleIdx: 4
		});}});
</script>

<div id="cambiIndici" class="table-responsive" style="display: block;">
	<table class="tabellaBlu table allarmi" id="tableCambiIndici">
	<colgroup> 
		<col width="79%"> 
		<col width="7%">
		<col width="7%">
		<col width="7%">
	</colgroup>
	<thead>
			<tr>
	<th>Descrizione del messaggio di allarme</th>
	<th style="text-align:center">Sms</th>
	<th style="text-align:center">Email</th>
	<th style="text-align:center">App</th>
</tr>
	</thead>
<tbody>


<tr>	
	<td>
		Borsa italiana: ore 9.05
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbiamSMS" value="on" id="flagbiamSMS" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbiamEMAIL" value="on" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbiamAPP" value="on" class="sfondoForm">
	</td>
</tr>
<tr>
	<td>
		Borsa italiana: ore 17.30
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbipmSMS" value="on" id="flagbipmSMS" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbipmEMAIL" value="on" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbipmAPP" value="on" class="sfondoForm">
	</td>
</tr>

<tr>
	<td>
		Borse europee: ore 9.00
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbeamSMS" value="on" id="flagbeamSMS" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbeamEMAIL" value="on" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbeamAPP" value="on" class="sfondoForm">
	</td>
</tr>

<tr>
	<td>
		Borse europee: ore 17.30
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbepmSMS" value="on" id="flagbepmSMS" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbepmEMAIL" value="on" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbepmAPP" value="on" class="sfondoForm">
	</td>
</tr>

<tr>
	<td>
		Borsa americana: ore 15.30
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbaamSMS" value="on" id="flagbaamSMS" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbaamEMAIL" value="on" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbaamAPP" value="on" class="sfondoForm">
	</td>
</tr>

<tr>
	<td>
		Borsa americana: ore 22.00
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbapmSMS" value="on" id="flagbapmSMS" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbapmEMAIL" value="on" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagbapmAPP" value="on" class="sfondoForm">
	</td>
</tr>

<tr>
	<td>
		Cambi
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagCambiSMS" value="on" id="flagCambiSMS" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagCambiEMAIL" value="on" class="sfondoForm">
	</td>
	<td style="text-align:center">
		<input type="checkbox" name="flagCambiAPP" value="on" class="sfondoForm">
	</td>
</tr>
</tbody></table></div></div>
</div></div>
<div class="pull-right margin-bottom20">
<div class="actions">
			
			<input type="submit" name="annulla" value="Annulla" class="button btn btn-primary" alt="Annulla">
			
		    
			<input type="submit" name="conferma" value="Conferma" class="button btn btn-primary execute" alt="Conferma">
</div></div>
</form>