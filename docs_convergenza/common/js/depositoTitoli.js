$(function (){
	$('.selectProfilo').bind('change',function(event,index){
		activeteTable(this,event);
	});
});

$(function (){
	$('.ch-profilo').bind('click',function(event,index){
		activeteTable(this,event);
	});
});

function activeteTable(el) {
	var parentTable = $(el).closest('.wrapper-sel').nextAll('.headerContainerNoBootS').eq(0).find('.table-tipoprofilo');
	if(parentTable.length>1) {
		parentTable.hide();
		if(el.nodeName=='TD'){
			$(el).closest('tr').find('.ch-profilo').removeClass('bgAtt');
			$(el).addClass('bgAtt');
			$(el).closest('table').next('.wrapper-sel').find('.selectProfilo').prop('selectedIndex', $(el).index());
			parentTable.eq($(el).index()).show();
		} else {
			$(el).closest('.wrapper-sel').prev('table').find('.ch-profilo').removeClass('bgAtt');
			$(el).closest('.wrapper-sel').prev('table').find('.ch-profilo').eq(el.selectedIndex).addClass('bgAtt');
			parentTable.eq(el.selectedIndex).show();
		}
	} else {
		//assegnare la classe off alle colonne non selezionate nel caso di tabella con TAB DEROGA...a solo titolo esemplificativo:
		parentTable.find('td.bgCosti,th,td.empty').addClass('off');
		parentTable.find('th:first-child').removeClass('off');
		if(el.nodeName=='TD') {
			$(el).closest('tr').find('.ch-profilo').removeClass('bgAtt');
			$(el).addClass('bgAtt');
			parentTable.find('th').eq($(el).attr('data-col-off')).removeClass('off');
			parentTable.find('td.color' + $(el).attr('data-col-off')).removeClass('off');
			$(el).closest('table').next('.wrapper-sel').find('.selectProfilo').prop('selectedIndex', $(el).index());
		} else {
			$(el).closest('.wrapper-sel').prev('table').find('.ch-profilo').removeClass('bgAtt');
			$(el).closest('.wrapper-sel').prev('table').find('.ch-profilo').eq(el.selectedIndex).addClass('bgAtt');
			parentTable.find('th').eq($(el).find('option:selected').attr('data-col-off')).removeClass('off');
			parentTable.find('td.color' + $(el).find('option:selected').attr('data-col-off')).removeClass('off');
		}
	}
}

function isNumeric(pin) {
	var regex = /[0-9]|\./;
	if(!regex.test(pin)) {
		return false;
	} else {
		return true;
	}
}

function annullaFATCA(el) {
	$(el).closest('.boxstepCont').hide();
	$(window).scrollTop($('#id_box_fatca').offset().top);
	resetHasErrors('#boxFatca');
}

//function setFATCALayerToFormBean(numIntestatario) {
//	$('#stato_FATCALayer_int' + numIntestatario).val($('#stato_FATCA_int' + numIntestatario).val());
//	statoChangeLayer('stato_FATCALayer_int' + numIntestatario, numIntestatario);
//	$('#via_FATCALayer_int' + numIntestatario).val($('#via_FATCA_int' + numIntestatario).val());
//	$('#provincia_FATCALayer_int' + numIntestatario).val($('#provincia_FATCA_int' + numIntestatario).val());
//	if ($('#stato_FATCALayer_int' + numIntestatario).val() == '86|ITALIA') {
//		provinciaChangeLayer('stato_FATCALayer_int' + numIntestatario, 'provincia_FATCALayer_int' + numIntestatario, numIntestatario, $('#comune_FATCA_int' + numIntestatario).val(), $('#cap_FATCA_int' + numIntestatario).val(), done3);
//	} else {
//		$('#comune_FATCALayer_int' + numIntestatario).val($('#comune_FATCA_int' + numIntestatario).val());
//		$('#cap_FATCALayer_int' + numIntestatario).val($('#cap_FATCA_int' + numIntestatario).val());
//	}
//}

