var _onsubmit=true;
var _onchange=CHECK_ON_CHANGE;
var _show =true;
CHECK_REPEATED_SUBMIT=true;
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredIntestatario';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.intestatario");
console.log('function validate_anagrafica_intestatario_requiredIntestatario');
}
*/
function validate_anagrafica_intestatario_requiredIntestatario(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
var tmp= new IteratorMessage();
while (tmp.next())  {
var msg=tmp.getMessage();
if (msg==undefined) continue;
if (msg.index!=obj.index) msg.disableValidationOnSubmit=true;
}
var tmp= new IteratorMessage();
return false;
} else
{
var tmp= new IteratorMessage();
while (tmp.next())  {
var msg=tmp.getMessage();
if (msg==undefined) continue;
msg.disableValidationOnSubmit=false;
}
return true;
}
return true;
}
if (document.getElementById("salvaDipendenti").elements['anagrafica.intestatario'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_intestatario','label.anagrafica.intestatario',"il campo \u00E8 obbligatorio","validate_anagrafica_intestatario_requiredIntestatario", _onsubmit, _onchange);
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
if (document.getElementById("salvaDipendenti").elements['anagrafica.codEsterna'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_codEsterna','label.anagrafica.codEsterna',"il campo \u00E8 obbligatorio","validate_anagrafica_codEsterna_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaDipendenti").elements['anagrafica.codEsterna'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_codEsterna','label.anagrafica.codEsterna',"I caratteri immessi sono superiori ai 16 consentiti","validate_anagrafica_codEsterna_stringlengthCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaDipendenti").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_cognome','label.anagrafica.cognome',"il campo \u00E8 obbligatorio","validate_anagrafica_cognome_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaDipendenti").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_cognome','label.anagrafica.cognome',"I caratteri immessi sono superiori ai 60 consentiti","validate_anagrafica_cognome_stringlengthCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaDipendenti").elements['anagrafica.codFiscale'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_codFiscale','label.anagrafica.codFiscale',"@WARNING La lunghezza del codice fiscale non \u00E8 corretta:\n il codice fiscale dovrebbe essere lungo\n esattamente 16 caratteri.","validate_anagrafica_codFiscale_minLengthNoSubmitValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaDipendenti").elements['anagrafica.codFiscale'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_codFiscale','label.anagrafica.codFiscale',"@WARNING Contiene un carattere non valido: @CHARNOTVALID.\nI caratteri validi sono le lettere e le cifre.","validate_anagrafica_codFiscale_noSpecialCharValidatorForCF", _onsubmit, _onchange);
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
if (document.getElementById("salvaDipendenti").elements['anagrafica.codFiscale'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_codFiscale','label.anagrafica.codFiscale',"@WARNING Il codice fiscale non \u00E8 corretto:\n il codice di controllo non corrisponde.","validate_anagrafica_codFiscale_codiceFiscale", _onsubmit, _onchange);
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
if (document.getElementById("salvaDipendenti").elements['anagrafica.indirizzoResidenza.indirizzo'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_indirizzoResidenza_indirizzo','label.anagrafica.indirizzoResidenza.indirizzo',"I caratteri immessi sono superiori ai 30 consentiti","validate_anagrafica_indirizzoResidenza_indirizzo_stringlengthCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'stringlengthCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.indirizzoResidenza.comune");
console.log('function validate_anagrafica_indirizzoResidenza_comune_stringlengthCbiValidator');
}
*/
function validate_anagrafica_indirizzoResidenza_comune_stringlengthCbiValidator(obj)
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
if (document.getElementById("salvaDipendenti").elements['anagrafica.indirizzoResidenza.comune'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_indirizzoResidenza_comune','label.anagrafica.indirizzoResidenza.comune',"I caratteri immessi sono superiori ai 30 consentiti","validate_anagrafica_indirizzoResidenza_comune_stringlengthCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
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
if (document.getElementById("salvaDipendenti").elements['anagrafica.indirizzoResidenza.CAP'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_indirizzoResidenza_CAP','label.anagrafica.indirizzoResidenza.CAP',"I caratteri immessi sono superiori ai 5 consentiti","validate_anagrafica_indirizzoResidenza_CAP_stringlengthCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaDipendenti").elements['anagrafica.coordinateBanca.desBanca'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_coordinateBanca_desBanca','label.anagrafica.coordinateBanca.desBanca',"I caratteri immessi sono superiori ai 60 consentiti","validate_anagrafica_coordinateBanca_desBanca_stringlengthCbiValidator", _onsubmit, _onchange);
_onsubmit=false;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'abiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.coordinateBanca.ABI");
console.log('function validate_anagrafica_coordinateBanca_ABI_abiValidator');
}
*/
function validate_anagrafica_coordinateBanca_ABI_abiValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var tmp =checkABICAB(value);
if ((value != "") && (tmp == null))
{
return false;
} else
{		if (tmp!=null) field.value=tmp;
return true;
}
return true;
}
if (document.getElementById("salvaDipendenti").elements['anagrafica.coordinateBanca.ABI'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_coordinateBanca_ABI','label.anagrafica.coordinateBanca.ABI',"Codice ABI non corretto.","validate_anagrafica_coordinateBanca_ABI_abiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaDipendenti").elements['anagrafica.coordinateBanca.ABI'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_coordinateBanca_ABI','label.anagrafica.coordinateBanca.ABI',"deve essere compreso tra \" @MIN \" e \" @MAX \", oppure tra \" @M2IN \" e \" @M2AX \", oppure tra \" @M3IN \" e \" @M3AX \", oppure tra \" @M4IN \" e \" @M4AX \"","validate_anagrafica_coordinateBanca_ABI_abiRangeValidator", _onsubmit, _onchange);
_onsubmit=false;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'abiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.coordinateBanca.CAB");
console.log('function validate_anagrafica_coordinateBanca_CAB_abiValidator');
}
*/
function validate_anagrafica_coordinateBanca_CAB_abiValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var tmp =checkABICAB(value);
if ((value != "") && (tmp == null))
{
return false;
} else
{		if (tmp!=null) field.value=tmp;
return true;
}
return true;
}
if (document.getElementById("salvaDipendenti").elements['anagrafica.coordinateBanca.CAB'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_coordinateBanca_CAB','label.anagrafica.coordinateBanca.CAB',"Codice ABI non corretto.","validate_anagrafica_coordinateBanca_CAB_abiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'cabRangeValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.coordinateBanca.CAB");
console.log('function validate_anagrafica_coordinateBanca_CAB_cabRangeValidator');
}
*/
function validate_anagrafica_coordinateBanca_CAB_cabRangeValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
setVariableIntoMessage(obj,'MIN','00001');
setVariableIntoMessage(obj,'MAX','99999');
var rxp = /^([0-9]{5,5}){0,1}$/i;
if (!value.match(rxp)){ return false;}
else{
if(value.replace(/^\s+|\s+$/g,"").length != 0){
if(isNaN( parseInt( value ) )){return false;}
else{
var intVal = parseInt( value );
if(intVal >= 1 && intVal <= 99999){return true;}
else {return false;}
}
}
}
return true;
}
if (document.getElementById("salvaDipendenti").elements['anagrafica.coordinateBanca.CAB'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_coordinateBanca_CAB','label.anagrafica.coordinateBanca.CAB',"deve essere compreso tra \" @MIN \" e \" @MAX \", oppure tra \" @M2IN \" e \" @M2AX \", oppure tra \" @M3IN \" e \" @M3AX \", oppure tra \" @M4IN \" e \" @M4AX \"","validate_anagrafica_coordinateBanca_CAB_cabRangeValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'accountValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.coordinateBanca.numConto");
console.log('function validate_anagrafica_coordinateBanca_numConto_accountValidator');
}
*/
function validate_anagrafica_coordinateBanca_numConto_accountValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var tmp=checkAccountFormat(value,0,12);
if ((value != "") && (tmp.indexOf('false')==0))
{
field.value = tmp.substring(5,tmp.length);
return false;
} else 		{
field.value = tmp;
return true;
}
return true;
}
if (document.getElementById("salvaDipendenti").elements['anagrafica.coordinateBanca.numConto'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_coordinateBanca_numConto','label.anagrafica.coordinateBanca.numConto',"Numero di conto errato.\nI valori permessi sono 12.\nControllare il numero di conto proposto! ","validate_anagrafica_coordinateBanca_numConto_accountValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'stringlengthCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: anagrafica.coordinateBanca.CIN");
console.log('function validate_anagrafica_coordinateBanca_CIN_stringlengthCbiValidator');
}
*/
function validate_anagrafica_coordinateBanca_CIN_stringlengthCbiValidator(obj)
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
(1 > -1 && value.length > 1)) {
return false;
}
}
return true;
}
if (document.getElementById("salvaDipendenti").elements['anagrafica.coordinateBanca.CIN'])  addValidation(showAlert,'salvaDipendenti','salvaDipendenti_anagrafica_coordinateBanca_CIN','label.anagrafica.coordinateBanca.CIN',"I caratteri immessi sono superiori ai 1 consentiti","validate_anagrafica_coordinateBanca_CIN_stringlengthCbiValidator", _onsubmit, _onchange);
function validateForm_salvaDipendenti() {
if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; }
var form = document.getElementById("salvaDipendenti");
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
