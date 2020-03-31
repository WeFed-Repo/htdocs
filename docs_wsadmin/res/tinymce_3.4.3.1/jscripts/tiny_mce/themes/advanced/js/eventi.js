var url = tinyMCE.getParam("external_link_list_url");
if (url != null) {
	// Fix relative
	if (url.charAt(0) != '/' && url.indexOf('://') == -1)
		url = tinyMCE.documentBasePath + "/" + url;

	document.write('<sc'+'ript language="javascript" type="text/javascript" src="' + url + '"></sc'+'ript>');
}

function initEventi() {
	tinyMCEPopup.resizeToInnerSize();
	document.getElementById('textEventi').innerHTML = tinyMCE.getWindowArg('text');
}

function insertEventi() {
	var text = document.getElementById('textEventi').value;

	tinyMCEPopup.restoreSelection();
	tinyMCE.themes['advanced']._insertEventi(text);
	tinyMCEPopup.close();
}
