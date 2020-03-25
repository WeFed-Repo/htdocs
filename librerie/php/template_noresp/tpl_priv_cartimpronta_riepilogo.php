<script type="text/javascript">
// CONTROLLI ED INIZIALIZZAZIONI
// Inizializzazioni
$(function () {
				// PULSANTE "PROSEGUI"
				$("#pControlli").click(confermaControlli);
				
				// LINK PDF
				$("#pdfLink").click(function(){
					// Abilitazione del checkbox
					var cb = $("#cb1");
					cb.parents("label").find(".hovfincont").remove();
					cb.prop("disabled",false);
				});
		});
			
// CONTROLLI ED ASSEGNAZIONE ERRORI
confermaControlli = function()
{
	// Inizializzazione array errori
	var errors = [];
	
	// Acquisizione dei campi
	// Modificare nomi/id per rispondere alle varie necessita'
	var cb= $("#cb1");
	
	// Esempio controllo Checkbox
	if ( !cb.is(":checked") && !cb.is(":disabled")) errors.push({ field: cb, text: "Testo dell'errore" });
	if (cb.is(":disabled")) errors.push({ field: cb.parent().find("span"), text: "Testo dell'errore con CB disabilitato" });
	
	if (errors.length)
		{
			// Visualizzazione degli errori
			setErrors(errors, '#formPlafond');
			$(errors[0].field).trigger('click');
		}
	else
		{
			//Submit del form e controlli lato BE
		}
}
</script>


<h1>Cartimpronta one</h1>
<!-- Blocco tab -->
<div class="divtabellalist">
<table class="tabellalist" border="0">
	<tbody>
		<tr>
			<td class="off first"><a title="Lorem ipsum" href="#1">lorem ipsum</a></td>
			<td class="on"><a title="Lorem ipsum lorem" href="#1">richiedi pi&ugrave; credito</a></td>
			<td class="off"><a title="Lorem ipsum" href="#1">lorem ipsum</a></td>
			<td class="off"><a title="Lorem ipsum" href="#1">lorem ipsum<br />lorem ipsum</a></td>
			<td class="off"><a title="Lorem ipsum" href="#1">lorem ipsum</a></td>												
			<td class="end"></td>
		</tr>
	</tbody>
</table>
</div>
<!-- Fine blocco tab -->
<p>
	Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. 
</p>
<br class="clear">
<!-- RIEPILOGO DATI -->
<div class="borderFormRounded  margBottomLarge">
	<div class="formGeneric">
		<form>
			<!-- TITOLETTO -->
			<div class="row-fluid">
				<div><h2 class="subTitForm">Titoletto</h2></div>
			</div>
			<!-- FINE TITOLETTO -->
			<!-- INIZIO RIGA 2 CAMPI-->
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Lpsum dolor sit amet</label>
					<span class="output">Lorem ipsum dolor sit lorem</span>
				</div>
				<div class="span6">
					<label class="nomefield">Lpsum dolor sit amet</label>
					<span class="output">Lorem ipsum dolor sit lorem</span>
				</div>
			</div>
			<!-- FINE RIGA 2 CAMPI-->
			<!-- INIZIO RIGA 1 CAMPO-->
			<div class="row-fluid">
				<div class="span12">
					<label class="nomefield">Lpsum dolor sit amet</label>
					<span class="output">Lorem ipsum dolor sit lorem</span>
				</div>
			</div>
			<!-- FINE RIGA  1 CAMPO-->
			<!-- INIZIO RIGA 2 CAMPI-->
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Lpsum dolor sit amet</label>
					<span class="output">Lorem ipsum dolor sit lorem</span>
				</div>
				<div class="span6">
					<label class="nomefield">Lpsum dolor sit amet</label>
					<span class="output">Lorem ipsum dolor sit lorem</span>
				</div>
			</div>
			<!-- FINE RIGA 2 CAMPI-->
		</form>
	</div>
</div>
<!-- FINE RIEPILOGO DATI -->
<!-- CONTROLLI CHECKBOX -->

<div class="formGeneric">
	<form>
		<div class="row-fluid">
			<div><h2 class="subTitForm">Lorem ipsum dolor</h2></div>
		</div>
		<div class="row-fluid">
			<div><ul class="pdfinline"><li><a href="#" id="pdfLink">Lorem ipsum</a></li></ul></div>
		</div>
		<div class="row-fluid">
			<label><div class="hovfincont"><span data-tooltip="Lorem ipsum dolor sit amet consectetur" class="hovfin"></span></div><input type="checkbox" id="cb1" disabled>Lorem ipsum dolor sit amet consectetur adipiscing ipsum dolor sit amet consectetur adipiscing ipsum dolor sit amet consectetur adipiscing elit summa cum laude  ipsum dolor sit amet consectetur adipiscing elit summa cum laude .</label>
		</div>
	</form>
<//div>
<!-- FINE CONTROLLI CHECKBOX -->
<!-- CONSOLE -->
<br class="clear" />
<div class="fooform">
	<div class="fooformtop">Step <strong>3</strong> di 3</div>
	<div class="fooformleft">
		<div><a href="#1" class="btnformleft" title="lorem ipsum"><img src="/img/ret/btn_left_bi.gif" alt=""><span>indietro</span><img src="/img/ret/btn_right_bi.gif" alt=""></a></div>	
	</div>
	<div class="fooformright">
		<div><a href="javascript:;" id="pControlli" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>invia la richiesta</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
		<br class="clear" />
	</div>	
</div>
<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
<!-- FINE CONSOLE -->