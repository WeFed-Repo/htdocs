<script type="text/javascript">

//inizializzazione datepicker

$(function () {
	
	$("#datepickerTool1").mask("99/99/9999");
	$("#datepickerTool1").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/WB/fe/img/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onClose: function(){
    	$('#datePickerWrapper1').modal('hide');
    }
    });
   appendDatePickerIcon('datepickerTool1');
    
	});

$(function () {
	
	$("#datepickerTool3").mask("99/99/9999");
	$("#datepickerTool3").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/WB/fe/img/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onClose: function(){
    	$('#datePickerWrapper3').modal('hide');
    }
    });
   appendDatePickerIcon('datepickerTool3');
    
	});
</script>

<h2>CW e Certificates</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="#">covered warrants</a></li>
			<li><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_responsive_ricerca_titoli_evoluta_cw_certificates.php&liv1=trading&liv2=compravendita&liv3=ricerca_titoli_evoluta&liv4=cw_e_certificates">certificates</a></li>						
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">	
		<section>
			<h4>Imposta i parametri di ricerca</h4>
			<div id="cercaSel">
				<form class="formGenerico borderFormRounded" role="form" id="form02">			
					<div class="form-group">			
						<div class="row">				
							<div class="col-xs-12 col-sm-6">
								<label class="control-label">Categoria</label>
								<select class="form-control">
									<option>tutti</option>
									<option>lorem</option>
								</select>
							</div>
							<div class="col-xs-12 col-sm-6">
								<label class="control-label">Emittente</label>
								<select class="form-control">
									<option>tutti</option>
									<option>lorem</option>
								</select>
							</div>				
						</div>
					</div>	
					<div class="form-group">
						<div class="row">				
							<div class="col-xs-12 col-sm-6">
								<label class="control-label">Categoria sottostante</label>
								<select class="form-control">
									<option>tutti</option>
									<option>lorem</option>
								</select>
							</div>									
						</div>
					</div>				
					<div class="form-group">
						<div class="row">				
							<div class="col-xs-12">
								<a data-toggle="collapse" href="#collapse1b" aria-expanded="false" aria-controls="collapse1b" href="#1" class="no-underline btn-icon collapsed">Parametri opzionali <i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i></a>
							</div>			
						</div>
					</div>
					
					<div id="collapse1b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1b">
							
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label class="control-label">Codice Isin</label>
										<input type="text" placeholder="" class="form-control clear-x">
									</div>
									<div class="col-sm-6">
										<label class="control-label">Scadenza</label>
										<div class="row">
											
											<div class="col-sm-6">
												<div class="form-inline">
												  <div class="form-group">
													  <div class="input-group">
													     <div class="input-group-addon first">Dal</div>
													     <input type="text" id="datepickerTool1" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
													     <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
													  </div>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-inline">
												 <div class="form-group">
													  <div class="input-group">
													     <div class="input-group-addon first">Al</div>
													     <input type="text" id="datepickerTool3" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
													     <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
													  </div>
													</div>
												</div> 
											</div>  
										</div>
									</div>									
								</div>
							</div>
							<div class="form-group">
								<div class="row">									
									<div class="col-sm-6">
										<label class="control-label">Strike price</label>
										<div class="row">
											
											<div class="col-sm-6">
												<div class="form-inline">
												  <div class="form-group">
													  <div class="input-group">
													     <div class="input-group-addon first">Da</div>
													     <input type="text" placeholder="" class="form-control clear-x">
													  </div>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-inline">
												 <div class="form-group">
													  <div class="input-group">
													     <div class="input-group-addon first">A</div>
													     <input type="text" placeholder="" class="form-control clear-x">
													  </div>
													</div>
												</div> 
											</div>  
										</div>
									</div>
								</div>
							</div>						
						</div>
					<div class="clearfix"></div>

					<div class="form-group">
					    <div class="row">
					      <div class="col-xs-12">
					        <div class="btn-align-right">
					          <a type="button" class="btn btn-primary" href="javascript:;" onclick="$('#cercaSel').hide();$('#cercaRisp').show();">cerca</a>
					        </div>
					      </div>
					    </div>
					</div>
				</form>
			</div>
			<div id="cercaRisp" style="display:none">
				<form class="formGenerico borderFormRounded" role="form" id="form02">
				<div class="form-group">			
					<div class="row">				
						<div class="col-xs-12 col-sm-6">
							<label class="control-label-output">Categoria</label>
							<span class="output">Tutti</span>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label class="control-label-output">Emittente</label>
							<span class="output">Tutti</span>
						</div>				
					</div>
				</div>					
				<div class="form-group">
					<div class="row">				
						<div class="col-xs-12 col-sm-6">
							<label class="control-label-output">Categoria sottostante</label>
							<span class="output">Tutti</span>
						</div>			
					</div>
				</div>		

				<div class="clearfix"></div>

				<div class="form-group">
				    <div class="row">
				      <div class="col-xs-12">
				        <div class="btn-align-right">
				          <a type="button" class="btn btn-primary" href="javascript:;" onclick="$('#cercaRisp').hide();$('#cercaSel').show();">nuova ricerca</a>
				          <a type="button" class="btn btn-primary" href="javascript:;" onclick="$('#cercaRisp').hide();$('#cercaSel').show();">modifica ricerca</a>
				        </div>
				      </div>
				    </div>
				</div>
				</form>			


				<h4>Risultati della ricerca</h4>
				<table cellspacing="0" cellpadding="0" border="0" data-sortable="true" data-sort-order="desc" data-sort-name="Descrizione" data-toggle="table" class="sortableTable" data-pagination="true" data-page-size="10">
				    <thead>
				        <tr>
				        	 <th class="right">&nbsp;</th>
				            <th class="left" data-field="Descrizione" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Descrizione</th>
				            <th class="left" data-field="Emittente" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Emittente</th>
				            <th class="right" data-field="Categoria_sottostante" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Categoria sottostante (oppure sottostante)</th>
							<th class="right" data-field="Categoria_borsa" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Categoria borsa italiana</th>			           
				            <th class="right" data-field="Scadenza" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Scad.</th>
				            <th class="right" data-field="Strike_price" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Strike price</th>
				           
				        </tr>
				    </thead>
				    <tbody>
				        <tr class="dispari">
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
															<hr>
															<li class="linkOn"><a title="Book" href="link2.htm"><span>Book</span></a></li>
															<li class="linkOff"><span title="Book">Book</span></li>
															<hr>
															<li class="linkOn"><a title="Ordine Condizionato" href="link3.htm"><span>Ordine Cond.</span></a></li>
															<li class="linkOff"><span title="Ordine Condizionato">Ordine Cond.</span></li>
															<hr>
															<li class="linkOn"><a title="Analisi Tecnica" href="link4.htm"><span>Analisi Tecnica</span></a></li>
															<li class="linkOff"><span title="Analisi Tecnica">Analisi Tecnica</span></li>
															<hr>
															<li class="linkOn"><a title="Alert" href="link5.htm"><span>Alert</span></a></li>
															<li class="linkOff"><span title="Alert">Alert</span></li>
															<hr>
															<li class="linkOn"><a title="Carry-on" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_carry.php&liv1=TR&tr2=0&tr3=0"><span>Carry-on</span></a></li>
															<li class="linkOff"><span title="Carry-on">Carry-on</span></li>
															<hr>
															<li class="linkOn"><a title="Vendi" href="link6.htm"><span>Vendi</span></a></li>
															<li class="linkOff"><span title="Vendi">Vendi</span></li>
															<hr>
															<li class="linkOn"><a title="Vendi" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_titoli_in_portafoglio.php&liv1=TR&tr2=0&tr3=0"><span>Visualizza/Vendi</span></a></li>
															<li class="linkOff"><span title="Vendi">Visualizza/Vendi</span></li>
															<hr>
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
				            <td class="left min-width"><a href="#">AKREUR3MCAP3.5P25</a></td>
				            <td class="left">BANCA AKROS</td>
				            <td class="left">EURIBOR 3M</td>
				            <td class="left">euribor cap</td>
				            <td class="right">31/03/2025</td>
				            <td class="right">3,5</td>
				            
				        </tr>
				        <tr class="pari">
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
								
				            </td>
				            <td class="left min-width"><a href="#">AKREUR3MCAP3.5P30</a></td>
				            <td class="left">BANCA AKROS</td>
				            <td class="left">EURIBOR 3M</td>
				            <td class="left">euribor cap</td>
				            <td class="right">31/03/2030</td>
				            <td class="right">3,5</td>
				            
				        </tr>
				         <tr class="dispari">
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
															<hr>
															<li class="linkOn"><a title="Book" href="link2.htm"><span>Book</span></a></li>
															<li class="linkOff"><span title="Book">Book</span></li>
															<hr>
															<li class="linkOn"><a title="Ordine Condizionato" href="link3.htm"><span>Ordine Cond.</span></a></li>
															<li class="linkOff"><span title="Ordine Condizionato">Ordine Cond.</span></li>
															<hr>
															<li class="linkOn"><a title="Analisi Tecnica" href="link4.htm"><span>Analisi Tecnica</span></a></li>
															<li class="linkOff"><span title="Analisi Tecnica">Analisi Tecnica</span></li>
															<hr>
															<li class="linkOn"><a title="Alert" href="link5.htm"><span>Alert</span></a></li>
															<li class="linkOff"><span title="Alert">Alert</span></li>
															<hr>
															<li class="linkOn"><a title="Carry-on" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_carry.php&liv1=TR&tr2=0&tr3=0"><span>Carry-on</span></a></li>
															<li class="linkOff"><span title="Carry-on">Carry-on</span></li>
															<hr>
															<li class="linkOn"><a title="Vendi" href="link6.htm"><span>Vendi</span></a></li>
															<li class="linkOff"><span title="Vendi">Vendi</span></li>
															<hr>
															<li class="linkOn"><a title="Vendi" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_titoli_in_portafoglio.php&liv1=TR&tr2=0&tr3=0"><span>Visualizza/Vendi</span></a></li>
															<li class="linkOff"><span title="Vendi">Visualizza/Vendi</span></li>
															<hr>
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
								<!--overlayer fiscalità -->
				            </td>
				            <td class="left min-width"><a href="#">AKREUR3MCAP4.25P25</a></td>
				            <td class="left">BANCA AKROS</td>
				            <td class="left">EURIBOR 3M</td>
				            <td class="left">euribor cap</td>
				            <td class="right">31/03/2025</td>
				            <td class="right">4,25</td>
				            
				        </tr>
				       
				    </tbody>
				</table>

			</div>

		</section>
	</div>
</div>	
