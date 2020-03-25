<h1>ASSOCIAZIONE TOKEN</h1><br>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</p>
<table id="tb-elencoProfili" cellspacing="0" cellpadding="0" border="0" class="dettTable">
	<thead>
		<tr>
			<th id="th-anagrafica" sort="none">Nome Cognome</th>
			<th id="th-codice" sort="none">Codice fiscale</th>
			<th id="th-utente" sort="none">Utente</th>
			<th id="th-serial" sort="none">Serial number</th>
			<th id="th-stato" sort="none">Stato</th>
			<th id="th-azione" sort="none">Azione</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>

<script type="text/javascript">

var data = [
	{
		"anagrafica": "Alessio Palermo",
		"codice": "-",
		"utente": "-",
		"serial": "XXXXXXXXXXX",
		"stato": "Disassociato",
		"azione": "<a href=\"javascript:;\" onclick=\"openPopOverLayer('layeralert1', 'floating', 5); popolaOverlayerDati(event);\"><img src='img/bus/ico1gr_associa.gif' title='associa'/></a>"
	},
	{
		"anagrafica": "Marco Marroni",
		"codice": "-",
		"utente": "-",
		"serial": "XXXXXXXXXXX",
		"stato": "Disassociato",
		"azione": "<a href=\"javascript:;\" onclick=\"openPopOverLayer('layeralert1', 'floating', 5); popolaOverlayerDati(event);\"><img src='img/bus/ico1gr_associa.gif' title='associa'/></a>"
	},
	{
		"anagrafica": "Marco Marroni",
		"codice": "-",
		"utente": "-",
		"serial": "XXXXXXXXXXX",
		"stato": "Bloccato",
		"azione": "<a href=\"javascript:;\" data-tooltip=\"chiamare lorem ipsum\"><img src='img/bus/ico1gr_bloccato.gif' title='bloccato'/></a>"
	}

];

// Moltiplico i dati per averne di pi�
var paniereTB = null;

// Crea la tabella ordinabile e paginabile
$(function () {
	paniereTB = new TableOrderer('elencoProfili', {
		data: data,
		cellsClasses: ["left", "left", "left", "left", "left", "center"]
	});
	
});
function getIndexRow(event) {
	var iconaAzione= event.target,
		row = iconaAzione.closest('tr');
	indexRow = $('#tb-elencoProfili').find('tr').index(row);
}
function popolaOverlayerDati(event) {
	$('#associazioneStep1').show();
	$('#associazioneStep2,#associazioneStep3').hide();
	var iconaAzione= event.target;
	getIndexRow(event);
	$('.anagrafica').html($(iconaAzione).closest('tr').find('.col-anagrafica').text());
	
}
function demoSetErrorBtn(event) {
	var errors = [],
		codice = $("#codice");
		if (codice.val() === '') {
				errors.push({ field: codice, text: "Lorem ipsum" });
			}
		setErrors(errors, "#codiceForm");
			if (errors.length) {
				$(errors[0].field).trigger('focus');
			}
			else {
			//simula il loading per la chiamata
			setLoadingOnObject ('#codiceForm');
			$('.loadingOverlay').css('z-index', $('.layeralert2').css('z-Index'))
			setTimeout(function(){$('associazioneStep2').hide();$('associazioneStep3').show();unsetLoadingOnObject ('#codiceForm');updateTable(event)},2000); //la chiamata va a vuon fine simulo 2 secondi di chamata
			//setTimeout(function(){unsetLoadingOnObject('#codiceForm');$('#boxNegaElPro').show()},2000);      //la chiamata NON va a vuon fine simulo 2 secondi di chamata                                                                                                                          //la chiamata NON va a vuon fine
		}
			return (!errors.length);
}
function updateTable(event){
		if((event.target).closest('a').id =='disassocia')
		{
		  $('.col-codice').eq(indexRow-1).html('-');
		  $('.col-utente').eq(indexRow-1).html('-');
		  $('.col-stato').eq(indexRow-1).html('disassociato');
		  $('.col-azione').eq(indexRow-1).html('<a href="javascript:;" onclick="openPopOverLayer(\'layeralert1\', \'floating\', 5); popolaOverlayerDati(event);"><img src="img/bus/ico1gr_associa.gif" title="associa" /></a>');
		}
		else{
			$('.col-codice').eq(indexRow-1).html($('#codice').val());
			$('.col-utente').eq(indexRow-1).html('amministratore');
			$('.col-stato').eq(indexRow-1).html('associato');
			$('.col-azione').eq(indexRow-1).html('<a href="javascript:;" onclick="getIndexRow(event);openPopOverLayer(\'layeralert1b\', \'floating\', 5); popolaOverlayerDati(event);"><img src="img/bus/ico1gr_disassocia.gif" title="disassocia"/></a>');
		
		}
	}

