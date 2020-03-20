/* CVF: CLIENT VALIDATION FRAMEWORK
 * AUTHOR: CRISTIAN LORENZETTO  
 * DATE: 5/2/2009
 */
var toValidateOnSubmit=true;
var toValidateOnField=true;
var toSubmit=true;
var messageObjArray = new Array();
var NORMAL=0;
var ERROR=2;
var WARNING=1;

//valore per il caso di un messaggio di conferma
var CONFIRM=3;

var CHECK_ON_NONE=0; 
var CHECK_ON_CHANGE=1;
var CHECK_ON_FOCUS=2;
var CHECK_REPEATED_SUBMIT=true;
var preValidateEvents= new Array(); 
var postValidateEvents= new Array(); 
var submitCount=0;


function showAlert(label,msg) {
alert(label+": "+msg);
}


function IteratorMessage()  {
	this.index = 0;
	this.next = function(){  return  (this.index < messageObjArray.length );   };
	this.getMessage = function(){var i=this.index;this.index++; return messageObjArray[i] ;   };
	
}

function setVariableIntoMessage(obj,name,value){
var tmp=value.charAt(0);
for (var i=1;i<value.length;i++) 
if (((value.charAt(i-1)!='\\'))&&((value.charAt(i)=='+')||(value.charAt(i)=='*')||(value.charAt(i)=='.')||(value.charAt(i)=='?')||(value.charAt(i)=='[')||(value.charAt(i)==']')||(value.charAt(i)=='(')||(value.charAt(i)==')')||(value.charAt(i)=='|')||(value.charAt(i)=='-')||(value.charAt(i)=='\\')))   
tmp+='\\'+value.charAt(i);
else tmp+=value.charAt(i);
var message=obj.actualMessage;
var re = new RegExp('\\\\@','g');
message=message.replace(re, '\027');
var re = new RegExp('@'+name,'g');
message=message.replace(re, tmp);
var re = new RegExp('\027','g');
message=message.replace(re, '\\@');
obj.actualMessage=message;
 	
}


 
// arriva un solo campo da validare alla volta,
// in genere una validazione puo' essere fatta su piu' campi

function messageObj(showfunction,type,form,field,code,label,message,controll,checkOnSubmit,checkOnField,otherFields,index)  {
	if (index==undefined) index=messageObjArray.length;
	if (otherFields==undefined) otherFields=new Array();
	this.field=field; 
	this.otherFields=otherFields;
	this.showFunction=showfunction;
	this.index=index;
	this.label=label;
	this.code=code;
	this.form=form;
	this.message=message;
	this.actualMessage=message;
	this.functionName=controll;
	this.validate=new Function(" return "+controll+"(messageObjArray["+index+"]); ");
	this.type=type;
	this.checkOnSubmit=(checkOnSubmit== undefined)?true:checkOnSubmit;
	this.checkOnField=(checkOnField== undefined)?true:checkOnField;
	this.disableValidationOnSubmit=false;
	this.disableValidationOnField=false;
	this.callShowFunction=true;
}

function validationResult()  {
	this.messageList=new Array();
	this.errorCount=0;
	this.warningCount=0;
	this.normalCount=0;
	this.confirmCount=0;
}


function addEventPreValidate(f){
   preValidateEvents[preValidateEvents.length]=f;	
}

function addEventPostValidate(f){
   postValidateEvents[postValidateEvents.length]=f;	
}

function clearMessages(form) {
 var tmp= array();
 if (form!=undefined)  for(var i=0;i< messageObjArray.length; i++) if (messageObjArray[i].form==form) tmp[tmp.length]=messageObjArray[i];
 return tmp; 
}

function addValidationObject(m) {

 messageObjArray = messageObjArray[messageObjArray.length]=m;
}

function getValidation(field,type,code){
 found=false;
 for(var i=0;i< messageObjArray.length; i++){ 
	 var found1=(messageObjArray[i].field==field);
	 if (!found1) continue;
	 var found2=true;
	 var found3=true;
	 if (found2!=undefined) found2=(messageObjArray[i].type==type);
	 if (found3!=undefined) found3=(messageObjArray[i].code==code);
	 var found= found1 && found2 && found3;
	 if (found) return messageObjArray[i];
}	
 return false;
}


 
function trim(stringa){
    while ((stringa.substring(0,1) == ' ')||(stringa.substring(0,1) == '\n')||(stringa.substring(0,1) == '\r')||(stringa.substring(0,1) == '\t')){
        stringa = stringa.substring(1, stringa.length);
    }
    while ((stringa.substring(stringa.length-1, stringa.length) == ' ')||(stringa.substring(0,1) == '\n')||(stringa.substring(0,1) == '\r')||(stringa.substring(0,1) == '\t')){
        stringa = stringa.substring(0,stringa.length-1);
    }
    return stringa;
}

