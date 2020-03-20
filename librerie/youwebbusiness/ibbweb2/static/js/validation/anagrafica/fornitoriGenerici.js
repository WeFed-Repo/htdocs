var _onsubmit=true;
var _onchange=CHECK_ON_CHANGE;
var _show =true;
CHECK_REPEATED_SUBMIT=true;
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.intestatario");
console.log('function validate_anagrafica_intestatario_requiredCbiValidator');
}
*/
function validate_anagrafica_intestatario_requiredCbiValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
return false;
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.intestatario'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_intestatario','label.anagrafica.intestatario',"il campo \u00E8 obbligatorio","validate_anagrafica_intestatario_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.codEsterna");
console.log('function validate_anagrafica_codEsterna_requiredCbiValidator');
}
*/
function validate_anagrafica_codEsterna_requiredCbiValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
return false;
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.codEsterna'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_codEsterna','label.anagrafica.codEsterna',"il campo \u00E8 obbligatorio","validate_anagrafica_codEsterna_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'stringlengthCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.codEsterna");
console.log('function validate_anagrafica_codEsterna_stringlengthCbiValidator');
}
*/
function validate_anagrafica_codEsterna_stringlengthCbiValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
while (value.substring(0,1) == ' ')
value = value.substring(1, value.length);
while (value.substring(value.length-1, value.length) == ' ')
value = value.substring(0, value.length-1);
if ((-1 > -1 && value.length < -1) ||
(16 > -1 && value.length > 16)) {
return false;
}
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.codEsterna'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_codEsterna','label.anagrafica.codEsterna',"I caratteri immessi sono superiori ai 16 consentiti","validate_anagrafica_codEsterna_stringlengthCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.cognome");
console.log('function validate_anagrafica_cognome_requiredCbiValidator');
}
*/
function validate_anagrafica_cognome_requiredCbiValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
return false;
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_cognome','label.anagrafica.cognome',"il campo \u00E8 obbligatorio","validate_anagrafica_cognome_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'stringlengthCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.cognome");
console.log('function validate_anagrafica_cognome_stringlengthCbiValidator');
}
*/
function validate_anagrafica_cognome_stringlengthCbiValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
while (value.substring(0,1) == ' ')
value = value.substring(1, value.length);
while (value.substring(value.length-1, value.length) == ' ')
value = value.substring(0, value.length-1);
if ((-1 > -1 && value.length < -1) ||
(60 > -1 && value.length > 60)) {
return false;
}
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_cognome','label.anagrafica.cognome',"I caratteri immessi sono superiori ai 60 consentiti","validate_anagrafica_cognome_stringlengthCbiValidator", _onsubmit, _onchange);
_onsubmit=false;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'minLengthNoSubmitValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.partitaIVA");
console.log('function validate_anagrafica_partitaIVA_minLengthNoSubmitValidator');
}
*/
function validate_anagrafica_partitaIVA_minLengthNoSubmitValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
while (value.substring(0,1) == ' ')
value = value.substring(1, value.length);
while (value.substring(value.length-1, value.length) == ' ')
value = value.substring(0, value.length-1);
if ((11 > -1 && value.length < 11) ||
(-1 > -1 && value.length > -1)) {
return false;
}
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.partitaIVA'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_partitaIVA','label.anagrafica.partitaIVA',"@WARNING La lunghezza della partita IVA non \u00E8\n corretta: la partita IVA dovrebbe essere lunga\n esattamente 11 caratteri.","validate_anagrafica_partitaIVA_minLengthNoSubmitValidator", _onsubmit, _onchange);
_onsubmit=false;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'onlyNumbersValidatorforPartIva';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.partitaIVA");
console.log('function validate_anagrafica_partitaIVA_onlyNumbersValidatorforPartIva');
}
*/
function validate_anagrafica_partitaIVA_onlyNumbersValidatorforPartIva(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value.length==11 && checkOnlyNumbersWithChar(value)!=null  ) {
var notNumber = checkOnlyNumbersWithChar(value);
setVariableIntoMessage(obj, 'CHARNOTNUMBER', notNumber +'');
return false;
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.partitaIVA'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_partitaIVA','label.anagrafica.partitaIVA',"@WARNING Contiene un carattere non valido: @CHARNOTNUMBER.\nI caratteri validi sono le cifre.","validate_anagrafica_partitaIVA_onlyNumbersValidatorforPartIva", _onsubmit, _onchange);
_onsubmit=false;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'partitaIva';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.partitaIVA");
console.log('function validate_anagrafica_partitaIVA_partitaIva');
}
*/
function validate_anagrafica_partitaIVA_partitaIva(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if ((value != null) &&
value.length==11 &&
checkOnlyNumbersWithChar(value)==null &&
(checkPIVA(value) == null))
{
return false;
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.partitaIVA'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_partitaIVA','label.anagrafica.partitaIVA',"@WARNING La partita IVA non \u00E8 valida:\n il codice di controllo non corrisponde.","validate_anagrafica_partitaIVA_partitaIva", _onsubmit, _onchange);
_onsubmit=false;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'minLengthNoSubmitValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.codFiscale");
console.log('function validate_anagrafica_codFiscale_minLengthNoSubmitValidator');
}
*/
function validate_anagrafica_codFiscale_minLengthNoSubmitValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
while (value.substring(0,1) == ' ')
value = value.substring(1, value.length);
while (value.substring(value.length-1, value.length) == ' ')
value = value.substring(0, value.length-1);
if ((16 > -1 && value.length < 16) ||
(-1 > -1 && value.length > -1)) {
return false;
}
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.codFiscale'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_codFiscale','label.anagrafica.codFiscale',"@WARNING La lunghezza del codice fiscale non \u00E8 corretta:\n il codice fiscale dovrebbe essere lungo\n esattamente 16 caratteri.","validate_anagrafica_codFiscale_minLengthNoSubmitValidator", _onsubmit, _onchange);
_onsubmit=false;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'noSpecialCharValidatorForCF';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.codFiscale");
console.log('function validate_anagrafica_codFiscale_noSpecialCharValidatorForCF');
}
*/
function validate_anagrafica_codFiscale_noSpecialCharValidatorForCF(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value.length==16 && checkNoSpecialCharWithChar(value)!=null  ) {
var notValidChar = checkNoSpecialCharWithChar(value);
setVariableIntoMessage(obj, 'CHARNOTVALID', notValidChar +'');
return false;
}
if (value != null && value.length==16 && checkNoSpecialCharWithChar(value)!=null  ) {
var notValidChar = checkNoSpecialCharWithChar(value);
setVariableIntoMessage(obj, 'CHARNOTVALID', notValidChar +'');
return false;
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.codFiscale'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_codFiscale','label.anagrafica.codFiscale',"@WARNING Contiene un carattere non valido: @CHARNOTVALID.\nI caratteri validi sono le lettere e le cifre.","validate_anagrafica_codFiscale_noSpecialCharValidatorForCF", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'codiceFiscale';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.codFiscale");
console.log('function validate_anagrafica_codFiscale_codiceFiscale');
}
*/
function validate_anagrafica_codFiscale_codiceFiscale(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(value == '') return true;
if (value.length != 16 || checkNoSpecialCharWithChar(value) != null) {
return false;
}
if (!isCodiceFiscale(value)) {
return false;
}
field.value=value.toUpperCase();
return true;
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.codFiscale'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_codFiscale','label.anagrafica.codFiscale',"@WARNING Il codice fiscale non \u00E8 corretto:\n il codice di controllo non corrisponde.","validate_anagrafica_codFiscale_codiceFiscale", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'stringlengthCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.indirizzoResidenza.indirizzo");
console.log('function validate_anagrafica_indirizzoResidenza_indirizzo_stringlengthCbiValidator');
}
*/
function validate_anagrafica_indirizzoResidenza_indirizzo_stringlengthCbiValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
while (value.substring(0,1) == ' ')
value = value.substring(1, value.length);
while (value.substring(value.length-1, value.length) == ' ')
value = value.substring(0, value.length-1);
if ((-1 > -1 && value.length < -1) ||
(30 > -1 && value.length > 30)) {
return false;
}
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.indirizzoResidenza.indirizzo'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_indirizzoResidenza_indirizzo','label.anagrafica.indirizzoResidenza.indirizzo',"I caratteri immessi sono superiori ai 30 consentiti","validate_anagrafica_indirizzoResidenza_indirizzo_stringlengthCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;



