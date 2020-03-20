<?php
header('content-type: application/json; charset=utf-8');

$isWebank = ($_GET['webank'] == "true");
echo <<<EOD
{
    "errore": "",
    "fase": "1",
    "conti": [{
        "cc": "*#*ND",
        "cd": "*#*ND",
        "carta": "*#*ND",
        "isPreferred": "false",
		"hasFresh":"false",
		"hasNonSvinc":"false",
        "cder": "*#*ND",
        "valuta": "EUR",
        "nickName": "",
        "ct": "01069 - 0000027152 - EUR"
    }, {
        "cc": "*#*ND",
        "cd": "*#*ND",
        "carta": "*#*ND",
        "isPreferred": "false",
		"hasFresh":"false",
		"hasNonSvinc":"false",
        "cder": "01068 - 0000005824 - EUR",
        "valuta": "EUR",
        "nickName": "",
        "ct": "01069 - 0000026986 - EUR"
    }, {
        "cc": "00599 - 0000089342 - EUR",
        "cd": "*#*ND",
        "carta": "*#*ND",
        "isPreferred": "false",
		"hasFresh":"false",
		"hasNonSvinc":"false",
        "cder": "*#*ND",
        "valuta": "EUR",
        "nickName": "",
        "ct": "*#*ND"
    }, {
        "cc": "00599 - 0000074978 - EUR",
        "cd": "*#*ND",
        "carta": "*#*ND",
        "isPreferred": "false",
		"hasFresh":"false",
		"hasNonSvinc":"false",
        "cder": "01068 - 0000004877 - EUR",
        "valuta": "EUR",
        "nickName": "",
        "ct": "*#*ND"
    }, {
        "cc": "00599 - 0000099102 - EUR",
        "cd": "00596 - 0000099102 - EUR",
        "carta": "*#*ND",
        "isPreferred": "false",
		"hasFresh":"true",
		"hasNonSvinc":"true",
        "cder": "*#*ND",
        "valuta": "EUR",
        "nickName": "",
        "ct": "*#*ND"
    }, {
        "cc": "00599 - 0000099112 - EUR",
        "cd": "00596 - 0000099112 - EUR",
        "carta": "*#*ND",
        "isPreferred": "false",
		"hasFresh":"true",
		"hasNonSvinc":"true",
        "cder": "*#*ND",
        "valuta": "EUR",
        "nickName": "",
        "ct": "*#*ND"
    }, {
        "cc": "00599 - 0000099103 - EUR",
        "cd": "00596 - 0000099103 - EUR",
        "carta": "*#*ND",
        "isPreferred": "false",
		"hasFresh":"false",
		"hasNonSvinc":"true",
        "cder": "*#*ND",
        "valuta": "EUR",
        "nickName": "",
        "ct": "*#*ND"
    }, {
        "cc": "00599 - 0000099113 - EUR",
        "cd": "00596 - 0000099113 - EUR",
        "carta": "*#*ND",
        "isPreferred": "false",
		"hasFresh":"false",
		"hasNonSvinc":"true",
        "cder": "*#*ND",
        "valuta": "EUR",
        "nickName": "",
        "ct": "*#*ND"
    }, {
        "cc": "00599 - 0000099123 - EUR",
        "cd": "00596 - 0000099123 - EUR",
        "carta": "*#*ND",
        "isPreferred": "false",
		"hasFresh":"false",
		"hasNonSvinc":"false",
        "cder": "*#*ND",
        "valuta": "EUR",
        "nickName": "",
        "ct": "*#*ND"
    }, {
        "cc": "00599 - 0000099133 - EUR",
        "cd": "00596 - 0000099133 - EUR",
        "carta": "*#*ND",
        "isPreferred": "false",
		"hasFresh":"false",
		"hasNonSvinc":"false",
        "cder": "*#*ND",
        "valuta": "EUR",
        "nickName": "",
        "ct": "*#*ND"
    }, {
        "cc": "00599 - 0000081080 - EUR",
        "cd": "00596 - 0000081080 - EUR",
        "carta": "*#*ND",
        "isPreferred": "false",
		"hasFresh":"true",
		"hasNonSvinc":"false",
        "cder": "01068 - 0000006730 - EUR",
        "valuta": "EUR",
        "nickName": "",
        "ct": "*#*ND"
    }]
}
EOD;
