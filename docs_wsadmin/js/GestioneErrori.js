function it_item_error (elem, id){

 errfound = false; if (errfound) return;
 var str=it_text_error(id);

 window.alert(str);

 elem.select();
 elem.focus();
 errfound =true;
}

function it_alert_error (id){

 var str=it_text_error(id);

 window.alert(str);
}

function it_text_error(id) {

 var str=it_text_error_tcl(id);

 return (str);
}

function it_text_error_inner(it_errori_msg,it_errori_id,id,is_debug) {
var it_messaggi=it_errori_msg.split('|-|');
var it_codici=it_errori_id.split('|-|');
var prefix=(is_debug==0)?"":id+" : ";
var result="Messaggio di errore non disponibile ("+id+")";

for (var i=0;i<it_errori_id.length;i++)
{
 if(id==it_codici[i])
  result=prefix+it_messaggi[i];
}
return result;
};