</script>

<!-- LAYER DI ALERT-->
<div class="layeralert2" id="layeralert1" style="display:none;">
	<div style="cursor: move;" class="head handle" onmouseover="this.style.cursor='move'; $('layeralert1').dragHandle = new Draggable('layeralert1',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="this.parentNode.parentNode.style.display='none'; unobscurateAll();"/></div>
	<div class="body">
		
		<div id="associazioneStep1">
			<p>Stai per associare il TOKEN. Pui fare une multi utenza si siete multiple utente.<br>
			Vuoi procedere con la creazione multi-utenza ?</p>
			<br class="clear" />
			<a title="annulla" class="btnformleft" href="#1" onclick="closePopOverLayer('layeralert1');"><img alt="" src="/img/bus/btn_left_bi.gif"/><span>annulla</span><img alt="" src="/img/bus/btn_right_bi.gif"/></a>
			<a title="prosegui" class="btnformright" href="javscript:;" onclick="#"><img alt="" src="/img/bus/btn_left_ar.gif"/><span>prosegui</span><img alt="" src="/img/bus/btn_right_ar.gif"/></a>
			<a title="" class="btnformright" href="javscript:;" onclick="$('associazioneStep1').hide();$('associazioneStep2').show();"><img alt="" src="/img/bus/btn_left_ar.gif"/><span>non voglio</span><img alt="" src="/img/bus/btn_right_ar.gif"/></a>
			
			<br class="clear" />
		</div>
		<div id="associazioneStep2" style="display:none">
			<p>Stai per associare il TOKEN a <span class="anagrafica"></span></p>
			<br>
			<div class="boxesito negativo" id="boxNegaElPro" style="display:none">
				<div class="middle"><span class="imgCont"></span>
					<div class="text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					</div>
				</div>
			</div>
			<form class="formGeneric" autocomplete="off" id="codiceForm">
				<div class="row-fluid">
					<div class="span6">
						<label class="nomefield">Codice Fiscale:</label>
						<input type="text" maxlength="" id="codice">
					</div>
				</div>
			</form>
			<br class="clear" />
			<a title="annulla" class="btnformleft" href="#1" onclick="closePopOverLayer('layeralert1');"><img alt="" src="/img/bus/btn_left_bi.gif"/><span>annulla</span><img alt="" src="/img/bus/btn_right_bi.gif"/></a>
			<a id="associa" title="prosegui" class="btnformright" href="javscript:;" onclick="demoSetErrorBtn(event);"><img alt="" src="/img/bus/btn_left_ar.gif"/><span>prosegui</span><img alt="" src="/img/bus/btn_right_ar.gif"/></a>
			<br class="clear" />
		</div>
		<div id="associazioneStep3" style="display:none">
			<p>Hai asociato il TOKEN all'utente <span class="anagrafica"></span></p>
			<br>
			<p>Serial number:<span>6343216873463</span></p>
			<br class="clear" />
			
			<a title="operazione completata" class="btnformright" href="javscript:;" onclick="closePopOverLayer('layeralert1');"><img alt="" src="/img/bus/btn_left_ar.gif"/><span>operazione completata</span><img alt="" src="/img/bus/btn_right_ar.gif"/></a>
			<br class="clear" />
		</div>

	</div>
	<div class="foot"></div>
</div>
<!-- FINE LAYER DI ALERT-->

<!-- LAYER DI ALERT-->
<div class="layeralert2" id="layeralert1b" style="display:none;">
	<div style="cursor: move;" class="head handle" onmouseover="this.style.cursor='move'; $('layeralert1b').dragHandle = new Draggable('layeralert1b',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="this.parentNode.parentNode.style.display='none'; unobscurateAll();"/></div>
	<div class="body">
		
		<div>
			<p>Stai per disassociare momentaneamente l'autorizzazione all'utilizzo del TOKEN per questo utente. Potrai riattivarlo in qualsiasi momento cliccando sullo stesso bottone.

Vuoi procedere con la disattivazione?
</p>
			<br class="clear" />
			<a title="annulla" class="btnformleft" href="#1" onclick="closePopOverLayer('layeralert1b');"><img alt="" src="/img/bus/btn_left_bi.gif"/><span>annulla</span><img alt="" src="/img/bus/btn_right_bi.gif"/></a>
			<a id ="disassocia" title="conferma" class="btnformright" href="javscript:;" onclick="updateTable(event);closePopOverLayer('layeralert1b');"><img alt="" src="/img/bus/btn_left_ar.gif"/><span>conferma</span><img alt="" src="/img/bus/btn_right_ar.gif"/></a>
			<br class="clear" />
		</div>
		

	</div>
	<div class="foot"></div>
</div>
<!-- FINE LAYER DI ALERT-->


