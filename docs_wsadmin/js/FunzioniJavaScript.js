//funzione per convalidare il formato dei dati di una text box dove si deve inserire un nome (elimino i caratteri speciali)
function ConvalidaNomi(Nome) {
	var err = 0;
	var NomeDaVerificate = Nome;
	var CaratteriValidi = "abcdefghilmnopqrstuvwxyjkz 0123456789.-/&_";
	var Carattere;
	var CarattereMinuscolo;

	if (!ValidLength(NomeDaVerificate, 1)) err = 1 ;
	for (var i=0; i< NomeDaVerificate.length; i++) {
	         Carattere = "" + NomeDaVerificate.substring(i, i+1);
	    	 CarattereMinuscolo = Carattere.toLowerCase();
			 if (CaratteriValidi.indexOf(CarattereMinuscolo) == "-1") err = 1;
	}
	  if (err==1) {
	               return false;
	  } else {
	               return true;
	  }
}


// funzione per convalidare in base alla lunghezza
function ValidLength(oggetto,len) {
      return (oggetto.length >= len);
}

// visualizza un avviso di errore
function error (elem, text){
	errfound = false;
	if (errfound) return;
	window.alert(text);
	elem.select();
	elem.focus();
	errfound =true;
}

//funzione per convalidare l'indirizzo di posta elettronica
function ValidEmail(EMail){
         if (!ValidLength(EMail, 5)) return false;
         if (EMail.indexOf ('@', 0) == -1) return false;
         return true;
}

//funzione per convalidare il formato di un numero intero
function NumeroLot(NumeroInserito) {
	var err = 0;
	var NumeroDaVerificare = NumeroInserito;
	var CaratteriValidi = "0123456789";
	var Carattere;
	var LocationZero = 0;
	if (!ValidLength(NumeroDaVerificare, 1)) err = 1 ;

	for (var i=0; i< NumeroDaVerificare.length; i++) {
	  Carattere = "" + NumeroDaVerificare.substring(i, i+1);
	  if (CaratteriValidi.indexOf(Carattere) == "-1") err = 1;
	}
	LocationZero =	NumeroDaVerificare.indexOf("0");
	if (LocationZero == 0) err = 1;
        if (err==1) {
	       return false;
	} else {
	       return true;
	}
}

//funzione per convalidare il formato di un un numero anche nullo
function NumeroInteroNull(NumeroInserito) {
	var err = 0;
	var NumeroDaVerificare = NumeroInserito;
	var CaratteriValidi = "0123456789";
	var Carattere;
	if (!ValidLength(NumeroDaVerificare, 1)) {
	    err = 0;
	} else {
	  for (var i=0; i< NumeroDaVerificare.length; i++) {
	         Carattere = "" + NumeroDaVerificare.substring(i, i+1);
	         if (CaratteriValidi.indexOf(Carattere) == "-1") err = 1;
	  }
	}

	if (err==1) {
	         return false;
	} else {
	         return true;
	}
}

//funzione per convalidare il formato di Ultimo Prezzo INCLUSA DA LIBRERIA
function LPrezzo(Prezzo) {
	var err = 0;
	var cont = 0;
	var LocationVirgola = 0;
	var LocationZero = 1;
	var finish = 0;
	var PrezzoDaVerificare = Prezzo;
	var CaratteriValidi = "0123456789,";
	var dim;
	var NumeroInteri;
	var numeroCar;
	var carattere;
	//controllo se ho una sequenza di zeri
	err = 1;
	for (var j=0; j<= PrezzoDaVerificare.length; j++) {
              carattere = "" + PrezzoDaVerificare.substring(j, j+1);
	      if ((CaratteriValidi.indexOf(carattere) != "0") && (CaratteriValidi.indexOf(carattere) != "10"))
	          err = 0;
	}
        Carattere = 0;
        //controllo la validità dei vari caratteri
	if (!ValidLength(PrezzoDaVerificare, 1)) err = 1 ;
	for (var i=0; i<= PrezzoDaVerificare.length; i++) {
             Carattere = "" + PrezzoDaVerificare.substring(i, i+1);
	     if (CaratteriValidi.indexOf(Carattere) == "-1")
	          err = 1;
	}
	if (cont == 1)   err = 1;
	LocationVirgola = PrezzoDaVerificare.indexOf(",");
	finish = PrezzoDaVerificare.lastIndexOf(",");
	if (LocationVirgola != finish)   err = 1;
	LocationZero =	PrezzoDaVerificare.indexOf("0");
	if ((LocationZero == 0) && (!ValidLength(PrezzoDaVerificare, 2))) err = 1;

	//controllo la lunghezza della perte intera e decimale
	if (LocationVirgola != -1) {
	      dim = PrezzoDaVerificare.length;
	      numeroCar = dim - LocationVirgola - 1;
	      if ((numeroCar > 5) || (numeroCar < 1))  err = 1;
	      NumeroInteri = dim - numeroCar - 1;
	      if ((NumeroInteri > 6) || (NumeroInteri < 1))  err = 1;
	} else {
	      dim = PrezzoDaVerificare.length;
	      if ((dim > 6) || (dim < 1))  err = 1;
	}

	if (LocationVirgola == 0)  err = 1;
	if (err==1) {
	              return 0;
	} else {
	              return true;
	}
}

