



<script type="text/javascript">

function cstPopup(url, title, width, height)
{
	var newWidth, newHeight, diff, newWin, resize = false;
	
	// Defaults
	newWidth = width || 450;
	newHeight = height || 445;
	
	newWin = window.open(url + '&title=' + title, 'popup', 'width=' + newWidth + ',height=' + newHeight + ',top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes');

	// Full width
	if (width === 0) {
		resize = true;
		newWidth = window.screen.availWidth;
	}
	// Full height
	if (height === 0) {
		resize = true;
		newHeight = window.screen.availHeight;
	}
	if (resize) {
		newWin.resizeTo(newWidth, newHeight);
	}
}



function apriDettaglio(conto, nfinan, index, type) {        
		var finestra= 'http://libreriewebank.webank.local/connect.php?page=strutt_priv_popup_noheader.php&tpl=tpl_priv_fp_finanz_popUP_dettagli.php&liv1=FI&responsive=y&liv0=5#1&title=PianoAmmortamento';
	    javascript:cstPopup( finestra ,'Dettaglio','720','445','Dettaglio');
	}   

	
function apriAmmortamento(conto, nfinan, index, type) {        
		var finestra= 'http://libreriewebank.webank.local/connect.php?page=strutt_priv_popup_noheader.php&tpl=tpl_priv_fp_finanz_popUP_dettagli_2.php&liv1=FI&responsive=y&liv0=5#1&title=PianoAmmortamento';
	    javascript:cstPopup( finestra ,'PianoAmmortamento','720','445','PianoAmmortamento');
	}


</script>



<!-- piano di ammortamento -->
<a href="javascript:apriDettaglio($('#selectBoxFinanziamenti').val(), '200004452072000', '0','N');">
	
	<img border="0" title="piano ammortamento" alt="ammort" src="/img/ret/ico1gr_documento.gif">
</a>



&nbsp; &nbsp;



<!-- dettagli del finanziamento -->
<a href="javascript:apriAmmortamento($('#selectBoxFinanziamenti').val(), '200004452072000', '0','N');">
	<img border="0" title="dettagli del finanziamento" alt="dett" src="/img/ret/ico1gr_dettaglio.gif">
</a>