/* Tooltip */
function showTooltip (anchor, e)
{
	var tooltip = anchor.getElementsByTagName('SPAN')[0];
	base = 0;
	if (navigator.appVersion.indexOf('MSIE 7')>0 || navigator.appVersion.indexOf('MSIE 6')>0) base = 14;
	tooltip.style.marginTop = (base - tooltip.offsetHeight) - (anchor.offsetHeight) + 'px'
	
	// Margin laterale
	margin = 25;
	if (navigator.appVersion.indexOf('MSIE')>0) margin = 30;
	
	tooltip.style.left = e.clientX - margin + 'px';
	tooltip.style.visibility = 'visible';
}

function hideTooltip (anchor)
{
	anchor.getElementsByTagName('SPAN')[0].style.visibility = 'hidden';
}	
