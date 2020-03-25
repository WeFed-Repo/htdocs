<script type="text/javascript">
/* CREAZIONE - Codice per creare delle select fittizie stilizzate */
addEvent(window, 'load', function() {
	createSelectRapp('mailToread', 'mailToreadVal', sceltaRapportoFunc);
	createSelectRapp('mailRead', 'mailReadVal', sceltaSottoRapportoFunc);
});

function sceltaRapportoFunc (option) {
	// Testo selezione: option.text
	// Valore selezione: option.value
	// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
}

function sceltaSottoRapportoFunc (option) {
	// Testo selezione: option.text
	// Valore selezione: option.value
	// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
}
/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script>

<!-- la funzione che segue è solo esemplificativa per poter simulare l'apertura dei messaggi con il giusto indice, passa un parametro progressivo all'url--NON USARE-->
<!--<script type="text/javascript">
$().ready(function() 
{
	var headerRow = $('.headerrow.toread');
	var headerMessaggio = headerRow.nextUntil('.headerrow');
	headerMessaggio.each(function(index) {
		//var linkMessaggio = $(this).find('.toread a.linkToMessage');
		//if(linkMessaggio.length) {
		//nProgressivo = linkMessaggio.attr('href') + '&openedMail=elementToSwitch' +  parseFloat(index);
		//linkMessaggio.attr('href',nProgressivo);
		nProgressivo = 'elementToSwitch' +  parseFloat(index);
		$(this).attr('id',nProgressivo);
		//}
	});
	linkToMessage = $('.linkToMessage');
	callTextMail();
});-->
</script>
<!--
<script type="text/javascript">
function callTextMail(){
linkToMessage.bind('click', function() {
     mailToCall = $(this).closest('.detailrow').attr('id');
	return mailToCall;
});
}
</script>-->
<!-- -fine funzione di emulazione-->


<h1>Inbox</h1>


<div class="divtabellalist">

<table border="0" class="tabellalist">
	<tr>
		<td class="on first"><a href="#1" title="Lorem ipsum">Posta in arrivo</a></td>
		<td class="off"><a href="#1" title="Lorem ipsum lorem">Posta inviata</a></td>
		<td class="off"><a href="#1" title="Lorem ipsum">Scrivi a webank</a></td>
		<td class="end">&nbsp;</td>
	</tr>
</table>
	

</div>
<div class="pecinbox">
	<span class="tabellalistright"><strong>rossi.mario@wepecmail.it</strong><br class="clear"></span><br class="clear" />
	<div class="BvTableHeaderHelp">
		<a href="#1"><img src="/wscmn/img/ico2inf_mail.gif" alt="scrivi a Webank" /></a>
		<a href="#1" class="greennounderline">Scrivi a Webank</a>
	</div>
