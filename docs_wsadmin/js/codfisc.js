//---------------------------------------------------------------------
function AggiustaNomeCognome(Par) {
//Dato una stringa (nome o cognome), elimina tutti i caratteri non lettera
var lettere = "QWERTYUIOPASDFGHJKLZXCVBNM";
var temp;
var aus = "";
for (var i=0; i<= Par.length; i++) {
  temp = "" + Par.substring(i, i+1);  
  if (lettere.indexOf(temp) != "-1") 
    aus = aus + temp
}
return aus;
}
//-------------------------------------
function calcolaCognome(cognome) {
	var cfCognome="";
	cognome=cognome.toUpperCase();
        cognome=AggiustaNomeCognome(cognome);
        
	for(i=0; i<cognome.length;i++) {
		switch (cognome.charAt(i)) {
			case 'A':
			case 'E':
			case 'I':
			case 'O':
			case 'U':
				break;            

			default:
				cfCognome=cfCognome+cognome.charAt(i);
				break;
		}
	}
	if (cfCognome.length<3) {
		for(i=0; i<cognome.length;i++) {
			switch (cognome.charAt(i)) {
				case 'A':
				case 'E':
				case 'I':
				case 'O':
				case 'U':
					cfCognome=cfCognome+cognome.charAt(i);
					break;            

				default:
					break;
			}
		}
		while (cfCognome.length<3) {
			cfCognome=cfCognome+'X';
		}
	}

	cfCognome=cfCognome.substring(0,3);
	return cfCognome;
}

function calcolaNome(nome) {
	var cfNome="";

	nome=nome.toUpperCase();
        nome=AggiustaNomeCognome(nome);
        

	for(i=0;i<nome.length;i++) {
		switch (nome.charAt(i)) {
			case 'A':
			case 'E':
			case 'I':
			case 'O':
			case 'U':
				break;            
			
			default:
				cfNome=cfNome+nome.charAt(i);
				break;
		}
	}
	if (cfNome.length>3) {
		cfNome=cfNome.substring(0,1)+cfNome.substring(2,4);
	} else if (cfNome.length<3) {
		for(i=0;i<nome.length;i++) {
			switch (nome.charAt(i)) {
				case 'A':
				case 'E':
				case 'I':
				case 'O':
				case 'U':
					cfNome=cfNome+nome.charAt(i);
					break;            

				default:
					break;
			}
		}
		while (cfNome.length<3) {
			cfNome=cfNome+'X';
		}
	}
	cfNome=cfNome.substring(0,3);
	return cfNome;
}

function calcolaGiorno(giorno,sesso) {
	var cfGiorno="";

	var gi=0;

	gi=parseInt(giorno,10);
	if (sesso=="1") {
		gi=gi+40;
	}
	if (gi<10) {
		cfGiorno="0"+gi;
	} else {
		cfGiorno=gi;
	}

	return cfGiorno;
}

function calcolaMese(mese) {
	var mi=parseInt(mese,10);

	switch (mi) {
		case 1: // Gennaio
			return "A";
		case 2: // Febbraio
			return "B";
		case 3: // Marzo
			return "C";
		case 4: // Aprile
			return "D";
		case 5: // Maggio
			return "E";
		case 6: // Giugno
			return "H";
		case 7: // Luglio
			return "L";
		case 8: // Agosto
			return "M";
		case 9: // Settembre
			return "P";
		case 10: // Ottobre
			return "R";
		case 11: // Novembre
			return "S";
		case 12: // Dicembre
			return "T";
	}
}

function calcolaAnno(anno) {
	var ai=parseInt(anno,10);

	if (ai>=1800 && ai<2000) {
		var gi=ai % 10;
		var mi=(ai % 100)-gi;
		var strAn=mi;
		strAn=strAn+gi;
		return strAn;
	} else {
		return "";
	}
}

function calcolaLoc(loc) {
 return loc.toUpperCase();
}