/*
var ffffnnnn = 'stringlengthCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.indirizzoResidenza.CAP");
console.log('function validate_anagrafica_indirizzoResidenza_CAP_stringlengthCbiValidator');
}
*/
function validate_anagrafica_indirizzoResidenza_CAP_stringlengthCbiValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
while (value.substring(0,1) == ' ')
value = value.substring(1, value.length);
while (value.substring(value.length-1, value.length) == ' ')
value = value.substring(0, value.length-1);
if ((-1 > -1 && value.length < -1) ||
(5 > -1 && value.length > 5)) {
return false;
}
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.indirizzoResidenza.CAP'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_indirizzoResidenza_CAP','label.anagrafica.indirizzoResidenza.CAP',"I caratteri immessi sono superiori ai 5 consentiti","validate_anagrafica_indirizzoResidenza_CAP_stringlengthCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'abiRangeValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.coordinateBanca.ABI");
console.log('function validate_anagrafica_coordinateBanca_ABI_abiRangeValidator');
}
*/
function validate_anagrafica_coordinateBanca_ABI_abiRangeValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
setVariableIntoMessage(obj,'MIN','01000');
setVariableIntoMessage(obj,'MAX','10999');
setVariableIntoMessage(obj,'M2IN','36000');
setVariableIntoMessage(obj,'M2AX','36999');
setVariableIntoMessage(obj,'M3IN','19000');
setVariableIntoMessage(obj,'M3AX','19499');
setVariableIntoMessage(obj,'M4IN','31000');
setVariableIntoMessage(obj,'M4AX','33999');
var rxp = /^([0-9]{5,5}){0,1}$/i;
if (!value.match(rxp)){ return false;}
else{
if(value.replace(/^\s+|\s+$/g,"").length != 0){
if(isNaN( parseInt( value ) )){return false;}
else{
var intVal = parseInt( value,10 );
if((intVal >= 1000 && intVal <= 10999) || (intVal >= 36000 && intVal <= 36999) || (intVal >= 19000 && intVal <= 19499) || (intVal >= 31000 && intVal <= 33999)){return true;}
else{ return false;}
}
}
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.coordinateBanca.ABI'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_coordinateBanca_ABI','label.anagrafica.coordinateBanca.ABI',"deve essere compreso tra \" @MIN \" e \" @MAX \", oppure tra \" @M2IN \" e \" @M2AX \", oppure tra \" @M3IN \" e \" @M3AX \", oppure tra \" @M4IN \" e \" @M4AX \"","validate_anagrafica_coordinateBanca_ABI_abiRangeValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'ibanEsteroFieldCountryValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.coordinateBanca.IBANEstero");
console.log('function validate_anagrafica_coordinateBanca_IBANEstero_ibanEsteroFieldCountryValidator');
}
*/
function validate_anagrafica_coordinateBanca_IBANEstero_ibanEsteroFieldCountryValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var checkIban = form.elements['anagrafica.coordinateBanca.IBANEstero'].value;
var country =  checkIban.substring(0,2).toUpperCase();
obj.callShowFunction=false;
ArrayforIban();
selectOK = checkIBANCountry(checkIban ,country, obj.actualMessage);
var obj1=getValidation(field,ERROR,11);
if (selectOK!=null) {
obj1.disableValidationOnSubmit=true;
if (!selectOK) return false;
}
return true;
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.coordinateBanca.IBANEstero'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_coordinateBanca_IBANEstero','label.anagrafica.coordinateBanca.IBANEstero',"@ERROR(10) Attenzione il codice IBAN non \u00E8 corretto! \nSi desidera procedere?","validate_anagrafica_coordinateBanca_IBANEstero_ibanEsteroFieldCountryValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'switftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.coordinateBanca.IBANEstero");
console.log('function validate_anagrafica_coordinateBanca_IBANEstero_switftStringValidator');
}
*/
function validate_anagrafica_coordinateBanca_IBANEstero_switftStringValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var controlla = true;
if (controlla){
if (!isSWIFTString(value)) return false;
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.coordinateBanca.IBANEstero'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_coordinateBanca_IBANEstero','label.anagrafica.coordinateBanca.IBANEstero',"Alcuni campi contengono caratteri non ammessi. \n\nCaratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri(0-9) \ncarattere(spazio) \ncaratteri speciali(/-?:().,\'+)","validate_anagrafica_coordinateBanca_IBANEstero_switftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'bicLenghtValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.coordinateBanca.BIC");
console.log('function validate_anagrafica_coordinateBanca_BIC_bicLenghtValidator');
}
*/
function validate_anagrafica_coordinateBanca_BIC_bicLenghtValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var valueBic = value.replace(/^\s+|\s+$/g,"").toUpperCase();
field.value = valueBic;
if (valueBic != "" && valueBic.length!=8 && valueBic.length!=11)
{
return false;
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.coordinateBanca.BIC'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_coordinateBanca_BIC','label.anagrafica.coordinateBanca.BIC',"La lunghezza deve essere di 8 o 11 caratteri","validate_anagrafica_coordinateBanca_BIC_bicLenghtValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'switftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.coordinateBanca.BIC");
console.log('function validate_anagrafica_coordinateBanca_BIC_switftStringValidator');
}
*/
function validate_anagrafica_coordinateBanca_BIC_switftStringValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var controlla = true;
if (controlla){
if (!isSWIFTString(value)) return false;
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.coordinateBanca.BIC'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_coordinateBanca_BIC','label.anagrafica.coordinateBanca.BIC',"Alcuni campi contengono caratteri non ammessi. \n\nCaratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri(0-9) \ncarattere(spazio) \ncaratteri speciali(/-?:().,\'+)","validate_anagrafica_coordinateBanca_BIC_switftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'stringlengthCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.coordinateBanca.desBanca");
console.log('function validate_anagrafica_coordinateBanca_desBanca_stringlengthCbiValidator');
}
*/
function validate_anagrafica_coordinateBanca_desBanca_stringlengthCbiValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
while (value.substring(0,1) == ' ')
value = value.substring(1, value.length);
while (value.substring(value.length-1, value.length) == ' ')
value = value.substring(0, value.length-1);
if ((-1 > -1 && value.length < -1) ||
(60 > -1 && value.length > 60)) {
return false;
}
}
return true;
}
if (document.getElementById("salvaForGenerici").elements['anagrafica.coordinateBanca.desBanca'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_coordinateBanca_desBanca','label.anagrafica.coordinateBanca.desBanca',"I caratteri immessi sono superiori ai 60 consentiti","validate_anagrafica_coordinateBanca_desBanca_stringlengthCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
function validate_anagrafica_email_genericMailValidator(obj)
{     // var message= obj.message; var label=obj.label; 
	    var form = obj.form; field = obj.field;
		var value=null;
		if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  
			value=field.value;
		if ((field.type=="select-one")||(field.type=="select-multiple")) 
			value=field.options[field.selectedIndex].value;
			
	 		
		if (value!=null && value.length > 0){
			if (value.length < 257){
				return (emailCheck(value));
			}else {
				return false;
			}
		}
		return true;
}
     
if (document.getElementById("salvaForGenerici").elements['anagrafica.email'])  addValidation(showAlert,'salvaForGenerici','salvaForGenerici_anagrafica_email','label.anagrafica.email',"Formato dell\'indirizzo e-mail non valido","validate_anagrafica_email_genericMailValidator", _onsubmit, _onchange);
  	
function validateForm_salvaForGenerici() {
if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; }
var form = document.getElementById("salvaForGenerici");
var o=new validationResult();
var noerror= validateOnSubmitAll(o);
if (o.messageList.length>0) {
var message="";
for (i=0; i<o.messageList.length; i++) {
message+=o.messageList[i].label.replace(/:/g, '').replace(/^\s+|\s+$/g,'') + ': ' + o.messageList[i].actualMessage+'\n';
}
alert(message);
}
return noerror;
}
validateOnFieldAll();
