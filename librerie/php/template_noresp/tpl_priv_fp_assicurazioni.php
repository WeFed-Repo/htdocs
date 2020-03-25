<?php
if ($bank == "webank")
{
?>
	<div id="assiWrap"></div>
	<script src="/js/jquery.bxSlider.min.js" type="text/javascript"></script>
	<script src="/js/ret/priv_assi.js" type="text/javascript"></script>
	<h3>Originale</h3>
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