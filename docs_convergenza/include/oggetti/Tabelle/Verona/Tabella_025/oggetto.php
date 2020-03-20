<script>
	$(document).ready(function(e) {
		if (isMobile()) {
			$("#tableListaAdeguataVerifica").cardBoxTable({
				colTitleIdx: 2,
				colsAction: [true, true, false, false, false, false],
				colActionPos: "top-right",
				show: function() {
					$('.section').addClass('cardbox-background');
					$(this).find('form').css('display', 'inline');
					//$(this).find('.cardbox-sep-button').css('margin-left', '0');
					$(this).find('img[id^="dettaglio"]').css('width','20px').css('height','20px');
					$(this).find('img[id^="modifica"]').css('width','20px').css('height','20px');
				}
			});
	  	}
	});
</script>
<div class="table-responsive tabSelezioneCarte"> 
<table class="table table-striped dataTable no-footer" id="tableListaAdeguataVerifica" role="grid">
	<colgroup>
		<col width="3%"></col>
		<col width="3%"></col>
		<col width="25%"></col>
		<col width="34%"></col>
		<col width="25%"></col>
		<col width="10%"></col>
	</colgroup>
	<thead class="hover" role="row">
		<tr>
			<th class="text sorting_disabled">&nbsp;</th>
			<th class="text sorting_disabled">&nbsp;</th>
			<th class="text sorting_disabled">Normativa di riferimento</th>
			<th class="text sorting_disabled">Rapporto</th>
			<th class="text sorting_disabled">Data compilazione</th>
			<th class="text sorting_disabled">Canale</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="oRight">
				<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="d113f159681d00ec8e6ef0e660a76bd4" /></div>
					<input type="hidden" name="codNaturaSelezionato" value="04" />
					<input type="hidden" name="codFilialeSelezionato" value="0092" />
					<a onclick="$(this).parent().submit();" href="#">
						<i class="icon icon-zoom_filled"></i>
					</a>
				</form>
			</td>
			<td class="oLeft">
				<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="d113f159681d00ec8e6ef0e660a76bd4" /></div>
				<input type="hidden" name="codNaturaSelezionato" value="04" />
				<input type="hidden" name="codFilialeSelezionato" value="0092" />
				<a onclick="$(this).parent().submit();" href="#">
					<i class="icon icon-edit_fill ico-title"></i>
				</a>
				</form>
			</td>
			<td class="oCenter">Adeguata verifica</td>
			<td class="oCenter">Depositi titoli&nbsp;Filiale&nbsp;0092</td>
			<td class="oCenter">15 marzo 2019</td>
			<td class="oCenter"><strong>Web</strong></td>
		</tr>
	<tr>
		<td class="oRight">
			<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="d113f159681d00ec8e6ef0e660a76bd4" /></div>
				<input type="hidden" name="codNaturaSelezionato" value="17" />
				<input type="hidden" name="codFilialeSelezionato" value="0092" />
				<a onclick="$(this).parent().submit();" href="#">
					<i class="icon icon-zoom_filled"></i>
				</a>
			</form>
		</td>
		<td class="oLeft">
			<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="d113f159681d00ec8e6ef0e660a76bd4" /></div>
			<input type="hidden" name="codNaturaSelezionato" value="17" />
			<input type="hidden" name="codFilialeSelezionato" value="0092" />
			<a onclick="$(this).parent().submit();" href="#">
				<i class="icon icon-edit_fill ico-title"></i>
			</a>
			</form>
		</td>
		<td class="oCenter">Adeguata verifica</td>
		<td class="oCenter">Fondi&nbsp;Filiale&nbsp;0092</td>
		<td class="oCenter">13 febbraio 2019</td>
		<td class="oCenter"><strong>Web</strong></td>
	</tr>
	<tr>
		<td class="oRight">
			<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaDettaglio.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="d113f159681d00ec8e6ef0e660a76bd4" /></div>
				<input type="hidden" name="codNaturaSelezionato" value="18" />
				<input type="hidden" name="codFilialeSelezionato" value="0092" />
				<a onclick="$(this).parent().submit();" href="#">
					<i class="icon icon-zoom_filled"></i>
				</a>
			</form>
		</td>
		<td class="oLeft">
			<form id="formAdeguataVerifica" method="post" action="/WEBHT/av/adeguataVerificaModifica.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="d113f159681d00ec8e6ef0e660a76bd4" /></div>
			<input type="hidden" name="codNaturaSelezionato" value="18" />
			<input type="hidden" name="codFilialeSelezionato" value="0092" />
			<a onclick="$(this).parent().submit();" href="#">
				<i class="icon icon-edit_fill ico-title"></i>
			</a>
			</form>
		</td>
		<td class="oCenter">Adeguata verifica</td>
		<td class="oCenter">Sicav&nbsp;Filiale&nbsp;0092</td>
		<td class="oCenter">11 febbraio 2019</td>
		<td class="oCenter"><strong>Web</strong></td>
	</tr>
</tbody>
</table>
</div>

