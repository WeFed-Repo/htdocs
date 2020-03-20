
/*
crea una serie di select riempiendo ognuna con valori in base alla scelta della precedente
per usarla:
inserire le select nella pagina assicurandosi di dare ad ognuna un id formato da un prefisso + il livello
es prefisso 'sel_' livello 3, l'id sara' sel_3

creare una struttura dati in questo formato:

array bidimensionale  [ indice livello ]  [ identificativo elemento ] 
i cui elementi hanno le proprieta' 'text' e 'parent' (che corrisponde all'identificativo elemento)
esempio:
multidominiOptions[1]['1-1'] = {text: '1 1'};
multidominiOptions[1]['1-2'] = {text: '1 2'};
multidominiOptions[2]['2-1'] = {text: '2 1', parent: '1-1'};

istanziare l'oggetto multiselect
var multidominiSelects = new vantaggio.forms.cascadeSelects(multidominiOptions);

customizzare
multidominiSelects.ID_PREFIX = 'sel-';

per avere un messaggio di default (per la prima select):
multidominiSelects.USE_DEFAULT_MESSAGE = true;

per settare questo messaggio (altrimenti sara' quello di default):
multidominiSelects.DEFAULT_MESSAGE = 'dai, scegli!';

le select di livello superiore, avranno sempre all'inizio settato option di default

aggiungere gli eventi:
all'onload
multidominiSelects.initialSelectLoad()
e ad ogni select
onchange="multidominiSelects.onChangeMultiDominioSelect(2)
l'argomento e' il livello della select
TODO: sarebbe possibile ricavarlo nel metodo

per utilizzarlo x + blocchi di select
- creare le diverse strutture dati
- creare le varie select, ogni blocco con il suo prefix-id
- istanziare un oggetto x ogni blocco di select

    var aSelects = new vantaggio.forms.cascadeSelects(aOptions);
    aSelects.ID_PREFIX = 'sel-a-';
    aSelects.DEFAULT_MESSAGE = 'A) scegli';
    var bSelects = new vantaggio.forms.cascadeSelects(bOptions);
    bSelects.ID_PREFIX = 'sel-';
    bSelects.DEFAULT_MESSAGE = 'scegli';

- chiamare initialSelectLoad() per ogni oggetto
    window.onload = function () {
          bSelects.initialSelectLoad();
          aSelects.initialSelectLoad();
    }



*/


var vantaggio = vantaggio || {};
vantaggio.forms  = vantaggio.forms || {};
vantaggio.forms.cascadeSelects = function( data ) {
    this.data = data;
};

vantaggio.forms.cascadeSelects.prototype.ID_PREFIX = 'SELECT-';
vantaggio.forms.cascadeSelects.prototype.USE_DEFAULT_MESSAGE = false;
vantaggio.forms.cascadeSelects.prototype.DEFAULT_MESSAGE = ' choose an option';
vantaggio.forms.cascadeSelects.prototype.EMPTY_MESSAGE = '';

vantaggio.forms.cascadeSelects.prototype.clearSelect = function(selId) {
    //console.info('clear select '+selId )
    var selToClear = document.getElementById(selId);
    if (!selToClear) return;
    selToClear.length = 0;
    this.addEmptyOptionToSelect(selToClear);
}

// sel : select element
vantaggio.forms.cascadeSelects.prototype.addOptionToSelect = function(sel, opt)
{
    //console.info('add '+opt.value+' to select '+sel.id )
    var theOption = document.createElement("option");
    theText = document.createTextNode(opt.text);
    var val_array=opt.value.split("/");
    theOption.setAttribute("value", val_array[0]);
    theOption.appendChild(theText);
    sel.appendChild(theOption);
    //console.info(' select '+sel.id +' '+sel.length)
}

/*
 inserisce default option se richiesta
*/
vantaggio.forms.cascadeSelects.prototype.addConfigurableDefaultOptionToSelect = function(sel)
{
	if(this.USE_DEFAULT_MESSAGE){
    	this.addOptionToSelect(sel, {text: this.DEFAULT_MESSAGE, value: ''});
    }
}

/*
 inserisce default option senza considerare configurazione utente.
 serve x select di livello 2 o superiore
*/
vantaggio.forms.cascadeSelects.prototype.addEmptyOptionToSelect = function(sel)
{
	this.addOptionToSelect(sel, {text: this.EMPTY_MESSAGE, value: ''});
}

