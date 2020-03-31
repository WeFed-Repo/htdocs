//----------------------------------------------------------------------------
function InviaDati() {
var OK = 1;	
var aus;


if (OK == 1)
{
	if (document.SaveForm.PValore.value == "" )	
      	{
	 it_alert_error('MSG-00012');
         document.SaveForm.PValore.focus();
         OK = 0;
      	}
}

if (OK == 1)
{
	if (document.SaveForm.PDescrizione.value == "" )	
      	{
	 it_alert_error('MSG-00012');
         document.SaveForm.PDescrizione.focus();
         OK = 0;
      	}
}

               

if (OK == 1)
{
document.SaveForm.submit();
}


		



}