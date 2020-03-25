<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
<title>LIBRERIE Webank</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="it" />
<meta name="script" http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="script" http-equiv="Content-Style-Type" content="text/css" />
<!-- INIZIO CODICE-->
<?php virtual ("/wscmn/css/include_css_priv.html"); ?>
<?php virtual ("/js/include_js_priv.html"); ?>
<!-- FINE CODICE-->
</head>
<body class="bgfp">
<div id="testa"> 
  <div id="page1">
  
    <!-- INIZIO CODICE-->
    <?php virtual ("/librerie/include/commons/navigazione/nav_black_priv_001.php"); ?>
    <!-- FINE CODICE-->
	
	     <!-- INIZIO CODICE-->
    <?php virtual ("/librerie/include/commons/toolbox/tool_black_priv_001_new.php"); ?>
    <!-- FINE CODICE-->
	<br class="clear" />
    <div id="content"> 
	 <!-- INIZIO CODICE-->
 	<div id="menusxc">
		<h1>Voce 3&deg; livello</h1>
		<div class="menusxcontainer">
			<a href="#"><span>Lorem ipsum dolor</span></a>
			<a href="#" class="selected"><span>Sit amet adispici<span>&nbsp;</span></span></a>
			<a href="#"><span>Lorem ipsum dolo</span></a><a href="#"><span>Lorem ipsum</span></a>
		</div>
		<div class="boxinfosx">
			<h1><span>New</span>Lorem ipsum</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipiscing <strong>elit adipiscing</strong> elit consectetur adipiscing amet elit elit.</p>
		</div>	
	</div>
	<!-- FINE CODICE--> 
	
