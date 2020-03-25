<?php
// Funzione di randomizzazione
function scramble($wordarray, $maxwords = null) {
	
	shuffle($wordarray);
	if ($maxwords === null) 
		{
			$maxwords = rand(1,$totalwords);
		}
		else
		{
			$maxwords = rand(1,$maxwords);
		}
	return implode(" ",array_slice($wordarray, 0, $maxwords));
}


// Caso errore
$dep = $_POST["deposito"];

// ESEMPIO "ERRORE"
if($dep == "2") { ?>
'123
<?php }

/* ESEMPIO SENZA PAC */
if ($dep == "3") { ?>
[]
<?php }

/* ESEMPIO COMPLETO */
if ($dep == "1") { 
?>
[
	<?php
	for ($x==1;$x<=30;$x++) { 

		$rate = intval (scramble(array("12","24","36","48","60")));
		$ratepagate = rand(0,$rate);

		?>
		{
			"nome":"<a href=\"####?fondosicav=S&amp;divisa=EUR&amp;fondo=true'\"><?php print (scramble(array("Templeton","Anima","Global","Income","Taxes","Lorem","Roosevelt","Jefferson","Copperfield","A&F","International","Worldwide"),5)." ".scramble(array("EUR","USD"),1)); ?></a>",
			"stato":"<?php print scramble(array("ESTINTO","IN CORSO"),1); ?>",
			"rata":"<?php print rand(50,300); ?>",
			"ratetotali":"<?php print($rate); ?><br><?php print($rate/12); ?> anni",
			"versamenti":<?php print($ratepagate); ?>,
			"rateresidue":<?php print($rate - $ratepagate); ?>,
			"prossimoivers":<?php print rand(10000,999999)/100; ?>,
			"nquote":<?php print (rand(1000,1000000)/1000); ?>,
			"ncontratto":"0000000000<?php print rand(1000000,9999999); ?>",
			"versa":"<?php print(scramble(array('<a href=\"#\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-arrow_emphasis_filled\"></i></a>',''),1)); ?>"
	 	}
	<?php
	if ($x<30) print(",");
	}
	?>
]
<?php }

?>