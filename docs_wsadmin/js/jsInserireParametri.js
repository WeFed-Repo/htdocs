//----------------------------------------------------------------------------
function InviaDati() {
var OK = 1;	
var aus;

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
	if (document.SaveForm.PDescrizione.value == "")	
      	{
	 it_alert_error('MSG-00012');
         document.SaveForm.PDescrizione.focus();
         OK = 0;
      	}
}
if (OK == 1)
{
	if (
		document.SaveForm.PValore1.value == "" && document.SaveForm.PValore2.value == "" &&
 		document.SaveForm.PValore3.value == "" 
           )	
      	{
	 it_alert_error('MSG-00012');
         document.SaveForm.PValore1.focus();
         OK = 0;
      	}
}
if (OK == 1)
{
	if (
		(document.SaveForm.PValore1.value != "" && document.SaveForm.PDescrizione1.value == "") ||
 		(document.SaveForm.PValore1.value == "" && document.SaveForm.PDescrizione1.value != "")
           )	
      	{
	 it_alert_error('MSG-00012');
         document.SaveForm.PValore1.focus();
         OK = 0;
      	}
}
if (OK == 1)
{
	if (
		(document.SaveForm.PValore2.value != "" && document.SaveForm.PDescrizione2.value == "") ||
 		(document.SaveForm.PValore2.value == "" && document.SaveForm.PDescrizione2.value != "")
           )	
      	{
	 it_alert_error('MSG-00012');
         document.SaveForm.PValore2.focus();
         OK = 0;
      	}
}
if (OK == 1)
{
	if (
		(document.SaveForm.PValore3.value != "" && document.SaveForm.PDescrizione3.value == "") ||
 		(document.SaveForm.PValore3.value == "" && document.SaveForm.PDescrizione3.value != "")
           )	
      	{
	 it_alert_error('MSG-00012');
         document.SaveForm.PValore3.focus();
         OK = 0;
      	}
}


               

if (OK == 1)
{
document.SaveForm.submit();
}


		



}