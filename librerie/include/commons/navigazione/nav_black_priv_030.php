<!-- FUNZIONI PER EMULAZIONE *** NO SVILUPPO -->
<script type="text/javascript">
	
	function resetFeedBackForm ()
	{
		if (originalcontentChiamare)
		{
			$('chiediEspertoChiamare').innerHTML = originalcontentChiamare;
			$('chiediEspertoScrivi').innerHTML = originalcontentScrivi;
		}
	}
	
	function waitAndFeedBack (requesttype)
	{
		//check contenuto campi di testo
		var FormError = false;
		
		if (requesttype == 'chiediEspertoChiamare')
		{
			if ($('telPrefisso').value == '')
			{ 
				$('telPrefisso').className = 'prefisso error';
				FormError = true;
			}
			else
			{
				$('telPrefisso').className = 'prefisso';
			}
			
			if ($('telTelnumber').value == '')
			{ 
				$('telTelnumber').className = 'telnumber error';
				FormError = true;
			}
			else
			{
				$('telTelnumber').className = 'telnumber';
			}
			
		}
		else
		{
			var checktarea = $(requesttype).getElementsByTagName('TEXTAREA')[0];
			if (checktarea.value == '' || checktarea.value == '- Scrivi il messaggio -')
			{
				checktarea.className = 'error';
				FormError = true;
			}
			else
			{
				checktarea.className = '';
			}
		}
		
		
		if (!FormError)
		{
			//set loading
			originalcontentChiamare = $('chiediEspertoChiamare').innerHTML;
			originalcontentScrivi = $('chiediEspertoScrivi').innerHTML;
			$(requesttype).innerHTML = '<div class=\"message\"><p>Caricamento in corso...</p><img src=\"/img/ret/loading.gif\"></div>'
			if (requesttype == 'chiediEspertoChiamare')
			{
				outmessage = function() 
					{
						$(requesttype).innerHTML = '<form id="chiediespertoform01"><p><strong>Grazie per averci contattato!<br><br>Sarai contattato il giorno</strong><br>gg / mm / aaaa<br><br><strong>Nella fascia oraria</strong><br>hh:mm - hh:mm</p></form><div class="fooform"><div class="fooformright"><div><a title="Lorem ipsum" class="btnformright" href="javascript:;" onclick="javascript:boxChiediEspertoClose();resetFeedBackForm();"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>chiudi</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div><br class="clear"/></div></div>'
					}
			}
			else
			{
				outmessage = function() 
					{
						$(requesttype).innerHTML = '<form id="chiediespertoform01"><p><strong>Grazie per averci contattato!</strong><br><br>Risponderemo al più presto alla tua segnalazione.</p></form><div class="fooform"><div class="fooformright"><div><a title="Lorem ipsum" class="btnformright" href="javascript:;" onclick="javascript:boxChiediEspertoClose();resetFeedBackForm();"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>chiudi</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div><br class="clear"/></div></div>'
					}
			}
			//messaggio finale
			window.setTimeout(outmessage,3000);
		}
	}
	
</script>
<!-- FINE FUNZIONI PER EMULAZIONE *** NO SVILUPPO -->

<!-- OGGETTO BOTTONE CHIEDI ALL'ESPERTO -->
<div class="esperto<?php if ($tpl != 'tpl_priv_chiedi_esperto_obbligazioni.php') { ?> topSpace<?php }?>">
	<div class="espertomenu" style="display: none">
		<a href="javascript:;" onclick="javascript:openChatEsperto();" class="espertomenu_chatta"></a>
		<a href="javascript:;" onclick="javascript:boxChiediEspertoOpen('chiediEspertoChiamare');" class="espertomenu_chiamare"></a>
		<a href="javascript:;" onclick="javascript:boxChiediEspertoOpen('chiediEspertoScrivi');" class="espertomenu_scrivi"></a>
	</div>
	<a href="javascript:;" class="espertochiedi" onclick="javascript: ChiediEspertoSwitch(this);"><span>chiedi all'esperto</span></a>
</div>
<!-- / OGGETTO BOTTONE CHIEDI ALL'ESPERTO -->