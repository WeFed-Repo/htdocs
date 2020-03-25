<script>
// javascript per il controllo di tutti gli accordion
function closeMyMenuSelector(element)
{
	$(element).closest('.mymenuselector').addClass('closed').removeClass('opened');
	$(element).closest('.mymenuselector').find('.selectorbody').hide();
}
function openMyMenuSelector(element)
{
	$(element).closest('.mymenuselector').removeClass('closed').addClass('opened');
	$(element).closest('.mymenuselector').find('.selectorbody').show();
}
function switchMyMenuSelector(element)
{
	if (!$(element).closest('.mymenuselector').find('.selectorbody').is(':visible'))
	{
		openMyMenuSelector(element)
	}
	else
	{closeMyMenuSelector(element)}
}

function closeAllMyMenuVoices (element)
{
	var divarray = $(element).closest('.mymenuselectorWrapper').find('div.mymenuselector');
	for (i=0;i<=divarray.length-1;i++)
	{
		closeMyMenuSelector(divarray[i]);
	}
}
function openAllMyMenuVoices(element)
{
	var divarray = $(element).closest('.mymenuselectorWrapper').find('div.mymenuselector');
	for (i=0;i<=divarray.length-1;i++)
	{
		openMyMenuSelector(divarray[i]);
	}
}

function openSelectedMyMenuVoices (element)
{
	closeAllMyMenuVoices (element);
	var divinput = $(element).closest('.mymenuselectorWrapper').find('.mymenuselector input');
	for (i=0;i<=divinput.length-1;i++)
	{
		if (divinput[i].checked == true)
		{
			openMyMenuSelector(divinput[i]);
		}
	}
}
</script>

<h1>IL PROFILO &Egrave; STATO CREATO</h1>
<br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultricies mi nec nunc cursus et hendrerit urna mollis. Sed commodo gravida erat.</p>
<p> non elementum mi eleifend ut. Fusce vehicula magna eget felis iaculis egestas. Nam dapibus sollicitudin volutpat</p>

