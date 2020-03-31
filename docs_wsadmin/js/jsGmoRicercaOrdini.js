function FormSubmit()
{
	if (verifiche())
	{

		document.SaveForm.BORapporto.value=document.SaveForm.BORapporto.value.toUpperCase();
		document.SaveForm.CodISINTit.value=document.SaveForm.CodISINTit.value.toUpperCase();
		document.SaveForm.submit();
	}
}
function verifiche()
{
	var pre = document.SaveForm;
	var BOrap = document.SaveForm.BORapporto;
	var CISIN = document.SaveForm.CodISINTit;

	var tuttiVuoti = true;

	if (isEmpty(BOrap))
	{
		tuttiVuoti = false;
		if (!(minLength(BOrap, 'Codice BO rapporto',3)))	{return false;}
	}
	if (isEmpty(CISIN))
	{
		tuttiVuoti = false;
		if (!(minLength(CISIN, 'Codice ISIN',3)))	{return false;}
	}

	if (tuttiVuoti == true && document.SaveForm.StatiOrdine.value=="EVRY" && document.SaveForm.Mercati.value=="EVRY")
	{
		alert('Si deve inserire almeno un parametro di ricerca!');
		return false;
	}

	if (pre.AAFine[pre.AAFine.selectedIndex].value > pre.AAInizio[pre.AAInizio.selectedIndex].value) {
		return true;
	} else if (pre.AAFine[pre.AAFine.selectedIndex].value < pre.AAInizio[pre.AAInizio.selectedIndex].value) {
		alert('La data di fine è minore di quella di inizio!');
		return false;
	} else {
		if (pre.MMFine[pre.MMFine.selectedIndex].value > pre.MMInizio[pre.MMInizio.selectedIndex].value) {
			return true;
		} else if (pre.MMFine[pre.MMFine.selectedIndex].value < pre.MMInizio[pre.MMInizio.selectedIndex].value) {
			alert('La data di fine è minore di quella di inizio!');
			return false;
		} else {
			if (pre.GGFine[pre.GGFine.selectedIndex].value < pre.GGInizio[pre.GGInizio.selectedIndex].value) {
				alert('La data di fine è minore di quella di inizio!');
				return false;
			} else {
				return true;
			}
		}
	}



	return true;
}
function isEmpty(campo)
{
	if (campo.value == '')
	{
		return false;
	}
	else if (campo.value.length==0)
	{
		return false;
	}
	else if (!(similTrim(campo)))
	{
		return false;
	}
	return true;
}
function similTrim(campo)
{
	var stringa = campo.value;
	var lung = campo.value.length;
	var i=0;
	var vuoto = true;
	for (i=0; i<lung; i++)
	{
		if (stringa.charAt(i) != ' ')
		{
			vuoto = false;
		}
	}
	if (vuoto == true)
	{
		return false;
	}
	return true;
}
function minLength(campo, nomeCampo, minimo)
{
	if (campo.value.length < minimo)
	{
		alert('Il campo '+nomeCampo+' deve contenere almeno '+minimo+' caratteri per velocizzare le operazioni di ricerca!')
		campo.focus();
		return false;
	}
	else if (!(contaSpazi(campo, minimo)))
	{
		alert('Il campo '+nomeCampo+' deve contenere almeno '+minimo+' caratteri validi per velocizzare le operazioni di ricerca!')
		campo.focus();
		return false;
	}
	return true;
}
function contaSpazi(campo, minimo)
{
	var stringa = campo.value;
	var lung = campo.value.length;
	var i=0;
	var pieni = 0;
	for (i=0; i<lung; i++)
	{
		if (stringa.charAt(i) != ' ')
		{
			pieni++;
		}
	}
	if (pieni < minimo)
	{
		return false;
	}
	return true;
}