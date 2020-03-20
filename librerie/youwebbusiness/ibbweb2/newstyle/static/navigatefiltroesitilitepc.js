/**
azzera il filtro ma mantiene le variabili in query string relative all'ordinamento della tabella.
la parte di query string appesa alla action e' contenuta nella variabile globale ESITI_SORTING_QS
dichiarata in listaEsiti.jsp
*/

function clearFilter() {
	$('#masterform').attr('action', 'resetEsitiPC.action');
	$('#masterform').attr('method', 'POST');
	$('#masterform').submit();
}


function goBackFilter() {
	$('#masterform').attr('action', 'ricercaEsitiPC.action');
	$('#masterform').attr('method', 'POST');
	$('#masterform').submit();
}

function submitFilter() {
	$('#masterform').attr('action', 'listaEsitiPC.action');
	$('#masterform').attr('method', 'POST');
	$('#masterform').submit();
}