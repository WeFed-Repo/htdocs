					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
					
					
					




<script type="text/javascript" src="/WEBHT/jsp/ht/allarmi/carte/carteJavascript.jsp"></script>

<form id="formInfoCarte" method="post" action="/WEBHT/sm/carte.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="7b04613eeb827929266bc339aa6319ef"></div>
<div class="riquadro clearfix">
	








	


	
	
	 
	
	



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag pannelloControllo">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Allarmi Info Carte</span>
 					
				
			
			
		
	</h1>
	
	


	
	
<script>
$(function() {
  	  var widthDevice = (window.innerWidth > 0) ? window.innerWidth : screen.width;
	  	 if (widthDevice<992) {
			$("#tableInfoCarte").cardBoxTable({
				colTitleIdx: 7
			});
	  	}
});


</script>
	<div class="section clearfix">
		<h3 class="titleSection">Seleziona carta </h3>
			<div class="dataTables_wrapper no-footer">
				<div id="allarmiCarte" class="table-responsive" style="display: block;">
					<table id="tableInfoCarte" class="table table-striped dataTable no-footer allarmi" role="grid">
					<colgroup> 
							<col width="17%">
					      	<col width="12%">
					      	<col width="25%">
					      	<col width="25%">
					      	<col width="7%">
					      	<col width="7%">
						    <col width="7%">
					    </colgroup> 
					<thead> 
						<tr>
							<th style="text-align: left;">Tipo carta</th> 
							<th>Numero carta</th>
							<th>Filiale</th>
							<th>Intestatario</th>
							<th style="text-align:center">Sms</th>
							<th style="text-align:center">E-mail</th>
							<th style="text-align:center">App</th>
						</tr>
					</thead>

					<tbody>
   						<tr>
							<td class="oLeft" data-th="Tipo">YouCard</td>
							<td class="oCenter">*1650</td>
							<td class="oCenter">VERONA AG. 3 - 0004</td>
							<td class="oCenter">NDGUAECSCAATI L</td><input type="hidden" name="listaAllarmiCartaBean[0].chiaveRapporto" value="001|0898|089800115895">
							<td style="text-align:center"><input type="checkbox" name="listaAllarmiCartaBean[0].allarmeCarta.sms" value="on" id="listaAllarmiCartaBean[0].index" class="checkboxCarta"></td>	
							<td style="text-align:center"><input type="checkbox" name="listaAllarmiCartaBean[0].allarmeCarta.email" value="on" disabled="disabled" id="listaAllarmiCartaBean[0].index" class="checkboxCarta"></td>	
							<td style="text-align:center"><input type="checkbox" name="listaAllarmiCartaBean[0].allarmeCarta.app" value="on" id="listaAllarmiCartaBean[0].index" class="checkboxCarta"></td>	
						</tr>
						<tr>
							<td class="oLeft">Bancomat </td>
							<td class="oCenter">*5135</td>
							<td class="oCenter">VERONA AG. 3 - 0004</td>
							<td class="oCenter">IGUNTELCTSTO A D.ADAC</td> <input type="hidden" name="listaAllarmiCartaBean[1].chiaveRapporto" value="141|0004|000000405135">
							<td style="text-align:center"><input type="checkbox" name="listaAllarmiCartaBean[1].allarmeCarta.sms" value="on" checked="checked" id="listaAllarmiCartaBean[1].index" class="checkboxCarta"></td>	
							<td style="text-align:center"><input type="checkbox" name="listaAllarmiCartaBean[1].allarmeCarta.email" value="on" disabled="disabled" id="listaAllarmiCartaBean[1].index" class="checkboxCarta"></td>	
							<td style="text-align:center"><input type="checkbox" name="listaAllarmiCartaBean[1].allarmeCarta.app" value="on" checked="checked" id="listaAllarmiCartaBean[1].index" class="checkboxCarta"> </td>	
						</tr>
						<tr>
							<td class="oLeft">Bancomat</td>
							<td class="oCenter">*7889</td>
									  <td class="oCenter">VERONA AG. 3 - 0004</td>
									  <td class="oCenter">.TDTC DAUSGLA TAOIECN</td>
		
									  <input type="hidden" name="listaAllarmiCartaBean[2].chiaveRapporto" value="141|0004|000001897889">
									  <td style="text-align:center">
										
											
											
												<input type="checkbox" name="listaAllarmiCartaBean[2].allarmeCarta.sms" value="on" id="listaAllarmiCartaBean[2].index" class="checkboxCarta">
											
												
									  </td>	
									  <td style="text-align:center">
										<input type="checkbox" name="listaAllarmiCartaBean[2].allarmeCarta.email" value="on" disabled="disabled" id="listaAllarmiCartaBean[2].index" class="checkboxCarta">
									  </td>	
									  <td style="text-align:center">
										<input type="checkbox" name="listaAllarmiCartaBean[2].allarmeCarta.app" value="on" checked="checked" id="listaAllarmiCartaBean[2].index" class="checkboxCarta">
									  </td>	
		
									</tr>

   
    
	    
		
		
			
		
		
	
	   
    
    
 </tbody>  
</table>
				</div>
				

				
		</div>
	</div>
</div>
<div class="pull-right margin-bottom20">
	
	<input type="submit" name="annulla" value="Annulla" class="button btn btn-primary" alt="Annulla">
	
	<input type="submit" name="conferma" value="Conferma" class="button btn btn-primary execute" alt="Conferma">
</div>
</form>