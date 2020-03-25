<div id="menu">
	<ul>
		<?php
		if($strutt != "nonavig")
			{
		?>
		<li class="buttonhome">
		<a href="/connect.php?page=str_home_pub_wb.php" class="button"><span>Home</span></a>
		<span class="breadcrumb"><?php if (strlen($breadcrumblevel1)>0) print "/ ".$breadcrumblevel1; ?><?php if ( strlen($breadcrumblevel2)> 0) print " / ".$breadcrumblevel2; ?><?php if ( strlen($breadcrumblevel3)> 0) print " / ".$breadcrumblevel3; ?></span></li>
			<?php
			if($menuallprod !="nonallprod")
				{
			?>
		
		<li class="producthomebutton" id="menu_product"><a href="javascript:;" class="button" rel="nofollow"><span>Tutti i prodotti</span></a>
			<div class="productmenu">
				<div class="productcatalog" id="menu_productCatalog">
				
				<!-- IL CONTO -->
				<div class="productcatalogblock">
						<ul class="productdetails">
							<li><span>Il conto</span>
								<ul>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_caratteristiche_conto_wb.php" title="Caratteristiche e condizioni conto">Caratteristiche e condizioni conto</a></li>
									<li><a href="#1" title="Carte di credito e ricaricabili">Carte di credito e ricaricabili</a></li>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_guida_apertura_conto_wb.php" title="Guida all'apertura del conto">Guida all'apertura del conto</a></li>
									<li><a href="#1" title="Aprilo subito">Aprilo subito</a></li>
								</ul>
							</li>
						</ul>
						<div class="primopiano">
							<div class="primopianotop"></div>
							<div class="primopianobody">
								<span>In primo piano</span><img src="/img/img_or_primopiano.gif" alt="In primo piano" />
								<ul>
									<li><a href="#">Conto Webank</a> <span>il conto con il deposito</span></li>
								</ul>
							</div>
						</div>
				</div>
					<div class="productcatalogseparator"><div class="topper"></div></div>
					
					<!-- IL TRADING -->
					<div class="productcatalogblock">
						<ul class="productdetails">
							<li><span>Il trading</span>
								<ul>
									<li>Fare trading con WeBank</li>
									<li>Mercati</li>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_strumenti_finanziari_wb.php" title="Strumenti finanziari">Strumenti finanziari</a></li>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_piattaforme_wb.php" title="Piattaforme">Piattaforme</a></li>
									<li>Servizi evoluti</li>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_costi_commissioni_wb.php" title="Costi e Commissioni">Costi e Commissioni</a></li>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_tradingteam_wb.php" title="Trading team">Trading team</a></li>
									<!--<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_corsi_wb.php" title="Corsi e Eventi">Corsi e Eventi</a></li>-->
									
								</ul>
							</li>
						</ul>

						<div class="primopiano">
							<div class="primopianotop"></div>
							<div class="primopianobody">
								<span>In primo piano</span><img src="/img/img_or_primopiano.gif" alt="" />
								<ul>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_t3_wb.php" title="T3">T3</a></li>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_scheda_evento_wb.php" title="Mechanica 2011">Mechanica 2011</a></li>
									<!--li><a href="#">Best Execution</a></li>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_trading_desk_pro_wb.php" title="Trading Desk Pro">Trading Desk Pro</a><span>Lorem ipsum</span></li>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_tcube_wb.php" title="T-Cube">T-Cube</a></li>
									<li><a href="#">Short selling</a></li-->
								</ul>
							</div>
						</div>
					</div>
					<div class="productcatalogseparator"><div class="topper"></div></div>
					
					<!-- INVESTIMENTI -->
					<div class="productcatalogblock">
						<ul class="productdetails">
							<li><span>Gli investimenti</span>
								<ul>
									<li><a href="#1" title="Prodotti di investimento">Prodotti di investimento</a></li>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_costi_commissioni_fondi_sicav_wb.php" title="Costi e commissioni">Costi e commissioni</a></li>
									<li><a href="#1" title="Guida pratica ai tuoi investimenti">Guida pratica ai tuoi investimenti</a></li>
								</ul>
							</li>
						</ul>
						<div class="primopiano">
							<div class="primopianotop"></div>
							<div class="primopianobody">
								<span>In primo piano</span><img src="/img/img_or_primopiano.gif" alt="In primo piano" title="In primo piano" />
								<ul>
									<li><a href="#">Deposito e linee vincolate</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="productcatalogseparator"><div class="topper"></div></div>
					
					<!-- I FINANZIAMENTI -->
					<div class="productcatalogblock">
						<ul class="productdetails">
							<li><span>I finanziamenti</span>
								<ul>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_mutui_wb.php" title="Mutui">Mutui</a></li>
									<li><a href="#1" title="Prestiti e fidi">Prestiti e fidi</a></li>
								</ul>
							</li>
						</ul>
						<div class="primopiano">
							<div class="primopianotop"></div>
							<div class="primopianobody">
								<span>In primo piano</span><img src="/img/img_or_primopiano.gif" alt="In primo piano" />
								<ul>
									<li><a href="#">Prodotto_2</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="productcatalogseparator"><div class="topper"></div></div>
					
					
					<!-- LE ASSICURAZIONI -->
					<div class="productcatalogblock">
						<ul class="productdetails">
							<li><span>Le assicurazioni</span>
								<ul>
									<li><a href="#1" title="Prodotti assicurativi">Prodotti assicurativi</a></li>
									<li><a href="#1" title="I nostri partner assicurativi">I nostri partner assicurativi</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!--div class="primopiano">
							<div class="primopianotop"></div>
							<div class="primopianobody">
								<span>In primo piano</span><img src="img/img_or_primopiano.gif" alt="" />
								<ul>
									<li><a href="#"></a></li>
								</ul>
							</div>
						</div-->
					
			        
					
					<div class="productcatalogseparator"><div class="topper"></div></div>
					<!-- NUOVA AREA EVENTI -->
					<div class="productcatalogblock">
						<ul class="productdetails">
							<li><span>Nuova area eventi</span>
								<ul>
									<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_area_eventi_aree_wb.php" title="lorem ipsum dolor">area eventi uno</a></li>
									<li><a href="#1" title="lorem ipsum dolor">lorem ipsum dolor</a></li>
									<li><a href="#1" title="lorem ipsum dolor">lorem ipsum dolor</a></li>
								</ul>
							</li>
						</ul>
					</div>
					
					
					<!-- OFFERTA BUSINESS -->
					<!--
					<div class="productcatalogblock">
						<ul class="productdetails">
							<li><span>L'offerta business</span>
								<ul>
									<li><a href="#1" title="Caratteristiche offerta business">Caratteristiche offerta business</a></li>
									<li><a href="#1" title="Guida all'attivazione conto mybusiness">Guida all'attivazione conto mybusiness</a></li>
									<li><a href="#1" title="Aprilo subito">Aprilo subito</a></li>
								</ul>
							</li>
						</ul>
						<div class="primopiano">
							<div class="primopianotop"></div>
							<div class="primopianobody">
								<span>In primo piano</span><img src="/img/img_or_primopiano.gif" alt="In primo piano" />
								<ul>
									<li><a href="#" title="Conto Mybusiness">Conto Mybusiness</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				-->
			</div>
				
				<div class="productmenufooter">
					<ul>
						<li><span>I servizi al tuo servizio</span>
						<ul>
							<li class="first"><a href="#" title="Trasloco Webank">Trasloco Webank</a></li>
							<li><a href="#" title="Assegni a casa tua">Assegni a casa tua</a></li>
							<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_risponde_webank_wb.php" title="Sportello telefonico">Sportello telefonico</a></li>
							<li><a href="#" title="Estratto conto e contabili online">Estratto conto e contabili online</a></li>
							<li><a href="#" title="Supporto alla gestione del conto">Supporto alla gestione del conto</a></li>
							<li><a href="#" title="Webank mobile">Webank mobile</a></li>
							<li><a href="#" title="Programma punti">Programma punti</a></li>
						</ul>
						</li>
					</ul>
				</div>
			</div>
		</li>
		<?php
			}
		?>
		<?php
			}
		?>
		
	</ul>
	
	<?php
		if($tpl == "tpl_pub_promowow.php")
			{
		?>
		<h2><img src="/img/tt_next3.gif" /></h2>
		<?php
			}
		if($tpl == "tpl_pub_campagna_conto.php")
			{
		?>
		<h2><img src="/img/tt_webank_ti_conviene.gif" /></h2>
		<?php
			}
		if($tpl == "tpl_pub_homelanding_calc.php")
			{
		?>
		<!--h2><img src="/img/tt_webank_ti_conviene.gif" /></h2-->
		<h2><img src="/img/tt_banca_eccezionale.gif" /></h2>
		<?php
			}
		?>
</div>