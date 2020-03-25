<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	/* regole per simulare la responsività --- da non considerare, necessarie perchè sito responsive non è a regime*/
	#contenuti,#page1{width:100%}
	#header,#fixedtools.fixedconsoletools,#menusxc,#footer{display:none}
	
	
	/*regole per simulare la responsività*/
	.elencoSicav{box-sizing: border-box;padding:0;}
	
	.boxFpCar{box-sizing: border-box;}
	#fesFpFsCarWrapper .boxFpCar{height:auto}
	.elencoSicav li{padding-right:0;text-align:center}
	.fesFpFsDettCont{width:100%;margin:0;box-sizing: border-box;}
	.boxFpCarDett #slider-prev .bx-prev, .boxFpCarDett #slider-next .bx-next{z-index:1}
	#contenuti #fesFpFsDettBx .carFpSlideDett .divtabellatabs, #contenuti #fesFpFsDettBx .carFpSlideDett .divtabellacont{width:100%;}
	.divtabellacontText{width:90%;margin:0 auto}
	
</style>

<!-- INCLUSIONI ESTERNE -->
<script type="text/javascript" src="/wscmn/js/ret/priv_fes_fp_fs.js"></script>
<!-- FINE INCLUSIONI ESTERNE -->

<h1>titolo pagina</h1>
<img src="/img/ret/banner_fp_fs.jpg" alt="" />
<h2 class="titFpFs">societ&agrave; di gestione</h2>
	<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</strong></p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<br class="clear"/>
