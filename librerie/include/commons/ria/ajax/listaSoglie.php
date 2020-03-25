<?php
    header('content-type: application/json; charset=utf-8');
    
    // set the default timezone to use. Available since PHP 5.1
    date_default_timezone_set('Europe/Rome');

    $date = date("Y-m-d");
?>{
    "errore": "",
    "warningTrasferimenti": "",
    "soglie": {
        "min": "500.0",
        "sms": false,
        "email": false,
        "max": "*#*ND"
    },
    "smsAttivo": "false",
    "contoCorrente": {
        "<?php echo date("my", strtotime($date . ' -12 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -11 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -10 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -9 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -8 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -7 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -6 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -5 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -4 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -3 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -2 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -1 months')) ?>": "0.0"
    },
    "contoDeposito": {
        "<?php echo date("my", strtotime($date . ' -12 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -11 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -10 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -9 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -8 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -7 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -6 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -5 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -4 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -3 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -2 months')) ?>": "0.0",
        "<?php echo date("my", strtotime($date . ' -1 months')) ?>": "0.0"
    }
}
