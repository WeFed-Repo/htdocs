<section>
<div class="table-responsive tabSelezioneCarte"> 
	<table class="table table-striped dataTable no-footer" id="DataTables_Table_10" role="grid"> 
		<thead> 
			<tr class="hover"> 
				<th style="width: 12%;">Tipo rapporto</th> 
				<th style="width: 8%;">Numero</th> 
				<th style="width: 20%;">Filiale</th> 
				<th style="width: 29%;">Intestazione</th> 
				<th style="width: 8%;">Cartaceo</th> 
				<th style="width: 8%;">Digitale</th> 
				<th style="width: 15%; text-align: left">Modalità attuale di invio</th> 
			</tr> 
		</thead> 
		<tr> 
			<select name="elencoRapporti[0].invioElettronico" id="rapportInfo0" style="display:none" class="adesione">
				<option value="true" selected="selected">On</option> 
				<option value="false">Off</option>
			</select> 
			<td>Conto corrente</td> 
			<td>00005544</td> 
			<td>ARCORE - 0537</td> 
			<td>ROSSETTI STEFANO, FERRABOSCHI DA NI</td> 
			<td class="adesione notMinore" style="padding-right: 20px;text-align: center;" id="td-cartaceo-0" > 
				<input type="radio" class="imm" id="imgCartaceo0">
			</td> 
			<td class="adesione notMinore" style="padding-right: 20px;text-align: center;" id="td-elettronico-0">
				<input type="radio" class="imm" id="imgElettronico0">
			</td> 
			<td id="td-modalita0"> 
				<span id="labelElettronico">Formato digitale</span> 
				<span id="labelCartaceo">Formato cartaceo </span> 
			</td> 
		</tr> 
		<tr> 
			<select name="elencoRapporti[1].invioElettronico" id="rapportInfo1" style="display:none" class="adesione">
				<option value="true" selected="selected">On</option> 
				<option value="false">Off</option>
			</select> 
			<td>Dossier titoli</td> 
			<td>00553157</td> 
			<td>ARCORE - 0537</td> 
			<td>ROSSETTI STEFANO, FERRABOSCHI DA NI</td> 
			<td class="adesione notMinore" style="padding-right: 20px;text-align: center;" id="td-cartaceo-1" > 
				<input type="radio" class="imm" id="imgCartaceo1">
			</td> 
			<td class="adesione notMinore" style="padding-right: 20px;text-align: center;" id="td-elettronico-1"> 
				<input type="radio" class="imm" id="imgElettronico1">
			</td> 
			<td id="td-modalita1"> 
				<span id="labelElettronico">Formato digitale</span> 
				<span id="labelCartaceo">Formato cartaceo </span> 
			</td> 
		</tr> 
	</table> 
</div>
<script type="text/javascript"> 
	function getPathImages() { return "/HT/IMAGES/";} 
	function getPathImagesFe() { return "/HT/fe/img/";} 
	function getPathContext() { return "/WEBHT";} 
	function getKBanca() { return "12";} 
	function getLineaTol() { return "";} 
</script>
<script type="text/javascript"> 
	var mappaRapporti = []; 
	mappaRapporti[0]='true'; 
	mappaRapporti[1]='true'; 
	mappaRapporti[2]='true'; 
	mappaRapporti[3]='true'; 
	mappaRapporti[4]='true'; 
	var selezionabile=getPathImagesFe() + 'pager_item.png'; 
	var selezionata=getPathImagesFe() + 'pager_item_current.png'; 
	var off=getPathImagesFe() + 'pager_item_disabled.png'; 
	var mouseOver=getPathImagesFe() + 'pager_item.png'; 
	$(document).ready(function(){ 
		$('td[id^="td"]' ).each(function(){ 
		var td_id=$(this).attr("id"); 
		var colonna=td_id.split("-",3)[1]; 
		var riga=td_id.split("-",3)[2]; 
		var bastaCarta=$("#rapportInfo"+riga).val(); 
		if(bastaCarta=="false"){ //SONO CARTACEO 
			$("#imgCartaceo"+riga).addClass("selezionata").attr("checked",true); 
			if($(this).hasClass("noAdesione") || $(this).hasClass("Minore")) 
			$("#imgElettronico"+riga).addClass("off").attr("src",off); 
			else 
			$("#imgElettronico"+riga).addClass("selezionabile").attr("checked",false); 
			$('#td-modalita'+riga).find('#labelElettronico').hide(); 
		} 
	if(bastaCarta=="true"){ //SONO ELETTRONICO 
		$("#imgElettronico"+riga).addClass("selezionata").attr("checked",true);  
		if($(this).hasClass("noAdesione") || $(this).hasClass("Minore")) 
		$("#imgCartaceo"+riga).addClass("off").attr("disabled",true);  
		else 
		$("#imgCartaceo"+riga).addClass("selezionabile").attr("checked",false);  
		$('#td-modalita'+riga).find('#labelCartaceo').hide(); 
		} 
	}) 
//GESTIONE MOUSE OVER PULSANTI SELEZIONABILI 
	$(".imm").mouseenter( 
		function() { 
		if($(this).hasClass("selezionabile")==true && $(this).hasClass("selezionata")==false) 
		$(this).removeClass("selezionabile").addClass("mouseOver").attr("src",mouseOver); 
	}); 
	$(".imm").mouseout( 
	function() { 
	if($(this).hasClass("mouseOver")==true && $(this).hasClass("selezionata")==false) 
	$(this).removeClass("mouseOver").addClass("selezionabile").attr("checked",false); 
	}); 
	$(".imm").click( 
		function() { 
			
			if($(this).hasClass("mouseOver")==true){ 
			$(this).removeClass("mouseOver").addClass("selezionata").attr("checked",true);  
			var td_id=$(this).closest("td").attr("id"); //cartaceo-id OR elettronico-id 
			var colonna=td_id.split("-",3)[1]; 
			var riga=parseInt(td_id.split("-",3)[2]); 
			if(colonna=='cartaceo'){ 
			$("#rapportInfo"+riga).val("false"); 
			//$(this).closest("td").next().find("img").removeClass("selezionata").addClass("selezionabile").attr("src",selezionabile);
			$(this).closest("td").next().find("input[type=radio]").removeClass("selezionata").addClass("selezionabile").attr("checked",false);
			$('#td-modalita'+riga).find('#labelElettronico').hide(); 
			$('#td-modalita'+riga).find('#labelCartaceo').show(); 
			} 
			if(colonna=='elettronico'){ 
				$("#rapportInfo"+riga).val("true"); 
			$(this).closest("td").prev().find("input[type=radio]").removeClass("selezionata").addClass("selezionabile").attr("checked",false); 
				$('#td-modalita'+riga).find('#labelElettronico').show(); 
				$('#td-modalita'+riga).find('#labelCartaceo').hide(); 
			} 
			verificaAbilitaConferma(); 
		} 
}); 
}); 
function verificaAbilitaConferma() 
	{ 
		var trovataDifferenza = false; 
			for (var i=0; i<mappaRapporti.length; i++) 
			{ 
				if ($('#rapportInfo'+i).val()!=mappaRapporti[i]) 
				{ 
					trovataDifferenza = true; 
					break; 
				} 
			} 
if (trovataDifferenza) 
	$('#btnConferma').removeAttr('disabled'); 
	else 
	$('#btnConferma').attr('disabled','disabled'); 
} 

</script>
</section>
