<!--
//--------------------------------------------------------------------
function InviaDati(RegolaVecchia) {
var OK = 1;
if(document.SaveForm.PCancella.checked == true)
{
	Risposta=confirm('Sei sicuro di voler cancellare la regola di switch tra '+document.SaveForm.PNomeProfiloIniziale.value+' e '+document.SaveForm.PNomeProfiloFinale.value+'?');
}
else
{
	if (RegolaVecchia == document.SaveForm.PTipoRegola[document.SaveForm.PTipoRegola.selectedIndex].value)
	{
		it_alert_error('MSG-00168');
		document.SaveForm.PTipoRegola.focus();
		OK = 0;
	}
	if (OK == 1)
	{
	Risposta=confirm('Sei sicuro di voler modificare la regola di switch tra '+document.SaveForm.PNomeProfiloIniziale.value+' e '+document.SaveForm.PNomeProfiloFinale.value+'?');
	}
}
if (OK == 1)
{
	if (Risposta == false)
	{
		OK = 0;
	}
}
if (OK == 1)
{
document.SaveForm.submit();
}
}
//-->