<?php
header('content-type: application/xml; charset=utf-8');
echo <<<EOD
<?xml version="1.0" encoding="UTF-8"?>
<richiestaOTP xmlns="http://xmlbeans.weservice.it/pda">
    <info>
        <esito val="ok" />
    </info>
</richiestaOTP>
EOD;
