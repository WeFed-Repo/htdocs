<?php
	header('Content-Type: application/json');
?>{
		  "body": {
<?php 
	$msg = $_POST["userinput"];
	$history = $_POST["history"];

	//if ($history=="history" ) $msg="prova";


	if (strrpos($msg, "prova redirect") === false){

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

    
    default:
    	?>

		"answer": {
	      "audiopath": "/wscmn/fe/audio/paolo_avatar_test.mp3",
	      "text": "Ciao, sono Paolo, l'assistente virtuale. Questa &egrave; una prova.",
	      "emotion": "happy"
	    }
		 
    	<?php
        break;
	}

	?>
 	 }
}

	<?php


}
else
{
	
	// Verifica la pagina verso la quale operare la redirezione

	?>
	"answer": {
	      "text": "Ti ho appena portato sulla pagina <strong><?php print str_replace("prova redirect ","",$msg);?></strong>"
	    }
	},
	 "url": "/template/strutt_webank.php?tpl=<?php print str_replace("prova redirect ","",$msg);?>&wdg=02"	
}
	<?php
}
?>
