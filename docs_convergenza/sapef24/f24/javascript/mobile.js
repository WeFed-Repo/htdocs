function isMobile() {
	try{ document.createEvent("TouchEvent"); return true; }
	catch(e){ return false; }
}

function isMobileIOS() {
	return isMobile() && (navigator.userAgent.search(/iPhone|iPad|iPod/i) > -1);
}

function isMobileAndroid() {
	return isMobile() && (navigator.userAgent.search(/Android/i) > -1);
}

function isMobileBlackBerry() {
	return isMobile() && (navigator.userAgent.search(/BlackBerry/i) > -1);
}

function isMobileOpera() {
	return isMobile() && (navigator.userAgent.search(/Opera Mini/i) > -1);
}

function isMobileWindows() {
	return isMobile() && (navigator.userAgent.search(/IEMobile/i) > -1);
}