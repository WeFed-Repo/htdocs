<?php 
	virtual ("/librerie/php/str_left_pub_wb.php");
?>
<div id="maincontent">
	<div class="maincontenttopper"></div>

	<!-- titolo -->
		<?php virtual("/librerie/include/commons/titoli/pub_wb_int_tit_003.php"); ?>
	<!--fine  titolo -->


	<!-- contenitore contributi -->
	

	<p>Webank ti d&agrave; la possibilit&agrave; di inviarci suggerimenti, idee, consigli.<br />
		Nella sezione &quot;<b>Idee da realizzare</b>&quot;  trovi alcune delle proposte su cui stiamo lavorando. In &quot;<b>Idee realizzate</b>&quot; vedi i progetti conclusi.</p>
	
	<!-- contenitore contributi -->	
	<div id ="contributi">
	</div>	
<!-- fine contenitore contributi -->

</div>
<!-- DA QUI -->
<div id="right">
	<!-- inizio codice hai visto -->
	<div class="gen">
		<img src="/img/tit_haivisto.gif" alt="Hai visto" class="titolo" /><p class="lineheight15"><a href="#1" title="Lorem ipsu dolor..." >Lorem ipsu dolor sit ame</a><br/><a href="#1" title="Duis id sem sit...">Duis id sem sit amet sapen mollis</a><br/><a href="#" title="Cum sociis natoque...">Cum sociis natoque petibus magnis</a></p>
	</div>
	<!-- fine codice hai visto -->

	<div class="filetto"></div>
	
	<!-- IMPORTA PROTOTYPE -->
	<script src="/wscmn/js/ajax_low.js" type="text/javascript"></script>
	<!-- FINE IMPORTAZIONE -->
	
	
	<!-- INIZIO CODICE PULSANTE APRI DOPPIO -->
	<style>
	
		#apridoppio {width: 179px;float:left; display:block; margin:0; padding:0;}
		#apridoppio a {display: block; float:left; width: 179px; height: 66px; background: transparent url(/img/ban_apridoppio_nba.gif) no-repeat;}
		#apridoppio a#apridoppiotop {background-position:  0px 0px;}
		#apridoppio a#apridoppiotop.over {background-position: 0px -66px;}
		#apridoppio a#apridoppiobottom {background-position: 0px -161px;}
		#apridoppio a#apridoppiobottom.over {background-position: 0px -227px;}
	</style>
	<script type="text/javascript">
		// Funzioni per attivazioni box
		function apridoppioEspandi(idEspandi)		
		{
			$(idEspandi).className = 'over';
			$(idEspandi).morph('height: 95px',{duration: 0.2});
		}
		function apridoppioContrai (idEspandi)
		{
			$(idEspandi).morph('height: 66px',{duration: 0.2});
			if (idEspandi == 'apridoppiotop') window.setTimeout(function(){$('apridoppiotop').className = '';}, 200);
			else window.setTimeout(function(){$('apridoppiobottom').className = '';}, 200);
		}
	</script>
	<div class="banner">
		<div id="apridoppio">
			<a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_tcube_wb.php&conv=APRI001" title="APRI IL CONTO! Vinci i biglietti per la partita" id="apridoppiotop" onmouseover="apridoppioEspandi('apridoppiotop');" onmouseout="apridoppioContrai('apridoppiotop')"></a>
			<a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_tcube_wb.php&conv=APRI002" title="APRI IL CONTO! Vinci New York per vedere l'NBA" id="apridoppiobottom" onmouseover="apridoppioEspandi('apridoppiobottom');" onmouseout="apridoppioContrai('apridoppiobottom')"></a>
		</div>
	</div>
	<!-- FINE CODICE PULSANTE APRI DOPPIO -->
	
</div>


