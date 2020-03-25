<?php


$xxguarda2 = "";
$xxascolt2 = "";
$xxsimula2 = "";

?>
<div class="maincontentobject">
		<div id="maincontentobjectarea">
		
			<?php
			if ($tpl != "tpl_pub_guida_apertura_conto_wb.php")
			{
				if ($tpl == 'tpl_pub_piattaforme_di_trading_wb.php')
				{
				?>
				
				<div class="objectarea" id ="guarda"></div>
				<script type="text/javascript" defer="defer">		  
					var flashobject = new SWFObject("/wscmn/swf/guarda_secondo_livello.swf", "flashguarda", "382", "241", "8", "#ffffff");
					flashobject.addParam("quality", "high");		
					flashobject.addParam("wmode", "opaque");
					flashobject.addParam("FlashVars","filePath=/img/guarda_secondo_livello.jpg");
					flashobject.write("guarda");
				</script>
				
			<?php
				}
			
				if ($tpl == 'tpl_pub_virtual_tour_wb.php')
				{
				?>
					<div class="objectarea" id ="guarda"></div>
				<script type="text/javascript" defer="defer">		  
				var flashobject = new SWFObject("/wscmn/swf/videoplayer_vt.swf", "flashguarda", "406", "410", "9", "#FFFFFF");
				flashobject.addParam("quality", "high");		
				flashobject.addParam("wmode", "transparent");
				flashobject.addParam("FlashVars","videoPath=/swf/xml/videoData.xml");
				/* flashobject.addParam("FlashVars", ("myURL=" + cgi_script + "/wbOnetoone/wbblack/jsp/assicurazioniFlashConfig.jsp")); */
				flashobject.write("guarda");
				</script>
			<?php
				}			
			
				else
				{
			?>
			<!-- PRIMA AREA -->
			<div class="objectarea" id ="guarda"><embed src="/wscmn/swf/WEBANK_23.mov" width="382" height="241" autoplay="true" scale="tofit" controller="true" pluginspage="http://www.apple.com/quicktime/download/"></embed></div>
			<script type="text/javascript" defer="defer">		  
				var flashobject = new SWFObject("<?php print $player_guarda1;?>", "flashguarda", "382", "241", "9", "#000000");
				flashobject.addParam("quality", "high");		
				flashobject.addParam("wmode", "opaque");
				flashobject.addParam("allowfullscreen","true");
				flashobject.addParam("allowscriptaccess", "always");
				flashobject.addParam("FlashVars","videoLink=https://media.webank.it/vod/webank_video.flv"); 
				flashobject.addParam("FlashVars","videoLink=/swf/webank_video.flv");
				flashobject.addParam("FlashVars","videoLink=<?php print $conten_guarda1;?>");
				flashobject.write("guarda");
			</script>
			<?php
				}
			}
			else
			{
				?>
			<div class="objectarea" id ="guarda"><img src="/img/guarda_secondo_livello.jpg" alt="Lorem ipsum"></div>
				<?php
			}
			?>

			<!-- SECONDA AREA -->
			<?php
			if ($tpl != "tpl_pub_virtual_tour_wb.php")
			{
			?>
			<div class="objectarea" id ="ascolta" style="display:none;">
				<embed src="/mp3/090306-melog.mp3" width="382" height="241"></embed>
				<noembed><a href="/mp3/090306-melog.mp3">Clicca qui per scaricare il file!</a></noembed>
			</div>
			<script type="text/javascript" defer="defer">		  
				var audioobject = new  SWFObject("<?php print $player_ascolt1;?>", "flashascolta", "382", "241", "9", "#000000");
				audioobject.addParam("quality", "high");		
				audioobject.addParam("wmode", "opaque");
				audioobject.addParam("allowfullscreen","false");
				audioobject.addParam("allowscriptaccess", "always");
				audioobject.addParam("Flashvars","audioLink=<?php print $conten_ascolt1;?>")
				audioobject.write("ascolta");
			</script>
			<?php
			}
			?>
			
			<!-- TERZA AREA -->
			<?php
			if ($tpl == "tpl_pub_piattaforme_wb.php")
			{
			?>
			<div class="objectarea" id="simula" style="display:none;">
				
				<!-- BLOCCO CONTENUTI SIMULA -->
				<script type="text/javascript">
					
					simulaBolloInit = false;
					
					function simulaBolloInitialize()
					{
						v2011 = $("v_2011");
						v2012 = $("v_2012");
						v2013 = $("v_2013");
						vTotal = $("v_total");
						simulaBolloErr = $("simulaBolloErrore");
						simulaBolloResult = $("simulaBolloRes");
						simulaBolloPMeno = $("simulaBolloMeno");
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
						//Se l'utente ha scritto "qualcosa"
						if (trustedVal.length > 0)
						{
							var valore = parseInt(trustedVal);
							//messaggio valore basso
							if (valore<10000)
							{
								displayError = true;	
							}
							//Controllo pulsante meno
							if (valore>10000) menoLock = false;
							
							//Assegnazione dei valori
							if (valore<=50000)
							{
								v2011.innerHTML = "17,10";
								v2012.innerHTML = "34,20";
								v2013.innerHTML = "34,20";
								vTotal.innerHTML = "85,50 &euro;";
							}
							else if (valore > 50000 && valore <= 150000)
							{
								v2011.innerHTML = "35,00";
								v2012.innerHTML = "70,00";
								v2013.innerHTML = "230,00";
								vTotal.innerHTML = "335,00 &euro;";
							}
							else if (valore > 150000 && valore <= 500000)
							{
								v2011.innerHTML = "120,00";
								v2012.innerHTML = "240,00";
								v2013.innerHTML = "780,00";
								vTotal.innerHTML = "1.140,00 &euro;";
							}
							else
							{
								v2011.innerHTML = "340,00";
								v2012.innerHTML = "680,00";
								v2013.innerHTML = "1100,00";
								vTotal.innerHTML = "2.120,00 &euro;";

							}
						}
						else
						{
							displayError = true;
						}
						
						if (displayError)
						{
							simulaBolloErr.style.display = "block";
							simulaBolloResult.style.display = "none";
						}
						else
						{
							simulaBolloErr.style.display = "none";
							simulaBolloResult.style.display = "block";
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
						//arrotonda ai 5 euro inferiori
						var valore = $("simulaBolloValore").value;
						if (valore.length > 0)
						{
							valoreInt = parseInt(valore);
							//Incrementa o decrementa di 1000 (previo arrotondamento)
							if (dir == "-") valueToAdd = -1000;
							else valueToAdd = +1000;
							valore = parseInt((valoreInt + valueToAdd)/1000) * 1000; 
							if (valore < 10000) 
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
					#simulatoreBollo {display:block; float: left;margin: 0;height: 241px;overflow-x: hidden;padding: 0;width: 382px; padding:0; background: #fff url(/img/img_simulaBollo.gif) no-repeat 0 0}
					#simulatoreBollo form {float:left;padding: 12px 0 12px 154px; margin:0;}
					a#simulaBolloMeno, a#simulaBolloPiu {margin-right: 5px;display:block;float:left; width:24px; height: 24px; text-decoration: none; background:transparent url(/img/img_simulaBollo_piu.gif) no-repeat 0 0}
					a#simulaBolloMeno {background-image: url(/img/img_simulaBollo_meno.gif);}
					a#simulaBolloMeno.disabled {background-position: 0 -24px}
					#simulaBolloValore {display: block;float: left;height: 20px;margin-right: 5px;width: 147px; text-align: right; color: #6f8f0a; font-weight: bold; line-height: 20px; font-size:16px; font-family: Arial, serif; background: #fff url(/img/img_simulaBollo_bgf.gif) repeat-x 0 0; border: solid 1px #bababa;}
					#simulaBolloMid {display: block;float: left; margin: 0;padding:52px 0 30px; clear:left; width: 370px}
					#simulaBolloMid span {font-size:10px; float:left; display:block; width:80px; height: 22px; text-align:center; font-size: 14px; font-family: Arial, Serif; line-height: 22px; font-weight: bold; color: #333}
					#v_2011{margin:0 0 0 20px}
					* html #v_2011{margin:0 0 0 10px}
					#v_2012{margin:0 0 0 52px}
					* html #v_2012{margin:0 0 0 51px}
					#v_2013{margin:0 0 0 49px}
					* html #v_2013{margin:0 0 0 50px}
					#simulaBolloRes span {color: #8AB10B;display: block;float: left;font-family: Arial,Serif;font-size: 41px;font-weight: bold;line-height: 41px;padding-top: 36px;text-align: center; width: 385px;}
					#simulaBolloErrore {float:left; display:block; width: 385px; background-color: #fff; height:60px;}
					* html #simulaBolloErrore {padding-top: 18px}
					#simulaBolloErrore p {color: #9C9C9C;font-size: 12px;font-weight: bold;padding: 26px 30px 0;text-align: center;}
				</style>
				<div id="simulatoreBolloIntro">
					<img src="/img/img_simulaBollo_intro.jpg" usemap="#simulaMap">
					<map id="simulaMap" name="simulaMap">
						<area shape="rect" coords="46,186,335,222" href="javascript:;" onclick="$('simulatoreBollo').show();$('simulatoreBolloIntro').hide();" alt="Calcola quanto risparmi" title="Calcola quanto risparmi" />
					</map>
				</div>
				<div id="simulatoreBollo" style="display:none">
					<form autocomplete="off" action="javascript:;">
						<a href="javascript:;" id="simulaBolloMeno" onclick="simulaBolloSet('-');" class="disabled" title="Diminuisci di 1000 &euro;">&nbsp;</a>
						<input type="text" maxlength="15" onkeyup = "simulaBollo();" value="10000" id="simulaBolloValore"></input>
						<a href="javascript:;" id="simulaBolloPiu" onclick="simulaBolloSet('+');" title="Aumenta di 1000 &euro;">&nbsp;</a>
					</form>
					<div id="simulaBolloMid">
					<span id="v_2011">17,10</span>
					<span id="v_2012">34,20</span>
					<span id="v_2013">34,20</span>
					</div>
					<div id="simulaBolloErrore" style="display:none;">
						<p>Per importi inferiori a 10.000 euro non &egrave; possibile applicare la promozione sui bolli del deposito titoli</p>
					</div>
					<div id="simulaBolloRes" style="display:block;">
						<span id="v_total">85,50 &euro;</span>
					</div>
				</div>
				<!-- TERMINE BLOCCO CONTENUTI SIMULA -->
				
			</div>
			<!-- OVERLAYER -->			
			<div class="overlayer" id ="sampleoverlay">
				<!-- ESEMPIO DI OVERLAYER -->
				<div class="overlayertitle"><a href="javascript:;" onclick="closePopOverLayer('sampleoverlay');" class="chiudi">Chiudi</a></div>
				<!-- FINE ESEMPIO DI OVERLAYER -->
				<div class="overlayerbody" style="padding:2px 0 0; height: 300px; overflow: hidden; margin-top:-2px;">
					<embed height="302" width="446" wmode="opaque" quality="high" bgcolor="#FFFFFF" name="promowt" id="promowt" style="" src="/wscmn/swf/overlayer_wetrade.swf" type="application/x-shockwave-flash">
				</div>
			</div>			
			<!-- /OVERLAYER -->			
			<!--script type="text/javascript" defer="defer">		  
				//var audioobject = new  SWFObject("/wscmn/swf/ria_secondo_livello.swf", "flashsimula", "382", "241", "7", "#FFFFFF");
				//audioobject.addParam("quality", "high");		
				//audioobject.addParam("wmode", "opaque");
				//audioobject.write("simula");
				
				//addEvent(window,"load",function(){openPopOverLayer('sampleoverlay');});
			</script-->
			<?php
			}
			?>
		</div>
		<?php
			if ($tpl != "tpl_pub_virtual_tour_wb.php")
			{
			?>
		<div id="maincontentobjectmenu">
		</div>
		<?php
			}
			?>

</div>
