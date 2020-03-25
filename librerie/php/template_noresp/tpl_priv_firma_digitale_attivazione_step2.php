<!--<script type="text/javascript" src="/wscmn/INLINEANET/iln/js/setiframe.js" ></script>-->
<script>
function getDocHeight(doc) {
    doc = doc || document;
    // stackoverflow.com/questions/1145850/
    var body = doc.body, html = doc.documentElement;
    var height = Math.max( body.scrollHeight, body.offsetHeight, 
        html.clientHeight, html.scrollHeight, html.offsetHeight );
    return height;
}
function setIframeHeight(id) {
    var ifrm = document.getElementById(id);
    var doc = ifrm.contentDocument? ifrm.contentDocument: 
        ifrm.contentWindow.document;
    ifrm.style.visibility = 'hidden';
    ifrm.style.height = "10px"; // reset to minimal height ...
    // IE opt. for bing/msn needs a bit added or scrollbar appears
    ifrm.style.height = getDocHeight( doc ) + 4 + "px";
    ifrm.style.visibility = 'visible';
}
</script>
<h1>Attiva firma</h1>
<div class="row-fluid">
	<div class="span12">
	<p>Da questo momento puoi procedere con l'attivazione della firma digitale rilasciata da <strong>Infocert (Certification Authority)</strong></p>
	</div>
</div><br>

<div class="row-fluid">
	<div class="span12">
		<img src="/img/ret/step02_attivaz_firma.png" alt="">
	</div>	
</div>
<div class="row-fluid">
	<div class="span4 colorBank">Controlla i tuoi dati</div>
	<div class="span4 txtAlCenter"><strong class="colorBank">Attivazione firma - InfoCert</strong></div>
	<div class="span4 txtAlRight txtStep">Il tuo contratto</div>	
</div><br><br>

<iframe id="ifrm" name="ifrm" src="https://copcl.infocert.it/cop/#?id=3204475f-0b16-49a3-92ce-585da84b9414" sandbox="allow-same-origin allow-scripts"  height="100%"></iframe>

