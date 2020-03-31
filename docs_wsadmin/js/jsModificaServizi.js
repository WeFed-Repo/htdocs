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

//Controllo la data di Cessazione
if (OK == 1)
 {
    if (
      (document.SaveForm.PGiornoDataCessazione.value != "") ||      
      (document.SaveForm.PMeseDataCessazione.value != "") || 
      (document.SaveForm.PAnnoDataCessazione.value != "")
     )
     {
			 	
		if (OK == 1)
		{
		
			
			
		 if (
		     (ControllaNumero(document.SaveForm.PGiornoDataCessazione.value)==1) ||
		     (ControllaNumero(document.SaveForm.PMeseDataCessazione.value)==1) ||
		     (ControllaNumero(document.SaveForm.PAnnoDataCessazione.value)==1) ||
		     (document.SaveForm.PAnnoDataCessazione.value.length!=4) ||	   
(checkdate1(document.SaveForm.PGiornoDataCessazione.value,document.SaveForm.PMeseDataCessazione.value,document.SaveForm.PAnnoDataCessazione.value)==1)
			 )	
		      {
			 	it_alert_error('MSG-00022');
				document.SaveForm.PGiornoDataCessazione.focus();
				OK = 0;
			}
		}
		//La data da partire da quando ricercare è corretta e quindi la ricompongo in formato DD/MM/YYYY
		if (OK == 1)
		{
		if (document.SaveForm.PGiornoDataCessazione.value.length == 1)
                {
			if (document.SaveForm.PMeseDataCessazione.value.length == 1)
			{ 

document.SaveForm.PGiornoDataCessazione.value = "0" + document.SaveForm.PGiornoDataCessazione.value;
document.SaveForm.PMeseDataCessazione.value = "0" + document.SaveForm.PMeseDataCessazione.value;
                        }
                        else
			{

document.SaveForm.PGiornoDataCessazione.value = "0" + document.SaveForm.PGiornoDataCessazione.value;
			}
		}
		else
		{
			if (document.SaveForm.PMeseDataCessazione.value.length == 1)
			{ 

document.SaveForm.PMeseDataCessazione.value = "0" + document.SaveForm.PMeseDataCessazione.value;
                        }
                        
		}
		}
   }            
}
               

if (OK == 1)
{
document.SaveForm.submit();
}


		



}