function validateOnSubmitAll(o){
     var multiple_submit=false;
     //if ((CHECK_REPEATED_SUBMIT)&&(submitCount>=1)) multiple_submit=true;
     
     for (var i=0;i<preValidateEvents.length;i++) preValidateEvents[i]();  
     //if (multiple_submit) return false;
     if (!toValidateOnSubmit) return toSubmit;
     
     if (o== undefined) o=new validationResult();
     
     // il messaggio unico per tutti i campi swiftstringbundle (corrisponde al messaggio in properties)
     var swiftStringBundleMessage = '';
     var almenoUnErroreSwiftBundle = false;
     var lastFieldInErrorIndex = 0;
     for(var i=0;i< messageObjArray.length; i++) 
     { 
	     if ((toValidateOnSubmit)&&(messageObjArray[i].checkOnSubmit)&&(messageObjArray[i].disableValidationOnSubmit==false)) 
	      { 
	     	var msg = messageObjArray[i].message;
            // il problema e' che la seconda volta che arriva si trova messaggio settato a Contiene caratteri non ammessi
            // e quindi non e' + riconosciuto come bundleswift
	     	var fieldIsSwiftBundle = (msg.indexOf('&SWIFTSTRINGBUNDLE') == 0);
	     	//console.log('fieldIsSwiftBundle= '+fieldIsSwiftBundle);
		    //messageObjArray[i].message = (fieldIsSwiftBundle) ? msg;
		    messageObjArray[i].actualMessage = (fieldIsSwiftBundle) ? 'Contiene caratteri non ammessi' : msg;
	     	if( !messageObjArray[i].validate() ) {
		    	if (fieldIsSwiftBundle) {
			     	almenoUnErroreSwiftBundle = true;
                    /*
			    	console.log('      type=    '+messageObjArray[i].type);
			    	console.log('      label=   '+messageObjArray[i].label);
			    	console.log('      code=    '+messageObjArray[i].code);
			    	console.log('      field=   '+messageObjArray[i].field);
			    	console.log('      message= '+messageObjArray[i].message);
                    */
                    swiftStringBundleMessage = msg.substring(18);
		    	}
	    		if (messageObjArray[i].callShowFunction) o.messageList[o.messageList.length]=messageObjArray[i];
	    		if (messageObjArray[i].type==ERROR) o.errorCount++;
	    		if (messageObjArray[i].type==WARNING) o.warningCount++;
	    		if (messageObjArray[i].type==NORMAL) o.normalCount++;
	    		if (messageObjArray[i].type==CONFIRM) o.confirmCount++;
	    		lastFieldInErrorIndex = i;
		    }
		 } 
	 }
	    
     
     if (almenoUnErroreSwiftBundle) {
    	messageObjArray[lastFieldInErrorIndex].actualMessage = messageObjArray[lastFieldInErrorIndex].actualMessage + '\n\n' + trim(swiftStringBundleMessage);
     }
    for (var i=0;i<postValidateEvents.length;i++) postValidateEvents[i]();
    if (o.errorCount==0 && o.confirmCount==0) submitCount++;
    if ((CHECK_REPEATED_SUBMIT)&&(submitCount>1)) return false;
  	
    if (!toValidateOnSubmit) return toSubmit;
    return o.errorCount==0;
}

// manca la gestione multi form

