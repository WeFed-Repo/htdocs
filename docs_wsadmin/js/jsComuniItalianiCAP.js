function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-------------------------------------------------------------------------
//Se il nome di una stringa da ricercare contiene ' lo sostituisco con ''
function ControllaLocalita(ParStringa) {
var err = 0;
var temp;
var AusStringa = "";
for (var i=0; i<= ParStringa.length; i++) {
  temp = "" + ParStringa.substring(i, i+1);
  AusStringa = AusStringa + temp;  
  if (temp == "'") 
    AusStringa = AusStringa + temp;
}
return AusStringa;
}
//--------------------------------------------------------------------------------------------------
function InviaDati() { //v2.0
 //Controllo la correttezza dei dati inseriti dall'utente
 
 var dimensione = document.FormComuni.PComuneDaCercare.value.length;
 if ( dimensione <= 1)
  {
   it_alert_error('MSG-00032');
   document.FormComuni.PComuneDaCercare.focus();
  }
 else
  { 
    document.FormComuni.ComuneDaCercare.value = ControllaLocalita(document.FormComuni.PComuneDaCercare.value);
    document.FormComuni.submit(); 
  }		 
}
//----------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------
function InviaDati2() { //v2.0
 //Controllo la correttezza dei dati inseriti dall'utente
 
 var dimensione = document.FormComuni.PComuneDaCercare.value.length;
 if ( dimensione <= 1)
  {
   it_alert_error('MSG-00032');
   document.FormComuni.PComuneDaCercare.focus();
   return false;
  }
 else
  { 
    document.FormComuni.ComuneDaCercare.value = ControllaLocalita(document.FormComuni.PComuneDaCercare.value);
    return true; 
  }		 
}