<!-- vetrina fondi e sicav caricata da html esterno diverso tra webank e xxx-->
<script type="text/javascript" src="/wscmn/js/jquery.bxslider.js"></script>
<?php
if ($bank=="webank")
{
?>

	<!-- regole specifiche per il carousel-->
<div id="fesFpFsCarWrapper">
		<div class="boxFpCar">
			<div id="fesFpFsBx"></div>
		</div>
		
		<div class="boxFpCarDett" style="display:none">
		<a href="javascript:;" id="closeDett"><img src="/wscmn/img/ico1gr_close_car.png" alt ="chiudi" /></a>
		<span id="slider-prev"></span><span id="slider-next"></span>

		<div class="fesFpFsDettCont">
			<div id="fesFpFsDettBx">
				<div class="carFpSlideDett">
					<h3>Titolo 1 <img src="/img/ret/tt_disp_breve.png" alt="disponibile a breve" class="dispBreve"/></h3>
					<div class="divtabellatabs">
						<table class="tabellatabs" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td class="oninizio"></td>
							<td class="on" isselected="true"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="switchTab('tabAlert','tab', 1, 2); newTabSelected(this);">Info</a></td><td class="on2b"> </td>
							<td class="off"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="newTabSelected(this);">Documentazione<br/> legale</a></td><td class="off2"> </td>
						</tr>
						</table>
					</div>
					<div class="divtabellacont">
						<div  class="divtabellacontText" style="display: block;">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum egestas nisl, quis interdum libero egestas et. 
							Aliquam viverra libero vel risus posuere et lobortis arcu bibendum. Nulla consequat suscipit viverra. vitae ante non nulla euismod posuere. Mauris commodo congue venenatis. Nam id dolor vel sem elementum plac.
							</p>
							<p>Fonte: <a href="#" class="colorBank">lorem ipsum dolor</a></p>
						
						</div>
						<div class="divtabellacontText" style="display: none;">
							<div class="mutuitrasp">
								<ul>
									<li><a href="#" class="colorBank">Allianz Global Investors Fund: Informazione chiave per l'investitore (KIID), Modulo di sottoscrizione e Allegato</a></li>
									<li><a href="#" class="colorBank">Prospetto semplificato Traguardo 2017 Cedola 4 (Informazioni generali, Informazioni specifiche fondo, Modulo di sottoscrizione)</a></li>
									<li><a href="#"  class="colorBank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
									<li><a href="#"  class="colorBank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
									<li><a href="#"  class="colorBank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
								</ul>
							</div>
						</div>
						<div class="btnc aButtoncons"><a class="aButton" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_fes_faidate_ricerca.php&codSocieta=1"><span>Compra un fondo lorem ipsum</span></a></div>
					</div>
				</div>
				<div class="carFpSlideDett">
					<h3>Titolo 2 <img src="/img/ret/tt_disp_breve.png" alt="disponibile a breve" class="dispBreve"/></h3>
					<div class="divtabellatabs">
						<table class="tabellatabs" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td class="oninizio"></td>
							<td class="on" isselected="true"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="switchTab('tabAlert','tab', 3, 2); newTabSelected(this);">Info</a></td><td class="on2b"> </td>
							<td class="off"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="newTabSelected(this);">Documentazione<br/> legale</a></td><td class="off2"> </td>
						</tr>
						</table>
					</div>
					<div class="divtabellacont">
						<div class="divtabellacontText" style="display: block;">
							<p>Lorem ipsum2 dolor sit amet, consectetur adipiscing elit. Donec bibendum egestas nisl, quis interdum libero egestas et. 
							Aliquam viverra libero vel risus posuere et lobortis arcu bibendum. Nulla consequat suscipit viverra. vitae ante non nulla euismod posuere. Mauris commodo congue venenatis. Nam id dolor vel sem elementum plac.
							</p>
							<p>Fonte: <a href="#" class="colorBank">lorem ipsum dolor</a></p>
						
						</div>
						<div class="divtabellacontText" style="display: none;">
							<div class="mutuitrasp">
								<ul>
									<li><a href="#" class="colorBank">Allianz2 Global Investors Fund: Informazione chiave per l'investitore (KIID), Modulo di sottoscrizione e Allegato</a></li>
									<li><a href="#" class="colorBank">Prospetto semplificato Traguardo 2017 Cedola 4 (Informazioni generali, Informazioni specifiche fondo, Modulo di sottoscrizione)</a></li>
									<li><a href="#"  class="colorBank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
									<li><a href="#"  class="colorBank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
									<li><a href="#"  class="colorBank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
								</ul>
							</div>
						</div>
						<div class="btnc aButtoncons"><a class="aButton" href="javascript:;"><span>Compra un fondo lorem ipsum</span></a></div>
					</div>
				</div>
				<div class="carFpSlideDett">dett3</div>
				<div class="carFpSlideDett">dett4</div>
				<div class="carFpSlideDett">dett5</div>
				<div class="carFpSlideDett">dett6</div>
				<div class="carFpSlideDett">dett7</div>
				<div class="carFpSlideDett">dett8</div>
				<div class="carFpSlideDett">dett9</div>
				<div class="carFpSlideDett">dett10</div>
				<div class="carFpSlideDett">dett11</div>
				<div class="carFpSlideDett">dett12</div>
				<div class="carFpSlideDett">dett13</div>
				<div class="carFpSlideDett">dett14</div>
				<div class="carFpSlideDett">dett15</div>
				<div class="carFpSlideDett">dett16</div>
				<div class="carFpSlideDett">dett17</div>
				<div class="carFpSlideDett">dett18</div>
				<div class="carFpSlideDett">dett19</div>
				<div class="carFpSlideDett">dett20</div>
				<div class="carFpSlideDett">dett21</div>
				<div class="carFpSlideDett">dett22</div>
				<div class="carFpSlideDett">dett23</div>
				<div class="carFpSlideDett"></div>
				<div class="carFpSlideDett">dett25</div>
				<div class="carFpSlideDett">dett26</div>
			</div>
		</div>
		</div>
		<br class="clear" />
</div>
<!--parte bottom-->

	<div class="nostraOffertaTop">
		<div class="nostraOffertaTopText hidden-xs">
			<h2>I NOSTRI STRUMENTI PER AIUTARTI A INVESTIRE</h2>
			<p>Webank ha la soluzione adatta a te grazie a diverse modalit&agrave; di investimento pensate per rispondere alle esigenze di ciascun tipo di investitore, sia esperto che ai primi passi nel mondo degli investimenti.<br>
			Scopri e prova senza impegno i nostri strumenti:</p>
		</div>
		<div class="nostraOffertaTabber outerFpFsTab">
			<div class="row no-gutter">
				<div class="col-xs-6  nostraOffertaTab innerFpFsTab">
					<div class="inner">
						<h3>Lorem ipsum</h3>
							<div class="iconeTabWrapper">
								<span class="iconeTab light"></span>
								<span class="iconeTab"></span>
							</div>
						<p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
						<div class="aButtonconsWrapper">
							<div class="aButtoncons formCenteredBtn">
								<a href="javascript:;" class="aButton"><span>lorem</span></a>
							</div>
							<div class="dettaagliArrow" style="display:none">
								<span>Dettagli</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 nostraOffertaTab innerFpFsTab">
					<div class="inner">
						<h3>Lorem ipsum</h3> 
						<div class="iconeTabWrapper">
							<span class="iconeTab"></span>
						</div>
						<p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
						<div class="aButtonconsWrapper">	
							<div class="aButtoncons formCenteredBtn">
								<a href="javascript:;" class="aButton"><span>lorem</span></a>
							</div>
							<div class="dettaagliArrow" style="display:none">
								Dettagli
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<div class="nostraOffertaContent contentFpFsTab">
		<div class="nostraOffertaInner innerContentFpFsTab" style="display: none;">
			<div class="row">
				<div class="col-sm-7 col-xs-12">
					<h3>Lorem ipsum</h3>
					<span class="iconeInner"></span>
					<p>Una soluzione semplice e immediata per investire in un solo fondo scelto da una nostra selezione tra i migliori disponibili senza rinunciare alla diversificazione che proprio i Fondi e le SICAV ti offrono.</p>
				</div>
				<div class="col-sm-5 col-xs-12">
					<ul>
						<li>Scopri la nostra Top selection</li>
						<li class="second">Scegli il fondo in cui investire</li>
						<li class="third">Sottoscrivi il fondo in un click</li>
					</ul>
				</div>
			</div>
			<div class="separator"></div>
			<div class="row">
				<div class="col-sm-7 col-xs-12">
					<h3>Lorem ipsum</h3>
					<span class="iconeInner"></span>
					<p>Una soluzione semplice e immediata per investire in un solo fondo scelto da una nostra selezione tra i migliori disponibili senza rinunciare alla diversificazione che proprio i Fondi e le SICAV ti offrono.</p>
				</div>
				<div class="col-sm-5 col-xs-12">
					<ul>
					<li>Scopri la nostra Top selection</li>
					<li class="second">Scegli il fondo in cui investire</li>
					<li class="third">Sottoscrivi il fondo in un click</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="nostraOffertaInner innerContentFpFsTab" style="display: none;">
		<div class="row">
				<div class="col-sm-7 col-xs-12">
					<h3>Lorem ipsum</h3>
					<span class="iconeInner"></span>
					<p>Una soluzione semplice e immediata per investire in un solo fondo scelto da una nostra selezione tra i migliori disponibili senza rinunciare alla diversificazione che proprio i Fondi e le SICAV ti offrono.</p>
				</div>
				<div class="col-sm-5 col-xs-12">
					<ul>
						<li>Scopri la nostra Top selection</li>
						<li class="second">Scegli il fondo in cui investire</li>
						<li class="third">Sottoscrivi il fondo in un click</li>
					</ul>
				</div>
			</div>
		
		</div>
	</div>

<?php } else	{ ?>
<?php 
	virtual ("/wscmn/html/fes_fp_fs_xxBanking.html");
?>
<?php }	?>	
<!--fine vetrina fondi e sicav caricata da html esterno diverso tra webank e xxx-->
<?php
if ($bank=="webank")
{
?>



<?php } else	{ ?>	
<div class="boxFpCar">
	<h2 class="titGeneric02 colorDark3 txtTransformUpper paddBottomMedium">Loremipsum dolor sit lorem</h2>
	<br class="clear">
	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atquexe 
	corrupti quos dolores </p>
	<a href="javascript:;" class="aButton flRight"><span class="txtTransformLower">lorem ipsum</span></a>
	<br class="clear">
</div>
<?php }	?>	
<script type="text/javascript">
var pathLibrerie = '/librerie/include/commons/ajax';
//funzione all'hover comparsa tooltip SIA PER WEBANK CHE PER XXX
fesFpFsTooltipNew = function(){ 
	loghiEl.hover(
	function() {
		var title = $(this).attr('data-description');
		$('<div id="fesFpFsTooltip">').appendTo($(this)).html(title).show().position({my: "center bottom", at: "center bottom+20", of: $(this)});
	},
	function() {
		$('#fesFpFsTooltip').html('').remove();
	}
	);
}
//funzione per apertura tab SIA PER WEBANK CHE XXX
fesFpFsTabNew = function(){ 
	var wrapperTab = $('.carFpSlideDett');
	var tabLink = wrapperTab.find('.tabellatabs a');
	wrapperTab.find('.tabellatabs a').click(function() {
		var index = wrapperTab.find('.tabellatabs a').index(this);
		var contentTab =  wrapperTab.find('.divtabellacont .divtabellacontText');
		$(this).closest('.divtabellatabs').next('.divtabellacont').find('.divtabellacontText').hide();
		contentTab.eq(index).show();
	})
}
//funzione che inizializza e gestisce il carousel di secondo livello solo per WEBANK
fesFpFsSliderDettNew = function(){


loghiEl.click(function() {
		var version = parseInt($.browser.version, 10);
		$('#fesFpFsCarWrapper .boxFpCar').fadeOut(
		{
		duration:300, 
		easing: "linear"
		});
		if (($.browser.msie && version < 9)) {$('.fesFpFsDettCont').css('visibility','hidden');} //condizionare a IE
		$('.boxFpCarDett').fadeIn(
		{
		duration:300, 
		easing: "linear",
		complete:function() {
		if (($.browser.msie && version < 9)) { $('.fesFpFsDettCont').css('visibility','visible');} //condizionare a IE
		}
		});
		startingPosition = 'undefined';
		if ($("#fesFpFsDettBx div.carFpSlideDett").length>1) {	
			sliderFPFSDett = $('#fesFpFsDettBx').bxSlider({
			touchEnabled: true,
			controls: true,
			useCSS: false,
			speed: 400,
		    infiniteLoop:false,
			hideControlOnEnd: true,
			startSlide: loghiEl.index(this),
			nextSelector: '#slider-next',
			prevSelector: '#slider-prev',
			nextText: '',
			prevText: '',
			onSlideAfter:
			function($slideElement, oldIndex, newIndex){ 
			  var currentSlideNumber = $('.carFpSlide:not(.bx-clone)').eq(sliderFPFS.getCurrentSlide()).find('.logo').length;
			  if(0 <= newIndex && newIndex <12) {startingPosition=0}
			  else if(12 <= newIndex && newIndex <24) {startingPosition=1}
			  else{startingPosition=2}
			}
			})
		}
		
	})
	//recupero parametro per innescare apertura slider
	function getUrlVar(indiceToOpen)  
	{  
	  indiceToOpen = indiceToOpen.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");  
	  var regex = new RegExp( "[\\?&]"+indiceToOpen+"=([^&#]*)" );  
	  var rMatch = regex.exec(window.location.href);  
	  if( rMatch == null )  
	  {  
		return "";  
	  } else {  
		return rMatch[1];  
		}  
	}  
	
	if (window.location.href.indexOf('fondo')!=-1)
	{
		var urlReplaced = getUrlVar("fondo").replace(/\%20/g, ' ');
		$('.carFpSlide:not(.bx-clone) a.logo[data-description="' + urlReplaced + '"]').trigger('click');
	}
	//FINE recupero parametro per innescare apertura slider
	
	$('#closeDett').click(function() {

		var version = parseInt($.browser.version, 10);
		stepN = 0;
		$('.boxFpCarDett').fadeOut(
		{
		duration:300,
		complete:function() {
			sliderFPFSDett.destroySlider();
		},
		easing: "linear"
		});
		if (($.browser.msie && version < 9)) {$('.fesFpFsDettCont').css('visibility','hidden');} //condizionare a IE

		$('#fesFpFsCarWrapper .boxFpCar').fadeIn(
		{
		duration:500, 
		step: function(stepN,fx){
		 if(stepN==0) 
		 {
		 $('#fesFpFsCarWrapper .boxFpCar .elencoSicav').css('opacity',0)

		 if(startingPosition !='undefined') {sliderFPFS.goToSlide(startingPosition)}
		 }
		 else if(stepN==1){
			$('#fesFpFsCarWrapper .boxFpCar .elencoSicav').css('opacity',1)

		 }
		 stepN++;
		},
		easing: "linear"
		

		});	
		
	})
 }

