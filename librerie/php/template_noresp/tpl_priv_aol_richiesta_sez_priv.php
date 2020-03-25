<!-- FUNZIONE  DI SELEZIONE DELLA COLONNA-->
<script type="text/javascript">
function selectcol(el) 
	{
	var radiobtn = $('table.activetable th input');
	$(radiobtn).each(function(index) {
	if (radiobtn.eq(index).is(':checked')) {radiobtn.eq(index).parents().eq(0).css('font-weight','bold')} 
	else {radiobtn.eq(index).parents().eq(0).css('font-weight','normal')}
    })
    }
</script>

<h1>Lorem ipsum</h1>
<div class="divtabellalist">
	<table border="0" class="tabellalist">
		<tr>
			<td class="off"><a title="Scopri" href="/connect.php?page=str_interna_priv.php&amp;tpl=wetrade/tpl_priv_lib_wt_deposito_titoli_scopri.php&liv1=TR&tr2=4&tr3=0&tr4=0">Scopri</a></td>
			<td class="on"><a title="Apri" href="/connect.php?page=str_interna_priv.php&amp;tpl=wetrade/tpl_priv_lib_wt_deposito_titoli_apri.php&liv1=TR&tr2=4&tr3=0&tr4=0">Apri</a></td>
			<td class="off"><a title="Chiusura - Trasferimento" href="/connect.php?page=str_interna_priv.php&amp;tpl=wetrade/tpl_priv_lib_wt_deposito_titoli_chiusura.php&liv1=TR&tr2=4&tr3=0&tr4=0">Chiusura - Trasferimento</a></td>
		</tr>
	</table>
</div>
<br>


<!-- SELEZIONE CONTO -->
<h3 class="verde">1. Lorem ipsum dolor sit amet</h3>


<table class="form01">
	<tr> 
		<td width="105" class="uno">Conto corrente</td>
		<td width="550" colspan="3">
		<select name="select">
		<option>C/C 00599 - 0000099999 - EUR - MMMMMMMMMMMM</option>
		<option>C/C 00599 - 0000099999 - EUR - MMMMMMMMMMMM</option>
		</select><a class="preferito" title="Lorem ipsum" href="#"><img alt="Lorem ipsum" src="/img/ico1gr_preferito.gif"></a></td>
	</tr>
</table>
<br>
<!-- REGIME FISCALE -->
<h3 class="verde">2. Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</h3>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. </p>

<table class="form01">
	<tr>
		<td class="noborder">
			<input type="radio"  class="nobor3"/><strong>Lorem ipsum: </strong>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum <strong>dolor sit amet</strong> consectetur adipiscing elit summa cum laude.
		</td>
	</tr>
	<tr>
		<td class="noborder">
			<input type="radio"  class="nobor3"/><strong>Lorem ipsum: </strong>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum <strong>dolor sit amet</strong> consectetur adipiscing elit summa cum laude.
		</td>
	</tr>
</table>
<br>

<!-- TIPO DI COMMISSIONE -->
<h3 class="verde">3. Lorem ipsum dolor sit amet lorem ipsum</h3>
<table cellspacing="0" cellpadding="0" border="0" class="activetable">
	<tr>
		<th></th>
		<th width="200" style="font-weight:normal"><input type="radio" name="sample" class="nobor3" onclick="selectcol(this);">Profilo fisso*</th>
		<th width="200"><input type="radio" name="sample" class="nobor3" onclick="selectcol(this);">Profilo variabile*</th>
	</tr>
	<tr class="opened">
		<td colspan="3"><strong>Mercato azionario</strong></td>
	</tr>
	<tr class="detailrow">
		<td>Italia</td>
		<td>2 &euro;</td>
		<td>1,9 &permil;   min 19,75%  - max 25%</td>
	</tr>
	<tr class="detailrow">
		<td>Europa</td>
		<td>3 &euro;</td>
		<td>2,9 &permil;   min 19,75%  - max 25%</td>
	</tr>
	<tr class="detailrow">
		<td>Lorem</td>
		<td>4 &euro;</td>
		<td>2 &permil;   min 19,75%  - max 25%</td>
	</tr>
	<tr class="detailrow">
		<td>Dolor</td>
		<td>5 &euro;</td>
		<td>1,2 &permil;</td>
	</tr>
	<tr class="detailrow">
		<td class="last">Amet</td>
		<td class="last">9 &euro;</td>
		<td class="last">1,3 &permil; </td>
	</tr>
	<tr class="opened">
		<td colspan="3"><strong>Mercato obbligazionario</strong></td>
	</tr>
	<tr class="detailrow">
		<td>Lorem</td>
		<td>4 &euro;</td>
		<td>2 &permil;   min 19,75%  - max 25%</td>
	</tr>
	<tr class="detailrow">
		<td>Dolor</td>
		<td>5 &euro;</td>
		<td>1,2 &permil;</td>
	</tr>
	<tr class="detailrow">
		<td class="last">Amet</td>
		<td class="last">9 &euro;</td>
		<td class="last">1,3 &permil; </td>
	</tr>
	<tr class="opened">
		<td colspan="3"><strong>Mercato dei derivati</strong></td>
	</tr>
	<tr class="detailrow">
		<td>Dolor amet consectetur adipiscing</td>
		<td>5 &euro;</td>
		<td>1,2 &permil;</td>
	</tr>
	<tr class="detailrow">
		<td class="last">Amet</td>
		<td class="last">9 &euro;</td>
		<td class="last">1,3 &permil; </td>
	</tr>