<br class="clear" />
<!-- tabella mail-->
	<table cellspacing="0" cellpadding="0" border="0" class="activetable">
		<tr>
			<th width="82%" class="no_rightborder"><span class="bordergrey">Oggetto</span></th>
			<th width="18%" class="no_leftborder"><span class="bordergrey">Data</span></th>
		</tr>
		<tr class="headerrow toread">
			<td class="openercontainer no_rightborder">
			
			<a href="javascript:;" onclick="javascript: activetabledetail(this);" class="opener" alt="Apri"><span class="etichettaopener"><span>Da leggere</span></span>
		</a></td>
			
			<td class="no_leftborder"><span class="numcount">2 di 2</span></td>
		</tr>
		<tr class="closed">
			<td class="toread no_rightborder"><a class="linkToMessage" href="javascript:;"><span class="tabinterna alert allegati"><span class="mailtxt"><strong>Dolor sit amet adipiscing </strong>- Lorem ipsum dolor sit amet adipiscing ipsilant lorem ipsum dolor</span><span class="spanAllegati"></span><span class="boxrounded">Leggi</span></span></a></td>
			<td class="toread lastint no_leftborder"><a class="linkToMessage" href="javascript:;"><span class="tabinterna"><span class="bordergrey">30/06/2012 - 14:34</span></span></a></td>
		</tr>
		<tr class="closed">
			<td class="toread no_rightborder"><a href="javascript:;" class="linkToMessage"><span class="tabinterna"><span class="mailtxt"><strong>Dolor sit amet adipiscing </strong> - Lorem ipsum dolor sit amet adipiscing ipsilant</span><span class="spanAllegati"></span><span class="boxrounded">Leggi</span></span></a></td>
			<td class="toread lastint no_leftborder"><a href="javascript:;" class="linkToMessage"><span class="tabinterna"><span class="bordergrey">30/06/2012 - 14:34</span></span></a></td>
		</tr>
		<tr class="closed">
			<td class="toread no_rightborder"><a href="javascript:;" class="linkToMessage"><span class="tabinterna"><span class="mailtxt"><strong>Dolor sit amet adipiscing </strong> - Lorem ipsum dolor sit amet adipiscing ipsilant</span><span class="spanAllegati"></span><span class="boxrounded">Leggi</span></span></a></td>
			<td class="toread lastint no_leftborder"><a href="javascript:;" class="linkToMessage"><span class="tabinterna"><span class="bordergrey">30/06/2012 - 14:34</span></span></a></td>
		</tr>
		<tr class="closed">
			<td class="toread no_rightborder"><a href="javascript:;" class="linkToMessage"><span class="tabinterna"><span class="mailtxt"><strong>Dolor sit amet adipiscing </strong> - Lorem ipsum dolor sit amet adipiscing ipsilant</span><span class="spanAllegati"></span><span class="boxrounded">Leggi</span></span></a></td>
			<td class="toread lastint no_leftborder"><a href="javascript:;" class="linkToMessage"><span class="tabinterna"><span class="bordergrey">30/06/2012 - 14:34</span></span></a></td>
		</tr>
		<tr class="closed">
			<td class="toread no_rightborder"><a href="javascript:;" class="linkToMessage"><span class="tabinterna"><span class="mailtxt"><strong>Dolor sit amet adipiscing </strong> - Lorem ipsum dolor sit amet adipiscing ipsilant</span><span class="spanAllegati"></span><span class="boxrounded">Leggi</span></span></a></td>
			<td class="toread lastint no_leftborder"><a href="javascript:;" class="linkToMessage"><span class="tabinterna"><span class="bordergrey">30/06/2012 - 14:34</span></span></a></td>
		</tr>
		<tr id="loading" class="closed" style="display:none;height:30px;">
			<td colspan="3" class="toread"></td>
		</tr>
		<tr class="closed">
		<td colspan="3" class="morel toread">
				<div id="mailToread" class="selectRapp">
						<input type="hidden" id="mailToreadVal" class="value" name="rapporto" value="Visualizza altre 10 mail">
						<a href="javascript:;" class="inputOption inputSx">
							<span class="inputDx">
								<span class="input">Visualizza altre 10 mail</span>
							</span>
						</a>
						<div class="selectorSpacer" style="display: none;"></div>
						<div class="selector" style="display: none;">
							<a value="Visualizza altre 10 mail" href="javascript:;" class="selectorOptions first selected">
								<strong>Visualizza altre 10 mail</strong><br>
								</a>
							<a value="Visualizza altre 20 mail" href="javascript:;" class="selectorOptions" onclick="$('#loading').show();setLoadingOnObject('loading')">
								<strong>Visualizza altre 20 mail</strong><br>
								</a>
							<a value="Visualizza altre 50 mail" href="javascript:;" class="selectorOptions">
								<strong>Visualizza altre 50 mail</strong><br>
							 </a>
						</div>
					</div>
		</td>
		</tr>
		
		<tr class="headerrow read">
			<td class="openercontainer no_rightborder"><a href="javascript:;" onclick="javascript: activetabledetail(this);" class="opener" alt="Apri"><span class="etichettaopener"><span>Lette</span></span>
		</a></td>
			
			<td class="no_leftborder"><span class="numcount">10 di 100</span></td>
		</tr>
		<tr class="closed">
			
			<td class="no_rightborder"><a href="#2" class="linkToMessage"><span class="tabinterna allegati"><span class="mailtxt"><strong>Dolor sit amet adipiscing </strong>- Lorem ipsum dolor sit amet adipiscing ipsilant</span><span class="spanAllegati"></span><span class="boxrounded">Leggi</span></span></a></td>
			<td class="lastint no_leftborder"><a href="#2"><span class="tabinterna"><span class="bordergrey">30/06/2012 - 14:34</span></span></a></td>
		</tr>
		<tr class="closed">
			
			<td class="no_rightborder"><a href="#3" class="linkToMessage"><span class="tabinterna"><span class="mailtxt"><strong>Dolor sit amet adipiscing </strong>- Lorem ipsum dolor sit amet adipiscing ipsilant</span><span class="spanAllegati"></span><span class="boxrounded">Leggi</span></span></a></td>
			<td class="lastint no_leftborder"><a href="#3"><span class="tabinterna"><span class="bordergrey">30/06/2012 - 14:34</span></span></a></td>
		</tr>
		<tr class="closed">
			
			<td class="no_rightborder"><a href="#4" class="linkToMessage"><span class="tabinterna"><span class="mailtxt"><strong>Dolor sit amet adipiscing </strong>- Lorem ipsum dolor sit amet adipiscing ipsilant</span><span class="spanAllegati"></span><span class="boxrounded">Leggi</span></span></a></td>
			<td class="lastint no_leftborder"><a href="#4"><span class="tabinterna"><span class="bordergrey">30/06/2012 - 14:34</span></span></a></td>
		</tr>
		<tr class="closed">
			
			<td class="no_rightborder"><a href="#5" class="linkToMessage"><span class="tabinterna alert"><span class="mailtxt"><strong>Dolor sit amet adipiscing </strong>- Lorem ipsum dolor sit amet adipiscing ipsilant</span><span class="spanAllegati"></span><span class="boxrounded">Leggi</span></span></a></td>
			<td class="lastint no_leftborder"><a href="#5"><span class="tabinterna"><span class="bordergrey">30/06/2012 - 14:34</span></span></a></td>
		</tr>
		<tr class="closed">
		<td colspan="3" class="morel">
			<div id="mailRead" class="selectRapp">
						<input type="hidden" id="mailReadVal" class="value" name="rapporto" value="Visualizza altre 10 mail">
						<a href="javascript:;" class="inputOption inputSx">
							<span class="inputDx">
								<span class="input">Visualizza altre 10 mail</span>
							</span>
						</a>
						<div class="selectorSpacer" style="display: none;"></div>
						<div class="selector" style="display: none;">
							<a value="Visualizza altre 10 mail" href="javascript:;" class="selectorOptions first selected">
								<strong>Visualizza altre 10 mail</strong><br>
								</a>
							<a value="Visualizza altre 20 mail" href="javascript:;" class="selectorOptions">
								<strong>Visualizza altre 20 mail</strong><br>
								</a>
							<a value="Visualizza altre 50 mail" href="javascript:;" class="selectorOptions">
								<strong>Visualizza altre 50 mail</strong><br>
							 </a>
						</div>
					</div>
		
		</td>
		
		</tr>
	</table>
	

</div>
