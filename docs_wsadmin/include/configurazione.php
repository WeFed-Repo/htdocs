<h2>Gestione File configurazione</h2>
<table cellspacing="0" cellpadding="0" class="inputtable bonificict">
	<tr>
		<td>
			<fieldset>
				<label>File</label>
				<select id="idSelectedFile" onchange="javascript:loadConfiguration()">
					<option value="Seleziona" selected="selected">Seleziona</option>

					<option value="47">  webank.conf  		(jbsvi8b@wbsvil-app01)</option>

					<option value="48">  webank.conf.host  		(jbsvi8b@wbsvil-app01)</option>

					<option value="42">  webank.conf  		(jbsvi8@wbsvil-app01)</option>

					<option value="43">  webank.conf.host  		(jbsvi8@wbsvil-app01)</option>
					
				</select>
			</fieldset>
		</td>
	</tr>
</table>
<div class="selez_topb">
	<img alt="" src="/img/bg_selez_top_left.gif" class="sx">
	<img alt="" src="/img/bg_selez_top_right.gif" class="dx">
	<br class="clear">
</div>
<table cellspacing="0" cellpadding="0" class="resulttableb withForm" id="resultTable">
	<tr id="resultTableHeader">
		<th></th>
		<th>ENABLED</th>
		<th>KEY</th>
		<th>VALUE</th>
	</tr>
	<tr class="espandibile">
		<td class="colonnaespansione">
			<a onclick="switchDetail(this);" class="espansione" href="javascript:;"></a>
		</td>
		<td id="td_enabled_4821" class="coloreverde" width="20">
			<input id="enabled_4821" disabled type="checkbox" checked="checked">
		</td>
		<td>
			<input id="key_4821" disabled type="text" value="------------url">
		</td>
		<td><textarea id="value_4821" disabled>utility WeTools-----------#</textarea></td>
	</tr>
	<tr class="dettaglioespandibile">
		<td colspan="4">
			<table cellspacing="0" cellpadding="0" class="tableint">
				<tr>
					<th>ULTIMA MODIFICA</th>
					<th>UTENTE</th>
					<th>DATA INSERIMENTO</th>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td>
						<input id="lm_4821" disabled type="text" value="2013-09-06 14:34:20.0">
					</td>
					<td>
						<input id="user_4821" disabled type="text" value="bw00157">
					</td>
					<td>
						<input id="insDate_4821" disabled type="text" value="2013-09-06">
					</td>
					<td>
						<a style="display: none" id="update_4821" class="icobutton" href="javascript:updateRow('4821')">
							<img src="/img/bt_matita.gif"></a><a id="enable_4821" class="icobutton" href="javascript:enableFields('4821')">
							<img src="/img/bt_matita.gif"></a>
					</td>
					<td>
						<a class="icobutton" href="javascript:deleteRow('4821')"><img src="/img/btn_chiudi.gif"></a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr class="espandibile">
		<td class="colonnaespansione">
			<a onclick="switchDetail(this);" class="espansione" href="javascript:;"></a>
		</td>
		<td id="td_enabled_4709" class="coloreverde">
			<input id="enabled_4709" disabled type="checkbox" checked="checked">
		</td>
		<td>
			<input id="key_4709" disabled type="text" value="Auto_Preventivo">
		</td>
		<td>
			<textarea id="value_4709" disabled>https://www.zurich-connect.it/default.aspx?Target=INPreventiviConvenzione&amp;cvz=WBK&amp;tp_ve=A</textarea>
		</td>
	</tr>
	<tr class="dettaglioespandibile">
		<td colspan="4">
			<table cellspacing="0" cellpadding="0" class="tableint">
				<tr>
					<th>ULTIMA MODIFICA</th>
					<th>UTENTE</th>
					<th>DATA INSERIMENTO</th>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td>
						<input id="lm_4709" disabled type="text" value="2013-09-06 14:34:19.0">
					</td>
					<td>
						<input id="user_4709" disabled type="text" value="bw00157">
					</td>
					<td>
						<input id="insDate_4709" disabled type="text" value="2013-09-06">
					</td>
					<td>
						<a style="display: none" id="update_4709" class="icobutton" href="javascript:updateRow('4709')"><img src="/img/bt_matita.gif"></a>
						<a id="enable_4709" class="icobutton" href="javascript:enableFields('4709')"><img src="/img/bt_matita.gif"></a>
					</td>
					<td>
						<a class="icobutton" href="javascript:deleteRow('4709')"><img src="/img/btn_chiudi.gif"></a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<div class="selez_bottomb">
	<img alt="" src="/img/bg_selez_bottom_left.gif" class="sx">
	<img alt="" src="/img/bg_selez_bottom_right.gif" class="dx">
	<br class="clear">
</div>
<div class="multibuttonpanellf">
	<a href="javascript:setLoadingOnObject('#resultTable');showAddRow();" class="button"><span>ADD</span></a>
</div>
<div class="multibuttonpanellf">
	<a onclick="unsetLoadingOnObject('#resultTable');" href="javascript:;" class="button"><span>BACK</span></a>
</div>