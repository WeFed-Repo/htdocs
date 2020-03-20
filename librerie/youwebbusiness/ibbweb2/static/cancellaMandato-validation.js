var _onsubmit=true;
var _onchange=CHECK_ON_CHANGE;
var _show =true;
CHECK_REPEATED_SUBMIT=true;
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: contextSelectorData.id");
console.log('function validate_contextSelectorData_id_requiredCbiValidator');
}
*/
function validate_contextSelectorData_id_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['contextSelectorData.id'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_contextSelectorData_id','label.contextSelectorData.id',"il campo \u00E8 obbligatorio","validate_contextSelectorData_id_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: contextSelectorData.descrizione");
console.log('function validate_contextSelectorData_descrizione_requiredCbiValidator');
}
*/
function validate_contextSelectorData_descrizione_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['contextSelectorData.descrizione'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_contextSelectorData_descrizione','label.contextSelectorData.descrizione',"il campo \u00E8 obbligatorio","validate_contextSelectorData_descrizione_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: contextSelectorData.cf");
console.log('function validate_contextSelectorData_cf_requiredCbiValidator');
}
*/
function validate_contextSelectorData_cf_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['contextSelectorData.cf'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_contextSelectorData_cf','label.contextSelectorData.cf',"il campo \u00E8 obbligatorio","validate_contextSelectorData_cf_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: contextSelectorData.banca");
console.log('function validate_contextSelectorData_banca_requiredCbiValidator');
}
*/
function validate_contextSelectorData_banca_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['contextSelectorData.banca'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_contextSelectorData_banca','label.contextSelectorData.banca',"il campo \u00E8 obbligatorio","validate_contextSelectorData_banca_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bic");
console.log('function validate_disposizione_bic_requiredCbiValidator');
}
*/
function validate_disposizione_bic_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.bic'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_bic','label.disposizione.bic',"il campo \u00E8 obbligatorio","validate_disposizione_bic_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'bicLenghtValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bic");
console.log('function validate_disposizione_bic_bicLenghtValidator');
}
*/
function validate_disposizione_bic_bicLenghtValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.bic'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_bic','label.disposizione.bic',"Ordinante la lunghezza deve essere di 8 o 11 caratteri","validate_disposizione_bic_bicLenghtValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkBicValid';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bic");
console.log('function validate_disposizione_bic_checkBicValid');
}
*/
function validate_disposizione_bic_checkBicValid(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var valueBic = value.replace(/^\s+|\s+$/g,"").toUpperCase();
field.value = valueBic;
if ((valueBic.length==8 || valueBic.length==11)){
if(!(isBicValid(value))) return false;
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.bic'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_bic','label.disposizione.bic',"Ordinante non \u00E8 corretto. Il codice di controllo non corrisponde.","validate_disposizione_bic_checkBicValid", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bic");
console.log('function validate_disposizione_bic_bundleSwiftStringValidator');
}
*/
function validate_disposizione_bic_bundleSwiftStringValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var controlla = true;
if (controlla){
if (!isSWIFTStringBundle(value)) return false;
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.bic'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_bic','label.disposizione.bic',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_bic_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: contextSelectorData.identificativoCdtr");
console.log('function validate_contextSelectorData_identificativoCdtr_requiredCbiValidator');
}
*/
function validate_contextSelectorData_identificativoCdtr_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['contextSelectorData.identificativoCdtr'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_contextSelectorData_identificativoCdtr','label.contextSelectorData.identificativoCdtr',"il campo \u00E8 obbligatorio","validate_contextSelectorData_identificativoCdtr_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: contextSelectorData.identificativoCdtr");
console.log('function validate_contextSelectorData_identificativoCdtr_bundleSwiftStringValidator');
}
*/
function validate_contextSelectorData_identificativoCdtr_bundleSwiftStringValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var controlla = true;
if (controlla){
if (!isSWIFTStringBundle(value)) return false;
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['contextSelectorData.identificativoCdtr'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_contextSelectorData_identificativoCdtr','label.contextSelectorData.identificativoCdtr',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_contextSelectorData_identificativoCdtr_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaRagSocFornitoreRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.descAnagraficaDebitore");
console.log('function validate_disposizione_descAnagraficaDebitore_sepaRagSocFornitoreRequired');
}
*/
function validate_disposizione_descAnagraficaDebitore_sepaRagSocFornitoreRequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(value==null || value=="" || value.replace(/^\s+|\s+$/g,"").length == 0)
{
return false;
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.descAnagraficaDebitore'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_descAnagraficaDebitore','label.disposizione.descAnagraficaDebitore',"Debitore il campo \u00E8 obbligatorio","validate_disposizione_descAnagraficaDebitore_sepaRagSocFornitoreRequired", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.descAnagraficaDebitore");
console.log('function validate_disposizione_descAnagraficaDebitore_bundleSwiftStringValidator');
}
*/
function validate_disposizione_descAnagraficaDebitore_bundleSwiftStringValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var controlla = true;
if (controlla){
if (!isSWIFTStringBundle(value)) return false;
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.descAnagraficaDebitore'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_descAnagraficaDebitore','label.disposizione.descAnagraficaDebitore',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_descAnagraficaDebitore_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.ibanDebitore");
console.log('function validate_disposizione_ibanDebitore_javascriptExpression');
}
*/
function validate_disposizione_ibanDebitore_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (value != '');
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.ibanDebitore'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_ibanDebitore','label.disposizione.ibanDebitore',"Debitore il campo \u00E8 obbligatorio","validate_disposizione_ibanDebitore_javascriptExpression", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkIBANSub';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.ibanDebitore");
console.log('function validate_disposizione_ibanDebitore_checkIBANSub');
}
*/
function validate_disposizione_ibanDebitore_checkIBANSub(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var valueIban = value.replace(/^\s+|\s+$/g,"").toUpperCase();
if(valueIban.length > 0){
if(valueIban.length < 5 || valueIban.length > 34){
return false;
}
var ibanPattern = new RegExp(/[a-zA-Z]{2,2}[0-9]{2,2}[a-zA-Z0-9]{1,30}/g);
return ibanPattern.test(valueIban);
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.ibanDebitore'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_ibanDebitore','label.disposizione.ibanDebitore',"Codice IBAN errato o mancante.","validate_disposizione_ibanDebitore_checkIBANSub", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.ibanDebitore");
console.log('function validate_disposizione_ibanDebitore_bundleSwiftStringValidator');
}
*/
function validate_disposizione_ibanDebitore_bundleSwiftStringValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var controlla = true;
if (controlla){
if (!isSWIFTStringBundle(value)) return false;
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.ibanDebitore'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_ibanDebitore','label.disposizione.ibanDebitore',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_ibanDebitore_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'bicLenghtValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicDebitore");
console.log('function validate_disposizione_bicDebitore_bicLenghtValidator');
}
*/
function validate_disposizione_bicDebitore_bicLenghtValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.bicDebitore'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_bicDebitore','label.disposizione.bicDebitore',"Debitore la lunghezza deve essere di 8 o 11 caratteri","validate_disposizione_bicDebitore_bicLenghtValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkBicValid';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicDebitore");
console.log('function validate_disposizione_bicDebitore_checkBicValid');
}
*/
function validate_disposizione_bicDebitore_checkBicValid(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var valueBic = value.replace(/^\s+|\s+$/g,"").toUpperCase();
field.value = valueBic;
if ((valueBic.length==8 || valueBic.length==11)){
if(!(isBicValid(value))) return false;
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.bicDebitore'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_bicDebitore','label.disposizione.bicDebitore',"Debitore non \u00E8 corretto. Il codice di controllo non corrisponde.","validate_disposizione_bicDebitore_checkBicValid", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicDebitore");
console.log('function validate_disposizione_bicDebitore_bundleSwiftStringValidator');
}
*/
function validate_disposizione_bicDebitore_bundleSwiftStringValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var controlla = true;
if (controlla){
if (!isSWIFTStringBundle(value)) return false;
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.bicDebitore'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_bicDebitore','label.disposizione.bicDebitore',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_bicDebitore_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.identificativoMandato");
console.log('function validate_disposizione_identificativoMandato_requiredCbiValidator');
}
*/
function validate_disposizione_identificativoMandato_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.identificativoMandato'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_identificativoMandato','label.disposizione.identificativoMandato',"il campo \u00E8 obbligatorio","validate_disposizione_identificativoMandato_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.identificativoMandato");
console.log('function validate_disposizione_identificativoMandato_bundleSwiftStringValidator');
}
*/
function validate_disposizione_identificativoMandato_bundleSwiftStringValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var controlla = true;
if (controlla){
if (!isSWIFTStringBundle(value)) return false;
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.identificativoMandato'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_identificativoMandato','label.disposizione.identificativoMandato',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_identificativoMandato_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: dataMandato");
console.log('function validate_dataMandato_requiredCbiValidator');
}
*/
function validate_dataMandato_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['dataMandato'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_dataMandato','label.dataMandato',"il campo \u00E8 obbligatorio","validate_dataMandato_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sintaxDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: dataMandato");
console.log('function validate_dataMandato_sintaxDateValidator');
}
*/
function validate_dataMandato_sintaxDateValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if ((value != null)  && value != "" && (checkSyntaxDate(field.value) == false))
{
return false;
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['dataMandato'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_dataMandato','label.dataMandato',"La sintassi non \u00E8 corretta","validate_dataMandato_sintaxDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'validDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: dataMandato");
console.log('function validate_dataMandato_validDateValidator');
}
*/
function validate_dataMandato_validDateValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if ((value != null) && value != "" && checkSyntaxDate(field.value) == true)
{
var esitoValidateData = checkValidDate(value);
if (esitoValidateData==false)
return false;
else
field.value=preformatDate(value);
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['dataMandato'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_dataMandato','label.dataMandato',"La data inserita non \u00E8 valida","validate_dataMandato_validDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.identificativoRichiestaMandato");
console.log('function validate_disposizione_identificativoRichiestaMandato_requiredCbiValidator');
}
*/
function validate_disposizione_identificativoRichiestaMandato_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.identificativoRichiestaMandato'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_identificativoRichiestaMandato','label.disposizione.identificativoRichiestaMandato',"il campo \u00E8 obbligatorio","validate_disposizione_identificativoRichiestaMandato_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.identificativoRichiestaMandato");
console.log('function validate_disposizione_identificativoRichiestaMandato_bundleSwiftStringValidator');
}
*/
function validate_disposizione_identificativoRichiestaMandato_bundleSwiftStringValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var controlla = true;
if (controlla){
if (!isSWIFTStringBundle(value)) return false;
}
return true;
}
if (document.getElementById("inserimentoCancellaMandato").elements['disposizione.identificativoRichiestaMandato'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_disposizione_identificativoRichiestaMandato','label.disposizione.identificativoRichiestaMandato',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_identificativoRichiestaMandato_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: checkTipoSequenzaIncasso");
console.log('function validate_checkTipoSequenzaIncasso_requiredCbiValidator');
}
*/
function validate_checkTipoSequenzaIncasso_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['checkTipoSequenzaIncasso'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_checkTipoSequenzaIncasso','label.checkTipoSequenzaIncasso',"il campo \u00E8 obbligatorio","validate_checkTipoSequenzaIncasso_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: checkTipoMandato");
console.log('function validate_checkTipoMandato_requiredCbiValidator');
}
*/
function validate_checkTipoMandato_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoCancellaMandato").elements['checkTipoMandato'])  addValidation(showAlert,'inserimentoCancellaMandato','inserimentoCancellaMandato_checkTipoMandato','label.checkTipoMandato',"il campo \u00E8 obbligatorio","validate_checkTipoMandato_requiredCbiValidator", _onsubmit, _onchange);
function validateForm_inserimentoCancellaMandato() {
if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; }
var form = document.getElementById("inserimentoCancellaMandato");
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
