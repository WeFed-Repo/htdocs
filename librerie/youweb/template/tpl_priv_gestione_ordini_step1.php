					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							<fmt:formatdate type="date" value="${now}" pattern="${fmtdate}">	
						</fmt:formatdate></div>
					</div>
	 				<div class="riquadro clearfix"> 				  
						
						
						
						<!-- DettaglioTitoloBody -->








	







	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div><div id="tbs" class="pull-right padding10"><span class="titoloMercatiTrattazione"></span></div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag investimenti">&nbsp;</div>
			
			
		
		
			
		
		
			
				
 					<span>Gestione ordine</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>


<div class="divSinistra col-xs-6">
	<div class="section clearfix">
		
		<h3 class="titleSection">








		
			Ordine
		
		
		

</h3>
		<span class="context-buttons pull-right clearfix">
		<span class="bottoni_intestazione_tabella" style="margin-top:-22px;">
			<span class="rounded_corner">&nbsp;</span>
			<span class="bottoni" id="bottoniFormCompraVendi"></span>
			
		</span></span>
		<div class="tappo"></div>
		<div id="compraVendiDiv">
			<!-- FormAcquistoVendita.jsp -->








<script type="text/javascript">
	aModBorsa = [
	
		['BEST EXECUTION DINAM','IT BA','Corrente','','Limitato','LIM','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BEST EXECUTION DINAM','IT BA','Corrente','','Al Meglio','MER','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BEST EXECUTION DINAM','IT BA','Corrente','','Limitato','LIM','Val. fino a data','GTD','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Asta Chiusura','ATC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Asta Apertura','OPG','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Solo in Asta','GFA','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Asta Chiusura','ATC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Asta Apertura','OPG','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Solo in Asta','GFA','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Val. fino a data','GTD','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Val. fino a data','GTD','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Asta Plus','MTL','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Asta Plus','MTL','Asta Chiusura','ATC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Asta Plus','MTL','Asta Apertura','OPG','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Asta Plus','MTL','Solo in Asta','GFA','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Asta Plus','MTL','Val. fino a data','GTD','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Limitato','LIM','Negoziazione Asta Chiusura','CPX','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BORSA ITALIANA MTA','IT B1','Corrente','','Al Meglio','MER','Negoziazione Asta Chiusura','CPX','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Solo in Asta','GFA','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Val. per la seduta','DAY','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Solo in Asta','GFA','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Al Meglio','MER','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop','M'],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Esegui e cancella','IOC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['BIT EQ MTF TAH','IT HA','Corrente','','Limitato','LIM','Tutto o niente','FOK','Esegui e mantieni sul book','','flagPrezzoStop','M']
	
	];		
	function popolaPrezzo(oldVal) {
		var selPrezzo = $('#formCompraVendi').find('select[name="parPrezzo"]');
		var selMercato = $('#formCompraVendi').find('select[name="parMercatoOper"]');
		var values = new HashMap();
		selPrezzo.children().remove();
		for(i = 0; i<aModBorsa.length; i++){
			if(aModBorsa[i][1] === selMercato.val() && !values.containsKey(aModBorsa[i][5])){
				values.put(aModBorsa[i][5],aModBorsa[i][4]);
				$('<option>'+values.get(aModBorsa[i][5])+'</option>').attr('value', aModBorsa[i][5]).appendTo(selPrezzo);
			}
		}
		var abilitaPrezzoStop = false;
		for(i = 0; i<aModBorsa.length; i++){
			//mercato fa da chiave  
			if(aModBorsa[i][1] === selMercato.val() && aModBorsa[i][11] === 'M'){
				abilitaPrezzoStop = true;
				break;
			}
		}
		if (abilitaPrezzoStop) {
			$('<option>Condizionato al meglio</option>').attr('value', 'MERCOND').appendTo(selPrezzo);
			$('<option>Condizionato limitato</option>').attr('value', 'LIMCOND').appendTo(selPrezzo);
		}
		if(oldVal != null && oldVal !=""){
			selPrezzo.val(oldVal);
		}
	}

	function popolaFase(){
		
				$('#colFase').children().remove();
				$('#colFase').html('<label class="control-label bold">Corrente</label>');
				$('#colFase').append('<input type="hidden" name="parFase" value="" />');
		
	}

	function popolaQtaVendibile(){
		var selIntestatario = $('#formCompraVendi').find('select[name="selSottRubrica"]');
		var quantita = selIntestatario.val().split(',')[1];
		$('#qtaRubrica').text(quantita);
		
		//se la quantit&agrave; vendibile &egrave; 0 nascondo il pulsante vendi
		if($('#qtaRubrica').text() == 0)
			$('#vendiButton').hide();
		else
			$('#vendiButton').show();
	}

	function popolaValidita(oldVal){
		var values = new HashMap();
		var selMercato = $('#formCompraVendi').find('select[name="parMercatoOper"]');
		var selTipoOrdine = $('#formCompraVendi').find('select[name="parPrezzo"]');
		var selValidita = $('#formCompraVendi').find('select[name="parTempo"]');
		selValidita.children().remove();
		
		for(i = 0; i<aModBorsa.length; i++){
			var insertOption=false;
			if (selTipoOrdine.val().indexOf('COND')>=0 && aModBorsa[i][11] == 'M' && selTipoOrdine.val().substr(0,selTipoOrdine.val().indexOf('COND')) == aModBorsa[i][5] ) {
				insertOption=true;
			}  
			//mercato e prezzo fanno da chiave e se non &egrave; gi&agrave; presente 
			if(aModBorsa[i][1] === selMercato.val() && (aModBorsa[i][5] === selTipoOrdine.val() || insertOption)  && !values.containsKey(aModBorsa[i][7])) {
				values.put(aModBorsa[i][7],aModBorsa[i][6]);
				$('<option>'+values.get(aModBorsa[i][7])+'</option>').attr('value', aModBorsa[i][7]).appendTo(selValidita);
			}
		}
//		conservo valore precedente in caso di reload form su segnalazione errori
		if(oldVal != null && oldVal !="") {
			if ($(selValidita).find("option[value='"+oldVal+"']").length!=0) {
				selValidita.val(oldVal);
			}
		}
	}
	function compraVendi(azione){
			$('#formCompraVendi').find('input[name="ckConf"]').attr('value','N');
			$('#formCompraVendi').find('input[name="parAcq"]').attr('value',azione);
	}
	
	function onOffSpezzature(){
		 var spez = $('#spezzature');
		 var values = new HashMap();
		 var selMercato = $('#formCompraVendi').find('select[name="parMercatoOper"]');
		 var selPrezzo = $('#formCompraVendi').find('select[name="parPrezzo"]');
		 var selValidita = $('#formCompraVendi').find('select[name="parTempo"]');
		 var selQuantita = $('#formCompraVendi').find('select[name="parMod"]');
		 
		 selQuantita.children().remove();//pulisco la combo parametro quantit&agrave;
		 //popolo combo parametro quantit&agrave; in funzione di mercato,prezzo,validit&agrave;
		 for(i = 0; i<aModBorsa.length; i++){
			 if(aModBorsa[i][1] === selMercato.val() && aModBorsa[i][5] === selPrezzo.val() 
			 	&& aModBorsa[i][7] === selValidita.val() && !values.containsKey(aModBorsa[i][9])){
			 	values.put(aModBorsa[i][9],aModBorsa[i][8]);
				$('<option>'+values.get(aModBorsa[i][9])+'</option>').attr('value', aModBorsa[i][9]).appendTo(selQuantita);
			 }
		 }
		 //se nella combo ho almeno un elemento oltre al primo valore vuoto
     	 if (selQuantita.children().length > 1){
     	 	spez.show();
	     }else{
	     	spez.hide();
	     }
	}
	function onOffPrezzoStop(){
		var selPrezzo = $('#formCompraVendi').find('select[name="parPrezzo"]');
		$('#prezzoLimite').attr('readonly',true);
		$('#trPrezzoStop').hide();
		if (selPrezzo.val()=='MER' || selPrezzo.val()=='MTL') {
			$('#prezzoLimite').val("");
			$('#prezzoStop').val("");
		} else {
			if (selPrezzo.val().indexOf('LIM')>=0) {
				$('#prezzoLimite').attr('readonly',false);
			}
			if (selPrezzo.val().indexOf('COND')>=0) {
				$('#trPrezzoStop').show();
				//$('#prezzoStop').attr('readonly',false);
			}
		}
	}
	function onOffData(){
		 var selData = $('#data');
		 var today = '17/05/2017'; 
		 var selValidita = $('#formCompraVendi').find('select[name="parTempo"]');
		 var divAvviso = $('#notaCPX');
		 if (selValidita.val() === 'CPX'){
	     	
	     	divAvviso.show();
	     } else {
	     	
	     	divAvviso.hide();
	     }
     	 if (selValidita.val() === 'GTT' || selValidita.val() === 'GTD' || selValidita.val() === 'VSD' || selValidita.val() === 'OCD'){
     	 	selData.show();
     	 	$('#parData').prop("disabled",false);
     	 	if (today !='') {
	     	 	if(selValidita.val() === 'GTT' || selValidita.val() === 'GTD' || selValidita.val() === 'VSD'){
	     	 		$('#parData option[value="'+today+'"]').remove();
	     	 	}else{
		     	 	if(($('#parData option[value="'+today+'"]').val()) == undefined ){
		     	 	   var opt = $('<option>'+today+'</option>').attr('value', today, 'checked','true');
		     	 	   $('#parData').prepend(opt);
		     	 	}
	     	 	}
     	 	}
	     }else{
	     	$('#parData').prop("disabled",true);	
	     	selData.hide();
	     }
	    
	}
	//se cambio dossier devo reinvocare la action per ripopolare il form
	function reloadFormMercato(codMercatoInfo){
		$('#formCompraVendi').find('input[name="codMercatoInfo"]').val(codMercatoInfo);
		reloadForm();
	}
	function reloadForm(){
		var url = getPathContext()+'/investimenti/compraVendiTitoloForm.do' ;
		var isin = $('#formCompraVendi').find('input[name="isin"]').val();
		var codMercatoInfo = $('#formCompraVendi').find('input[name="codMercatoInfo"]').val();
		var key = $('#formCompraVendi').find('select[name="chiaveDossier"]').val();
		var codAreaFinanza = $('#formCompraVendi').find('input[name="codAreaFinanza"]').val();
		var urlTotale = getPathContext()+'/investimenti/compraVendiTitolo.do';
		goToPage('/investimenti/compraVendiTitolo.do','isin',isin,'codMercatoInfo',codMercatoInfo,'codAreaFinanza',codAreaFinanza,'chiaveDossier',key);
	}
	
	function popolaDossier(){
		
		
	}

	function switchRadio(radio){
		$('#'+radio).prop('checked', true);
	}
	
	//METODO ASCOLTATORE PER PILOTARE LE INTERAZIONI TRA WIDGETS
	function listener(widget){
		if(widget === 'chiaveDossier'){
			reloadForm();
		} else if(widget === 'selSottRubrica'){//intestatario
			popolaQtaVendibile();
		}  else if(widget === 'parMercatoOper'){ //mercato
			popolaPrezzo();
			onOffPrezzoStop();			
			popolaValidita();
			onOffData();
			onOffSpezzature(); 
		} else if(widget === 'parPrezzo') {//Tipo ordine
			onOffPrezzoStop();
			popolaValidita();
			onOffData();
		}  else if(widget === 'parTempo'){//validit&agrave;
			onOffData();
			//onOffOrdiniCondizionati();
		} 
	}
	function titoloMercatiTrattazione() {
		//Gestione mercati Trattazione
		var strMercati="";
		
		$('<div id="tbs" class="pull-right padding10"><span class="titoloMercatiTrattazione">'+strMercati+'</span>').insertAfter('.pager');	
	}

	$(document).ready(function(){
			popolaDossier();
			titoloMercatiTrattazione();
			popolaQtaVendibile();
			popolaPrezzo('LIM');
			popolaValidita('VSC');
			onOffPrezzoStop();
			onOffSpezzature();
			popolaFase();
			onOffData();
			//onOffOrdiniCondizionati();		
	});
	