</table>
<p class="note">*Lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
<br>
	
<!-- DOCUMENTAZIONE ON-LINE -->
<h3 class="verde">4. Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</h3>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. </p>

<table class="form01">
	<tr>
		<td><input type="checkbox" class="nobor3">Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</td>
	</tr>
</table>
<br>

<h3 class="verde">5. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet
<a class="noborder" href="javascript:;"><img alt="" src="/img/img_or_tooltip_off.gif" data-tooltip="#ttHtmlContId"></a>
	<span class="ttHtmlContent" id="ttHtmlContId">
		Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. <strong>Lorem ipsum</strong> il consenso a comunicare i tuoi dati a terzi.
	</span>
	<span class="txtTransformLower">(facoltativo)</span>
</h3>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. </p>

<table class="form01 formGeneric">
	<tr>
		<td><a id="hovfinconId" class="hovfincont hovfincontb" href="javascript:;" data-tooltip="Per proseguire occorre prendere visione della documentazione aprendo il relativo .pdf."><span class="hovfin" id="hovfinId"></span><input id="checkInfo" type="checkbox" class="nobor3"  disabled></a> <div class="nobor3">Dichiaro di aver preso visione dell'<a href="#1" onclick="$('#hovfinconId').removeAttr('data-tooltip');$('#hovfinId').hide();$('#checkInfo').removeAttr('disabled');$('.ckinpdis').removeAttr('disabled')">Informativa</a> relativa all'esercizio di alcuni diritti degli azionisti di società quotate.</div></td>
	</tr>
</table>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude.</p>
<table class="form01">
	<tr>
		<td><div class="nobor3"><input type="radio" name="consenso" disabled class="nobor3 ckinpdis">&nbsp;Lorem ipsum dolor</div><div class="nobor3"><input type="radio" class="nobor3 ckinpdis" disabled name="consenso">&nbsp;Lorem ipsum dolor</div></td>
	</tr>
</table>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude.</p>
<table class="form01">
	<tr>
		<td><div class="nobor3"><input type="radio" name="consenso" disabled class="nobor3 ckinpdis">&nbsp;Lorem ipsum dolor</div><div class="nobor3"><input type="radio" class="nobor3 ckinpdis" disabled name="consenso">&nbsp;Lorem ipsum dolor</div></td>
	</tr>
</table>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude.</p>
<br>

<!-- INFORMATIVA PRECONTRATTUALE-->
<h3 class="verde">6. Leggi l'informativa precontrattuale</h3>
<p>Ti informiamo che:<br>
<ul>
	<li>Lorem dolor ipsum dolor sit amet consectetur adipiscing sit amet consectetur adipiscing elit summa cuma lauda</li>
	<li>Consectetur adipiscing elit summa cuma lauda</li>
	<li>Dolor ipsum dolor sit amet consectetur adipiscing sit amet consectetur adipiscing elit summa cuma lauda</li>
</ul></p>
<table class="form01">
	<tr>
		<td>				
			<div class="mutuitrasp">
				<ul>
					<li><a href="#">Lorem ipsum sed diam nonummy</a></li>
				</ul>
			</div>
			<br class="clear">
			<ul>
				<li>Lorem dolor ipsum dolor sit amet consectetur adipiscing sit ametcuma lauda</li>
				<li>Consectetur adipiscing elit summa cuma lauda</li>
				<li>Adipiscing elit elit summa cuma lauda</li>
				<li>Dolor ipsum dolor sit amet consectetur adipiscing sit amet</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>
			<input type="checkbox" class="nobor3">&nbsp;Documentazione precontrattuale stampata/salvata<br class="clear"><input type="checkbox" class="nobor3">&nbsp;Documentazione precontrattuale stampata/salvata<br>
		</td>
	</tr>

</table>
<br>

<!-- TRASPARENZA-->
<h3 class="verde">7. Leggi la documentazione contrattuale di trasparenza</h3>
<p>Per procedere, stampa o salva sul tuo pc i documenti sotto elencati:</p>
<table class="form01 formGeneric">
	<tr>
		<td>			
			<div class="mutuitrasp mutuitraspb">
				<ul>
					<li><a href="#">Lorem ipsum sed diam nonummy</a></li>
				</ul>
			</div>
		</td>
		<td><input type="checkbox" disabled class="nobor3"></td>
	</tr>
	<tr>
		<td>			
			<div class="mutuitrasp mutuitraspb">
				<ul>
					<li><a href="#">Lorem ipsum sed diam nonummy</a></li>
				</ul>
			</div>
		</td>
		<td><input type="checkbox" disabled class="nobor3"></td>
	</tr>
	<tr>
		<td>			
			<div class="mutuitrasp mutuitraspb">
				<ul>
					<li><a href="#">Lorem ipsum sed diam nonummy</a></li>
				</ul>
			</div>
		</td>
		<td><input type="checkbox" disabled class="nobor3"></td>
	</tr>
	<tr>
		<td colspan="2"><a id="hovfinconIdb" class="hovfincont hovfincontb" href="javascript:;" data-tooltip="Per proseguire occorre prendere visione della documentazione aprendo i relativi .pdf."><span class="hovfin" id="hovfinIdb"></span><input id="checkInfob" type="checkbox" class="nobor3" disabled></a> <div class="nobor3">Dichiaro di aver lorem ipsum</div></td>
	</tr>

