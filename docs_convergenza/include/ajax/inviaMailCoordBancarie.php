<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 9) < 9;

if (!$isOK) {
	echo <<<EOD
{
	"OK": false,
	"warningMessage": "Email non inviata a causa di problemi tecnici."
}
EOD;
} else {
	echo <<<EOD
{
	"OK": true
}
EOD;
}