function calcolaChecksum(codFiscale) {
	var chkStr="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	var checkSum=0;
	if (codFiscale.length<15) {
		return "";
	}
	for(i=0;i<15;i++) {
		if ((i % 2)==1) {  // Pari
			switch (codFiscale.charAt(i)) {
				case '0':
				case 'A':{ checkSum += 0; break;}
				case '1':
				case 'B':{ checkSum += 1; break;}
				case '2':
				case 'C':{ checkSum += 2; break;}
				case '3':
				case 'D':{ checkSum += 3; break;}
				case '4':
				case 'E':{ checkSum += 4; break;}
				case '5':
				case 'F':{ checkSum += 5; break;}
				case '6':
				case 'G':{ checkSum += 6; break;}
				case '7':
				case 'H':{ checkSum += 7; break;}
				case '8':
				case 'I':{ checkSum += 8; break;}
				case '9':
				case 'J':{ checkSum += 9; break;}
				case 'K':{ checkSum += 10; break;}
				case 'L':{ checkSum += 11; break;}
				case 'M':{ checkSum += 12; break;}
				case 'N':{ checkSum += 13; break;}
				case 'O':{ checkSum += 14; break;}
				case 'P':{ checkSum += 15; break;}
				case 'Q':{ checkSum += 16; break;}
				case 'R':{ checkSum += 17; break;}
				case 'S':{ checkSum += 18; break;}
				case 'T':{ checkSum += 19; break;}
				case 'U':{ checkSum += 20; break;}
				case 'V':{ checkSum += 21; break;}
				case 'W':{ checkSum += 22; break;}
				case 'X':{ checkSum += 23; break;}
				case 'Y':{ checkSum += 24; break;}
				case 'Z':{ checkSum += 25; break;}
			}
		} else {
			switch (codFiscale.charAt(i)) {
				case '0':
				case 'A':{ checkSum += 1; break;}
				case '1':
				case 'B':{ checkSum += 0; break;}
				case '2':
				case 'C':{ checkSum += 5; break;}
				case '3':
				case 'D':{ checkSum += 7; break;}
				case '4':
				case 'E':{ checkSum += 9; break;}
				case '5':
				case 'F':{ checkSum += 13; break;}
				case '6':
				case 'G':{ checkSum += 15; break;}
				case '7':
				case 'H':{ checkSum += 17; break;}
				case '8':
				case 'I':{ checkSum += 19; break;}
				case '9':
				case 'J':{ checkSum += 21; break;}
				case 'K':{ checkSum += 2; break;}
				case 'L':{ checkSum += 4; break;}
				case 'M':{ checkSum += 18; break;}
				case 'N':{ checkSum += 20; break;}
				case 'O':{ checkSum += 11; break;}
				case 'P':{ checkSum += 3; break;}
				case 'Q':{ checkSum += 6; break;}
				case 'R':{ checkSum += 8; break;}
				case 'S':{ checkSum += 12; break;}
				case 'T':{ checkSum += 14; break;}
				case 'U':{ checkSum += 16; break;}
				case 'V':{ checkSum += 10; break;}
				case 'W':{ checkSum += 22; break;}
				case 'X':{ checkSum += 25; break;}
				case 'Y':{ checkSum += 24; break;}
				case 'Z':{ checkSum += 23; break;}
			}
		}
	}
	checkSum = checkSum % 26;
	return chkStr.charAt(checkSum);
}

function testCodiceFiscale(codFiscale) {
	if (codFiscale.length==16) {
		codFiscale=codFiscale.toUpperCase();
		return (codFiscale.charAt(15)==calcolaChecksum(codFiscale));
	} else {
		return false;
	}
}

function calcolaCodiceFiscale(cognome,nome,sesso,giorno,mese,anno,loc) {
	var codFisc="";

	codFisc=codFisc+calcolaCognome(cognome);
	codFisc=codFisc+calcolaNome(nome);
	codFisc=codFisc+calcolaAnno(anno);
	codFisc=codFisc+calcolaMese(mese);
	codFisc=codFisc+calcolaGiorno(giorno,sesso);
	codFisc=codFisc+calcolaLoc(loc);
	codFisc=codFisc+calcolaChecksum(codFisc);
	return codFisc;
}