</table>
<br>

<!-- COMUNICAZIONE A DISTANZA -->
<h3 class="verde">8. Autorizza la comunicazione a distanza</h3>
<p>Lorem dolor ipsum dolor sit amet consectetur adipiscing sit amet consectetur adipiscing elit summa cuma lauda. Lorem dolor ipsum dolor sit amet consectetur adipiscing sit amet consectetur adipiscing elit summa cuma lauda. Lorem dolor ipsum dolor sit amet consectetur adipiscing sit amet consectetur adipiscing elit summa cuma lauda.</p>
<table class="form01">
	<tr>
		<td><div class="nobor3"><input type="radio" name="consenso" class="nobor3">&nbsp;Do il consenso&nbsp;&nbsp;&nbsp;</div><div class="nobor3"><input type="radio" class="nobor3" name="consenso">&nbsp;Non do il consenso</div></td>
	</tr>
</table>
<br>

<!-- COMUNICAZIONE RECAPITO -->
<h3 class="verde">9. Comunica un tuo recapito</h3>
<p>Ai sensi della vigente normativa antiriciclaggio (D.Lgs. 231/07) il Cliente è obbligato a fornire alla Banca alcune dichiarazioni e informazioni.
Ti ricordiamo che il rilascio di false informazioni od omissioni comporta conseguenze anche di natura penale. Prima di procedere ti invitiamo a prendere visione dell'Informativa sul trattamento dei dati personali. I dati forniti di seguito devono ritenersi integrati (sempre per le finalità di cui alla normativa antiriciclaggio) con i dati forniti alla Banca in relazione ai rapporti bancari, finanziari e di investimento.</p>
<table class="form01">	
	<tr>
		<td class="uno">Presso</td>
		<td colspan="5"><select name="select">
		<option>-- seleziona --</option>
		<option>-----------------------</option>
		</select></td>
	</tr>
</table>

<h3 class="verde">Lorem ipsum</h3>
<table class="form01">
	<tr> 
		<td width="105" class="uno">Lorem ipsum</td>
		<td><select name="select">
		<option>-- seleziona --</option>
		<option>-----------------------</option>
		</select>
		</td>
		<td width="105" class="uno">Lorem ipsum</td>
			<td><select name="select">
			<option>-- seleziona --</option>
			<option>-----------------------</option>
			</select>
		</td>
	</tr>
		<tr> 
		<td width="105" class="uno">Lorem ipsum</td>
		<td colspan="3"><select name="select" class="extra">
		<option>-- seleziona --</option>
		<option>-----------------------</option>
		</select>
		</td>
		
	</tr>
		<tr> 
		<td width="105" class="uno">Lorem ipsum</td>
		<td><select name="select">
		<option>-- seleziona --</option>
		<option>-----------------------</option>
		</select>
		</td>
		<td width="105" class="uno">Lorem ipsum</td>
			<td><select name="select">
			<option>-- seleziona --</option>
			<option>-----------------------</option>
			</select>
		</td>
	</tr>
		<tr> 
		<td width="105" class="uno">Lorem ipsum</td>
		<td><select name="select">
		<option>-- seleziona --</option>
		<option>-----------------------</option>
		</select>
		</td>
		<td width="105" class="uno">Lorem ipsum</td>
			<td><select name="select">
			<option>-- seleziona --</option>
			<option>-----------------------</option>
			</select>
		</td>
	</tr>
	</tr>
	<tr> 
		<td colspan="4">Sei una <strong>persona politicamente esposta?</strong><br><strong>Importante:</strong> prima di rispondere <span data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">leggi la definizione</span>.<br>
		<div class="nobor3"><input type="radio" name="no" class="nobor3">No&nbsp;&nbsp;&nbsp;</div><div class="nobor3"><input type="radio" class="nobor3" name="si">Sì</div><br class="clear" />
		</td>
	</tr>

</table>	
<br>

<h3 class="verde">10. Estratti conto e contabili online, gratis</h3>
<p>Se invece vuoi ricevere i documenti in formato cartaceo, al costo di 1,35€ ciascuno, puoi farne richiesta scritta successivamente all'apertura del deposito titoli.</p>

<div class="fooform">
	<div class="fooformtop"></div>
	<div class="fooformright">
		<div><a title="Prosegui" class="btnformright" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_aol_richiesta_sez_priv_02.php"><img alt="" src="/img/ret/btn_left_ar.gif"><span>Prosegui</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
	<br class="clear">
	</div>	
<br class="clear">
</div>