</script>


<form id="formCompraVendi" method="post" action="/WEBHT/investimenti/compraVendiTitoloEsegui.do" class="form-horizontal">

<div class="divForm bs-example">
<div class="boxContent form-group">

	<input type="hidden" name="parAcq" value="" id="parAcq">
	<input type="hidden" name="ckConf" value="">
	<input type="hidden" name="isin" value="IT0001233417">
	<input type="hidden" name="codMercatoInfo" value="MTA">
	<input type="hidden" name="codAreaFinanza" value="00001233410">
	<input type="hidden" name="orderFrom" value="pagina">
	

	<!-- 			TITOLO -->	
			<div class="row">
				<div class="col-xs-4"><label class="control-label">Titolo</label></div>
				<div class="col-xs-6"><label class="control-label bold">A2A</label> </div>
			</div>
			<!-- 			DOSSIER -->
		<div class="row">
				<div class="col-xs-4"><label class="control-label" for="chiaveDossier">Dossier</label></div>
				<div class="col-xs-6" id="colChiaveDossier">
				<select name="chiaveDossier" onchange="listener('chiaveDossier')" id="chiaveDossier" class="form-control"><option value="007|2001|000000106440" selected="selected">2001 - 000000106440</option>
<option value="007|2001|000008318876">2001 - 000008318876</option></select>
				</div>
			</div>
			<!-- 			SALDO AL -->
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="saldo">Saldo Al</label></div>
				<div class="col-xs-6"><select name="saldo" onchange="listener('saldo')" id="saldo" class="form-control"><option value="17/05/2017">17/05/2017   999.999.851.254,49</option>
<option value="18/05/2017">18/05/2017   999.999.851.254,49</option>
<option value="19/05/2017">19/05/2017   999.999.851.254,49</option>
<option value="22/05/2017">22/05/2017   999.999.851.254,49</option>
<option value="23/05/2017">23/05/2017   999.999.851.254,49</option></select>
				</div>
			</div>
			<!-- 			INTESTATARIO-->
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="selSottRubrica">Intestatario</label></div>
				<div class="col-xs-6"><select name="selSottRubrica" onchange="listener('selSottRubrica')" id="selSottRubrica" class="bigcombo form-control"><option value="0,0">0 - TALLO MAURO LUCA</option></select>
				</div>
			</div>	
			<!-- 			Q.t&agrave; max indicative -->
			<div class="row">
				<div class="col-xs-4"><label class="control-label">Q.t&agrave; max indicative</label>&nbsp;</div>
				<div class="col-xs-8">
				<label class="control-label">Acquistabile</label>&nbsp;&nbsp;
				<label class="bold">676589885828</label>&nbsp;|&nbsp;
				<label>Vendibile</label>&nbsp;&nbsp;
				<label class="bold"><span id="qtaRubrica">0</span></label></div>
			</div>	
			<!-- 			QUANTITA-->
			<div class="row">
				<div class="col-xs-4"><label class="control-label">Quantit&agrave;</label></div>
				<div class="col-xs-4"><input type="text" name="quantita" size="10" value="" id="quantita" class="form-control">
				
				</div>
					<div class="col-xs-4"><label>
					(Min. tratt.) 1 
			
					</label></div>
			</div>
			<!-- 			MERCATO -->
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="parMercatoOper">Mercato</label></div> 
				<div class="col-xs-6">
				<select name="parMercatoOper" onchange="listener('parMercatoOper')" id="parMercatoOper" style="text-transform:capitalize;" class="form-control"><option value="IT BA">BEST EXECUTION DINAM</option>
