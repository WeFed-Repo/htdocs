
//-----------------------------------------------------------------

var imgdir = "/IntesaTrade/Immagini/";

if (document.images) { // preload
	a0 = new Image(); a0.src = imgdir + "logon-int00.gif";
	a1 = new Image(); a1.src = imgdir + "logon-int01.gif";
}

function mOver(p) {
	//alert(p);
	if (document.images)
		document.images[p].src = eval(p+"1.src");
}

function mOut(p) {
	if (document.images)
		document.images[p].src = eval(p+"0.src");
}

//-------------------------------------
function InviaDati() { //v2.0
 
var OK = 1;
if (document.saveForm.strUtente.value != "")
{
        if (OK == 1)
	{
 		if (controllaPWD(document.saveForm.strUtente.value) == 1)
     		{
	 		it_alert_error('MSG-00153');
			document.saveForm.strUtente.focus();
			OK = 0;
		}
	}
	/*
 	if (OK == 1)
	{
 		if ((document.saveForm.strPassword.value.length < 7) || (document.saveForm.strPassword.value.length > 10))
     		{
	 		it_alert_error('MSG-00153');
			document.saveForm.strPassword.focus();
			OK = 0;
		}
	}
	*/
	if (OK == 1)
	{
 		if (controllaPWD(document.saveForm.strPassword.value) == 1)
     		{
	 		it_alert_error('MSG-00153');
			document.saveForm.strPassword.focus();
			OK = 0;
		}
	}
	
       

} 
if (OK == 1)
{
  document.saveForm.strUtente.value = document.saveForm.strUtente.value.toUpperCase(); 	
  document.saveForm.submit();
	
}  		
}

