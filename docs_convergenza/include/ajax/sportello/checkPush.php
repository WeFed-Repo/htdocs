<?php
header('content-type: application/json; charset=utf-8');

$rand = mt_rand(0, 99);
$esito = $rand < 10
	? 'KO'
	: ($rand < 40
		? 'VP'
		: ($rand < 70
			? 'RI'
			: 'VM'));

//$esito = 'VM';

/*
 * esito:
 * - "VM": viene chiesto l'inserimento manuale del codice OTP
 * - "VP": l'operazione è stata autorizzata con successo
 * - "RI": continua col polling
 */

echo <<<EOD
{
    "esito": "{$esito}"
}
EOD;
