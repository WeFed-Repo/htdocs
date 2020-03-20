//plugin per l'ordinamento delle colonne in formato date e dateTime

jQuery.extend( jQuery.fn.dataTableExt.oSort, {
	"date-it-pre": function ( a ) {
		var frDate = trim(a).split(' ');
		if(frDate.length==1){
		    var itDatea = a.split('/');
		    return (itDatea[2] + itDatea[1] + itDatea[0]) * 1;
	    }else if(frDate.length>1){
       		var frTime = frDate[1].split('.');
       		var frDateParts = frDate[0].split('/');
       		var day = frDateParts[0] * 60 * 24;
            var month = frDateParts[1] * 60 * 24 * 31;
            var year = frDateParts[2] * 60 * 24 * 366;
            var hour = frTime[0] * 60;
            var minutes = frTime[1];
            return day+month+year+hour+minutes;
	    }
	},
	
	"date-it-asc": function ( a, b ) {
	    return ((a < b) ? -1 : ((a > b) ? 1 : 0));
	},
	
	"date-it-desc": function ( a, b ) {
	    return ((a < b) ? 1 : ((a > b) ? -1 : 0));
	}
} );