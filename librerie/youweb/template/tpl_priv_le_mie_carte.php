					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/03/2017	
						</div>
					</div>
					
					
					



<div class="riquadro clearfix">










	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>

<style type="text/css">
#formRiepilogoCartaConto .btn.btn-primary{
	margin: 0 auto;

}

@media(max-width: 991px){
	#formRiepilogoCartaConto .btn.btn-primary{
		float: right;
	}
}

</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag riepilogoCarte">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Le mie carte</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>

<form id="formRiepilogoCartaConto" method="post" action="/strutt_priv_new.php?pag=le_mie_carte_dettaglio&lev1=carte&wdg=11|02"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="32d4a420453aeaebe366e301792684da"></div>
	<input type="hidden" name="codContoCorrente" value="">
	<div class="section clearfix">
		<h3 class="titleSection">		
			
			
			








		
			Seleziona la carta
		
		
		
		


		</h3>
		<div class="selezioneCarte">
			<div id="div_wrapper" class="table-responsive">
					<table class="table" id="riepCarteConto" role="grid">
						<colgroup>
							<col width="2%">
							<col width="20%">
							<col width="10%">
							<col width="25%">
							<col width="25%">
							<col width="16%">
							<col width="2%">
						</colgroup>
						<thead>
							<tr>
						    	<th>&nbsp;</th>
						    	<th style="text-align: left;">Tipo carta</th>
						        <th style="text-align: left;">Numero carta</th>
						    	<th>Filiale</th>
						    	<th>Intestatario</th>
						        <th>&nbsp;</th>       
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							
								<tr>
							      	<td class="hidden-xs">&nbsp;</td>
						         	<td>
										
							 				
						         				
						         				YouCard
						                    
											
											
										
						         	</td>
						         	<td>*9130</td> 
						         	<td>
						         		MILANO&nbsp;-&nbsp; 
						         		
								         	2070
								         	
							         	
						         	 </td>
						         	<td>COGNOME NOME</td>
						         	<td>
					         			
					         				
					         				
					         				
	<input type="button" name="dettaglio" value="Dettaglio" onclick="dettaglioRapporto(1,'$AA$REl4G2VMQHEbZUxAcVdlTUh4X2RN');return false;" style="visibility:visible;" class="btn btn-primary">	
					         				
					         			
						         	</td>
									<td class="hidden-xs">&nbsp;</td>
								</tr>		
							
								<tr>
							      	<td class="hidden-xs">&nbsp;</td>
						         	<td>
										
							 				
											
												
												
													Bancomat
													
												
											
											
										
						         	</td>
						         	<td>*6868</td> 
						         	<td>
						         		MILANO&nbsp;-&nbsp; 
						         		
								         	
								         	2070
							         	
						         	 </td>
						         	<td>COGNOME NOME</td>
						         	<td>
					         			
					         				
					         				
<input type="button" name="dettaglio" value="Dettaglio" onclick="dettaglioRapporto(141,'$AA$RU14G2dETnkbZURJeVdnQkp/X2NM');return false;" style="visibility:visible;" class="btn btn-primary">	
					         				
					         			
						         	</td>
									<td class="hidden-xs">&nbsp;</td>
								</tr>		
							
					    </tbody>
					</table>
			</div>
		</div>
	</div>
</form>
</div>
<script type="text/javascript">	
	function dettaglioRapporto(tipoRap,codRapporto) {
		var form=$('#formRiepilogoCartaConto');
		form.find('input[name="codContoCorrente"]').val(codRapporto);
		form.submit();
	}
</script>
<script type="text/javascript">
$(document).ready(function() {
	if (isMobile()) responsiveTable("#riepCarteConto");
});
</script>