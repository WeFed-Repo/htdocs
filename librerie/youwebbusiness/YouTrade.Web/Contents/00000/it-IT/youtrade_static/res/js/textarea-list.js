/** 
 * Copyright 2015 Enterprise S.p.A. (Rome, Italy).  
 * Use is subject to license terms. All rights reserved. 
 *  
 *  http://www.enterprisespa.it 
 */

/**
 * @utilizzo fornisce le informazioni relative ad un textarea 
 * @return array object[cd,dim[righe max, colonne max]]
 */
function giveMeTextareaDimensions(key){
	
	var maxLines;
	var columns;
	var labelTextarea;
	
	var cd = [];
	var dim = [];

	/* Textarea */
	switch(key) {
//		case "C96140": columns = 65; maxLines = 100; labelTextarea = "Descrizione Documenti Richiesti"; break;
//		case "C96110": columns = 65; maxLines = 100; labelTextarea = "Descrizione Beni e Servizi"; break;
//		case "C96120": columns = 65; maxLines = 100; labelTextarea = "Descrizione Condizioni Aggiuntive"; break;
		case "C96130": columns = 65; maxLines =  12; labelTextarea = "Descrizione Istruzioni di Pagamento"; break;
		case "C96190": columns = 65; maxLines =  20; labelTextarea = "Descrizione Istruzioni di Pagamento da Cliente"; break;				
		case "C94060": columns = 50; maxLines =  70; labelTextarea = "Descrizione Variazioni"; break;				
		case "C94100": columns = 65; maxLines = 150; labelTextarea = "Testo Garanzia"; break;
		case "C96050": columns = 50; maxLines =  35; labelTextarea = "MT999-MT799"; break;				
		case "CD4035": columns = 80; maxLines =  99; labelTextarea = "Testo"; break;
		case "C01210": columns = 50; maxLines =  35; labelTextarea = "Note"; break;
		case "C94070": columns = 50; maxLines =  70; labelTextarea = "TAG:77J"; break;
		case "C96990": columns = 65; maxLines = 600; labelTextarea = "Testo"; break;
		case "C9V601": columns = 65; maxLines =  50; labelTextarea = "Inserimento Note Interne"; break;
		case "C9V602": columns = 65; maxLines =  50; labelTextarea = "Note Inserite"; break;
		case "C012H0": columns = 60; maxLines =   5; labelTextarea = "Note"; break;
		case "C95900": columns = 92; maxLines = 100; labelTextarea = "Riepilogo Dati E/C Scalare"; break;				
		case "C96180": columns = 70; maxLines =  35; labelTextarea = "Altre Info Beneficiario"; break;
		
		/* YOUTRADE */
		//textarea triple 27.690 crt
		case "C9410N": columns = 65; maxLines = 320; labelTextarea = "Testo Garanzia"; break;
		case "C9410T": columns = 65; maxLines = 320; labelTextarea = "Testo Garanzia"; break;
		case "C9410O": columns = 65; maxLines = 320; labelTextarea = "Testo Garanzia"; break;
		//textarea standard
		case "CINOTE": columns = 65; maxLines = 450; labelTextarea = "Testo Nota"; break;
		case "C94360": columns = 50; maxLines =  60; labelTextarea = "Testo Disclaimer"; break;
		case "C012M0": columns = 78; maxLines =  40; labelTextarea = "Testo Disclaimer"; break;
		case "C012O0": columns = 50; maxLines =  60; labelTextarea = "Testo Alert"; break;
		case "CCOCA0": columns = 50; maxLines = 35; labelTextarea = "Testo Comunicazione"; break;
		case "CCOD90": columns = 50; maxLines = 35; labelTextarea = "Testo Comunicazione"; break;
		case "CCOF90": columns = 50; maxLines = 35; labelTextarea = "Testo Comunicazione"; break;
		case "CNOI40": columns = 50; maxLines = 180; labelTextarea = "Testo Nota Interna"; break;
		case "CRIAAA": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni Inviate"; break;
		case "CRIAAB": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni Inviate"; break;
		case "CRIAAC": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni Inviate"; break;
		case "CRIAAD": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni Inviate"; break;
		case "CRIAAE": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni Inviate"; break;
		case "CRIAAF": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni Inviate"; break;
		case "CRIAAG": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni Inviate"; break;
		case "CRIAAH": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni Inviate"; break;
		case "CRIAAI": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni Inviate"; break;
		case "CRIAAL": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni Inviate"; break;
		case "CRIADA": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni in Risposta"; break;
		case "CRIADB": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni in Risposta"; break;
		case "CRIADC": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni in Risposta"; break;
		case "CRIADD": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni in Risposta"; break;
		case "CRIADE": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni in Risposta"; break;
		case "CRIADF": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni in Risposta"; break;
		case "CRIADG": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni in Risposta"; break;
		case "CRIADH": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni in Risposta"; break;
		case "CRIADI": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni in Risposta"; break;
		case "CRIADL": columns = 30; maxLines =  10; labelTextarea = "Testo Comunicazioni in Risposta"; break;
		case "CRICD0": columns = 50; maxLines = 180; labelTextarea = "Testo Comunicazione"; break;
		
		case "C96140": columns = 65; maxLines =  800; labelTextarea = "Descrizione Documenti Richiesti"; break;
		case "C9614O": columns = 65; maxLines =  800; labelTextarea = "Descrizione Documenti Richiesti Old"; break;
		case "C96110": columns = 65; maxLines =  800; labelTextarea = "Descrizione Beni e Servizi"; break;
		case "C9611O": columns = 65; maxLines =  800; labelTextarea = "Descrizione Beni e Servizi Old"; break;
		case "C96120": columns = 65; maxLines =  800; labelTextarea = "Descrizione Condizioni Aggiuntive"; break;
		case "C9612O": columns = 65; maxLines =  800; labelTextarea = "Descrizione Condizioni Aggiuntiven Old"; break;

		case "C96240": columns = 65; maxLines =  800; labelTextarea = "Condizioni Speciali di Pagamento per Beneficiario"; break;
		case "C9624O": columns = 65; maxLines =  800; labelTextarea = "Condizioni Speciali di Pagamento per Beneficiario Old"; break;
		case "C9624T": columns = 65; maxLines =  800; labelTextarea = "Condizioni Speciali di Pagamento per Beneficiario"; break;

		case "C96250": columns = 65; maxLines =  800; labelTextarea = "Condizioni Speciali di Pagamento per Banca Receiver"; break;
		case "C9625O": columns = 65; maxLines =  800; labelTextarea = "Condizioni Speciali di Pagamento per Banca Receiver Old"; break;
		case "C9625T": columns = 65; maxLines =  800; labelTextarea = "Condizioni Speciali di Pagamento per Banca Receiver"; break;

		case "CS79Z0": columns = 50; maxLines =  35; labelTextarea = "Informazioni Addizionali"; break;
		
		/* DA NON CONTROLLARE FINO A NUOVO ORDINE
		case "C94062": columns = 50; maxLines =  70; labelTextarea = "Nostre Variazioni"; break;
		case "C36500": columns = 65; maxLines =  30; labelTextarea = "Dettagli del Metallo"; break;
		case "CJD4L0": columns = 90; maxLines =  12; labelTextarea = "Descrizione dei Flag"; break;
		case "CJD4L1": columns = 90; maxLines =  12; labelTextarea = "Descrizione Estesa dei Valori"; break;
		case "CJD070": columns = 65; maxLines =   4; labelTextarea = "Notes"; break;
		case "CH0070": columns = 65; maxLines =   3; labelTextarea = "Altri Dati"; break;
		case "CH0071": columns = 65; maxLines =  30; labelTextarea = "Dati di Output"; break;
		case "C52900": columns = 100; maxLines =  20; labelTextarea = "Contenuto"; break;
		case "CD3530": columns = 50; maxLines =  10; labelTextarea = "Descrizione Estesa"; break;
		*/
		
		default:
	        maxLines =  "";
	    	columns = "";
	    	labelTextarea = "";
	}
	
	dim.push(maxLines, columns);
	cd.push([key, dim]);
	
	return cd;
}