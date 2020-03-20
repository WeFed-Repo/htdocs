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
if (document.getElementById("inserimentoModificaMandato").elements['contextSelectorData.id'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_contextSelectorData_id','label.contextSelectorData.id',"il campo \u00E8 obbligatorio","validate_contextSelectorData_id_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['contextSelectorData.descrizione'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_contextSelectorData_descrizione','label.contextSelectorData.descrizione',"il campo \u00E8 obbligatorio","validate_contextSelectorData_descrizione_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['contextSelectorData.cf'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_contextSelectorData_cf','label.contextSelectorData.cf',"il campo \u00E8 obbligatorio","validate_contextSelectorData_cf_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['contextSelectorData.banca'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_contextSelectorData_banca','label.contextSelectorData.banca',"il campo \u00E8 obbligatorio","validate_contextSelectorData_banca_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.bic'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_bic','label.disposizione.bic',"il campo \u00E8 obbligatorio","validate_disposizione_bic_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.bic'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_bic','label.disposizione.bic',"Ordinante la lunghezza deve essere di 8 o 11 caratteri","validate_disposizione_bic_bicLenghtValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.bic'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_bic','label.disposizione.bic',"Ordinante non \u00E8 corretto. Il codice di controllo non corrisponde.","validate_disposizione_bic_checkBicValid", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.bic'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_bic','label.disposizione.bic',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_bic_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['contextSelectorData.identificativoCdtr'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_contextSelectorData_identificativoCdtr','label.contextSelectorData.identificativoCdtr',"il campo \u00E8 obbligatorio","validate_contextSelectorData_identificativoCdtr_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['contextSelectorData.identificativoCdtr'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_contextSelectorData_identificativoCdtr','label.contextSelectorData.identificativoCdtr',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_contextSelectorData_identificativoCdtr_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.nm");
console.log('function validate_disposizione_beneficiarioEffettivo_nm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_nm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.beneficiarioEffettivo.nm'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_beneficiarioEffettivo_nm','label.disposizione.beneficiarioEffettivo.nm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_nm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaEqualsRagioneSocialeValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.nm");
console.log('function validate_disposizione_beneficiarioEffettivo_nm_sepaEqualsRagioneSocialeValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_nm_sepaEqualsRagioneSocialeValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
value = value.replace(/^\s+|\s+$/g,"");
if (value != form.elements['contextSelectorData.descrizione'].value)
{
return true;
}
else
{
return false;
}
}
return true;
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.beneficiarioEffettivo.nm'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_beneficiarioEffettivo_nm','label.disposizione.beneficiarioEffettivo.nm',"Attenzione! La Ragione Sociale del Creditore Effettivo deve essere diversa dalla Ragione Sociale dell\'Ordinante.","validate_disposizione_beneficiarioEffettivo_nm_sepaEqualsRagioneSocialeValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggCreditoreEffettivo.identificativo");
console.log('function validate_datiAggCreditoreEffettivo_identificativo_javascriptExpression');
}
*/
function validate_datiAggCreditoreEffettivo_identificativo_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (value != '' || $.trim($("[name='datiAggCreditoreEffettivo.tipoSoggetto'] option:selected", form).text()) == '' ||
value == '' && $("[name='datiAggCreditoreEffettivo.tipoSoggetto']", form).val() == "PG"	&&
$("[name='datiAggCreditoreEffettivo.tipoCodice']", form).val() == '' &&
$("[name='datiAggCreditoreEffettivo.codice']", form).val() == '' &&
$("[name='datiAggCreditoreEffettivo.descCodice']", form).val() == '');
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['datiAggCreditoreEffettivo.identificativo'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_datiAggCreditoreEffettivo_identificativo','label.datiAggCreditoreEffettivo.identificativo',"Creditore Effettivo il campo \u00E8 obbligatorio","validate_datiAggCreditoreEffettivo_identificativo_javascriptExpression", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'bicLenghtValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.bic");
console.log('function validate_disposizione_beneficiarioEffettivo_bic_bicLenghtValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_bic_bicLenghtValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.beneficiarioEffettivo.bic'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_beneficiarioEffettivo_bic','label.disposizione.beneficiarioEffettivo.bic',"Creditore Effettivo la lunghezza deve essere di 8 o 11 caratteri","validate_disposizione_beneficiarioEffettivo_bic_bicLenghtValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkBicValid';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.bic");
console.log('function validate_disposizione_beneficiarioEffettivo_bic_checkBicValid');
}
*/
function validate_disposizione_beneficiarioEffettivo_bic_checkBicValid(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.beneficiarioEffettivo.bic'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_beneficiarioEffettivo_bic','label.disposizione.beneficiarioEffettivo.bic',"Creditore Effettivo non \u00E8 corretto. Il codice di controllo non corrisponde.","validate_disposizione_beneficiarioEffettivo_bic_checkBicValid", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.bic");
console.log('function validate_disposizione_beneficiarioEffettivo_bic_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_bic_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.beneficiarioEffettivo.bic'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_beneficiarioEffettivo_bic','label.disposizione.beneficiarioEffettivo.bic',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_bic_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.cityOfBirth");
console.log('function validate_disposizione_beneficiarioEffettivo_cityOfBirth_javascriptExpression');
}
*/
function validate_disposizione_beneficiarioEffettivo_cityOfBirth_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (value != '' ||
$("[name='disposizione.beneficiarioEffettivo.cityOfBirth']", form).val() == '' &&
$("[name='disposizione.beneficiarioEffettivo.prvcOfBirth']", form).val() == '' &&
$("[name='disposizione.beneficiarioEffettivo.ctryOfBirth']", form).val() == '' &&
$("[name='disposizione.beneficiarioEffettivo.dataNascita']", form).val() == '');
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.beneficiarioEffettivo.cityOfBirth'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_beneficiarioEffettivo_cityOfBirth','label.disposizione.beneficiarioEffettivo.cityOfBirth',"Creditore Effettivo il campo \u00E8 obbligatorio","validate_disposizione_beneficiarioEffettivo_cityOfBirth_javascriptExpression", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sintaxDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.dataNascita");
console.log('function validate_disposizione_beneficiarioEffettivo_dataNascita_sintaxDateValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_dataNascita_sintaxDateValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.beneficiarioEffettivo.dataNascita'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_beneficiarioEffettivo_dataNascita','label.disposizione.beneficiarioEffettivo.dataNascita',"La sintassi non \u00E8 corretta","validate_disposizione_beneficiarioEffettivo_dataNascita_sintaxDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'validDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.dataNascita");
console.log('function validate_disposizione_beneficiarioEffettivo_dataNascita_validDateValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_dataNascita_validDateValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.beneficiarioEffettivo.dataNascita'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_beneficiarioEffettivo_dataNascita','label.disposizione.beneficiarioEffettivo.dataNascita',"La data inserita non \u00E8 valida","validate_disposizione_beneficiarioEffettivo_dataNascita_validDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.dataNascita");
console.log('function validate_disposizione_beneficiarioEffettivo_dataNascita_javascriptExpression');
}
*/
function validate_disposizione_beneficiarioEffettivo_dataNascita_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (value != '' ||
$("[name='disposizione.beneficiarioEffettivo.cityOfBirth']", form).val() == '' &&
$("[name='disposizione.beneficiarioEffettivo.prvcOfBirth']", form).val() == '' &&
$("[name='disposizione.beneficiarioEffettivo.ctryOfBirth']", form).val() == '' &&
$("[name='disposizione.beneficiarioEffettivo.dataNascita']", form).val() == '');
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.beneficiarioEffettivo.dataNascita'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_beneficiarioEffettivo_dataNascita','label.disposizione.beneficiarioEffettivo.dataNascita',"Creditore Effettivo il campo \u00E8 obbligatorio","validate_disposizione_beneficiarioEffettivo_dataNascita_javascriptExpression", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.prvcOfBirth");
console.log('function validate_disposizione_beneficiarioEffettivo_prvcOfBirth_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_prvcOfBirth_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.beneficiarioEffettivo.prvcOfBirth'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_beneficiarioEffettivo_prvcOfBirth','label.disposizione.beneficiarioEffettivo.prvcOfBirth',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_prvcOfBirth_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.prvcOfBirth");
console.log('function validate_disposizione_beneficiarioEffettivo_prvcOfBirth_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_prvcOfBirth_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.beneficiarioEffettivo.prvcOfBirth'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_beneficiarioEffettivo_prvcOfBirth','label.disposizione.beneficiarioEffettivo.prvcOfBirth',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_prvcOfBirth_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.ctryOfBirth");
console.log('function validate_disposizione_beneficiarioEffettivo_ctryOfBirth_javascriptExpression');
}
*/
function validate_disposizione_beneficiarioEffettivo_ctryOfBirth_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (value != '' ||
$("[name='disposizione.beneficiarioEffettivo.cityOfBirth']", form).val() == '' &&
$("[name='disposizione.beneficiarioEffettivo.prvcOfBirth']", form).val() == '' &&
$("[name='disposizione.beneficiarioEffettivo.ctryOfBirth']", form).val() == '' &&
$("[name='disposizione.beneficiarioEffettivo.dataNascita']", form).val() == '');
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.beneficiarioEffettivo.ctryOfBirth'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_beneficiarioEffettivo_ctryOfBirth','label.disposizione.beneficiarioEffettivo.ctryOfBirth',"Creditore Effettivo il campo \u00E8 obbligatorio","validate_disposizione_beneficiarioEffettivo_ctryOfBirth_javascriptExpression", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.descAnagraficaDebitore'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_descAnagraficaDebitore','label.disposizione.descAnagraficaDebitore',"Debitore il campo \u00E8 obbligatorio","validate_disposizione_descAnagraficaDebitore_sepaRagSocFornitoreRequired", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.descAnagraficaDebitore'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_descAnagraficaDebitore','label.disposizione.descAnagraficaDebitore',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_descAnagraficaDebitore_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.lineaIndirizzoDebitore");
console.log('function validate_disposizione_lineaIndirizzoDebitore_bundleSwiftStringValidator');
}
*/
function validate_disposizione_lineaIndirizzoDebitore_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.lineaIndirizzoDebitore'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_lineaIndirizzoDebitore','label.disposizione.lineaIndirizzoDebitore',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_lineaIndirizzoDebitore_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.ibanDebitore'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_ibanDebitore','label.disposizione.ibanDebitore',"Debitore il campo \u00E8 obbligatorio","validate_disposizione_ibanDebitore_javascriptExpression", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.ibanDebitore'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_ibanDebitore','label.disposizione.ibanDebitore',"Codice IBAN errato o mancante.","validate_disposizione_ibanDebitore_checkIBANSub", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.ibanDebitore'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_ibanDebitore','label.disposizione.ibanDebitore',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_ibanDebitore_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.bicDebitore'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_bicDebitore','label.disposizione.bicDebitore',"Debitore la lunghezza deve essere di 8 o 11 caratteri","validate_disposizione_bicDebitore_bicLenghtValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.bicDebitore'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_bicDebitore','label.disposizione.bicDebitore',"Debitore non \u00E8 corretto. Il codice di controllo non corrisponde.","validate_disposizione_bicDebitore_checkBicValid", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.bicDebitore'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_bicDebitore','label.disposizione.bicDebitore',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_bicDebitore_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'differentFromField';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.codice");
console.log('function validate_datiAggDebitore_codice_differentFromField');
}
*/
function validate_datiAggDebitore_codice_differentFromField(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return value == '' || value != form.elements['datiAggDebitore.identificativo'].value;
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['datiAggDebitore.codice'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_datiAggDebitore_codice','label.datiAggDebitore.codice',"Attenzione! Il C.F./P.IVA del Debitore deve essere diverso dal Codice fiscale sottoscrittore ","validate_datiAggDebitore_codice_differentFromField", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.codice");
console.log('function validate_datiAggDebitore_codice_javascriptExpression');
}
*/
function validate_datiAggDebitore_codice_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (( value== '' || checkPIVA(value) || isCodiceFiscale(value) ));
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['datiAggDebitore.codice'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_datiAggDebitore_codice','label.datiAggDebitore.codice',"Debitore Codice Fiscale / Partita IVA non valido:\n il codice di controllo non corrisponde.\n","validate_datiAggDebitore_codice_javascriptExpression", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.identificativo");
console.log('function validate_datiAggDebitore_identificativo_requiredCbiValidator');
}
*/
function validate_datiAggDebitore_identificativo_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['datiAggDebitore.identificativo'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_datiAggDebitore_identificativo','label.datiAggDebitore.identificativo',"Debitore il campo \u00E8 obbligatorio","validate_datiAggDebitore_identificativo_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.identificativo");
console.log('function validate_datiAggDebitore_identificativo_bundleSwiftStringValidator');
}
*/
function validate_datiAggDebitore_identificativo_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['datiAggDebitore.identificativo'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_datiAggDebitore_identificativo','label.datiAggDebitore.identificativo',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_datiAggDebitore_identificativo_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'codiceFiscale';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.identificativo");
console.log('function validate_datiAggDebitore_identificativo_codiceFiscale');
}
*/
function validate_datiAggDebitore_identificativo_codiceFiscale(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['datiAggDebitore.identificativo'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_datiAggDebitore_identificativo','label.datiAggDebitore.identificativo',"Il codice fiscale non \u00E8 corretto:\n il codice di controllo non corrisponde.","validate_datiAggDebitore_identificativo_codiceFiscale", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.nm");
console.log('function validate_disposizione_debitoreEffettivo_nm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreEffettivo_nm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.debitoreEffettivo.nm'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_debitoreEffettivo_nm','label.disposizione.debitoreEffettivo.nm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreEffettivo_nm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaEqualsRagioneSocialeValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.nm");
console.log('function validate_disposizione_debitoreEffettivo_nm_sepaEqualsRagioneSocialeValidator');
}
*/
function validate_disposizione_debitoreEffettivo_nm_sepaEqualsRagioneSocialeValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
value = value.replace(/^\s+|\s+$/g,"");
if (value != form.elements['disposizione.descAnagraficaDebitore'].value)
{
return true;
}
else
{
return false;
}
}
return true;
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.debitoreEffettivo.nm'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_debitoreEffettivo_nm','label.disposizione.debitoreEffettivo.nm',"Attenzione! La Ragione Sociale del Debitore Effettivo deve essere diversa dalla Ragione Sociale del Debitore.","validate_disposizione_debitoreEffettivo_nm_sepaEqualsRagioneSocialeValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebEffettivo.identificativo");
console.log('function validate_datiAggDebEffettivo_identificativo_javascriptExpression');
}
*/
function validate_datiAggDebEffettivo_identificativo_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (value != '' || $.trim($("[name='datiAggDebEffettivo.tipoSoggetto'] option:selected", form).text()) == '' ||
value == '' && $("[name='datiAggDebEffettivo.tipoCodice']", form).val() == '' &&
$("[name='datiAggDebEffettivo.codice']", form).val() == '' &&
$("[name='datiAggDebEffettivo.descCodice']", form).val() == '');
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['datiAggDebEffettivo.identificativo'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_datiAggDebEffettivo_identificativo','label.datiAggDebEffettivo.identificativo',"Debitore Effettivo il campo \u00E8 obbligatorio","validate_datiAggDebEffettivo_identificativo_javascriptExpression", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'bicLenghtValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.bic");
console.log('function validate_disposizione_debitoreEffettivo_bic_bicLenghtValidator');
}
*/
function validate_disposizione_debitoreEffettivo_bic_bicLenghtValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.debitoreEffettivo.bic'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_debitoreEffettivo_bic','label.disposizione.debitoreEffettivo.bic',"Debitore Effettivo la lunghezza deve essere di 8 o 11 caratteri","validate_disposizione_debitoreEffettivo_bic_bicLenghtValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkBicValid';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.bic");
console.log('function validate_disposizione_debitoreEffettivo_bic_checkBicValid');
}
*/
function validate_disposizione_debitoreEffettivo_bic_checkBicValid(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.debitoreEffettivo.bic'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_debitoreEffettivo_bic','label.disposizione.debitoreEffettivo.bic',"Debitore Effettivo non \u00E8 corretto. Il codice di controllo non corrisponde.","validate_disposizione_debitoreEffettivo_bic_checkBicValid", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.bic");
console.log('function validate_disposizione_debitoreEffettivo_bic_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreEffettivo_bic_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.debitoreEffettivo.bic'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_debitoreEffettivo_bic','label.disposizione.debitoreEffettivo.bic',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreEffettivo_bic_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.cityOfBirth");
console.log('function validate_disposizione_debitoreEffettivo_cityOfBirth_javascriptExpression');
}
*/
function validate_disposizione_debitoreEffettivo_cityOfBirth_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (value != '' ||
$("[name='disposizione.debitoreEffettivo.cityOfBirth']", form).val() == '' &&
$("[name='disposizione.debitoreEffettivo.prvcOfBirth']", form).val() == '' &&
$("[name='disposizione.debitoreEffettivo.ctryOfBirth']", form).val() == '' &&
$("[name='disposizione.debitoreEffettivo.dataNascita']", form).val() == '');
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.debitoreEffettivo.cityOfBirth'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_debitoreEffettivo_cityOfBirth','label.disposizione.debitoreEffettivo.cityOfBirth',"Debitore Effettivo il campo \u00E8 obbligatorio","validate_disposizione_debitoreEffettivo_cityOfBirth_javascriptExpression", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sintaxDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.dataNascita");
console.log('function validate_disposizione_debitoreEffettivo_dataNascita_sintaxDateValidator');
}
*/
function validate_disposizione_debitoreEffettivo_dataNascita_sintaxDateValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.debitoreEffettivo.dataNascita'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_debitoreEffettivo_dataNascita','label.disposizione.debitoreEffettivo.dataNascita',"La sintassi non \u00E8 corretta","validate_disposizione_debitoreEffettivo_dataNascita_sintaxDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'validDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.dataNascita");
console.log('function validate_disposizione_debitoreEffettivo_dataNascita_validDateValidator');
}
*/
function validate_disposizione_debitoreEffettivo_dataNascita_validDateValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.debitoreEffettivo.dataNascita'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_debitoreEffettivo_dataNascita','label.disposizione.debitoreEffettivo.dataNascita',"La data inserita non \u00E8 valida","validate_disposizione_debitoreEffettivo_dataNascita_validDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.dataNascita");
console.log('function validate_disposizione_debitoreEffettivo_dataNascita_javascriptExpression');
}
*/
function validate_disposizione_debitoreEffettivo_dataNascita_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (value != '' ||
$("[name='disposizione.debitoreEffettivo.cityOfBirth']", form).val() == '' &&
$("[name='disposizione.debitoreEffettivo.prvcOfBirth']", form).val() == '' &&
$("[name='disposizione.debitoreEffettivo.ctryOfBirth']", form).val() == '' &&
$("[name='disposizione.debitoreEffettivo.dataNascita']", form).val() == '');
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.debitoreEffettivo.dataNascita'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_debitoreEffettivo_dataNascita','label.disposizione.debitoreEffettivo.dataNascita',"Debitore Effettivo il campo \u00E8 obbligatorio","validate_disposizione_debitoreEffettivo_dataNascita_javascriptExpression", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.ctryOfBirth");
console.log('function validate_disposizione_debitoreEffettivo_ctryOfBirth_javascriptExpression');
}
*/
function validate_disposizione_debitoreEffettivo_ctryOfBirth_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (value != '' ||
$("[name='disposizione.debitoreEffettivo.cityOfBirth']", form).val() == '' &&
$("[name='disposizione.debitoreEffettivo.prvcOfBirth']", form).val() == '' &&
$("[name='disposizione.debitoreEffettivo.ctryOfBirth']", form).val() == '' &&
$("[name='disposizione.debitoreEffettivo.dataNascita']", form).val() == '');
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.debitoreEffettivo.ctryOfBirth'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_debitoreEffettivo_ctryOfBirth','label.disposizione.debitoreEffettivo.ctryOfBirth',"Debitore Effettivo il campo \u00E8 obbligatorio","validate_disposizione_debitoreEffettivo_ctryOfBirth_javascriptExpression", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.identificativoMandato'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_identificativoMandato','label.disposizione.identificativoMandato',"il campo \u00E8 obbligatorio","validate_disposizione_identificativoMandato_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.identificativoMandato'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_identificativoMandato','label.disposizione.identificativoMandato',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_identificativoMandato_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['dataMandato'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_dataMandato','label.dataMandato',"il campo \u00E8 obbligatorio","validate_dataMandato_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['dataMandato'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_dataMandato','label.dataMandato',"La sintassi non \u00E8 corretta","validate_dataMandato_sintaxDateValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['dataMandato'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_dataMandato','label.dataMandato',"La data inserita non \u00E8 valida","validate_dataMandato_validDateValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.identificativoRichiestaMandato'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_identificativoRichiestaMandato','label.disposizione.identificativoRichiestaMandato',"il campo \u00E8 obbligatorio","validate_disposizione_identificativoRichiestaMandato_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.identificativoRichiestaMandato'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_identificativoRichiestaMandato','label.disposizione.identificativoRichiestaMandato',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_identificativoRichiestaMandato_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['checkTipoMandato'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_checkTipoMandato','label.checkTipoMandato',"il campo \u00E8 obbligatorio","validate_checkTipoMandato_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoModificaMandato").elements['checkTipoSequenzaIncasso'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_checkTipoSequenzaIncasso','label.checkTipoSequenzaIncasso',"il campo \u00E8 obbligatorio","validate_checkTipoSequenzaIncasso_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: checkCodiceOperazione");
console.log('function validate_checkCodiceOperazione_requiredCbiValidator');
}
*/
function validate_checkCodiceOperazione_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['checkCodiceOperazione'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_checkCodiceOperazione','label.checkCodiceOperazione',"il campo \u00E8 obbligatorio","validate_checkCodiceOperazione_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: checkCodIdentifServizioEst");
console.log('function validate_checkCodIdentifServizioEst_requiredCbiValidator');
}
*/
function validate_checkCodIdentifServizioEst_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['checkCodIdentifServizioEst'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_checkCodIdentifServizioEst','label.checkCodIdentifServizioEst',"il campo \u00E8 obbligatorio","validate_checkCodIdentifServizioEst_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.identificativoBeneficiarioSchemaOrig");
console.log('function validate_disposizione_identificativoBeneficiarioSchemaOrig_javascriptExpression');
}
*/
function validate_disposizione_identificativoBeneficiarioSchemaOrig_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (value != '' || value == '' &&
$.trim($("[name='disposizione.tipoSoggettoBeneficiarioSchemaOrig'] option:selected", form).text()) == '');
return true;
}
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.identificativoBeneficiarioSchemaOrig'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_identificativoBeneficiarioSchemaOrig','label.disposizione.identificativoBeneficiarioSchemaOrig'," il campo \u00E8 obbligatorio","validate_disposizione_identificativoBeneficiarioSchemaOrig_javascriptExpression", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.identificativoBeneficiarioSchemaOrig");
console.log('function validate_disposizione_identificativoBeneficiarioSchemaOrig_bundleSwiftStringValidator');
}
*/
function validate_disposizione_identificativoBeneficiarioSchemaOrig_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.identificativoBeneficiarioSchemaOrig'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_identificativoBeneficiarioSchemaOrig','label.disposizione.identificativoBeneficiarioSchemaOrig',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_identificativoBeneficiarioSchemaOrig_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.identificativoMandatoOriginario");
console.log('function validate_disposizione_identificativoMandatoOriginario_requiredCbiValidator');
}
*/
function validate_disposizione_identificativoMandatoOriginario_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.identificativoMandatoOriginario'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_identificativoMandatoOriginario','label.disposizione.identificativoMandatoOriginario',"il campo \u00E8 obbligatorio","validate_disposizione_identificativoMandatoOriginario_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.identificativoMandatoOriginario");
console.log('function validate_disposizione_identificativoMandatoOriginario_bundleSwiftStringValidator');
}
*/
function validate_disposizione_identificativoMandatoOriginario_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.identificativoMandatoOriginario'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_identificativoMandatoOriginario','label.disposizione.identificativoMandatoOriginario',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_identificativoMandatoOriginario_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.descAnagBeneficiarioOrig");
console.log('function validate_disposizione_descAnagBeneficiarioOrig_requiredCbiValidator');
}
*/
function validate_disposizione_descAnagBeneficiarioOrig_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.descAnagBeneficiarioOrig'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_descAnagBeneficiarioOrig','label.disposizione.descAnagBeneficiarioOrig',"il campo \u00E8 obbligatorio","validate_disposizione_descAnagBeneficiarioOrig_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.descAnagBeneficiarioOrig");
console.log('function validate_disposizione_descAnagBeneficiarioOrig_bundleSwiftStringValidator');
}
*/
function validate_disposizione_descAnagBeneficiarioOrig_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoModificaMandato").elements['disposizione.descAnagBeneficiarioOrig'])  addValidation(showAlert,'inserimentoModificaMandato','inserimentoModificaMandato_disposizione_descAnagBeneficiarioOrig','label.disposizione.descAnagBeneficiarioOrig',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_descAnagBeneficiarioOrig_bundleSwiftStringValidator", _onsubmit, _onchange);
function validateForm_inserimentoModificaMandato() {
if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; }
var form = document.getElementById("inserimentoModificaMandato");
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
