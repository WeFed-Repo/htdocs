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
if (document.getElementById("salvaBoniSepa_4531005").elements['contextSelectorData.id'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_contextSelectorData_id','label.contextSelectorData.id',"il campo \u00E8 obbligatorio","validate_contextSelectorData_id_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['contextSelectorData.descrizione'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_contextSelectorData_descrizione','label.contextSelectorData.descrizione',"il campo \u00E8 obbligatorio","validate_contextSelectorData_descrizione_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['contextSelectorData.cf'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_contextSelectorData_cf','label.contextSelectorData.cf',"il campo \u00E8 obbligatorio","validate_contextSelectorData_cf_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['contextSelectorData.banca'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_contextSelectorData_banca','label.contextSelectorData.banca',"il campo \u00E8 obbligatorio","validate_contextSelectorData_banca_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['contextSelectorData.conto'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_contextSelectorData_conto','label.contextSelectorData.conto',"il campo \u00E8 obbligatorio","validate_contextSelectorData_conto_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sepaRagSocDebEffetivoRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.debitore.nm");
console.log('function validate_disposizione_debitore_nm_sepaRagSocDebEffetivoRequired');
}
*/
function validate_disposizione_debitore_nm_sepaRagSocDebEffetivoRequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if((form.elements['disposizione.debitore.tipoIndirizzo'].value.replace(/^\s+|\s+$/g,"").length != 0
|| form.elements['disposizione.debitore.strtNm'].value!=''
|| form.elements['disposizione.debitore.bldgNb'].value!=''
|| form.elements['disposizione.debitore.twnNm'].value!=''
|| form.elements['disposizione.debitore.pstCd'].value!=''
|| form.elements['disposizione.debitore.ctrySubDvsn'].value!='')&& (value==null || value=="" || value.replace(/^\s+|\s+$/g,"").length == 0))
{
return false;
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.debitore.nm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_debitore_nm','label.disposizione.debitore.nm',"Debitore Effettivo il campo \u00E8 obbligatorio","validate_disposizione_debitore_nm_sepaRagSocDebEffetivoRequired", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.debitore.nm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_debitore_nm','label.disposizione.debitore.nm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitore_nm_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.debitore.strtNm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_debitore_strtNm','label.disposizione.debitore.strtNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitore_strtNm_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.debitore.bldgNb'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_debitore_bldgNb','label.disposizione.debitore.bldgNb',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitore_bldgNb_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.debitore.twnNm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_debitore_twnNm','label.disposizione.debitore.twnNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitore_twnNm_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (form.elements['nazioneDebEffetivo'].value == 86 && 5 > -1 && value.length != 5) {
return false;
}
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.debitore.pstCd'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_debitore_pstCd','label.disposizione.debitore.pstCd',"@ERROR Debitore Effettivo Il valore da inserire deve avere 5 caratteri.","validate_disposizione_debitore_pstCd_capItaliaValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.debitore.pstCd'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_debitore_pstCd','label.disposizione.debitore.pstCd',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitore_pstCd_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.debitore.ctrySubDvsn'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_debitore_ctrySubDvsn','label.disposizione.debitore.ctrySubDvsn',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_debitore_ctrySubDvsn_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaRagSocFornitoreRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiario.nm");
console.log('function validate_disposizione_beneficiario_nm_sepaRagSocFornitoreRequired');
}
*/
function validate_disposizione_beneficiario_nm_sepaRagSocFornitoreRequired(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiario.nm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiario_nm','label.disposizione.beneficiario.nm',"Beneficiario il campo \u00E8 obbligatorio","validate_disposizione_beneficiario_nm_sepaRagSocFornitoreRequired", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiario.nm");
console.log('function validate_disposizione_beneficiario_nm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiario_nm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiario.nm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiario_nm','label.disposizione.beneficiario.nm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiario_nm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiario.strtNm");
console.log('function validate_disposizione_beneficiario_strtNm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiario_strtNm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiario.strtNm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiario_strtNm','label.disposizione.beneficiario.strtNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiario_strtNm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiario.bldgNb");
console.log('function validate_disposizione_beneficiario_bldgNb_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiario_bldgNb_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiario.bldgNb'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiario_bldgNb','label.disposizione.beneficiario.bldgNb',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiario_bldgNb_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiario.twnNm");
console.log('function validate_disposizione_beneficiario_twnNm_javascriptExpression');
}
*/
function validate_disposizione_beneficiario_twnNm_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return (document.getElementsByName('disposizione.ibanBeneficiario')[0].value.substr(0,2).toUpperCase()=="IT" || (document.getElementsByName('disposizione.ibanBeneficiario')[0].value.substr(0,2).toUpperCase()!="IT" && value.length>0));
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiario.twnNm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiario_twnNm','label.disposizione.beneficiario.twnNm',"Beneficiario il campo \u00E8 obbligatorio","validate_disposizione_beneficiario_twnNm_javascriptExpression", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiario.twnNm");
console.log('function validate_disposizione_beneficiario_twnNm_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiario_twnNm_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiario.twnNm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiario_twnNm','label.disposizione.beneficiario.twnNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiario_twnNm_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'capItaliaValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiario.pstCd");
console.log('function validate_disposizione_beneficiario_pstCd_capItaliaValidator');
}
*/
function validate_disposizione_beneficiario_pstCd_capItaliaValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (value != null && value != "") {
value = value.replace(/^\s+|\s+$/g,"");
if (value.length>0){
if (form.elements['nazioneFornitore'].value == 86 && 5 > -1 && value.length != 5) {
return false;
}
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiario.pstCd'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiario_pstCd','label.disposizione.beneficiario.pstCd',"@ERROR Beneficiario Il valore da inserire deve avere 5 caratteri.","validate_disposizione_beneficiario_pstCd_capItaliaValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiario.pstCd");
console.log('function validate_disposizione_beneficiario_pstCd_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiario_pstCd_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiario.pstCd'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiario_pstCd','label.disposizione.beneficiario.pstCd',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiario_pstCd_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiario.ctrySubDvsn");
console.log('function validate_disposizione_beneficiario_ctrySubDvsn_bundleSwiftStringValidator');
}
*/
function validate_disposizione_beneficiario_ctrySubDvsn_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiario.ctrySubDvsn'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiario_ctrySubDvsn','label.disposizione.beneficiario.ctrySubDvsn',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiario_ctrySubDvsn_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCbiValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.ibanBeneficiario");
console.log('function validate_disposizione_ibanBeneficiario_requiredCbiValidator');
}
*/
function validate_disposizione_ibanBeneficiario_requiredCbiValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.ibanBeneficiario'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_ibanBeneficiario','label.disposizione.ibanBeneficiario',"il campo \u00E8 obbligatorio","validate_disposizione_ibanBeneficiario_requiredCbiValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkIBANSub';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.ibanBeneficiario");
console.log('function validate_disposizione_ibanBeneficiario_checkIBANSub');
}
*/
function validate_disposizione_ibanBeneficiario_checkIBANSub(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.ibanBeneficiario'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_ibanBeneficiario','label.disposizione.ibanBeneficiario',"Codice IBAN errato o mancante.","validate_disposizione_ibanBeneficiario_checkIBANSub", _onsubmit, _onchange);
_onsubmit=false;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'controlloNazioneIban';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.ibanBeneficiario");
console.log('function validate_disposizione_ibanBeneficiario_controlloNazioneIban');
}
*/
function validate_disposizione_ibanBeneficiario_controlloNazioneIban(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var tipoOperazione=form.elements['tipoOperazione'].value;
var valueIban = value.replace(/^\s+|\s+$/g,"").toUpperCase();
var ibanOld=document.forms[0].elements['ibanBeneficiarioOld'].value;
document.forms[0].elements['ibanBeneficiarioOld'].value = valueIban;
field.value = valueIban;
var nazioneOld = '';
if (ibanOld!=null && ibanOld!=''){
nazioneOld = ibanOld.substring(0,2).toUpperCase();
}
var codNazione = valueIban.substring(0,2);
if(codNazione != ''){
if (codNazione == 'IT' && nazioneOld != 'IT') {
setVisible('asterisco_CausaleISO',false);
lockFieldByID('CSPESRV_SPES-2', true);
document.getElementsByName('disposizione.codiceCausale')[0].value='';

setVisible('asterisco_citta',false);
} else if (codNazione != 'IT' && (nazioneOld == 'IT' || nazioneOld=='')) {
lockFieldByID('CSPESRV_SPES-2', false);
setVisible('asterisco_CausaleCBI',false);
setVisible('asterisco_CausaleISO',true);

setVisible('asterisco_citta',true);
}
}else{
document.getElementById('CSPESRV_SPES-2').value=' ';
document.getElementById('CSPESRV_SPES-2').selectedIndex = -1;
document.getElementsByName('disposizione.codiceCausale')[0].value='';
lockFieldByID('CSPESRV_SPES-2', true);

document.getElementsByName('causaleISO')[0].value='';
setVisible('asterisco_citta',false);
}
var tipo1=document.forms[0].elements['tipoCvs1'].value.replace(/^\s+|\s+$/g,'');
var tipo2=document.forms[0].elements['tipoCvs2'].value.replace(/^\s+|\s+$/g,'');
rigaCVS1Visibility(tipo1, tipo2, codNazione);
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.ibanBeneficiario'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_ibanBeneficiario','label.disposizione.ibanBeneficiario',"Non e\' possibile modificare lo stato dell\' IBAN beneficiario.","validate_disposizione_ibanBeneficiario_controlloNazioneIban", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.ibanBeneficiario");
console.log('function validate_disposizione_ibanBeneficiario_bundleSwiftStringValidator');
}
*/
function validate_disposizione_ibanBeneficiario_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.ibanBeneficiario'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_ibanBeneficiario','label.disposizione.ibanBeneficiario',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_ibanBeneficiario_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'nazioneIbanFieldRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicDisposizione");
console.log('function validate_disposizione_bicDisposizione_nazioneIbanFieldRequired');
}
*/
function validate_disposizione_bicDisposizione_nazioneIbanFieldRequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
_onchange=CHECK_ON_NONE;
var valueIban=form.elements['disposizione.ibanBeneficiario'].value.substring(0,2).toUpperCase();
if(valueIban!=""){
if ((valueIban!='IT' && valueIban!='SM') && (value==null || value=="" || value.replace(/^\s+|\s+$/g,"").length == 0))
{
return false;
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.bicDisposizione'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_bicDisposizione','label.disposizione.bicDisposizione',"Beneficiario il campo \u00E8 obbligatorio","validate_disposizione_bicDisposizione_nazioneIbanFieldRequired", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'bicLenghtValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicDisposizione");
console.log('function validate_disposizione_bicDisposizione_bicLenghtValidator');
}
*/
function validate_disposizione_bicDisposizione_bicLenghtValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.bicDisposizione'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_bicDisposizione','label.disposizione.bicDisposizione',"La lunghezza deve essere di 8 o 11 caratteri","validate_disposizione_bicDisposizione_bicLenghtValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'bicValid';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicDisposizione");
console.log('function validate_disposizione_bicDisposizione_bicValid');
}
*/
function validate_disposizione_bicDisposizione_bicValid(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var valueBic = value.replace(/^\s+|\s+$/g,"").toUpperCase();
field.value = valueBic;
var countryCode=form.elements['disposizione.ibanBeneficiario'].value.substring(0,2).toUpperCase();
if(countryCode!=""){
if ((valueBic.length==8 || valueBic.length==11)){
if(!(isBicValid(value))) return false;
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.bicDisposizione'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_bicDisposizione','label.disposizione.bicDisposizione',"non \u00E8 corretto. Il codice di controllo non corrisponde.","validate_disposizione_bicDisposizione_bicValid", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.bicDisposizione");
console.log('function validate_disposizione_bicDisposizione_bundleSwiftStringValidator');
}
*/
function validate_disposizione_bicDisposizione_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.bicDisposizione'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_bicDisposizione','label.disposizione.bicDisposizione',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_bicDisposizione_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredFornitoreDatiAggCodice';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggBeneficiario.codice");
console.log('function validate_datiAggBeneficiario_codice_requiredFornitoreDatiAggCodice');
}
*/
function validate_datiAggBeneficiario_codice_requiredFornitoreDatiAggCodice(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(document.getElementById('datiAggiuntiviBeneficiario-1').value.replace(/^\s+|\s+$/g,"").length != 0){
var tipoCodiceBen = document.getElementById('datiAggiuntiviBeneficiario-2').value.replace(/^\s+|\s+$/g,"");
if(tipoCodiceBen.length != 0){
if(value == null || value.replace(/^\s+|\s+$/g,"").length == 0){
return false;
}
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggBeneficiario.codice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggBeneficiario_codice','label.datiAggBeneficiario.codice',"Beneficiario il campo \u00E8 obbligatorio","validate_datiAggBeneficiario_codice_requiredFornitoreDatiAggCodice", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggBeneficiario.codice");
console.log('function validate_datiAggBeneficiario_codice_bundleSwiftStringValidator');
}
*/
function validate_datiAggBeneficiario_codice_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggBeneficiario.codice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggBeneficiario_codice','label.datiAggBeneficiario.codice',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_datiAggBeneficiario_codice_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaBeneficiarioCucLengthValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggBeneficiario.codice");
console.log('function validate_datiAggBeneficiario_codice_sepaBeneficiarioCucLengthValidator');
}
*/
function validate_datiAggBeneficiario_codice_sepaBeneficiarioCucLengthValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazione = form.elements['nazioneFornitore'];
var valNazione = objNazione.options[objNazione.selectedIndex].value;
if (valNazione != null) {  // 86 = italia
var objTipoCodice = form.elements['datiAggBeneficiario.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggBeneficiario.codice'];
if (valTipoCodice == "PRO" // CUC
&& !objCodice.disabled
&& value.length > 0
) {
return (value.length == 8);
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggBeneficiario.codice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggBeneficiario_codice','label.datiAggBeneficiario.codice',"Beneficiario La lunghezza del dato inserito non \u00E8 corretta:\n il CUC deve essere lungo esattamente 8 caratteri.","validate_datiAggBeneficiario_codice_sepaBeneficiarioCucLengthValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaBeneficiarioCucValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggBeneficiario.codice");
console.log('function validate_datiAggBeneficiario_codice_sepaBeneficiarioCucValidator');
}
*/
function validate_datiAggBeneficiario_codice_sepaBeneficiarioCucValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazione = form.elements['nazioneFornitore'];
var valNazione = objNazione.options[objNazione.selectedIndex].value;
if (valNazione != null) {  // 86 = italia
var objTipoCodice = form.elements['datiAggBeneficiario.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggBeneficiario.codice'];
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
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggBeneficiario.codice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggBeneficiario_codice','label.datiAggBeneficiario.codice',"Beneficiario il CUC non \u00E8 valido: il codice di controllo non corrisponde","validate_datiAggBeneficiario_codice_sepaBeneficiarioCucValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaBeneficiarioCFPIVALengthValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggBeneficiario.codice");
console.log('function validate_datiAggBeneficiario_codice_sepaBeneficiarioCFPIVALengthValidator');
}
*/
function validate_datiAggBeneficiario_codice_sepaBeneficiarioCFPIVALengthValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazione = form.elements['nazioneFornitore'];
var valNazione = objNazione.options[objNazione.selectedIndex].value;
if (valNazione == 86) {  // italia
var objTipoCodice = form.elements['datiAggBeneficiario.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggBeneficiario.codice'];
if (valTipoCodice == "FIS" // CF / PIVA
&& !objCodice.disabled
&& value.length > 0
) {
return (value.length == 11 || value.length == 16 || (value.length==13 && value.substring(0,2).toUpperCase()=='IT'));
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggBeneficiario.codice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggBeneficiario_codice','label.datiAggBeneficiario.codice',"Beneficiario La lunghezza del dato inserito non \u00E8 corretta:\n la partita IVA dovrebbe essere lunga\n esattamente 11 caratteri o 13 se inizia con IT, \n il codice fiscale dovrebbe essere lungo\n esattamente 16 caratteri.\n","validate_datiAggBeneficiario_codice_sepaBeneficiarioCFPIVALengthValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkFornitoreDatiAggCodice';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggBeneficiario.codice");
console.log('function validate_datiAggBeneficiario_codice_checkFornitoreDatiAggCodice');
}
*/
function validate_datiAggBeneficiario_codice_checkFornitoreDatiAggCodice(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(document.getElementById('datiAggiuntiviBeneficiario-1').value.replace(/^\s+|\s+$/g,"").length != 0){
var tipoCodiceBen = document.getElementById('datiAggiuntiviBeneficiario-2').value.replace(/^\s+|\s+$/g,"");
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
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggBeneficiario.codice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggBeneficiario_codice','label.datiAggBeneficiario.codice',"Beneficiario \" @CODE \" non \u00E8 corretta","validate_datiAggBeneficiario_codice_checkFornitoreDatiAggCodice", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggBeneficiario.descCodice");
console.log('function validate_datiAggBeneficiario_descCodice_bundleSwiftStringValidator');
}
*/
function validate_datiAggBeneficiario_descCodice_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggBeneficiario.descCodice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggBeneficiario_descCodice','label.datiAggBeneficiario.descCodice',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_datiAggBeneficiario_descCodice_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaRagSocCreditoreRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.beneficiarioEffettivo.nm");
console.log('function validate_disposizione_beneficiarioEffettivo_nm_sepaRagSocCreditoreRequired');
}
*/
function validate_disposizione_beneficiarioEffettivo_nm_sepaRagSocCreditoreRequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if((form.elements['disposizione.beneficiarioEffettivo.tipoIndirizzo'].value.replace(/^\s+|\s+$/g,"").length != 0
|| form.elements['disposizione.beneficiarioEffettivo.strtNm'].value!=''
|| form.elements['disposizione.beneficiarioEffettivo.bldgNb'].value!=''
|| form.elements['disposizione.beneficiarioEffettivo.twnNm'].value!=''
|| form.elements['disposizione.beneficiarioEffettivo.pstCd'].value!=''
|| form.elements['datiAggCreditore.tipoSoggetto'].value.replace(/^\s+|\s+$/g,"").length != 0
|| form.elements['disposizione.beneficiarioEffettivo.ctrySubDvsn'].value!='')&& (value==null || value=="" || value.replace(/^\s+|\s+$/g,"").length == 0))
{
return false;
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiarioEffettivo.nm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiarioEffettivo_nm','label.disposizione.beneficiarioEffettivo.nm',"Creditore Effettivo il campo \u00E8 obbligatorio","validate_disposizione_beneficiarioEffettivo_nm_sepaRagSocCreditoreRequired", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiarioEffettivo.nm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiarioEffettivo_nm','label.disposizione.beneficiarioEffettivo.nm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_nm_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiarioEffettivo.strtNm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiarioEffettivo_strtNm','label.disposizione.beneficiarioEffettivo.strtNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_strtNm_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiarioEffettivo.bldgNb'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiarioEffettivo_bldgNb','label.disposizione.beneficiarioEffettivo.bldgNb',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_bldgNb_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiarioEffettivo.twnNm'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiarioEffettivo_twnNm','label.disposizione.beneficiarioEffettivo.twnNm',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_twnNm_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiarioEffettivo.pstCd'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiarioEffettivo_pstCd','label.disposizione.beneficiarioEffettivo.pstCd',"@ERROR Creditore Effettivo Il valore da inserire deve avere 5 caratteri.","validate_disposizione_beneficiarioEffettivo_pstCd_capItaliaValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiarioEffettivo.pstCd'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiarioEffettivo_pstCd','label.disposizione.beneficiarioEffettivo.pstCd',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_pstCd_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.beneficiarioEffettivo.ctrySubDvsn'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_beneficiarioEffettivo_ctrySubDvsn','label.disposizione.beneficiarioEffettivo.ctrySubDvsn',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_beneficiarioEffettivo_ctrySubDvsn_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'requiredCreditoreDatiAggCodice';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggCreditore.codice");
console.log('function validate_datiAggCreditore_codice_requiredCreditoreDatiAggCodice');
}
*/
function validate_datiAggCreditore_codice_requiredCreditoreDatiAggCodice(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(document.getElementById('datiAggiuntiviCreditore-1').value.replace(/^\s+|\s+$/g,"").length != 0){
var tipoCodiceCred = document.getElementById('datiAggiuntiviCreditore-2').value.replace(/^\s+|\s+$/g,"");
if(tipoCodiceCred.length != 0){
if(value == null || value.replace(/^\s+|\s+$/g,"").length == 0){
return false;
}
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggCreditore.codice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggCreditore_codice','label.datiAggCreditore.codice',"Creditore il campo \u00E8 obbligatorio","validate_datiAggCreditore_codice_requiredCreditoreDatiAggCodice", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggCreditore.codice");
console.log('function validate_datiAggCreditore_codice_bundleSwiftStringValidator');
}
*/
function validate_datiAggCreditore_codice_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggCreditore.codice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggCreditore_codice','label.datiAggCreditore.codice',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_datiAggCreditore_codice_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaCreditoreCucLengthValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggCreditore.codice");
console.log('function validate_datiAggCreditore_codice_sepaCreditoreCucLengthValidator');
}
*/
function validate_datiAggCreditore_codice_sepaCreditoreCucLengthValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazioneCreditore = form.elements['nazioneCreditore'];
var valNazioneCreditore = objNazioneCreditore.options[objNazioneCreditore.selectedIndex].value;
if (valNazioneCreditore != null) {  // 86 = italia
var objTipoCodice = form.elements['datiAggCreditore.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggCreditore.codice'];
if (valTipoCodice == "PRO" // CUC
&& !objCodice.disabled
&& value.length > 0
) {
return (value.length == 8);
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggCreditore.codice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggCreditore_codice','label.datiAggCreditore.codice',"Creditore La lunghezza del dato inserito non \u00E8 corretta:\n il CUC deve essere lungo esattamente 8 caratteri.","validate_datiAggCreditore_codice_sepaCreditoreCucLengthValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaCreditoreCucValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggCreditore.codice");
console.log('function validate_datiAggCreditore_codice_sepaCreditoreCucValidator');
}
*/
function validate_datiAggCreditore_codice_sepaCreditoreCucValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazioneCreditore = form.elements['nazioneCreditore'];
var valNazioneCreditore = objNazioneCreditore.options[objNazioneCreditore.selectedIndex].value;
if (valNazioneCreditore != null) {  // 86 = italia
var objTipoCodice = form.elements['datiAggCreditore.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggCreditore.codice'];
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
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggCreditore.codice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggCreditore_codice','label.datiAggCreditore.codice',"Creditore il CUC non \u00E8 valido: il codice di controllo non corrisponde","validate_datiAggCreditore_codice_sepaCreditoreCucValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaCreditoreCFPIVALengthValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggCreditore.codice");
console.log('function validate_datiAggCreditore_codice_sepaCreditoreCFPIVALengthValidator');
}
*/
function validate_datiAggCreditore_codice_sepaCreditoreCFPIVALengthValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
var objNazioneCreditore = form.elements['nazioneCreditore'];
var valNazioneCreditore = objNazioneCreditore.options[objNazioneCreditore.selectedIndex].value;
if (valNazioneCreditore == 86) {  // italia
var objTipoCodice = form.elements['datiAggCreditore.tipoCodice'];
var valTipoCodice = objTipoCodice.options[objTipoCodice.selectedIndex].value;
var objCodice = form.elements['datiAggCreditore.codice'];
if (valTipoCodice == "FIS" // CF / PIVA
&& !objCodice.disabled
&& value.length > 0
) {
return (value.length == 11 || value.length == 16 || (value.length==13 && value.substring(0,2).toUpperCase()=='IT'));
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggCreditore.codice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggCreditore_codice','label.datiAggCreditore.codice',"Creditore La lunghezza del dato inserito non \u00E8 corretta:\n la partita IVA dovrebbe essere lunga\n esattamente 11 caratteri o 13 se inizia con IT, \n il codice fiscale dovrebbe essere lungo\n esattamente 16 caratteri.\n","validate_datiAggCreditore_codice_sepaCreditoreCFPIVALengthValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'checkCreditoreDatiAggCodice';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggCreditore.codice");
console.log('function validate_datiAggCreditore_codice_checkCreditoreDatiAggCodice');
}
*/
function validate_datiAggCreditore_codice_checkCreditoreDatiAggCodice(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(document.getElementById('datiAggiuntiviCreditore-1').value.replace(/^\s+|\s+$/g,"").length != 0){
var tipoCodiceCred = document.getElementById('datiAggiuntiviCreditore-2').value.replace(/^\s+|\s+$/g,"");
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
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggCreditore.codice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggCreditore_codice','label.datiAggCreditore.codice',"Creditore \" @CODE \" non \u00E8 corretta","validate_datiAggCreditore_codice_checkCreditoreDatiAggCodice", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: datiAggCreditore.descCodice");
console.log('function validate_datiAggCreditore_descCodice_bundleSwiftStringValidator');
}
*/
function validate_datiAggCreditore_descCodice_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['datiAggCreditore.descCodice'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_datiAggCreditore_descCodice','label.datiAggCreditore.descCodice',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_datiAggCreditore_descCodice_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.importoDisposizioneStringValue'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_importoDisposizioneStringValue','label.disposizione.importoDisposizioneStringValue',"il campo \u00E8 obbligatorio","validate_disposizione_importoDisposizioneStringValue_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.importoDisposizioneStringValue'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_importoDisposizioneStringValue','label.disposizione.importoDisposizioneStringValue',"Inserire un valore reale","validate_disposizione_importoDisposizioneStringValue_importiNumero", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.importoDisposizioneStringValue'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_importoDisposizioneStringValue','label.disposizione.importoDisposizioneStringValue',"deve essere compreso tra 0,01 e 999999999,99","validate_disposizione_importoDisposizioneStringValue_importoMassimo", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.divisaDisposizione'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_divisaDisposizione','label.disposizione.divisaDisposizione',"il campo \u00E8 obbligatorio","validate_disposizione_divisaDisposizione_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['monitoraggio.riconciliazione'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_monitoraggio_riconciliazione','label.monitoraggio.riconciliazione',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_monitoraggio_riconciliazione_bundleSwiftStringValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.keyDisposizione'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_keyDisposizione','label.disposizione.keyDisposizione',"il campo \u00E8 obbligatorio","validate_disposizione_keyDisposizione_requiredCbiValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.keyDisposizione'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_keyDisposizione','label.disposizione.keyDisposizione',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_keyDisposizione_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaCausaleISORequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.codiceIsoCausale");
console.log('function validate_disposizione_codiceIsoCausale_sepaCausaleISORequired');
}
*/
function validate_disposizione_codiceIsoCausale_sepaCausaleISORequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return $('[name="disposizione.ibanBeneficiario"]').val().substr(0,2).toUpperCase()!="IT"
|| ($('[name="disposizione.ibanBeneficiario"]').val().substr(0,2).toUpperCase()=="IT" &&
$('[name="tipoCausale"]:checked') != null && $('[name="tipoCausale"]:checked').val() != "causaleISO"
|| ($('[name="tipoCausale"]:checked').val() == "causaleISO" && value.length>0) )
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.codiceIsoCausale'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_codiceIsoCausale','label.disposizione.codiceIsoCausale',"il campo \u00E8 obbligatorio","validate_disposizione_codiceIsoCausale_sepaCausaleISORequired", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'javascriptExpression';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.codiceCausale");
console.log('function validate_disposizione_codiceCausale_javascriptExpression');
}
*/
function validate_disposizione_codiceCausale_javascriptExpression(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return ((value!='' && $("[name='disposizione.codiceIsoCausale']", form).val()=='') || value=='');
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.codiceCausale'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_codiceCausale','label.disposizione.codiceCausale',"Attenzione! E\' possibile inserire la Causale ISO oppure la Causale libera.","validate_disposizione_codiceCausale_javascriptExpression", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sepaCausaleLiberaRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.codiceCausale");
console.log('function validate_disposizione_codiceCausale_sepaCausaleLiberaRequired');
}
*/
function validate_disposizione_codiceCausale_sepaCausaleLiberaRequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return $('[name="disposizione.ibanBeneficiario"]').val().substr(0,2).toUpperCase()!="IT"
|| ($('[name="disposizione.ibanBeneficiario"]').val().substr(0,2).toUpperCase()=="IT" &&
$('[name="tipoCausale"]:checked') != null && $('[name="tipoCausale"]:checked').val() != "causaleLibera"
|| ($('[name="tipoCausale"]:checked').val() == "causaleLibera" && value.length>0) )
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.codiceCausale'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_codiceCausale','label.disposizione.codiceCausale',"il campo \u00E8 obbligatorio","validate_disposizione_codiceCausale_sepaCausaleLiberaRequired", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_CHANGE;
/*
var ffffnnnn = 'sepaCausaleLiberaOCausaleISOObbligatorie';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.codiceCausale");
console.log('function validate_disposizione_codiceCausale_sepaCausaleLiberaOCausaleISOObbligatorie');
}
*/
function validate_disposizione_codiceCausale_sepaCausaleLiberaOCausaleISOObbligatorie(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
return $('[name="disposizione.ibanBeneficiario"]').val().substr(0,2).toUpperCase()!="IT"
||  ($('[name="disposizione.ibanBeneficiario"]').val().substr(0,2).toUpperCase()=="IT"
&& ($('[name="disposizione.codiceCausale"]').val() != null || $('[name="disposizione.causaleISO"]').val()!=null))
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.codiceCausale'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_codiceCausale','label.disposizione.codiceCausale',"E necessario inserire la causale libera o la causale ISO","validate_disposizione_codiceCausale_sepaCausaleLiberaOCausaleISOObbligatorie", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.codiceCausale");
console.log('function validate_disposizione_codiceCausale_bundleSwiftStringValidator');
}
*/
function validate_disposizione_codiceCausale_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.codiceCausale'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_codiceCausale','label.disposizione.codiceCausale',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_codiceCausale_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'bundleSwiftStringValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.descrizioneFinalitaPagamento");
console.log('function validate_disposizione_descrizioneFinalitaPagamento_bundleSwiftStringValidator');
}
*/
function validate_disposizione_descrizioneFinalitaPagamento_bundleSwiftStringValidator(obj)
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.descrizioneFinalitaPagamento'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_descrizioneFinalitaPagamento','label.disposizione.descrizioneFinalitaPagamento',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_descrizioneFinalitaPagamento_bundleSwiftStringValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaEsitoBeneficiarioRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.descAnagDestinatarioEsito");
console.log('function validate_disposizione_descAnagDestinatarioEsito_sepaEsitoBeneficiarioRequired');
}
*/
function validate_disposizione_descAnagDestinatarioEsito_sepaEsitoBeneficiarioRequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(form.elements['esitoBneficiario'].checked){
value = value.replace(/^\s+|\s+$/g,"");
if (value == null || value.length == 0) {
return false;
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.descAnagDestinatarioEsito'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_descAnagDestinatarioEsito','label.disposizione.descAnagDestinatarioEsito',"Esito Al Beneficiario il campo \u00E8 obbligatorio","validate_disposizione_descAnagDestinatarioEsito_sepaEsitoBeneficiarioRequired", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'switftStringValidatorDestinatarioEsito';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.descAnagDestinatarioEsito");
console.log('function validate_disposizione_descAnagDestinatarioEsito_switftStringValidatorDestinatarioEsito');
}
*/
function validate_disposizione_descAnagDestinatarioEsito_switftStringValidatorDestinatarioEsito(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if ((form.elements['esitoBneficiario'].checked == true) && (!isSWIFTString(value))) return false;
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.descAnagDestinatarioEsito'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_descAnagDestinatarioEsito','label.disposizione.descAnagDestinatarioEsito',"&SWIFTSTRINGBUNDLE Caratteri ammessi: \nlettere (a-z)(A-Z) \nnumeri (0-9) \ncarattere (spazio) \ncaratteri speciali (/-?:().,\'+)","validate_disposizione_descAnagDestinatarioEsito_switftStringValidatorDestinatarioEsito", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaEsitoBeneficiarioRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.modalitaEsito");
console.log('function validate_disposizione_modalitaEsito_sepaEsitoBeneficiarioRequired');
}
*/
function validate_disposizione_modalitaEsito_sepaEsitoBeneficiarioRequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(form.elements['esitoBneficiario'].checked){
value = value.replace(/^\s+|\s+$/g,"");
if (value == null || value.length == 0) {
return false;
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.modalitaEsito'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_modalitaEsito','label.disposizione.modalitaEsito',"Esito Al Beneficiario il campo \u00E8 obbligatorio","validate_disposizione_modalitaEsito_sepaEsitoBeneficiarioRequired", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaEsitoBeneficiarioRequired';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.cucDestinatarioEsito");
console.log('function validate_disposizione_cucDestinatarioEsito_sepaEsitoBeneficiarioRequired');
}
*/
function validate_disposizione_cucDestinatarioEsito_sepaEsitoBeneficiarioRequired(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(form.elements['esitoBneficiario'].checked){
value = value.replace(/^\s+|\s+$/g,"");
if (value == null || value.length == 0) {
return false;
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.cucDestinatarioEsito'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_cucDestinatarioEsito','label.disposizione.cucDestinatarioEsito',"Esito Al Beneficiario il campo \u00E8 obbligatorio","validate_disposizione_cucDestinatarioEsito_sepaEsitoBeneficiarioRequired", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaEsitoCucLengthValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.cucDestinatarioEsito");
console.log('function validate_disposizione_cucDestinatarioEsito_sepaEsitoCucLengthValidator');
}
*/
function validate_disposizione_cucDestinatarioEsito_sepaEsitoCucLengthValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (form.elements['esitoBneficiario'].checked) {
if (value != null) {
value = value.replace(/^\s+|\s+$/g,"");
if (value.length > 0) {
var modEsito = form.elements['disposizione.modalitaEsito'].value.replace(/^\s+|\s+$/g,"");
if (modEsito == 'XCUC') {
return (value.length == 8);
}
}
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.cucDestinatarioEsito'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_cucDestinatarioEsito','label.disposizione.cucDestinatarioEsito'," La lunghezza del dato inserito non \u00E8 corretta:\n il CUC deve essere lungo esattamente 8 caratteri.","validate_disposizione_cucDestinatarioEsito_sepaEsitoCucLengthValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaEsitoCucValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.cucDestinatarioEsito");
console.log('function validate_disposizione_cucDestinatarioEsito_sepaEsitoCucValidator');
}
*/
function validate_disposizione_cucDestinatarioEsito_sepaEsitoCucValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if (form.elements['esitoBneficiario'].checked) {
if (value != null) {
value = value.replace(/^\s+|\s+$/g,"");
if (value.length > 0) {
var modEsito = form.elements['disposizione.modalitaEsito'].value.replace(/^\s+|\s+$/g,"");
var objCodice = form.elements['disposizione.cucDestinatarioEsito'];
if (modEsito == 'XCUC' && value.length == 8) {
var checkCuc =  checkCinCharacter(value);
objCodice.value = value.toUpperCase();
return checkCuc;
}
}
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.cucDestinatarioEsito'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_cucDestinatarioEsito','label.disposizione.cucDestinatarioEsito'," il CUC non \u00E8 valido: il codice di controllo non corrisponde","validate_disposizione_cucDestinatarioEsito_sepaEsitoCucValidator", _onsubmit, _onchange);
_onsubmit=true;
_onchange=CHECK_ON_NONE;
/*
var ffffnnnn = 'sepaEsitoMailValidator';
if (ffffnnnn == 'bundleSwiftStringValidator') {
console.log("bundleSwiftStringValidator field name: disposizione.cucDestinatarioEsito");
console.log('function validate_disposizione_cucDestinatarioEsito_sepaEsitoMailValidator');
}
*/
function validate_disposizione_cucDestinatarioEsito_sepaEsitoMailValidator(obj)
{     // var message= obj.message; var label=obj.label;
var form = obj.form; field = obj.field;
var value=null;
if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
if(form.elements['esitoBneficiario'].checked){
if (value != null) {
value = value.replace(/^\s+|\s+$/g,"");
if(value.length > 0){
var modEsito = form.elements['disposizione.modalitaEsito'].value.replace(/^\s+|\s+$/g,"");
if(modEsito == 'EMAL') {
return (emailCheck(value) && (value.length < 2048))? true : false;
}
}
}
}
return true;
}
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.cucDestinatarioEsito'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_cucDestinatarioEsito','label.disposizione.cucDestinatarioEsito',"Formato dell\'indirizzo e-mail non valido","validate_disposizione_cucDestinatarioEsito_sepaEsitoMailValidator", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['pagamentoSepa.causaleValutariaCvs1'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_pagamentoSepa_causaleValutariaCvs1','label.pagamentoSepa.causaleValutariaCvs1',"CVS 1 il campo \u00E8 obbligatorio","validate_pagamentoSepa_causaleValutariaCvs1_sepaCausaleCVS1Required", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.cvs1.importoRiferimentoCvsStringValue'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_cvs1_importoRiferimentoCvsStringValue','label.disposizione.cvs1.importoRiferimentoCvsStringValue',"Inserire un valore reale","validate_disposizione_cvs1_importoRiferimentoCvsStringValue_importiNumero", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.cvs1.importoRiferimentoCvsStringValue'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_cvs1_importoRiferimentoCvsStringValue','label.disposizione.cvs1.importoRiferimentoCvsStringValue',"deve essere compreso tra 0,01 e 999999999,99","validate_disposizione_cvs1_importoRiferimentoCvsStringValue_importoMassimo", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['pagamentoSepa.causaleValutariaCvs2'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_pagamentoSepa_causaleValutariaCvs2','label.pagamentoSepa.causaleValutariaCvs2',"CVS 2 il campo \u00E8 obbligatorio","validate_pagamentoSepa_causaleValutariaCvs2_sepaCausaleCVS2Required", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['tipoCvs2'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_tipoCvs2','label.tipoCvs2',"CVS 2 il campo \u00E8 obbligatorio","validate_tipoCvs2_sepaTipoCVS2Required", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.cvs2.importoRiferimentoCvsStringValue'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_cvs2_importoRiferimentoCvsStringValue','label.disposizione.cvs2.importoRiferimentoCvsStringValue',"Inserire un valore reale","validate_disposizione_cvs2_importoRiferimentoCvsStringValue_importiNumero", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.cvs2.importoRiferimentoCvsStringValue'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_cvs2_importoRiferimentoCvsStringValue','label.disposizione.cvs2.importoRiferimentoCvsStringValue',"deve essere compreso tra 0,01 e 999999999,99","validate_disposizione_cvs2_importoRiferimentoCvsStringValue_importoMassimo", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['pagamentoSepa.causaleValutariaCvs3'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_pagamentoSepa_causaleValutariaCvs3','label.pagamentoSepa.causaleValutariaCvs3',"CVS 3 il campo \u00E8 obbligatorio","validate_pagamentoSepa_causaleValutariaCvs3_sepaCausaleCVS3Required", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.cvs3.importoRiferimentoCvsStringValue'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_cvs3_importoRiferimentoCvsStringValue','label.disposizione.cvs3.importoRiferimentoCvsStringValue',"Inserire un valore reale","validate_disposizione_cvs3_importoRiferimentoCvsStringValue_importiNumero", _onsubmit, _onchange);
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
if (document.getElementById("salvaBoniSepa_4531005").elements['disposizione.cvs3.importoRiferimentoCvsStringValue'])  addValidation(showAlert,'salvaBoniSepa_4531005','salvaBoniSepa_4531005_disposizione_cvs3_importoRiferimentoCvsStringValue','label.disposizione.cvs3.importoRiferimentoCvsStringValue',"deve essere compreso tra 0,01 e 999999999,99","validate_disposizione_cvs3_importoRiferimentoCvsStringValue_importoMassimo", _onsubmit, _onchange);
function validateForm_salvaBoniSepa_4531005() {
if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; }
var form = document.getElementById("salvaBoniSepa_4531005");
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
