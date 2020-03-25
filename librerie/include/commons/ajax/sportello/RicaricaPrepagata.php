<?php
header('content-type: application/xml; charset=utf-8');
sleep(2);
echo <<<END
<?xml version="1.0" encoding="UTF-8"?>
<ricaricaPrepagata xmlns="http://xmlbeans.weservice.it/pda">
    <info>
        <esito val="ok" />
    </info>
    <stateUpdate>
        <nextAuthCode>
            <cod1 val="1" />
            <cod2 val="2" />
            <numCode val="13" />
        </nextAuthCode>
        <datiCC numero="00599 - 0000004215 - EUR" intestatario="BARBARA BIANCHI" iban="IT26L0340201749000000004215" label="00599 0000004215 EUR">
            <saldo margineUtilizzabile="2.487.905,80" saldoContabile="2.493.494,74" fidoConto="0,00" totaleImpegni="-5.586,24" totalePreavvisi="0,00" saldoGestioniSGR="0,00" saldoOdierneTitoli="0,00" />
        </datiCC>
    </stateUpdate>
</ricaricaPrepagata>
END;
