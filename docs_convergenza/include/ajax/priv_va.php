{
		  "body": {
<?php 
	$msg = $_POST["userinput"];

	switch ($msg) {

	case "prova extended":
    	?>
		"answer": {
	      "audiopath": "",
	      "text": "Oltre a darti una risposta scritta, e accompagnarti alla pagina che stai cercando, da adesso posso rispondere con la mia voce!<br>Se vuoi, puoi controllarne il volume, disattivare l\u2019audio o nascondere il testo, con i comandi che vedi qui sotto la mia figura.<br>La mia voce Ãš frutto di una tecnologia che legge in tempo reale il testo scritto, e riproduce le parole.<br>Non solo, di giorno in giorno miglioro la mia pronuncia, e rendo l\u2019ascolto piÃ¹ piacevole e realistico.",
	      "emotion": "",
	      "extCont": [
	        {
	          "type": "Faq",
	          "title": "Look"
	        },
	        {
	          "type": "Info_alt",
	          "title": "Domande correlate",
	          "content": "<ul class='faq'><li><a onclick='vaAsking(\"- \" + $(this).html())' href='javascript:;'>Le mie coordinate</a></li><li><a onclick='vaAsking($(this).html())' href='javascript:;'>Attivare il bancomat</a></li><li><a onclick='vaAsking($(this).html())' href='javascript:;'>Consultare e disporre</a></li><li><a onclick='vaAsking($(this).html())' href='javascript:;'>Lorem ipsum dolor sit amet</a></li><li><a onclick='vaAsking($(this).html())' href='javascript:;'>Dolor amet sit</a></li><li><a onclick='vaAsking($(this).html())' href='javascript:;'>Prova</a></li></ul><ul class='listafrec'><li><a href='http://www.google.it' target='_blank' onclick='opentool(2)'>Guarda il TUTORIAL sulla linea di deposito</a></li></ul>"
	        },
	        {
	          "type": "Info",
	          "title": "Esempio html",
	          "content": "<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. </p><a href=\"####LINK####\" class=\"extBan\"><img src=\"/wscmn/img/virtass_extban.png\"/></a>"
	        },
	        {
	          "type": "Faq",
	          "title": "Nuove funzionalita"
	        }
	      ]
	    }
		 
    	<?php
        break;


	case "prova msgpromo":
    	?>

		"answer": {
	      "text": "Prova il messaggio promozionale nell'extended view",
	      "emotion": "happy",
	      "extCont": [
	        {
	          "type": "Info",
	          "title": "Prova declinazione messaggi promozionali con icona.",
	          "content": "<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Amet consectetur adipiscing elit.</p><div class='inevidenza'><i class='icon icon-comunicazione_assist'></i><p>Paragrafo informativo in <strong>evidenza</strong> con <a href='####LINK####'>link</a></p></div><div class='inevidenza red'><i class='icon icon-chat_assist'></i><p>Paragrafo in evidenza di colore rosso</p></div>"
	        }
	      ]
	    }
		 
    	<?php
        break;	


    case "prova survey":
    	?>

		"answer": {
	      "text": "Prova la survey nell'extended view",
	      "emotion": "happy",
	      "extCont": [
	        {
	          "type": "Info",
	          "title": "EXTSURVEY",
	          "content": ""
	        }
	      ]
	    }
		 
    	<?php
        break;	
   
    case "prova banner":
       ?>

		"answer": {
	      "text": "Prova il banner promo nell'extended view",
	      "emotion": "happy",
	      "extCont": [
	        {
	          "type": "Info",
	          "title": "Esempio html",
	          "content": "<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. </p><a href=\"####LINK####\" class=\"extBan\"><img src=\"/wscmn/img/virtass_extban.png\"/></a>"
	        }
	      ]
	    }
		 
    	<?php
        break;

    case "prova chat":
    	?>

		"answer": {
	      "audiopath": "https:\/\/webankint.webank.local\/webankpri\/wbOnetoone\/wbblack\/commons\/virtassVoice.jsp?file=20120720-113133-624_121_linear.mp3\n",
	      "text": "Qui sotto dovrebbe comparire il pulsante chat se e solo se il servizio è attivo. {} Il pulsante dovrebbe essere qui sopra.",
	      "emotion": ""
	    }
		 
    	<?php
        break;

    default:
    	?>

		"answer": {
	      "audiopath": "/WB/fe/audio/paolo_avatar_test.mp3",
	      "text": "Ciao, sono Paolo, l'assistente virtuale. Questa &egrave; una prova.",
	      "emotion": "happy"
	    }
		 
    	<?php
        break;
	}
?>
 	 }
}