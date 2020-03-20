/* LETTURA PARAMETRI DALL'URL */
getUrlVar = function(name)
{
	var value = null;
	var url = location.href;
	
	if (url.indexOf("?")>0){
		var varstring = url.split("?")[1];
		if (varstring.length>0)
		{
			$.each(varstring.split("&"),function(i,v){
				if (v.indexOf(name)>=0 && v.indexOf("=")>0){
					value = v.split("=")[1];
				}
			});
		}
	}
	return value;
}