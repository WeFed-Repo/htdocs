<?php
	header('content-type: application/json; charset=utf-8');
	
	// set the default timezone to use. Available since PHP 5.1
	date_default_timezone_set('Europe/Rome');
?>{
    "lista": [
        ["991", "<?php echo date("d\\\/m\\\/Y", strtotime('+3 months -1 days')) ?>", "2.5", "3", "3000.00", "3006.00", "", "<?php echo date("d\\\/m\\\/Y", strtotime('-1 days')) ?>", "WWWWWWWWWWWWWWWWWWWW", "0", "1"],
        ["992", "<?php echo date("d\\\/m\\\/Y", strtotime('+15 days')) ?>", "2.5", "3", "3300.00", "3377.30", "", "<?php echo date("d\\\/m\\\/Y", strtotime('-3 months +15 days')) ?>", "*#*ND", "0", "1"],
        ["993", "<?php echo date("d\\\/m\\\/Y", strtotime('+2 months +20 days')) ?>", "2.5", "3", "2000.00", "2481.80", "", "<?php echo date("d\\\/m\\\/Y", strtotime('-1 months +20 days')) ?>", "*#*ND", "0", "1"],
        ["994", "<?php echo date("d\\\/m\\\/Y", strtotime('+23 days')) ?>", "3.0", "6", "3000.00", "3481.80", "", "<?php echo date("d\\\/m\\\/Y", strtotime('-6 months +23 days')) ?>", "*#*ND", "0", "1"],
        ["995", "<?php echo date("d\\\/m\\\/Y", strtotime('+3 months +25 days')) ?>", "3.0", "6", "4000.00", "4481.80", "", "<?php echo date("d\\\/m\\\/Y", strtotime('-3 months +25 days')) ?>", "*#*ND", "0", "1"],
        ["996", "<?php echo date("d\\\/m\\\/Y", strtotime('+7 months +10 days')) ?>", "3.5", "12", "5000.00", "5481.80", "", "<?php echo date("d\\\/m\\\/Y", strtotime('-5 months +10 days')) ?>", "*#*ND", "0", "0"],
        ["997", "<?php echo date("d\\\/m\\\/Y", strtotime('+8 months +20 days')) ?>", "3.5", "12", "6000.00", "6481.80", "", "<?php echo date("d\\\/m\\\/Y", strtotime('-4 months +20 days')) ?>", "*#*ND", "0", "1"],
        ["998", "<?php echo date("d\\\/m\\\/Y", strtotime('+12 months')) ?>", "4.0", "12", "2000.00", "2188.00", "", "<?php echo date("d\\\/m\\\/Y") ?>", "Mediaworld", "1", "1"]
    ]
}