<option value="IT B1">BORSA ITALIANA MTA</option>
<option value="IT HA">BIT EQ MTF TAH</option></select>
				</div>
			</div>
			<!-- 			TIPO ORDINE -->
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="parTipoOrdine">Tipo ordine</label></div> 
			<div class="col-xs-6">
			<select name="parPrezzo" onchange="listener('parPrezzo')" id="parPrezzo" class="form-control">

<option value="LIM">Limitato</option><option value="MER">Al Meglio</option></select> 
			</div>
			</div>
			<!-- PREZZO LIMITE -->
			<div class="row" id="trPrezzo">
				<div class="col-xs-4"><label class="control-label" for="parPrezzo">Prezzo limite</label></div>
				<div class="col-xs-4"><input type="text" name="prezzoLimite" size="10" value="" id="prezzoLimite" class="form-control"> 
			
				</div>
				<div class="col-xs-4">
					<label>EUR</label></div>
			</div>
			<!-- VALIDITA -->
			<div class="row" id="trPrezzoStop" style="display: none;">
				<div class="col-xs-4"><label class="control-label" for="parStop">Condizione</label></div>
				<div class="col-xs-4"><input type="text" name="prezzoStop" size="10" value="" id="prezzoStop" class="form-control" title="Esponi al raggiungimento">
				</div>
				 <div class="col-xs-4">
				  EUR
				 </div>
			</div>
		
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="parTempo">Validit&agrave;</label></div>
				<div class="col-xs-6"><select name="parTempo" onchange="listener('parTempo')" id="parTempo" class="form-control">






<option value="DAY">Val. per la seduta</option><option value="GTD">Val. fino a data</option></select> 
				</div>
			</div>
			<div id="data" class="row" style="display:none">
				<div class="col-xs-4"><label class="control-label" for="parData">Data</label></div>
				<div class="col-xs-6">
				<select name="parData" id="parData" class="form-control" disabled=""><option value="17/05/2017">17/05/2017</option>
<option value="18/05/2017">18/05/2017</option>
<option value="19/05/2017">19/05/2017</option>
<option value="22/05/2017">22/05/2017</option>
<option value="23/05/2017">23/05/2017</option>
<option value="24/05/2017">24/05/2017</option>
<option value="25/05/2017">25/05/2017</option>
<option value="26/05/2017">26/05/2017</option>
<option value="29/05/2017">29/05/2017</option>
<option value="30/05/2017">30/05/2017</option>
<option value="31/05/2017">31/05/2017</option>
<option value="01/06/2017">01/06/2017</option>
<option value="02/06/2017">02/06/2017</option>
<option value="05/06/2017">05/06/2017</option>
<option value="06/06/2017">06/06/2017</option>
<option value="07/06/2017">07/06/2017</option>
<option value="08/06/2017">08/06/2017</option>
<option value="09/06/2017">09/06/2017</option>
<option value="12/06/2017">12/06/2017</option>
<option value="13/06/2017">13/06/2017</option>
<option value="14/06/2017">14/06/2017</option></select> 
				</div>
			</div>
			<div id="spezzature" class="row" style="display:none">
				<div class="col-xs-4"><label class="control-label" for="parMod">Parametro Quantit&agrave;</label></div>
				<div class="col-xs-6"><select name="parMod" id="parMod" class="form-control"><option value="">Esegui e mantieni sul book</option></select>
				</div>
			</div>
				<!-- FASE -->
			<div class="row">	
				<div class="col-xs-4"><label class="control-label" for="parFase">Fase</label></div>
				<div class="col-xs-6" id="colFase"><label class="control-label bold">Corrente</label><input type="hidden" name="parFase" value=""></div>
			</div>
		
	
			<!-- Notifica eseguito/ineseguito -->

			<div class="row">
				<div class="col-xs-7"><label>Notifica eseguito/ineseguito</label>								
				</div>
					<div class="col-xs-5">
						<input class="btn button" type="button" value="Imposta Alert" title="Imposta Alert" onclick="openAjaxDialog('/investimenti/allarmiInvestimenti.do', 'chiaveDossier', '007|2001|000000106440', 'title', 'Allarmi Dossier Eseguiti/Ineseguiti', 'width' , 475, 'height', 200)" style="width: 120px">
					</div>
			</div> 
			
				
				
				<div class="row">
					<div class="col-xs-2">
						<label accesskey="notificaSMS">Via SMS</label>
					</div>	
					<div class="col-xs-9">	
						<label class="control-label bold">******1800</label>
					</div>
					<div class="col-xs-1">
						
					</div>
				</div>
				
			<div class="row">
					<div class="col-xs-2">
						<label accesskey="notificaMail">Via email</label>
					</div>	
					<div class="col-xs-9" style="overflow:hidden;">
						<label class="bold" title="mauroluca.tallo@bancopopolare.it
">	
						mauroluca.tallo@bancopopolare.it

						</label>	
						
					</div>
					<div class="col-xs-1">
						<label><img src="/HT/fe/img/NNFFSpunta.png" class="icon15" title="Spunta" alt="Spunta"></label>
					</div>
				</div>
				
				
					
						<div class="row">
							<div class="col-xs-2">
								<label accesskey="notificaApp">Via App</label>
							</div>	
							<div class="col-xs-9">
								
									
									<label class="bold">Aifonseis</label>
								
									-
									
									<label class="bold">iPad di Stefano</label>
								
									-
									
									<label class="bold">Team?s Mac mini</label>
								
									-
									
									<label class="bold">iPhone di Stefano</label>
								
									-
									
									<label class="bold">Smartphone di </label>
								
									-
									
									<label class="bold">SiPhone</label>
								
									-
									
									<label class="bold">Lynx?s Mac mini</label>
									
							</div>
							<div class="col-xs-1">
								
							</div>
						</div>
					
				
			
	
	</div>
	






	
	<div id="notaCPX" style="display: none">
		
		<p style="color:red;font-weight:bold;">Attenzione</p>
		
		<ul><li>La fase "Negoziazione asta di chiusura" sar&agrave; attivata<br>solo in presenza di un prezzo di asta di chiusura.</li></ul>
    </div>
	
</div>	
  		
  
</form>
<!-- /FormAcquistoVendita.jsp -->
		<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" style="display: none; left: 357px; top: 40px;"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Pop-up</a></li><li class="ui-menu-item"><a href="#" class="ui-corner-all">Help</a></li></ul></div>
	</div>
</div>
<div class="divDestra col-xs-6">
	<div class="contentInterno">
		<!--datiQuotazioneLighStream.jsp-->






<form id="formDatiQuotazione" method="post" action="/WEBHT/investimenti/datiQuotazioniJson.do">
	<input type="hidden" name="isin" value="IT0001233417" id="quoteIsin">
	<input type="hidden" name="codMercatoInfo" value="MTA" id="quoteCodMercatoInfo">
	<input type="hidden" name="symbol" value="A2A" id="quoteSymbol">
</form>





	
	

<script>
function helpTabellaDatiQuotazione() {

	
	var idHelp = 0;
	 	
		idHelp = 428;
	
	OpenHelp(getPathContext() + '/help/page.do?id=' + idHelp);

}
</script>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>

<div class="contentInterno section clearfix" id="datiQuotazione">
	
	<h3 class="titleSection">








		
			Dati quotazione
		
		
		

