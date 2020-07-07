<?php
$rapp = $_GET["rappid"];
if ($rapp == "1") {
?>
<!-- RIEPILOGO -->
<div class="evidente">
	<div class="output inline">
		<label class="control-label">Saldo prepagata</label>
		<span class="dato">9.999.999 &euro;</span>
	</div>
</div>
<div class="elenco-dati">
	<h4>Utilizzo carta</h4>
	<div class="output">
		<label class="control-label">Complessivo mensile</label>
		<span class="dato">9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Importo utilizzato</label>
		<span class="dato">-9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Importo residuo mensile</label>
		<span class="dato">9.999.999,99</span>
	</div>
</div>
<div class="elenco-dati">
	<h4>Limiti utilizzo giornalieri</h4>
	<div class="output">
		<label class="control-label">Prelievi da ATM</label>
		<span class="dato">9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Pagamenti negozi</label>
		<span class="dato">-9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Pagamenti internet</label>
		<span class="dato">9.999.999,99</span>
	</div>
</div>
<?php
}
elseif ($rapp=="2") {
?>
<!-- RIEPILOGO YOUCARD-->
<div class="evidente">
	<div class="output inline">
		<label class="control-label">Saldo prepagata</label>
		<span class="dato">9.999.999 &euro;</span>
	</div>
</div>
<div class="elenco-dati">
	<h4>Utilizzo carta</h4>
	<div class="output">
		<label class="control-label">Complessivo mensile</label>
		<span class="dato">9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Importo utilizzato</label>
		<span class="dato">-9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Importo residuo mensile</label>
		<span class="dato">9.999.999,99</span>
	</div>
</div>
<div class="elenco-dati">
	<h4>Utilizzo con addebito a fine mese</h4>
	<div class="output">
		<label class="control-label">Complessivo mensile</label>
		<span class="dato">9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Importo utilizzato</label>
		<span class="dato">-9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Importo residuo mensile</label>
		<span class="dato">9.999.999,99</span>
	</div>
</div>
<?php
}
elseif ($rapp=="3") {
?>
<div class="elenco-dati">
	<div class="output">
		<label class="control-label">Numero conto</label>
		<span class="dato">098321098321098</span>
	</div>
	<div class="output">
		<label class="control-label">Filiale</label>
		<span class="dato">Sede di Lodi</span>
	</div>
	<div class="output">
		<label class="control-label">Intestato a</label>
		<span class="dato">Giovanni Spadolini DeCecco</span>
	</div>
</div>
<?php
}
elseif ($rapp=="4") {
?>
<div class="elenco-dati">
	<h4>Utilizzo carta</h4>
	<div class="output">
		<label class="control-label">Complessivo mensile</label>
		<span class="dato">9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Importo utilizzato</label>
		<span class="dato">-9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Importo residuo mensile</label>
		<span class="dato">9.999.999,99</span>
	</div>
</div>
<div class="elenco-dati">
	<h4>Limiti utilizzo giornalieri</h4>
	<div class="output">
		<label class="control-label">Prelievi da ATM</label>
		<span class="dato">9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Pagamenti negozi</label>
		<span class="dato">-9.999.999,99</span>
	</div>
	<div class="output">
		<label class="control-label">Pagamenti internet</label>
		<span class="dato">9.999.999,99</span>
	</div>
</div>
<?php
}
else {
?>
<!-- ESEMPIO ERRORE -->
<div class="msg-errore"><strong>Attenzione!</strong><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
<?php
}
?>