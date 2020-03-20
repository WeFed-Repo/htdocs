<?php
	header('content-type: application/json; charset=utf-8');
	date_default_timezone_set('Europe/Rome');
	$date = date("Y-m-d");
	
	if (isset($_POST['cd'])) {
?>
{
    "errore": "",
    "lista": [
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -10 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -12 days')) ?>", "RECUPERO IMPOSTA BOLLO SU E\/C", "", "-2.850", "\/link????"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -7 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -7 days')) ?>", "TRASFERIMENTO DA DEPOSITO", "", "5.000", "\/link????"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -7 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -7 days')) ?>", "TRASFERIMENTO DA DEPOSITO", "", "600.000", "\/link????"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -5 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -5 days')) ?>", "TRASFERIMENTO A DEPOSITO", "", "-10.000", "\/link????"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -3 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -5 days')) ?>", "TRASFERIMENTO A DEPOSITO", "", "-11.000", "\/link????"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -3 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -3 days')) ?>", "GIROCONTO PER OPERATIVITA' IN DERIV", "", "-1.000", "\/link????"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -3 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -3 days')) ?>", "TRASFERIMENTO A DEPOSITO", "", "-10.000", "\/link????"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -3 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -3 days')) ?>", "TRASFERIMENTO A DEPOSITO", "", "-4500.000", "\/link????"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -3 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -3 days')) ?>", "TRASFERIMENTO A DEPOSITO", "", "-120.000", "\/link????"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -2 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -2 days')) ?>", "BONIFICO", "", "4000.000", "\/link????"]
    ]
}
<?php
	}
	else {
?>
{
    "errore": "",
    "lista": [
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -8 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -8 days')) ?>", "GIROCONTO DA VINCOLO", "", "700.000", "\/link????", "*#*ND"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -8 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -8 days')) ?>", "PRELIEVO DA VINCOLO", "", "-700.000", "\/link????", "espandibile"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -6 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -8 days')) ?>", "TRASFERIMENTO A CONTO", "", "-600.000", "\/link????", "espandibile"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -6 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -6 days')) ?>", "VERSAMENTO SU VINCOLO", "", "4600.000", "\/link????", "*#*ND"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -4 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -4 days')) ?>", "GIROCONTO SU VINCOLO", "", "-4600.000", "\/link????", "espandibile"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -4 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -4 days')) ?>", "TRASFERIMENTO DA CONTO", "", "10.000", "\/link????", "*#*ND"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -4 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -4 days')) ?>", "TRASFERIMENTO DA CONTO", "", "11.000", "\/link????", "*#*ND"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -2 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -3 days')) ?>", "TRASFERIMENTO DA CONTO", "", "10.000", "\/link????", "espandibile"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -2 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -2 days')) ?>", "TRASFERIMENTO DA CONTO", "", "4500.000", "\/link????", "espandibile"],
        ["<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -2 days')) ?>", "<?php echo date("d\\\/m\\\/Y", strtotime($date . ' -2 days')) ?>", "TRASFERIMENTO DA CONTO", "", "120.000", "\/link????", "*#*ND"]
    ]
}
<?php
	}
?>