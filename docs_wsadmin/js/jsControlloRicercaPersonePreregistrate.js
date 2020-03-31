//-------------------------------------------------------------------------------
function RicercaPersonePreregistrate() {
	var OK = 1;
	if (OK == 1)
	{
	 if (document.FormPersonaPreregistrata.PCodiceFiscalePersonaGiaRegistrata.value.length != 16)

	      {
		 	it_alert_error('MSG-00042');
			document.FormPersonaPreregistrata.PCodiceFiscalePersonaGiaRegistrata.focus();
			OK = 0;
		}
	}

	if (OK == 1)
	{
	 if (controllaAlfanumerico(document.FormPersonaPreregistrata.PCodiceFiscalePersonaGiaRegistrata.value) == 1)

	      {
		 	it_alert_error('MSG-00118');
			document.FormPersonaPreregistrata.PCodiceFiscalePersonaGiaRegistrata.focus();
			OK = 0;
		}
	}

	if (OK == 1)
	{
		document.FormPersonaPreregistrata.PCodiceFiscalePersonaGiaRegistrata.value = document.FormPersonaPreregistrata.PCodiceFiscalePersonaGiaRegistrata.value.toUpperCase();
		document.FormPersonaPreregistrata.submit();
	}
}
//-------------------------------------