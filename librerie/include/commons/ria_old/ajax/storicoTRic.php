<?php
    header('content-type: application/json; charset=utf-8');
    
    // set the default timezone to use. Available since PHP 5.1
    date_default_timezone_set('Europe/Rome');

    $date = date("Y-m-d");
?>{
    "errore": "",
    "storico": {
        "<?php echo date("my", strtotime($date . ' -12 months')) ?>": {
            "base": "0"
        },
        "<?php echo date("my", strtotime($date . ' -11 months')) ?>": {
            "base": "0"
        },
        "<?php echo date("my", strtotime($date . ' -10 months')) ?>": {
            "base": "0"
        },
        "<?php echo date("my", strtotime($date . ' -9 months')) ?>": {
            "base": "0"
        },
        "<?php echo date("my", strtotime($date . ' -8 months')) ?>": {
            "base": "0"
        },
        "<?php echo date("my", strtotime($date . ' -7 months')) ?>": {
            "base": "0"
        },
        "<?php echo date("my", strtotime($date . ' -6 months')) ?>": {
            "base": "0"
        },
        "<?php echo date("my", strtotime($date . ' -5 months')) ?>": {
            "base": "0"
        },
        "<?php echo date("my", strtotime($date . ' -4 months')) ?>": {
            "base": "0"
        },
        "<?php echo date("my", strtotime($date . ' -3 months')) ?>": {
            "base": "0"
        },
        "<?php echo date("my", strtotime($date . ' -2 months')) ?>": {
            "base": "0"
        },
        "<?php echo date("my", strtotime($date . ' -1 months')) ?>": {
            "base": "0"
        }
    }
}