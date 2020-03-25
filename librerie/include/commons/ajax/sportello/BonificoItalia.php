<?php
header('content-type: application/xml; charset=utf-8');
sleep(2);
$isOK = true;
echo <<<END
<?xml version="1.0" encoding="UTF-8"?>
END;
if (!$isOK) {
    echo <<<END
<info>
    <esito val="redirLogin" />
    <messaggio val="Hai inserito per la terza volta un codice non corretto. Per motivi di sicurezza LA TUA UTENZA E' ORA BLOCCATA." />
</info>
END;
} else {
    echo <<<END
<bonifico xmlns="http://xmlbeans.weservice.it/pda">
    <info>
        <esito val="ok" />
    </info>
    <stateUpdate>
        <nextAuthCode>
            <cod1 val="2" />
            <cod2 val="4" />
            <numCode val="16" />
        </nextAuthCode>
        <datiCC numero="00000 - 0000003540 - EUR" intestatario="MARCO POMPEO PRADA" iban="IT35Q0558401600000000003540" label="00000 0000003540 EUR" vincolabile="true" numVincolo="1" ccDipendenti="false">
            <saldo margineUtilizzabile="5.379,98" saldoContabile="5.379,98" fidoConto="0,00" totaleImpegni="0,00" totalePreavvisi="0,00" saldoGestioniSGR="0,00" saldoOdierneTitoli="0,00" capitaleRisparmiato="145,00" sogliaMassima="999.999.999.999.999,00" sogliaMinima="250,00" saldoVincolabile="4.984,98" />
        </datiCC>
    </stateUpdate>
    <bic val="BPMIITM1120" />
    <nomeBanca val="BANCA POPOLARE DI MILANO S.C.A.R.L." />
</bonifico>
END;
}