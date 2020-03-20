/**
copiata da navigatefiltroesitipag
*/

function clearFilter() {
	$('#masterform').attr('action', 'resetEsitiSedadRem.action');
	$('#masterform').attr('method', 'POST');
	$('#esitiListSize').attr('value', '10');
	$('#pagesize').attr('value', '10');
	$('#masterform').submit();
}


function goBackFilter() {
	$('#masterform').attr('action', 'goBackFiltroSedadRem.action');
	$('#masterform').attr('method', 'POST');
	$('#masterform').submit();
}

function submitFilter() {
	if(!($('#imgricerca')[0].disabled)){
		$('#masterform').attr('action', 'listaEsitiSedadRem.action');
		$('#masterform').attr('method', 'POST');
		$('#masterform').submit();
	}
}