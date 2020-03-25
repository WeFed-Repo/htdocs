<h1>CONFIGURATORE</h1>
<div class="aButtonconsLeft">
<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>disattiva</span></a></span>
</div><br class="clear"><br>
<div class="boxesito negativo">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<div class="row-fluid">
				<div class="span12">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis tellus.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boxesito positivo">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<div class="row-fluid">
				<div class="span12">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis tellus.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tithelp">
	<div class="helpleft">Lorem ispum</div>
</div>
<br class="clear"><br>
<div class="borderFormRounded">
		<div class="formGeneric">
			<form id="form01">
				<!--RIGA DIVISA IN DUE CAMPI -->
				<div class="row">
					<div class="col-sm-6">
						<label class="nomefield">Conto Corrente</label>
						<select id="errore1">
							<option>XXXXXXX</option>
							<option>XXXXX</option>
						</select>
					</div>
					<div class="col-sm-6">
						<label class="nomefield">Numero di telefono</label>
						<span class="output">+391234566</span>
					</div>
				</div>
				
          </form>
			<div class="aButtonconsRight">
				<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>salva</span></a></span>
			</div>
		</div>
	</div>
<br class="clear"><br>
<div class="boxesito positivo" id="massSalvati" style="display:none">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<div class="row-fluid">
				<div class="span12">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis tellus.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boxesito negativo" id="massErrore" style="display:none">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<div class="row-fluid">
				<div class="span12">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis tellus.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tithelp">
	<div class="helpleft">Massimali</div>
</div>
<br class="clear"><br>
<div class="borderFormRounded" id="prevenConfP2P">
	<div class="configuratore">
			
			<div class="preventivatoreMiddle">
				<div class="sliderWrapper">
					<strong class="titoloSlider">Transizione</strong>
					<div id="confP2PSliderTransizione"  class="slider">
						<div id="prevenHandle" class="handle"></div>
						<a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"><span class="confVal" id="confVal1"></span></a>
					</div>
					<div class="sliderVal p2pFirst">0</div>
					<div class="sliderVal p2pLast1"></div>
				</div>
				
				<div class="sliderWrapper">
					<strong class="titoloSlider">Giornaliero</strong>
					<div id="confP2PSliderGiornaliero"  class="slider">
						<div id="prevenHandle" class="handle"></div>
						<a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"><span class="confVal" id="confVal2"></span></a>
					</div>
					<div class="sliderVal p2pFirst">0</div>
					<div class="sliderVal p2pLast2"></div>
				</div>
				<div class="sliderWrapper">
					<strong class="titoloSlider">Mensile</strong>
					<div id="confP2PSliderMensile"  class="slider">
						<div id="prevenHandle" class="handle"></div>
						<a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"><span class="confVal" id="confVal3"></span></a>
					</div>
					<div class="sliderVal p2pFirst">0</div>
					<div class="sliderVal p2pLast3"></div>
				</div>
			</div>
	</div>
	<br class="clear"><br>
	<div class="aButtonconsLeft">
		<span class="btnc"><a class="aButtonClear" href="javascript:;" id="resetImpo"><span>annulla</span></a></span>
	</div>
	<div class="aButtonconsRight">
		<span class="btnc"><a class="aButton" href="javascript:;" id="sendConfiguratore"><span>salva</span></a></span>
	</div>
</div>

<script type="text/javascript">
/* FUNZIONE DI SIMULAZIONE CHIAMATE*/
$(function(){
	var loadDatiConf = function () {
		var url = '/PtoP.do',
		pathLibrerie = '/librerie/include/commons/ajax',
		AjaxUrl = (!isLib)? pathSviluppo + url : pathLibrerie + url.replace(/\.do(\?)?/i, '.php$1'),
		parameters = {};
		jqAJAXCall('post', 'json', AjaxUrl, confPtoPsucc, confPtoPInsucc, parameters);
	}
	var confPtoPInsucc = function(data){
		alert('si &egrave; verificato un errore tecnico');
	}
	var confPtoPsucc = function(data) {
	if(data !== null)
	{
	var confP2PSlider = $("#confP2PSliderTransizione").slider ({
		orientation: "horizontal",
		min: 0,
		max: data.P2PConf[0].maxsp,
		value: data.P2PConf[0].defaultsp,
		step: 10,
		create: function(event, ui) {
			$('.p2pLast1').html(parseInt(data.P2PConf[0].maxsp));
			$('#confVal1').html(parseInt(data.P2PConf[0].defaultsp));
		},
		slide: function(event,ui) {
		   $('#confVal1').text(ui.value);
		},
		change :  function(event,ui) {
			$('#confVal1').text(ui.value);
		}
		
	})
	var confP2PSlider2 = $("#confP2PSliderGiornaliero").slider ({
		orientation: "horizontal",
		min: 0,
		max: data.P2PConf[0].maxg,
		value: data.P2PConf[0].defaultg,
		step: 10,
		create: function(event, ui) {
			$('.p2pLast2').html(parseInt(data.P2PConf[0].maxg));
			$('#confVal2').html(parseInt(data.P2PConf[0].defaultg));
		},
		slide: function(event,ui) {
		  $('#confVal2').text(ui.value);
		},
		change :  function(event,ui) {
			$('#confVal2').text(ui.value);
		}
	})
	var confP2PSlider3 = $("#confP2PSliderMensile").slider ({
		orientation: "horizontal",
		min: 0,
		max: data.P2PConf[0].maxm,
		value: data.P2PConf[0].defaultm,
		step: 10,
		create: function(event, ui) {
			$('.p2pLast3').html(parseInt(data.P2PConf[0].maxm));
			$('#confVal3').html(parseInt(data.P2PConf[0].defaultm));
		},
		slide: function(event,ui) {
		  $('#confVal3').text(ui.value);
		},
		change :  function(event,ui) {
			$('#confVal3').text(ui.value);
		}
	})
	}
	}
	
	$('#resetImpo').bind('click',function() {loadDatiConf()})
	$('#sendConfiguratore').bind('click',function() {sendConf()})
	
	var sendConf = function() {
		var url = '/PtoP.do',
		pathLibrerie = '/librerie/include/commons/ajax',
		AjaxUrl = (!isLib)? pathSviluppo + url : pathLibrerie + url.replace(/\.do(\?)?/i, '.php$1'),
		transImp = $('#confVal1').html();
		giornImp = $('#confVal2').html();
		mensImp = $('#confVal3').html();
		parameters = {
			"call": "PtoP.do",
			"service": "WEBANK",
			"impostasp": transImp,
			"impostag": giornImp,
			"impostam": mensImp
		};
		
		jqAJAXCall('post', 'json', AjaxUrl, aggPtoPsucc, aggPtoPInsucc, parameters);
	}
	var aggPtoPInsucc = function(data){
		$('#massErrore').show();
	}
	var aggPtoPsucc = function(data) {
	   $('#massSalvati').show();
	}
	
	loadDatiConf();
	
})
</script>

