<?php
$rapp = $_GET["rappid"];
if ($rapp == "1") {
?>
<!-- RIEPILOGO -->
<div class="evidente">
	<a class="icon icon-riepilogo_conto_iban"></a>
	<div class="output">
		<label class="control-label">Coordinate IBAN</label>
		<span class="dato">IT00N0000000000000000000000</span>
	</div>
	<div class="output">
		<label class="control-label">SWIFT</label>
		<span class="dato">BAPPIT00M00</span>
	</div>
</div>

<div class="elenco-dati">
	<div class="output">
		<label class="control-label">Saldo contabile</label>
		<span class="dato">9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Saldo disponibile</label>
		<span class="dato">-9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Affidamento</label>
		<span class="dato">9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Interessi</label>
		<span class="dato">9.999.999,99</span>
	</div>
</div>

<?php
}
elseif ($rapp=="2") {
?>
<!-- ESEMPIO BRUCO CONTO -->
<div class="elenco-dati">
	<div class="output">
		<label class="control-label">Saldo contabile</label>
		<span class="dato">9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Saldo disponibile</label>
		<span class="dato">-9.999.999,99</span>
	</div>
</div>
<!--PROMO -->
<a class="promobox" href="#" target="_self" title="I Brucopremi">
		<div class="image-box" style="background-image: url(/HT/fe/img/ban_brucoconto.jpg)"></div>
		<div class="promodettaglio">
			<p>I Brucopremi</p>
			<span class="cta">Call to action</span>
		</div>
	</a>
<?php
}
else
{
?>
<!-- ESEMPIO ERRORE -->
<div class="msg-errore"><strong>Attenzione!</strong><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
<?php
}
?>