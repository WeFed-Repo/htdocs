var numGioniCalcoloJS= 0;

function loadInteressiNettoVincolo( importo, tassoN, dataF, dataI, durata) {
	var result = 0;
	try{
		if( dataF.length != 10)throw "errore data Fine";
		if( dataI.length != 10)throw "errore data Inizio";
		if( isNaN( importo ) )throw "errore importo";
		if( isNaN( tassoN ) )throw "errore tasso netto";
		if( isNaN( durata ) )throw "errore durata";
		result = ( importo * tassoN * durata)/1200;
		return result;
	}catch(e){
		throw e;
	}
}

function calcolaInteressiLV (importo, moltiplicatore) {
	var importoX100 = importo * 100,
		montante = parseInt((importoX100 * moltiplicatore) + 0.5, 10).toString().split('.')[0],
		interessi = parseInt(montante - importoX100, 10).toString(),
		decPosMont = montante.length - 2,
		decPosInt = interessi.length - 2;
	if (interessi.length === 1) {
		interessi = '0,0' + interessi;
	} else if (interessi.length === 2) {
		interessi = '0,' + interessi;
	} else {
		interessi = formattaNumeriOutput(interessi.substr(0, decPosInt) + '.' + interessi.substr(decPosInt));
	}
	montante = formattaNumeriOutput(montante.substr(0, decPosMont) + '.' + montante.substr(decPosMont));
	return [interessi, montante];
}

function calcoloRendimentoJS( dataIn, dataFin, tassoN, importo, giorniAnno) {
	var inMilli = dataIn.getTime();
	var finMilli = dataFin.getTime();
	var diffMilli = finMilli - inMilli;
	var numGiorni = Math.round( diffMilli / 86400000.0 ); //si considera un solo estremo
	numGioniCalcoloJS += numGiorni;
	var result = (importo * numGiorni * tassoN)/giorniAnno;
	//alert(" rendimento="+result+" importo="+importo+" numGiorni="+numGiorni+" tassoN="+tassoN+" giorniAnno="+giorniAnno);
	return result;
}

function isLeapYear( yr ){
		return new Date(yr,2-1,29).getDate()==29;
}

function getData( stringData ){
	var pos = stringData.indexOf('/');
	var posF = stringData.lastIndexOf('/');
	var day = stringData.substr(0,pos);
	var monday = stringData.substring(pos+1,posF);
	var year = stringData.substr(posF+1,stringData.length);
	var data = new Date();
	data.setHours('0'); // da 0 a 23
	data.setMinutes('0'); // da 0 a 59
	data.setSeconds('0'); //da 0 a 59
	data.setMilliseconds('0');
	data.setYear(year);
	data.setMonth(monday-1); //i mesi iniziiano da zero
	data.setDate(day);
	return data; 
}