function validaIntestatario(nInt, numInt, errors) {
var hasNoError = true;
for (var i = 1; i < 4; i++) {
	var int = nInt;
	var id = i;
	var idRes = 'selectfacta_int' + int + '_id' + id;
	var idTin = 'TIN_int' + int + '_id' + id;
	if (($('#' + idRes).val() != undefined && $('#' + idRes).val() != '') || ($('#' + idTin).val() != undefined && $('#' + idTin).val() != '')) {
		// RESIDENZA FISCALE
		if ($('#' + idRes).val() == '') {
			errors.push({field: $('#' + idRes), text: "Compila il campo"});
			hasNoError = false;
		}
		// TIN
		if ($('#' + idRes).val() != undefined && $('#' + idRes).val() != '' && $('#' + idRes).val().split("|")[2] == 'S') {
			var regexTin = '[A-Z0-9]{3}-[A-Z0-9]{2}-[A-Z0-9]{4}';
			if ($('#' + idRes).val().indexOf('STATI UNITI') >= 0 && !$('#' + idTin).val().match(regexTin)) {
				errors.push({field: $('#' + idTin), text: "Compila il campo"});
				hasNoError = false;
			} else if ($('#' + idTin).val() == '') {
				//setError($('#' + idTin));
				errors.push({field: $('#' + idTin), text: "Compila il campo"});
				hasNoError = false;
			}
		}
	}
}
//	var lista = [ 'stato_FATCALayer_int' + nInt, 'via_FATCALayer_int' + nInt, 'provincia_FATCALayer_int' + nInt, 'comune_FATCALayer_int' + nInt, 'cap_FATCALayer_int' + nInt ];
//	if (parzCompilati(lista)) {
//		if ($('#stato_FATCALayer_int' + nInt).val() == '') {
//			errors.push({field: $('#stato_FATCALayer_int' + nInt), text: "Seleziona il campo"});
//			hasNoError = false;
//		}
//		if ($('#via_FATCALayer_int' + nInt).val() == '') {
//			errors.push({field: $('#via_FATCALayer_int' + nInt), text: "Compila il campo"});
//			hasNoError = false;
//		}
//		if ($('#comune_FATCALayer_int' + nInt).val() == '') {
//			errors.push({field: $('#comune_FATCALayer_int' + nInt), text: "Compila il campo"});
//			hasNoError = false;
//		}
//		if ($('#stato_FATCALayer_int' + nInt).val() != '' && $('#stato_FATCALayer_int' + nInt).val() == '86|ITALIA') {
//			if ($('#provincia_FATCALayer_int' + nInt).val() == '') {
//				errors.push({field: $('#provincia_FATCALayer_int' + nInt), text: "Compila il campo"});
//				hasNoError = false;
//			}
//			if ($('#cap_FATCALayer_int' + nInt).val() == '') {
//				errors.push({field: $('#cap_FATCALayer_int' + nInt), text: "Compila il campo"});
//				hasNoError = false;
//			}
//		}
//	}
	return hasNoError;
}

//function activetabledetail (button) {
//	var rigaorigine = button.parentNode.parentNode;
//	var tuttelerighe = rigaorigine.parentNode.getElementsByTagName("TR");
//	if (rigaorigine.className == "opened") {
//		//chiude
//		rigaorigine.className = "";
//		classasis = "detailrow";
//		classtobe = "closed"; 
//	} else {
//		//apre
//		rigaorigine.className = "opened";
//		classasis = "closed";
//		classtobe = "detailrow";
//	}
//	for (i=0;i<tuttelerighe.length;i++) {
//		if (tuttelerighe[i] == rigaorigine) {
//			if (tuttelerighe[i+1]) {
//				x = i + 1;
//				stop = true;
//				do {
//					if (tuttelerighe[x].className == classasis) tuttelerighe[x].className = classtobe;
//					x++;
//					if (tuttelerighe[x]) {
//						if (tuttelerighe[x].className != classasis) stop = false;
//					} else {
//						stop = false;
//					}
//				} while (stop);
//			}
//		}
//	}
//	autoSizeMaincontent();
//}

//function autoSizeMaincontent() {
//	var mce = document.getElementById('maincontent');
//	var ce = document.getElementById('content');
//	//var re = document.getElementById('right');

//	if (mce && ce) {
//		if (document.getElementById('printconsole')) mce.style.paddingBottom = '29px';
//		ce.style.height = 'auto';
//		mce.style.height = 'auto';
//		if (mce.offsetHeight + 14 < ce.offsetHeight) {
//			if (document.getElementById('fullpromo')) {
//				mce.style.height = ce.offsetHeight - document.getElementById('fullpromo').offsetHeight - 14 + 'px';
//			} else {
//				mce.style.height = ce.offsetHeight - 14 + 'px';
//				// controlla altezza pagina + se esiste paginazione e aumenta altezza pagina 
//				if (document.getElementById('pagconsole') && ce.offsetHeight < 470) mce.style.height = ce.offsetHeight + 84 + 'px'; 
//			}
//		}
//	}
//}

