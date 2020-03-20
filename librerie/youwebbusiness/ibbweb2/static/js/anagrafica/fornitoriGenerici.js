$(document).ready(function() {

	$('#btnDatiAggiuntivi').click(showParameters);
	reopenParameters();
	
});

function showParameters() {
		var flag=false;
		var datiAggiuntivi = $('#datiAggiuntiviFor').val();
		if (datiAggiuntivi != null && datiAggiuntivi != '' && datiAggiuntivi=='aperto'){
			flag=false;
			$('#datiAggiuntiviFor').val('');
		}
		else{
			flag=true;
			$('#datiAggiuntiviFor').val('aperto');
		}

		$('#tbl-dati-aggiuntivi').toggleClass('nascosto', !flag);
		
		var btn = $('#btnDatiAggiuntivi')[0];
		if (flag) {
			btn.src="..\static\images\asc.gif"
		}
		else	{
			btn.src="..\static\images\desc.gif"; 
		}
}

function reopenParameters() {
		var flag=false;
		var datiAggiuntivi = $('#datiAggiuntiviFor').val();
		if (datiAggiuntivi != null && datiAggiuntivi != '' && datiAggiuntivi=='aperto') 
		{
			flag=true;
		}
		else
		{
			flag=false;
		}

		$('#tbl-dati-aggiuntivi').toggleClass('nascosto', !flag);

		var btn = $('#btnDatiAggiuntivi')[0];
		if (flag) {
			btn.src="..\static\images\asc.gif"
		}
		else	{
			btn.src="..\static\images\desc.gif"; 
		}
}
