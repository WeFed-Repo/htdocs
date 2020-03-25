<?php header('content-type: application/json; charset=utf-8'); ?>
<?php $isOK = true;?>
<?php if (!$isOK) { ?>
{"messaggio":"Si &egrave; verificato un errore: lorem ipsum.","esito":"ko"}
<?php } ?>
<?php if ($isOK) { ?>
{
    "listaFondi": [
      {
        "description": "DWS Investments",
		"src": "img_or_S-dws.gif"
      },
      {
        "description": "JPMorgan Funds",
		"src": "img_or_S-JPMorganAM.gif"
      },
      {
        "description": "Franklin Templeton Investments",
		"src": "img_or_S-Franklin.gif"
       },
	   {
		"description": "M & G Investments",
		"src": "img_or_MG.gif"
	   },
	   {
		"description": "Morgan Stanley",
		"src": "img_or_S-morganstanley.gif"
	   },
	   {
		"description": "Pictet",
		"src": "img_or_S-pictet.gif"
	   },
	   {
		"description": "Pimco",
		"src": "img_or_S-pimco.gif"
	   },
	   {
		"description": "Schroeder",
		"src": "img_or_S-schroeder.gif"
	   },
	   {
		"description": "Julius Bar Funds",
		"src": "img_or_JB.gif"
	   },
	   {
		"description": "Threadneedle",
		"src": "img_or_S-threadneedle.gif"
	   },
	   {
		"description": "Allianz Global Investors",
		"src": "img_or_S-allianz.gif"
	   },
	   {
		"description": "Anima Asset Management",
		"src": "img_or_prima_new.gif"
	   },
	   {
		"description": "Anima",
		"src": "img_or_S-anima_new.gif"
	   },
	   
	   {
		"description": "BlackRock",
		"src": "img_or_S-Blackrock.gif"
	   },
	   {
		"description": "Fondi Carmignac",
		"src": "img_or_S-carmignac_fondi.gif"
	   },
	   {
		"description": "Sicav Carmignac",
		"src": "img_or_S-carmignac_port.gif"
	   },
	   {
		"description": "JPMorgan Investments Funds",
		"src": "img_or_S-JPMinv.gif"
	   },
	   {
		"description": "Epsilon",
		"src": "img_or_S-epsilon.gif"
	   },
	   {
		"description": "Etica SGR",
		"src": "img_or_S-etica.gif"
	   },
	   {
		"description": "Eurizon Capital",
		"src": "img_or_S-Eurizon.gif"
	   },
	   {
		"description": "Fidelity",
		"src": "img_or_S-fidelity.gif"
	   },
	   {
		"description": "Invesco",
		"src": "img_or_S-invesco.gif"
	   },
	   {
		"description": "Janus Capital Group",
		"src": "img_or_S-janus.gif"
	   },
	   {
		"description": "Legg Mason",
		"src": "img_or_S_legg_mason.gif"
	   },
	   {
		"description": "Lombard Odier",
		"src": "img_or_S_lombard_odier.gif"
	   },
	   {
		"description": "HSBC",
		"src": "img_or_S_hsbc.gif"
	   }
    ]
 }
 <?php } ?>