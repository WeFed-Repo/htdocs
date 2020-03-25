<?php
	// Legge la variabile tab per determinare il tab "acceso"
	$tab = $_GET["tab"];
	if (empty($tab)) $tab = "edu";
	
?>
<?php 
	virtual ("/librerie/php/str_left_pub_wb.php");
?>
<div id="maincontent">
	<div class="maincontenttopper"></div>
	<!-- titolo -->
	<h2><img src="/img/tit_radiowb.gif" alt="Radio Webank"></h2>
	<!--fine  titolo -->
	<style>
	</style>
	<!-- tabber contenuti-->
	<div class="gratab">
		<div class="gratabcont">
			<a href="javascript:;" rel="nofollow" onclick="tabGrafSelect(this);" <?php if ($tab == "edu") { ?> class="selected"<?php } ?>><span>Edu-banking</span></a>
			<a href="javascript:;" rel="nofollow" onclick="tabGrafSelect(this);" <?php if ($tab == "arc") { ?> class="selected"<?php } ?>><span>Webank informa</span></a>
		</div>
	</div>
	<!-- fine tabber contenuti -->
	<!-- contenuti da switchare -->
	<!-- ID NUMERATO PER SWITCH CONTENUTI -->
	<div id="tabGrafCont0" <?php if ($tab != "edu") { ?>style="display:none"<?php } ?>>
		<!-- testo semplice-->
		<p class="black">Lorem ipsum <strong>dolor sit</strong> amet, consectetur  sed do ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <br /><br /> </p>
		<?php
		for ($i=1; $i<10; $i++)
		{
		?>
		<!-- box podcast-->
		<div class="boxevidenza mediabox">
			<div class="top"></div>
			<div class="middle">
				<div class="mediaboxleft">
					<span class="puntata"><?php print 22-$i; ?> Maggio 2009 <span>Puntata n.<?php print 36-$i; ?></span></span>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing. <?php  if ($i==3) { ?>Lorem dolor amet consectetur summa cum laude <strong>legend</strong> of awesome.<?php } ?></strong></p>
				</div>
				<div class="mediaboxright">
					<a href="javascript:;" onclick="openMedia(this);" rel="nofollow"><img src="/img/ico1gr_speaker.gif"></a>
					<a href="javascript:;" ><img src="/img/ico1gr_frecciadown.gif"></a>
				</div>
			</div>
			<div class="mediacontainer">
				<div class="mediaflash" id ="mediaflash<?php print $i ?>"></div>
				<script type="text/javascript">		  
				  var fo = new  SWFObject("/wscmn/swf/segnaposto_media.swf", "home_test", "370", "35", "7", "#FFFFFF");
					fo.addParam("quality", "high");		
					fo.addParam("wmode", "opaque");
					fo.write("mediaflash<?php print $i ?>");
				</script> 
				<a href="javascript:;" rel="nofollow" onclick="closeMedia(this);" class="close"></a>
			</div>
			<div class="bottom" ></div>
		</div>	
		<!-- fine box podcast-->
		
		<?php
		}
		?>
		<!-- contenuti da switchare -->
	</div>
	<!-- ID NUMERATO PER SWITCH CONTENUTI -->
	<div id="tabGrafCont1" <?php if ($tab != "arc") { ?>style="display:none"<?php } ?>>
		<!-- testo semplice-->
		<p class="black">Lorem ipsum <strong>dolor sit</strong> amet, consectetur  sed do ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <br />
		Lorem ipsum <strong>dolor sit</strong> amet, consectetur  sed do ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <br />
		</p>
		<?php
		for ($i=1; $i<8; $i++)
		{
		?>
		<!-- box podcast-->
		<div class="boxevidenza mediabox">
			<div class="top"></div>
			<div class="middle">
				<div class="mediaboxleft">
					<span class="puntata"><?php print 22-$i; ?> Maggio 2009 <span>Puntata n.<?php print 36-$i; ?></span></span>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing. <?php  if ($i==3) { ?>Lorem dolor amet consectetur summa cum laude <strong>legend</strong> of awesome.<?php } ?></strong></p>
				</div>
				<div class="mediaboxright">
					<a href="javascript:;" onclick="openMedia(this);" rel="nofollow"><img src="/img/ico1gr_speaker.gif"></a>
					<a href="javascript:;" ><img src="/img/ico1gr_frecciadown.gif"></a>
				</div>
			</div>
			<div class="mediacontainer">
				<div class="mediaflash" id ="mediaflash<?php print $i ?>"></div>
				<script type="text/javascript">		  
				  var fo = new  SWFObject("/wscmn/swf/segnaposto_media.swf", "home_test", "370", "35", "7", "#FFFFFF");
					fo.addParam("quality", "high");		
					fo.addParam("wmode", "opaque");
					fo.write("mediaflash<?php print $i ?>");
				</script> 
				<a href="javascript:;" rel="nofollow" onclick="closeMedia(this);" class="close"></a>
			</div>
			<div class="bottom" ></div>
		</div>	
		<!-- fine box podcast-->
		
		<?php
		}
		?>
		<!-- contenuti da switchare -->
	</div>
</div>
<?php 
	virtual ("/librerie/php/str_right_pub_wb.php");
?>
