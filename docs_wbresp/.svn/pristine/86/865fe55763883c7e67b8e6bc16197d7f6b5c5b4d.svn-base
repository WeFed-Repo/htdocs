// CAMPAGNA MESSAGGIO ACCETTAZIONE COOKIES
loadCookieCheck = function() {

	if (!wStore.read("fascioneCookie") && (!$("#cookieCheck").length)) {
	
		fascioneCookie = $("<div>").attr("id","cookieCheck").hide();
		
		fascioneCookieClose = $("<a>").addClass("btn-grlit").html("ok").bind('click',
			function(event){
			// Setta la variabile di cookie accettato
			wStore.write("fascioneCookie","true")
			// Chiude il fascione
			fascioneCookie.fadeOut();
		});
		fascioneCookieClose.hide()
		fascioneCont = $("<div>").addClass("container").append(
			$("<div>").addClass("row").append(
					$("<div>").addClass("col-xs-12 col-md-10").append($("<p>").html("Questo sito utilizza cookie di profilazione anche di terze parti per inviare materiale informativo in linea con le tue preferenze."),$("<p>").html("Per maggiori informazioni e per negare il consenso al loro utilizzo <a href=\"/webankpub/common/apriDocumento.do?isPDF=true&id=204\" target=\"_blank\" style=\"color:#8ab10b;text-decoration:none;font-weight:bold\">clicca qui</a>. Proseguendo la navigazione acconsenti all'uso dei cookie.</p>")),
					$("<div>").addClass("col-xs-12 col-md-2").append(fascioneCookieClose.delay(300).fadeIn())
			));
		
		$("body").append(fascioneCookie.append(fascioneCont).delay(300).fadeIn());
 	
	}
};
setCookieLogin = function() {
	$('#accessoClienti').bind('click', function() {
		if($('#formLoginNav').is(':visible'))
		{	
			wStore.write("loginOpened","true");
		}
		else {
			wStore.write("loginOpened","false");
		}
	})
	
	if (wStore.read("loginOpened")=='true') {
		$('#accessoClienti').trigger('click');
	}
}
// Load cookie
loadCookieCheck();
setCookieLogin();
