		function retrieve(fieldName) {

			var value = '';
			try {
				value = $('#'+fieldName).html();
			}
			catch(e) {
				value = $('#'+fieldName).val();
			}
			return value;
		}	
		
		function prepare(fieldName, value) {
			try {
				//$('#'+fieldName).html(value);
				document.getElementById(fieldName).innerHTML = value;
			}
			catch(e) {
				//$('#'+fieldName).val(value);
				document.getElementById(fieldName).value = value;
			}
			/*
			try {
				tinyMCE.execCommand('mceAddControl', false, fieldName);
			}
			catch(e) {}
			*/
		}

		function isInternetExplorer() {
			  
			var appName = navigator.appName.toLowerCase();
			var result = (appName.indexOf('explorer') > -1);
			return result;
		}
		
		function checkInputValue(value, isRestrictedFilter, fieldName) {
			
			value = value.toLowerCase();
			var isCorrect = true;
			var filter = isRestrictedFilter ? restrictedFilter : notRestrictedFilter;
			for (var index = 0; index < value.length; index++) {
				if (filter.indexOf(value.charAt(index)) == -1) {
					isCorrect = false;
					index = value.length;
				}
			}
			if (!isCorrect) {
				if (isRestrictedFilter) {
					updateCount('countKey', 'keyError');
				}
				else {
					updateCount('countInputText', 'inputTextError', fieldName);
				}
			}
		}
		
		function updateCount(countId, errorCountId, fieldName) {
			
			var oldValue = parseInt($('#' + countId).val());
			var newValue = oldValue + 1;
			$('#' + countId).val('' + newValue);
			if (fieldName) {
				$('#iteFieldName').html(fieldName);
			}
			$('#' + errorCountId).attr('class', 'enable');
			$('#ErroriValidazione').show();
		}

		var globalFlag = false;
		var isIE = isInternetExplorer();
		var restrictedFilter = 'qwertyuiopasdfghjklzxcvbnm0123456789_';
		var notRestrictedFilter = '!@#$�%^&*()+=-[]\\\;,./{}|\":<>?�����찧qwertyuiopasdfghjklzxcvbnm0123456789_ ';

		function verifySingleField(fieldName, fieldLabelName, fieldValue, checkIfItIsNumber) {
			
			var result = false;
			if ($('#'+fieldName).val() == fieldValue || (checkIfItIsNumber && isNaN($('#'+fieldName).val()))) {
				$('#'+fieldLabelName).attr('class', 'labelError');
				result = true;
				if (globalFlag == false) {
					globalFlag = true;
					$('#'+fieldName).trigger('focus');
				}
			}
			else {
				$('#'+fieldLabelName).attr('class', 'label');
			}
			return result;
		}	

		function verifyQuoteField(fieldName, fieldLabelName, totalFieldName, otherFieldName) {
			var result = false;
			var fieldValue = (isNaN($('#'+fieldName).val())) ? -1 : parseInt($('#'+fieldName).val());
			var secondStepError = false;
			if ( totalFieldName && otherFieldName && !isNaN($('#'+totalFieldName).val()) && !isNaN($('#'+otherFieldName).val()) ) {
				var totalFieldValue = parseInt($('#'+totalFieldName).val());
				var otherFieldValue = parseInt($('#'+otherFieldName).val());
				if ( (totalFieldValue > 0) && (otherFieldValue > -1) && (fieldValue > (totalFieldValue - otherFieldValue)) ) {
					secondStepError = true;
				}
			}
			if ( secondStepError || (fieldValue < 0) ) {
				$('#'+fieldLabelName).attr('class', 'labelError');
				result = true;
				if (globalFlag == false) {
					globalFlag = true;
					$('#'+fieldName).trigger('focus');
				}
			}
			else {
				$('#'+fieldLabelName).attr('class', 'label');
			}
			return result;			
		}
		
		function isValidTipoEvento(fieldName, fieldLabelName) {
			var result = false;
			var exp=/^[a-zA-Z0-9_.]+$/;
			
			if($('#'+fieldName).val() != "") {
				var string = $('#'+fieldName).val();
				if (exp.test(string))
					result=true;
				else
					result=false;
			}
			else
				result=false;
			
			if(!result) {
				$('#'+fieldLabelName).attr('class', 'labelError');
				if (globalFlag == false) {
					globalFlag = true;
					$('#'+fieldName).trigger('focus');
				}
			}
			else {
				if (globalFlag == false)
					$('#'+fieldLabelName).attr('class', 'label');
			}
			
			return result;
		}

		function inviaRichiesta(formId) {
			
			var noerrors = true;
			var globalFlag = false;
			var errorMessage = "Uno o pi� campi non sono correttamente valorizzati. Rivedere i campi evidenziati.";
			
			if ((verifySingleField("tipo_evento", "tipo_eventoLabel", "", false))||(!isValidTipoEvento("tipo_evento", "tipo_eventoLabel"))) {
				noerrors = false;
			}
			
			if ((verifySingleField("primo_piano", "primo_pianoLabel", "", false))||(!isValidTipoEvento("primo_piano", "primo_pianoLabel"))) {
				noerrors = false;
			}
			if (verifySingleField("nome_evento", "nome_eventoLabel", "", false)) {
				noerrors = false;
			}	
			if (verifySingleField("location", "locationLabel", "", false)) {
				noerrors = false;
			}
			var objSelect = $('#categoria_evento');
			var optionSelected = objSelect.val();
			/* 
			var fisico = $('#fisico').val();
			if(optionSelected == '<%=EventBeanBF.CATEGORIA_EVENTO.streaming.name()%>') {
				if(verifySingleField("codconferenza_evento", "codconferenza_eventoLabel", "", false)) {
					noerrors = false;
				}
			} 
			*/
			
			if (verifyQuoteField('max_utenti', 'max_utentiLabel')) {
				noerrors = false;
			}
			if (verifyQuoteField('num_prospect', 'num_prospectLabel', 'max_utenti', 'num_private')) {
				noerrors = false;
			}	
			if (verifyQuoteField('num_private', 'num_privateLabel', 'max_utenti', 'num_prospect')) {
				noerrors = false;
			}

			if (!checkDataPub()) {
				noerrors=false;
							
			}	
			if (!checkDataScadIsc()) {
				noerrors=false;
							
			}	

			if (!checkDataIni()) {
				noerrors=false;
							
			}
			

							
			var numberOfSpeakers = parseInt($('#numberOfSpeakers').val());
			for (var index = 1; index <= numberOfSpeakers; index++) {
				if (verifySingleField(("speaker_name_" + index), ("speaker_name_" + index + "Label"), "", false)) {
					noerrors = false;
				}
				if (verifySingleField(("speaker_surname_" + index), ("speaker_surname_" + index + "Label"), "", false)) {
					noerrors = false;
				}				
			}
			var numberOfQuestions = parseInt($('#numberOfQuestions').val());
			for (var index = 1; index <= numberOfQuestions; index++) {
				if (!($('#question_question_' + index).attr('disabled') == 'disabled')) {
					if (verifySingleField(("question_question_" + index), ("question_question_" + index + "Label"), "", false)) {
						noerrors = false;
					}
					if (verifySingleField(("question_question_" + index), ("question_question_" + index + "Label"), "", false)) {
						noerrors = false;
					}				
					var selectAnswer = $('#question_answers_' + index);
					var selectAnswerOpt = $('#question_answers_' + index + ' option');
					if (selectAnswerOpt.length == 0) {
						var selectAnswerTd = $('#question_answers_' + index + 'Label');
						selectAnswerTd.attr('class', 'labelError');
						selectAnswer.trigger('focus');
						globalFlag = true;
						noerrors = false;
					}
				}
			}
	 		if (noerrors) {
		 		// popolo i campi con le risposte disponibili
		 		populateAnswerFields();
		 		fillErrorField();
		 		cleanFields();
		 		
	 			// submit del form
				$('#'+formId).submit();
	 		}
	 		else {
		 		alert(errorMessage);
	 		} 	
		}	
		
		function fillErrorField() {
			
			var errorsResult = '';
			// gestione degli errori di validita' del campo "Codice evento"
			var ceErrors = $('#countKey').val();
			if (ceErrors != '0') {
				errorsResult += ('CE:' + ceErrors + '-');
			}	
			// gestione degli errori di validita' dei campi di tipo input text
			var itErrors = $('#countInputText').val();
			if (itErrors != '0') {
				errorsResult += ('IT:' + itErrors + '-');
			}			
			// gestione degli errori di tipo "copia e incolla"
			var pasteErrors = $('#countPaste').val();
			if (pasteErrors != '0') {
				errorsResult += ('CEI:' + pasteErrors + '-');
			}
			// aggiungi qui ulteriori errori in pagina da salvare nelle observations
			
			// immagazzino gli errori nella variabile stile_Evento
			$('#stile_evento').val(errorsResult);
		}

		function cleanFields() {
			$('#location').val(replaceAll($('#location').val(), '"', '&quot;'));
			$('#nome_evento').val(replaceAll($('#nome_evento').val(), '"', '&quot;'));
			$('#sotto_titolo').val(replaceAll($('#sotto_titolo').val(), '"', '&quot;'));
			$('#ErroriValidazione').hide();
		}

		function replaceAll(str, s1, s2) {
			return str.split(s1).join(s2);
		}

		//Verifica data Pubblicazione (confronto con la data scadenza iscrizione)
		function checkDataPub(){
			var chk = true;
			var dd = document.getElementById('dp.day').value;
			var mm = document.getElementById('dp.month').value;
			var yyyy = document.getElementById('dp.year').value;
			var hh = document.getElementById('dp.hour').value;
			var min = document.getElementById('dp.minute').value;
			

			var dd1 = document.getElementById('dsi.day').value;
			var mm1 = document.getElementById('dsi.month').value;
			var yyyy1 = document.getElementById('dsi.year').value;
			var hh1 = document.getElementById('dsi.hour').value;
			var min1 = document.getElementById('dsi.minute').value;	
			// utilizzo la notazione standard e non jquery per la presenza del carattere "." nei rispettivi id
			
			if (checkDate(dd, mm, yyyy, hh, min, "data_pubblicazioneLabel") && checkDate(dd1, mm1, yyyy1, hh1, min1, "data_scadenza_iscrizioneLabel")  ) {
				
				var dtPubl = convertToDate(dd, mm, yyyy, hh, min);
				var dtScad = convertToDate(dd1, mm1, yyyy1, hh1, min1);

				if (dtPubl.getTime() > dtScad.getTime()) { 
					$('#data_pubblicazioneLabel').attr('class','labelError');
					chk=false;
				}
			}else{
				  chk=false;
				 }
			return chk;
		}
	   // Verifica validita' date tra scadenza iscrizione e data evento
		function checkDataScadIsc(){
			var chk = true;
			var dd = document.getElementById('dsi.day').value;
			var mm = document.getElementById('dsi.month').value;
			var yyyy = document.getElementById('dsi.year').value;
			var hh = document.getElementById('dsi.hour').value;
			var min = document.getElementById('dsi.minute').value;
			

			var dd1 = document.getElementById('de.day').value;
			var mm1 = document.getElementById('de.month').value;
			var yyyy1 = document.getElementById('de.year').value;
			var hh1 = document.getElementById('de.hour').value;
			var min1 = document.getElementById('de.minute').value;
			
			// utilizzo la notazione standard e non jquery per la presenza del carattere "." nei rispettivi id
			
			if (checkDate(dd, mm, yyyy, hh, min, "data_scadenza_iscrizioneLabel") && checkDate(dd1, mm1, yyyy1, hh1, min1, "data_eventoLabel") ) {
				
				var dtScadIsc = convertToDate(dd, mm, yyyy, hh, min);
				var dtEvent = convertToDate(dd1, mm1, yyyy1, hh1, min1);
				
				if (dtScadIsc.getTime() > dtEvent.getTime()) { 
					$('#data_scadenza_iscrizioneLabel').attr('class', 'labelError');
					chk=false;
				    				    
				}
			}else{
				  chk=false;
				 }
			return chk;
		}

		function checkDataIni(){
			var chk = true;
			var ddi = "";
			var mmi = "";
			var yyyyi = "";
			var hh1 = "";
			var mini = "";
			
			var ddf = "";
			var mmf = "";
			var yyyyf = "";
			var hhf = "";
			var minf = "";
			var pos;
			var numberOfSpeakers = parseInt($('#numberOfSpeakers').val());
			
			for(var index = 1; index <= numberOfSpeakers; index++) {
				 pos = index ;
				 ddi = document.getElementById('speaker_di_'+pos +'.day').value;				
				 mmi = document.getElementById('speaker_di_'+pos +'.month').value;
				 yyyyi = document.getElementById('speaker_di_'+pos +'.year').value;
				 hhi = document.getElementById('speaker_di_'+pos +'.hour').value;
				 mini = document.getElementById('speaker_di_'+pos +'.minute').value;
				
				
				 ddf = document.getElementById('speaker_df_'+pos + '.day').value;
				 mmf = document.getElementById('speaker_df_'+pos + '.month').value;
				 yyyyf = document.getElementById('speaker_df_'+pos + '.year').value;
				 hhf = document.getElementById('speaker_df_'+pos +'.hour').value;
				 minf = document.getElementById('speaker_df_'+pos +'.minute').value;
				// utilizzo la notazione standard e non jquery per la presenza del "." nei rispettivi id
						
				if (checkDate(ddi, mmi, yyyyi, hhi, mini, "speaker_dataInizioLabel_"+pos) && checkDate(ddf, mmf, yyyyf, hhf, minf, "speaker_dataFineLabel_"+pos)  ) {
					
					var dtInizio = convertToDate(ddi, mmi, yyyyi, hh1, mini);
					var dtFine = convertToDate(ddf, mmf, yyyyf, hhf, minf);
			
					if (dtInizio.getTime() > dtFine.getTime()) { 
						$('#speaker_dataInizioLabel_'+pos).attr('class', 'labelError');
						chk=false;
					    				    
					}
				}else{
					  chk=false;
					 }
			}
				return chk;
					
		}
 
		// verifica la validita delle date 
		function checkDate(day, month, year,labelName, hour, minute) {

		    if ((month==4 || month==6 || month==9 || month==11) && day==31) {
					$('#'+labelName).attr('class', 'labelError');
		           return false;
		    }
		    if (month == 2) { // check for february 29th
		        var isleap = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0));
		        if (day>29 || (day==29 && !isleap)) {
		        	$('#'+labelName).attr('class', 'labelError');
		        	
		            return false;
		        }
		    }
		    $('#'+labelName).attr('class', '');
		    return true;  // date is valid
		}

		function getActionCue() {
			var statoEvento = $('#stato_evento').val(),
				actionCue = '',
				obsKey = '',
				dayDE = document.getElementById('de.day').value, 
				monthDE = document.getElementById('de.month').value, 
				yearDE = document.getElementById('de.year').value,
				hourDE = document.getElementById('de.hour').value,
				minDE = document.getElementById('de.minute').value;
			// utilizzo la notazione standard e non jquery per la presenza del "." nei rispettivi id

			if (!dateIsValid(dayDE, monthDE, yearDE, hourDE, minDE, true)) {
				statoEvento = 'old';
				obsKey = $('#historical_obsKey').val();
			}
			else if ('offline' == statoEvento) {
				obsKey = $('#offline_obsKey').val();
			}
			else {
				obsKey = $('#online_obsKey').val();
				statoEvento = 'online';
			}

			actionCue += (obsKey + '&status=' + statoEvento);
			return actionCue;
		}
		
		function convertToDate(dd, mm, yyyy, hh, min) {
		
			var newDate = new Date();
			var month = mm - 1;
			newDate.setFullYear(yyyy);
			newDate.setMonth(month,dd);
			newDate.setHours(hh,min);
			return newDate;
		}

		function dateIsValid(dd, mm, yyyy, hh, min, mustBeInTheFuture) {

			var dateIsValid = false;
			try {
				var serverDate = new Date();
				var dateToCheck = new Date();
				var month = mm - 1;
				dateToCheck.setFullYear(yyyy);
				dateToCheck.setMonth(month,dd);
				dateToCheck.setHours(hh, min);
				var difference = serverDate - dateToCheck;
				if ( (month == dateToCheck.getMonth()) && !mustBeInTheFuture && (difference > 0) ) {
					dateIsValid = true;
				}
				else if ( (month == dateToCheck.getMonth()) && mustBeInTheFuture && (difference < 0) ) {
					dateIsValid = true;
				}
			}
			catch(e) {
				dateIsValid = false;
			}
			return dateIsValid;
		}		

		function populateAnswerFields() {
			var prosecute = true;
			for (var index = 1; prosecute == true; index++) {
				var selectAnswer = $('#question_answers_' + index);
				if (selectAnswer.length) {
					var allAnswers = '';
					var selectAnswerOpt = $('#question_answers_' + index + ' option');
					for (var selIndex = 0; selIndex < selectAnswerOpt.length; selIndex++) {
						allAnswers += selectAnswerOpt.eq(selIndex).html();
						if (selIndex < (selectAnswerOpt.length - 1)) {
							allAnswers += ';';
						}
					}
					$('#list_answers_' + index).val(allAnswers);
				}
				else {
					prosecute = false;
				}
			}
		}

		function globalSetAttr(field, attributeName, attributeValue) {

			field = $(field);
			switch (attributeName) {
				case 'click': case 'focus':
					field.on(attributeName, attributeValue);
					break;
				case 'border': case 'maxLength':
					field.css(attributeName, attributeValue);
					break;
				default:
					field.attr(attributeName, attributeValue);
					break;
			}
		}		

		function actOverSpeakers(action, index, nextIndex)	{

			var speakersAction = $('#speakersAction');
			var numberOfSpeakers = parseInt($('#numberOfSpeakers').val());
			if ( (speakersAction.val() == '') || (speakersAction.val() == 'add') ) {
				speakersAction.val(action);
			}
			if (action == 'add') {
				numberOfSpeakers++;
				$('#removeSpeakers').css('display', '');
				$('#numberOfSpeakers').val(numberOfSpeakers);
				addSpeaker(numberOfSpeakers);
				restoreSpeakerOption(numberOfSpeakers, action, numberOfSpeakers);
			}
			else if (action == 'remove') {
				if (index > 0) {
					numberOfSpeakers--;
					$('#numberOfSpeakers').val(numberOfSpeakers);
					removeSpeaker(index);
					restoreSpeakerOption(index, action);
				}
			}
			else {
				nextIndex++;
				if (index > nextIndex) {
					var swap = index;
					index = nextIndex;
					nextIndex = swap;
				}
				moveSpeakers(index, nextIndex);
			}
		}

		function actOverQuestions(action, index, nextIndex)	{

			var questionsAction = $('#questionsAction');
			var numberOfQuestions = parseInt($('#numberOfQuestions').val());
			if ( (questionsAction.val() == '') || (questionsAction.val() == 'add') ) {
				questionsAction.val(action);
			}
			if (action == 'add') {
				numberOfQuestions++;
				$('#removeQuestions').css('display', '');
				$('#numberOfQuestions').val(numberOfQuestions);
				addQuestion(numberOfQuestions);
				restoreQuestionOption(numberOfQuestions, action, numberOfQuestions);
			}
			else if (action == 'remove') {
				if (index > 0) {
					numberOfQuestions--;
					$('#numberOfQuestions').val(numberOfQuestions);
					removeQuestion(index);
					restoreQuestionOption(index, action);
				}
			}
		}	

		function addQuestion(numberOfQuestions) {
						
			var tableEvents = $('#body_events');
			var functionCheckMaxLength = 'javascript:checkMaxLength(this, "flagMaxLength", "flagInputValue", "fieldName");';
			var funcMaxLength = '';

			var row_1 = $('<tr id="tr1_question_' + numberOfQuestions + '"></tr>');
			var td_1_1 = $('<td class="dx" style="width: 95px" id="question_question_' + numberOfQuestions + 'Label"></td>').html("Domanda*");
			row_1.append(td_1_1);
			var td_1_2 = $('<td colspan="2"></td>');
			funcMaxLength = functionCheckMaxLength.replace("flagMaxLength", "false").replace("flagInputValue", "false").replace("fieldName", "Domanda");
			var input_1_2 = $('<input type="text" size="60" id="question_question_' + numberOfQuestions + '" name="question_question_' + numberOfQuestions + '" value="" onkeyup="' + funcMaxLength + '" />');
			td_1_2.append(input_1_2);
			row_1.append(td_1_2);
			var td_1_3 = $('<td class="dx" id="question_answers_' + numberOfQuestions + 'Label"></td>').html("Elenco risposte*");
			row_1.append(td_1_3);
			var td_1_4 = $('<td colspan="2" rowspan="3"></td>');
			var sel_1_4 = $('<select class="answersList" id="question_answers_' + numberOfQuestions + '" name="question_answers_' + numberOfQuestions + '" size="10"></select>');
			td_1_4.append(sel_1_4);
			row_1.append(td_1_4);
			tableEvents.append(row_1);

			var noFunction = 'javascript:;';
			var functionAdd = 'javascript:addAnswer(' + numberOfQuestions + ');';
			var row_2 = $('<tr id="tr2_question_' + numberOfQuestions + '"></tr>');
			var td_2_1 = $('<td class="dx" style="width: 95px"></td>').html("Aggiungi risposta");
			row_2.append(td_2_1);
			var td_2_2 = $('<td colspan="2"></td>');
			funcMaxLength = functionCheckMaxLength.replace("flagMaxLength", "true").replace("flagInputValue", "false").replace("fieldName", "Aggiungi risposta");
			var input_2_2 = $('<input type="text" size="56" maxlength="50" id="question_add_answer_' + numberOfQuestions + '" name="question_add_answer_' + numberOfQuestions + '" value="" onkeyup="' + funcMaxLength + '" />');
			td_2_2.append(input_2_2);
			var a_2_2 = $('<a href="'+noFunction+'" onclick="'+functionAdd+'"></a>');
			var img_2_2 = $('<img class="alignImg" style="margin-top:-2px" src="/img/icon_add.gif" title="Aggiungi una risposta" border="1" />');
			a_2_2.append(img_2_2);
			td_2_2.append(a_2_2);
			row_2.append(td_2_2);
			var td_2_3 = $('<td class="dx"></td>').html(" ");
			row_2.append(td_2_3);
			tableEvents.append(row_2);

			var row_3 = $('<tr id="tr3_question_' + numberOfQuestions + '"></tr>');
			var td_3_1 = $('<td class="dx" style="width: 95px" id="question_error_' + numberOfQuestions + 'Label"></td>').html("Descrizione errore");
			row_3.append(td_3_1);
			var td_3_2 = $('<td colspan="2"></td>');
			funcMaxLength = functionCheckMaxLength.replace("flagMaxLength", "false").replace("flagInputValue", "false").replace("fieldName", "Descrizione errore");
			var input_3_2 = $('<input type="text" size="60" id="question_error_' + numberOfQuestions + '" name="question_error_' + numberOfQuestions + '" value="Correggere il campo evidenziato" onkeyup="' + funcMaxLength + '" />');
			td_3_2.append(input_3_2);
			row_3.append(td_3_2);
			tableEvents.append(row_3);		

			var row_4 = $('<tr id="tr4_question_' + numberOfQuestions + '"></tr>');
			var td_4_1 = $('<td class="dx" style="width: 95px"></td>').html("Campo obbligatorio");
			row_4.append(td_4_1);
			var td_4_2 =  $('<td colspan="2"></td>');
			var input_4_2_yes = $('<input type="radio" id="question_radio_yes_' + numberOfQuestions + '" name="question_radio_' + numberOfQuestions +' value="yes" checked="checked" />');
			td_4_2.append(input_4_2_yes);
			td_4_2.append('S\u00EC');
			var input_4_2_no = $('<input type="radio" id="question_radio_no_' + numberOfQuestions + '" name="question_radio_' + numberOfQuestions +' value="no" />');
			td_4_2.append(input_4_2_no);
			td_4_2.append('No');
			row_4.append(td_4_2);
			var td_4_3 = $('<td class="dx"></td>').html("Azioni");
			row_4.append(td_4_3);
			var td_4_4 = $('<td colspan="2"></td>');
			var moveUpFunction = 'javascript:moveAnswer(' + numberOfQuestions + ', "up");';
			var a_4_4_up = $('<a href="'+noFunction+'" onclick="'+moveUpFunction+'" id="question_up_' + numberOfQuestions + '"></a>');
			var img_4_4_up = $('<img src="/img/icon_up.gif" title="sposta in alto" border="1" />');
			a_4_4_up.append(img_4_4_up);
			td_4_4.append(a_4_4_up);
			td_4_4.append(' ');
			var moveDownFunction = 'javascript:moveAnswer(' + numberOfQuestions + ', "down");';
			var a_4_4_down = $('<a href="'+noFunction+'" onclick="'+moveDownFunction+'" id="question_down_' + numberOfQuestions + '"></a>');
			var img_4_4_down = $('<img src="/img/icon_upicon_down.gif" title="sposta in basso" border="1" />');
			a_4_4_down.append(img_4_4_down);
			td_4_4.append(a_4_4_down);	
			td_4_4.append(' ');	
			var deleteFunction = 'javascript:deleteAnswer(' + numberOfQuestions + ');';
			var a_4_4_delete = $('<a href="'+noFunction+'" onclick="'+deleteFunction+'" id="question_delete_' + numberOfQuestions + '"></a>');
			var img_4_4_delete = $('<img src="/img/icon_delete.gif" title="rimuovi" border="1" />');
			a_4_4_delete.append(img_4_4_delete);
			td_4_4.append(a_4_4_delete);
			row_4.append(td_4_4);
			tableEvents.append(row_4);

			var row_5 = $('<tr id="tr5_question_' + numberOfQuestions + '"></tr>');
			var td_5_1 = $('<td colspan="6"></td>').html("\u00a0");
			var input_5_1 = $('<input type="hidden" id="flag_question_' + numberOfQuestions + '" name="flag_question_' + numberOfQuestions + '" value="ok" />');
			td_5_1.append(input_5_1);
			var input_5_2 = $('<input type="hidden" id="list_answers_' + numberOfQuestions + '" name="list_answers_' + numberOfQuestions + '" value="" />');
			td_5_1.append(input_5_2);
			row_5.append(td_5_1);
			tableEvents.append(row_5);				
		}

		function moveAnswer(pos, direction) {

			var selectElement = $('#question_answers_' + pos);
			var selectedIndex = selectElement.prop('selectedIndex');
			var allOptions = $('#question_answers_' + pos + ' option');
			var length = allOptions.length;
			
			if ( (selectedIndex > 0) && (direction == 'up') ) {
				var option1 = allOptions.eq(selectedIndex - 1);
				var option2 = allOptions.eq(selectedIndex);
				swapOptions(option1, option2);
				selectElement.prop(selectedIndex - 1);
			}
			else if ( (selectedIndex > -1) && (direction == 'down') && (selectedIndex < (length - 1)) ) {
				var option1 = allOptions.eq(selectedIndex + 1);
				var option2 = allOptions.eq(selectedIndex);
				swapOptions(option1, option2);
				selectElement.prop(selectedIndex + 1);
			}
		}

		function swapOptions(option1, option2) {
			var swap = option1.val();
			option1.val(option2.val());
			option2.val(swap);
			swap = option1.html();
			option1.html(option2.html());
			option2.html(swap);
		}

		function deleteAnswer(pos) {
			var selectElement = $('#question_answers_' + pos);
			var selectedIndex = selectElement.prop('selectedIndex');
			if ( (selectElement.attr('disabled') != 'disabled') && (selectedIndex > -1) ) {
				$('#question_answers_' + pos + ' option').eq(selectedIndex).remove();
			}
		}

		function addAnswer(pos) {
			var answerToAdd = $('#question_add_answer_' + pos).val();
			if (answerToAdd != '') {
				var selectElement = $('#question_answers_' + pos);
				var optionToAdd = $('<option value="' + answerToAdd + '"></option>').html(answerToAdd);
				selectElement.append(optionToAdd);
				$('#question_add_answer_' + pos).val('');
			}
		}

		function addSpeaker(numberOfSpeakers) {

			var tableEvents = $('#body_events');
			var inputSize = $('#in_size').val();
			var midWidthSize = $('#mid_width').val();
			var maxWidthSize = $('#max_width').val();
			var iconCalendarPath = $('#icon_calendar_path').val();
			var functionCheckMaxLength = 'javascript:checkMaxLength(this, "flagMaxLength", "flagInputValue", "fieldName");';
			var funcMaxLength = '';
			var functionCheckBox = 'javascript:changeCBValue(this.id);';
			var MAX_LENGTH = $('#MAX_LENGTH').val();
			var LOCATION_MAX_LENGTH = $('#LOCATION_MAX_LENGTH').val();

			// *** riga 1: Ordine di intervento, nome, cognome ***
			var row_1 = $('<tr id="tr1_speaker_' + numberOfSpeakers + '"></tr>');
			
			// Ordine di intervento
			var td_1_1 = $('<td class="dx" style="width:95px;"></td>').html("Ordine di intervento");
			row_1.append(td_1_1);
			var td_1_2 = $('<td style="width:' + midWidthSize + 'px;"></td>');
			var sel_1_2 = $('<select class="normalStyle" name="speaker_pos_' + numberOfSpeakers + '" id="speaker_pos_' + numberOfSpeakers + '"></select>');
			for (var optIndex = 1; optIndex <= numberOfSpeakers; optIndex++) {
				var optionSelected = (optIndex == numberOfSpeakers) ? ' selected="selected"' : '';
				var opt_1_2 = $('<option value="' + optIndex + '"' + optionSelected + '></option>').html('posizione ' + optIndex);
				sel_1_2.append(opt_1_2);
			}
			td_1_2.append(sel_1_2);
			row_1.append(td_1_2);
			
			// Nome
			var td_1_3 = $('<td class="dx" style="width:95px;"></td>');
			var span_1_3 = $('<span class="label" id="speaker_name_' + numberOfSpeakers + 'Label"></span>').html("Nome*");
			td_1_3.append(span_1_3);
			row_1.append(td_1_3);
			var td_1_4 = $('<td style="width:' + midWidthSize + 'px;"></td>');
			funcMaxLength = functionCheckMaxLength.replace("flagMaxLength", "true").replace("flagInputValue", "false").replace("fieldName", "Nome");
			var input_1_4 = $('<input type="text" id="speaker_name_' + numberOfSpeakers + '" name="speaker_name_' + numberOfSpeakers + '" maxlength="' + MAX_LENGTH + '" size="' + inputSize + '" value="" onkeyup="' + funcMaxLength + '" />');
			td_1_4.append(input_1_4);
			row_1.append(td_1_4);
			
			// Cognome
			var td_1_5 = $('<td class="dx" style="width:95px;"></td>');
			var span_1_5 = $('<span class="label" id="speaker_surname_' + numberOfSpeakers + 'Label"></span>').html("Cognome*");
			td_1_5.append(span_1_5);
			row_1.append(td_1_5);
			var td_1_6 = $('<td style="width:' + maxWidthSize + 'px;"></td>');
			funcMaxLength = functionCheckMaxLength.replace("flagMaxLength", "true").replace("flagInputValue", "false").replace("fieldName", "Cognome");
			var input_1_6 = $('<input type="text" id="speaker_surname_' + numberOfSpeakers + '" name="speaker_surname_' + numberOfSpeakers + '" maxlength="' + MAX_LENGTH + '" size="' + inputSize + '" value="" onkeyup="' + funcMaxLength + '" />');
			td_1_6.append(input_1_6);
			row_1.append(td_1_6);
			tableEvents.append(row_1);

			// *** riga 2: Fascia oraria, Ruolo ***
			var row_2 = $('<tr id="tr2_speaker_' + numberOfSpeakers + '"></tr>');
			
			// Fascia oraria
			var td_2_1 = $('<td class="dx" style="width:95px;"></td>').html("Fascia oraria");
			row_2.append(td_2_1);
			var td_2_2 = $('<td style="width:' + midWidthSize + 'px;"></td>');
			var popupFunction = 'javascript:openPopup(this.id, this.value);';
			var input_2_2 = $('<input type="text" id="speaker_fo_' + numberOfSpeakers + '" name="speaker_fo_' + numberOfSpeakers + '" value="" onclick="' + popupFunction + '" autocomplete="off"/>');
			td_2_2.append(input_2_2);
			row_2.append(td_2_2);	
			
			// Ruolo
			var td_2_3 = $('<td class="dx" style="width:95px;"></td>').html("Ruolo");
			row_2.append(td_2_3);
			var td_2_4 = $('<td style="width:' + maxWidthSize + 'px;"></td>');
			funcMaxLength = functionCheckMaxLength.replace("flagMaxLength", "true").replace("flagInputValue", "false").replace("fieldName", "Ruolo");
			var input_2_4 = $('<input type="text" id="speaker_role_' + numberOfSpeakers + '" name="speaker_role_' + numberOfSpeakers + '" maxlength="' + LOCATION_MAX_LENGTH +'" size="' + inputSize + '" value="" onkeyup="' + funcMaxLength + '" />');
			td_2_4.append(input_2_4);
			row_2.append(td_2_4);
			
			// td vuoti
			var td_2_5 = $('<td class="dx" style="width:95px;"></td>').html("&nbsp;");
			row_2.append(td_2_5);
			var td_2_6 = $('<td style="width:' + maxWidthSize + 'px;"></td>').html("&nbsp;");
			row_2.append(td_2_6);
			tableEvents.append(row_2);
			
			// *** riga 3:  Link documento,  Link video, Tema ***
			var row_3 = $('<tr id="tr3_speaker_' + numberOfSpeakers + '"></tr>');
			
			// Link documento
			var td_3_1 = $('<td class="dx" style="width:95px;"></td>').html("Link documento");
			row_3.append(td_3_1);
			var td_3_2 = $('<td style="width:' + maxWidthSize + 'px;"></td>');
			funcMaxLength = functionCheckMaxLength.replace("flagMaxLength", "false").replace("flagInputValue", "false").replace("fieldName", "Link documento");
			var input_3_2 = $('<input type="text" id="speaker_lm_' + numberOfSpeakers + '" name="speaker_lm_' + numberOfSpeakers + '" size="' + inputSize + '" value="" onkeyup="' + funcMaxLength + '" />');
			td_3_2.append(input_3_2);
			row_3.append(td_3_2);
			
			// Link video
			var td_3_3 = $('<td class="dx" style="width:95px;"></td>').html("Link video");
			row_3.append(td_3_3);
			var td_3_4 = $('<td style="width:' + maxWidthSize + 'px;"></td>');
			funcMaxLength = functionCheckMaxLength.replace("flagMaxLength", "false").replace("flagInputValue", "false").replace("fieldName", "Link video");
			var input_3_4 = $('<input type="text" id="speaker_lv_' + numberOfSpeakers + '" name="speaker_lv_' + numberOfSpeakers + '" size="' + inputSize + '" value="" onkeyup="' + funcMaxLength + '" />');
			td_3_4.append(input_3_4);
			row_3.append(td_3_4);			
			
			// Link esterno
			var td_3_5 = $('<td class="dx" style="width:95px;"></td>').html("Link esterno");
			row_3.append(td_3_5);
			var td_3_6 = $('<td style="width' + midWidthSize + 'px;"></td>');
			funcMaxLength = functionCheckMaxLength.replace("flagMaxLength", "false").replace("flagInputValue", "false").replace("fieldName", "Link esterno");
			var input_3_6 = $('<input type="checkbox" id="speaker_le_' + numberOfSpeakers + '" name="speaker_le_' + numberOfSpeakers + '" maxlength="' + LOCATION_MAX_LENGTH + '" value="N" onclick="' + functionCheckBox + '" onkeyup="' + funcMaxLength + '" />');
			td_3_6.append(input_3_6);
			row_3.append(td_3_6);
			tableEvents.append(row_3);
			
			// *** riga 4: Data inizio, Data fine ***
			var row_4 = $('<tr id="tr4_speaker_' + numberOfSpeakers + '"></tr>');

			//Data Inizio
			var data = new Date();
			var gg = data.getDate();
			var mm = data.getMonth();
			var aaaa = data.getFullYear();	
			var mesi = new Array (	"","Gennaio","Febbraio","Marzo","Aprile", "Maggio","Giugno",
							"Luglio","Agosto","Settembre","Ottobre", "Novembre","Dicembre");
			var td_4_1 = $('<td class="dx" style="width:95px;"></td>');
			var span_4_1 = $('<span class="label" id="speaker_dataInizioLabel_' + numberOfSpeakers + '"></span>').html("Data Inizio");
			td_4_1.append(span_4_1);
			row_4.append(td_4_1);
			var td_4_2 = $('<td style="width:' + maxWidthSize + 'px;"></td>');
			// giorno
			var select_4_2_gg = $('<select class="dataStyle normalStyle" name="speaker_di_' + numberOfSpeakers + ' .day" id="speaker_di_' + numberOfSpeakers + '.day"></select>');
			for (var  index1 = 1; index1 < 32; index1++) {
				var optionText = (index1 < 10) ? ("0" + index1) : ("" + index1);
				var option_4_2_gg = $('<option value="' + index1 + '"></option>').html(optionText);
				select_4_2_gg.append(option_4_2_gg);
			}
			select_4_2_gg.prop('selectedIndex', (gg - 1));
			td_4_2.append(select_4_2_gg);
			// mese
			var select_4_2_mm = $('<select class="dataStyle normalStyle" name="speaker_di_' + numberOfSpeakers + ' .month" id="speaker_di_' + numberOfSpeakers + '.month"></select>');
			for (var  index1 = 1; index1 < mesi.length; index1++) {
			  	var option_4_2_mm = $('<option value="' + index1 + '"></option>').html(mesi[index1]);
			  	select_4_2_mm.append(option_4_2_mm);
			}
			select_4_2_mm.prop('selectedIndex', mm);	
			td_4_2.append(select_4_2_mm);
			// anno
			var select_4_2_aaaa = $('<select class="dataStyle normalStyle" name="speaker_di_' + numberOfSpeakers + ' .year" id="speaker_di_' + numberOfSpeakers + '.year"></select>');
			for (var  index1 = 2019; index1 < 2024; index1++) {
				var option_4_2_aaaa = $('<option value="' + index1 + '"></option>').html('' + index1);
			  	select_4_2_aaaa.append(option_4_2_aaaa);
			}
			select_4_2_aaaa.prop('selectedIndex', (aaaa - 2019));
			td_4_2.append(select_4_2_aaaa);
			td_4_2.append('<br/>');
			var select_4_2_hh = $('<select class="dataStyle normalStyle" name="speaker_di_' + numberOfSpeakers + ' .hour" id="speaker_di_' + numberOfSpeakers + '.hour"></select>');
			for (var  index1 = 0; index1 < 24; index1++) {
				var optionText = (index1 < 10) ? ("0" + index1) : ("" + index1);
				var option_4_2_hh = $('<option value="' + index1 + '"></option>').html(optionText);
			  	select_4_2_hh.append(option_4_2_hh);
			}
			td_4_2.append(select_4_2_hh);
			var select_4_2_mm = $('<select class="dataStyle normalStyle" name="speaker_di_' + numberOfSpeakers + ' .minute" id="speaker_di_' + numberOfSpeakers + '.minute"></select>');
			for (var  index1 = 0; index1 < 60; index1++) {
				var optionText = (index1 < 10) ? ("0" + index1) : ("" + index1);
				var option_4_2_mm = $('<option value="' + index1 + '"></option>').html(optionText);
			  	select_4_2_mm.append(option_4_2_mm);
			}
			td_4_2.append(select_4_2_mm);
			
			// calendario
			var diHref = createDateHref('di', numberOfSpeakers);
			var a_4_2 = $('<a href="' + diHref + '"></a>');
			var img_4_2 = $('<img height="22" width="20" border="0" style="position:relative;top:3px;" src="' + iconCalendarPath + '"/>');
			a_4_2.append(img_4_2);
			td_4_2.append(a_4_2);
			row_4.append(td_4_2);
			

			// Data fine
			var td_4_3 = $('<td class="dx" style="width:95px;"></td>');
			var span_4_3 = $('<span class="label" id="speaker_dataFineLabel_' + numberOfSpeakers + '"></span>').html("Data Fine");
			td_4_3.append(span_4_3);
			row_4.append(td_4_3);
			var td_4_4 = $('<td style="width:' + maxWidthSize + 'px;"></td>');
			// giorno
			var select_4_4_gg = $('<select class="dataStyle normalStyle" name="speaker_df_' + numberOfSpeakers + ' .day" id="speaker_df_' + numberOfSpeakers + '.day"></select>');
			for (var  index1 = 1; index1 < 32; index1++) {
				var optionText = (index1 < 10) ? ("0" + index1) : ("" + index1);
				var option_4_4_gg = $('<option value="'+ index1 + '"></option>').html(optionText);
				select_4_4_gg.append(option_4_4_gg);
			}
			select_4_4_gg.prop('selectedIndex', (gg - 1));
			td_4_4.append(select_4_4_gg);
			//mese
			var select_4_4_mm = $('<select class="dataStyle normalStyle" name="speaker_df_' + numberOfSpeakers + ' .month" id="speaker_df_' + numberOfSpeakers + '.month"></select>');
			for (var  index1 = 1; index1 < mesi.length; index1++) {
				var option_4_4_mm = $('<option value="' + index1 + '"></option>').html(mesi[index1]);
			  	select_4_4_mm.append(option_4_4_mm);
			}
			select_4_4_mm.prop('selectedIndex', mm);	
			td_4_4.append(select_4_4_mm);
			//anno
			var select_4_4_aaaa = $('<select class="dataStyle normalStyle" name="speaker_df_' + numberOfSpeakers + ' .year" id="speaker_df_' + numberOfSpeakers + '.year"></select>');
			for (var  index1 = 2019; index1 < 2024; index1++) {
				var option_4_4_aaaa = $('<option value="' + index1 + '"></option>').html('' + index1);
			  	select_4_4_aaaa.append(option_4_4_aaaa);
			}
			select_4_4_aaaa.prop('selectedIndex', (aaaa - 2019));
			td_4_4.append(select_4_4_aaaa);
			td_4_4.append('<br/>');
			var select_4_4_hh = $('<select class="dataStyle normalStyle" name="speaker_df_' + numberOfSpeakers + ' .hour" id="speaker_df_' + numberOfSpeakers + '.hour"></select>');
			for (var  index1 = 0; index1 < 24; index1++) {
				var optionText = (index1 < 10) ? ("0" + index1) : ("" + index1);
				var option_4_4_hh = $('<option value="' + index1 + '"></option>').html(optionText);
				select_4_4_hh.append(option_4_4_hh);
			}
			td_4_4.append(select_4_4_hh);
			var select_4_4_mm = $('<select class="dataStyle normalStyle" name="speaker_df_' + numberOfSpeakers + ' .minute" id="speaker_df_' + numberOfSpeakers + '.minute"></select>');
			for (var  index1 = 0; index1 < 60; index1++) {
				var optionText = (index1 < 10) ? ("0" + index1) : ("" + index1);
				var option_4_4_mm = $('<option value="' + index1 + '"></option>').html(optionText);
				select_4_4_mm.append(option_4_4_mm);
			}
			td_4_4.append(select_4_4_mm);			
			
			// calendario
			var dfHref = createDateHref('df', numberOfSpeakers);
			var a_4_4 = $('<a href="' + dfHref + '"></a>');
			var img_4_4 = $('<img class="marginRight" height="22" width="20" border="0" style="position:relative;top:3px;" src="' + iconCalendarPath + '" />');
			a_4_4.append(img_4_4);
			td_4_4.append(a_4_4);
 			row_4.append(td_4_4);
 			
			// Tema
			var td_4_5 = $('<td class="dx" style="width:95px;"></td>').html("Tema");
			row_4.append(td_4_5);
			var td_4_6 = $('<td style="width' + midWidthSize + 'px;"></td>');
			funcMaxLength = functionCheckMaxLength.replace("flagMaxLength", "true").replace("flagInputValue", "false").replace("fieldName", "Tema");
			var input_4_6 = $('<input type="text" id="speaker_tema_' + numberOfSpeakers + '" name="speaker_tema_' + numberOfSpeakers + '" maxlength="' + LOCATION_MAX_LENGTH + '" value="" onkeyup="' + funcMaxLength + '" />');
			td_4_6.append(input_4_6);
			row_4.append(td_4_6);
			tableEvents.append(row_4);

			// *** riga 5: Argomento ***
			var row_5 = $('<tr id="tr5_speaker_' + numberOfSpeakers + '"></tr>');
			
			// Argomento
			var td_5_1 = $('<td class="dx" style="width:95px;"></td>').html("Argomento");
			row_5.append(td_5_1);	
			var td_5_2 = $('<td colspan="5"></td>');
			var textarea_5_2 = $('<textarea class="speaker" id="speaker_arg_' + numberOfSpeakers + '" name="speaker_arg_' + numberOfSpeakers + '"></textarea>');
			td_5_2.append(textarea_5_2);
			row_5.append(td_5_2);
			tableEvents.append(row_5);

			// *** riga 6: Campo hidden ***
			var row_6 = $('<tr id="tr6_speaker_' + numberOfSpeakers + '"></tr>');

			var td_6_1 = $('<td colspan="6"></td>');
			
			// Campo hidden
			var input_6_1 = $('<input type="hidden" id="flag_speaker_' + numberOfSpeakers + '" name="flag_speaker_' + numberOfSpeakers + '" size="' + inputSize + '" value="ok" />');
			td_6_1.append(input_6_1);
			td_6_1.append("\u00a0");
			row_6.append(td_6_1);
			tableEvents.append(row_6);

			var newSpeaker = 'speaker_arg_' + numberOfSpeakers;
			tinyMCE.execCommand("mceAddControl", true, newSpeaker);

		}

		function createDateHref(type, numberOfSpeakers) {

			var JSP_PREFACE = $('#JSP_PREFACE').val();
			var href = "JavaScript:var f=$('#formEventi');var xp='prova';calendarPopup('" + JSP_PREFACE + "jsp/catalogoMol/calendar.jsp',";
			href += " getO2nValueFromForm(f, xp + ' .year'), getO2nValueFromForm(f, xp + ' .month') - 1, getO2nValueFromForm(f, xp + ' .day'), ";
			href += "f.name, 'speaker_" + type + "_" + numberOfSpeakers + " ', null, null, 'it_IT')";
			return href;
		}

		function removeQuestion(index) {
			
			var flagQuestion = $('#removeQuestions option').eq(index).html();
			var flagDisabledState = (flagQuestion.indexOf('Rimuovi') > -1) ? true : false;
			setDisabledState($('#question_question_' + index), flagDisabledState);
			setDisabledState($('#question_add_answer_' + index), flagDisabledState);
			setDisabledState($('#question_answers_' + index), flagDisabledState);
			setDisabledState($('#question_radio_yes_' + index), flagDisabledState);
			setDisabledState($('#question_radio_no_' + index), flagDisabledState);
			setDisabledState($('#question_up_' + index), flagDisabledState);
			setDisabledState($('#question_down_' + index), flagDisabledState);
			setDisabledState($('#question_delete_' + index), flagDisabledState);
		}
		
		function setDisabledState(element, flagDisabledState) {
			
			element = $(element);
			if (flagDisabledState) {
				element.attr('disabled', 'disabled');
			}
			else {
				element.removeAttr('disabled');
			}
		}

		function removeSpeaker(index) {

			var flagSpeaker = $('#flag_speaker_' + index);
			var flagDisabledState = true;
			var flagValue = 'ko';
			if (flagSpeaker.val() == 'ko') { 
				flagDisabledState = false;
				flagValue = 'ok';	
			}
			flagSpeaker.val(flagValue);
			setDisabledState($('#speaker_pos_' + index), flagDisabledState);
			setDisabledState($('#speaker_name_' + index), flagDisabledState);
			setDisabledState($('#speaker_surname_' + index), flagDisabledState);
			setDisabledState($('#speaker_fo_' + index), flagDisabledState);
			setDisabledState($('#speaker_role_' + index), flagDisabledState);
			setDisabledState($('#speaker_lm_' + index), flagDisabledState);
			setDisabledState($('#speaker_tema_' + index), flagDisabledState);
			setDisabledState($('#speaker_di_' + index), flagDisabledState);
			setDisabledState($('#speaker_df_' + index), flagDisabledState);
		}

		function moveSpeakers(index, nextIndex) {

			swap($('#speaker_name_' + index), $('#speaker_name_' + nextIndex), 'input');
			swap($('#speaker_surname_' + index), $('#speaker_surname_' + nextIndex), 'input');
			swap($('#speaker_fo_' + index), $('#speaker_fo_' + nextIndex), 'input');
			swap($('#speaker_role_' + index), $('#speaker_role_' + nextIndex), 'input');
			swap($('#speaker_lm_' + index), $('#speaker_lm_' + nextIndex), 'input');
			swap($('#speaker_tema_' + index), $('#speaker_tema_' + nextIndex), 'input');
			swap($('#speaker_di_' + index), $('#speaker_di_' + nextIndex), 'input');
			swap($('#speaker_df_' + index), $('#speaker_df_' + nextIndex), 'input');
			swap($('#speaker_arg_' + index), $('#speaker_arg_' + nextIndex), 'textarea');
		}

		function swap(element1, element2, mode) {

			var swap = "";
			var swapIndex = 0;
			if (mode == 'input') {
				swap = element1.val();
				element1.val(element2.val());
				element2.val(swap);
			}
			else if (mode == 'textarea') {
				var ele1Id = element1.attr('id');
				var ele2Id = element2.attr('id');
				var ele1 = retrieve(ele1Id);
				var ele2 = retrieve(ele2Id);
				element1.html(ele2);
				tinyMCE.execCommand('mceAddControl', true, ele1Id);
				element2.html(ele1);
				tinyMCE.execCommand('mceAddControl', true, ele2Id);
			}
			else if (mode == 'select') {
				swapIndex = element1.prop('selectedIndex');
				element1.prop('selectedIndex', element2.prop('selectedIndex'));
				element2.prop('selectedIndex', swapIndex);
			}
		}

		function restoreQuestionOption(index, mode, numberOfQuestions) {
			
			var removeQuestions = $('#removeQuestions');
			if (mode == 'add') {
				var opt = $('<option value="' + index + '">').html('Rimuovi domanda in posizione ' + index);
				removeQuestions.append(opt);
			}
			else {
				var optNode = $('#removeQuestions option').eq(index);
				var text = optNode.html();
				text = (text.indexOf('Rimuovi') > -1) ? ('Ripristina domanda in posizione ' + index) : ('Rimuovi domanda in posizione ' + index);
				optNode.html(text); 
				removeQuestions.prop('selectedIndex', 0);

				var flagQuestion = $('#flag_question_' + index);
				var fqValue = (flagQuestion.val() == 'ko') ? 'ok' : 'ko';
				flagQuestion.val(fqValue);
			}
		}

		function restoreSpeakerOption(index, mode, numberOfSpeakers) {

			var removeSpeakers = $('#removeSpeakers');
			if (mode == 'add') {
				var opt = $('<option value="'+index+'"></option').html('Rimuovi relatore in posizione ' + index + '');
				removeSpeakers.append(opt);
				
				for (var index = 1; index < numberOfSpeakers; index++) {
					var speakerPos = $('#speaker_pos_' + index);
					var optPos = $('<option value="' + numberOfSpeakers + '"></option>').html('posizione ' + numberOfSpeakers + '');
					speakerPos.append(optPos);
				}

				var newSpeakerPos = $('#speaker_pos_' + numberOfSpeakers);
				for (var index = 1; index <= numberOfSpeakers; index++) {
					var optPos = $('<option value="' + index + '"></option>').html('posizione ' + index);
					if (index == numberOfSpeakers) {
						optPos.prop('selectedIndex', index);
					}
					newSpeakerPos.append(optPos);
				}
			}
			
			else {
				var optNode = removeSpeakers.eq(index);
				var flagSpeaker = $('#flag_speaker_' + index);
				var text = (flagSpeaker.val() == 'ok') ? 'Rimuovi relatore in posizione ' : 'Ripristina relatore in posizione ';
				text = text + index;
				optNode.html(text);
				removeSpeakers.prop('selectedIndex', 0);
			}
		}

		function changeTab(selectedIndex) {
			var speakersState = (selectedIndex == 0) ? '' : 'none';
			var questionsState = (selectedIndex == 0) ? 'none' : '';
			$('#tr_speaker_action').css('display', speakersState);
			$('#tr_question_action').css('display', questionsState);
			for (var index = 1, goOn = true; goOn == true; index++) {
				var idSpeaker = 'tr1_speaker_' + index;
				var idQuestion = 'tr1_question_' + index;
				if ($('#'+idSpeaker).length) {
					$('#tr1_speaker_' + index).css('display', speakersState);
					$('#tr2_speaker_' + index).css('display', speakersState);
					$('#tr3_speaker_' + index).css('display', speakersState);
					$('#tr4_speaker_' + index).css('display', speakersState);
					$('#tr5_speaker_' + index).css('display', speakersState);
					$('#tr6_speaker_' + index).css('display', speakersState);
				}
				if ($('#'+idQuestion).length) {
					$('#tr1_question_' + index).css('display', questionsState);
					$('#tr2_question_' + index).css('display', questionsState);
					$('#tr3_question_' + index).css('display', questionsState);
					$('#tr4_question_' + index).css('display', questionsState);
					$('#tr5_question_' + index).css('display', questionsState);
				}
				if ( !($('#'+idSpeaker).length) || $('#'+idQuestion).length ) {
					goOn = false;
				}
			}
		}
		
		function eventPreviewOnClick() {
			$('#kindOfAction').val('insert');
			$('#eventPreview').val(true);
			$('#formEventi').attr('target', '_blank');
			$('#formEventi').attr('action', ($('#actionName').val() + $('#this_obsKey').val() + '&status=' + $('#stato_evento').val()));
			inviaRichiesta('formEventi');
		}
		
		function eventSaveOnClick() {
			$('#eventPreview').val(false);
			$('#formEventi').attr('target', '_self');
 			$('#formEventi').attr('action', ($('#actionName').val() + getActionCue()));
			inviaRichiesta('formEventi');
		}

		function executeOnLoad() {
			executeTiny();
		  	var desc = $('#desc').val();
		    prepare('descrizione', desc);

		    var numberOfSpeakers = parseInt($('#numberOfSpeakers').val());
		    for (var index = 1; index <= numberOfSpeakers; index++) {
			    var key = 'speaker_arg_' + index;
			    var keyId = 'sa_' + index;
			    var keyValue = $('#'+keyId).val();
		    	prepare(key, keyValue);
		    }
		}

		function replaceAll(str, s1, s2) {
			str = str.split(s1).join(s2);
			return str.split(s1).join(s2);
		}
		
		function changeCategoriaEvento(objSelect){
			objSelect = $(objSelect);
			var optionSelected = objSelect.val();
			var fisico = $('#fisico').val();
			if(optionSelected == fisico){ 
				$('#tipo_streaming').attr('disabled', 'disabled');
				$('#ts_vuoto').attr('selected', 'selected');
			}
			else{
				$('#tipo_streaming').removeAttr('disabled');
				$('#ts_vuoto').attr('disabled', 'disabled');
				$('#tipo_streaming').prop('selectedIndex', 1);
			}
		} 
		 
		function changeTipoPartecipanti(objSelect){
			objSelect = $(objSelect);
			var optionSelected = objSelect.val();
			var solo_cliente = $('#solo_cliente').val();
			var solo_prospect = $('#solo_prospect').val();
			if(optionSelected == solo_cliente) {
					$('#num_prospect').val('0');
					$('#num_private').removeAttr('disabled');
					$('#num_prospect').attr('disabled', 'disabled');					
					
			}else if(optionSelected == solo_prospect){
				$('#num_private').val('0');
				$('#num_private').attr('disabled', 'disabled');
				$('#num_prospect').removeAttr('disabled');
			}else {
				$('#num_private').removeAttr('disabled');
		        $('#num_prospect').removeAttr('disabled');
			        
			}
		} 
		 
		function openPopup(id, value) {

			url = "/wetools/admin/eventi/fasciaOrariaPopup.jsp?id="+id+"&value="+value;
			try {
				window.open(url,'padre','width=415,height=390,scrollbars=yes');
			}
			catch(e) {
				alert(e.message);
			}
		}
		function openPopupCampiNascosti(id, value) {

			url = "/wetools/admin/eventi/campiNascostiPopup.jsp?id="+id+"&value="+value;
			try {
				window.open(url,'padre','width=410,height=245,scrollbars=yes');
			}
			catch(e) {
				alert(e.message);
			}
		}
		function openPopupPrimoPianoList(addCycleKey) {

			var ciclo_evento = $('#ciclo_evento').val();
			var tipo_evento = $('#tipo_evento').val();
			if (ciclo_evento != '') {
				url = "/wetools/admin/eventi/primoPianoList.jsp?tipo_evento=" + tipo_evento;
				if (addCycleKey) {
					url += ("&ciclo_evento=" + ciclo_evento);
				}
				try {
					window.open(url,'padre','width=500,height=195,scrollbars=yes');
				}
				catch(e) {
					alert(e.message);
				}
			}
			else {
				alert('L\'evento non risulta collegato ad alcuna area');
			}
		}
		
		function checkTipoPartecipanti(){
			var tipo_partecipanti= $('#tipo_partecipanti').val();
			if (tipo_partecipante=='solo_prospect'){
				state='disable';
			}else{
				 state='';
			}
			
			return state;
		}
		function checkMaxLength(element, checkLength, isRestrictedFilter, fieldName) {

			element = $(element);
			if (checkLength == 'true') {
				var length = element.val().length;
				var maxLength = element.attr('maxlength');
				if (length >= maxLength) {
					alert('Per questo campo puoi inserire un massimo di ' + maxLength + ' caratteri.');
				}
			}
			var isr = (isRestrictedFilter == 'true');
			checkInputValue(element.val(), isr, fieldName);
		}
		function changeCBValue(elementId) {
			
			var element = $('#' + elementId);
			if (element.is(':checked')) {
				element.val('Y');
			}
			else {
				element.val('N');
			}
		}
		function checkUtentiCorrentisti(tipo_evento) {
		    var parameters = {
		    		method: 'checkCorrentisti',
		    		tipo_evento: tipo_evento,
		    		cf: Math.random()		
		        },
		        url = '/admin/event.do';
			ajaxCall(url, esitoCheckCorrentisti, ajaxFailure, parameters);
		}

		function esitoCheckCorrentisti(res) {
			var daAggiornare = res.daAggiornare;
			var aggiornati = res.aggiornati;
			var nonAggiornati = res.nonAggiornati;
			alert('Risultato: da aggiornare: ' + daAggiornare + ", aggiornati: " + aggiornati + ", non aggiornati: " + nonAggiornati + ".");
		}

		function ajaxFailure(res) {
			alert(res.msgEsito);
		}

		function ajaxCall(url, successFunc, failureFunc, parameters, type) {

			var jqUrl = (cgi_script + url),
		    	jqSuccessFunc = function(data) { successFunc(data); },
		    	jqFailureFunc = function() { failureFunc(); }
		    	callType = (type == null) ? 'json' : type;

		    jqAJAXCall('POST', callType, jqUrl, jqSuccessFunc, jqFailureFunc, parameters);
		}	
		