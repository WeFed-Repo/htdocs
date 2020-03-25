<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
<title>LIBRERIE Webank</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="it" />
<meta name="script" http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="script" http-equiv="Content-Style-Type" content="text/css" />
<!-- INIZIO CODICE-->
<?php virtual ("/wscmn/css/include_css_priv.html"); ?>
<?php virtual ("/js/include_js_priv.html"); ?>
<!-- FINE CODICE-->
</head>
<body class="bgfp">
<div id="testa"> 
  <div id="page1">
  
    <!-- INIZIO CODICE-->
    <?php virtual ("/librerie/include/commons/navigazione/nav_black_priv_001.php"); ?>
    <!-- FINE CODICE-->
	
	     <!-- INIZIO CODICE-->
    <?php virtual ("/librerie/include/commons/toolbox/tool_black_priv_001_new.php"); ?>
    <!-- FINE CODICE-->
	<br class="clear" />
    <div id="content"> 
	 <!-- INIZIO CODICE-->
 	<div id="menusxc">
		<h1>Voce 3&deg; livello</h1>
		<div class="menusxcontainer">
			<a href="#"><span>Lorem ipsum dolor</span></a>
			<a href="#" class="selected"><span>Sit amet adispici<span>&nbsp;</span></span></a>
			<a href="#"><span>Lorem ipsum dolo</span></a><a href="#"><span>Lorem ipsum</span></a>
		</div>
		<div class="boxinfosx">
			<h1><span>New</span>Lorem ipsum</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipiscing <strong>elit adipiscing</strong> elit consectetur adipiscing amet elit elit.</p>
		</div>	
	</div>
	<!-- FINE CODICE--> 
	
