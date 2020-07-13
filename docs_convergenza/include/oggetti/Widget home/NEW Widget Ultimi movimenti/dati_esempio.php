<?php
$vista = $_GET["vista"];
$rapp = $_GET["rapp"];
if ($rapp == 2 ) {
	?>
	<div class="msg-errore"><strong>Attenzione!</strong><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
	<?php
}
else
{

	if ($vista == "grafico") {
	?>
	<!-- ESEMPIO ERRORE -->
	<div class="grafico-wrap placeholder"><span class="icon icon-investimenti"></span></dov>
	<!-- FINE ESEMPIO ERRORE -->
	<?php
	}
	else
	{
	?>
	<!-- ESEMPIO TABELLA -->
	<table>
		<tr class="dispari">
			<td>22/12/2017</td>
			<td>Pagamento utenze verso...</td>
			<td class="right bold negativo nowrap">-9.999.999 &euro;</td>
		</tr>
		<tr class="pari">
			<td>22/12/2017</td>
			<td>Lorem ipsum dolor sit amet</td>
			<td class="right bold negativo nowrap">-9.999.999 &euro;</td>
		</tr>
		<tr class="dispari">
			<td>21/12/2017</td>
			<td>Pagamento</td>
			<td class="right bold positivo nowrap">9.999.999 &euro;</td>
		</tr>
		<tr class="pari">
			<td>21/12/2017</td>
			<td>Pagamento</td>
			<td class="right bold negativo nowrap">-9.999.999 &euro;</td>
		</tr>
		<tr class="dispari">
			<td>20/12/2017</td>
			<td>Accredito</td>
			<td class="right bold positivo nowrap">-9.999.999 &euro;</td>
		</tr>
		<?php if($rapp == 3) {
			?>
		<tr class="pari">
			<td>22/12/2017</td>
			<td>Lorem ipsum dolor sit amet</td>
			<td class="right bold negativo nowrap">-9.999.999 &euro;</td>
		</tr>
		<tr class="dispari">
			<td>21/12/2017</td>
			<td>Pagamento</td>
			<td class="right bold positivo nowrap">9.999.999 &euro;</td>
		</tr>
		<tr class="pari">
			<td>21/12/2017</td>
			<td>Pagamento</td>
			<td class="right bold negativo nowrap">-9.999.999 &euro;</td>
		</tr>
		<tr class="dispari">
			<td>20/12/2017</td>
			<td>Accredito</td>
			<td class="right bold positivo nowrap">-9.999.999 &euro;</td>
		</tr>
			<?php
		}
		?>
	</table>
	<!-- FINE ESEMPIO TABELLA -->
	<?php
	}	

}
?>