</h3>
		
	<span class="context-buttons pull-right clearfix">
		<span class="bottoni_intestazione_tabella" style="margin-top:-22px;">
			<span class="rounded_corner">&nbsp;</span>
			<span class="bottoni" id="bottoniDatiQuotazione"></span>
		</span>
	</span>
	
	<div class="tappo"></div>
		<table id="datiQuot" style="width:100%">
		    <colgroup> 
		      <col width="22%">
		      <col width="28%">		      
		      <col width="25%">  
		      <col width="25%">
		    </colgroup> 
				<tbody>
				<tr>
					<td colspan="4" style="text-align: center; font-size: large;">
						Titolo: A2A
					</td>
				</tr>
				<tr class="alter">
					<td>
						Q.t&agrave; Miglior Acquisto
					</td> 
					<td>
						P. di Acquisto
					</td>
					<td>
						P. di Vendita
					</td>
					<td>
						Q.t&agrave; Miglior Vendita
					</td>
				</tr>
				<tr class="alter">
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="BIDSIZE_CAH" frmtype="D0" class="bkChanged">2.271</div></td> 
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="BID_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4770")'>1,4770</a></div></td> 
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="ASK_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4790")'>1,4790</a></div></td> 
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="ASKSIZE_CAH" frmtype="D0" class="bkChanged">15.000</div></td> 
				</tr>
			
					<tr>
						<td>
							P. di Mercato
						</td> 
						<td>
							Var %
						</td>
						<td>
							Ora
						</td>
						<td>
							ISIN
						</td>
					</tr>
					<tr>
						<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="LAST" frmtype="D4">1,4780</div></td> 
						<td>
							<div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="VAR_PERC" frmtype="D2" style="width: 50%; float: left; text-align: right">-0,61</div>
							<div style="width: 50%; float:left;">							
								<img src="/HT/IMAGES/TOL/b_cresce_verde.gif" id="quoteTabfreccia" style="float: left; padding-left: 6px; padding-top: 2px;">
							</div>
							<div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="TRDDIR_CAH" frmtype="TREND" style="display:none"></div>
						</td>
						<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="TIMELAST" frmtype="H2">13:27</div></td> 
						<td><div id="ISIN">IT0001233417</div> </td>
					</tr>
					<tr>
						<td colspan="2">
							Fase:
						</td>
						<td colspan="2"><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="DESC_FASE_CAH" frmtype="T">Continuous Trading</div></td>
					</tr>
				</tbody>
		</table>
		
	<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Help</a></li></ul></div>
<script type="text/javascript"><!--
	//start push
	var codMercatoInfo = $('#quoteCodMercatoInfo').val();
	var symbol = $('#quoteSymbol').val();
	//richiedo le quotazioni senza Lightstreamer come primo step
	invocaQuotazioneJson();
	//connessione Lightstreamer
	startStream("https://collpush.intranet.servizi", codMercatoInfo,symbol,"quoteTab",true, "bFTzbDT8KRO5LRAyKDSyKRfwLA%3D%3D");
	
	$(document).ready(function(){
			
		$('#datiQuot_isin').text($('input[name="isin"]').val());
		var spanBottoni = $('#bottoniDatiQuotazione');
		var opzioni = [
			
			{label:'Help',funcOptions:{funzioneJS: helpTabellaDatiQuotazione}}
			
		];
		
			creaMenuStrumenti('#datiQuotazione', opzioni, spanBottoni, 'Strumenti');
		

	});

	function apriPopupDatiQuotazione() {
		//alert('/investimenti/dettaglioTitoloPopup.do?isin=IT0001233417&codMercatoInfo=MTA')
		//openPopUp('/investimenti/dettaglioTitoloPopup.do?isin=IT0001233417&codMercatoInfo=MTA','Dettaglio Titolo IT0001233417','400','800','0','yes')
		openPopupDaTabellatore('/investimenti/dettaglioTitoloPopup.do','isin','IT0001233417','codMercatoInfo','MTA');
	}
	
	//richiedo le quotazioni senza Lightstreamer come primo step
	function invocaQuotazioneJson(){
		var url = $('#formDatiQuotazione').attr('action');
		var isin = $('input[name="isin"]').val();
		var codMercatoInfo = $('input[name="codMercatoInfo"]').val();
		var symbol = $('input[name="symbol"]').val();
		//invocazione json
		$.getJSON(url, { isin: isin, codMercatoInfo: codMercatoInfo, symbol: symbol}, 
			function(json) {
				settaQuote($('div [data-field="BIDSIZE_CAH"]'),json,'quantitaBid');
				settaQuote($('div [data-field="BID_CAH"]'),json,'bid');
				settaQuote($('div [data-field="ASK_CAH"]'),json,'ask');
				settaQuote($('div [data-field="ASKSIZE_CAH"]'),json,'quantitaAsk');
				settaQuote($('div [data-field="TRDTIM_MIN_CAH"]'),json,'oraMinimo');
				settaQuote($('div [data-field="LOW_1_CAH"]'),json,'minimoGiorno');
				settaQuote($('div [data-field="HIGH_1_CAH"]'),json,'massimoGiorno');
				settaQuote($('div [data-field="TRDTIM_MAX_CAH"]'),json,'oraMassimo');
				settaQuote($('div [data-field="OPEN_PRC"]'),json,'apertura');
				settaQuote($('div [data-field="VAR_PERC_APERTURA"]'),json,'variazionePercApertura');
				settaQuote($('div [data-field="QTOT"]'),json,'quantitaTotale');
				settaQuote($('div [data-field="CONTROVALORE"]'),json,'controvalore');
				settaQuote($('div [data-field="LAST"]'),json,'last');
				settaQuote($('div [data-field="VAR_PERC"]'),json,'variazionePercentuale');
				settaQuote($('div [data-field="TIMELAST"]'),json,'ora');
				$('#ISIN').text(isin);
				settaQuote($('div [data-field="DESC_FASE_CAH"]'),json,'descrizioneFase');
				trendFmtPush(json['trend']);
			});
	}
	
	function settaQuote(elem, json, quotaName){
		var value = json[quotaName]; 
		if(value != null){
			//formattazione ore
			if(quotaName === 'ora'){
				value = $.fmatter.util.DateFormat('d/m/Y H:i', value, 'H:i', $.jgrid.formatter.date)
			}
			if(quotaName === 'oraMinimo' || quotaName === 'oraMassimo'){
				value = $.fmatter.util.DateFormat('d/m/Y H:i', value, 'H:i', $.jgrid.formatter.date)
			}
			//formattazione quantit&agrave;
			if(quotaName === 'quantitaAsk' || quotaName === 'quantitaBid' ||  quotaName === 'volume'){
				value = numberFormat(value,0);
			}
			//formattazione prezzi
			if(quotaName === 'ask' || quotaName === 'bid' || quotaName === 'last' || quotaName === 'minimoGiorno' || quotaName === 'massimoGiorno' || quotaName === 'apertura'){
				value = numberFormat(value,4);
			}
			if(quotaName === 'controvalore'  || quotaName === 'quantitaTotale'){
				value = numberFormat(value,0);
			}
			if(quotaName === 'variazionePercApertura'  || quotaName === 'variazionePercentuale'){
				value = numberFormat(value,2);
			}
			if(quotaName=='note' && value==''){
			  value='n.d.'
			}
			elem.text(value);		
		}else{
			elem.text('n.d');
		}
	}

--></script>	
<!-- FINE datiQuotazione.jsp-->


	</div>
	
	<div class="contentInterno section clearfix">	
		
		<h3 class="titleSection">








		
			Book
		
		
		

</h3>
		
		<span class="context-buttons pull-right clearfix">
		<span class="bottoni_intestazione_tabella" style="margin-top:-22px;">
			<span class="rounded_corner">&nbsp;</span>
			<span class="bottoni" id="bottoniBook"></span>
		</span></span>
		<!-- BookLightStream.jsp -->




<form id="formBook" method="post" action="/WEBHT/investimenti/bookJson.do">
	<input type="hidden" name="isin" value="IT0001233417">
	<input type="hidden" name="codMercatoInfo" value="MTA">
	<input type="hidden" name="symbol" value="A2A">
</form>
<div class="contentInterno">