//funzione che converte un numero con la virgola in un numero con il puntino, non fa controlli di correttezza del formato
function FromCommaToPoint(numero) {
   var virgola = ","
   var LocationVirgola = 0;
   var dim = 0;
   var ParteDecimale = 0;
   var ParteIntera = 0;

   DaConvertire = numero;
   Convertito = numero;
   LocationVirgola =	DaConvertire.indexOf(",");
   //stacco la virgola e inserisco il puntino
   if (LocationVirgola != -1) {
         dim = DaConvertire.length;
         ParteIntera = DaConvertire.substring(0, LocationVirgola);
         ParteDecimale = DaConvertire.substring(LocationVirgola+1, dim+1);
         Convertito = ParteIntera+'.'+ParteDecimale;
   }
   return Convertito;
}

//funzione che elimina i punti in un numero in formato italiano, non fa controlli di correttezza del formato
function DeletePoint(numero) {
   var punto = "."
   var LocationPunto = 0;
   var dim = 0;
   var ParteDestra = 0;
   var ParteSinistra = 0;

DaConvertire = numero;
Convertito = numero;
LocationPunto =	DaConvertire.indexOf(".");
//stacco il puntino e riattacco le due parti
if (LocationPunto != -1) {
     dim = DaConvertire.length;
     ParteSinistra = DaConvertire.substring(0, LocationPunto);
     ParteDestra = DaConvertire.substring(LocationPunto+1, dim+1);
     Convertito = ParteSinistra+""+ParteDestra;
}
  return Convertito;
}


//funzione per convalidare il formato della data
function checkdate(DataInserita) {
   var err = 0;
   var DataDaVerificare = DataInserita;
   var valid = "0123456789/";
   var ok = "yes";
   var Carattere;
   for (var i=0; i< DataDaVerificare.length; i++) {
      Carattere = "" + DataDaVerificare.substring(i, i+1);
      if (valid.indexOf(Carattere) == "-1") err = 1;
   }
   if (DataDaVerificare.length != 10) err=1
   b = DataDaVerificare.substring(3, 5) // month
   c = DataDaVerificare.substring(2, 3)// '/'
   d = DataDaVerificare.substring(0, 2) // day
   e = DataDaVerificare.substring(5, 6)// '/'
   f = DataDaVerificare.substring(6, 10) // year

   if (b<1 || b>12) err = 1
   if (c != '/') err = 1
   if (d<1 || d>31) err = 1
   if (e != '/') err = 1
   if (f<1995 || f>2199) err = 1
   if (b==4 || b==6 || b==9 || b==11){
        if (d==31) err=1
   }
   if (b==2){
      var g=parseInt(f/4)
      if (isNaN(g)) {
           err=1
      }
      if (d>29) err=1
      if (d==29 && ((f/4)!=parseInt(f/4))) err=1
   }

   if (err==1) {
                return false;
   } else {
                return true;
   }
}

