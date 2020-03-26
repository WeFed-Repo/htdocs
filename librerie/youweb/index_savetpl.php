<?php

	$tplfile = $_POST["tplfile"];
	$tpltext = $_POST["tpltext"];

	$tpltext = str_replace("Fabrizio", "Nome", $tpltext);
	$tpltext = str_replace("FABRIZIO", "NOME", $tpltext);
	$tpltext = str_replace("Domanin", "Cognome", $tpltext);
	$tpltext = str_replace("DOMANIN", "COGNOME", $tpltext);
	$tpltext = str_replace("2070 ", "0000", $tpltext);
	$tpltext = str_replace("MONZA", "MILANO", $tpltext);
	$tpltext = str_replace("Monza", "Milano", $tpltext);
	$tpltext = str_replace("00001788", "00000000", $tpltext);
	$tpltext = str_replace("00001794", "00000000", $tpltext);


	$filename = "/etc/httpd/librerie/htdocs/librerie/youweb/template/tpl_priv_".$tplfile.".php";

	$myfile = fopen($filename, "wb") or die("");
	fwrite($myfile, $tpltext);
	fclose($myfile);
	chmod($filename, 0777) ;
	
?>
{
	"esito": "Template <?php print $filename ?> salvato"
}