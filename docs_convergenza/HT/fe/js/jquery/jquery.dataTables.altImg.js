//plugin per l'ordinamento delle colonne ...
jQuery.extend( jQuery.fn.dataTableExt.oSort, {
    "alt-string-pre": function ( a ) {
    	var s = a.match(/alt="(.*?)"/);
    	if (s == null) return "";
    	return s[1].toLowerCase();
    },
 
    "alt-string-asc": function( a, b ) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
 
    "alt-string-desc": function(a,b) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
} );
