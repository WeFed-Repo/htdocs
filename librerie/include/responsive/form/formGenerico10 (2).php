<script type="text/javascript">	
	$(function () {
				$("#dat1").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 1,
					//MxDate fissata solo come esempio
					maxDate: "+1M +10D",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "dd/mm/yy",
					showOtherMonths: true
					
				});
				$("#dat1").mask("99/99/9999");
			});
			
		$(function () {
				$("#dat2").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 1,
					//MxDate fissata solo come esempio
					maxDate: "+1M +10D",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "dd/mm/yy",
					showOtherMonths: true
					
				});
				$("#dat2").mask("99/99/9999");
			});
	
</script>


<div class="borderFormRounded searchFilter">
	<div class="formGeneric">
		<form>
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Lorem ipsum</label>
					<select>
						<option>lorem</option>
						<option>lorem</option>
						<option>lorem</option>
					</select>
				</div>
				<div class="span6">
					<label class="nomefield">Lorem ipsum</label>
					<select>
						<option>lorem</option>
						<option>lorem</option>
						<option>lorem</option>
					</select>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Lorem ipsum</label>
					<select>
						<option>lorem</option>
						<option>lorem</option>
						<option>lorem</option>
					</select>
				</div>
				<div class="span6">
					<label class="nomefield">Periodo</label>
					<div class="row-fluid">	
						<div class="span1">
							<label id="dataDal">dal</label>
						</div>
						<div class="span4">
							 <input type="text" name="queryDateFrom" class="withIco" id="dat1" placeholder="gg/mm/aaaa" value="22/11/2013">
						</div>
						<div class="span2">&nbsp;</div>
						<div class="span1">
							<label id="dataDal">al</label>
						</div>
						<div class="span4">	
							<input type="text" id="dat2" name="queryDateTo" class="withIco" placeholder="gg/mm/aaaa" maxlength="10" size="15" value="12/03/2013">
						</div>	
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<img title="Indietro" alt="Indietro" src="/img/ret/ico1gr_back_form.gif">
				</div>
				
			</div>
		</form>
		<div class="btnc aButtoncons"><a class="aButton" href="javascript:;"><span>lorem ipsum</span></a></div>
	</div>
</div>
