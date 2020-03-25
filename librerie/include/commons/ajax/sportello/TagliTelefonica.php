<?php
header('content-type: application/xml; charset=utf-8');
echo <<<EOD
<?xml version="1.0" encoding="UTF-8"?>
<tagliTelefonica xmlns="http://xmlbeans.weservice.it/pda">
    <info>
        <esito val="ok" />
    </info>
    <voci>
        <taglio valore="2,00" commissione="0,00" />
        <taglio valore="8,00" commissione="0,00" />
        <taglio valore="20,00" commissione="0,00" />
        <taglio valore="100,00" commissione="0,00" />
    </voci>
</tagliTelefonica>
EOD;