vantaggio.forms.cascadeSelects.prototype.fillSelect = function(level) {
    var sid = this.ID_PREFIX+level;
    //console.info('level: '+level);
    var sel = document.getElementById(sid);
    if (!sel) return;
    sel.length = 0;
    var val;
    var parentVal;
    if (level > 1) {
        //this.addEmptyOptionToSelect(sel);
        var parentSelect = document.getElementById(this.ID_PREFIX+(level-1));
        parentVal = parentSelect.options[parentSelect.selectedIndex].value;
    }
    var availableOptions = this.data[level];
    var valuefromDb = this.data.DbValues[level]
    var exclude = false;
    var count = 0;
    var index = 0;
    for (id in availableOptions) {
        var opt = availableOptions[id];
        var predef = false;
        var addOption = false;
        if(level > 1){
        	var val_array = parentVal.split("/");
        	if (opt.parent == val_array[0])
        		addOption = true;
        } else {
        	addOption = true;
        }
        if (addOption){
        	if (opt.defdom.charAt(0) == 'X'){
        		exclude = true;
        	}
        	if (opt.defdom.charAt(0) == 'V' || opt.defdom.charAt(0) == 'X'){
        		count++;
        		if(count == 1) 
        			predef = true;
        	}
        	this.addOptionToSelect(sel, {text: opt.text, value: id});
        	if(valuefromDb != '' && id.split("/")[0] == valuefromDb){
        		sel.options[index].defaultSelected = true;
        		sel.selectedIndex = index;
        	}
        	if (predef && valuefromDb == ''){
        		sel.options[index].defaultSelected = true;
        		sel.selectedIndex = index;
        	} 
			index++;
        }
    }
    if (sel.length == 1 && exclude){
    	lockFieldByID(sid,true);
    } else { 
    	lockFieldByID(sid,false);
    }
}

vantaggio.forms.cascadeSelects.prototype.onChangeMultiDominioSelect = function(level) {
    var chosenSelect = document.getElementById(this.ID_PREFIX+level);
    if (!chosenSelect) return;
    if (!chosenSelect.options[chosenSelect.selectedIndex]) return;
    var val = chosenSelect.options[chosenSelect.selectedIndex].value;
    var next = level + 1;
    var sid = this.ID_PREFIX+next;
    var sel = document.getElementById(sid);
    //console.info(sid+' ? '+sel)
    if (!sel){ return;}
    sel.length = 0;
    var availableOptions = this.data[next];
    var exclude = false;
    var count = 0;
    var index = 0;
    for (id in availableOptions) {
        var opt = availableOptions[id];
        var predef = false;
        //console.info(' - '+id + ' - ' + opt.text + ' - ' + opt.parent);
        var val_array = val.split("/");
        //console.info('opt.parent: "'+opt.parent + '" - val_array[0]: "' + val_array[0] + '"');
        if (opt.parent == val_array[0]) {
        	if (opt.defdom.charAt(0) == 'X'){
        		exclude = true;
        	}
        	if (opt.defdom.charAt(0) == 'V' || opt.defdom.charAt(0) == 'X'){
        		count++;
        		if(count == 1){ 
        			predef = true;
        		}
        	}
            this.addOptionToSelect(sel, {text: opt.text, value: id});
            if (predef){
        		sel.options[index].defaultSelected = true;
        	} 
			index++;
        }        
    }
    if (sel.length == 1 && exclude){
    	lockFieldByID(sid,true);
    } else { 
    	lockFieldByID(sid,false);
    }
    if (sel.length == 0) {
        this.addEmptyOptionToSelect(sel);
    }
    var len = this.data.length;
    for(var i = next+1; i < len; i++) {
        this.clearSelect(this.ID_PREFIX+i);
    }
}

vantaggio.forms.cascadeSelects.prototype.loadMultiDominioSelect = function(suffix, next, val) {
//    var chosenSelect = document.getElementById(this.ID_PREFIX+suffix);
 //   if (!chosenSelect) return;
 //   var val = chosenSelect.options[chosenSelect.selectedIndex].value;
//    var next = level + 1;
    var sid = this.ID_PREFIX+suffix;
    var sel = document.getElementById(sid);
    //console.info(sid+' ? '+sel)
    if (!sel) return;
    sel.length = 0;
    var availableOptions = this.data[next];
    for (id in availableOptions) {
        var opt = availableOptions[id];
        //console.info(' - '+id + ' - ' + opt.text + ' - ' + opt.parent);
        //var val_array = val.split("/");
        //console.info('opt.parent: "'+opt.parent + '" - val_array[0]: "' + val_array[0] + '"');
        if (opt.parent == val) {
            this.addOptionToSelect(sel, {text: opt.text, value: id});
        }
    }
    if (sel.length == 0) {
        this.addEmptyOptionToSelect(sel);
    }
}

vantaggio.forms.cascadeSelects.prototype.initialSelectLoad = function() {
    //console.info(' ___ initialSelectLoad '+this.ID_PREFIX)
    for (level in this.data) {
        //console.info(' --- level '+level)
        if (!isNaN(level))
        	this.fillSelect(level)
    }
}

