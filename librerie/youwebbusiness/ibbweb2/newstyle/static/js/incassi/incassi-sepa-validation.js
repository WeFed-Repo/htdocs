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
if (document.getElementById("inserimentoIncassiSepa").elements['contextSelectorData.id'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_contextSelectorData_id','label.contextSelectorData.id',"il campo è obbligatorio","validate_contextSelectorData_id_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['contextSelectorData.descrizione'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_contextSelectorData_descrizione','label.contextSelectorData.descrizione',"il campo è obbligatorio","validate_contextSelectorData_descrizione_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['contextSelectorData.cf'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_contextSelectorData_cf','label.contextSelectorData.cf',"il campo è obbligatorio","validate_contextSelectorData_cf_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['contextSelectorData.banca'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_contextSelectorData_banca','label.contextSelectorData.banca',"il campo è obbligatorio","validate_contextSelectorData_banca_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaTipoAbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: contextSelectorData.banca");
console.log('function validate_contextSelectorData_banca_sepaTipoAbiValidator');
}
*/
function validate_contextSelectorData_banca_sepaTipoAbiValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objCodiceStrumento = form.elements['disposizione.codiceStrumento'];
var valCodiceStrumento = objCodiceStrumento.options[objCodiceStrumento.selectedIndex].value;
if (valCodiceStrumento == 'COR1') {
var valCodTipologiaBanca = form.elements['contextSelectorData.codTipologiaBanca'].value;
if (valCodTipologiaBanca == 'GR' ||  valCodTipologiaBanca == 'PR'){
return false;
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['contextSelectorData.banca'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_contextSelectorData_banca','label.contextSelectorData.banca',"Attenzione! Non è possibile inserire un incasso CORE1 selezionando una banca del Gruppo. Selezionare un altro Istituto.","validate_contextSelectorData_banca_sepaTipoAbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: contextSelectorData.conto");
console.log('function validate_contextSelectorData_conto_requiredCbiValidator');
}
*/
function validate_contextSelectorData_conto_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['contextSelectorData.conto'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_contextSelectorData_conto','label.contextSelectorData.conto',"il campo è obbligatorio","validate_contextSelectorData_conto_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['contextSelectorData.identificativoCdtr'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_contextSelectorData_identificativoCdtr','label.contextSelectorData.identificativoCdtr',"il campo è obbligatorio","validate_contextSelectorData_identificativoCdtr_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['contextSelectorData.identificativoCdtr'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_contextSelectorData_identificativoCdtr','label.contextSelectorData.identificativoCdtr',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_contextSelectorData_identificativoCdtr_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaIncassiRagSocCreditoreRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.nm");
console.log('function validate_disposizione_beneficiarioEffettivo_nm_sepaIncassiRagSocCreditoreRequired');
}
*/
function validate_disposizione_beneficiarioEffettivo_nm_sepaIncassiRagSocCreditoreRequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var tipoIndirizzoEl = form.elements['disposizione.beneficiarioEffettivo.tipoIndirizzo'];
if(
(
tipoIndirizzoEl != undefined && tipoIndirizzoEl.value.replace(/^\s+|\s+$/g,"").length != 0
|| form.elements['disposizione.beneficiarioEffettivo.strtNm'].value!=''
|| form.elements['disposizione.beneficiarioEffettivo.bldgNb'].value!=''
|| form.elements['disposizione.beneficiarioEffettivo.twnNm'].value!=''
|| form.elements['disposizione.beneficiarioEffettivo.pstCd'].value!=''
|| form.elements['disposizione.beneficiarioEffettivo.ctrySubDvsn'].value!=''
) && (
value==null
|| value==""
|| value.replace(/^\s+|\s+$/g,"").length == 0
)
)
{
return false;
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.beneficiarioEffettivo.nm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_beneficiarioEffettivo_nm','label.disposizione.beneficiarioEffettivo.nm',"Creditore Effettivo il campo è obbligatorio","validate_disposizione_beneficiarioEffettivo_nm_sepaIncassiRagSocCreditoreRequired", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.beneficiarioEffettivo.nm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_beneficiarioEffettivo_nm','label.disposizione.beneficiarioEffettivo.nm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_nm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.strtNm");
console.log('function validate_disposizione_beneficiarioEffettivo_strtNm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_strtNm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.beneficiarioEffettivo.strtNm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_beneficiarioEffettivo_strtNm','label.disposizione.beneficiarioEffettivo.strtNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_strtNm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.bldgNb");
console.log('function validate_disposizione_beneficiarioEffettivo_bldgNb_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_bldgNb_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.beneficiarioEffettivo.bldgNb'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_beneficiarioEffettivo_bldgNb','label.disposizione.beneficiarioEffettivo.bldgNb',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_bldgNb_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.twnNm");
console.log('function validate_disposizione_beneficiarioEffettivo_twnNm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_twnNm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.beneficiarioEffettivo.twnNm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_beneficiarioEffettivo_twnNm','label.disposizione.beneficiarioEffettivo.twnNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_twnNm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'capItaliaValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.pstCd");
console.log('function validate_disposizione_beneficiarioEffettivo_pstCd_capItaliaValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_pstCd_capItaliaValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
value = value.replace(/^\s+|\s+$/g,"");
if (value.length>0){
if (form.elements['nazioneCreditore'].value == 86 && 5 > -1 && value.length != 5) {
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.beneficiarioEffettivo.pstCd'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_beneficiarioEffettivo_pstCd','label.disposizione.beneficiarioEffettivo.pstCd',"@ERROR Creditore Effettivo Il valore da inserire deve avere 5 caratteri.","validate_disposizione_beneficiarioEffettivo_pstCd_capItaliaValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.pstCd");
console.log('function validate_disposizione_beneficiarioEffettivo_pstCd_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_pstCd_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.beneficiarioEffettivo.pstCd'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_beneficiarioEffettivo_pstCd','label.disposizione.beneficiarioEffettivo.pstCd',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_pstCd_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.ctrySubDvsn");
console.log('function validate_disposizione_beneficiarioEffettivo_ctrySubDvsn_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiarioEffettivo_ctrySubDvsn_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.beneficiarioEffettivo.ctrySubDvsn'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_beneficiarioEffettivo_ctrySubDvsn','label.disposizione.beneficiarioEffettivo.ctrySubDvsn',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_ctrySubDvsn_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaRagSocFornitoreRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitore.nm");
console.log('function validate_disposizione_debitore_nm_sepaRagSocFornitoreRequired');
}
*/
function validate_disposizione_debitore_nm_sepaRagSocFornitoreRequired(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitore.nm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitore_nm','label.disposizione.debitore.nm',"Debitore il campo è obbligatorio","validate_disposizione_debitore_nm_sepaRagSocFornitoreRequired", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitore.nm");
console.log('function validate_disposizione_debitore_nm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitore_nm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitore.nm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitore_nm','label.disposizione.debitore.nm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitore_nm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitore.strtNm");
console.log('function validate_disposizione_debitore_strtNm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitore_strtNm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitore.strtNm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitore_strtNm','label.disposizione.debitore.strtNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitore_strtNm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitore.bldgNb");
console.log('function validate_disposizione_debitore_bldgNb_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitore_bldgNb_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitore.bldgNb'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitore_bldgNb','label.disposizione.debitore.bldgNb',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitore_bldgNb_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=false;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitore.twnNm");
console.log('function validate_disposizione_debitore_twnNm_javascriptExpression');
}
*/
function validate_disposizione_debitore_twnNm_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (document.getElementsByName('disposizione.ibanDebitore')[0].value.substr(0,2).toUpperCase()=="IT" || (document.getElementsByName('disposizione.ibanDebitore')[0].value.substr(0,2).toUpperCase()!="IT" && value.length>0));
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitore.twnNm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitore_twnNm','label.disposizione.debitore.twnNm',"Debitore il campo è obbligatorio","validate_disposizione_debitore_twnNm_javascriptExpression", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitore.twnNm");
console.log('function validate_disposizione_debitore_twnNm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitore_twnNm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitore.twnNm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitore_twnNm','label.disposizione.debitore.twnNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitore_twnNm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'capItaliaValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitore.pstCd");
console.log('function validate_disposizione_debitore_pstCd_capItaliaValidator');
}
*/
function validate_disposizione_debitore_pstCd_capItaliaValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
value = value.replace(/^\s+|\s+$/g,"");
if (value.length>0){
if (form.elements['nazioneDebitore'].value == 86 && 5 > -1 && value.length != 5) {
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitore.pstCd'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitore_pstCd','label.disposizione.debitore.pstCd',"@ERROR Debitore Il valore da inserire deve avere 5 caratteri.","validate_disposizione_debitore_pstCd_capItaliaValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitore.pstCd");
console.log('function validate_disposizione_debitore_pstCd_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitore_pstCd_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitore.pstCd'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitore_pstCd','label.disposizione.debitore.pstCd',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitore_pstCd_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitore.ctrySubDvsn");
console.log('function validate_disposizione_debitore_ctrySubDvsn_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitore_ctrySubDvsn_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitore.ctrySubDvsn'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitore_ctrySubDvsn','label.disposizione.debitore.ctrySubDvsn',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitore_ctrySubDvsn_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.ibanDebitore");
console.log('function validate_disposizione_ibanDebitore_requiredCbiValidator');
}
*/
function validate_disposizione_ibanDebitore_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.ibanDebitore'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_ibanDebitore','label.disposizione.ibanDebitore',"il campo è obbligatorio","validate_disposizione_ibanDebitore_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.ibanDebitore'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_ibanDebitore','label.disposizione.ibanDebitore',"Codice IBAN errato o mancante.","validate_disposizione_ibanDebitore_checkIBANSub", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.ibanDebitore'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_ibanDebitore','label.disposizione.ibanDebitore',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_ibanDebitore_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'nazioneDebitoreIbanFieldRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicDebitore");
console.log('function validate_disposizione_bicDebitore_nazioneDebitoreIbanFieldRequired');
}
*/
function validate_disposizione_bicDebitore_nazioneDebitoreIbanFieldRequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
_onchange=CHECK_ON_NONE;
var valueIban=form.elements['disposizione.ibanDebitore'].value.substring(0,2).toUpperCase();
if(valueIban!=""){
if ((valueIban!='IT'&& valueIban!="SM") && (value==null || value=="" || value.replace(/^\s+|\s+$/g,"").length == 0))
{
return false;
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.bicDebitore'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_bicDebitore','label.disposizione.bicDebitore',"Debitore il campo è obbligatorio","validate_disposizione_bicDebitore_nazioneDebitoreIbanFieldRequired", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.bicDebitore'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_bicDebitore','label.disposizione.bicDebitore',"La lunghezza deve essere di 8 o 11 caratteri","validate_disposizione_bicDebitore_bicLenghtValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'bicDebitoreValid';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicDebitore");
console.log('function validate_disposizione_bicDebitore_bicDebitoreValid');
}
*/
function validate_disposizione_bicDebitore_bicDebitoreValid(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var valueBic = value.replace(/^\s+|\s+$/g,"").toUpperCase();
field.value = valueBic;
var countryCode=form.elements['disposizione.ibanDebitore'].value.substring(0,2).toUpperCase();
if(countryCode!=""){
if ((valueBic.length==8 || valueBic.length==11)){
if(!(isBicValid(value))) return false;
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.bicDebitore'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_bicDebitore','label.disposizione.bicDebitore',"non è corretto. Il codice di controllo non corrisponde.","validate_disposizione_bicDebitore_bicDebitoreValid", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.bicDebitore'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_bicDebitore','label.disposizione.bicDebitore',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_bicDebitore_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'requiredDebitoreDatiAggCodice';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.codice");
console.log('function validate_datiAggDebitore_codice_requiredDebitoreDatiAggCodice');
}
*/
function validate_datiAggDebitore_codice_requiredDebitoreDatiAggCodice(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(document.getElementById('datiAggDebitore-1').value.replace(/^\s+|\s+$/g,"").length != 0){
var tipoCodiceDebitore = document.getElementById('datiAggDebitore-2').value.replace(/^\s+|\s+$/g,"");
if(tipoCodiceDebitore.length != 0){
if(value == null || value.replace(/^\s+|\s+$/g,"").length == 0){
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitore.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitore_codice','label.datiAggDebitore.codice',"Debitore il campo è obbligatorio","validate_datiAggDebitore_codice_requiredDebitoreDatiAggCodice", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.codice");
console.log('function validate_datiAggDebitore_codice_bundleSwiftStringValidator');
}
*/
function validate_datiAggDebitore_codice_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitore.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitore_codice','label.datiAggDebitore.codice',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_datiAggDebitore_codice_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaDebitoreCucLengthValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.codice");
console.log('function validate_datiAggDebitore_codice_sepaDebitoreCucLengthValidator');
}
*/
function validate_datiAggDebitore_codice_sepaDebitoreCucLengthValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazione = form.elements['nazioneDebitore'];
var valNazione = objNazione.options[objNazione.selectedIndex].value;
if (valNazione != null) {  // 86 = italia
var objTipoCodice = form.elements['datiAggDebitore.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggDebitore.codice'];
if (valTipoCodice == "PRO" // CUC
&& !objCodice.disabled
&& value.length > 0
) {
return (value.length == 8);
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitore.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitore_codice','label.datiAggDebitore.codice',"Debitore La lunghezza del dato inserito non è corretta:\n il CUC deve essere lungo esattamente 8 caratteri.","validate_datiAggDebitore_codice_sepaDebitoreCucLengthValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaDebitoreCucValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.codice");
console.log('function validate_datiAggDebitore_codice_sepaDebitoreCucValidator');
}
*/
function validate_datiAggDebitore_codice_sepaDebitoreCucValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazione = form.elements['nazioneDebitore'];
var valNazione = objNazione.options[objNazione.selectedIndex].value;
if (valNazione != null) {  // 86 = italia
var objTipoCodice = form.elements['datiAggDebitore.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggDebitore.codice'];
if (valTipoCodice == "PRO" // CUC
&& !objCodice.disabled
&& value.length == 8
) {
var checkCuc = checkCinCharacter(value)
objCodice.value = value.toUpperCase();
return checkCuc;
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitore.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitore_codice','label.datiAggDebitore.codice',"Debitore il CUC non è valido: il codice di controllo non corrisponde","validate_datiAggDebitore_codice_sepaDebitoreCucValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaDebitoreCFPIVALengthValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.codice");
console.log('function validate_datiAggDebitore_codice_sepaDebitoreCFPIVALengthValidator');
}
*/
function validate_datiAggDebitore_codice_sepaDebitoreCFPIVALengthValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazione = form.elements['nazioneDebitore'];
var valNazione = objNazione.options[objNazione.selectedIndex].value;
if (valNazione == 86) {  // italia
var objTipoCodice = form.elements['datiAggDebitore.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggDebitore.codice'];
if (valTipoCodice == "FIS" // CF / PIVA
&& !objCodice.disabled
&& value.length > 0
) {
return (value.length == 11 || value.length == 16 || (value.length==13 && value.substring(0,2).toUpperCase()=='IT'));
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitore.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitore_codice','label.datiAggDebitore.codice',"Debitore La lunghezza del dato inserito non è corretta:\n la partita IVA dovrebbe essere lunga\n esattamente 11 caratteri o 13 se inizia con IT, \n il codice fiscale dovrebbe essere lungo\n esattamente 16 caratteri.\n","validate_datiAggDebitore_codice_sepaDebitoreCFPIVALengthValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaDebitoreCFPIVAValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.codice");
console.log('function validate_datiAggDebitore_codice_sepaDebitoreCFPIVAValidator');
}
*/
function validate_datiAggDebitore_codice_sepaDebitoreCFPIVAValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazione = form.elements['nazioneDebitore'];
var valNazione = objNazione.options[objNazione.selectedIndex].value;
if (valNazione == 86) {  // italia
var objTipoCodice = form.elements['datiAggDebitore.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggDebitore.codice'];
if (valTipoCodice == "FIS" // CF / PIVA
&& !objCodice.disabled
&& (value.length == 11 || value.length == 16 || (value.length==13 && value.substring(0,2).toUpperCase()=='IT'))
) {
var checkCFPIVA = false;
if ((value != "") && (value.length == 11) && (checkOnlyNumbersWithChar(value) == null)) {
checkCFPIVA = (checkPIVA(value) != null);
}
else if(value!="" && value.length== 13 && value.substring(0,2).toUpperCase()=="IT")
checkCFPIVA = (checkPIVA(value.substring(2)));
else if ((value != "") && (value.length == 16) && (checkNoSpecialCharWithChar(value) == null)) {
checkCFPIVA = isCodiceFiscale(value);
objCodice.value = value.toUpperCase();
}
return checkCFPIVA;
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitore.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitore_codice','label.datiAggDebitore.codice',"Debitore Codice Fiscale / Partita IVA non valido:\n il codice di controllo non corrisponde.\n","validate_datiAggDebitore_codice_sepaDebitoreCFPIVAValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkDebitoreDatiAggCodice';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.codice");
console.log('function validate_datiAggDebitore_codice_checkDebitoreDatiAggCodice');
}
*/
function validate_datiAggDebitore_codice_checkDebitoreDatiAggCodice(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(document.getElementById('datiAggDebitore-1').value.replace(/^\s+|\s+$/g,"").length != 0){
var tipoCodiceBen = document.getElementById('datiAggDebitore-2').value.replace(/^\s+|\s+$/g,"");
if(tipoCodiceBen.length != 0){
if(value != null && value.replace(/^\s+|\s+$/g,"").length != 0){
codVal = value.replace(/^\s+|\s+$/g,"").toUpperCase();
switch(tipoCodiceBen) {
case 'PRO':
return true;
break;
case 'FIS':
return true;
break;
case 'BEI':
setVariableIntoMessage(obj,'CODE','Identificativo BEI');
if (codVal.length == 8 || codVal.length == 11) {
return isBicValid(codVal);
} else {
return false;
}
break;
default:
{
return true;
}
}
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitore.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitore_codice','label.datiAggDebitore.codice',"Debitore \" @CODE \" non è corretta","validate_datiAggDebitore_codice_checkDebitoreDatiAggCodice", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitore.descCodice");
console.log('function validate_datiAggDebitore_descCodice_bundleSwiftStringValidator');
}
*/
function validate_datiAggDebitore_descCodice_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitore.descCodice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitore_descCodice','label.datiAggDebitore.descCodice',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_datiAggDebitore_descCodice_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaIncassiRagSocDebitoreEffRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.nm");
console.log('function validate_disposizione_debitoreEffettivo_nm_sepaIncassiRagSocDebitoreEffRequired');
}
*/
function validate_disposizione_debitoreEffettivo_nm_sepaIncassiRagSocDebitoreEffRequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if((form.elements['disposizione.debitoreEffettivo.tipoIndirizzo'].value.replace(/^\s+|\s+$/g,"").length != 0
|| form.elements['disposizione.debitoreEffettivo.strtNm'].value != ''
|| form.elements['disposizione.debitoreEffettivo.bldgNb'].value != ''
|| form.elements['disposizione.debitoreEffettivo.twnNm'].value != ''
|| form.elements['disposizione.debitoreEffettivo.pstCd'].value != ''
|| form.elements['datiAggDebEffettivo.tipoSoggetto'].value.replace(/^\s+|\s+$/g,"").length != 0
|| form.elements['disposizione.debitoreEffettivo.ctrySubDvsn'].value!='')&& (value==null || value=="" || value.replace(/^\s+|\s+$/g,"").length == 0))
{
return false;
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreEffettivo.nm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreEffettivo_nm','label.disposizione.debitoreEffettivo.nm',"Debitore Effettivo il campo è obbligatorio","validate_disposizione_debitoreEffettivo_nm_sepaIncassiRagSocDebitoreEffRequired", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreEffettivo.nm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreEffettivo_nm','label.disposizione.debitoreEffettivo.nm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreEffettivo_nm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.strtNm");
console.log('function validate_disposizione_debitoreEffettivo_strtNm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreEffettivo_strtNm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreEffettivo.strtNm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreEffettivo_strtNm','label.disposizione.debitoreEffettivo.strtNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreEffettivo_strtNm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.bldgNb");
console.log('function validate_disposizione_debitoreEffettivo_bldgNb_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreEffettivo_bldgNb_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreEffettivo.bldgNb'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreEffettivo_bldgNb','label.disposizione.debitoreEffettivo.bldgNb',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreEffettivo_bldgNb_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.twnNm");
console.log('function validate_disposizione_debitoreEffettivo_twnNm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreEffettivo_twnNm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreEffettivo.twnNm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreEffettivo_twnNm','label.disposizione.debitoreEffettivo.twnNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreEffettivo_twnNm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'capItaliaValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.pstCd");
console.log('function validate_disposizione_debitoreEffettivo_pstCd_capItaliaValidator');
}
*/
function validate_disposizione_debitoreEffettivo_pstCd_capItaliaValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
value = value.replace(/^\s+|\s+$/g,"");
if (value.length>0){
if (form.elements['nazioneDebEffettivo'].value == 86 && 5 > -1 && value.length != 5) {
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreEffettivo.pstCd'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreEffettivo_pstCd','label.disposizione.debitoreEffettivo.pstCd',"@ERROR Debitore Effettivo Il valore da inserire deve avere 5 caratteri.","validate_disposizione_debitoreEffettivo_pstCd_capItaliaValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.pstCd");
console.log('function validate_disposizione_debitoreEffettivo_pstCd_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreEffettivo_pstCd_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreEffettivo.pstCd'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreEffettivo_pstCd','label.disposizione.debitoreEffettivo.pstCd',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreEffettivo_pstCd_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreEffettivo.ctrySubDvsn");
console.log('function validate_disposizione_debitoreEffettivo_ctrySubDvsn_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreEffettivo_ctrySubDvsn_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreEffettivo.ctrySubDvsn'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreEffettivo_ctrySubDvsn','label.disposizione.debitoreEffettivo.ctrySubDvsn',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreEffettivo_ctrySubDvsn_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredDebitoreEffDatiAggCodice';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebEffettivo.codice");
console.log('function validate_datiAggDebEffettivo_codice_requiredDebitoreEffDatiAggCodice');
}
*/
function validate_datiAggDebEffettivo_codice_requiredDebitoreEffDatiAggCodice(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(document.getElementById('datiAggDebEffettivo-1') && document.getElementById('datiAggDebEffettivo-1').value.replace(/^\s+|\s+$/g,"").length != 0){
var tipoCodiceDebEff = document.getElementById('datiAggDebEffettivo-2').value.replace(/^\s+|\s+$/g,"");
if(tipoCodiceDebEff.length != 0){
if(value == null || value.replace(/^\s+|\s+$/g,"").length == 0){
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebEffettivo.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebEffettivo_codice','label.datiAggDebEffettivo.codice',"Debitore Effettivo il campo è obbligatorio","validate_datiAggDebEffettivo_codice_requiredDebitoreEffDatiAggCodice", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebEffettivo.codice");
console.log('function validate_datiAggDebEffettivo_codice_bundleSwiftStringValidator');
}
*/
function validate_datiAggDebEffettivo_codice_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebEffettivo.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebEffettivo_codice','label.datiAggDebEffettivo.codice',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_datiAggDebEffettivo_codice_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaDebitoreEffCucLengthValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebEffettivo.codice");
console.log('function validate_datiAggDebEffettivo_codice_sepaDebitoreEffCucLengthValidator');
}
*/
function validate_datiAggDebEffettivo_codice_sepaDebitoreEffCucLengthValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazioneDebitoreEff = form.elements['nazioneDebEffettivo'];
var valNazioneDebitoreEff = objNazioneDebitoreEff.options[objNazioneDebitoreEff.selectedIndex].value;
if (valNazioneDebitoreEff != null) {  // 86 = italia
var objTipoCodice = form.elements['datiAggDebEffettivo.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggDebEffettivo.codice'];
if (valTipoCodice == "PRO" // CUC
&& !objCodice.disabled
&& value.length > 0
) {
return (value.length == 8);
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebEffettivo.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebEffettivo_codice','label.datiAggDebEffettivo.codice',"Debitore Effettivo La lunghezza del dato inserito non è corretta:\n il CUC deve essere lungo esattamente 8 caratteri.","validate_datiAggDebEffettivo_codice_sepaDebitoreEffCucLengthValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaDebitoreEffCucValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebEffettivo.codice");
console.log('function validate_datiAggDebEffettivo_codice_sepaDebitoreEffCucValidator');
}
*/
function validate_datiAggDebEffettivo_codice_sepaDebitoreEffCucValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazioneDebitoreEff = form.elements['nazioneDebEffettivo'];
var valNazioneDebitoreEff = objNazioneDebitoreEff.options[objNazioneDebitoreEff.selectedIndex].value;
if (valNazioneDebitoreEff != null) {  // 86 = italia
var objTipoCodice = form.elements['datiAggDebEffettivo.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggDebEffettivo.codice'];
if (valTipoCodice == "PRO" // CUC
&& !objCodice.disabled
&& value.length == 8
) {
var checkCuc = checkCinCharacter(value)
objCodice.value = value.toUpperCase();
return checkCuc;
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebEffettivo.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebEffettivo_codice','label.datiAggDebEffettivo.codice',"Debitore Effettivo il CUC non è valido: il codice di controllo non corrisponde","validate_datiAggDebEffettivo_codice_sepaDebitoreEffCucValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaDebitoreEffCFPIVALengthValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebEffettivo.codice");
console.log('function validate_datiAggDebEffettivo_codice_sepaDebitoreEffCFPIVALengthValidator');
}
*/
function validate_datiAggDebEffettivo_codice_sepaDebitoreEffCFPIVALengthValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazioneDebitoreEff = form.elements['nazioneDebEffettivo'];
var valNazioneDebitoreEff = objNazioneDebitoreEff.options[objNazioneDebitoreEff.selectedIndex].value;
if (valNazioneDebitoreEff == 86) {  // italia
var objTipoCodice = form.elements['datiAggDebEffettivo.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggDebEffettivo.codice'];
if (valTipoCodice == "FIS" // CF / PIVA
&& !objCodice.disabled
&& value.length > 0
) {
return (value.length == 11 || value.length == 16 || (value.length==13 && value.substring(0,2).toUpperCase()=="IT"));
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebEffettivo.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebEffettivo_codice','label.datiAggDebEffettivo.codice',"Debitore Effettivo La lunghezza del dato inserito non è corretta:\n la partita IVA dovrebbe essere lunga\n esattamente 11 caratteri o 13 se inizia con IT, \n il codice fiscale dovrebbe essere lungo\n esattamente 16 caratteri.\n","validate_datiAggDebEffettivo_codice_sepaDebitoreEffCFPIVALengthValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaDebitoreEffCFPIVAValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebEffettivo.codice");
console.log('function validate_datiAggDebEffettivo_codice_sepaDebitoreEffCFPIVAValidator');
}
*/
function validate_datiAggDebEffettivo_codice_sepaDebitoreEffCFPIVAValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazioneDebitoreEff = form.elements['nazioneDebEffettivo'];
var valNazioneDebitoreEff = objNazioneDebitoreEff.options[objNazioneDebitoreEff.selectedIndex].value;
if (valNazioneDebitoreEff == 86) {  // italia
var objTipoCodice = form.elements['datiAggDebEffettivo.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggDebEffettivo.codice'];
if (valTipoCodice == "FIS" // CF / PIVA
&& !objCodice.disabled
&& (value.length == 11 || value.length == 16 || (value.length==13 && value.substring(0,2).toUpperCase()=='IT'))
) {
var checkCFPIVA = false;
if ((value != "") && (value.length == 11) && (checkOnlyNumbersWithChar(value) == null)) {
checkCFPIVA = (checkPIVA(value) != null);
}
else if(value!="" && value.length== 13 && value.substring(0,2).toUpperCase()=="IT")
checkCFPIVA = (checkPIVA(value.substring(2)));
else if ((value != "") && (value.length == 16) && (checkNoSpecialCharWithChar(value) == null)) {
checkCFPIVA = isCodiceFiscale(value);
objCodice.value = value.toUpperCase();
}
return checkCFPIVA;
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebEffettivo.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebEffettivo_codice','label.datiAggDebEffettivo.codice',"Debitore Effettivo Codice Fiscale / Partita IVA non valido:\n il codice di controllo non corrisponde.\n","validate_datiAggDebEffettivo_codice_sepaDebitoreEffCFPIVAValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkDebitoreEffDatiAggCodice';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebEffettivo.codice");
console.log('function validate_datiAggDebEffettivo_codice_checkDebitoreEffDatiAggCodice');
}
*/
function validate_datiAggDebEffettivo_codice_checkDebitoreEffDatiAggCodice(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(document.getElementById('datiAggDebEffettivo-1') && document.getElementById('datiAggDebEffettivo-1').value.replace(/^\s+|\s+$/g,"").length != 0){
var tipoCodiceCred = document.getElementById('datiAggDebEffettivo-2').value.replace(/^\s+|\s+$/g,"");
if(tipoCodiceCred.length != 0){
if(value != null && value.replace(/^\s+|\s+$/g,"").length != 0){
codVal = value.replace(/^\s+|\s+$/g,"").toUpperCase();
switch(tipoCodiceCred) {
case 'PRO':
return true;
break;
case 'FIS':
return true;
break;
case 'BEI':
setVariableIntoMessage(obj,'CODE','Identificativo BEI');
if (codVal.length == 8 || codVal.length == 11) {
return isBicValid(codVal);
} else {
return false;
}
break;
default:
{
return true;
}
}
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebEffettivo.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebEffettivo_codice','label.datiAggDebEffettivo.codice',"Debitore Effettivo \" @CODE \" non è corretta","validate_datiAggDebEffettivo_codice_checkDebitoreEffDatiAggCodice", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebEffettivo.descCodice");
console.log('function validate_datiAggDebEffettivo_descCodice_bundleSwiftStringValidator');
}
*/
function validate_datiAggDebEffettivo_descCodice_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebEffettivo.descCodice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebEffettivo_descCodice','label.datiAggDebEffettivo.descCodice',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_datiAggDebEffettivo_descCodice_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.identificativoMandato'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_identificativoMandato','label.disposizione.identificativoMandato',"il campo è obbligatorio","validate_disposizione_identificativoMandato_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.identificativoMandato'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_identificativoMandato','label.disposizione.identificativoMandato',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_identificativoMandato_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['dataMandato'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_dataMandato','label.dataMandato',"il campo è obbligatorio","validate_dataMandato_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['dataMandato'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_dataMandato','label.dataMandato',"La sintassi non è corretta","validate_dataMandato_sintaxDateValidator", _onsubmit, _onchange);
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
var currentTime = new Date();
var currentYear = currentTime.getFullYear();
var yearLimit = currentYear.toString().substr(2,2);
var esitoValidateData = checkDate(value, 1900, 2050, yearLimit);
if (esitoValidateData==null)
return false;
else
field.value=preformatDate(value);
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['dataMandato'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_dataMandato','label.dataMandato',"La data inserita non è valida","validate_dataMandato_validDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.firmaDigitale");
console.log('function validate_disposizione_firmaDigitale_bundleSwiftStringValidator');
}
*/
function validate_disposizione_firmaDigitale_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.firmaDigitale'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_firmaDigitale','label.disposizione.firmaDigitale',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_firmaDigitale_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sintaxDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: dataPrimaRichiestaIncasso");
console.log('function validate_dataPrimaRichiestaIncasso_sintaxDateValidator');
}
*/
function validate_dataPrimaRichiestaIncasso_sintaxDateValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['dataPrimaRichiestaIncasso'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_dataPrimaRichiestaIncasso','label.dataPrimaRichiestaIncasso',"La sintassi non è corretta","validate_dataPrimaRichiestaIncasso_sintaxDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'validDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: dataPrimaRichiestaIncasso");
console.log('function validate_dataPrimaRichiestaIncasso_validDateValidator');
}
*/
function validate_dataPrimaRichiestaIncasso_validDateValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['dataPrimaRichiestaIncasso'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_dataPrimaRichiestaIncasso','label.dataPrimaRichiestaIncasso',"La data inserita non è valida","validate_dataPrimaRichiestaIncasso_validDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sintaxDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: dataUltimaRichiestaIncasso");
console.log('function validate_dataUltimaRichiestaIncasso_sintaxDateValidator');
}
*/
function validate_dataUltimaRichiestaIncasso_sintaxDateValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['dataUltimaRichiestaIncasso'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_dataUltimaRichiestaIncasso','label.dataUltimaRichiestaIncasso',"La sintassi non è corretta","validate_dataUltimaRichiestaIncasso_sintaxDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'validDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: dataUltimaRichiestaIncasso");
console.log('function validate_dataUltimaRichiestaIncasso_validDateValidator');
}
*/
function validate_dataUltimaRichiestaIncasso_validDateValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['dataUltimaRichiestaIncasso'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_dataUltimaRichiestaIncasso','label.dataUltimaRichiestaIncasso',"La data inserita non è valida","validate_dataUltimaRichiestaIncasso_validDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkDatiAggiuntiviMandatoPresenti';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: checkVariazioneMandato");
console.log('function validate_checkVariazioneMandato_checkDatiAggiuntiviMandatoPresenti');
}
*/
function validate_checkVariazioneMandato_checkDatiAggiuntiviMandatoPresenti(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objVariazioneMandato = document.getElementsByName('disposizione.variazioneMandato')[0];
var valVariazioneMandato = objVariazioneMandato.options[objVariazioneMandato.selectedIndex].value;
if (valVariazioneMandato == 'SV'){
if (   form.elements['disposizione.identificativoMandatoOriginario'].value == ''
&& form.elements['dataUltimoIncasso'].value == ''
&& form.elements['disposizione.creditoreOriginario.nm'].value == ''
&& form.elements['disposizione.creditoreOriginario.strtNm'].value == ''
&& form.elements['disposizione.creditoreOriginario.bldgNb'].value == ''
&& form.elements['disposizione.creditoreOriginario.twnNm'].value == ''
&& form.elements['disposizione.creditoreOriginario.pstCd'].value == ''
&& form.elements['disposizione.creditoreOriginario.ctrySubDvsn'].value == ''
&& form.elements['disposizione.abiBeneficiarioOrig'].value == ''
&& form.elements['disposizione.bicBeneficiarioOrig'].value == ''
&& form.elements['datiAggCreditoreOriginario.codice'].value == ''
&& form.elements['datiAggCreditoreOriginario.descCodice'].value == ''
&& form.elements['disposizione.debitoreOriginario.nm'].value == ''
&& form.elements['disposizione.debitoreOriginario.strtNm'].value == ''
&& form.elements['disposizione.debitoreOriginario.bldgNb'].value == ''
&& form.elements['disposizione.debitoreOriginario.twnNm'].value == ''
&& form.elements['disposizione.debitoreOriginario.pstCd'].value == ''
&& form.elements['disposizione.debitoreOriginario.ctrySubDvsn'].value == ''
&& form.elements['disposizione.ibanDebitoreOrig'].value == ''
&& form.elements['disposizione.bicDebitoreOrig'].value == ''
&& form.elements['disposizione.istitutoContoDebitoreOrig'].value == ''
&& form.elements['datiAggDebitoreOriginario.codice'].value == ''
&& form.elements['datiAggDebitoreOriginario.descCodice'].value == ''){
var frequenzaOrig = form.elements['disposizione.frequenzaOrig'].value.replace(/^\s+|\s+$/g,"");
var creditoreOriginarioTipoIndirizzo = form.elements['disposizione.creditoreOriginario.tipoIndirizzo'].value.replace(/^\s+|\s+$/g,"");
var creditoreOriginarioTipoCodice = form.elements['datiAggCreditoreOriginario.tipoCodice'].value.replace(/^\s+|\s+$/g,"");
var debitoreOriginarioTipoIndirizzo = form.elements['disposizione.debitoreOriginario.tipoIndirizzo'].value.replace(/^\s+|\s+$/g,"");
var debitoreOriginarioTipoSoggetto = form.elements['datiAggDebitoreOriginario.tipoSoggetto'].value.replace(/^\s+|\s+$/g,"");
if (frequenzaOrig.length +
creditoreOriginarioTipoIndirizzo.length +
debitoreOriginarioTipoIndirizzo.length +
debitoreOriginarioTipoSoggetto.length == 0) {
if (creditoreOriginarioTipoCodice == 'NNNN') {
return false;
}
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['checkVariazioneMandato'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_checkVariazioneMandato','label.checkVariazioneMandato',"Dati aggiuntivi mandato non presenti","validate_checkVariazioneMandato_checkDatiAggiuntiviMandatoPresenti", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.identificativoMandatoOriginario'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_identificativoMandatoOriginario','label.disposizione.identificativoMandatoOriginario',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_identificativoMandatoOriginario_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sintaxDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: dataUltimoIncasso");
console.log('function validate_dataUltimoIncasso_sintaxDateValidator');
}
*/
function validate_dataUltimoIncasso_sintaxDateValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['dataUltimoIncasso'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_dataUltimoIncasso','label.dataUltimoIncasso',"La sintassi non è corretta","validate_dataUltimoIncasso_sintaxDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'validDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: dataUltimoIncasso");
console.log('function validate_dataUltimoIncasso_validDateValidator');
}
*/
function validate_dataUltimoIncasso_validDateValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['dataUltimoIncasso'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_dataUltimoIncasso','label.dataUltimoIncasso',"La data inserita non è valida","validate_dataUltimoIncasso_validDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.creditoreOriginario.nm");
console.log('function validate_disposizione_creditoreOriginario_nm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_creditoreOriginario_nm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.creditoreOriginario.nm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_creditoreOriginario_nm','label.disposizione.creditoreOriginario.nm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_creditoreOriginario_nm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.creditoreOriginario.strtNm");
console.log('function validate_disposizione_creditoreOriginario_strtNm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_creditoreOriginario_strtNm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.creditoreOriginario.strtNm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_creditoreOriginario_strtNm','label.disposizione.creditoreOriginario.strtNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_creditoreOriginario_strtNm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.creditoreOriginario.bldgNb");
console.log('function validate_disposizione_creditoreOriginario_bldgNb_bundleSwiftStringValidator');
}
*/
function validate_disposizione_creditoreOriginario_bldgNb_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.creditoreOriginario.bldgNb'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_creditoreOriginario_bldgNb','label.disposizione.creditoreOriginario.bldgNb',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_creditoreOriginario_bldgNb_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.creditoreOriginario.twnNm");
console.log('function validate_disposizione_creditoreOriginario_twnNm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_creditoreOriginario_twnNm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.creditoreOriginario.twnNm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_creditoreOriginario_twnNm','label.disposizione.creditoreOriginario.twnNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_creditoreOriginario_twnNm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'capItaliaValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.creditoreOriginario.pstCd");
console.log('function validate_disposizione_creditoreOriginario_pstCd_capItaliaValidator');
}
*/
function validate_disposizione_creditoreOriginario_pstCd_capItaliaValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
value = value.replace(/^\s+|\s+$/g,"");
if (value.length>0){
if (form.elements['nazioneCreditoreOriginario'].value == 86 && 5 > -1 && value.length != 5) {
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.creditoreOriginario.pstCd'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_creditoreOriginario_pstCd','label.disposizione.creditoreOriginario.pstCd',"@ERROR Creditore Originario Il valore da inserire deve avere 5 caratteri.","validate_disposizione_creditoreOriginario_pstCd_capItaliaValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.creditoreOriginario.pstCd");
console.log('function validate_disposizione_creditoreOriginario_pstCd_bundleSwiftStringValidator');
}
*/
function validate_disposizione_creditoreOriginario_pstCd_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.creditoreOriginario.pstCd'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_creditoreOriginario_pstCd','label.disposizione.creditoreOriginario.pstCd',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_creditoreOriginario_pstCd_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.creditoreOriginario.ctrySubDvsn");
console.log('function validate_disposizione_creditoreOriginario_ctrySubDvsn_bundleSwiftStringValidator');
}
*/
function validate_disposizione_creditoreOriginario_ctrySubDvsn_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.creditoreOriginario.ctrySubDvsn'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_creditoreOriginario_ctrySubDvsn','label.disposizione.creditoreOriginario.ctrySubDvsn',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_creditoreOriginario_ctrySubDvsn_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.abiBeneficiarioOrig");
console.log('function validate_disposizione_abiBeneficiarioOrig_bundleSwiftStringValidator');
}
*/
function validate_disposizione_abiBeneficiarioOrig_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.abiBeneficiarioOrig'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_abiBeneficiarioOrig','label.disposizione.abiBeneficiarioOrig',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_abiBeneficiarioOrig_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicBeneficiarioOrig");
console.log('function validate_disposizione_bicBeneficiarioOrig_bundleSwiftStringValidator');
}
*/
function validate_disposizione_bicBeneficiarioOrig_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.bicBeneficiarioOrig'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_bicBeneficiarioOrig','label.disposizione.bicBeneficiarioOrig',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_bicBeneficiarioOrig_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkBicValid';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicBeneficiarioOrig");
console.log('function validate_disposizione_bicBeneficiarioOrig_checkBicValid');
}
*/
function validate_disposizione_bicBeneficiarioOrig_checkBicValid(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.bicBeneficiarioOrig'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_bicBeneficiarioOrig','label.disposizione.bicBeneficiarioOrig',"non è corretto. Il codice di controllo non corrisponde.","validate_disposizione_bicBeneficiarioOrig_checkBicValid", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicBeneficiarioOrig");
console.log('function validate_disposizione_bicBeneficiarioOrig_bundleSwiftStringValidator');
}
*/
function validate_disposizione_bicBeneficiarioOrig_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.bicBeneficiarioOrig'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_bicBeneficiarioOrig','label.disposizione.bicBeneficiarioOrig',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_bicBeneficiarioOrig_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'bicLenghtValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicBeneficiarioOrig");
console.log('function validate_disposizione_bicBeneficiarioOrig_bicLenghtValidator');
}
*/
function validate_disposizione_bicBeneficiarioOrig_bicLenghtValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.bicBeneficiarioOrig'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_bicBeneficiarioOrig','label.disposizione.bicBeneficiarioOrig',"La lunghezza deve essere di 8 o 11 caratteri","validate_disposizione_bicBeneficiarioOrig_bicLenghtValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggCreditoreOriginario.codice");
console.log('function validate_datiAggCreditoreOriginario_codice_bundleSwiftStringValidator');
}
*/
function validate_datiAggCreditoreOriginario_codice_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggCreditoreOriginario.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggCreditoreOriginario_codice','label.datiAggCreditoreOriginario.codice',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_datiAggCreditoreOriginario_codice_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkCreditoreOriginarioDatiAggCodice';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggCreditoreOriginario.codice");
console.log('function validate_datiAggCreditoreOriginario_codice_checkCreditoreOriginarioDatiAggCodice');
}
*/
function validate_datiAggCreditoreOriginario_codice_checkCreditoreOriginarioDatiAggCodice(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var tipoCodiceCred = document.getElementById('datiAggCreditoreOriginario-0').value.replace(/^\s+|\s+$/g,"");
if(tipoCodiceCred.length != 0){
if(value == null || value.replace(/^\s+|\s+$/g,"").length == 0){
codVal = value.replace(/^\s+|\s+$/g,"").toUpperCase();
switch(tipoCodiceCred) {
case 'NNNN':
return true;
break;
default:
{
var selectedIndex = document.getElementById('datiAggCreditoreOriginario-0').selectedIndex;
var codeText = document.getElementById('datiAggCreditoreOriginario-0')[selectedIndex].text;
setVariableIntoMessage(obj,'CODE', codeText);
return false;
}
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggCreditoreOriginario.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggCreditoreOriginario_codice','label.datiAggCreditoreOriginario.codice',"Creditore Originario \" @CODE \" non è corretta","validate_datiAggCreditoreOriginario_codice_checkCreditoreOriginarioDatiAggCodice", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggCreditoreOriginario.descCodice");
console.log('function validate_datiAggCreditoreOriginario_descCodice_bundleSwiftStringValidator');
}
*/
function validate_datiAggCreditoreOriginario_descCodice_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggCreditoreOriginario.descCodice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggCreditoreOriginario_descCodice','label.datiAggCreditoreOriginario.descCodice',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_datiAggCreditoreOriginario_descCodice_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkCreditoreOriginarioDatiAggCodice';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggCreditoreOriginario.descCodice");
console.log('function validate_datiAggCreditoreOriginario_descCodice_checkCreditoreOriginarioDatiAggCodice');
}
*/
function validate_datiAggCreditoreOriginario_descCodice_checkCreditoreOriginarioDatiAggCodice(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var tipoCodiceCred = document.getElementById('datiAggCreditoreOriginario-0').value.replace(/^\s+|\s+$/g,"");
if(tipoCodiceCred.length != 0){
if(value == null || value.replace(/^\s+|\s+$/g,"").length == 0){
codVal = value.replace(/^\s+|\s+$/g,"").toUpperCase();
switch(tipoCodiceCred) {
case 'NNNN':
return true;
break;
default:
{
var selectedIndex = document.getElementById('datiAggCreditoreOriginario-0').selectedIndex;
var codeText = document.getElementById('datiAggCreditoreOriginario-0')[selectedIndex].text;
setVariableIntoMessage(obj,'CODE', codeText);
return false;
}
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggCreditoreOriginario.descCodice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggCreditoreOriginario_descCodice','label.datiAggCreditoreOriginario.descCodice',"Creditore Originario \" @CODE \" non è corretta","validate_datiAggCreditoreOriginario_descCodice_checkCreditoreOriginarioDatiAggCodice", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaIncassiRagSocDebitoreOriginarioRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreOriginario.nm");
console.log('function validate_disposizione_debitoreOriginario_nm_sepaIncassiRagSocDebitoreOriginarioRequired');
}
*/
function validate_disposizione_debitoreOriginario_nm_sepaIncassiRagSocDebitoreOriginarioRequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if((form.elements['disposizione.debitoreOriginario.tipoIndirizzo'].value.replace(/^\s+|\s+$/g,"").length != 0
|| form.elements['disposizione.debitoreOriginario.strtNm'].value!=''
|| form.elements['disposizione.debitoreOriginario.bldgNb'].value!=''
|| form.elements['disposizione.debitoreOriginario.twnNm'].value!=''
|| form.elements['disposizione.debitoreOriginario.pstCd'].value!=''
|| form.elements['datiAggDebitoreOriginario.tipoSoggetto'].value.replace(/^\s+|\s+$/g,"").length != 0
|| form.elements['disposizione.debitoreOriginario.ctrySubDvsn'].value!='')&& (value==null || value=="" || value.replace(/^\s+|\s+$/g,"").length == 0))
{
return false;
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreOriginario.nm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreOriginario_nm','label.disposizione.debitoreOriginario.nm',"Debitore Originario il campo è obbligatorio","validate_disposizione_debitoreOriginario_nm_sepaIncassiRagSocDebitoreOriginarioRequired", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreOriginario.nm");
console.log('function validate_disposizione_debitoreOriginario_nm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreOriginario_nm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreOriginario.nm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreOriginario_nm','label.disposizione.debitoreOriginario.nm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreOriginario_nm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreOriginario.strtNm");
console.log('function validate_disposizione_debitoreOriginario_strtNm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreOriginario_strtNm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreOriginario.strtNm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreOriginario_strtNm','label.disposizione.debitoreOriginario.strtNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreOriginario_strtNm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreOriginario.bldgNb");
console.log('function validate_disposizione_debitoreOriginario_bldgNb_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreOriginario_bldgNb_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreOriginario.bldgNb'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreOriginario_bldgNb','label.disposizione.debitoreOriginario.bldgNb',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreOriginario_bldgNb_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreOriginario.twnNm");
console.log('function validate_disposizione_debitoreOriginario_twnNm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreOriginario_twnNm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreOriginario.twnNm'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreOriginario_twnNm','label.disposizione.debitoreOriginario.twnNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreOriginario_twnNm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'capItaliaValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreOriginario.pstCd");
console.log('function validate_disposizione_debitoreOriginario_pstCd_capItaliaValidator');
}
*/
function validate_disposizione_debitoreOriginario_pstCd_capItaliaValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
value = value.replace(/^\s+|\s+$/g,"");
if (value.length>0){
if (form.elements['nazioneCreditoreOriginario'].value == 86 && 5 > -1 && value.length != 5) {
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreOriginario.pstCd'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreOriginario_pstCd','label.disposizione.debitoreOriginario.pstCd',"@ERROR Creditore Originario Il valore da inserire deve avere 5 caratteri.","validate_disposizione_debitoreOriginario_pstCd_capItaliaValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreOriginario.pstCd");
console.log('function validate_disposizione_debitoreOriginario_pstCd_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreOriginario_pstCd_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreOriginario.pstCd'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreOriginario_pstCd','label.disposizione.debitoreOriginario.pstCd',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreOriginario_pstCd_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitoreOriginario.ctrySubDvsn");
console.log('function validate_disposizione_debitoreOriginario_ctrySubDvsn_bundleSwiftStringValidator');
}
*/
function validate_disposizione_debitoreOriginario_ctrySubDvsn_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.debitoreOriginario.ctrySubDvsn'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_debitoreOriginario_ctrySubDvsn','label.disposizione.debitoreOriginario.ctrySubDvsn',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitoreOriginario_ctrySubDvsn_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.ibanDebitoreOrig");
console.log('function validate_disposizione_ibanDebitoreOrig_bundleSwiftStringValidator');
}
*/
function validate_disposizione_ibanDebitoreOrig_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.ibanDebitoreOrig'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_ibanDebitoreOrig','label.disposizione.ibanDebitoreOrig',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_ibanDebitoreOrig_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkBicValid';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicDebitoreOrig");
console.log('function validate_disposizione_bicDebitoreOrig_checkBicValid');
}
*/
function validate_disposizione_bicDebitoreOrig_checkBicValid(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.bicDebitoreOrig'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_bicDebitoreOrig','label.disposizione.bicDebitoreOrig',"non è corretto. Il codice di controllo non corrisponde.","validate_disposizione_bicDebitoreOrig_checkBicValid", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicDebitoreOrig");
console.log('function validate_disposizione_bicDebitoreOrig_bundleSwiftStringValidator');
}
*/
function validate_disposizione_bicDebitoreOrig_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.bicDebitoreOrig'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_bicDebitoreOrig','label.disposizione.bicDebitoreOrig',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_bicDebitoreOrig_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'bicLenghtValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicDebitoreOrig");
console.log('function validate_disposizione_bicDebitoreOrig_bicLenghtValidator');
}
*/
function validate_disposizione_bicDebitoreOrig_bicLenghtValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.bicDebitoreOrig'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_bicDebitoreOrig','label.disposizione.bicDebitoreOrig',"La lunghezza deve essere di 8 o 11 caratteri","validate_disposizione_bicDebitoreOrig_bicLenghtValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredDebitoreOriginarioDatiAggCodice';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitoreOriginario.codice");
console.log('function validate_datiAggDebitoreOriginario_codice_requiredDebitoreOriginarioDatiAggCodice');
}
*/
function validate_datiAggDebitoreOriginario_codice_requiredDebitoreOriginarioDatiAggCodice(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(document.getElementById('datiAggDebitoreOriginario-1').value.replace(/^\s+|\s+$/g,"").length != 0){
var tipoCodice = document.getElementById('datiAggDebitoreOriginario-2').value.replace(/^\s+|\s+$/g,"");
if(tipoCodice.length != 0){
if(value == null || value.replace(/^\s+|\s+$/g,"").length == 0){
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitoreOriginario.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitoreOriginario_codice','label.datiAggDebitoreOriginario.codice',"Debitore Originario il campo è obbligatorio","validate_datiAggDebitoreOriginario_codice_requiredDebitoreOriginarioDatiAggCodice", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitoreOriginario.codice");
console.log('function validate_datiAggDebitoreOriginario_codice_bundleSwiftStringValidator');
}
*/
function validate_datiAggDebitoreOriginario_codice_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitoreOriginario.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitoreOriginario_codice','label.datiAggDebitoreOriginario.codice',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_datiAggDebitoreOriginario_codice_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaDebitoreOriginarioCucLengthValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitoreOriginario.codice");
console.log('function validate_datiAggDebitoreOriginario_codice_sepaDebitoreOriginarioCucLengthValidator');
}
*/
function validate_datiAggDebitoreOriginario_codice_sepaDebitoreOriginarioCucLengthValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazioneDebitoreOriginario = form.elements['nazioneDebitoreOriginario'];
var valNazioneDebitoreOriginario = objNazioneDebitoreOriginario.options[objNazioneDebitoreOriginario.selectedIndex].value;
if (valNazioneDebitoreOriginario != null) {  // 86 = italia
var objTipoCodice = form.elements['datiAggDebitoreOriginario.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggDebitoreOriginario.codice'];
if (valTipoCodice == "PRO" // CUC
&& !objCodice.disabled
&& value.length > 0
) {
return (value.length == 8);
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitoreOriginario.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitoreOriginario_codice','label.datiAggDebitoreOriginario.codice',"Debitore Originario La lunghezza del dato inserito non è corretta:\n il CUC deve essere lungo esattamente 8 caratteri.","validate_datiAggDebitoreOriginario_codice_sepaDebitoreOriginarioCucLengthValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaDebitoreOriginarioCucValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitoreOriginario.codice");
console.log('function validate_datiAggDebitoreOriginario_codice_sepaDebitoreOriginarioCucValidator');
}
*/
function validate_datiAggDebitoreOriginario_codice_sepaDebitoreOriginarioCucValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazioneDebitoreOriginario = form.elements['nazioneDebitoreOriginario'];
var valNazioneDebitoreOriginario = objNazioneDebitoreOriginario.options[objNazioneDebitoreOriginario.selectedIndex].value;
if (valNazioneDebitoreOriginario != null) {  // 86 = italia
var objTipoCodice = form.elements['datiAggDebitoreOriginario.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggDebitoreOriginario.codice'];
if (valTipoCodice == "PRO" // CUC
&& !objCodice.disabled
&& value.length == 8
) {
var checkCuc = checkCinCharacter(value)
objCodice.value = value.toUpperCase();
return checkCuc;
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitoreOriginario.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitoreOriginario_codice','label.datiAggDebitoreOriginario.codice',"Debitore Originario il CUC non è valido: il codice di controllo non corrisponde","validate_datiAggDebitoreOriginario_codice_sepaDebitoreOriginarioCucValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaDebitoreOriginarioCFPIVALengthValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitoreOriginario.codice");
console.log('function validate_datiAggDebitoreOriginario_codice_sepaDebitoreOriginarioCFPIVALengthValidator');
}
*/
function validate_datiAggDebitoreOriginario_codice_sepaDebitoreOriginarioCFPIVALengthValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazioneDebitoreOriginario = form.elements['nazioneDebitoreOriginario'];
var valNazioneDebitoreOriginario = objNazioneDebitoreOriginario.options[objNazioneDebitoreOriginario.selectedIndex].value;
if (valNazioneDebitoreOriginario == 86) {  // italia
var objTipoCodice = form.elements['datiAggDebitoreOriginario.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggDebitoreOriginario.codice'];
if (valTipoCodice == "FIS" // CF / PIVA
&& !objCodice.disabled
&& value.length > 0
) {
return (value.length == 11 || value.length == 16 || (value.length==13 && value.substring(0,2).toUpperCase()=='IT'));
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitoreOriginario.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitoreOriginario_codice','label.datiAggDebitoreOriginario.codice',"Debitore Originario La lunghezza del dato inserito non è corretta:\n la partita IVA dovrebbe essere lunga\n esattamente 11 caratteri o 13 se inizia con IT, \n il codice fiscale dovrebbe essere lungo\n esattamente 16 caratteri.\n","validate_datiAggDebitoreOriginario_codice_sepaDebitoreOriginarioCFPIVALengthValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaDebitoreOriginarioCFPIVAValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitoreOriginario.codice");
console.log('function validate_datiAggDebitoreOriginario_codice_sepaDebitoreOriginarioCFPIVAValidator');
}
*/
function validate_datiAggDebitoreOriginario_codice_sepaDebitoreOriginarioCFPIVAValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazioneDebitoreOriginario = form.elements['nazioneDebitoreOriginario'];
var valNazioneDebitoreOriginario = objNazioneDebitoreOriginario.options[objNazioneDebitoreOriginario.selectedIndex].value;
if (valNazioneDebitoreOriginario == 86) {  // italia
var objTipoCodice = form.elements['datiAggDebitoreOriginario.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggDebitoreOriginario.codice'];
if (valTipoCodice == "FIS" // CF / PIVA
&& !objCodice.disabled
&& (value.length == 11 || value.length == 16 || (value.length==13 && value.substring(0,2).toUpperCase()=='IT')
)) {
var checkCFPIVA = false;
if ((value != "") && (value.length == 11) && (checkOnlyNumbersWithChar(value) == null)) {
checkCFPIVA = (checkPIVA(value) != null);
}
else if(value!="" && value.length== 13 && value.substring(0,2).toUpperCase()=="IT")
checkCFPIVA = (checkPIVA(value.substring(2)));
else if ((value != "") && (value.length == 16) && (checkNoSpecialCharWithChar(value) == null)) {
checkCFPIVA = isCodiceFiscale(value);
objCodice.value = value.toUpperCase();
}
return checkCFPIVA;
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitoreOriginario.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitoreOriginario_codice','label.datiAggDebitoreOriginario.codice',"Debitore Originario Codice Fiscale / Partita IVA non valido:\n il codice di controllo non corrisponde.\n","validate_datiAggDebitoreOriginario_codice_sepaDebitoreOriginarioCFPIVAValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkDebitoreOriginarioDatiAggCodice';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggDebitoreOriginario.codice");
console.log('function validate_datiAggDebitoreOriginario_codice_checkDebitoreOriginarioDatiAggCodice');
}
*/
function validate_datiAggDebitoreOriginario_codice_checkDebitoreOriginarioDatiAggCodice(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(document.getElementById('datiAggDebitoreOriginario-1').value.replace(/^\s+|\s+$/g,"").length != 0){
var tipoCodiceBen = document.getElementById('datiAggDebitoreOriginario-2').value.replace(/^\s+|\s+$/g,"");
if(tipoCodiceBen.length != 0){
if(value != null && value.replace(/^\s+|\s+$/g,"").length != 0){
codVal = value.replace(/^\s+|\s+$/g,"").toUpperCase();
switch(tipoCodiceBen) {
case 'PRO':
return true;
break;
case 'FIS':
return true;
break;
case 'BEI':
setVariableIntoMessage(obj,'CODE','Identificativo BEI');
if (codVal.length == 8 || codVal.length == 11) {
return isBicValid(codVal);
} else {
return false;
}
break;
default:
{
return true;
}
}
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['datiAggDebitoreOriginario.codice'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_datiAggDebitoreOriginario_codice','label.datiAggDebitoreOriginario.codice',"Debitore Originario \" @CODE \" non è corretta","validate_datiAggDebitoreOriginario_codice_checkDebitoreOriginarioDatiAggCodice", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.importoDisposizioneStringValue");
console.log('function validate_disposizione_importoDisposizioneStringValue_requiredCbiValidator');
}
*/
function validate_disposizione_importoDisposizioneStringValue_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.importoDisposizioneStringValue'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_importoDisposizioneStringValue','label.disposizione.importoDisposizioneStringValue',"il campo è obbligatorio","validate_disposizione_importoDisposizioneStringValue_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'importiNumero';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.importoDisposizioneStringValue");
console.log('function validate_disposizione_importoDisposizioneStringValue_importiNumero');
}
*/
function validate_disposizione_importoDisposizioneStringValue_importiNumero(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if ((value != null) &&  !checkReal(field.value)) {
return false;
}
if ((value != null) &&  (!decimaliCorretti(field.value)))
{
return false;
}
_onchange=CHECK_ON_NONE;
if ((value != null) &&  !checkReal(field.value)) {
return false;
}
/*
if ((value != null) &&  (!decimaliCorretti(field.value)))
{
return false;
}
*/
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.importoDisposizioneStringValue'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_importoDisposizioneStringValue','label.disposizione.importoDisposizioneStringValue',"Inserire un valore reale","validate_disposizione_importoDisposizioneStringValue_importiNumero", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;

/*
var ffffnnnn = 'importoMassimo';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.importoDisposizioneStringValue");
console.log('function validate_disposizione_importoDisposizioneStringValue_importoMassimo');
}
*/
function validate_disposizione_importoDisposizioneStringValue_importoMassimo(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null){
valore=value.replace(/^\s+|\s+$/g,'');
if(checkReal(valore) && decimaliCorretti(valore)){
if(valore.indexOf(',') > -1){
valore=valore.replace(',','.');
}
valore=parseFloat(valore);
valoreMin = "0,01".replace(",",".");
valoreMax = "999999999,99".replace(",",".");
valoreMin=parseFloat(valoreMin);
valoreMax=parseFloat(valoreMax);
if(valore < valoreMin || valore > valoreMax){
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.importoDisposizioneStringValue'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_importoDisposizioneStringValue','label.disposizione.importoDisposizioneStringValue',"deve essere compreso tra 0,01 e 999999999,99","validate_disposizione_importoDisposizioneStringValue_importoMassimo", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.divisaDisposizione");
console.log('function validate_disposizione_divisaDisposizione_requiredCbiValidator');
}
*/
function validate_disposizione_divisaDisposizione_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.divisaDisposizione'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_divisaDisposizione','label.disposizione.divisaDisposizione',"il campo è obbligatorio","validate_disposizione_divisaDisposizione_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.keyDisposizione");
console.log('function validate_disposizione_keyDisposizione_requiredCbiValidator');
}
*/
function validate_disposizione_keyDisposizione_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.keyDisposizione'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_keyDisposizione','label.disposizione.keyDisposizione',"il campo è obbligatorio","validate_disposizione_keyDisposizione_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.keyDisposizione");
console.log('function validate_disposizione_keyDisposizione_bundleSwiftStringValidator');
}
*/
function validate_disposizione_keyDisposizione_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.keyDisposizione'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_keyDisposizione','label.disposizione.keyDisposizione',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_keyDisposizione_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: dataScadenzaRichiestaMittente");
console.log('function validate_dataScadenzaRichiestaMittente_requiredCbiValidator');
}
*/
function validate_dataScadenzaRichiestaMittente_requiredCbiValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['dataScadenzaRichiestaMittente'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_dataScadenzaRichiestaMittente','label.dataScadenzaRichiestaMittente',"il campo è obbligatorio","validate_dataScadenzaRichiestaMittente_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sintaxDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: dataScadenzaRichiestaMittente");
console.log('function validate_dataScadenzaRichiestaMittente_sintaxDateValidator');
}
*/
function validate_dataScadenzaRichiestaMittente_sintaxDateValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['dataScadenzaRichiestaMittente'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_dataScadenzaRichiestaMittente','label.dataScadenzaRichiestaMittente',"La sintassi non è corretta","validate_dataScadenzaRichiestaMittente_sintaxDateValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'validDateValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: dataScadenzaRichiestaMittente");
console.log('function validate_dataScadenzaRichiestaMittente_validDateValidator');
}
*/
function validate_dataScadenzaRichiestaMittente_validDateValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['dataScadenzaRichiestaMittente'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_dataScadenzaRichiestaMittente','label.dataScadenzaRichiestaMittente',"La data inserita non è valida","validate_dataScadenzaRichiestaMittente_validDateValidator", _onsubmit, _onchange);
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
if (document.getElementById("inserimentoIncassiSepa").elements['checkTipoSequenzaIncasso'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_checkTipoSequenzaIncasso','label.checkTipoSequenzaIncasso',"il campo è obbligatorio","validate_checkTipoSequenzaIncasso_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaTipoSequenzaValue';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: checkTipoSequenzaIncasso");
console.log('function validate_checkTipoSequenzaIncasso_sepaTipoSequenzaValue');
}
*/
function validate_checkTipoSequenzaIncasso_sepaTipoSequenzaValue(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var valueTipoSequenzaIncasso = form.elements['checkTipoSequenzaIncasso'].value;
if (valueTipoSequenzaIncasso!='FRST') {
var valueVariazioneMandato = form.elements['checkVariazioneMandato'].value;
if (valueVariazioneMandato=='SV') {
var valueIstitutoContoDebitoreOrig = form.elements['disposizione.istitutoContoDebitoreOrig'].value;
if (valueIstitutoContoDebitoreOrig=='SMNDA') {
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['checkTipoSequenzaIncasso'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_checkTipoSequenzaIncasso','label.checkTipoSequenzaIncasso',"Sequenza incasso deve assumere il valore \"prima di una serie di disposizioni\"  ","validate_checkTipoSequenzaIncasso_sepaTipoSequenzaValue", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: monitoraggio.riconciliazione");
console.log('function validate_monitoraggio_riconciliazione_bundleSwiftStringValidator');
}
*/
function validate_monitoraggio_riconciliazione_bundleSwiftStringValidator(obj)
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
if (document.getElementById("inserimentoIncassiSepa").elements['monitoraggio.riconciliazione'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_monitoraggio_riconciliazione','label.monitoraggio.riconciliazione',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_monitoraggio_riconciliazione_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sepaCausaleCVS1Required';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: pagamentoSepa.causaleValutariaCvs1");
console.log('function validate_pagamentoSepa_causaleValutariaCvs1_sepaCausaleCVS1Required');
}
*/
function validate_pagamentoSepa_causaleValutariaCvs1_sepaCausaleCVS1Required(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var tipoCVS=form.elements['tipoCvs1'].value;
if((tipoCVS=='EMI' ||tipoCVS=='CVA' )&& (value=='' || value==null)){
return false;
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['pagamentoSepa.causaleValutariaCvs1'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_pagamentoSepa_causaleValutariaCvs1','label.pagamentoSepa.causaleValutariaCvs1',"CVS 1 il campo è obbligatorio","validate_pagamentoSepa_causaleValutariaCvs1_sepaCausaleCVS1Required", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaIncassiTipoCVS1Required';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: tipoCvs1");
console.log('function validate_tipoCvs1_sepaIncassiTipoCVS1Required');
}
*/
function validate_tipoCvs1_sepaIncassiTipoCVS1Required(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
value = value.replace(/^\s+|\s+$/g,"");
var codNazione = form.elements['disposizione.ibanDebitore'].value.substring(0,2).toUpperCase();
var tipoCVS_2 = form.elements['tipoCvs2'].value.replace(/^\s+|\s+$/g,"");
var tipoCVS_3 = form.elements['tipoCvs3'].value.replace(/^\s+|\s+$/g,"");
if(codNazione.length != 0){
if((value==null || value.length == 0) && (tipoCVS_2.length != 0 || tipoCVS_3.length != 0)){
return false;
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['tipoCvs1'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_tipoCvs1','label.tipoCvs1',"CVS 1 il campo è obbligatorio","validate_tipoCvs1_sepaIncassiTipoCVS1Required", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'importiNumero';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.cvs1.importoRiferimentoCvsStringValue");
console.log('function validate_disposizione_cvs1_importoRiferimentoCvsStringValue_importiNumero');
}
*/
function validate_disposizione_cvs1_importoRiferimentoCvsStringValue_importiNumero(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if ((value != null) &&  !checkReal(field.value)) {
return false;
}
if ((value != null) &&  (!decimaliCorretti(field.value)))
{
return false;
}
_onchange=CHECK_ON_NONE;
if ((value != null) &&  !checkReal(field.value)) {
return false;
}
/*
if ((value != null) &&  (!decimaliCorretti(field.value)))
{
return false;
}
*/
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.cvs1.importoRiferimentoCvsStringValue'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_cvs1_importoRiferimentoCvsStringValue','label.disposizione.cvs1.importoRiferimentoCvsStringValue',"Inserire un valore reale","validate_disposizione_cvs1_importoRiferimentoCvsStringValue_importiNumero", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'importoMassimo';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.cvs1.importoRiferimentoCvsStringValue");
console.log('function validate_disposizione_cvs1_importoRiferimentoCvsStringValue_importoMassimo');
}
*/
function validate_disposizione_cvs1_importoRiferimentoCvsStringValue_importoMassimo(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null){
valore=value.replace(/^\s+|\s+$/g,'');
if(checkReal(valore) && decimaliCorretti(valore)){
if(valore.indexOf(',') > -1){
valore=valore.replace(',','.');
}
valore=parseFloat(valore);
valoreMin = "0,01".replace(",",".");
valoreMax = "999999999,99".replace(",",".");
valoreMin=parseFloat(valoreMin);
valoreMax=parseFloat(valoreMax);
if(valore < valoreMin || valore > valoreMax){
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.cvs1.importoRiferimentoCvsStringValue'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_cvs1_importoRiferimentoCvsStringValue','label.disposizione.cvs1.importoRiferimentoCvsStringValue',"deve essere compreso tra 0,01 e 999999999,99","validate_disposizione_cvs1_importoRiferimentoCvsStringValue_importoMassimo", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sepaCausaleCVS2Required';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: pagamentoSepa.causaleValutariaCvs2");
console.log('function validate_pagamentoSepa_causaleValutariaCvs2_sepaCausaleCVS2Required');
}
*/
function validate_pagamentoSepa_causaleValutariaCvs2_sepaCausaleCVS2Required(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var tipoCVS=form.elements['tipoCvs2'].value;
if((tipoCVS=='EMI' ||tipoCVS=='CVA' )&& (value=='' || value==null)){
return false;
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['pagamentoSepa.causaleValutariaCvs2'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_pagamentoSepa_causaleValutariaCvs2','label.pagamentoSepa.causaleValutariaCvs2',"CVS 2 il campo è obbligatorio","validate_pagamentoSepa_causaleValutariaCvs2_sepaCausaleCVS2Required", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaTipoCVS2Required';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: tipoCvs2");
console.log('function validate_tipoCvs2_sepaTipoCVS2Required');
}
*/
function validate_tipoCvs2_sepaTipoCVS2Required(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
value = value.replace(/^\s+|\s+$/g,"");
var tipoCVS_3=form.elements['tipoCvs3'].value.replace(/^\s+|\s+$/g,"");
if ((tipoCVS_3.length != 0) && (value==null || value.length == 0)){
return false;
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['tipoCvs2'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_tipoCvs2','label.tipoCvs2',"CVS 2 il campo è obbligatorio","validate_tipoCvs2_sepaTipoCVS2Required", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'importiNumero';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.cvs2.importoRiferimentoCvsStringValue");
console.log('function validate_disposizione_cvs2_importoRiferimentoCvsStringValue_importiNumero');
}
*/
function validate_disposizione_cvs2_importoRiferimentoCvsStringValue_importiNumero(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if ((value != null) &&  !checkReal(field.value)) {
return false;
}
if ((value != null) &&  (!decimaliCorretti(field.value)))
{
return false;
}
_onchange=CHECK_ON_NONE;
if ((value != null) &&  !checkReal(field.value)) {
return false;
}
/*
if ((value != null) &&  (!decimaliCorretti(field.value)))
{
return false;
}
*/
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.cvs2.importoRiferimentoCvsStringValue'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_cvs2_importoRiferimentoCvsStringValue','label.disposizione.cvs2.importoRiferimentoCvsStringValue',"Inserire un valore reale","validate_disposizione_cvs2_importoRiferimentoCvsStringValue_importiNumero", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'importoMassimo';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.cvs2.importoRiferimentoCvsStringValue");
console.log('function validate_disposizione_cvs2_importoRiferimentoCvsStringValue_importoMassimo');
}
*/
function validate_disposizione_cvs2_importoRiferimentoCvsStringValue_importoMassimo(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null){
valore=value.replace(/^\s+|\s+$/g,'');
if(checkReal(valore) && decimaliCorretti(valore)){
if(valore.indexOf(',') > -1){
valore=valore.replace(',','.');
}
valore=parseFloat(valore);
valoreMin = "0,01".replace(",",".");
valoreMax = "999999999,99".replace(",",".");
valoreMin=parseFloat(valoreMin);
valoreMax=parseFloat(valoreMax);
if(valore < valoreMin || valore > valoreMax){
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.cvs2.importoRiferimentoCvsStringValue'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_cvs2_importoRiferimentoCvsStringValue','label.disposizione.cvs2.importoRiferimentoCvsStringValue',"deve essere compreso tra 0,01 e 999999999,99","validate_disposizione_cvs2_importoRiferimentoCvsStringValue_importoMassimo", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sepaCausaleCVS3Required';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: pagamentoSepa.causaleValutariaCvs3");
console.log('function validate_pagamentoSepa_causaleValutariaCvs3_sepaCausaleCVS3Required');
}
*/
function validate_pagamentoSepa_causaleValutariaCvs3_sepaCausaleCVS3Required(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var tipoCVS=form.elements['tipoCvs3'].value;
if((tipoCVS=='EMI' ||tipoCVS=='CVA' )&& (value=='' || value==null)){
return false;
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['pagamentoSepa.causaleValutariaCvs3'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_pagamentoSepa_causaleValutariaCvs3','label.pagamentoSepa.causaleValutariaCvs3',"CVS 3 il campo è obbligatorio","validate_pagamentoSepa_causaleValutariaCvs3_sepaCausaleCVS3Required", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'importiNumero';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.cvs3.importoRiferimentoCvsStringValue");
console.log('function validate_disposizione_cvs3_importoRiferimentoCvsStringValue_importiNumero');
}
*/
function validate_disposizione_cvs3_importoRiferimentoCvsStringValue_importiNumero(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if ((value != null) &&  !checkReal(field.value)) {
return false;
}
if ((value != null) &&  (!decimaliCorretti(field.value)))
{
return false;
}
_onchange=CHECK_ON_NONE;
if ((value != null) &&  !checkReal(field.value)) {
return false;
}
/*
if ((value != null) &&  (!decimaliCorretti(field.value)))
{
return false;
}
*/
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.cvs3.importoRiferimentoCvsStringValue'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_cvs3_importoRiferimentoCvsStringValue','label.disposizione.cvs3.importoRiferimentoCvsStringValue',"Inserire un valore reale","validate_disposizione_cvs3_importoRiferimentoCvsStringValue_importiNumero", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'importoMassimo';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.cvs3.importoRiferimentoCvsStringValue");
console.log('function validate_disposizione_cvs3_importoRiferimentoCvsStringValue_importoMassimo');
}
*/
function validate_disposizione_cvs3_importoRiferimentoCvsStringValue_importoMassimo(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null){
valore=value.replace(/^\s+|\s+$/g,'');
if(checkReal(valore) && decimaliCorretti(valore)){
if(valore.indexOf(',') > -1){
valore=valore.replace(',','.');
}
valore=parseFloat(valore);
valoreMin = "0,01".replace(",",".");
valoreMax = "999999999,99".replace(",",".");
valoreMin=parseFloat(valoreMin);
valoreMax=parseFloat(valoreMax);
if(valore < valoreMin || valore > valoreMax){
return false;
}
}
}
return true;
}
if (document.getElementById("inserimentoIncassiSepa").elements['disposizione.cvs3.importoRiferimentoCvsStringValue'])  addValidation(showAlert,'inserimentoIncassiSepa','inserimentoIncassiSepa_disposizione_cvs3_importoRiferimentoCvsStringValue','label.disposizione.cvs3.importoRiferimentoCvsStringValue',"deve essere compreso tra 0,01 e 999999999,99","validate_disposizione_cvs3_importoRiferimentoCvsStringValue_importoMassimo", _onsubmit, _onchange);
function validateForm_inserimentoIncassiSepa() {
if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; }
var form = document.getElementById("inserimentoIncassiSepa");
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
