/**
azzera il filtro ma mantiene le variabili in query string relative all'ordinamento della tabella.
la parte di query string appesa alla action e' contenuta nella variabile globale ESITI_SORTING_QS
dichiarata in listaEsiti.jsp
*/

function clearFilter() {
	$('#masterform').attr('action', 'resetEsitiInc.action');
	$('#masterform').attr('method', 'POST');
	$('#esitiListSize').attr('value', '10');
	$('#pagesize').attr('value', '10');
	$('#masterform').submit();
}


function goBackFilter() {
	$('#masterform').attr('action', 'ricercaEsitiInc.action');
	$('#masterform').attr('method', 'POST');
	$('#masterform').submit();
}

function submitFilter() {
	if(!($('#imgricerca')[0].disabled)){
		$('#masterform').attr('action', 'filterEsitiInc.action');
		$('#masterform').attr('method', 'POST');
		$('#masterform').submit();
	}
}