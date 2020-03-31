var url = tinyMCE.getParam("external_link_list_url");
if (url != null) {
	// Fix relative
	if (url.charAt(0) != '/' && url.indexOf('://') == -1)
		url = tinyMCE.documentBasePath + "/" + url;

	document.write('<sc'+'ript language="javascript" type="text/javascript" src="' + url + '"></sc'+'ript>');
}

function initTooltip() {
	tinyMCEPopup.resizeToInnerSize();
	document.getElementById('textTooltip').innerHTML = tinyMCE.getWindowArg('text');
	document.getElementById('selectedText').value = tinyMCE.getWindowArg('selectedText');
}

function insertTooltip() {
	var text = document.getElementById('textTooltip').value;
	var selectedText = document.getElementById('selectedText').value;

	tinyMCEPopup.restoreSelection();
	tinyMCE.themes['wbnewtheme']._insertTooltip(text,selectedText);
	tinyMCEPopup.close();
}
