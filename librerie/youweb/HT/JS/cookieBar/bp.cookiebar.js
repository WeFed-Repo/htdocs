$(document).ready(function(){
	$.cookieBar({
		message: 'Questo sito utilizza i cookie per migliorare l\'esperienza di navigazione '+
			'degli utenti e per raccogliere informazioni sull\'utilizzo del sito stesso.  '+
			'Vengono utilizzati solo cookie tecnici e non anche cookie di profilazione. Questo sito consente l\'invio di cookie di terze parti. '+
			'E\' possibile conoscere i dettagli consultando la nostra privacy policy <a href="http://www.bancopopolare.it/media/BP_Privacy_Policy.pdf" target="_blank">Qui</a>. '+
			'Proseguendo nella navigazione si accetta l\'uso dei cookie; in caso contrario &egrave; possibile abbandonare il sito.',
		acceptText: '&nbsp;',
		acceptOnContinue: true,
		fixed: true,
		bottom: true
	});
});
