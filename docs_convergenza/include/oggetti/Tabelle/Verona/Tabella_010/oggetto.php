<section>
<div class="table-responsive tabSelezioneCarte"> 
	<table class="table table-striped dataTable no-footer" id="DataTables_Table_20" role="grid">
		<colgroup>
			<col width="15%">
			<col width="1%">
			<col width="14%">
			<col width="14%">
			<col width="14%">
			<col width="14%">
			<col width="14%">
		</colgroup>

		<thead>
			<tr class="hover" role="row">
				<th class="text sorting_disabled" title="Nome azienda" rowspan="1" colspan="1">Nome azienda</th>
				<th class="text sorting_disabled" title="Id mandato" rowspan="1" colspan="1">Id mandato</th>
				<th class="text sorting_disabled" title="Stato" rowspan="1" colspan="1">Stato</th>
				<th class="text sorting_disabled" title="Dettaglio" rowspan="1" colspan="1">Dettaglio</th>
				<th class="text sorting_disabled" title="Lista addebiti" rowspan="1" colspan="1">Lista addebiti</th>
				<th class="text sorting_disabled" title="Modifica c/c di addebito" rowspan="1" colspan="1">Modifica c/c di addebito</th>
				<th class="text sorting_disabled" title="Revoca" rowspan="1" colspan="1">Revoca</th>
			</tr>
			</thead>
		<tbody>	
		<tr role="row" class="odd">
			<td class="oLeft">ENEL</td>
			<td class="oLeft">O563611005676951</td>
			<td class="oLeft">Attivo</td> 
			<td class="oCenter"><a title="" class="" id="" role="button" aria-pressed="false" href="#">
				<i class="icon icon-zoom_filled"></i ></a>
			</td>
			<td class="oCenter"><a title="" class="" id="" role="button" aria-pressed="false" href="#">
				<i class="icon icon-download"></i></a>
			</td>
			<td class="oCenter"><a role="button" aria-pressed="false"  class=""><i class="icon icon-edit_fill"></i></a>
				
			</td>
			<td class="oCenter">
				<a title="" class="" id="" role="button" aria-pressed="false">
				<i class="icon icon-delete_table disabled"></i > 
			</td>
		</tr>
		<tr role="row" class="even">
			<td class="oLeft">ENEL</td>
			<td class="oLeft">O563611005676951</td>
			<td class="oLeft">Attivo</td> 
			<td class="oCenter"><a title="" class="" id="" role="button" aria-pressed="false" href="#">
				<i class="icon icon-zoom_filled"></i ></a>
			</td>
			<td class="oCenter"><a title="" class="" id="" role="button" aria-pressed="false" href="#">
				<i class="icon icon-download"></i></a>
			</td>
			<td class="oCenter"><a role="button" aria-pressed="false"  class=""><i class="icon icon-edit_fill"></i></a>
				
			</td>
			<td class="oCenter">
				<span id="annullaRevoca2" style=""> 
												<a aria-pressed="false" href="#" data-toggle="modal" data-target="#annulloRevocaDialog" onclick="apriModalAnnulloRevoca('ACQUE VERONESI SCARL                                                  ', 
                                                                                    'MAN140651423080',
                                                                                    'AFRS210000004629230001             ',
                                                                                    'IT64ZZZ0000003567090232            ',
                                                                                    'CORE',
                                                                                    'YOUW',
                                                                                    'SJGXMDW3',
                                                                                    '00048',
                                                                                    '  ',
                                                                                    '20190510',
                                                                                    '110811')">
													annulla revoca 
												</a> 
												<a href="javascript:;" id="annullaPop" data-original-title="" title=""> 
													<i class="icon icon-info_fill icon-2x"></i>
												</a> 
											</span>
			</td>
		</tr>
		</tbody>
		<script>
		$(function(){
		$('#annullaPop').popover(
			{
				trigger: 'focus',
				template: '<div class="tooltip popover"><div class="arrow"></div><div class="popover-content"></div></div>',
				html: true,
        		content: 'Puoi annullare la richiesta di revoca entro le 19.00 di oggi',
        		placement:'top'
			}
		);
	})

	</script>
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
