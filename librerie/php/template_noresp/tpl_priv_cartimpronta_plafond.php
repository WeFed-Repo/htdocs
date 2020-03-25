<script type="text/javascript">
// CONTROLLI ED INIZIALIZZAZIONI
// Inizializzazioni di Datepicker ed altre eventuali
$(function () {
				// DATEPICKER "DAL"
				$("#periodoDal").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 1,
					//MxDate fissata solo come esempio
					maxDate: "+1M +10D",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "dd/mm/yy",
					showOtherMonths: true
				});
				$("#periodoDal").mask("99/99/9999");
				
				// DATEPICKER "AL"
				$("#periodoAl").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 1,
					//MxDate fissata solo come esempio
					maxDate: "+1M +10D",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "dd/mm/yy",
					showOtherMonths: true
				});
				$("#periodoAl").mask("99/99/9999");
				
				// RADIO BUTTONS KCLASSIC (se esistenti)
				ricVarPlafond= $("input[name=ricVarPlafond]");
				if (ricVarPlafond.length)
				{
					ricVarPlafond.click(function(){
						var sTl = $("#selTipoLinea");
						if (this.value == "variazione")
						{
							sTl.show();
						}
						else
						{
							sTl.hide();
						}
					});
				}
				
				
				tipoVarPlafond = $("input[name=tipoVarPlafond]");
				if (tipoVarPlafond.length)
				{
					tipoVarPlafond.click(function(){
						var iR = $("#intervalloRevoca");
						if (this.value == "provvisoria")
						{
							iR.show();
						}
						else
						{
							iR.hide();
						}
					});
				}
				
				
				// PULSANTE "PROSEGUI"
				$("#pControlli").click(plafondControlli);
			});
			
// CONTROLLI ED ASSEGNAZIONE ERRORI
plafondControlli = function()
{
	// Inizializzazione array errori
	var errors = [];
	
	// Acquisizione dei campi
	// Modificare nomi/id per rispondere alle varie necessita'
	var plaCc= $("#formPlafond select[name=cc]");
	var plaRic = $("#formPlafond input[name=ricVarPlafond]");
	
	// Effettuare qui i vari controlli e fare il push dei vari errori
	errors.push({ field: plaCc, text: "Testo dell'errore" });
	errors.push({ field: $("#ricWrap"), text: "Testo dell'errore" });
	
	if (errors.length)
		{
			// Visualizzazione degli errori
			setErrors(errors, '#formPlafond');
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
					<tbody><tr>
						<td class="off first"><a title="Lorem ipsum" href="#1">lorem ipsum</a></td>
						<td class="on"><a title="Lorem ipsum lorem" href="#1">richiedi pi&ugrave; credito</a></td>
						<td class="off"><a title="Lorem ipsum" href="#1">lorem ipsum</a></td>
						<td class="off"><a title="Lorem ipsum" href="#1">lorem ipsum<br />lorem ipsum</a></td>
						<td class="off"><a title="Lorem ipsum" href="#1">lorem ipsum</a></td>												
						<td class="end"></td>
					</tr>
				</tbody></table>
</div>
<!-- Fine blocco tab -->
<p>
	Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. 
</p>
<!-- FORM -->
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
		<form id="formPlafond">
			
			<div class="row-fluid">
				<div class="span6">
					<div class="span6">
					<label class="nomefield">Carta di credito*</label>
						<select name="cc">
							<option selected value="9201 *** *** *** 1234">9201 *** *** *** 1234</option>
						</select>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">Conto di addebito</label>
					<span class="output">CC 312983 9128398129 EUR</span>
				</div>
			</div>
			<!-- RICHIESTA VARIAZIONE LINEA -->
			<div class="row-fluid">
				<div class="span12">
					<div class="span8" id="ricWrap">
						<label class="nomefield">Richiesta variazione plafond</label>
						<div class="row-fluid noMargbottom">
							<div class="span6">
								<label><input type="radio" name="ricVarPlafond" value="variazione">variazione prima linea di credito</label>
							</div>
							<div class="span6">
								<label><input type="radio" name="ricVarPlafond" value="provvisoria">provvisoria</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- FINE TIPO VARIAZIONE LINEA -->
			<div id="selTipoLinea" style="display:none">
			<div class="row-fluid">
				<div class="span6">
					<div class="span6" >
						<label class="nomefield">Tipologia variazione plafond</label>
						<div class="row-fluid noMargbottom">
							<div class="span6">
								<label><input type="radio" name="tipoVarPlafond" value="revoca">a revoca</label>
							</div>
							<div class="span6">
								<label><input type="radio" name="tipoVarPlafond" value="provvisoria">provvisoria</label>
							</div>
						</div>
					</div>
				</div>
				<!-- BLOCCO CONDIZIONATO -->
				<div class="span6" id="intervalloRevoca" style="display:none">
					<label class="nomefield ico">Periodo* (massimo 3 mesi)</label>
					<span class="iconahelp" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim"><img src="/img/ret/ico2or_help2.gif" class="help"></span>
					<div class="row-fluid noMargbottom">
						<div class="span1">
							<span class="output">dal</span>
						</div>
						<div class="span4">
							<!-- Periodo DAL -->
							<input type="text" name="queryDateFrom" class="withIco" id="periodoDal" placeholder="gg/mm/aaaa" value="22/11/2013">
							<!-- Fine periodo DAL -->
						</div>
						<div class="span1">
							<span class="output">al</span>
						</div>
						<div class="span4">
							<!-- Periodo AL -->
							<input type="text" name="queryDateFrom" class="withIco" id="periodoAl" placeholder="gg/mm/aaaa" value="22/11/2013">
							<!-- Fine periodo AL -->
						</div>
					</div>
				</div>
				<!-- FINE BLOCCO CONDIZIONATO -->
			</div>
			</div>
			
			<div class="row-fluid">
				<div class="span6">
					<div class="span6">
						<label class="nomefield">Importo*</label>
						<input type="text"></input>
					</div>
					<div class="span6">
						<label class="nomefield">&nbsp;</label>
						<span class="output"><strong>,00 &euro;</strong></span>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">Note</label>
					<input type="text" />
				</div>
			</div>
			<!-- BLOCCO 3 CAMPI -->
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Label ipsum</label>
					<input type="text"></input>
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span6">
							<label class="nomefield">Label ipsum</label>
							<input type="text"></input>
						</div>
						<div class="span6">
							<label class="nomefield">Label ipsum</label>
							<input type="text"></input>
						</div>
					</div>
				</div>
			</div>
			<!-- FINE BLOCCO 3 CAMPI -->
		</form>
	</div>
</div>
<!-- FINE FORM -->
<!-- CONSOLE -->
<br class="clear" />
<div class="fooform">
	<div class="fooformtop">Step <strong>1</strong> di 2</div>
	<div class="fooformright">
		<div><a href="javascript:;" id="pControlli" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>prosegui</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
		<br class="clear" />
	</div>	
</div>
<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
<!-- FINE CONSOLE -->