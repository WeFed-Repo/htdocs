//----------------------------------------------------------------------------
function InviaDati() {
var OK = 1;	
var aus;

if (OK == 1)
{
	if (document.SaveForm.PNome.value == "")	
     	 {
	 it_alert_error('MSG-00012');
         document.SaveForm.PNome.focus();
         OK = 0;
      	}

}
if (OK == 1)
{
	if (document.SaveForm.PStato.value == "")	
      	{
	 it_alert_error('MSG-00012');
         document.SaveForm.PStato.focus();
         OK = 0;
      	}
}
if (OK == 1)
{
	if (document.SaveForm.PCodice.value == "")	
      	{
	 it_alert_error('MSG-00012');
         document.SaveForm.PCodice.focus();
         OK = 0;
      	}
}
if (OK == 1)
{
	if (document.SaveForm.PCodiceOrdinamento.value == "")	
      	{
	 it_alert_error('MSG-00012');
         document.SaveForm.PCodiceOrdinamento.focus();
         OK = 0;
      	}
}

//Controllo la data di attivazione
		if (OK == 1)
		{
		 if ((document.SaveForm.PGiornoDataAttivazione.value == "") ||      
		     (document.SaveForm.PMeseDataAttivazione.value == "") || 
			 (document.SaveForm.PAnnoDataAttivazione.value == ""))
		     {
			 	it_alert_error('MSG-00038');
				document.SaveForm.PGiornoDataAttivazione.focus();
				OK = 0;
			}
		}	
		if (OK == 1)
		{
		 if (
		     (ControllaNumero(document.SaveForm.PGiornoDataAttivazione.value)==1) ||
		     (ControllaNumero(document.SaveForm.PMeseDataAttivazione.value)==1) ||
		     (ControllaNumero(document.SaveForm.PAnnoDataAttivazione.value)==1) ||
		     (document.SaveForm.PAnnoDataAttivazione.value.length!=4) ||	   
(checkdate1(document.SaveForm.PGiornoDataAttivazione.value,document.SaveForm.PMeseDataAttivazione.value,document.SaveForm.PAnnoDataAttivazione.value)==1)
			 )	
		      {
			 	it_alert_error('MSG-00022');
				document.SaveForm.PGiornoDataAttivazione.focus();
				OK = 0;
			}
		}
		//La data da partire da quando ricercare è corretta e quindi la ricompongo in formato DD/MM/YYYY
		if (OK == 1)
		{
		if (document.SaveForm.PGiornoDataAttivazione.value.length == 1)
                {
			if (document.SaveForm.PMeseDataAttivazione.value.length == 1)
			{ 

document.SaveForm.PGiornoDataAttivazione.value = "0" + document.SaveForm.PGiornoDataAttivazione.value;
document.SaveForm.PMeseDataAttivazione.value = "0" + document.SaveForm.PMeseDataAttivazione.value;
                        }
                        else
			{

document.SaveForm.PGiornoDataAttivazione.value = "0" + document.SaveForm.PGiornoDataAttivazione.value;
			}
		}
		else
		{
			if (document.SaveForm.PMeseDataAttivazione.value.length == 1)
			{ 

document.SaveForm.PMeseDataAttivazione.value = "0" + document.SaveForm.PMeseDataAttivazione.value;
                        }
                        
		}
		}
               

if (OK == 1)
{
document.SaveForm.submit();
}


		



}