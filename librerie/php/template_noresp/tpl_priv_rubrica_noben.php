<style type="text/css">
		@import url(/wscmn/css/priv_calendar.css);
</style>
<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>
<script type="text/javascript">	
	$(function () {
				$("#datepicker").datepicker({
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
				$("#datepicker").mask("99/99/9999");
			});
	
</script>
<h1>bonifici italia</h1>
<?php
virtual("/librerie/include/commons/navigazione/nav_black_priv_005.html");?>

<table class="text01">
	<tr>
		<td>
			<ul>
				<li>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit,</strong> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>                                             
				<li>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit,</strong> lorem ipsum dolor</li>                                             
			    <li class="tolltipclick">
					<span class="closed"><span id="documenti1" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}"><span class="uniqTooltipPos"> <a href="javascript:;"> Vestibulum aliquam dui vitae risus.</a></span>
					<span class="uniqTooltipInnerHTML">
					<p>100 Testo_semplice - Lorem ipsum sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad </p>
					</span></span></span>
				</li>
				<li>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit,</strong> lorem ipsum dolor</li>  
			</ul>
		</td>
		<td><div id="riquainfo"><h1>Lorem ipsum dolor</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p><a href="#1"><img src="/img/ret/lico1gr_vaia.gif"></a></div></td>
	</tr>
</table>
<div class="tithelp"><div class="helpleft">Dati bonifico</div><br class="clear"></div>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield">Conto di addebito</label>
				<span class="output">CC XXXXX XXXXXXXXX EUR</span>
			</div>			
			<div class="span6">	
				<label class="nomefield">IBAN ordinante</label>
				<span class="output">ITXXXXXXXXXXXXXXXXXXXXXXXXX</span>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<div class="row-fluid noMargbottom">
					<div class="span10">
						<label id="" class="nomefield">Importo*</label>
						<input type="text" name="" size="" value="" id="" class="withIco"><strong class="flRight">EUR</strong>	
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="row-fluid noMargbottom">
					<div class="span10">
						<label id="" class="nomefield">Importo massimo</label>
						<span class="output">XX.XXX.XXX &euro;</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<label id="" class="nomefield">Data esecuzione</label>
				<div class="row-fluid noMargbottom">
				    <div id="" class="span4">
						  <input type="text" class="withIco" id="datepicker" placeholder="gg/mm/aaaa" value="22/11/2013">
					</div>
				</div>
			</div>
			<div class="span6">
				<label id="" class="nomefield">Saldo disponibile al XX/XX/XXXX</label>
				<span class="output"><a href="#">XX.XXX.XXX &euro;</a></span>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<label id="" class="nomefield">Causale</label>
				 <input type="text">
			</div>
		</div>
    </div>
</div>
<div class="tithelp"><div class="helpleft">Dati beneficiario</div><br class="clear" /></div>

<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
	    <!--CASO BENEFICIARIO IN RUBRICA --> 
		
		 <!--FINE CASO BENEFICIARIO IN RUBRICA --> 
		<div class="row-fluid" id="beneficiarioEsistente" style="display:none">
			<div class="span10">
				<select><option>scegli</option><option>ITXXXXXXXXXXXXXXXXXXXXXXXXX -- NOME COGNOME - CATEGORIA</option></select>
			</div>
			<div class="span2">
				<a class="underline textinline" href="javascript:;" id="" onclick="$('#beneficiarioEsistente').hide();$('#nuovoBeneficiario').show();">nuovo beneficiario</a>
			</div>
		</div>
		<div id="nuovoBeneficiario">
			<!--CASO NUOVO BENEFICIARIO -->    
			<div class="row-fluid">
				<div class="span6">
					<label id="" class="nomefield">Nome beneficiario*</label>
					<input type="text">
				</div>
				<div class="span6">
					<label id="" class="nomefield">&nbsp;</label>
					<a class="underline textinline" href="javascript:;" id="" onclick="$('#beneficiarioEsistente').show();$('#nuovoBeneficiario').hide();">aggiungi da rubrica</a>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid noMargbottom">
						<div class="span8">
							<label id="benefiban" class="nomefield">IBAN beneficiario*</label>
							<input type="text" value="" name="">
						</div>
						<div class="span4">
							<label class="nomefield">&nbsp;</label>		
							<div><a class="flRight linkInForm" href="javascript:;" onclick="$('#fieldsNoIban').toggle()">Non hai l'IBAN?</a></div>
						</div>
					</div>
				</div>
				<div class="span6"  id="fieldsNoIban" style="display:none">		
					<div class="row-fluid noMargbottom">
					<div class="span5">
						<label id="credAcc" class="nomefield">Numero c/c*</label>
						<input type="text" maxlength="12" value="" name="">
					</div>
					<div class="span1">
						<label id="CIN" class="nomefield">CIN</label>	
						<input type="text" value=""  name="">
					</div>
					<div class="span2">
						<label id="Abi" class="nomefield ico">ABI*</label><a href=""><img src="/img/ret/ico2or_dettagliosmall.gif"></a>
						<input type="text" value="" name="abi">
					</div>
					<div class="span3">
						<label id="cab" class="nomefield ico">CAB*</label><a href=""><img src="/img/ret/ico2or_dettagliosmall.gif"></a>
						<input type="text" value="" name="cab">
					</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label id="" class="nomefield">Note</label>
					<input type="text" placeholder="lorem ipsum dolor">
				</div>
				<div class="span6">
					<span class="nomefield">&nbsp;</span>
					<label><input type="checkbox" name="" value="">inserisci beneficiario in rubrica</label>
				</div>
			</div>
		</div>
	</div>
	
</div>
<br class="clear" />
<div class="fooform">		
	<div class="fooformtop">Step <strong>1</strong> di 2</div>
	<div class="fooformright">
		<div><a title="prosegui" class="btnformright" href="javascript:vai('INVIA1')"><img src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img src="/img/ret/btn_right_ar.gif"></a></div>
	</div>	
</div>
<br class="clear" />
<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>