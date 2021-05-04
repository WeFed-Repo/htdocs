<?php

	date_default_timezone_set("UTC");
	$giorno =   date(time());
	$saldo = rand(-500,15000) + (rand(0,100)/100);
	$bloccogiorni = (rand(0,5)>3)? rand(1,30) : 180;

	// corrompe i dati qualora fosse selezionato l'ultimo rapporto
	if ($_POST["rappid"] == "1156456456566872") print ("'21930'219321");

	if ($_POST["rappid"] != "12345678") {
?>[
<?php
	
	for ($i = 1; $i <= (int)$bloccogiorni; $i++) {
	// Movimenti del giorno
	$entrate = (rand(0,10)>8) ? rand(0,rand(10,1500)) + rand(0,99)/100 : 0;
	$uscite = (rand(0,10)>8) ? rand(0,rand(-1500,-20))+ rand(0,99)/100 : 0;
	
   	?>
	{
		"data": "<?php print date("Y-m-d", $giorno); ?>",
		"saldo": <?php print $saldo; ?>,
		"entrate": <?php print $entrate; ?>,
		"moventrate": <?php print (($entrate == 0) ? 0 : (int)rand(1,3)) ; ?>,
		"uscite": <?php print $uscite; ?>,
		"movuscite": <?php print (($uscite == 0) ? 0 : (int)rand(1,4)) ; ?>
	}
	<?php 

	$saldo = $saldo - $entrate - $uscite;
	print($i<(int)$bloccogiorni) ? "," : ""; 
	
	$giorno = strtotime ( '-1 day' , $giorno);

	}
?>
]
<?php }
else
{
?>
[
{
"data": "2018-09-20",
"saldo": -816.16 ,
"entrate": 2807.84,
"moventrate": 2,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-19",
"saldo": -3624.00 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-18",
"saldo": -3624.00 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-17",
"saldo": -3624.00 ,
"entrate": 376.00,
"moventrate": 1,
"uscite": -4000.00,
"movuscite": 1
}
 
,
{
"data": "2018-09-16",
"saldo": 0.00 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-15",
"saldo": 0.00 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-14",
"saldo": 0.00 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-13",
"saldo": 0.00 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-12",
"saldo": 0.00 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-11",
"saldo": 0.00 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-10",
"saldo": 0.00 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-09",
"saldo": 0.00 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-08",
"saldo": 0.00 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-07",
"saldo": 0.00 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-06",
"saldo": 0.00 ,
"entrate": 2362.85,
"moventrate": 1,
"uscite": -1000.00,
"movuscite": 1
}
 
,
{
"data": "2018-09-05",
"saldo": -1362.85 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-04",
"saldo": -1362.85 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-03",
"saldo": -1362.85 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-02",
"saldo": -1362.85 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-09-01",
"saldo": -1362.85 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-31",
"saldo": -1362.85 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-30",
"saldo": -1362.85 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-29",
"saldo": -1362.85 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-28",
"saldo": -1362.85 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-27",
"saldo": -1362.85 ,
"entrate": 282.89,
"moventrate": 2,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-26",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-25",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-24",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-23",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-22",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-21",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-20",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-19",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-18",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-17",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-16",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-15",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-14",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-13",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-12",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-11",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-10",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-09",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-08",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-07",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-06",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-05",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-04",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-03",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-02",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-08-01",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-31",
"saldo": -1645.74 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-30",
"saldo": -1645.74 ,
"entrate": 248.80,
"moventrate": 1,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-29",
"saldo": -1894.54 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-28",
"saldo": -1894.54 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-27",
"saldo": -1894.54 ,
"entrate": 326.25,
"moventrate": 2,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-26",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-25",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-24",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-23",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-22",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-21",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-20",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-19",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-18",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-17",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-16",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-15",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-14",
"saldo": -2220.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-13",
"saldo": -2220.79 ,
"entrate": 500.00,
"moventrate": 1,
"uscite": -1000.00,
"movuscite": 1
}
 
,
{
"data": "2018-07-12",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-11",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-10",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-09",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-08",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-07",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-06",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-05",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-04",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-03",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-02",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-07-01",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-30",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-29",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-28",
"saldo": -1720.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-27",
"saldo": -1720.79 ,
"entrate": 90.00,
"moventrate": 1,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-26",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-25",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-24",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-23",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-22",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-21",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-20",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-19",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-18",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-17",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-16",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-15",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-14",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-13",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-12",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-11",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-10",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-09",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-08",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-07",
"saldo": -1810.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-06",
"saldo": -1810.79 ,
"entrate": 500.00,
"moventrate": 1,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-05",
"saldo": -2310.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-04",
"saldo": -2310.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-03",
"saldo": -2310.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-02",
"saldo": -2310.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-06-01",
"saldo": -2310.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-31",
"saldo": -2310.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-30",
"saldo": -2310.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-29",
"saldo": -2310.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-28",
"saldo": -2310.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-27",
"saldo": -2310.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-26",
"saldo": -2310.79 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-25",
"saldo": -2310.79 ,
"entrate": 202.99,
"moventrate": 1,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-24",
"saldo": -2513.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-23",
"saldo": -2513.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-22",
"saldo": -2513.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-21",
"saldo": -2513.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": -1000.00,
"movuscite": 1
}
 
,
{
"data": "2018-05-20",
"saldo": -1513.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-19",
"saldo": -1513.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-18",
"saldo": -1513.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-17",
"saldo": -1513.78 ,
"entrate": 200.00,
"moventrate": 1,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-16",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-15",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-14",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-13",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-12",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-11",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-10",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-09",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-08",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-07",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-06",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-05",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-04",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-03",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-02",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-05-01",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-30",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-29",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-28",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-27",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-26",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-25",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-24",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-23",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-22",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-21",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-20",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-19",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-18",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-17",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-16",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-15",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-14",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-13",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-12",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-11",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-10",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-09",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-08",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-07",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-06",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-05",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-04",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-03",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-02",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-04-01",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-03-31",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-03-30",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-03-29",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-03-28",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-03-27",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-03-26",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
 
,
{
"data": "2018-03-25",
"saldo": -1713.78 ,
"entrate": 0,
"moventrate": 0,
"uscite": 0,
"movuscite": 0
}
]


<?php

}
?>