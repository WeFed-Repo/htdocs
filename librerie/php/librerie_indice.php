<div id="librerie">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<!-- STRUTTURE -->
				<div class="col-sm-6 col-md-3">
					<!-- STRUTTURE -->
					<h2 class="color borderlightcolor">Strutture</h2>
					<ul>
						<li><a href="/connect.php?page=strutt_priv.php">Pagina interna</a></li>
						<li><a href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_priv_placeholder.php">Pagina interna con men&ugrave;</a></li>
						<li><a href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_priv_fp_placeholder.php">Front page</a></li>
						<li><a href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_priv_full_placeholder.php">Pagine "full"</a></li>
						<li><a href="/connect.php?page=strutt_webview.php&amp;tpl=tpl_priv_full_placeholder.php">Webview</a></li>
					</ul>
					<!-- FINE STRUTTURE -->
					<!-- SET DI ICONE -->
					<h2 class="color borderlightcolor">Icone</h2>
					<ul>
						<li><a href="/connect.php?page=librerie.php&amp;pag=icone">Set icone</a></li>
						<li><a href="/connect.php?page=librerie.php&pag=icone_import_multicolor">Crea css glifi colorati</a></li>
					</ul>
					<!-- FINE SET DI ICONE -->
				</div>

				<!-- OGGETTI -->
				<div class="col-sm-6 col-md-3">
					<h2 class="color borderlightcolor">Oggetti</h2>
					<ul class="object multiline">
						<?php
						// Elenco delle tipologie di oggetti (riassunto)
						asort($tipoOggetti);
						foreach ($tipoOggetti as $key => $oggetto) {
					    ?>
						<li>
							<span class="rowname"><?php print $oggetto; ?></span>
							<a href="/connect.php?page=librerie.php&amp;pag=catalogo&amp;customer=ret&amp;type=<?php print $key; ?>" class="minilink bgcolor">new</a>
							<!-- <a href="/connect.php?page=librerie.php&amp;pag=catalogo&amp;customer=ret&amp;type=<?php print $key; ?>&amp;responsive=n" class="minilink">old</a> -->
						</li>
						<?php
						}
						?>
					</ul>
				</div>

				<!-- PAGINE -->
				<script type="text/javascript">
					$(function(){

						$(".templateconsole a.icon").click(function(){
							var btn = $(this);
							btn.hide();
							if (btn.hasClass("icon-f-row_expand")) {
								$("#pagemenu li").addClass("opened");
								$(".icon-f-row_contract").show();
							}
							else
							{
								$("#pagemenu li").removeClass("opened");
								$(".icon-f-row_expand").show();
							}
						});
						
						
					})
				</script>
				<div class="col-sm-12 col-md-6">
					<h2 class="color borderlightcolor templateconsole">Template <span id="temptotals" class="totals"></span><a href="javascript:;" class="icon icon-f-row_expand"></a><a href="javascript:;" class="icon icon-f-row_contract"></a></h2>
					<script type="text/javascript">
					$(function(){
						var liArr = $("#pagemenu");

						templates = {total:0,resp:0,noresp:0}

						var libCreateVoice = function(title,link,voices,responsive,porting){
							
							var liReturn = $("<li>");
							if (link && link.length>0) {

								var liVoice = [
									$("<a>").html(title).attr("href",link),
									$("<a>").addClass("minilink resp").attr("href",link.replace("responsive=n","responsive=y")).html("resp"),
									$("<a>").addClass("minilink fixed").attr("href",link.replace("responsive=y","responsive=y&fdeb=true")).html("fixed"),
									$("<a>").addClass("minilink porting").attr("href",link.replace("responsive=n","responsive=n&porting=true")).html("sito-port"),
									$("<a>").addClass("minilink noresp").attr("href",link.replace("responsive=y","responsive=n")).html("noresp"),
									$("<a>").addClass("minilink webview").attr("href",link.replace("strutt_priv","strutt_webview")).html("app"),
									$("<a>").addClass("minilink webview porting").attr("href",link.replace("strutt_priv","strutt_webview").replace("responsive=n","responsive=n&porting=true")).html("app-port")
								];
								var liClass = "";
								if (!responsive) {
									liClass ="noresp";
									templates.noresp += 1;
									if (porting) {
										liClass += " porting";
									}
								}
								else
								{
									templates.resp += 1;
								}
								templates.total += 1;
							}
							else
							{
								var liVoice = $("<span>").html(title);
							}
							
							var liElement = (voices && voices.length>0) ? $("<a>").addClass("opener bgcolor").append($("<i>").addClass("icon icon-arrow_down icon-1x"),$("<i>").addClass("icon icon-arrow_up icon-1x")) : $("<span>").addClass("dottie");
							if (voices && voices.length>0) {
								var liVoices = $("<ul>");
								$.each(voices,function(x,el){
									liVoices.append(libCreateVoice(el.title,el.link,el.voices,el.responsive,el.porting)); 
								});
								liReturn.append(liElement,liVoice,liVoices);
							}
							else
							{
								liReturn.append(liElement,liVoice);
							}
							return liReturn.addClass(liClass);
						}

					$.each(menuData,function(i,v){
						liArr.append(libCreateVoice(v.title,v.link,v.voices,v.responsive,v.porting));
					});
					$("#pagemenu a.opener").click(function(){
						$(this).parent("li").toggleClass("opened");
					});

					// Totali e altro
					$("#temptotals").append("tot: <strong>" + templates.total +"</strong> - resp:  <strong>" + templates.resp +"</strong> - noresp:  <strong>" + templates.noresp +"</strong>")

					});
					</script>
					<style>
					#pagemenu ul {padding: 0 0 0 35px;}
					</style>
					<ul class="accordion" id="pagemenu">
					</ul>

						
					<!-- PAGINE NON ALBERATE -->
					<style>
						.aprichiudi {float:right;  height: 25px;width: 25px;cursor: pointer;border-radius: 50%;margin: 5px 0;line-height: 27px;  padding: 0;text-align: center;text-decoration:none;}
						.aprichiudi.opened {opacity:0.5;}
						.aprichiudi i {color:#fff;}
						.aprichiudi i.icon-arrow_down,.aprichiudi.opened i.icon-arrow_up {display:block;}
						.aprichiudi.opened i.icon-arrow_down, .aprichiudi i.icon-arrow_up {display:none;}
						ul.elenco li span.title {width:100%;padding: 5px;border-bottom:#solid 1px #dedede;float:left;border-radius:9px 9px 0 0;} 
						ul.elenco li {border:solid 1px #ccc;border-radius:10px; margin:5px 0 !important;width:100%;float:left;}
						ul.elenco li a {text-decoration:none;color:#333;float:left; padding:7px !important; margin:5px 0 5px 5px;background:#eee; border:solid 1px #ddd;border-radius:5px; font-size:0.8em;}
						ul.elenco li a:hover {color:#666;background-color:#ddd; border:solid 1px #999;text-decoration:none !important}
					</style>
					<script type="text/javascript">
						$(function(){
							
							$("#aprichiudi").click(function(){
								$("#nonalberate").toggle();
								$(this).toggleClass("opened");
							});

						});
					</script>
					<h2 class="color borderlightcolor">Altre pagine <a id="aprichiudi" class="aprichiudi bgcolor" href="javascript:;"><i class="icon icon-arrow_up icon-1x"></i><i class="icon icon-arrow_down icon-1x"></i></a></h2>
					<ul class="elenco" id="nonalberate" style="display:none">
						<!-- gruppo -->
						<li><span class="title bglightcolor color">Accoglienza</span>
							<!-- elenco sottovoci (mettere le <a> di seguito, come per le vecchie librerie) -->
							<a href="/connect.php?page=strutt_accoglienza.php&responsive=y">Accoglienza</a>
							<a href="/connect.php?page=strutt_accoglienza_completa.php&responsive=y">Accoglienza (completa)</a>
							<a href="/connect.php?page=strutt_accoglienza_token.php&responsive=y">Accoglienza Token/App</a>
							
							<!-- fine elenco sottovoci -->
						</li>
						<li><span class="title bglightcolor color">Altro</span>
							<a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_fp_trading_senzaDT.php&responsive=n&liv0=3&liv1=0&liv2=0&liv3=0&fdeb=true">FP Trading senza DT</a>
							<a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_mio_patrimonio.php&responsive=y&liv0=0">Il mio patrimonio</a>
							<a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_assistente_virtuale.php&responsive=y&liv0=0">Assistente virtuale</a>
							<a href="/connect.php?page=strutt_priv.php&tpl=../template_old/tpl_priv_video_player.php&responsive=n&liv0=0&fdeb=true">Video player noresp (varie)</a>
							<a href="/connect.php?page=/template/tpl_responsive_trading_book_old.php">Trading Book (OLD)</a>
							<a onclick="openTradingBook()">Trading Book</a>
						</li>
						<!-- fine gruppo -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ESTRAZIONE PAGINE PER LIBRERIE CONVERGENZA
<script type="text/javascript">
					$(function(){
						var liArr = $("#ripro2");

						var libCreateVoice = function(title,link,voices,responsive,porting){
							

							// Pulisce e rivede il link per le librerie di convergenza
							var lArr = link && link.split("&");
							var trueLink = "";
							lArr && $.each(lArr,function(x,t){
								if (t.indexOf("tpl=")>=0) {
									trueLink = t.replace("tpl=","")
								}
							})


							var liReturn = $("<li>");
							if (trueLink && trueLink.length>0) {

								var liVoice = [
									$("<a>").html(title).attr({"href":"/template/strutt_webank.php?tpl=" + trueLink,"target":"_blank"})
								];
							}
							else
							{
								var liVoice = $("<span>").html(title);
							}
							
							if (voices && voices.length>0) {
								var liVoices = $("<ul>");
								$.each(voices,function(x,el){
									liVoices.append(libCreateVoice(el.title,el.link,el.voices,el.responsive,el.porting)); 
								});
								liReturn.append(liVoice,liVoices);
							}
							else
							{
								liReturn.append(liVoice);
							}
							return liReturn;
						}

					$.each(menuData,function(i,v){
						liArr.append(libCreateVoice(v.title,v.link,v.voices,v.responsive,v.porting));
					});
					$("#pagemenu a.opener").click(function(){
						$(this).parent("li").toggleClass("opened");
					});


					});
					</script>
					<ul class="accordion" id="ripro2">
					</ul>
 FINE ESTRAZIONE -->