<?php
	header('Content-Type: application/json');
	$msg = $_POST["userinput"];
	$history = $_POST["history"];
	$historyFromRedirect = $_POST["historyFromRedirect"];

	$strutt = (strpos($_SERVER['HTTP_REFERER'],"strutt_webank.php") !== false) ? "webank" : "youweb";
?>
{
<?php
	
	if (strrpos($msg, "prova redirect") === false && empty($historyFromRedirect )){
		
	?>	"body": {
		<?php 
			

			// Chiamata "a vuoto" senza domande
			if ($history=="history") {

				?>
				
					"answer": null,
					"history": [
						{
							"question": "ciao",
							"answer": "Ciao! Che piacere vederti!"
						},
						{
							"question": "scusa non ho capito",
							"answer": "Mmm, mi sa che non mi sto spiegando bene, allora facciamo un altro tentativo: prova a riformulare la tua domanda in modo semplice."
						},
						{
							"question": "ok aspetta",
							"answer": "Quanto vuoi tu!"
						}
					]
				
				<?php

			}

			else
			{

				// Risposte "standard"
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
					"audiopath": "/include/ajax/audio/paolo_avatar_test.mp3",
					"text": "Ciao, sono Paolo, l'assistente virtuale. Questa &egrave; una prova.",
					"emotion": "happy"
					}
					
					<?php
					break;
				}
			?>
			
			<?php
		}
		?>
			}
		<?php
	}
	else
	{
		
		// Verifica se e' la richiesta o la destinazione del redirect
		if ($_POST["historyFromRedirect"] == "history") {
			?>
		"body": {
			"answer": {
				"emotion": null,
				"text": "Prova di atterraggio con history attiva!",
				"audiopath": "",
				"history": [
					{
						"question": "Ciao",
						"answer": "Ciao! Che piacere vederti!"
					},
					{
						"question": "scusa non ho capito",
						"answer": "Mmm, mi sa che non mi sto spiegando bene, allora facciamo un altro tentativo: prova a riformulare la tua domanda in modo semplice."
					},
					{
						"question": "ok aspetta",
						"answer": "Questa e' history from redirect"
					},
					{
						"question": "bonifico",
						"answer": "In questa pagina puoi disporre <b>bonifici</b> verso l'Italia e l'estero.<br>\r\nSe hai registrato dei beneficiari nella <b>Rubrica</b>, potrai selezionarli dal menù a tendina nel campo <b>Nome Beneficiario.</b>\r\n<br>\r\nCompila tutti i campi e inoltra l'ordine.\r\nTi ricordo, che un bonifico disposto con data futura, non genera l'impegno del saldo.\r\n<br><a onclick=\"vaAsking('- Quando arriva il bonifico')\" href='javascript:;'> \r\nVuoi sapere quando <u><br>arriva il bonifico ordinario?</u></a>\r\n<br>\r\nOppure, ti ricordo che puoi selezionare l'opzione\r\n<a onclick=\"vaAsking('- Bonifico veloce')\" href='javascript:;'> \r\n<br> <u><b>\"Bonifico veloce\"</b></u></a>"
					}
				]
			}
		}
		<?php
		}
		else 
		{
		?>
		"body": {
			"answer": {"text": "Ti ho appena portato sulla pagina di DESTINAZIONE"},
			"history": [
				{
					"question": "ciao",
					"answer": "Ciao! Che piacere vederti!"
				},
				{
					"question": "scusa non ho capito",
					"answer": "Mmm, mi sa che non mi sto spiegando bene, allora facciamo un altro tentativo: prova a riformulare la tua domanda in modo semplice."
				},
				{
					"question": "ok aspetta",
					"answer": "Quanto vuoi tu!"
				},
				{
					"question": "bonifico",
					"answer": "In questa pagina puoi disporre <b>bonifici</b> verso l'Italia e l'estero.<br>\r\nSe hai registrato dei beneficiari nella <b>Rubrica</b>, potrai selezionarli dal menù a tendina nel campo <b>Nome Beneficiario.</b>\r\n<br>\r\nCompila tutti i campi e inoltra l'ordine.\r\nTi ricordo, che un bonifico disposto con data futura, non genera l'impegno del saldo.\r\n<br><a onclick=\"vaAsking('- Quando arriva il bonifico')\" href='javascript:;'> \r\nVuoi sapere quando <u><br>arriva il bonifico ordinario?</u></a>\r\n<br>\r\nOppure, ti ricordo che puoi selezionare l'opzione\r\n<a onclick=\"vaAsking('- Bonifico veloce')\" href='javascript:;'> \r\n<br> <u><b>\"Bonifico veloce\"</b></u></a>"
				}
			]},
		"url": "/template/strutt_<?php print $strutt; ?>.php?tpl=link_va.php"	
		<?php
		}
	}
	?>
	
}