//funzione per controllare se la prima data è antecedente alla seconda (passo date corrette: gg/mm/aaaa)
function CheckOrderDate(primadata, secondadata) {
   var err = 0;
   DataDaVerificare1 = primadata;
   DataDaVerificare2 = secondadata;
   d1 = DataDaVerificare1.substring(0, 2) // day

   m1 = DataDaVerificare1.substring(3, 5) // month
   a1 = DataDaVerificare1.substring(6, 10) // year
   d2 = DataDaVerificare2.substring(0, 2) // day

   m2 = DataDaVerificare2.substring(3, 5) // month
   a2 = DataDaVerificare2.substring(6, 10) // year

   if (a1>a2) err = 1
   if ((a1==a2) && (m1>m2)) err = 1
   if ((a1==a2) && (m1==m2) && (d1>d2)) err = 1
   if (err==1) {
                  return false;
   } else {
                  return true;
   }
}

//funzione per controllare se la data è antecedente o uguale alla data odierna
function CheckBeforeToday(data) {
    var err = 0;
    DataDaVerificare = data;
    oggi = new Date()
    d1 = DataDaVerificare.substring(0, 2) //day

    m1 = DataDaVerificare.substring(3, 5) //month
    a1 = DataDaVerificare.substring(6, 10) //year
    d2Row = oggi.getDate()  //dayrow
    d2 = d2Row + 1          //day

    m2Row = oggi.getMonth() //monthrow
    m2 = m2Row + 1          //month
    a2Row = oggi.getYear() //anno non cucinato
    a2 = a2Row + 1900       //year

    if (a1>a2) err = 1
    if ((a1==a2) && (m1>m2)) err = 1
    if ((a1==a2) && (m1==m2) && (d1>d2)) err = 1
    if (err==1) {
                  return false;
    } else {
                  return true;
    }
}

//funzione per convalidare il formato di un conto corrente
function ConvalidaConto(ContoInserito) {
    var err = 0;
    var cont = 0;
    var locationBarra = 0;
    var finish = 0;
    var ContoDaVerificare = ContoInserito;
    var CaratteriValidi = "0123456789/";
    var Carattere;
    var dim;
    var numeroCar;
    if (!ValidLength(ContoDaVerificare, 1)) err = 1 ;
    for (var i=0; i<= ContoDaVerificare.length; i++) {
          Carattere = "" + ContoDaVerificare.substring(i, i+1);
         if (CaratteriValidi.indexOf(Carattere) == "-1")
               err = 1;
    }
    if (cont == 1)   err = 1;
    locationBarra =	ContoDaVerificare.indexOf("/");
    finish = ContoDaVerificare.lastIndexOf("/");
    if (locationBarra != finish)   err = 1;
    dim = ContoDaVerificare.length;
    numeroCar = dim - locationBarra - 1;
    if ((numeroCar > 15) || (numeroCar < 1))  err = 1;
    if (locationBarra == 0)  err = 1;
    if (err==1) {
                     return 0;
    } else {
                     return true;
    }
}

//funzione per convalidare il formato del tasso delle obbligazioni; N.B. può essere anche vuoto!
function ConvalidaTassoObbligaz(Tasso) {
  var err = 0;
  var cont = 0;
  var locationVirgola = 0;
  var locationZero = 1;
  var finish = 0;
  var TassoDaVerificare = Tasso;
  var CaratteriValidi = "0123456789,";
  var Carattere;
  var dim = TassoDaVerificare.length;
  var numeroCar;
  //se il tasso è zero esco dalla funzione senza dare errore
  if (!ValidLength(TassoDaVerificare, 1)) return 1;
  for (var i=0; i<= TassoDaVerificare.length; i++) {
	  Carattere = "" + TassoDaVerificare.substring(i, i+1);
	  if (CaratteriValidi.indexOf(Carattere) == "-1")       err = 1;
  }
  if (cont == 1)   err = 1;
  locationVirgola =	TassoDaVerificare.indexOf(",");
  finish = TassoDaVerificare.lastIndexOf(",");
  if (locationVirgola != finish)   err = 1;
  locationZero =	TassoDaVerificare.indexOf("0");
  if ((locationZero == 0) && (!ValidLength(TassoDaVerificare, 2))) err = 1;
  numeroCar = dim - locationVirgola - 1;
  if ((locationVirgola > 0) && ((numeroCar > 3) || (numeroCar < 1)))  err = 1;
  if (locationVirgola == 0)        err = 1;
  if (err==1) {
                return 0;
  }
  else {
                return 1;
  }
}