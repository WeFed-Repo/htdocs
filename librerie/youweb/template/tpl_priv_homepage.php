<?php
   if(strpos( $_SERVER['REQUEST_URI'] , "strutt_priv_new.php") > 0) {
      virtual("tpl_priv_dashboard.php");
   }
   else
   {
?>
<div class="visible-print-block">
   <img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
   <div class="pull-right">
      01/03/2017	
   </div>
</div>
<script type="text/javascript">
   var homeSize = 4;
   $( document ).ajaxComplete(function( event, xhr, settings ) {
   	homeSize--;
   	if (homeSize == 0) {
   		ajaxHomepageComplete();	
   	}
   }); 
</script>
<div class="clearfix" id="homepage">
   <ul id="col1" class="col-sm-6 col-xs-12">
      <li><?php virtual ("/include/home_wdg/widget_riepilogo_conto.php") ?></li>
      <li><?php virtual ("/include/home_wdg/widget_ultimi_movimenti.php") ?></li>
	  <li><?php virtual ("/include/home_wdg/widget_posta_personale.php") ?></li>
	  <li><?php virtual ("/include/home_wdg/widget_titoli_preferiti.php") ?></li>
	  <li><?php virtual ("/include/home_wdg/widget_titoli_preferiti2.php") ?></li>
   </ul>
   <ul id="col2" class="col-sm-6 col-xs-12">
      <li><?php virtual ("/include/home_wdg/widget_sintesi_patrimoniale.php") ?></li>
      <li><?php virtual ("/include/home_wdg/widget_riepilogo_carte.php") ?></li>
	  <li><?php virtual ("/include/home_wdg/widget_indici.php") ?></li>
	  <li><?php virtual ("/include/home_wdg/widget_calendario.php") ?></li>
   </ul>
</div>
<script>
   var indiciHomepage = true;
</script>
<?php

}
?>