<div id="contenuti">
	<h1>Investire in fondi</h1>
	<!-- BLOCCO VISUAL -->
	<div class="flashbox flashboximg">
		<div class="left">
			<img src="/wscmn/img/ret/str_psd_bg_left.gif" alt ="" />
		</div>
		<script type="text/javascript">
			addEvent(window,"load",function(){mainContentObjectFire()});
		</script>
		<div class="middle">
			<div class="maincontentobject">
				<div id="maincontentobjectmenu"></div>
				<div id="maincontentobjectarea">
					<!-- PRIMA AREA -->
					<div id="guarda" class="objectarea"></div>
					<script defer="defer" type="text/javascript">		  
						var flashobject = new SWFObject("/swf/videoplayer_capitoli.swf", "flash", "382", "241", "8", "#000000");
						flashobject.addParam("quality", "high");		
						flashobject.addParam("wmode", "opaque");
						flashobject.addParam("allowfullscreen","false");
						flashobject.addParam("allowscriptaccess", "always");
						flashobject.addParam("FlashVars","videoLink=https://media.webank.it/vod/video_fondi_pubblica_382_215.flv");                
						flashobject.write("guarda");
					</script>
				</div>
			</div>
			<!-- TESTO LATERALE DEL VISUAL -->
			<script type="text/javascript">
			
				function thumbCarPlay(videourl)
				{
					alert(videourl);
				}
				
				function thumbCarSwitch (direction)
				{
					if (direction == 'back')
					{
						thumbs[0].morph ("margin-left: -65px;", {duration:0.3});
						thumbs.push(thumbs[0]);
						thumbs.shift();
					}	
				}
			
				function thumbCarInit (thumbarrayId)
					{
						thumbArray = $(thumbarrayId);
						//Apparizione frecce & eventuali
						thumbs = thumbArray.select(".thumb");
						
					}
				addEvent (window,"load",function(){thumbCarInit("thumbArray")});	
			</script>
			<style>
				.thumbCar {background-color: #red; display: block;float: left;height: 59px;margin: 13px 0 0 10px;overflow: hidden;padding: 0;width: 256px;}
				.thumbCar a.freccia {width:20px; height:49px; margin: 0; float:left; display:block; background: transparent url(/img/ret/ico1gr_vidcar_left.gif) no-repeat 0 0}
				.thumbCar a.freccia.right {float:right; background-image: url(/img/ret/ico1gr_vidcar_right.gif)}
				.thumbCar .thumbArray {float:left; display:block; margin:0; padding:0; background-color: #fff; width: 216px; height: 59px; overflow:hidden; background-color: red;}
				.thumbCar div.thumb {margin:0  0 0 14px; float:left; display:block; width: 53px; height: 59px; background: transparent url(/img/ret/str_vidcar_ombretta.gif) repeat-x left bottom}
				.thumbCar div.thumb a {  background-color: blue; width: 53px; height: 38px; float:left; display:block; margin-top: 11px}
			</style>
			<div class="thumbCar" id="thumbCar">
				<a class="freccia left" href="javascript:;" onclick="thumbCarSwitch('back');" title="Torna indietro"></a>
				<div class="thumbArray" id="thumbArray">
					<div class="thumb"><a href="javascript:;" onclick="thumbCarPlay('a')"><span></span></a></div>
					<div class="thumb"><a href="javascript:;" onclick="thumbCarPlay('b')"><span></span></a></div>
					<div class="thumb"><a href="javascript:;" onclick="thumbCarPlay('c')"><span></span></a></div>
					<div class="thumb"><a href="javascript:;" onclick="thumbCarPlay('d')"><span></span></a></div>
					<div class="thumb"><a href="javascript:;" onclick="thumbCarPlay('e')"><span></span></a></div>
				</div>
				<a class="freccia right" href="javascript:;" onclick="thumbCarSwitch('fwd');" title="Vai avanti"></a>
			</div>
			<!-- FINE TESTO LATERALE DEL VISUAL -->
		</div>
		<div class="right">
			<img src="/wscmn/img/ret/str_psd_bg_right.gif" alt ="" />
		</div>
	</div>
	<!-- FINE BLOCCO VISUAL -->
	<!-- BLOCCO TESTI SOTTO VISUAL -->
		<h2>Un'offerta completa e diversificata</h2>
		<p>
			I <strong>fondi migliori</strong> scelti tra le <strong>migliori case d'investimento: Anima, BlackRock, Epsilon, Etica, Eurizon, Franklin Templeton, JP Morgan, Schoeder, Threadneedle</strong>. 
		</p>
		<br class="clear" />
		<h2>Informazioni puntuali e indipendenti</h2>
		<p>
			Strumenti di <strong>ricerca e analisi</strong> innovativi e una <strong>sezione informativa</strong> completamente nuova in collaborazione con <strong>Morningstar</strong>, la fonte pi&ugrave; autorevole nel campo dell'<strong>informazione finanziaria</strong> sui fondi. 
		</p>
		<br class="clear" />
		<h2>Condizioni trasparenti e vantaggiose</h2>
		<p>
			Tutti i <strong>costi</strong> e i <strong>tempi</strong> legati alle operazioni di <strong>sottoscrizione, switch</strong> e <strong>rimborso</strong> indicati chiaramente. Zero commissioni d'ingresso per molti fondi e sicav. Tutti i costi e i tempi legati alle operazioni di sottoscrizione, switch e rimborso indicati chiaramente. <strong>Zero commissioni</strong> d'ingresso per molti fondi e sicav.
		</p>
		<br class="clear" />
		<h2>Tutte le funzioni a portata di clic</h2>
		<p>
			<strong>Un'area del sito completamente</strong> reinventata nella <strong>grafica</strong> e nei <strong>contenuti</strong> per migliorare ancora di più la navigabilit&agrave;.
		</p>
		<br class="clear" />
	<br />
	<!-- FINE BLOCCO TESTO SOTTO VISUAL -->
	
</div>
<!-- INIZIO CODICE--> 
<?php virtual ("/librerie/include/commons/footer/foot_black_002.php"); ?>
<!-- FINE CODICE--> 
</div>
<iframe style="visibility: hidden;z-index:1999;" id="ifr" src="/img/ret/pixel_trasp.gif" frameborder="3" height="10" scrolling="no" width="10"></iframe> 	
</body>
</html>