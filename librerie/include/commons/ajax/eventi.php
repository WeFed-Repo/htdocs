<?php header('content-type: application/json; charset=utf-8'); ?>
<?php $isOK = true;?>
<?php if (!$isOK) { ?>
{"messaggio":"Si &egrave; verificato un errore: lorem ipsum.","esito":"ko"}
<?php } ?>
<?php if ($isOK) { ?>
{
    "listaEventi": [
        {
            "nome": "Roma citta' aperta",
            "relatore": "Pippo Franco"
        },
		{
            "nome": "pavia in fiore",
            "relatore": "luca Ciccio"
        },
		{
            "nome": "londra on the road",
            "relatore": "Pluto paperino"
        },
		{
            "nome": "evento4",
            "relatore": "Pippo Franco"
        },
		{
            "nome": "evento5",
            "relatore": "Pippo Francesco"
        },
		{
            "nome": "evento6",
            "relatore": "Pippo Giorgio"
        },
		{
            "nome": "evento7",
            "relatore": "Pippo Franco"
        }
      ],
    "esito": "ok"
}
<?php } ?>