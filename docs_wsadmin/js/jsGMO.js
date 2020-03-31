function FormSubmit()
{
	if (verifiche())
	{
		document.SaveForm.campiCompleti.value= document.SaveForm.campiCompleti.value.substring(0,document.SaveForm.campiCompleti.value.length-1);

		document.SaveForm.Nome.value=document.SaveForm.Nome.value.toUpperCase();
		document.SaveForm.Cognome.value=document.SaveForm.Cognome.value.toUpperCase();
		document.SaveForm.Username.value=document.SaveForm.Username.value.toUpperCase();
		document.SaveForm.BOSoggetto.value=document.SaveForm.BOSoggetto.value.toUpperCase();
		document.SaveForm.BORapporto.value=document.SaveForm.BORapporto.value.toUpperCase();
		document.SaveForm.submit();
	}
}
function verifiche()
{
	var nome = document.SaveForm.Nome;
	var cognome = document.SaveForm.Cognome;
	var user = document.SaveForm.Username;
	var BOsog = document.SaveForm.BOSoggetto;
	var BOrap = document.SaveForm.BORapporto;
	var tuttiVuoti = true;
	var stringaCampiCompleti = "";
	document.SaveForm.campiCompleti.value = '';
	if (isEmpty(nome))
	{
		tuttiVuoti = false;
		stringaCampiCompleti = stringaCampiCompleti + 'Nome,';
		if (!(minLength(nome, 'Nome',3)))	{return false;}
	}
	if (isEmpty(cognome))
	{
		tuttiVuoti = false;
		stringaCampiCompleti = stringaCampiCompleti + 'Cognome,';
		if (!(minLength(cognome, 'Cognome',3)))	{return false;}
	}
	if (isEmpty(user))
	{
		tuttiVuoti = false;
		stringaCampiCompleti = stringaCampiCompleti + 'Username,';
		if (!(minLength(user, 'Username',3)))	{return false;}
	}
	if (isEmpty(BOsog))
	{
		tuttiVuoti = false;
		stringaCampiCompleti = stringaCampiCompleti + 'BOSoggetto,';
		if (!(minLength(BOsog, 'Codice BO soggetto',3)))	{return false;}
	}
	if (isEmpty(BOrap))
	{
		tuttiVuoti = false;
		stringaCampiCompleti = stringaCampiCompleti + 'BORapporto,';
		if (!(minLength(BOrap, 'Codice BO rapporto',3)))	{return false;}
	}
	if (tuttiVuoti == true)
	{
		alert('Si deve inserire almeno un parametro di ricerca!');
		return false;
	}
	document.SaveForm.campiCompleti.value = stringaCampiCompleti;
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