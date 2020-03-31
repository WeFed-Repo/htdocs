function isO2nEmpty(s) {
  return ((s == null) || (s.length == 0));
}

function resetField(fieldName) {
	
	var field = $('#'+fieldName);
	if (field.val() != "") {
		field.val("");
	}
}

function generateSubmit(formName, forwardPage, action, index, subIndex) {
	
	$("#forwardPage").val(forwardPage);
	$("#action").val(action);
	$("#index").val(index);
	$("#subIndex").val(subIndex);
	document.forms[formName].submit();
}

function getO2nValueFromForm(f, n) {
  var ip = getO2nInputObjectFromForm(f,n);
  if (null != ip)
    return getO2nValueFromInputObject(ip);
  else
    return null;
}

function executeSubmit(form, fieldName, fieldValue, emptyFields) {
	
	if (emptyFields) {
		alert("Occorre valorizzare i campi evidenziati per salvare questa versione del catalogo");
	}
	else {
		$('#'+fieldName).val(fieldValue);
		form.submit();
	}
}

function getO2nInputObjectFromForm(f, n){
  var len = f.elements.length;
  for(i = 0; i < len; i++){
    if (f.elements[i].name == n){
      if (f.elements[i].type.toLowerCase() == "radio") {
        if (f.elements[i].checked)
          return f.elements[i];
        else
          continue;
      }// if
      else {
        // Allow null value
        if(isO2nEmpty(f.elements[i].value))
          return null;
        return f.elements[i];
      }// else - not radio
    }// if  - name match
  }// for
  return null;
}

function getO2nValueFromInputObject(i){
  if (null == i) return null;
  if ((i.type.toLowerCase() == "select-one") ||
      (i.type.toLowerCase() == "select-multiple")) {
    return i.options[i.selectedIndex].value;
  }// if
  else {
    return i.value;
  }// else
}
