<h1>PROVE IMMAGINI</h1>
<style>
.borded {border:solid 1px #aaa;margin:5px 0}
</style>

<?php 
$visual = $_GET["visual"];
$imageroot = "00".rand(1,78);
if (strlen ($imageroot)==3) $imageroot = "0".$imageroot;

if ($visual == "ria") {?>
<h2>Per RIA</h2>
<p>Visual <b>551px</b></p>
<img src="/img/ret/vetrina/<?php print ($imageroot);?>/xhdpi.png">
<br>
<div class="borded" style="width:549px;height:206px;float:left;background: transparent url(/img/ret/vetrina/<?php print ($imageroot);?>/iphone@2x.png) no-repeat center center"></div>
<br>
<img src="/img/ret/vetrina/<?php print ($imageroot);?>/xhdpi.png" style="width:549px" class="borded">
<br>
<img src="/img/ret/vetrina/<?php print ($imageroot);?>/iphone@2x.png" style="width:549px" class="borded">
<?php
 }
 else
 {
?> 
<h2>Icona</h2>
<style>
.wrapper{float:left;width:670px;margin:0 0 0 15px;padding:15px 0 }
hr {clear:both}
a.gestisci {width:145px;float:left;display:block}
a.gestisci span {font-weight:bold;height:20px;width:100%;clear:both;float:left;background-color:#bbb;color:#fff !important;text-align:center;margin:0;padding:0;line-height:20px;text-decoration:none}
</style>
<hr>
<div class="wrapper">
	<div class="row-fluid">
		<div class="span3">
			<a class="gestisci borded" href="#">
				<img src="/img/ret/vetrina/<?php print ($imageroot);?>/ldpi.png" style="width:100%">
				<span>Gestisci obiettivo</span>
			</a>
		</div>
		<div class="span9"><h4>Lorem Ipsum</h4><div style="background:#666;width:100%;height:120px"></div></div>
	</div> 
</div>
<hr>
<div class="wrapper">
	<div class="row-fluid">
		<div class="span3">
			<a class="gestisci borded" href="#">
				<img src="/img/ret/vetrina/<?php print ($imageroot);?>/mdpi.png" style="width:100%">
				<span>Gestisci obiettivo</span>
			</a>
		</div>
		<div class="span9"><h4>Lorem Ipsum</h4><div style="background:#666;width:100%;height:120px"></div></div>
	</div> 
</div>
<hr>
<div class="wrapper">
	<div class="row-fluid">
		<div class="span3">
			<a class="gestisci borded" href="#">
				<img src="/img/ret/vetrina/<?php print ($imageroot);?>/hdpi.png" style="width:100%">
				<span>Gestisci obiettivo</span>
			</a>
		</div>
		<div class="span9"><h4>Lorem Ipsum</h4><div style="background:#666;width:100%;height:120px"></div></div>
	</div> 
</div>
<hr>
<div class="wrapper">
	<div class="row-fluid">
		<div class="span3">
			<a class="gestisci borded" href="#">
				<img src="/img/ret/vetrina/<?php print ($imageroot);?>/iphone.png" style="width:100%">
				<span>Gestisci obiettivo</span>
			</a>
		</div>
		<div class="span9"><h4>Lorem Ipsum</h4><div style="background:#666;width:100%;height:120px"></div></div>
	</div> 
</div>

<hr>
<div class="wrapper">
	<div class="row-fluid">
		<div class="span3">
			<a class="gestisci borded" href="#">
				<div style="background: transparent url(/img/ret/vetrina/<?php print ($imageroot);?>/ldpi.png) no-repeat center center;width:100%;height:100px"></div>
				<span>Gestisci obiettivo</span>
			</a>
		</div>
		<div class="span9"><h4>Lorem Ipsum</h4><div style="background:#666;width:100%;height:120px"></div></div>
	</div> 
</div>

<?php 
 }
?>