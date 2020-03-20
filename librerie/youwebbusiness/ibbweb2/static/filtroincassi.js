

function clearFilterDistinta() {
	var valueConfirm = true;
	var valueChanged = document.masterform['checkChangeValue'].value;
	if ( valueChanged == 1){
		valueConfirm = confirm("Attenzione, le modifiche effettuate non verranno salvate. Si desidera procedere?");
	}
	if (valueConfirm){
	    var filtroincassiform = document.getElementById('masterform');
	    if (!filtroincassiform) {
	        return;
	    }
	    filtroincassiform.action="ricCheckDistinta.action";
	    var checkIncassiSottodistinteListSize = document.getElementById('checkIncassiSottodistinteListSize');
	    if (checkIncassiSottodistinteListSize) {
	    	checkIncassiSottodistinteListSize.value = '10';
	    }
	    var checkincassivr3 = document.getElementById('checkincassivr3');
	    if (checkincassivr3) {
	        checkincassivr3.value = 'clearFilterDistinta';
	    }
	    var fromFilter = document.getElementById('fromFilter');
	    if (fromFilter) {
	    	fromFilter.value = 'false';
	    }
	    var filtered = document.getElementById('filtered');
	    if (filtered) {
	    	filtered.value = 'false';
	    }
	    filtroincassiform.submit();
	}
}
function clearFilterSottodistinta() {
	var valueConfirm = true;
	var valueChanged = document.masterform['checkChangeValue'].value;
	if ( valueChanged == 1){
		valueConfirm = confirm("Attenzione, le modifiche effettuate non verranno salvate. Si desidera procedere?");
	}
	if (valueConfirm){
	    var filtroincassiform = document.getElementById('masterform');
	    if (!filtroincassiform) {
	        return;
	    }
	    filtroincassiform.action="ricCheckSottodistinta.action";
	    var checkIncassiDisposizioniListSize = document.getElementById('checkIncassiDisposizioniListSize');
	    if (checkIncassiDisposizioniListSize) {
	        checkIncassiDisposizioniListSize.value = '10';
	    }
	    var checkincassivr3 = document.getElementById('checkincassivr3');
	    if (checkincassivr3) {
	        checkincassivr3.value = 'clearFilterSottodistinta';
	    }
	    var fromFilter = document.getElementById('fromFilter');
	    if (fromFilter) {
	    	fromFilter.value = 'false';
	    }
	    var filtered = document.getElementById('filtered');
	    if (filtered) {
	    	filtered.value = 'false';
	    }
	    filtroincassiform.submit();
	}
}


/*
A_DATA_SCADENZA 
A_IMPORTO   
DATA_SCADENZA   
DA_IMPORTO  
DESTINATARIO    
SIAMITTENTE 
TIPO    171
azione  elimina_disposizioni_aggregate
banca   *
checkBoxIban    
filter_defined  false
first_item_count    1
first_item_count_elenco_d...    
id_supporto_disp    21329454
max_items_number    10
max_items_number_elenco_d...    
max_number_of_advanced_pr...    200
max_number_of_synthetic_p...    12000
n_disposizioni  2
next_option 
order_by_option datascadenza=desc
order_by_option_elenco_di...    
pagina  
pagina  
previous_option 
stato_elenco_distinte   *
tipo_div    sintetico
total_rows_without_filter...    2
*/
function onClickFilterSottodistinte() {
	var valueConfirm = true;
	var valueChanged = document.masterform['checkChangeValue'].value;
	if ( valueChanged == 1){
		valueConfirm = confirm("Attenzione, le modifiche effettuate non verranno salvate. Si desidera procedere?");
	}
	if (valueConfirm){
	    var filtroincassiform = document.getElementById('masterform');
	    if (!filtroincassiform) {
	        return;
	    }
	    filtroincassiform.action="filtroCheckDistinta.action";
	    filtroincassiform.first_item_count.value="1";
	    filtroincassiform.submit();
	}
}


/*
A_IMPORTO   
DA_IMPORTO  
DESTINATARIO    
SIAMITTENTE 
TIPO    171
azione  elimina_disposizioni_aggregate
banca   *
checkBoxIban    
filter_defined  false
first_item_count    1
first_item_count_elenco_d...    1
id_sottodistinta    3175
id_supporto_disp    21329454
intestatario    
maxNumberOfRows 3000
max_items_number    10
max_items_number_elenco_d...    10
max_number_of_advanced_pr...    200
max_number_of_synthetic_p...    12000
modificaDistinteEnabled true
n_disposizioni  7
next_option 
numero_sottodistinta    1
operatore   19
order_by_option importo=asc
order_by_option_elenco_di...    datascadenza=desc
pagina  dettagliodistintaincassisepa
pagina  
previous_option 
stato_elenco_distinte   *
tipo_div    sintetico
total_rows_without_filter...    7

*/
function onClickFilterDisposizioni() {
	var valueConfirm = true;
	var valueChanged = document.masterform['checkChangeValue'].value;
	if ( valueChanged == 1){
		valueConfirm = confirm("Attenzione, le modifiche effettuate non verranno salvate. Si desidera procedere?");
		
	}
	if (valueConfirm){
	    var filtroincassiform = document.getElementById('masterform');
	    if (!filtroincassiform) {
	        return;
	    }
	    filtroincassiform.action="filtroCheckSottodistinta.action";
	    filtroincassiform.first_item_count.value="1";
	    filtroincassiform.submit();
	}
}
