<?php
    header('content-type: application/json; charset=utf-8');

    // set the default timezone to use. Available since PHP 5.1
    date_default_timezone_set('Europe/Rome');

    $date = date("d/m/Y");

    switch ($_GET['cc']) {
        case '00599 - 0000099102 - EUR':
?>{
    "errore":"",
    "esito":"ok",
    "warningSoglia":"",
    "frequenze":{
        "1g":"giornaliero",
        "7g":"settimanale",
        "1m":"mensile",
        "2m":"bimestrale",
        "3m":"trimestrale",
        "4m":"quadrimestrale",
        "6m":"semestrale",
        "12m":"annuale"
    },
    "listFrequenze": [
        [
            "1g",
            "1 giorno"
        ],
        [
            "7g",
            "7 giorni"
        ],
        [
            "1m",
            "1 mese"
        ],
        [
            "2m",
            "2 mesi"
        ],
        [
            "3m",
            "3 mesi"
        ],
        [
            "4m",
            "4 mesi"
        ],
        [
            "6m",
            "6 mesi"
        ],
        [
            "12m",
            "1 anno"
        ]
    ],
    "lista":[
        [
            "1013502",
            "100.00",
            "mensile",
            "04\/01\/2018",
            "04\/10\/2018",
            "10"
        ],
        [
            "1013503",
            "200.00",
            "giornaliero",
            "14\/07\/2017",
            "A revoca",
            "0"
        ]
    ],
    "primaDataDispTRic": "<?php echo $date; ?>"
}<?php
        break;
        default:
?>{
    "errore": "",
    "warningSoglia": "Al momento risulta attivato sul tuo conto corrente un trasferimento a soglia.<br\/>Se prosegui con l&#39;inserimento del trasferimento periodico, le impostazioni di soglia saranno cancellate.",
    "frequenze":{
        "1g": "giornaliero",
        "7g": "settimanale",
        "1m": "mensile",
        "2m": "bimestrale",
        "3m": "trimestrale",
        "4m": "quadrimestrale",
        "6m": "semestrale",
        "12m": "annuale"
    },
    "listFrequenze": [
        [
            "1g",
            "1 giorno"
        ],
        [
            "7g",
            "7 giorni"
        ],
        [
            "1m",
            "1 mese"
        ],
        [
            "2m",
            "2 mesi"
        ],
        [
            "3m",
            "3 mesi"
        ],
        [
            "4m",
            "4 mesi"
        ],
        [
            "6m",
            "6 mesi"
        ],
        [
            "12m",
            "1 anno"
        ]
    ],
    "lista": [],
    "primaDataDispTRic": "<?php echo $date; ?>"
}<?php
    }
?>