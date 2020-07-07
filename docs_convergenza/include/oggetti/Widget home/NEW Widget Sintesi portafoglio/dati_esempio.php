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
	<!-- Spazio per il grafico -->
	<div class="grafico-wrap placeholder"><span class="icon icon-investimenti"></span></div>
	<!-- Fine spazio del grafico -->
	<div class="legenda-wrap">
		<table class="legenda">
			<tr>
				<td class="dot-wrap"><span class="dot" style="background-color:#344a86"></td>
				<td>Azioni Italia</td>
				<td class="right bold positivo nowrap">9.999.999,00 &euro;</td>
			</tr>
			<tr>
				<td class="dot-wrap"><span class="dot" style="background-color:#7884a2"></td>
				<td>Obbligazioni U.S.A.</td>
				<td class="right bold positivo nowrap">9.999.999,00 &euro;</td>
			</tr>
			<tr>
				<td class="dot-wrap"><span class="dot" style="background-color:#7884a2"></td>
				<td>Voce 3</td>
				<td class="right bold positivo nowrap">9.999.999,00 &euro;</td>
			</tr>
			<tr>
				<td class="dot-wrap"><span class="dot" style="background-color:#7884a2"></td>
				<td>Voce 4</td>
				<td class="right bold positivo nowrap">9.999.999,00 &euro;</td>
			</tr>
			<?php if ($rapp == 3) {
				?>
				<tr>
					<td class="dot-wrap"><span class="dot" style="background-color:#7884a2"></td>
					<td>Obbligazioni U.S.A.</td>
					<td class="right bold positivo nowrap">9.999.999,00 &euro;</td>
				</tr>
				<tr>
					<td class="dot-wrap"><span class="dot" style="background-color:#7884a2"></td>
					<td>Voce 3</td>
					<td class="right bold positivo nowrap">9.999.999,00 &euro;</td>
				</tr>
				<tr>
					<td class="dot-wrap"><span class="dot" style="background-color:#7884a2"></td>
					<td>Voce 4</td>
					<td class="right bold positivo nowrap">9.999.999,00 &euro;</td>
				</tr>
				<tr>
					<td class="dot-wrap"><span class="dot" style="background-color:#7884a2"></td>
					<td>Obbligazioni U.S.A.</td>
					<td class="right bold positivo nowrap">9.999.999,00 &euro;</td>
				</tr>
				<tr>
					<td class="dot-wrap"><span class="dot" style="background-color:#7884a2"></td>
					<td>Voce 3</td>
					<td class="right bold positivo nowrap">9.999.999,00 &euro;</td>
				</tr>
				<tr>
					<td class="dot-wrap"><span class="dot" style="background-color:#7884a2"></td>
					<td>Voce 4</td>
					<td class="right bold positivo nowrap">9.999.999,00 &euro;</td>
				</tr>

				<?php
				}
			?>
		</table>
	</div>
	<?php
	}
	else
	{
	?>
	<!-- ESEMPIO TABELLA -->
	<table>
		<tr class="dispari">
			<td>Azioni Italia</td>
			<td>99,99</td>
			<td class="right bold positivo nowrap">9.999.999 &euro;</td>
		</tr>
		<tr class="pari">
			<td>Obbligazioni U.S.A.</td>
			<td>99,91</td>
			<td class="right bold positivo nowrap">9.999.999 &euro;</td>
		</tr>
		<tr class="dispari">
			<td>Voce 3</td>
			<td>0,99</td>
			<td class="right bold negativo nowrap">-9.999.999 &euro;</td>
		</tr>
		<tr class="pari">
			<td>Voce 4</td>
			<td>9,91</td>
			<td class="right bold positivo nowrap">9.999.999 &euro;</td>
		</tr>
		<?php if ($rapp == 3) {
				?>
		<tr class="dispari">
			<td>Voce 3</td>
			<td>0,99</td>
			<td class="right bold negativo nowrap">-9.999.999 &euro;</td>
		</tr>
		<tr class="pari">
			<td>Voce 4</td>
			<td>9,91</td>
			<td class="right bold positivo nowrap">9.999.999 &euro;</td>
		</tr>
		<tr class="dispari">
			<td>Voce 3</td>
			<td>0,99</td>
			<td class="right bold negativo nowrap">-9.999.999 &euro;</td>
		</tr>
		<tr class="pari">
			<td>Voce 4</td>
			<td>9,91</td>
			<td class="right bold positivo nowrap">9.999.999 &euro;</td>
		</tr>
		<tr class="dispari">
			<td>Voce 3</td>
			<td>0,99</td>
			<td class="right bold negativo nowrap">-9.999.999 &euro;</td>
		</tr>
		<tr class="pari">
			<td>Voce 4</td>
			<td>9,91</td>
			<td class="right bold positivo nowrap">9.999.999 &euro;</td>
		</tr>
		<tr class="dispari">
			<td>Voce 3</td>
			<td>0,99</td>
			<td class="right bold negativo nowrap">-9.999.999 &euro;</td>
		</tr>
		<tr class="pari">
			<td>Voce 4</td>
			<td>9,91</td>
			<td class="right bold positivo nowrap">9.999.999 &euro;</td>
		</tr>
				<?php
			}
			?>
		<tr class="totale">
			<td class="bold">Totale portafoglio</td>
			<td class="bold">100,00</td>
			<td class="right bold positivo nowrap">9.999.999 &euro;</td>
		</tr>
		

	</table>
	<!-- FINE ESEMPIO TABELLA -->
	<?php
	}	

}
?>