<div id="contenuti">
	<h1>LOREM IPSUM DOLOR SIT AMET</h1>

	<!-- CRUSCOTTO -->
	<div class="flashbox flashboximg">
		<div class="left">
			<img src="http://libreriewebank/wscmn/img/ret/str_psd_bg_left.gif" alt ="" />
		</div>
		<script type="text/javascript">
			addEvent(window,"load",function(){mainContentObjectFire()});
		</script>
		<div class="middle">
			<div class="maincontentobject">
				<div id="maincontentobjectmenu"></div>
				<div id="maincontentobjectarea">
			
					<!-- PRIMA AREA -->
					<div id="guarda" class="objectarea">
						
						<!-- BLOCCO CONTENUTI GUARDA -->
							<script type="text/javascript">
								simulaBolloInit = false;
								function simulaBolloInitialize()
								{
									v2011 = $("v_2011");
									v2012 = $("v_2012");
									vTotal = $("v_total");
									simulaBolloErr = $("simulaBolloErrore");
									simulaBolloResult = $("simulaBolloRes");
									simulaBolloPMeno = $("simulaBolloMeno");
									simulaBolloPag = $("simulaBolloPagheresti");
									simulaBolloInit = true;
									
								}
								function simulaBolloClean(valore)
								{
									var trustedVal = "";
									var carattere = "";
									var allowed = "01234567890";
									for (x=0;x<valore.length;x++)
									{
										carattere = valore.substring(x,x+1);
										if (allowed.indexOf(carattere) >=0)
										{
											trustedVal = trustedVal + carattere;
										}
									}
									return trustedVal;
								}
								
								function simulaBollo()
								{
									campo = $("simulaBolloValore");
									var displayError = false;
									if (!simulaBolloInit) simulaBolloInitialize();
									trustedVal = simulaBolloClean(campo.value);
									campo.value = trustedVal;
									var menoLock = true;
									if (trustedVal.length > 0)
									{
										var valore = parseInt(trustedVal);
										if (valore<10000)
										{
											displayError = true;	
											simulaBolloPag.className="bianca";
											simulaBolloResult.style.display ="none";
										}
										if (valore>10000) menoLock = false;
										if (valore < 50000)
										{
											v2011.innerHTML = "&nbsp;";
											v2012.innerHTML = "&nbsp;";
											vTotal.innerHTML = "&nbsp;";
											simulaBolloPag.className="bianca";
											simulaBolloResult.style.display = "none";
										}
										else if (valore >= 50000 && valore <= 150000)
										{
											v2011.innerHTML = "35,00";
											v2012.innerHTML = "70,00";
											vTotal.innerHTML = "53,70 &euro;";
											simulaBolloPag.className ="";
											simulaBolloResult.style.display = "block";
										}
										else if (valore > 150000 && valore <= 500000)
										{
											v2011.innerHTML = "120,00";
											v2012.innerHTML = "240,00";
											vTotal.innerHTML = "308,70 &euro;";
											simulaBolloPag.className ="";
											simulaBolloResult.style.display ="block";

										}
										else
										{
											v2011.innerHTML = "340,00";
											v2012.innerHTML = "680,00";
											vTotal.innerHTML = "968,70 &euro;";
											simulaBolloPag.className ="";
											simulaBolloResult.style.display ="block";
										}
									}
									else
									{
										displayError = true;
										simulaBolloResult.style.display = "none";
									}
									
									if (displayError)
									{
										simulaBolloErr.style.display = "block";
									}
									else
									{
										simulaBolloErr.style.display = "none";
									}
									
									if (menoLock) 
										{
											simulaBolloPMeno.className = "disabled";
										}
									else 
										{
											simulaBolloPMeno.className = "";
										}
								}
								
								function simulaBolloSet (dir)
								{
									var valore = $("simulaBolloValore").value;
									if (valore.length > 0)
									{
										valoreInt = parseInt(valore);
										if (dir == "-") valueToAdd = -1000;
										else valueToAdd = +1000;
										valore = parseInt((valoreInt + valueToAdd)/1000) * 1000; 
										if (valore<10000) 
											{
												valore = "10000";
											}
									}
									else
									{
										valore = "10000";
									}
									$("simulaBolloValore").value = valore;
									simulaBollo();
								}
								
							</script>
							<style>
								
								#simulatoreBollo {display:block; float: left;margin: 0;height: 241px;overflow-x: hidden;padding: 0;width: 382px; padding:0; background: #fff url(/img/ret/img_simulaBollo.gif) no-repeat 0 0}
								#simulatoreBollo form {float:left;padding: 14px 0 12px 163px; margin:0;}
								a#simulaBolloMeno, a#simulaBolloPiu {margin: 0;display:block;float:left; width:23px; height: 24px; text-decoration: none; background:transparent url(/img/ret/img_simulaBollo_piu.gif) no-repeat 0 0}
								a#simulaBolloMeno:hover, a#simulaBolloPiu:hover {text-decoration:none}
								a#simulaBolloPiu {background-position: -1px 0;}
								a#simulaBolloMeno {background-image: url(/img/ret/img_simulaBollo_meno.gif);}
								a#simulaBolloMeno.disabled {background-position: 0 -24px}
								#simulaBolloValore {display: block;float: left;height: 20px;margin: 0;width: 147px; text-align: right; color: #6f8f0a; font-weight: bold; line-height: 20px; font-size:16px; font-family: Arial, serif; background: #fff url(/img/ret/img_simulaBollo_bgf.gif) repeat-x 0 0; border: solid 1px #bababa;}
								#simulaBolloMid {display: block;float: left; margin: 0;padding:0 0 9px; clear:left; width: 370px}
								#simulaBolloMid span {font-size:10px; float:left; display:block; width:80px; height: 22px; text-align:center; font-size: 14px; font-family: Arial, Serif; line-height: 22px; font-weight: bold; color: #333}
								#simulaBolloPagheresti {display: block;float: left;height: 64px; margin: 0 0 0 1px; width: 380px;}
								#simulaBolloPagheresti.bianca {background-color: #FFFFFF;}
								* html #simulaBolloPagheresti.bianca {width: 370px}
								#v_2011 {margin:31px 0 0 187px}
								* html #v_2011 {margin:31px 0 0 93px}
								#v_2012 {margin:31px 0 0 12px}
								#simulaBolloWebank{display: block;float: left;height: 49px margin: 0 0 0 1px; width: 380px;}
								#w_2011 {margin:27px 0 0 187px; clear:left; color: #6f9f0a !important;}
								* html #w_2011 {margin:27px 0 0 93px}
								#w_2012 {margin:27px 0 0 12px; color: #6f9f0a !important;}
								#simulaBolloRes { text-align: right; background: url("/img/ret/img_simulaBollo_bott.gif") no-repeat scroll left top transparent;clear: left;display: block;float: left;height: 61px;margin-left: 1px;width: 381px;}
								#simulaBolloRes span {color: #8AB10B;display: block;letter-spacing: -2px;float: right;font-family: Arial,Serif;font-size: 40px;line-height: 62px; padding: 0 21px 0 0;font-weight: bold}
								#simulaBolloErrore {float:left; display:block; width: 381px; height:40px;}
								* html #simulaBolloErrore {padding-top: 5px}
								#simulaBolloErrore p {color: #9C9C9C;font-size: 12px;font-weight: bold;padding: 20px 30px 0;text-align: center;}
								
							</style>
							<div id="simulatoreBolloIntro">
								<img src="http://libreriewebank/img/ret/img_simulaBollo_intro.jpg" usemap="#simulaMap">
								<map id="simulaMap" name="simulaMap">
									<area shape="rect" coords="66,186,320,222" href="javascript:;" onclick="$('simulatoreBollo').show();$('simulatoreBolloIntro').hide();" alt="Calcola il risparmio" title="Calcola il risparmio" />
								</map>
							</div>
							<div id="simulatoreBollo" style="display:none">
								<form autocomplete="off" action="javascript:;">
									<a href="javascript:;" id="simulaBolloMeno" onclick="simulaBolloSet('-');" title="Diminuisci di 1000 &euro;">&nbsp;</a>
									<input type="text" maxlength="15" onkeyup = "simulaBollo();" value="50000" id="simulaBolloValore"></input>
									<a href="javascript:;" id="simulaBolloPiu" onclick="simulaBolloSet('+');" title="Aumenta di 1000 &euro;">&nbsp;</a>
								</form>
								<div id="simulaBolloMid">
									<div id="simulaBolloPagheresti" class="">
										<span id="v_2011">35,00</span>
										<span id="v_2012">70,00</span>
									</div>
									<div id="simulaBolloWebank">
										<span id="w_2011">17,10</span>
										<span id="w_2012">34,20</span>
									</div>
								</div>
								<div id="simulaBolloErrore" style="display:none;">
									<p>Per importi inferiori a 10.000 euro non &egrave; possibile applicare la promozione sui bolli del deposito titoli</p>
								</div>
								<div id="simulaBolloRes" style="display:block;">
									<span id="v_total">53,70 &euro;</span>
								</div>
							</div>
							<!-- TERMINE BLOCCO CONTENUTI GUARDA -->
						
					</div>
				</div>
		
			</div>
		
			<div class="textspace">
				<p style="height:175px; clear:left;">
					Da oggi e <strong>per tutto il 2012</strong> Webank <strong>congela</strong> i <strong>bolli</strong>: un'<strong>opportunit&agrave; concreta</strong> per operare senza sentire il peso della manovra, <strong>ottimizzando</strong> la <strong>gestione</strong> del <strong>deposito titoli</strong>.
				</p>
				<p class="note" style="color:#000;">
					Il rimborso &egrave; calcolato in base a quanto indicato dalla normativa vigente. Tale importo potrebbe variare in seguito a modifiche normative o  all'entrata in vigore di regolamenti attuativi.
				</p>
			</div>
		</div>
		<div class="right">
			<img src="http://libreriewebank/wscmn/img/ret/str_psd_bg_right.gif" alt ="" />
		</div>

	</div>
	<!-- FINE CRUSCOTTO -->
	
	<p>
		Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. 
	</p>
	<p>
		Lorem ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. 
	</p>
	<p>
		Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. 
	</p>
	<p>
		Lorem ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. 
	</p>
</div>



<!-- INIZIO CODICE--> 
<?php virtual ("/librerie/include/commons/footer/foot_black_002.php"); ?>
<!-- FINE CODICE--> 
</div>
<iframe style="visibility: hidden;z-index:1999;" id="ifr" src="http://libreriewebank/img/ret/pixel_trasp.gif" frameborder="3" height="10" scrolling="no" width="10"></iframe> 	
</body>
</html>