<div class="mymenuselectorWrapper">
	<h1>NOME PROFILO - RIEPILOGO</h1>
	<br>
	<div class="mymenutopper">
		<div class="console">
			<a href="javascript:;" onclick="openAllMyMenuVoices(this)"><img src="/img/ret/ico1bt_mymenutopper_open.gif" title="Apri tutti"></a>
			<a href="javascript:;" onclick="closeAllMyMenuVoices(this)"><img src="/img/ret/ico1bt_mymenutopper_close.gif" title="Chiudi tutti"></a>
		</div>
	</div>	
	<br class="clear">
	<div class="mymenuselector">
		<div class="selectortop"></div>
		<div class="selectortitle"><a href="javascript:;" onclick="switchMyMenuSelector(this)" class="sezioni" title="Dati">Dati</a><a href="javascript:;" onclick="switchMyMenuSelector(this.parentNode.parentNode)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a></div>
		<div class="selectorbody" style="display:none">
			<div class="checksectionAll">
				<strong>NOME PROFILO</strong>
				<p>Lorem ipsum scritto dall'utente</p>
				<strong>DESCRIZIONE</strong>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultricies mi nec nunc cursus et hendrerit urna mollis. Sed commodo gravida erat, non elementum mi eleifend ut. Fusce vehicula magna eget felis iaculis egestas. Nam dapibus sollicitudin volutpat</p>
			</div>
		</div>
		<div class="selectorbottom"></div>
	</div>
	<div class="mymenuselector">
		<div class="selectortop"></div>
		<div class="selectortitle"><a href="javascript:;" onclick="switchMyMenuSelector(this)" class="sezioni" title="Funzioni">Funzioni</a><a href="javascript:;" onclick="switchMyMenuSelector(this.parentNode.parentNode)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a></div>
		<div class="selectorbody" style="display:none">
			<div class="checksection checksectionAll">
				<h3 class="colorBank">SITUAZIONE AZIENDA</h3>
				<div class="checksectiontitle"><span>Situazione rapporti</span></div>
				<br clear="left">
				<ul class="flaglist">
					<li>Lorem ipsum dolor sit
						<ul class="innerflaglist">
							<li>Lorem ipsum dolor sit</li>
							<li>Lorem ipsum dolor sit</li>
							<li>Lorem ipsum dolor sit</li>
						</ul>
					</li>
					<li>Lorem ipsum dolor sit</li>
					<li>Lorem ipsum dolor sit</li>
					<li>Lorem ipsum dolor sit</li>
				</ul>
				<div class="checksectiontitle"><span>Interrogazione fidi in essere</span></div>
				<br clear="left">
				<ul class="flaglist">
					<li>Lorem ipsum dolor sit</li>
				</ul>
				<div class="checksectiontitle"><span>Flussi</span></div>
				<br clear="left">
				<ul class="flaglist">
					<li>Lorem ipsum dolor sit</li>
				</ul>
				<div class="checksectiontitle"><span>I tuoi conto</span></div>
				<br clear="left">
				<ul class="flaglist">
					<li>Lorem ipsum dolor sit</li>
					<li>Lorem ipsum dolor sit</li>
					<li>Lorem ipsum dolor sit</li>
					<li>Lorem ipsum dolor sit</li>
				</ul>
			</div>
		</div>
		<div class="selectorbottom"></div>
	</div>
	<div class="mymenuselector">
		<div class="selectortop"></div>
		<div class="selectortitle"><a href="javascript:;" onclick="switchMyMenuSelector(this)" class="sezioni" title="Conti correnti">Conti correnti</a><a href="javascript:;" onclick="switchMyMenuSelector(this.parentNode.parentNode)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a></div>
		<div class="selectorbody" style="display:none">
			<div class="checksectionAll">
				<table cellspacing="0" cellpadding="0" border="0" class="dettTable">
					<thead>
						<tr>
							<th>NUMERO</th>
							<th>INTESTATARIO</th>
						</tr>
					</thead>
					<tr>
						<td>000001 - 0000018459 - EUR</td>
						<td class="center">Tognini Christian Ines, Abba</td>
					</tr>
					<tr>
						<td>000001 - 0000018459 - EUR</td>
						<td class="center">Tognini Christian Ines, Abba</td>
					</tr>
					<tr>
						<td>000001 - 0000018459 - EUR</td>
						<td class="center">Tognini Christian Ines, Abba</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="selectorbottom"></div>
	</div>
	<div class="mymenuselector">
		<div class="selectortop"></div>
		<div class="selectortitle"><a href="javascript:;" onclick="switchMyMenuSelector(this)" class="sezioni" title="Conti correnti">Codici SIA</a><a href="javascript:;" onclick="switchMyMenuSelector(this.parentNode.parentNode)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a></div>
		<div class="selectorbody" style="display:none">
			<div class="checksectionAll">
				<table cellspacing="0" cellpadding="0" border="0" class="dettTable">
					<thead>
						<tr>
							<th>CODICE</th>
							<th>RAGIONE SOCIALE</th>
							<th>INDIRIZZO</th>
							<th>CAP</th>
							<th>CITTA'</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>AGN</td>
							<td class="center">Lorem ipsum 123456</td>
							<td class="center">Via Platani 12</td>
							<td class="center">27100</td>
							<td class="center">Milano</td>
						</tr>
						<tr>
							<td>AGN</td>
							<td class="center">Lorem ipsum 123456</td>
							<td class="center">Via Platani 12</td>
							<td class="center">27100</td>
							<td class="center">Milano</td>
						</tr>
						<tr>
							<td>AGN</td>
							<td class="center">Lorem ipsum 123456</td>
							<td class="center">Via Platani 12</td>
							<td class="center">27100</td>
							<td class="center">Milano</td>
						</tr>
						<tr>
							<td>AGN</td>
							<td class="center">Lorem ipsum 123456</td>
							<td class="center">Via Platani 12</td>
							<td class="center">27100</td>
							<td class="center">Milano</td>
						</tr>
						<tr>
							<td>AGN</td>
							<td class="center">Lorem ipsum 123456</td>
							<td class="center">Via Platani 12</td>
							<td class="center">27100</td>
							<td class="center">Milano</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="selectorbottom"></div>
	</div>
	<div class="mymenuselector">
		<div class="selectortop"></div>
		<div class="selectortitle"><a href="javascript:;" onclick="switchMyMenuSelector(this)" class="sezioni" title="Rapporti">Rapporti</a><a href="javascript:;" onclick="switchMyMenuSelector(this.parentNode.parentNode)" class="selectorswitch" style="background-image: url(http://libreriewebank.webank.local/img/ret/ico1bt_checksectiontitle_open.gif);"></a></div>
		<div class="selectorbody" style="display:none">
			<div class="checksectionAll">
				<table cellspacing="0" cellpadding="0" border="0" class="dettTable">
				<thead>
					<tr>
						<th>Codice <br>SIA</th>
						<th>Ragione sociale</th>
						<th>Banca</th>
						<th>ABI</th>
						<th>CAB</th>
						<th>Rapporto</th>
						<th>Tipologia</th>
					</tr>
				</thead>
				<tbody>
					<tr class="dispari">
						<td rowspan="3">12345</td>
						<td rowspan="3">Fiat</td>
						<td class="center">Intesa san Paolo</td>
						<td>12345</td>
						<td>12345</td>
						<td>123456789012</td>
						<td class="center">Conto corrente</td>
					</tr>
					<tr class="dispari">
						<td class="center">Banca Popolare di Sondrio</td>
						<td>12345</td>
						<td>12345</td>
						<td>123456789012</td>
						<td class="center">Conto corrente</td>
					</tr>
					<tr class="dispari">
						<td class="center">Banca Popolare di Sondrio</td>
						<td>12345</td>
						<td>12345</td>
						<td>123456789012</td>
						<td class="center">Conto corrente</td>
					</tr>
					<tr class="pari">
						<td>12345</td>
						<td class="center">Mondadori</td>
						<td class="center">Intesa san Paolo</td>
						<td>12345</td>
						<td>12345</td>
						<td>123456789012</td>
						<td class="center">Conto corrente</td>
					</tr>
				</tbody>
				</table>
			</div>
		</div>
		<div class="selectorbottom"></div>
	</div>
</div>
