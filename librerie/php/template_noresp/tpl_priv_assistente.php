<link media="all" type="text/css" rel="stylesheet" href="/css/ret/helpcenter.css"/>
<script type="text/javascript">
cgi_host = "webankint.webank.local";
</script>
<!-- ESEMPIO DI LANCIO DI PAOLO ONLOAD CON PARAMETRI CAMBIATI -->
<?php
if ($_GET["sLeft"] != "")
{
?>
<script type="text/javascript">
//Carica i parametri di esempio ed apre l'assistente virtuale
vaOpenOnStart(<?php print $_GET['sLeft'];?>,<?php print $_GET['sTop'];?>,<?php print "\"".$_GET['sQuestion']."\"";?>);

</script>
<?php
}
?>
<!-- FINE ESEMPIO DI LANCIO DI PAOLO ONLOAD CON PARAMETRI ONLOAD CAMBIATI -->
<!-- ESEMPIO OVERLAY -->



<!-- ESEMPIO OVERLAY -->
<div style="display: none" id="olp" class="layeralert">
	<div onmouseover="this.style.cursor='move'; $('olp').dragHandle = new Draggable('olp',{handle: 'handle'}, { scroll: window });" class="head handle" style="cursor: move;"><img onclick="this.parentNode.parentNode.style.display='none'; javascript: closeAlert('olp'); " alt="chiudi" src="/img/ret/layeralert_x.gif"></div>
	<div class="body">
	<div class="important">
	<h3 class="verde">Sottotitolo pagina</h3>
	<p>Lorem ipsum dolor sit amet,lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem</p>
	<div class="sx"><img src="/img/ret/img_or_evtxt2.gif"></div>
	<div class="dx">
		<p>Lorem ipsum dolor sit amet,lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet:
        </p>
		<ul class="lista">
          <li class="lista">Lorem ipsum dolor sit amet, <strong>consectetuer</strong></li>
          <ul class="lista2">
            <li class="lista2">Lorem ipsum dolor sit amet, <strong>consectetuer</strong></li>
            <li class="lista2">Lorem ipsum , consectetuer</li>
            <li class="lista2">Lorem ipsum dolor sit amet, consectetuer</li>
          </ul>
          <br>
          <li class="lista">Lorem ipsum , consectetuer</li>
          <li class="lista">Lorem ipsum dolor sit amet, consectetuer</li>
        </ul>
	</div>	
</div>
	<br class="clear">
	<a onclick="javascript: closeAlert('layeralert'); javascript: document.getElementById('layerpop').style.display='none'" href="#1" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""><span>Lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt=""></a><a href="#1" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""><span>Lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt=""></a>
	<br class="clear">
	</div>
	<div class="foot"></div>
</div>
<a href="javascript:;" onclick="openAlert('olp');">Apri overlay trascinabile esempio</a><br>
<input type="text">