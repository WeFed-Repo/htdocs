<?php
$oldver = $_GET["oldver"];

if ($bank == "webank" || ($bank == "bpm" && empty($oldver)))
{
?>
	<?php 
	virtual("/librerie/include/commons/boxeditoriali/box_black_priv_140.php");
	?>
<?php
}
else
{
?>
<?php 
	virtual("/librerie/include/commons/titoli/tit_priv_ret_001.php");
?>
<!-- INIZIO CODICE-->
<?php 
	virtual("/librerie/include/commons/tabelle/tab_black_priv_040.html");
?>
<!-- FINE CODICE-->  
<br class="clear">
	<!-- INIZIO CODICE-->
<?php 
	virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_060.php");
?>
<?php
}
?>