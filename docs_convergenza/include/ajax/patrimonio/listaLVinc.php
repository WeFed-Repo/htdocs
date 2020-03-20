<?php
header('content-type: application/json; charset=utf-8');

$accounts = (isset($_POST['accounts']))
	? $_POST['accounts']
	: '';
$conti = ($accounts != null)
	? explode(',', $accounts)
	: null;
$conto = ($conti != null)
	? $conti[0]
	: '';

if (in_array($conto, array(
	'00599 0000074975 EUR',
	'00599 0000074976 EUR'
))) {
	echo <<<EOD
{
   "lineeVincolate": {
      "3":"2000.0",
      "6":"4000.0",
      "12":"1000.0",
      "18":"3000.0"
   }
}
EOD;
}