function validateOnFieldAll(){
     // trovo campi univoci 
     var fieldToValidate= new Array();
     for(var i=0;i< messageObjArray.length; i++){ 
	     var found = false;
    	 for(var j=0;j< fieldToValidate.length; j++)  if ((fieldToValidate[j]==messageObjArray[i].field)&&(messageObjArray[j].checkOnField)) { found = true; break; }
	 	 if (!found) fieldToValidate.push(messageObjArray[i].field); 
	}     

     for(var i=0;i< fieldToValidate.length; i++){ 
	     var bodyFunctionOnChange="var isOK = true;\nvar validation=true;";
	     var bodyFunctionOnFocus="var isOK = true;\nvar validation=true;";
	     var onFocusCount=0;
	     var onChangeCount=0;  
	     for(var j=0;j<  messageObjArray.length; j++) {
	         if  (!toValidateOnField) break; 
		     if ((fieldToValidate[i]==messageObjArray[j].field)&&(messageObjArray[j].checkOnField))  { 
		               
		        
			    
			     var bodyFunction=" messageObjArray["+j+"].actualMessage=messageObjArray["+j+"].message;\nvalidation = (messageObjArray["+j+"].disableValidationOnField)?true:messageObjArray["+j+"].validate();\n";
			     bodyFunction+="if ( (!validation) && (messageObjArray["+j+"].callShowFunction)) { \n messageObjArray["+j+"].showFunction(messageObjArray["+j+"].label,messageObjArray["+j+"].actualMessage);\n";
				 //if (messageObjArray[j].checkOnField==CHECK_ON_FOCUS) bodyFunction+="document.getElementById('"+fieldToValidate[i].id+"').focus();\n";
				 // baco da sistemare non si posiziona su casella corretta 
				 if (messageObjArray[j].checkOnField==CHECK_ON_FOCUS) bodyFunction+="this.focus();\n";
				 bodyFunction+=" }\n";
			     bodyFunction+=" isOK = isOK && validation;\n";
		         if (messageObjArray[j].checkOnField==CHECK_ON_FOCUS){
		          onFocusCount++;
		          bodyFunctionOnFocus+=bodyFunction;
		          }
		         else {
		          onChangeCount++;
		          bodyFunctionOnChange+=bodyFunction; 
		         } 
		     } 
	     }
	     bodyFunctionOnChange+="return true; ";
	     bodyFunctionOnFocus+= "return isOK; "; 
	     var functionBl = new Function(bodyFunctionOnFocus);
	     var functionCh = new Function(bodyFunctionOnChange);
	 	 //if (onFocusCount>0)  fieldToValidate[i].onblur=function() {return functionBl(fieldToValidate[i]); } ;
	 	 if (onFocusCount>0)  fieldToValidate[i].onblur=functionBl;
	 	 if (onChangeCount>0) fieldToValidate[i].onchange= functionCh; 
	 	 
	}     

     
 
}
function addValidation(func,form,e,label,errorText,condition,onsubmit,onchange,otherFields) {
    try {
        var formObj=document.getElementById(form);
         
        var nameField;
         if ((typeof(formObj.elements[e]) == 'object') && (formObj.elements[e].length) && (formObj.elements[e].type!='select-one'))
         {      // modifica per permettere alla validazione di accettare i campi composti da vettori
         	nameField=formObj.elements[e][0].name.toString();
         }
         else 
         {
         	nameField=formObj.elements[e].name.toString();
         }
        
        var nameForm=formObj.name;
        var errorCode=-1;
        var labelString=document.getElementById(label).innerHTML.toString().replace(new RegExp(/(\n)|(\t)|(\r)/g),'');
		labelString=trim(labelString);
		errorText=trim(errorText);
		errorType=ERROR;
		//aggiunta la parte relativa ai messaggi di conferma
		var rxp = /^@(ERROR|WARNING|NORMAL|CONFIRM)(\(([1-9]{0,1}[0-9]+)\)){0,1} ((.|\n)*)$/i,
        res = errorText.match(rxp);
        //alert(errorText );
		if (res!=null)  { 
			
			if (res[3]) errorCode= parseInt(res[3]);
			
			errorTypeStr=res[1].toUpperCase();
			//alert(errorTypeStr );
			
			//logica aggiunta relativa ai messaggi di conferma
			if (errorTypeStr=='ERROR') errorType=ERROR; 
			else if (errorTypeStr=='WARNING') errorType=WARNING; 
			else if (errorTypeStr=='NORMAL') errorType=MESSAGE;
			else if (errorTypeStr=='CONFIRM') errorType=CONFIRM;  
			else alert ('The type of message ('+errorTypeStr+') is unknown'); 
			errorText=errorText.substring(errorText.indexOf(' ')+1);
			errorText = ' ' + errorText;
		}
		
        onsubmit=(onsubmit==undefined)?true:onsubmit;
        onchange=(onchange==undefined)?true:onchange;
		
		//errorText=errorText.replace(new RegExp(/\\/g),"\\").replace(new RegExp(/\"/g),"\\\"").replace(new RegExp(/\n/g),"\\n");
		if((typeof(formObj.elements[e]) == 'object') && (formObj.elements[e].length) && (formObj.elements[e].type!='select-one'))
		{
			messageObjArray[messageObjArray.length]=new messageObj(func,errorType,formObj,formObj.elements[e][0],errorCode,trim(labelString),trim(errorText),condition,onsubmit,onchange,messageObjArray.length,otherFields);
		}
		else
		{
			messageObjArray[messageObjArray.length]=new messageObj(func,errorType,formObj,formObj.elements[e],errorCode,trim(labelString),trim(errorText),condition,onsubmit,onchange,messageObjArray.length,otherFields);
		}
        
     
        
        
    } catch (ex) {
        alert("form="+form+"\nformObj="+formObj+"\ne="+e+"\nlabel="+label+"\n  "+ex);
    }
}
