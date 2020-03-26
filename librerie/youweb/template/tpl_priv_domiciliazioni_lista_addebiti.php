<script type="text/javascript">
      $(document).ready(function(){
         $('#dataInizio,#dataFine').datepicker({ minDate: '-1Y', buttonImage: '/HT/fe/img/calendar.png', maxDate: '+1Y' });
        
      });
</script>

<div class="visible-print-block"> 
		<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
		<div class="pull-right">12/05/2017	</div>
</div>
<div class="riquadro clearfix">
	<div class="clearfix">
		<style>
			.imgSrv{
				float: none;
			}
		</style>
		<h1>				
			<div class="hidden-print hidden-xxs flag domiciliazioni">&nbsp;</div>				
 			<span>Domiciliazioni bancarie</span>		
		</h1>
		<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Domiciliazioni bancarie&pagCont=testo03')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
		<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header clearfix">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						
					</div>
				</div>
			  </div>
			</div>

	</div>
	<div class="section clearfix">
			<div class="row">
				<div class="col-xs-12">
					<div class="innerWrapperTab">
						<ul>
							<li><a href="http://youweb.webank.local/strutt_priv_new.php?pag=domiciliazioni3&lev1=pagamenti&wdg=06|02" title="Dettagli" id="dett_fin" role="button" class="dett_fin">Inserisci nuovo mandato</a></li>
							<li class="on"><a href="http://youweb.webank.local/strutt_priv_new.php?pag=domiciliazioni4&lev1=pagamenti&wdg=06|02" title="Ammortamento" id="amm_fin" role="button" class="amm_fin ">Gestione mandati</a></li>
						</ul>
					</div>
				</div> 
			</div>
			<div class="section clearfix">
				<div class="col-xs-12">
					<label class="control-label">Mandato relativo all'azienda</label><br>
					<span class="resume"> BIPIEMME VITA SPA</span>
				</div>
			</div>
			
			<div class="section clearfix">
				<h3 class="titleSection">In scadenza <a href="javascript:OpenHelp('/template/modaleCont_testo07.php')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a></h3>
				<div class="table-responsive">
					<table  class="table table-striped dataTable evident">
						<thead>
							<tr class="hover">
								<th class="sorting sorting_desc">Importo</th>
								<th class="date sorting">Data di scadenza</th>
								<th>Stato</th>
								<th>Gestione</th>
							</tr>
						</thead>
						<tbody>
							<tr role="row" class="odd">
								<td class="">100,00 &euro;</td>
								<td class="">03/05/2017 </td>
								<td class="">Addebitato</td>
								<td class="">
									<input id="annullaAddebito01" type="button" name="" value="annulla addebito" id="" class="btn" alt="" onclick="javascript:OpenHelp('template/modaleCont_testo08.php');">
									<input style="display:none" id="ripristinaAddebito01" type="button" name="" value="ripristina addebito" id="" class="btn" alt="" onclick="javascript:OpenHelp('template/modaleCont_testo09.php')">
								</td>
							</tr>
							<tr role="row" class="even">
								<td class="">100,00 &euro;</td>
								<td class="">03/05/2017 </td>
								<td class="">Addebitato</td>
								<td class="">
									<input id="annullaAddebito02" type="button" name="" value="annulla addebito" id="" class="btn" alt="">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="section clearfix">
				<h3 class="titleSection">Ricerca</h3>
				<div class="clearfix">
	
				<div class="form-field-input col-sm-12 col-xs-12">
					<label class="control-label">
						Stato
					</label>
						<div class="form-field ricerca-field">
							<div class="row">
								<div class=" col-sm-3 col-xs-12 margin-bottom-xs-10">
									<select name="" class="form-control" id="">				    	
									<option id="" selected="selected" value="AL">Tutti</option>
									<option value="Attivo">Addebitato</option>
									<option value="Inserito">Stornato</option>							
									</select>
								</div>
								<div class="col-sm-9 col-xs-12">
			                        <div  class="col-sm-3 col-xs-12 margin-bottom-xs-10">
			                           <span class="float-xs-left">Dal</span>
			                           <input type="text" name="dataInizio" size="16" value="30/01/2017" onclick="$('#intervalloPeriodo').prop('checked',true)" onchange="$('#intervalloPeriodo').prop('checked',true)" id="dataInizio" class="datepicker form-control wauto" />
			                        </div>
			                        <div class="col-sm-3 col-xs-12 margin-bottom-xs-10">
			                           <span class="float-xs-left">Al </span>
			                           <input type="text" name="dataFine" size="16" value="01/03/2017" onclick="$('#intervalloPeriodo').prop('checked',true)" onchange="$('#intervalloPeriodo').prop('checked',true)" id="dataFine" class="datepicker form-control wauto " />
			                        </div>
			                        <div class="col-sm-2 col-xs-12" id="btnIban">
										<input name="Filtra" class="btn" id="" type="button" alt="" value="Filtra">
									</div>
			                     </div>
							</div>
							
						</div>
						</div>
					</div>
			</div>


			<div class="section clearfix">
				<div class="table-responsive">
					<table  class="table table-striped dataTable accordion">
						<thead>
							<tr class="hover">
								<th class="sorting sorting_desc">Importo</th>
								<th class="date sorting">Data di scadenza</th>
								<th>Stato</th>
								<th width="20"></th>
							</tr>
						</thead>
						<tbody>
							<tr role="row" class="odd">
								<td class="">100,00 &euro;</td>
								<td class="">03/05/2017 </td>
								<td class="">Addebitato</td>
								<td><a title="espandi" role="button" aria-pressed="true" class="btnaccordion"></a></td>
							</tr>
							<tr class="detail hidden odd">
								<td colspan="4">
									<p>Lorem ipsum dolor sit amet, consectetur</p>
								</td>
							</tr>
							<tr role="row" class="even">
								<td class="">100,00 &euro;</td>
								<td class="">03/05/2017 </td>
								<td class="">Addebitato</td>
								<td><a title="espandi" role="button" aria-pressed="true" class="btnaccordion"></a></td>
							</tr>
							<tr class="detail hidden even">
								<td colspan="4">
									<p>Lorem ipsum dolor sit amet, consectetur</p>
								</td>
							</tr>
							<tr role="row" class="odd">
								<td class="">100,00 &euro;</td>
								<td class="">03/05/2017 </td>
								<td class="">Addebitato</td>
								<td><a title="espandi" role="button" aria-pressed="true" class="btnaccordion"></a></td>
							</tr>
							<tr class="detail hidden odd">
								<td colspan="4">
									<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
								</td>
							</tr>
							<tr role="row" class="even">
								<td class="">100,00 &euro;</td>
								<td class="">03/05/2017 </td>
								<td class="">Addebitato</td>
								<td><a title="espandi" role="button" aria-pressed="true" class="btnaccordion"></a></td>
							</tr>
							<tr class="detail hidden even">
								<td colspan="4">
									<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
								</td>
							</tr>
							<tr role="row" class="odd">
								<td class="">100,00 &euro;</td>
								<td class="">03/05/2017 </td>
								<td class="">Addebitato</td>
								<td><a title="espandi" role="button" aria-pressed="true" class="btnaccordion"></a></td>
							</tr>
							<tr class="detail hidden odd">
								<td  colspan="4">
									<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
								</td>
							</tr>
							<tr role="row" class="even">
								<td class="">100,00 &euro;</td>
								<td class="">03/05/2017 </td>
								<td class="">Addebitato</td>
								<td><a title="espandi" role="button" aria-pressed="true" class="btnaccordion"></a></td>
							</tr>
							<tr class="detail hidden even">
								<td  colspan="4">
									<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
								</td>
							</tr>
							<tr role="row" class="odd">
								<td class="">100,00 &euro;</td>
								<td class="">03/05/2017 </td>
								<td class="">Addebitato</td>
								<td><a title="espandi" role="button" aria-pressed="true" class="btnaccordion"></a></td>
							</tr>
							<tr class="detail hidden odd">
								<td  colspan="4">
									<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
								</td>
							</tr>
						</tbody>
					</table>
					<script>
						 $('table.accordion').find('tr').not('.detail').click(
						 	function(event) {
						 		$(this).next('tr').toggleClass('hidden');
						 		$(this).find('a.btnaccordion').toggleClass('on')
						 	}
						 )
						 $('table.accordion').find('tr').not('.detail').mouseover(
						 	function(event) {
						 		$(this).css('cursor','pointer')
						 	}
						 )

					</script>
				</div>
				<!--<div class="form-field-input col-xs-12 oCenter">
				<div class="form-field-input">	
					<div class="dataTables_paginate paging_simple_numbers">
					<span>
						<a class="current primoBlocco">
							1
						</a>
						<a href="#" class="primoBlocco">
							2
						</a>
						<a href="#" class="primoBlocco">
							3
						</a>
						<span class="paginate_ellipsis">...</span>
						<a href="#" class="ultimoBlocco">
							28
						</a>
						<a href="#" class="ultimoBlocco">
							29
						</a>
						<a href="#" class="ultimoBlocco">
							30
						</a>
					</span>
					</div>
				</div>
				</div>-->
				<div class="row">
					<div class="col-sm-12">
						<ul class="newPaginationContainer">
							<li>
								<a href="#!">
								<span class="newPaginationImg newPaginationDisable">
									<img title="Precedente" alt="Precedente" src="/HT/fe/img/icon_slide_left.png">
								</span>
								</a>
							</li>
							<li><span>1</span></li>
							<li><span>di</span>	</li>
							<li><span>3</span></li>
							<li>
								<a href="#!">
									<span class="newPaginationImg">
										<img title="Successivo" alt="Successivo" src="/HT/fe/img/icon_slide_right.png">
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="pull-right margin-bottom20">
				<div class="actions">
					<input name="indietro" class="btn btn-primary" type="submit" alt="Indietro" value="Torna ai mandati">
					<input name="dettaglio" class="btn btn-primary execute" type="submit" alt="Lista addebiti" value="dettaglio">
				</div>
			</div>
	</div>
</div>