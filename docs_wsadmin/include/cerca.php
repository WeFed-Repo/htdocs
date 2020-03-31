<div class="wtcontent">
	<h2>Cerca cliente</h2>
	<p>
		Lorem risus turpis eu turpis enim ultricies sit porta. Ac porta, aenean nunc nisi sit, porttitor vel pulvinar dictumst parturient tortor et? Adipiscing. Adipiscing! Urna duis parturient mattis quis lacus tortor urna. Porttitor sit, porta urna, tortor. 
	</p>
	<form>		
		<div class="divtabellalist">
			<table border="0" class="tabellalist">
				<tbody><tr>
					<td class="on first"><a href="#1" title="Lorem ipsum">lorem ipsum</a></td>
					<td class="off"><a href="#1" title="Lorem ipsum lorem">lorem ipsum lorem</a></td>
					<td class="off"><a href="#1" title="Lorem ipsum">lorem ipsum</a></td>
					<td class="off"><a href="#1" title="Lorem ipsum">lorem ipsum<br>lorem ipsum</a></td>
					<td class="off"><a href="#1" title="Lorem ipsum">lorem ipsum</a></td>												
					<td class="end"> </td>
				</tr>
			</tbody></table>
		</div>
		<table class="inputtable" cellpadding="0" cellspacing="0">	
			<tr>
				<th colspan="2">Cerca per:</th>
			</tr>
			<tr>
				<td>
				<fieldset>
					<label>NDG</label>
					<input type="text" size="50"/>
				</fieldset>
				<fieldset>
					<label>Rapporto</label>
					<div class="wrapper">
						<select/>
							<option value="">Lorem</option>
							<option value="">Ipsum</option>
						</select>&nbsp;
						<input type="text" size="36">
					</div>
				</fieldset>
				</td>
				<td>
				<!-- Colonna destra -->
				<fieldset>
					<label>Rag. Sociale / Nome e Cognome</label>
					<input type="text" size="50"/>
				</fieldset>
				<fieldset>
					<label>User Id</label>
					<input type="text" size="50"/>
				</fieldset>
				<fieldset>
					<label>Cod. Fiscale / Partita Iva</label>
					<input type="text" size="50"/>
				</fieldset>
				</td>
			</tr>
		</table>
		
		<div class="buttonpanel">
			<a href="#" class="button">Cerca</a>
		</div>
	</form>
	<br class="clear">
	<script type="text/javascript">
		
		function switchDetail(aBtn)
		{
			dettagli = aBtn.parentNode.parentNode.nextSibling;
			if (dettagli.className == undefined)
				{
					do  (dettagli = dettagli.nextSibling)
					while (dettagli.className == undefined);
				}
			if (aBtn.className == "espansione")
			{
				aBtn.className = "espansione aperto";
				dettagli.className = "dettaglioespandibile aperto";
			}
			else
			{
				aBtn.className = "espansione";
				dettagli.className = "dettaglioespandibile";
			}
		}
		
	</script>
	<div class="selez_top">
			<img class="sx" src="/img/bg_selez_top_left.gif" alt="" />
			<img class="dx" src="/img/bg_selez_top_right.gif" alt="" />
			<br class="clear" />
		</div>
	<table class="resulttable" cellpadding="0" cellspacing="0">	
		<tr>
			<th></th>
			<th>Rag. Sociale / Nome</th>
			<th>User Id</th>
			<th></th>
			<th>Cod. Fiscale / P. Iva</th>
			<th>Prodotti Abilitati</th>
			<th>Info TL</th>
		</tr>
		<?php
			for($i=0;$i<20;$i++)
			{
		?>
		<tr class="espandibile">
			<td class="colonnaespansione"><a href="javascript:;" class="espansione" onclick="switchDetail(this);"></a></td>
			<td>Lorem ipsum</td>
			<td>bv<?php echo $i * 22;?>56</td>
			<td><a href="###">Vai al sito</a></td>
			<td>bngdtr45r76k7<?php echo $i * 5;?></td>
			<td><?php 
			if ($i % 2 == 0)  echo "Webank";
			else  echo "Mybusiness";
			?></td>
			<td></td>
		</tr>
		<?php 
			if ($i % 2 == 0) 
			{
		?>
		<tr class="dettaglioespandibile">
			<td colspan="7">
				<span class="titoletto">Rapporti associati</span><br>
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td colspan="2">599/123456</td>
						<td>Conto Base</td>
						<td class="tolltipclick">
							<span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti1"><span class="uniqTooltipPos"><a href="javascript:;">lorem ipsum</a></span>
							<span class="uniqTooltipInnerHTML">
							<p><a href="#" class="noarr" title="Primo link">Primo link</a><br /><a href="#" class="noarr" title="Secondo link">Secondo link</a></p>
							</span></span></span>
						</td>
						<td class="tolltipclick">
							<span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti1"><span class="uniqTooltipPos"><a href="javascript:;">lorem ipsum</a></span>
									<span class="uniqTooltipInnerHTML">
									<p><a href="#" class="noarr" title="Primo link">Primo link</a><br /><a href="#" class="noarr" title="Secondo link">Secondo link</a></p>
									</span>
								</span>
							</span>
						</td>						
					</tr>
					
					<tr class="details">
						<td class="arrowdesc">&nbsp;</td>
						<td>599/123456</td>
						<td>Conto deposito</td>
						<td class="tolltipclick" colspan="2"><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"><a href="javascript:;">lorem ipsum</a></span>
							<span class="uniqTooltipInnerHTML">
							<p><a href="#" class="noarr" title="Primo link">Primo link</a><br /><a href="#" class="noarr" title="Secondo link">Secondo link</a></p>
							</span></span></span>
						</td>
					</tr>
					<tr class="details">
						<td class="arrowdesc">&nbsp;</td>
						<td>599/123456</td>
						<td>Conto deposito</td>
						<td class="tolltipclick" colspan = "2"><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"><a href="javascript:;">lorem ipsum</a></span>
							<span class="uniqTooltipInnerHTML">
							<p><a href="#" class="noarr" title="Primo link">Primo link</a><br /><a href="#" class="noarr" title="Secondo link">Secondo link</a></p>
							</span></span></span>
						</td>
					</tr>
					<tr class="details">
						<td class="arrowdesc">&nbsp;</td>
									<td>599/123456</td>
									<td>Conto deposito</td>
									<td class="tolltipclick" colspan = "2"><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"><a href="javascript:;">lorem ipsum</a></span>
										<span class="uniqTooltipInnerHTML">
										<p><a href="#" class="noarr" title="Primo link">Primo link</a><br /><a href="#" class="noarr" title="Secondo link">Secondo link</a></p>
										</span></span></span>
									</td>
					</tr>
					<tr class="details">
						<td class="arrowdesc">&nbsp;</td>
						<td>599/123456</td>
						<td>Conto deposito</td>
						<td class="tolltipclick" colspan = "2"><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"><a href="javascript:;">lorem ipsum</a></span>
							<span class="uniqTooltipInnerHTML">
							<p><a href="#" class="noarr" title="Primo link">Primo link</a><br /><a href="#" class="noarr" title="Secondo link">Secondo link</a></p>
							</span></span></span>
						</td>
					</tr>
					<tr>
						<td colspan="2">599/123456</td>
						<td>Conto Base</td>
						<td colspan="2"><a href="###" title="">lorem ipsum</a></td>
					</tr>
					<tr>
						<td colspan="2">599/123456</td>
						<td>Conto deposito</td>
						<td colspan="2"><a href="###" title="">lorem ipsum</a></td>
					</tr>
					<tr>
						<td colspan="2">599/123456</td>
						<td>Conto Base</td>
						<td colspan="2"><a href="###" title="">lorem ipsum</a></td>
					</tr>
					<tr>
						<td colspan="2">599/123456</td>
						<td>Conto deposito</td>
						<td colspan="2"><a href="###" title="">lorem ipsum</a></td>
					</tr>
				</table>
			</td>
		</tr>
		<?php
					}
			else
					{
			?>
				<tr class="dettaglioespandibile">
							<td colspan="7">
								<span class="titoletto">Rapporti associati</span><br>
								<table cellpadding="0" cellspacing="0">
									<tr>
										<td colspan="2">599/123456</td>
										<td>Conto Base</td>
										<td colspan="2" class="tolltipclick"><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti1"><span class="uniqTooltipPos"><a href="javascript:;">lorem ipsum</a></span>
											<span class="uniqTooltipInnerHTML">
											<p><a href="#" class="noarr" title="Primo link">Primo link</a><br /><a href="#" class="noarr" title="Secondo link">Secondo link</a></p>
											</span></span></span>
										</td >						
									</tr>
									<tr class="details">
										<td >
											<table cellpadding="0" cellspacing="0">
												<tr>
													<td width="5%"class="arrowdesc">&nbsp;</td>
													<td width="25%">599/123456</td>
													<td width="25%">Conto deposito</td>
													<td class="tolltipclick" width="40%" ><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"><a href="javascript:;">lorem ipsum</a></span>
														<span class="uniqTooltipInnerHTML">
														<p><a href="#" class="noarr" title="Primo link">Primo link</a><br /><a href="#" class="noarr" title="Secondo link">Secondo link</a></p>
														</span></span></span>
													</td>
												</tr>
												<tr>
													<td class="arrowdesc">&nbsp;</td>
													<td>599/123456</td>
													<td>Conto deposito</td>
													<td class="tolltipclick"><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"><a href="javascript:;">lorem ipsum</a></span>
														<span class="uniqTooltipInnerHTML">
														<p><a href="#" class="noarr" title="Primo link">Primo link</a><br /><a href="#" class="noarr" title="Secondo link">Secondo link</a></p>
														</span></span></span>
													</td>
												</tr>
												<tr>
													<td class="arrowdesc">&nbsp;</td>
													<td>599/123456</td>
													<td>Conto deposito</td>
													<td class="tolltipclick"><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"><a href="javascript:;">lorem ipsum</a></span>
														<span class="uniqTooltipInnerHTML">
														<p><a href="#" class="noarr" title="Primo link">Primo link</a><br /><a href="#" class="noarr" title="Secondo link">Secondo link</a></p>
														</span></span></span>
														<span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"><a href="javascript:;">lorem ipsum</a></span>
														<span class="uniqTooltipInnerHTML">
														<p><a href="#" class="noarr" title="Primo link">Primo link</a><br /><a href="#" class="noarr" title="Secondo link">Secondo link</a></p>
														</span></span></span>
													</td>
												</tr>
											</table>	
										</td>						
									</tr>
									<tr>
										<td>599/123456</td>
										<td>Conto Base</td>
										<td colspan="2"><a href="###" title="">lorem ipsum</a></td>
									</tr>
									<tr>
										<td>599/123456</td>
										<td>Conto deposito</td>
										<td colspan="2"><a href="###" title="">lorem ipsum</a></td>
									</tr>
									<tr>
										<td>599/123456</td>
										<td>Conto Base</td>
										<td colspan="2"><a href="###" title="">lorem ipsum</a></td>
									</tr>
									<tr>
										<td>599/123456</td>
										<td>Conto deposito</td>
										<td colspan="2"><a href="###" title="">lorem ipsum</a></td>
									</tr>
								</table>
							</td>
						</tr>
			<?php			
					}
					?>
		<?php
			}
		?>
	</table>
	<div class="selez_bottom">
			<img class="sx" src="/img/bg_selez_bottom_left.gif" alt="" />
			<img class="dx" src="/img/bg_selez_bottom_right.gif" alt="" />
			<br class="clear" />
		</div>
</div>