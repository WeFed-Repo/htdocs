<?php
	
	$nconto =  $_POST["nconto"];
	if ($nconto == 3) {
	?>
	<!-- Nessun movimento -->
	<div class="row">
		<div class="col-xs-12">
			<span class="erroredati">ATTENZIONE: Nessun movimento da visualizzare.</span>
		</div>
	</div>
	<!-- Fine nessun movimento -->
<?php
	}
	else
	{
?>


<!-- Dati -->
<div class="row">
	<div class="col-xs-12">
		<span class="control-label floatl">
			Data esecuzione
		</span>
		<span class="floatr  bold">
			03/02/2017
		</span>
	</div>
	<div class="col-xs-12">
		<span class="control-label floatl">
			Importo:
		</span>
		<span class="floatr  bold">
			5,00&nbsp;&euro;
		</span>
	</div>
	<div class="col-xs-12">
		<span class="control-label floatl">
			Causale:
		</span>
		<span class="floatr bold">
			trasferim.tra conti
		</span>
	</div>
</div>
<?php if ($nconto == 1 ) {
	?>
<hr>
<div class="row">
	<div class="col-xs-12">
		<span class="floatl control-label ">
			Data esecuzione
		</span>
		<span class="floatr  bold">
			27/01/2017
		</span>
	</div>
	<div class="col-xs-12">
		<span class="floatl control-label ">
			Importo:
		</span>
		<span class=" floatr  bold">
			-7,00&nbsp;&euro;
		</span>
	</div>
	<div class="col-xs-12">
		<span class="floatl control-label ">
			Causale:
		</span>
		<span class="floatr  bold">
			add. pagam. diversi
		</span>
	</div>
</div>
<!-- Fine dati -->
<?php
		}
	}
?>