<div class="tappo"></div>
	<div id="divBook">
	<table cellspacing="0" cellpadding="0">
	<colgroup>
		<col width="9%">
		<col width="20%">
		<col width="19%">
		<col width="2%">
		<col width="19%">
		<col width="20%">
		<col width="9%">
		<col width="2%">
	</colgroup>
	<thead>
		<tr>
			<th colspan="3">Proposte in acquisto</th>
			<th></th>
			<th colspan="3">Proposte in vendita</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="bkSottotitolo">N.prop.</td>
			<td class="bkSottotitolo">Q.t&agrave;</td>
			<td class="bkSottotitolo">Prezzo</td>
			<td class="bkSottotitolo">&nbsp;</td>
			<td class="bkSottotitolo">Prezzo</td>
			<td class="bkSottotitolo">Q.t&agrave;</td>
			<td class="bkSottotitolo">N.prop.</td>
			<td class="bkSottotitolo">&nbsp;</td>
		</tr>
		
		<tr class="odd">
			<td style="background-color: white"></td>
			<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BIDSIZE_CAH" frmtype="D0" class="bkChanged">2.271</div></td>
			
				
					<td class="bkBestOffer">
						<a href="javascript:doSettaLimitePush('BID_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BID_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4770")'>1,4770</a></div>
						</a>
					</td>
					<td class="bkBestOffer"></td>
					<td class="bkBestOffer">
						<a href="javascript:doSettaLimitePush('ASK_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="ASK_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4790")'>1,4790</a></div>
						</a>
					</td>
				
				
			
			<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="ASKSIZE_CAH" frmtype="D0" class="bkChanged">15.000</div></td>
			<td style="background-color: white"></td>
			<td style="background-color: white">&nbsp;</td>
		</tr>
		
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_1_CAH" frmtype="T" class="bkChanged">10</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ1_CAH" frmtype="D0" class="bkChanged">32.905</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID1_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID1_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4770")'>1,4770</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK1_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK1_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4790")'>1,4790</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ1_CAH" frmtype="D0" class="bkChanged">97.243</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_1_CAH" frmtype="T" class="bkChanged">12</div></td>
		</tr>
		<tr class="odd">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_2_CAH" frmtype="T" class="bkChanged">15</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ2_CAH" frmtype="D0" class="bkChanged">81.359</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID2_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID2_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4760")'>1,4760</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK2_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK2_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4800")'>1,4800</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ2_CAH" frmtype="D0" class="bkChanged">195.089</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_2_CAH" frmtype="T" class="bkChanged">24</div></td>
		</tr>
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_3_CAH" frmtype="T" class="bkChanged">13</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ3_CAH" frmtype="D0" class="bkChanged">78.656</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID3_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID3_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4750")'>1,4750</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK3_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK3_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4810")'>1,4810</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ3_CAH" frmtype="D0" class="bkChanged">43.024</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_3_CAH" frmtype="T" class="bkChanged">11</div></td>
		</tr>
		<tr class="odd">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_4_CAH" frmtype="T" class="bkChanged">10</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ4_CAH" frmtype="D0" class="bkChanged">50.434</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID4_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID4_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4740")'>1,4740</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK4_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK4_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4820")'>1,4820</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ4_CAH" frmtype="D0" class="bkChanged">219.906</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_4_CAH" frmtype="T" class="bkChanged">10</div></td>
		</tr>
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_5_CAH" frmtype="T" class="bkChanged">10</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ5_CAH" frmtype="D0" class="bkChanged">48.392</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID5_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID5_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4730")'>1,4730</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK5_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK5_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("1,4830")'>1,4830</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ5_CAH" frmtype="D0" class="bkChanged">29.132</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_5_CAH" frmtype="T" class="bkChanged">8</div></td>
		</tr>
		
		</tbody>
	</table>
	<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Pop-up</a></li><li class="ui-menu-item"><a href="#" class="ui-corner-all">Help</a></li></ul></div></div>
<script type="text/javascript"><!--
	var url = $('#formBook').attr('action');
	var isin = $('#formBook').find('input[name="isin"]').val();
	var codMercatoInfo = $('#formBook').find('input[name="codMercatoInfo"]').val();
	var symbol = $('#formBook').find('input[name="symbol"]').val();
	
	
	
	//chiamata LibInvestimenti per recuperare dati iniziali
	$.getJSON(url, { isin: isin, codMercatoInfo: codMercatoInfo, symbol:symbol}, 
			function(json) {
			if(json['error'] != 'true' && json['warning'] != 'true'){
					var righe = json['righe'];
					var den;
					var let;
					for(i = 0; i<righe.length; i++){
						den = righe[i]['denaro'];
						let = righe[i]['lettera'];
						setAndChange($('div [data-field="NPROACQ_'+(i+1)+'_CAH"]'),den.ordini);
						setAndChange($('div [data-field="BEST_BSIZ'+(i+1)+'_CAH"]'),den.quantita);
						setAndChange($('div [data-field="BEST_BID'+(i+1)+'_CAH"]'),den.prezzo,true);
						setAndChange($('div [data-field="BEST_ASK'+(i+1)+'_CAH"]'),let.prezzo,true);
						setAndChange($('div [data-field="BEST_ASIZ'+(i+1)+'_CAH"]'),let.quantita);
						setAndChange($('div [data-field="NPROVEN_'+(i+1)+'_CAH"]'),let.ordini);
					}
					var best = json['miglioreOfferta'];
					if(best != null ){
						setAndChange($('div [data-field="BIDSIZE_CAH"]'),best['denaro'].quantita);
						setAndChange($('div [data-field="BID_CAH"]'),best['denaro'].prezzo,true);
						setAndChange($('div [data-field="ASK_CAH"]'),best['lettera'].prezzo,true);
						setAndChange($('div [data-field="ASKSIZE_CAH"]'),best['lettera'].quantita);
					}
				}
			});
			
	function setAndChange(elem, val, prz){
		val = formatCell(elem.attr('frmType'),val);
 		if(elem.data('oldval') != val) {
			elem.addClass('bkChanged');
		}
		if(prz != null && prz == true){
			
				
					var a = $('<a></a>').attr('href', 'javascript:doSettaLimitePush("'+val+'")');
					a.text(val);
					elem.html(a);
				
				
			
		}else
			elem.text(val);
			
		elem.data('oldval',val);
	}

	//connessione Lightstreamer			
	startStream("https://collpush.intranet.servizi", codMercatoInfo,symbol,"bookTab",true, "bFTzbDT8KRO5LRAyKDSyKRfwLA%3D%3D");


--></script>

	</div>
	
	<div class="contentInterno section clearfix">
		
		<h3 class="titleSection">








		
			Grafico
		
		
		

</h3>
			<br>
		





  
  
<script type="text/javascript">
		
		function aggiornaGrafici(symbol, duration, timeFrame, cache){
			var CHART_SERVER_URL =  '/WEBHT/investimenti/graficoJson.do';		   
		    var params = new Array();
		   // params.redir_host = CHART_SERVER_URL;
		    params.out = 'js';
		    params.s = symbol;
		    params.d = duration;
		    params.tf = timeFrame;
		    params.st = 'line';
		    params.stjs ='line';
		    //params.pc = '258025';//verde
		    params.pc = '003d6e';
		    params.l ='top';
		    params.ng = 1;
		    params.dl = 0;
		    params.cache = cache;
		    /* params - FINE*/
		    
			var graphicParam = new Array();
			graphicParam.navigator = 'false';
			graphicParam.line = '1';
			graphicParam.highlight = '1'			
			graphicParam.gridLine = 'true';
			graphicParam.border = 'false';
			graphicParam.yAx = 'true';
			graphicParam.xAx = 'true';
			graphicParam.decimalLabelY = '2';
			graphicParam.singleHeight='180';
			graphicParam.gridXLine = 'true';
			graphicParam.yNoDataMsg = '-100';
					   
		   CHART_SERVER.chartRequest(CHART_SERVER_URL, params, graphicParam, 'iChartA', { 
			  	 onAfterChartRendered: function(chart){
            		
			   			precedente = 1.4870;	
						try{
				   			range = chart.yAxis[0].getExtremes();
				   			//include la linea orizzontale del prz.precedente nel grafico
							if(precedente > range.max){		
								delta = ((precedente-range.min)/100)*5;					
								chart.yAxis[0].setExtremes(range.min,precedente+delta); //più 5% del range 
							} else if(precedente < range.min){
								delta = ((range.max-precedente)/100)*5;
								chart.yAxis[0].setExtremes(precedente-delta,range.max);//meno 5% del range
							}
							//disegna la linea del prz. precedente
				            chart.yAxis[0].addPlotLine({
											            color: "red",
											            width: 1,
											            dashStyle:'dash',
											            value: precedente,
											            zIndex: 1000
				          								});
						}catch(err){
							//console.log(err.message);
						}  

			          
			          $('.linkGrafico').each(function(x){
		        		if ($(this).attr('id')==duration)
		        			$(this).css('font-weight','bold');
		        		else
		        			$(this).css('font-weight','normal');	
		        		});

           		}
		   });
		}

	
		
		
			aggiornaGrafici('MTA.A2A','1D','1m','S');
		
	