fesFpFsArrowNew = function(){
 if(!$('#arrowFpVetDett').length)
  {
    $('<img src="/wscmn/img/arrow_carousel_down.png">').attr('id','arrowFpVetDett').insertBefore($('.boxFpVetDett')).position({my: "center top", at: "center bottom+60", of: $('.logo.active').eq(0),collision:'none'})
  }
  else 
  {
    $('#arrowFpVetDett').position({
    my: "center top",
	at: "center bottom+60",
    of: $('.logo.active').eq(0),
	collision:'none',
    using: function(css, calc) {
        $('#arrowFpVetDett').animate(css, 200, "linear");
    }
	})
	
  }
 }

fesFpFsVetDettNew = function(){	
loghiEl.click(function() {
 loghiEl.removeClass('active');
 $(this).addClass('active');
 fesFpFsArrow();
 var index = loghiEl.index(this);
 var dettVetSicav =  $('.boxFpVetDett .carFpSlideDett');
 if(dettVetSicav.eq(index).is(':hidden'))
	 {
		dettVetSicav.fadeOut(300);
		dettVetSicav.eq(index).delay(300).slideDown()
	}
  
  })
  
}
loadFondiFailure = function () {
	//printLog('*** loadDataFailure: status: ' + textStatus + "\nError: " + errorThrown + "\nstatusCode: " + jqXHR.statusCode());
};
loadFondiIniziali = function () {
	var url = '/fs_lista_fondi.do',
		pathLibrerie = '/librerie/include/commons/ajax',
		AjaxUrl = (!isLib)? pathSviluppo + url : pathLibrerie + url.replace(/\.do(\?)?/i, '.php$1'),
		parameters = {};
	jqAJAXCall('post', 'json', AjaxUrl, loadFondiHtml, loadFondiFailure, parameters);
};
addHtmlFondi = function(data) {
	
	var nLoghiSlide = parseInt($('#fesFpFsBx').width()/103)*2;
	if (data.listaFondi.length< nLoghiSlide) {
		$('#fesFpFsBx').append('<div class="carFpSlide"><ul class="elencoSicav"></ul></div>');
		for(i=0; i< data.listaFondi.length; i++)
		    {
				$('.elencoSicav').append('<li><a href="javascript:;" class="logo" data-description="'+ data.listaFondi[i].description +'><img src="/wscmn/img/ret/' + data.listaFondi[i].src + '"/></a></li>');
			}
	}
	else {
		var Nslider = Math.ceil(data.listaFondi.length/nLoghiSlide);
		for(i=0; i< Nslider; i++)
		{
			$('#fesFpFsBx').append('<div class="carFpSlide"><ul class="elencoSicav"></ul></div>');
		}
		for(i=0; i< nLoghiSlide; i++)
		{
			$('.elencoSicav').append('<li><a href="javascript:;" class="logo"></a></li>');
		}
		for(i=0; i< data.listaFondi.length; i++)
		{
			$('#fesFpFsBx li a').eq(i).attr('data-description',data.listaFondi[i].description).append('<img src="/wscmn/img/ret/' + data.listaFondi[i].src + '"/>');
		}
     }
	 $('.elencoSicav li').css({
	   width: $('#fesFpFsBx').width()/nLoghiSlide*2
	 })
	
}
var loadFondiHtml = function(data) {
	if(data !== null)
	{
	addHtmlFondi(data);
	sliderFPFS = $('#fesFpFsBx').bxSlider({
	touchEnabled: true,
	controls: false,
	useCSS: false,
	speed: 400,
	onSliderLoad: function(){ 
		$('.carFpSlide').css('visibility','visible');
		loghiEl = $('.carFpSlide:not(.bx-clone) a.logo');
		fesFpFsTooltipNew() //funzione che inizializza il tooltip all'hover su ogni logo
		fesFpFsSliderDettNew() //funzione che apre e inizializza il secondo slider
	}
	});
	}
}
initFpFsPresentationNew = function(){
if($('#fesFpFsCarWrapper').length) {
	loadFondiIniziali();
}
else if($('#fesFpFsVetWrapper').length)
	{
		loghiEl = $('#fesFpFsVet a.logo');
		fesFpFsTooltip() //funzione che inizializza il tooltip all'hover su ogni logo
		fesFpFsArrow()
		fesFpFsVetDett() //funzione che inizializza e gestisce visualizzazione dettagli
	}
 fesFpFsTabNew();
}

// Carica il carousel fondi e sicav e la vetrina fondi e sicav per xxx banking
function fesFpFsStartNew()
{
	$(window).load(initFpFsPresentationNew);
	$(window).bind('resize',function(){if($('.carFpSlide').length>0 && $('.boxFpCar').is(':visible')) {sliderFPFS.destroySlider();$('.carFpSlide').remove();loadFondiIniziali()}})
}

// Attiva direttamente la scheda fondo
fesFpFsStartNew();
</script>