function changeRecapitoProvincia() {
	var provincia = $('#provRecapito').val();
	if(provincia == '') {
		$('#comuneRecapito').html('<option value="">seleziona</option>');
		$('#capRecapito').html('<option value="">seleziona</option>');
	} else {
		var url = cgi_script + '/nsf/ProvinciaChange.action',
		parameters = {
			valore : provincia
		},
		successFunc = function (esito) {
			if (esito.code != 'ko') {
				var divComune = '<option value="">seleziona</option>';
				for (var i=0 ; i<esito.comuniCap.length ; i++) {
					divComune = divComune + '<option value="' + esito.comuniCap[i] + '">' + esito.comuniCap[i].split("~")[0] + '</option>';
				}
				$('#comuneRecapito').html(divComune);
				$('#capRecapito').html('<option value="">seleziona</option>');
			}
		},
		failureFunc = function () {};
		jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);	
	}	
}

function changeRecapitoComune() {
	
	$('#capRecapito').val('');
	var comune = $('#comuneRecapito').val();
	$('#id_comune_richiedente').val(comune);
	
	/**
	 * dismesso changeComune che imposta CAP.
	 * al cambio basta sbiancare l'input element
	 * @returns
	 */
	
//	var comune = $('#comuneRecapito').val();
//	if(comune == '') {
//		$('#capRecapito').html('<option value="">seleziona</option>');	
//	} else {
//		var capDiv = '';
//		var cap1 = comune.split("~")[1];
//		var cap2 = comune.split("~")[2];
//		
//		if(cap1 != cap2) {
//			capDiv = capDiv + '<option value="">seleziona</option>';
//			for (var i = cap1 ; i <= cap2 ; i++) {
//				i = '' + i;
//				while(i.length < 5) {i = '0' + i;}
//				capDiv = capDiv + '<option value="' + i + '">' + i + '</option>';
//			}
//		} else {
//			capDiv = capDiv + '<option value="' + cap1 + '">' + cap1 + '</option>';
//		}
//		$('#capRecapito').html(capDiv);
//		$('#id_comune_richiedente').val(comune.split("~")[0]);
//	}	
}

function validateFields2() {
	var errors = [],
		commissioni_error = false;
	if (!$('#presaVisione').is(':checked')) {
		errors.push({field: $('#presaVisione'), text: "Seleziona"});
	}
	setHasErrors(errors, "#formrichiesta2");
	if (errors.length) {
		$(errors[0].field).find('input').trigger('focus');
	}
	return (!errors.length);
}

function enableCheckIfNeeded(id) {
	var elmnt = $(id);
	if (!(elmnt.is(':checked') && elmnt.is(':disabled'))) {
		ableinput(id);
	}
}

function openArea2() {
	loadLink(2);
	proseguiStep($("#id_btn_1"));
}

$(function (){
	$('.editButton').click(function() {
		modificaStep($(this));
	});
});

function openArea3() {
	loadLink(3);
	var btn_2 = $("#id_btn_2");
	
	//disabilito form step 1
	$("#wraprichiesta1").find('input, textarea, select').prop("disabled", true);
	//disabilito form step 2
	$("#wraprichiesta2").find('input, textarea, select').prop("disabled", true);
	
	$('#steprichiesta2 a[data-toggle]').attr('data-toggle','collapse');
	$('#steprichiesta1 a[data-toggle]').attr('data-toggle','collapse');
	
	proseguiStep(btn_2);
	
	$('#steprichiesta1,#steprichiesta2').find('.panel').removeClass('panel-selected');
	
	$('#modificaBtn,#btnProsegui,#btnProsegui2').hide();
	$('#boxFatca .fieldButton.remove').addClass('disabled');
	$('#demoSetErrorBtn').hide();
	$('#id_btn_annulla').hide();
	done3 = true;
}

function openArea4() {
	loadLink(4);
	var btn_3 = $("#id_btn_3");
	$('#steprichiesta3 a[data-toggle]').attr('data-toggle','collapse');
	proseguiStep(btn_3);
	$("#wraprichiesta3").find('input, textarea, select').prop("disabled", true);
	$('#btnProsegui3').hide();
}

function openArea5() {
	loadLink(5);
	var btn_4 = $("#id_btn_4");
	$('#steprichiesta4 a[data-toggle]').attr('data-toggle','collapse');
	proseguiStep(btn_4);
	$("#wraprichiesta4").find('input, textarea, select').prop("disabled", true);
	$('#btnProsegui4').hide();
}

function active5(){
	if($("#usPerson_int1_y").attr("checked")){
		//$("#steprichiesta4").removeClass('last');
		$("#steprichiesta5").show();
	}
}