</script><div style="margin-left:10px">
	 
		<a class="linkGrafico" id="1D" href="javascript:aggiornaGrafici('MTA.A2A','1D','1m','S')" style="font-weight: bold;">Intraday</a>&nbsp;
	
	
	<a class="linkGrafico" id="1M" href="javascript:aggiornaGrafici('MTA.A2A','1M','1D','S')" style="font-weight: normal;">Storico 1m</a>&nbsp;
	<a class="linkGrafico" id="3M" href="javascript:aggiornaGrafici('MTA.A2A','3M','1D','S')" style="font-weight: normal;">Storico 3m</a>&nbsp;
	<a class="linkGrafico" id="1Y" href="javascript:aggiornaGrafici('MTA.A2A','1Y','1D','S')" style="font-weight: normal;">Storico 1anno</a>&nbsp;
	<a class="linkGrafico" id="5Y" href="javascript:aggiornaGrafici('MTA.A2A','5Y','1D','S')" style="font-weight: normal;">Storico 5anni</a>&nbsp;
	</div>
<div id="iChartA" style="overflow:hidden;width:100%;height:220px;margin-top:8px;" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 461px; height: 220px; text-align: left; line-height: normal; z-index: 0; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif; font-size: 12px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="461" height="220"><defs><clipPath id="highcharts-1"><rect fill="none" x="0" y="0" width="415" height="178"></rect></clipPath></defs><rect rx="5" ry="5" fill="#FFFFFF" x="0" y="0" width="461" height="220" stroke-width="0.000001"></rect><rect rx="0" ry="0" fill="#FFFFFF" x="36" y="10" width="415" height="178" stroke-width="0.000001"></rect><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 219.5 10 L 219.5 188" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 313.5 10 L 313.5 188" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 406.5 10 L 406.5 188" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 125.5 10 L 125.5 188" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 36 100.5 L 451 100.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 36 190.5 L 451 190.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" stroke="#C0C0C0" stroke-width="1" zIndex="1" d="M 36 10.5 L 451 10.5"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 219.5 188 L 219.5 193" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 313.5 188 L 313.5 193" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 406.5 188 L 406.5 193" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 125.5 188 L 125.5 193" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 36 188.5 L 451 188.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 35.5 10 L 35.5 190" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(36,10)" clip-path="url(#highcharts-1)"><path fill="none" d="M 0 72 L 1.5601503759398496 72 L 3.1203007518796992 72 L 4.680451127819548 90 L 6.2406015037593985 90 L 7.800751879699248 90 L 9.360902255639097 81 L 10.921052631578947 81 L 12.481203007518797 90 L 14.041353383458645 81 L 15.601503759398495 81 L 17.161654135338345 81 L 18.721804511278194 81 L 20.281954887218046 72 L 21.842105263157894 72 L 23.402255639097742 72 L 24.962406015037594 72 L 26.522556390977442 81 L 28.08270676691729 81 L 29.642857142857142 81 L 31.20300751879699 90 L 32.76315789473684 108 L 34.32330827067669 108 L 35.88345864661654 117 L 37.44360902255639 108 L 39.003759398496236 135 L 40.56390977443609 135 L 42.12406015037594 135 L 43.68421052631579 135 L 45.244360902255636 126 L 46.804511278195484 126 L 48.36466165413534 135 L 49.92481203007519 144 L 51.484962406015036 126 L 53.045112781954884 144 L 54.60526315789473 144 L 56.16541353383458 153 L 57.725563909774436 153 L 59.285714285714285 144 L 60.84586466165413 162 L 62.40601503759398 135 L 63.96616541353383 135 L 65.52631578947368 162 L 67.08646616541353 162 L 68.64661654135338 162 L 70.20676691729324 162 L 71.76691729323308 162 L 73.32706766917293 126 L 74.88721804511277 126 L 76.44736842105263 126 L 78.00751879699247 135 L 79.56766917293233 144 L 81.12781954887218 135 L 82.68796992481202 144 L 84.24812030075188 144 L 85.80827067669172 144 L 87.36842105263158 144 L 88.92857142857143 144 L 90.48872180451127 162 L 92.04887218045113 144 L 93.60902255639097 144 L 95.16917293233082 144 L 96.72932330827068 135 L 98.28947368421052 135 L 99.84962406015038 126 L 101.40977443609022 126 L 102.96992481203007 117 L 104.53007518796991 117 L 106.09022556390977 117 L 107.65037593984962 117 L 109.21052631578947 117 L 110.77067669172932 117 L 112.33082706766916 117 L 113.89097744360902 99 L 115.45112781954887 81 L 117.01127819548871 81 L 118.57142857142857 81 L 120.13157894736841 63 L 121.69172932330827 81 L 123.25187969924812 81 L 124.81203007518796 72 L 126.37218045112782 72 L 127.93233082706766 72 L 129.49248120300751 72 L 131.05263157894737 81 L 132.61278195488723 81 L 134.17293233082705 90 L 135.7330827067669 90 L 137.29323308270676 108 L 138.85338345864662 90 L 140.41353383458647 90 L 141.9736842105263 90 L 143.53383458646616 90 L 145.093984962406 90 L 146.65413533834587 90 L 148.2142857142857 90 L 149.77443609022555 90 L 151.3345864661654 99 L 152.89473684210526 99 L 154.45488721804512 117 L 156.01503759398494 108 L 157.5751879699248 99 L 159.13533834586465 81 L 160.6954887218045 108 L 162.25563909774436 99 L 163.8157894736842 90 L 165.37593984962405 81 L 166.9360902255639 90 L 168.49624060150376 90 L 170.0563909774436 90 L 171.61654135338344 99 L 173.1766917293233 99 L 174.73684210526315 99 L 176.296992481203 99 L 177.85714285714286 90 L 179.4172932330827 99 L 180.97744360902254 81 L 182.5375939849624 108 L 184.09774436090225 108 L 185.6578947368421 108 L 187.21804511278194 108 L 188.7781954887218 108 L 190.33834586466165 99 L 191.8984962406015 90 L 193.45864661654136 99 L 195.01879699248119 81 L 196.57894736842104 90 L 198.1390977443609 90 L 199.69924812030075 90 L 201.25939849624058 90 L 202.81954887218043 90 L 204.3796992481203 90 L 205.93984962406014 90 L 207.5 90 L 209.06015037593983 108 L 210.62030075187968 108 L 212.18045112781954 108 L 213.7406015037594 99 L 215.30075187969925 99 L 216.86090225563908 108 L 218.42105263157893 99 L 219.9812030075188 99 L 221.54135338345864 99 L 223.1015037593985 90 L 224.66165413533832 90 L 226.22180451127818 90 L 227.78195488721803 117 L 229.3421052631579 108 L 230.90225563909775 108 L 232.46240601503757 99 L 234.02255639097743 99 L 235.58270676691728 108 L 237.14285714285714 108 L 238.703007518797 108 L 240.26315789473682 108 L 241.82330827067668 99 L 243.38345864661653 117 L 244.9436090225564 108 L 246.50375939849624 108 L 248.06390977443607 108 L 249.62406015037593 108 L 251.18421052631578 90 L 252.74436090225564 81 L 254.30451127819546 81 L 255.86466165413532 81 L 257.4248120300752 81 L 258.98496240601503 90 L 260.54511278195486 81 L 262.10526315789474 81 L 263.66541353383457 72 L 265.22556390977445 72 L 266.7857142857143 72 L 268.3458646616541 72 L 269.906015037594 72 L 271.4661654135338 72 L 273.0263157894737 63 L 274.5864661654135 63 L 276.14661654135335 63 L 277.70676691729324 72 L 279.26691729323306 72 L 280.82706766917295 72 L 282.3872180451128 72 L 283.9473684210526 72 L 285.5075187969925 72 L 287.0676691729323 90 L 288.62781954887214 99 L 290.187969924812 108 L 291.74812030075185 108 L 293.30827067669173 108 L 294.86842105263156 99 L 296.4285714285714 99 L 297.9887218045113 108 L 299.5488721804511 108 L 301.109022556391 108 L 302.6691729323308 108 L 304.22932330827064 99 L 305.7894736842105 99 L 307.34962406015035 99 L 308.90977443609023 99 L 310.46992481203006 108 L 312.0300751879699 126 L 313.59022556390977 126 L 315.1503759398496 126 L 316.7105263157895 126 L 318.2706766917293 126 L 319.83082706766913 126 L 321.390977443609 144 L 322.95112781954884 144 L 324.5112781954887 144 L 326.07142857142856 144 L 327.6315789473684 144 L 329.19172932330827 144 L 330.7518796992481 153 L 332.312030075188 162 L 333.8721804511278 162 L 335.43233082706763 162 L 336.9924812030075 162 L 338.55263157894734 162 L 340.1127819548872 153 L 341.67293233082705 153 L 343.2330827067669 153 L 344.79323308270676 153 L 346.3533834586466 153 L 347.9135338345865 153 L 349.4736842105263 153 L 351.0338345864661 153 L 352.593984962406 153 L 354.15413533834584 135 L 355.7142857142857 135 L 357.27443609022555 144 L 358.8345864661654 144 L 360.39473684210526 144 L 361.9548872180451 135 L 363.51503759398497 135 L 365.0751879699248 135 L 366.6353383458646 135 L 368.1954887218045 135 L 369.75563909774434 117 L 371.3157894736842 117 L 372.87593984962405 117 L 374.4360902255639 117 L 375.99624060150376 117 L 377.5563909774436 108 L 379.11654135338347 108 L 380.6766917293233 108 L 382.2368421052631 108 L 383.796992481203 108 L 385.35714285714283 99 L 386.9172932330827 99 L 388.47744360902254 99 L 390.03759398496237 99 L 391.59774436090225 99 L 393.1578947368421 99 L 394.7180451127819 99 L 396.2781954887218 99 L 397.8383458646616 99 L 399.3984962406015 99 L 400.95864661654133 99 L 402.51879699248116 99 L 404.07894736842104 99 L 405.63909774436087 108 L 407.19924812030075 117 L 408.7593984962406 117 L 410.3195488721804 117 L 411.8796992481203 117 L 413.4398496240601 117 L 415 108" stroke="#003d6e" stroke-width="1" zIndex="1"></path></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(36,10)" clip-path="none"></g></g><g class="highcharts-axis-labels" zIndex="7"><text x="126.48872180451127" y="202" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="126.48872180451127">10:00</tspan></text><text x="0" y="-9999" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="0">11:00</tspan></text><text x="313.70676691729324" y="202" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="313.70676691729324">12:00</tspan></text><text x="0" y="-9999" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="0">13:00</tspan></text></g><g class="highcharts-axis-labels" zIndex="7"><text x="34" y="188" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:188px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="34">1,47</tspan></text><text x="34" y="98" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:188px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="34">1,48</tspan></text><text x="34" y="7.999999999999972" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:188px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="34">1,49</tspan></text></g><g class="highcharts-tooltip" zIndex="8" style="padding:0;white-space:nowrap;" visibility="hidden"><rect rx="5" ry="5" fill="none" x="0" y="0" width="10" height="10" stroke-width="5" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="none" x="0" y="0" width="10" height="10" stroke-width="3" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="none" x="0" y="0" width="10" height="10" stroke-width="1" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.15" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="rgb(255,255,255)" x="0" y="0" width="10" height="10" stroke-width="2" fill-opacity="0.85"></rect><text x="5" y="18" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:#333333;fill:#333333;" zIndex="1"></text></g><g class="highcharts-tracker" zIndex="9"><g visibility="visible" zIndex="1" transform="translate(36,10)" clip-path="url(#highcharts-1)"><path fill="none" d="M -10 72 L 0 72 L 1.5601503759398496 72 L 3.1203007518796992 72 L 4.680451127819548 90 L 6.2406015037593985 90 L 7.800751879699248 90 L 9.360902255639097 81 L 10.921052631578947 81 L 12.481203007518797 90 L 14.041353383458645 81 L 15.601503759398495 81 L 17.161654135338345 81 L 18.721804511278194 81 L 20.281954887218046 72 L 21.842105263157894 72 L 23.402255639097742 72 L 24.962406015037594 72 L 26.522556390977442 81 L 28.08270676691729 81 L 29.642857142857142 81 L 31.20300751879699 90 L 32.76315789473684 108 L 34.32330827067669 108 L 35.88345864661654 117 L 37.44360902255639 108 L 39.003759398496236 135 L 40.56390977443609 135 L 42.12406015037594 135 L 43.68421052631579 135 L 45.244360902255636 126 L 46.804511278195484 126 L 48.36466165413534 135 L 49.92481203007519 144 L 51.484962406015036 126 L 53.045112781954884 144 L 54.60526315789473 144 L 56.16541353383458 153 L 57.725563909774436 153 L 59.285714285714285 144 L 60.84586466165413 162 L 62.40601503759398 135 L 63.96616541353383 135 L 65.52631578947368 162 L 67.08646616541353 162 L 68.64661654135338 162 L 70.20676691729324 162 L 71.76691729323308 162 L 73.32706766917293 126 L 74.88721804511277 126 L 76.44736842105263 126 L 78.00751879699247 135 L 79.56766917293233 144 L 81.12781954887218 135 L 82.68796992481202 144 L 84.24812030075188 144 L 85.80827067669172 144 L 87.36842105263158 144 L 88.92857142857143 144 L 90.48872180451127 162 L 92.04887218045113 144 L 93.60902255639097 144 L 95.16917293233082 144 L 96.72932330827068 135 L 98.28947368421052 135 L 99.84962406015038 126 L 101.40977443609022 126 L 102.96992481203007 117 L 104.53007518796991 117 L 106.09022556390977 117 L 107.65037593984962 117 L 109.21052631578947 117 L 110.77067669172932 117 L 112.33082706766916 117 L 113.89097744360902 99 L 115.45112781954887 81 L 117.01127819548871 81 L 118.57142857142857 81 L 120.13157894736841 63 L 121.69172932330827 81 L 123.25187969924812 81 L 124.81203007518796 72 L 126.37218045112782 72 L 127.93233082706766 72 L 129.49248120300751 72 L 131.05263157894737 81 L 132.61278195488723 81 L 134.17293233082705 90 L 135.7330827067669 90 L 137.29323308270676 108 L 138.85338345864662 90 L 140.41353383458647 90 L 141.9736842105263 90 L 143.53383458646616 90 L 145.093984962406 90 L 146.65413533834587 90 L 148.2142857142857 90 L 149.77443609022555 90 L 151.3345864661654 99 L 152.89473684210526 99 L 154.45488721804512 117 L 156.01503759398494 108 L 157.5751879699248 99 L 159.13533834586465 81 L 160.6954887218045 108 L 162.25563909774436 99 L 163.8157894736842 90 L 165.37593984962405 81 L 166.9360902255639 90 L 168.49624060150376 90 L 170.0563909774436 90 L 171.61654135338344 99 L 173.1766917293233 99 L 174.73684210526315 99 L 176.296992481203 99 L 177.85714285714286 90 L 179.4172932330827 99 L 180.97744360902254 81 L 182.5375939849624 108 L 184.09774436090225 108 L 185.6578947368421 108 L 187.21804511278194 108 L 188.7781954887218 108 L 190.33834586466165 99 L 191.8984962406015 90 L 193.45864661654136 99 L 195.01879699248119 81 L 196.57894736842104 90 L 198.1390977443609 90 L 199.69924812030075 90 L 201.25939849624058 90 L 202.81954887218043 90 L 204.3796992481203 90 L 205.93984962406014 90 L 207.5 90 L 209.06015037593983 108 L 210.62030075187968 108 L 212.18045112781954 108 L 213.7406015037594 99 L 215.30075187969925 99 L 216.86090225563908 108 L 218.42105263157893 99 L 219.9812030075188 99 L 221.54135338345864 99 L 223.1015037593985 90 L 224.66165413533832 90 L 226.22180451127818 90 L 227.78195488721803 117 L 229.3421052631579 108 L 230.90225563909775 108 L 232.46240601503757 99 L 234.02255639097743 99 L 235.58270676691728 108 L 237.14285714285714 108 L 238.703007518797 108 L 240.26315789473682 108 L 241.82330827067668 99 L 243.38345864661653 117 L 244.9436090225564 108 L 246.50375939849624 108 L 248.06390977443607 108 L 249.62406015037593 108 L 251.18421052631578 90 L 252.74436090225564 81 L 254.30451127819546 81 L 255.86466165413532 81 L 257.4248120300752 81 L 258.98496240601503 90 L 260.54511278195486 81 L 262.10526315789474 81 L 263.66541353383457 72 L 265.22556390977445 72 L 266.7857142857143 72 L 268.3458646616541 72 L 269.906015037594 72 L 271.4661654135338 72 L 273.0263157894737 63 L 274.5864661654135 63 L 276.14661654135335 63 L 277.70676691729324 72 L 279.26691729323306 72 L 280.82706766917295 72 L 282.3872180451128 72 L 283.9473684210526 72 L 285.5075187969925 72 L 287.0676691729323 90 L 288.62781954887214 99 L 290.187969924812 108 L 291.74812030075185 108 L 293.30827067669173 108 L 294.86842105263156 99 L 296.4285714285714 99 L 297.9887218045113 108 L 299.5488721804511 108 L 301.109022556391 108 L 302.6691729323308 108 L 304.22932330827064 99 L 305.7894736842105 99 L 307.34962406015035 99 L 308.90977443609023 99 L 310.46992481203006 108 L 312.0300751879699 126 L 313.59022556390977 126 L 315.1503759398496 126 L 316.7105263157895 126 L 318.2706766917293 126 L 319.83082706766913 126 L 321.390977443609 144 L 322.95112781954884 144 L 324.5112781954887 144 L 326.07142857142856 144 L 327.6315789473684 144 L 329.19172932330827 144 L 330.7518796992481 153 L 332.312030075188 162 L 333.8721804511278 162 L 335.43233082706763 162 L 336.9924812030075 162 L 338.55263157894734 162 L 340.1127819548872 153 L 341.67293233082705 153 L 343.2330827067669 153 L 344.79323308270676 153 L 346.3533834586466 153 L 347.9135338345865 153 L 349.4736842105263 153 L 351.0338345864661 153 L 352.593984962406 153 L 354.15413533834584 135 L 355.7142857142857 135 L 357.27443609022555 144 L 358.8345864661654 144 L 360.39473684210526 144 L 361.9548872180451 135 L 363.51503759398497 135 L 365.0751879699248 135 L 366.6353383458646 135 L 368.1954887218045 135 L 369.75563909774434 117 L 371.3157894736842 117 L 372.87593984962405 117 L 374.4360902255639 117 L 375.99624060150376 117 L 377.5563909774436 108 L 379.11654135338347 108 L 380.6766917293233 108 L 382.2368421052631 108 L 383.796992481203 108 L 385.35714285714283 99 L 386.9172932330827 99 L 388.47744360902254 99 L 390.03759398496237 99 L 391.59774436090225 99 L 393.1578947368421 99 L 394.7180451127819 99 L 396.2781954887218 99 L 397.8383458646616 99 L 399.3984962406015 99 L 400.95864661654133 99 L 402.51879699248116 99 L 404.07894736842104 99 L 405.63909774436087 108 L 407.19924812030075 117 L 408.7593984962406 117 L 410.3195488721804 117 L 411.8796992481203 117 L 413.4398496240601 117 L 415 108 L 425 108" isTracker="true" stroke-linejoin="round" visibility="visible" stroke-opacity="0.0001" stroke="rgb(192,192,192)" stroke-width="21" style=""></path></g></g><path fill="none" d="M 36 37.5 L 451 37.5" stroke="red" stroke-width="1" stroke-dasharray="4,3" zIndex="1000"></path></svg></div></div>





	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
	
		//tendina opzioni compra vendi
		var spanBottoni = $('#bottoniFormCompraVendi');
		var opzioni = [
			{label:'Pop-up',funcOptions:{funzioneJS: apriPopupCompraVendi}},
			{label:'Help',funcOptions:{funzioneJS: helpTabellaCompraVendi}}
		];
		creaMenuStrumenti('#compraVendiDiv', opzioni, spanBottoni, 'Strumenti');
			
		//tendina opzioni book
		spanBottoni = $('#bottoniBook');
		opzioni = [
			{label:'Pop-up',funcOptions:{funzioneJS: apriPopupBook}},
			{label:'Help',funcOptions:{funzioneJS: helpTabellaBook}}
		];
		creaMenuStrumenti('#divBook', opzioni, spanBottoni, 'Strumenti');
	});
	function apriPopupCompraVendi() {
		openTitoloPopupDaCompravendi('IT0001233417','MTA');
	}
		
	function apriPopupBook() {
		var url = getPathContext() + '/investimenti/bookForm.do?mostraMercatiTrattazione=true&isin=IT0001233417&codMercatoInfo=MTA';
		window.open(url, 'IT0001233417', 'width=400,height=220,toolbar=0,status=0,menubar=0,scrollbars=0');
	}
</script>



<script>
function helpTabellaCompraVendi() {

	
	var idHelp = 0;
	 	
		idHelp = 870;
	
	OpenHelp(getPathContext() + '/help/page.do?id=' + idHelp);

}
</script>




<div id="pulsantiCompraVendi" class="oRight row">
	<div class="col-xs-12">
			<input id="compraButton" class="btn button" type="submit" value="Compra" title="Compra" onclick="compraVendi('ACQ')">
			<input id="vendiButton" class="btn button" type="submit" value="Vendi" title="Vendi" onclick="compraVendi('VEN')" style="display: none;">
	</div>
</div>
<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>




	
	

<script>
function helpTabellaBook() {

	
	var idHelp = 0;
	 	
		idHelp = 414;
	
	OpenHelp(getPathContext() + '/help/page.do?id=' + idHelp);

}
</script>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>

	 				</div>	
	 				<div class="toldisclaimer col-xs-12">
						<span>Fonte dati: Borsa Italiana</span>
						 
					</div>			
	 				
					
					
