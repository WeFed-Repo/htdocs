<script type="text/javascript" language="Javascript1.1"> 
<!-- Begin 
    var bCancel = false; 

    function validateLoginForm(form) { 
        if (bCancel) { 
            return true; 
        } else { 
            var formValidationResult; 
            formValidationResult = validateRequired(form); 
            return (formValidationResult == 1); 
        } 
    } 

    function loginForm_required () { 
     this.a0 = new Array("userid", "Il campo Userid e' obbligatorio", new Function ("varName", " return this[varName];"));
     this.a1 = new Array("password", "Il campo Password e' obbligatorio", new Function ("varName", " return this[varName];"));
    } 



function validateByte(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_ByteValidations()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(!jcv_isFieldPresent(_8)){
continue;
}
if((_8.type=="hidden"||_8.type=="text"||_8.type=="textarea"||_8.type=="select-one"||_8.type=="radio")){
var _9="";
if(_8.type=="select-one"){
var si=_8.selectedIndex;
if(si>=0){
_9=_8.options[si].value;
}
}else{
_9=_8.value;
}
if(_9.length>0){
if(!jcv_isDecimalDigits(_9)){
_2=false;
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
}else{
var _b=parseInt(_9,10);
if(isNaN(_b)||!(_b>=-128&&_b<=127)){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}


// Esegue la validazione di tipo: CreditCardNumberLength.
	function validateCreditCardNumberLength(form) {
		var isValid = true; // esito validazione
		var focusField = null;
		var fields = new Array(); // E' la lista dei messaggi di errore da visualizzare
		var i = 0; // indice per fields

	// lista campi che subiscono il questo controllo.
		var oCheckCreditCardNumberLength = eval('new ' + jcv_retrieveFormName(form) +  '_checkCreditCardNumberLength()');

		for (var x in oCheckCreditCardNumberLength) {
		// esclusione campi non interessati
			if ( !jcv_verifyArrayElement(x, oCheckCreditCardNumberLength[x]) ) { continue; }

		// elaborazione dei campi interessati
			var field = form[oCheckCreditCardNumberLength[x][0]]; // 0 ?l nome di input-type

			// errore se: il campo non ?resente.
			if ( !jcv_isFieldPresent(field) ) {
				isValid=false;
				fields[i++] = oCheckCreditCardNumberLength[x][1]; // 1 ?l msg di errore da visualizzare
			}
			else if ( ( field.type == 'hidden' || field.type == 'text' || field.type == 'textarea' || field.type == 'file' || field.type == 'radio' || field.type == 'checkbox' || field.type == 'select-one' || field.type == 'password') ) {

				// reperisco il valore del campo.
				var value = '';
				if ( field.type == "select-one" ) {
					var si = field.selectedIndex;
					if ( si >= 0 ) { value = field.options[si].value; }
				}
				else if ( field.type == 'radio' || field.type == 'checkbox' ) {
					if ( field.checked ) { value = field.value; }
				}
				else { value = field.value; }

				// errore se: la lunghezza non ?ispettata
				if ( trim(value).length != oCheckCreditCardNumberLength[x][2]("len1")  &&  trim(value).length != oCheckCreditCardNumberLength[x][2]("len2") ) {
					isValid = false;
					fields[i++] = oCheckCreditCardNumberLength[x][1];
					if ( (i == 0) && (field.type != 'hidden') ) { focusField = field; }
				}
			}
			// errore se: campo a scelta multipla.
			else if ( field.type == "select-multiple" ) { 
				isValid=false;
				fields[i++] = oCheckCreditCardNumberLength[x][1];
				if ( i == 0 ) { focusField = field; }
			}
			// errore se: 
			else if ( (field.length > 0) && (field[0].type == 'radio' || field[0].type == 'checkbox') ) {
				isValid=false;
				fields[i++] = oCheckCreditCardNumberLength[x][1];
				if (i == 0) { focusField = field[0]; }
			}   
		}

		if (fields.length > 0) { jcv_handleErrors(fields, focusField); }
		return isValid;
	}

// Trim whitespace from left and right sides of s.
	function trim(s) {
		return s.replace( /^\s*/, "" ).replace( /\s*$/, "" );
	}
function validateDate(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_DateValidations()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(!jcv_isFieldPresent(_8)){
continue;
}
var _9=_8.value;
var _a=true;
var _b=_6[x][2]("datePatternStrict");
if(_b==null){
_b=_6[x][2]("datePattern");
_a=false;
}
if((_8.type=="hidden"||_8.type=="text"||_8.type=="textarea")&&(_9.length>0)&&(_b.length>0)){
var _c="MM";
var _d="dd";
var _e="yyyy";
var _f=_b.indexOf(_c);
var _10=_b.indexOf(_d);
var _11=_b.indexOf(_e);
if((_10<_11&&_10>_f)){
var _12=_f+_c.length;
var _13=_10+_d.length;
var _14=_b.substring(_12,_12+1);
var _15=_b.substring(_13,_13+1);
if(_12==_10&&_13==_11){
dateRegexp=_a?new RegExp("^(\\d{2})(\\d{2})(\\d{4})$"):new RegExp("^(\\d{1,2})(\\d{1,2})(\\d{4})$");
}else{
if(_12==_10){
dateRegexp=_a?new RegExp("^(\\d{2})(\\d{2})["+_15+"](\\d{4})$"):new RegExp("^(\\d{1,2})(\\d{1,2})["+_15+"](\\d{4})$");
}else{
if(_13==_11){
dateRegexp=_a?new RegExp("^(\\d{2})["+_14+"](\\d{2})(\\d{4})$"):new RegExp("^(\\d{1,2})["+_14+"](\\d{1,2})(\\d{4})$");
}else{
dateRegexp=_a?new RegExp("^(\\d{2})["+_14+"](\\d{2})["+_15+"](\\d{4})$"):new RegExp("^(\\d{1,2})["+_14+"](\\d{1,2})["+_15+"](\\d{4})$");
}
}
}
var _16=dateRegexp.exec(_9);
if(_16!=null){
if(!jcv_isValidDate(_16[2],_16[1],_16[3])){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}else{
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}else{
if((_f<_11&&_f>_10)){
var _12=_10+_d.length;
var _13=_f+_c.length;
var _14=_b.substring(_12,_12+1);
var _15=_b.substring(_13,_13+1);
if(_12==_f&&_13==_11){
dateRegexp=_a?new RegExp("^(\\d{2})(\\d{2})(\\d{4})$"):new RegExp("^(\\d{1,2})(\\d{1,2})(\\d{4})$");
}else{
if(_12==_f){
dateRegexp=_a?new RegExp("^(\\d{2})(\\d{2})["+_15+"](\\d{4})$"):new RegExp("^(\\d{1,2})(\\d{1,2})["+_15+"](\\d{4})$");
}else{
if(_13==_11){
dateRegexp=_a?new RegExp("^(\\d{2})["+_14+"](\\d{2})(\\d{4})$"):new RegExp("^(\\d{1,2})["+_14+"](\\d{1,2})(\\d{4})$");
}else{
dateRegexp=_a?new RegExp("^(\\d{2})["+_14+"](\\d{2})["+_15+"](\\d{4})$"):new RegExp("^(\\d{1,2})["+_14+"](\\d{1,2})["+_15+"](\\d{4})$");
}
}
}
var _16=dateRegexp.exec(_9);
if(_16!=null){
if(!jcv_isValidDate(_16[1],_16[2],_16[3])){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}else{
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}else{
if((_f>_11&&_f<_10)){
var _12=_11+_e.length;
var _13=_f+_c.length;
var _14=_b.substring(_12,_12+1);
var _15=_b.substring(_13,_13+1);
if(_12==_f&&_13==_10){
dateRegexp=_a?new RegExp("^(\\d{4})(\\d{2})(\\d{2})$"):new RegExp("^(\\d{4})(\\d{1,2})(\\d{1,2})$");
}else{
if(_12==_f){
dateRegexp=_a?new RegExp("^(\\d{4})(\\d{2})["+_15+"](\\d{2})$"):new RegExp("^(\\d{4})(\\d{1,2})["+_15+"](\\d{1,2})$");
}else{
if(_13==_10){
dateRegexp=_a?new RegExp("^(\\d{4})["+_14+"](\\d{2})(\\d{2})$"):new RegExp("^(\\d{4})["+_14+"](\\d{1,2})(\\d{1,2})$");
}else{
dateRegexp=_a?new RegExp("^(\\d{4})["+_14+"](\\d{2})["+_15+"](\\d{2})$"):new RegExp("^(\\d{4})["+_14+"](\\d{1,2})["+_15+"](\\d{1,2})$");
}
}
}
var _16=dateRegexp.exec(_9);
if(_16!=null){
if(!jcv_isValidDate(_16[3],_16[2],_16[1])){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}else{
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}else{
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}
function jcv_isValidDate(day,_18,_19){
if(_18<1||_18>12){
return false;
}
if(day<1||day>31){
return false;
}
if((_18==4||_18==6||_18==9||_18==11)&&(day==31)){
return false;
}
if(_18==2){
var _1a=(_19%4==0&&(_19%100!=0||_19%400==0));
if(day>29||(day==29&&!_1a)){
return false;
}
}
return true;
}


function validateCreditCard(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_creditCard()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(!jcv_isFieldPresent(_8)){
continue;
}
if((_8.type=="text"||_8.type=="textarea")&&(_8.value.length>0)){
if(!jcv_luhnCheck(_8.value)){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}
function jcv_luhnCheck(_9){
if(jcv_isLuhnNum(_9)){
var _a=_9.length;
var _b=_a&1;
var _c=0;
for(var _d=0;_d<_a;_d++){
var _e=parseInt(_9.charAt(_d));
if(!((_d&1)^_b)){
_e*=2;
if(_e>9){
_e-=9;
}
}
_c+=_e;
}
if(_c==0){
return false;
}
if(_c%10==0){
return true;
}
}
return false;
}
function jcv_isLuhnNum(_f){
_f=_f.toString();
if(_f.length==0){
return false;
}
for(var n=0;n<_f.length;n++){
if((_f.substring(n,n+1)<"0")||(_f.substring(n,n+1)>"9")){
return false;
}
}
return true;
}


function validateFloat(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_FloatValidations()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(!jcv_isFieldPresent(_8)){
continue;
}
if((_8.type=="hidden"||_8.type=="text"||_8.type=="textarea"||_8.type=="select-one"||_8.type=="radio")){
var _9="";
if(_8.type=="select-one"){
var si=_8.selectedIndex;
if(si>=0){
_9=_8.options[si].value;
}
}else{
_9=_8.value;
}
if(_9.length>0){
var _b=_9.split(".");
var _c=0;
var _d=_b.join("");
while(_d.charAt(_c)=="0"){
_c++;
}
var _e=_d.substring(_c,_d.length);
if(!jcv_isAllDigits(_e)||_b.length>2){
_2=false;
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
}else{
var _f=parseFloat(_9);
if(isNaN(_f)){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}


function validateMinLength(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_minlength()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(!jcv_isFieldPresent(_8)){
continue;
}
if((_8.type=="hidden"||_8.type=="text"||_8.type=="password"||_8.type=="textarea")){
var _9=_6[x][2]("lineEndLength");
var _a=0;
if(_9){
var _b=0;
var _c=0;
var _d=0;
while(_d<_8.value.length){
var _e=_8.value.charAt(_d);
if(_e=="\r"){
_b++;
}
if(_e=="\n"){
_c++;
}
_d++;
}
var _f=parseInt(_9);
_a=(_c*_f)-(_b+_c);
}
var _10=parseInt(_6[x][2]("minlength"));
if((trim(_8.value).length>0)&&((_8.value.length+_a)<_10)){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}


function validateFloatRange(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_floatRange()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(!jcv_isFieldPresent(_8)){
continue;
}
if((_8.type=="hidden"||_8.type=="text"||_8.type=="textarea")&&(_8.value.length>0)){
var _9=parseFloat(_6[x][2]("min"));
var _a=parseFloat(_6[x][2]("max"));
var _b=parseFloat(_8.value);
if(!(_b>=_9&&_b<=_a)){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}


function jcv_retrieveFormName(_1){
var _2;
if(_1.getAttributeNode){
if(_1.getAttributeNode("id")&&_1.getAttributeNode("id").value){
_2=_1.getAttributeNode("id").value;
}else{
_2=_1.getAttributeNode("name").value;
}
}else{
if(_1.getAttribute){
if(_1.getAttribute("id")){
_2=_1.getAttribute("id");
}else{
_2=_1.attributes["name"];
}
}else{
if(_1.id){
_2=_1.id;
}else{
_2=_1.name;
}
}
}
return _2;
}
function jcv_handleErrors(_3,_4){
if(_4&&_4!=null){
var _5=true;
if(_4.disabled||_4.type=="hidden"){
_5=false;
}
if(_5&&_4.style&&_4.style.visibility&&_4.style.visibility=="hidden"){
_5=false;
}
if(_5){
_4.focus();
}
}
alert(_3.join("\n"));
}
function jcv_verifyArrayElement(_6,_7){
if(_7&&_7.length&&_7.length==3){
return true;
}else{
return false;
}
}
function jcv_isFieldPresent(_8){
var _9=true;
if(_8==null||(typeof _8=="undefined")){
_9=false;
}else{
if(_8.disabled){
_9=false;
}
}
return _9;
}
function jcv_isAllDigits(_a){
_a=_a.toString();
var _b="0123456789";
var _c=0;
if(_a.substring(0,2)=="0x"){
_b="0123456789abcdefABCDEF";
_c=2;
}else{
if(_a.charAt(0)=="0"){
_b="01234567";
_c=1;
}else{
if(_a.charAt(0)=="-"){
_c=1;
}
}
}
for(var n=_c;n<_a.length;n++){
if(_b.indexOf(_a.substring(n,n+1))==-1){
return false;
}
}
return true;
}
function jcv_isDecimalDigits(_e){
_e=_e.toString();
var _f="0123456789";
var _10=0;
if(_e.charAt(0)=="-"){
_10=1;
}
for(var n=_10;n<_e.length;n++){
if(_f.indexOf(_e.substring(n,n+1))==-1){
return false;
}
}
return true;
}


function validateMaxLength(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_maxlength()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(!jcv_isFieldPresent(_8)){
continue;
}
if((_8.type=="hidden"||_8.type=="text"||_8.type=="password"||_8.type=="textarea")){
var _9=_6[x][2]("lineEndLength");
var _a=0;
if(_9){
var _b=0;
var _c=0;
var _d=0;
while(_d<_8.value.length){
var _e=_8.value.charAt(_d);
if(_e=="\r"){
_b++;
}
if(_e=="\n"){
_c++;
}
_d++;
}
var _f=parseInt(_9);
_a=(_c*_f)-(_b+_c);
}
var _10=parseInt(_6[x][2]("maxlength"));
if((_8.value.length+_a)>_10){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}


function validateRequired(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_required()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(!jcv_isFieldPresent(_8)){
_5[i++]=_6[x][1];
_2=false;
}else{
if((_8.type=="hidden"||_8.type=="text"||_8.type=="textarea"||_8.type=="file"||_8.type=="radio"||_8.type=="checkbox"||_8.type=="select-one"||_8.type=="password")){
var _9="";
if(_8.type=="select-one"){
var si=_8.selectedIndex;
if(si>=0){
_9=_8.options[si].value;
}
}else{
if(_8.type=="radio"||_8.type=="checkbox"){
if(_8.checked){
_9=_8.value;
}
}else{
_9=_8.value;
}
}
if(trim(_9).length==0){
if((i==0)&&(_8.type!="hidden")){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}else{
if(_8.type=="select-multiple"){
var _b=_8.options.length;
lastSelected=-1;
for(loop=_b-1;loop>=0;loop--){
if(_8.options[loop].selected){
lastSelected=loop;
_9=_8.options[loop].value;
break;
}
}
if(lastSelected<0||trim(_9).length==0){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}else{
if((_8.length>0)&&(_8[0].type=="radio"||_8[0].type=="checkbox")){
isChecked=-1;
for(loop=0;loop<_8.length;loop++){
if(_8[loop].checked){
isChecked=loop;
break;
}
}
if(isChecked<0){
if(i==0){
_3=_8[0];
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}
function trim(s){
return s.replace(/^\s*/,"").replace(/\s*$/,"");
}


function validateInteger(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_IntegerValidations()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(!jcv_isFieldPresent(_8)){
continue;
}
if((_8.type=="hidden"||_8.type=="text"||_8.type=="textarea"||_8.type=="select-one"||_8.type=="radio")){
var _9="";
if(_8.type=="select-one"){
var si=_8.selectedIndex;
if(si>=0){
_9=_8.options[si].value;
}
}else{
_9=_8.value;
}
if(_9.length>0){
if(!jcv_isDecimalDigits(_9)){
_2=false;
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
}else{
var _b=parseInt(_9,10);
if(isNaN(_b)||!(_b>=-2147483648&&_b<=2147483647)){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}


function validaCodiceFiscale(form) {
                    var bValid = true;
                    var focusField = null;
                    var i = 0;
                    var fields = new Array();


                    oCodiceFiscale =  eval('new ' + jcv_retrieveFormName(form) +  '_codiceFiscale()');
                    for (x in oCodiceFiscale) {
                        // esclusione campi non interessati
			if ( !jcv_verifyArrayElement(x, oCodiceFiscale[x]) ) { continue; }

                        // elaborazione dei campi interessati
			var field = form[oCodiceFiscale[x][0]]; // 0 ?l nome di input-type

			// errore se: il campo non ?resente.
			if ( !jcv_isFieldPresent(field) ) {
				isValid=false;
				fields[i++] = oCodiceFiscale[x][1]; // 1 ?l msg di errore da visualizzare
			} else if (    field.type == 'hidden'  || field.type == 'text' 
                                    || field.type == 'textarea' 
                                    || field.type == 'file' 
                                    || field.type == 'radio' 
                                    || field.type == 'checkbox' 
                                    || field.type == 'select-one' 
                                    || field.type == 'password' ) {



                            var value = '';
                            if ( field.type == "select-one" ) {
                                var si = field.selectedIndex;
                                if ( si >= 0 ) { 
                                    value = field.options[si].value; 
                                }
                            }
                            else if ( field.type == 'radio' || field.type == 'checkbox' ) {
                                if ( field.checked ) { 
                                    value = field.value; 
                                }
                            }
                            else { 
                                value = field.value; 
                            }


                            if (!checkCode(value)) {
                                if (i == 0) {
                                    focusField = field;
                                }
                                fields[i++] = oCodiceFiscale[x][1];
                                bValid = false;
                            }
                        }
                    }

                    if (fields.length > 0) {
                    focusField.focus();
                    alert(fields.join('\n'));
                    }

                    return bValid; 
                }

                function checkCode (cf) {

                    var validi, i, s, set1, set2, setpari, setdispcf, buono;

                    if( cf == '' )  return false;
                    cf = cf.toUpperCase();
                    if( cf.length != 16 ) {
                        return false;
                    }
                    validi = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                    for( i = 0; i < 16; i++ ){
                        if( validi.indexOf( cf.charAt(i) ) == -1 ){
                            return false;
                        }
                    }
                    set1 = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    set2 = "ABCDEFGHIJABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    setpari = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    setdisp = "BAKPLCQDREVOSFTGUHMINJWZYX";
                    s = 0;
                    for( i = 1; i <= 13; i += 2 )
                        s += setpari.indexOf( set2.charAt( set1.indexOf( cf.charAt(i) )));
                    for( i = 0; i <= 14; i += 2 )
                        s += setdisp.indexOf( set2.charAt( set1.indexOf( cf.charAt(i) )));
                    if( s%26 != cf.charCodeAt(15)-'A'.charCodeAt(0) ){
                        return false;
                    }
                    return true;
                }
function validateIntRange(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_intRange()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(jcv_isFieldPresent(_8)){
var _9="";
if(_8.type=="hidden"||_8.type=="text"||_8.type=="textarea"||_8.type=="radio"){
_9=_8.value;
}
if(_8.type=="select-one"){
var si=_8.selectedIndex;
if(si>=0){
_9=_8.options[si].value;
}
}
if(_9.length>0){
var _b=parseInt(_6[x][2]("min"));
var _c=parseInt(_6[x][2]("max"));
var _d=parseInt(_9,10);
if(!(_d>=_b&&_d<=_c)){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}


function validateShort(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_ShortValidations()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(!jcv_isFieldPresent(_8)){
continue;
}
if((_8.type=="hidden"||_8.type=="text"||_8.type=="textarea"||_8.type=="select-one"||_8.type=="radio")){
var _9="";
if(_8.type=="select-one"){
var si=_8.selectedIndex;
if(si>=0){
_9=_8.options[si].value;
}
}else{
_9=_8.value;
}
if(_9.length>0){
if(!jcv_isDecimalDigits(_9)){
_2=false;
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
}else{
var _b=parseInt(_9,10);
if(isNaN(_b)||!(_b>=-32768&&_b<=32767)){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}


function validateEmail(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_email()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(!jcv_isFieldPresent(_8)){
continue;
}
if((_8.type=="hidden"||_8.type=="text"||_8.type=="textarea")&&(_8.value.length>0)){
if(!jcv_checkEmail(_8.value)){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}
function jcv_checkEmail(_9){
if(_9.length==0){
return true;
}
var _a=0;
var _b=/^(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum)$/;
var _c=/^(.+)@(.+)$/;
var _d="\\(\\)><@,;:\\\\\\\"\\.\\[\\]";
var _e="[^\\s"+_d+"]";
var _f="(\"[^\"]*\")";
var _10=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
var _11=_e+"+";
var _12="("+_11+"|"+_f+")";
var _13=new RegExp("^"+_12+"(\\."+_12+")*$");
var _14=new RegExp("^"+_11+"(\\."+_11+")*$");
var _15=_9.match(_c);
if(_15==null){
return false;
}
var _16=_15[1];
var _17=_15[2];
for(i=0;i<_16.length;i++){
if(_16.charCodeAt(i)>127){
return false;
}
}
for(i=0;i<_17.length;i++){
if(_17.charCodeAt(i)>127){
return false;
}
}
if(_16.match(_13)==null){
return false;
}
var _19=_17.match(_10);
if(_19!=null){
for(var i=1;i<=4;i++){
if(_19[i]>255){
return false;
}
}
return true;
}
var _1a=new RegExp("^"+_11+"$");
var _1b=_17.split(".");
var len=_1b.length;
for(i=0;i<len;i++){
if(_1b[i].search(_1a)==-1){
return false;
}
}
if(_a&&_1b[_1b.length-1].length!=2&&_1b[_1b.length-1].search(_b)==-1){
return false;
}
if(len<2){
return false;
}
return true;
}


function validateMask(_1){
var _2=true;
var _3=null;
var i=0;
var _5=new Array();
var _6=eval("new "+jcv_retrieveFormName(_1)+"_mask()");
for(var x in _6){
if(!jcv_verifyArrayElement(x,_6[x])){
continue;
}
var _8=_1[_6[x][0]];
if(!jcv_isFieldPresent(_8)){
continue;
}
if((_8.type=="hidden"||_8.type=="text"||_8.type=="textarea"||_8.type=="file")&&(_8.value.length>0)){
if(!jcv_matchPattern(_8.value,_6[x][2]("mask"))){
if(i==0){
_3=_8;
}
_5[i++]=_6[x][1];
_2=false;
}
}
}
if(_5.length>0){
jcv_handleErrors(_5,_3);
}
return _2;
}
function jcv_matchPattern(_9,_a){
return _a.exec(_9);
}



//End --> 
</script>