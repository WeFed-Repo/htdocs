<?php
/* Funzioni e variabili comuni */

$site = $_GET["site"];
if ($site != "webank" && $site != "youweb"  && $site != "aletti") {
	$site = "webank";
}
$html = $_GET["html"];
if ($html != "vr" && $html != "mi") {
	$html = "mi";
}

/* Elementi randomizzati */
/* Ritorna una frase randomizzata della lunghezza specificata */
/* length = lunghezza massima della stringa: fissa se non viene specificato minlength */
/* minlength = lunghezza minima della stringa */

function randomWord () {
	$randomwords = explode(" ", strtolower("lorem ipsum dolor sit amet consectetur adipisicing elit necessitatibus officia eos facilis numquam distinctio repellat quam ad ipsa velit perspiciatis assumenda esse id ipsam voluptas atque aliquam illo nostrum at rerum itaque fuga iure et omnis voluptate Earum asperiores iste autem ducimus quibusdam at culpa illo aperiam officia rem vel molestiae perspiciatis possimus aut assumenda impedit dolorum alias nulla Quae fuga accusantium enim maiores cupiditate eos iusto totam vero odio aliquam odit alias laudantium delectus cumque sint facilis beatae eveniet impedit porro culpa cupiditate quasi quo deleniti nesciunt mollitia reprehenderit nostrum odit eum sint ut at libero veritatis illum culpa"));
	return $randomwords[rand(0, sizeof($randomwords))];
}

function randomText ($length, $minlength = null) {
	$randomphrase = "";
	if ($minlength) {
		// Restituisce una lunghezza randomica partendo dal minimo
		$length = rand($minlength, $length);
	}
	for ($x = 0; $x < $length; $x++) {
		$randomphrase = $randomphrase . " " . randomWord();
	}
	$randomphrase = ucfirst(ltrim($randomphrase));
	return $randomphrase;
}

/* Restituisce un testo HTLM random del numero di termini indicato*/
function randomPar ($length) {
	$totwords = $length;
	$randompar = "";
	while ($totwords > 0) {
		$blocksize = rand(10, 30);

		if ($totwords > $blocksize) {
			$normalwords = rand($blocksize / 5, $blocksize);
			$specialwords = $blocksize - $normalwords;
			$taggedtext = (rand(1, 4) == 2)
				? "<a href=\"#\">||TEXT||</a>"
				: "<strong>||TEXT||</strong>";

			$randompar = $randompar . " " . randomText($normalwords);
			$randompar = $randompar . " " . str_replace("||TEXT||", randomText($specialwords), $taggedtext);
		} else {
			$randompar = $randompar . " " . randomText($totwords);
		}

		$totwords = $totwords - $blocksize;
	}
	return ("<p>" . ucfirst(ltrim(strtolower($randompar))) . ".</p>");
}

?>

