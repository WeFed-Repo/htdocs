	var oldUser1='';
	var oldPwd1='';
	
	/*** EVENTI - Gestisce gli eventi DOM ***/
	// Aggiunge un handler per un evento
	function addEvent(o, n, h) {
		if (o.attachEvent) {
			o.attachEvent("on" + n, h);
		} else {
			o.addEventListener(n, h, false);
		}
	}
	
	// Rimuove un handler per un evento
	function removeEvent(o, n, h) {
		if (o.attachEvent) {
			o.detachEvent("on" + n, h);
		} else {
			o.removeEventListener(n, h, false);
		}
	}
	/*** |FINE| EVENTI - Gestisce gli eventi DOM ***/

	/* validate form Login */
	function checkLoginForm(form)
	{	
		error = false;
		var errors = [];
		// presente nel form Login Privati
		/* assegna la classe css di errore  e fa comparire il tooltip*/
		if ($(form).attr('id')=="MyBankFormPrivati") {
		
		if (form.password.value==''){			
			form.password.focus();
			errors.push({ field: $('#password') , text: "E' necessario compilare il campo" });
			error = true;
		}
		if (form.username.value=='') {
			form.username.focus();
			errors.push({ field: $('#username') , text: "E' necessario compilare il campo" });
			error = true;
		}
		
		}
		// presente nel form Login Imprese
		if ($(form).attr('id')=="MyBankFormImprese") {	
		
		    if (form.password.value==''){			
			form.password.focus();
			errors.push({ field: $('#password') , text: "E' necessario compilare il campo" });
			error = true;
			}
			if (form.username.value=='') {
				form.username.focus();
				errors.push({ field: $('#username') , text: "E' necessario compilare il campo" });
				error = true;
			}
		}	
		
		if(errors.length>0) {setErrors(errors, form);}
		else{resetErrors(form)}
		if (error){
			return false;
		} else {
		    oldUser1=form.username.value;
			oldPwd1=form.password.value;		
			return true;
		}
		//return (!errors.length);
			
	}

	function resettaDblClick() {
		oldUser1='';
		oldPwd1='';
	}
	
	function cleanFields(el) {
		$(el).closest('form').find('input').val('');
	}

// Check dominio corretto antiphishing
/*$(function (){

var testurl = location.href.split("/")[2];
if (testurl != "libreriebpm" && testurl != "libreriebm" && testurl != "www.bpmbanking.it" && testurl != "bpmsvi7web.webank.local" && testurl != "bpmsvi7bweb.webank.local" && testurl != "bpmsvi8web.webank.local" && testurl != "bpmsvi8bweb.webank.local" && testurl != "bpmsvi8tweb.webank.local" && testurl != "bpmfixweb.webank.local" && testurl!="www.wetoolsweb.webank.local" && testurl!="wetoolsweb.webank.local")
{
	$(".boxLogin").empty().append(
		$("<img>").attr("src","https://www.bpmbanking.it/wscmn/img/fraudolenta.gif").css({"width":"100%","padding-top":"18px"})
	);
}
});*/







