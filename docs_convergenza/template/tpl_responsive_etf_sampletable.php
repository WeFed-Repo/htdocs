<table cellspacing="0" cellpadding="0" border="0" data-sortable="true" data-sort-order="desc" data-sort-name="Descrizione" data-toggle="table" class="sortableTable" data-pagination="true" data-page-size="10">
				    <thead>
				        <tr>
				        	
				        	<th class="right">&nbsp;</th>
				            <th class="left" data-field="Descrizione" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Nome ETF</th>
				            <th class="left" data-field="Categoria_borsa" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Categoria</th>			           
				            <th class="left" data-field="Emittente" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Emittente</th>
				            <th class="right" data-field="Strike_price" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Ultimo prezzo</th>
				            <th class="left" data-field="Categoria_sottostante" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Descrizione sottostante</th>
				            <th class="right">&nbsp;</th>
				        </tr>
				    </thead>
				    <tbody>
				    <?php
				    	for ($i=1;$i<=rand(2,10);$i++) {
				    	?>
						<tr class="<?php if ($i % 2 == 1) print "dis"; ?>pari">
				        	<td class="center">
				            	<!-- ICONA OPERATIVA MEECCANISMO UGUALE NON MODIFICATO: CAMBIATO SOLO HTML E CSS e si apre in overlayer-->
									<!--
										I parametri da passare alla funziona multiLinks() sono:
											- id del LAYER MENU, vedi sotto
											- 'left, right'
											- this, lasciare cos�
											- array delle querystring da passare ai link:
												* se si passa null, il link sar� disattivo
												* se si passa una querystring, sar� accodata all'URL del link
												* se si passa 'javascript:...', verr� eseguita la funzione javascript al click
									-->
								<div class="linkTooltip" data-toggle="modal">
									<a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a>						
								</div>
								<!--overlayer icona operativa -->
								<div class="sezioneLinks2 modal fade" id="iconaOperativaMenu1_html" tabindex="-1" role="dialog" aria-labelledby="">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
												<div class="modal-header">
													<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
													<h2 class="modal-title" id="myModalLabel">Fiat chrysler automobiles - ordinary shares</h2>
												</div>
												
												<div class="body">
													<ul class="azioni">
															<li class="linkOn"><a title="C/V" href="link1.htm"><span>C/V</span></a></li>
															<li class="linkOff"><span title="C/V">C/V</span></li>
															<li class="linkOn"><a title="Book" href="link2.htm"><span>Book</span></a></li>
															<li class="linkOff"><span title="Book">Book</span></li>
															<li class="linkOn"><a title="Ordine Condizionato" href="link3.htm"><span>Ordine Cond.</span></a></li>
															<li class="linkOff"><span title="Ordine Condizionato">Ordine Cond.</span></li>
															<li class="linkOn"><a title="Analisi Tecnica" href="link4.htm"><span>Analisi Tecnica</span></a></li>
															<li class="linkOff"><span title="Analisi Tecnica">Analisi Tecnica</span></li>
															<li class="linkOn"><a title="Alert" href="link5.htm"><span>Alert</span></a></li>
															<li class="linkOff"><span title="Alert">Alert</span></li>
															<li class="linkOn"><a title="Carry-on" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_carry.php&liv1=TR&tr2=0&tr3=0"><span>Carry-on</span></a></li>
															<li class="linkOff"><span title="Carry-on">Carry-on</span></li>
															<li class="linkOn"><a title="Vendi" href="link6.htm"><span>Vendi</span></a></li>
															<li class="linkOff"><span title="Vendi">Vendi</span></li>
															<li class="linkOn"><a title="Vendi" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_titoli_in_portafoglio.php&liv1=TR&tr2=0&tr3=0"><span>Visualizza/Vendi</span></a></li>
															<li class="linkOff"><span title="Vendi">Visualizza/Vendi</span></li>
															<li class="linkOn"><a title="Dettaglio fiscale" href="#1" class="close-left" data-dismiss="modal" data-toggle="modal" data-target="#fiscalita"><span>Fiscalità</span></a></li>
															<li class="linkOff"><span title="Dettaglio fiscale">Apre un secondo overlayer Fiscalità </span></li>
														</ul>
														<div class="clear"></div>
												</div>
											
										</div>
									</div>
								</div>
								<!--overlayer fiscalità -->
								<div class="modal fade slide-right" id="fiscalita" tabindex="-1" role="dialog" aria-labelledby="">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
												<h2 class="modal-title" id="myModalLabel">Titolo</h2>
											</div>
											<div class="modal-body">
												<div class="container-fluid">
													<div class="row">
														<div class="col-xs-12">
															<h3>Sottotitolo</h3>
															<p>lorem</p>
															<a class="close close-right btn-icon" data-dismiss="modal" data-target="#iconaOperativaMenu1_html" data-toggle="modal" aria-label="Close"><i class="icon icon-arrow_left"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								
				            </td>
				            <td class="left min-width"><a href="#"><?php print  strtoupper(randomWord()); ?>3MCAP3.5P25</a></td>
				            <td class="left"><?php print  strtoupper(randomWord()); ?> 3M</td>
				            <td class="left">BANCA <?php print  strtoupper(randomWord()); ?></td>
				            <td class="right"><?php print (rand(-1000 ,1000)/100)?></td>
				            <td class="left"><?php print  randomWord(); ?> cap</td>
				            <td class="center"><a class="btn-icon" href="#"><i class="icon icon-scheda_titolo"></i></td>
				        </tr>
						<?php
				    	}
				    ?>

				        
				       
				    </tbody>
				</table>

				<p class="note">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates ad natus laboriosam. Ad omnis laboriosam fuga similique beatae voluptates recusandae, ipsa qui odit dolorem! Ratione voluptate consequuntur magni, vel illum.</p>