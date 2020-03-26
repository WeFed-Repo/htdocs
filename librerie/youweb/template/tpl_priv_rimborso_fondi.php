<div class="breadcrumb"><span>Investimenti</span><span>Fondi</span></div>
<div class="visible-print-block"> <img src="/HT/fe/img/logo_bancobpm@2x.png" title="Torna all'homepage" alt="Torna all'homepage">
  <div class="pull-right">09/02/2018</div>
</div>
 
<script language="Javascript" type="text/javascript">

//se seleziono rimborso totale setto i campi quote con il totale delle quote da rimborsare
//e disabilito gli importi
$(function(){
for(i = 1; i <= parseInt($('#dimensioneCollezione').val()); i++) {
tipoRimborso(i, false);
}
});
 
  function init() {
for(i = 1; i <= parseInt($('#dimensioneCollezione').val()); i++) {
$('#numeroQuoteRimborsoInt'+i).val('');
$('#numeroQuoteRimborsoDec'+i).val('');
$('#importoRimborsoInt'+i).val('');
$('#importoRimborsoDec'+i).val('');
}
} 
 
function tipoRimborso(i, azzera) {
$('#estinzionePAC').hide();
if (document.getElementById('optTotale'+i).selected==true) {
var quoteTot = $('#numQuote'+i).val();
var quotaInt;
var quotaDec;
 
var strQuoteTotSplit = quoteTot.split(".");
if (strQuoteTotSplit.length == 1) {
//solo la parte intera
quotaInt = strQuoteTotSplit[0];
quotaDec = '000';
} else {
//anche parte decimale
quotaInt = strQuoteTotSplit[0];
quotaDec = strQuoteTotSplit[1].slice(0,3);
}
 

$('#numeroQuoteRimborsoInt'+i).val(quotaInt);
$('#numeroQuoteRimborsoDec'+i).val(quotaDec);
 
 
var controVal = $('#quantitaEuro'+i).val();
var controValInt;
var controValDec;
 
var strControValSplit = controVal.split(".");
if (strControValSplit.length == 1) {
//solo la parte intera
controValInt = strControValSplit[0];
controValDec = '000';
} else {
//anche parte decimale
controValInt = strControValSplit[0];
controValDec = strControValSplit[1];
}
 
$('#importoRimborsoInt'+i).val(controValInt);
$('#importoRimborsoDec'+i).val(controValDec);
 
ricaricaValori(i);
 
$('#numeroQuoteRimborsoInt'+i).attr({disabled:true});
$('#numeroQuoteRimborsoDec'+i).attr({disabled:true});
$('#importoRimborsoInt'+i).attr({disabled:true});
$('#importoRimborsoDec'+i).attr({disabled:true});
 
estinzionePAC($('#numContratto'+i).val(), $('#'+i).data('tipo'), i);
 
/* if($('#'+i).data('tipo') == "A") {
$('#estinzionePAC').show();
        $('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",$('#numContratto'+i).val()));
} */
 
}

if (document.getElementById('optQuote'+i).selected==true) {
ricaricaValori(i);
if(!azzera) {
$('#numeroQuoteRimborsoInt'+i).val();
$('#numeroQuoteRimborsoDec'+i).val();
$('#importoRimborsoInt'+i).val();
$('#importoRimborsoDec'+i).val();
} else {
$('#numeroQuoteRimborsoInt'+i).val('');
$('#numeroQuoteRimborsoDec'+i).val('');
$('#importoRimborsoInt'+i).val('');
$('#importoRimborsoDec'+i).val('');
}
$('#numeroQuoteRimborsoInt'+i).attr({disabled:false});
$('#numeroQuoteRimborsoDec'+i).attr({disabled:false});
$('#importoRimborsoInt'+i).attr({disabled:true});
$('#importoRimborsoDec'+i).attr({disabled:true});
 
estinzionePAC($('#numContratto'+i).val(), $('#'+i).data('tipo'), i)
}
 
if (document.getElementById('optImporto'+i).selected==true) {
ricaricaValori(i);
if(!azzera) {
$('#numeroQuoteRimborsoInt'+i).val();
$('#numeroQuoteRimborsoDec'+i).val();
$('#importoRimborsoInt'+i).val();
$('#importoRimborsoDec'+i).val();
} else {
$('#numeroQuoteRimborsoInt'+i).val('');
$('#numeroQuoteRimborsoDec'+i).val('');
$('#importoRimborsoInt'+i).val('');
$('#importoRimborsoDec'+i).val('');
}
$('#numeroQuoteRimborsoInt'+i).attr({disabled:true});
$('#numeroQuoteRimborsoDec'+i).attr({disabled:true});
$('#importoRimborsoInt'+i).attr({disabled:false});
$('#importoRimborsoDec'+i).attr({disabled:false});
 
estinzionePAC($('#numContratto'+i).val(), $('#'+i).data('tipo'), i)
}
}

//se scrivo nel campo quote disabilito gli importi 
function DisabilitaImporto(i) {
if (document.getElementById('numeroQuoteRimborsoInt'+i).value != '') {
document.getElementById('importoRimborsoInt'+i).disabled = true;
document.getElementById('importoRimborsoDec'+i).disabled = true;
document.getElementById('importoRimborsoInt'+i).value = "";
document.getElementById('importoRimborsoDec'+i).value = "";
} else {
ricaricaValori(i);
document.getElementById('importoRimborsoInt'+i).disabled = false;
document.getElementById('importoRimborsoDec'+i).disabled = false;
}
} 

//se scrivo nel campo importi disabilito le quote
function DisabilitaQuote(i) {
document.getElementById('importoRimborsoInt'+i).value = trimSpaziECaratteri(document
.getElementById('importoRimborsoInt'+i).value);
if (document.getElementById('importoRimborsoInt'+i).value != '') {
document.getElementById('numeroQuoteRimborsoInt'+i).disabled = true;
document.getElementById('numeroQuoteRimborsoDec'+i).disabled = true;
document.getElementById('numeroQuoteRimborsoInt'+i).value = "";
document.getElementById('numeroQuoteRimborsoDec'+i).value = "";
} else {
ricaricaValori();
document.getElementById('numeroQuoteRimborsoInt'+i).disabled = false;
document.getElementById('numeroQuoteRimborsoDec'+i).disabled = false;
}
}

function ricaricaValori(i) {
if (document.getElementById('importoRimborsoInt'+i).value != ""
&& document.getElementById('importoRimborsoDec'+i).value == "") {
document.getElementById('importoRimborsoDec'+i).value = 0;
}
if (document.getElementById('numeroQuoteRimborsoInt'+i).value != ""
&& document.getElementById('numeroQuoteRimborsoDec'+i).value == "") {
document.getElementById('numeroQuoteRimborsoDec'+i).value = 0;
 
}
}

  function abilita() {
  var indice = document.getElementById('i').value;
document.getElementById('importoRimborsoInt'+indice).disabled = false;
document.getElementById('importoRimborsoDec'+indice).disabled = false;
document.getElementById('numeroQuoteRimborsoInt'+indice).disabled = false;
document.getElementById('numeroQuoteRimborsoDec'+indice).disabled = false;
} 
 
  function disabilitaOptions() {
  for(i = 1; i <= parseInt($('#dimensioneCollezione').val()); i++) {
  document.getElementById('opzioneRimborso'+i).disabled = true;
  document.getElementById('importoRimborsoInt'+i).disabled = true;
document.getElementById('importoRimborsoDec'+i).disabled = true;
document.getElementById('numeroQuoteRimborsoInt'+i).disabled = true;
document.getElementById('numeroQuoteRimborsoDec'+i).disabled = true;
  }
  }
</script>
<style>
.nopadding{
 
}
 
@media (min-width:1432px) {
#mainContent form[name="fondiRimborsoForm"]  .form-group.col-sm-12.col-lg-6 label[for="numeroQuoteRimborsoInt"] {
padding-bottom: 22px
}
}
 
@media (min-width: 1490px){
 
#mainContent form[name="fondiRimborsoForm"] .form-group.col-sm-12.col-lg-6 label[for="lopzioneRimborso"] {
    padding-bottom: 2px;
}
#mainContent form[name="fondiRimborsoForm"] .form-group.col-sm-12.col-lg-6 label {
margin-top: 0px;
}
#mainContent form[name="fondiRimborsoForm"] .form-group.col-sm-12.col-lg-6 label[for="numeroQuoteRimborsoInt"] {
    padding-bottom: 2px;
}
#mainContent form[name="fondiRimborsoForm"] .form-group.col-sm-12.col-lg-6 label {
margin-top: 0px;
}
 
}
</style>
<form name="fondiRimborsoForm" method="post" action="/WEBHT/investimenti/fondiRimborsoConferma.do" class="form-horizontal">
<div class="riquadro clearfix">
<div class="pager clearfix pull-right">
  <div class="circle_line">&nbsp;</div>
  <div class="circle current_page">&nbsp;</div>
  <div class="circle ">&nbsp;</div>
  <div class="circle ">&nbsp;</div>
</div>
<div style="margin-right:120px" class="clearfix">
<style>
.imgSrv{
float: none;
}
</style>
<h1><div class="hidden-print hidden-xxs flag investimenti">&nbsp;</div>
 
  <span>Rimborso</span>
 
</h1>
 
 


 
 
 
 
 
 
<div class="col-xs-12 hidden-xs hidden-print">
 









</div>
 
 
</div>

 







 


 







 



<div class="divForm section clearfix">
<div class="selezioneCC"> 
 
 
<h3 class="titleSection">









 

Dossier selezionato
 
 
 
 

</h3>
 
<div class="bs-example">
<div class="form-group">
    <div>
    <div class="form-field-resume col-xs-4">
    
    <label class="control-label">Dossier</label>
    <span class="resume">000000553157</span>
    </div>
    <div class="form-field-resume col-xs-4">     
        <label class="control-label">Filiale</label>
        <span class="resume">ARCORE - 0537</span>
      </div>
      <div class="form-field-resume col-xs-4">         
<label class="control-label">Intestazione</label>
<span class="resume">ROSSETTI STEFANO, FERRABOSCHI DANIELA</span>                 
</div>
</div> 
</div>
</div>
</div>
</div>



<div class="OUT2ColDiff section clearfix">
 
<h3 class="titleSection">









 

Dati fondo
 
 
 
 

</h3>
<div class="section clearfix">
<div class="bs-example">
<div class="form-group">
<div class="form-field-resume col-xs-6">
<label class="control-label">Fondo di rimborso</label>
<span class="resume">ANIMA EMERG MKTS CLASSE A CUMULATIVO (ISIN:IT0001415873)</span>
<label class="control-label">Conto corrente di appoggio</label> 
<span class="resume">000000005544</span>
<label class="control-label">Saldo disponibile sul c/c (in Euro)</label>
<span class="resume"> + 171.124,53
<input type="hidden" name="saldoDispo" value="171124.53">
</span>
</div>
<div class="form-field-resume col-xs-6">
<label class="control-label">Quote fondo presenti in dossier</label>
<span class="resume">594,345 <input type="hidden" name="quotaFondoTot" value="594.345000" id="quotaFondoTot"> </span>
<label class="control-label">Controvalore in Euro</label>
<span class="resume"> 7.906,571 <input type="hidden" name="controVal" value="7906.571" id="controVal"> </span>
<label class="control-label">Ultima quota/NAV</label> <span class="resume">12.461</span>
</div>
</div>
</div>
</div>
</div>

<div class="divForm section clearfix ">
  <input type="hidden" name="selezione" value="" id="selezione">
  <input type="hidden" name="selezioneImportoRimborsoInt" value="" id="selezioneImportoRimborsoInt">
  <input type="hidden" name="selezioneImportoRimborsoDec" value="" id="selezioneImportoRimborsoDec">
  <input type="hidden" name="selezioneNumeroQuoteRimborsoInt" value="" id="selezioneNumeroQuoteRimborsoInt">
  <input type="hidden" name="selezionenumeroQuoteRimborsoDec" value="" id="selezionenumeroQuoteRimborsoDec">
  <input type="hidden" name="selezioneOpzioneRimborso" value="PERQUOTE" id="selezioneOpzioneRimborso">
   
  <h3 class="titleSection">Rimborso</h3>
  <div class="bs-example">
   <div class="col-xs-12" style="margin-top:10px;">
      <div class="row">
          <div class="col-sm-5 " style="margin-top:10px;">
          <input type="radio" id="1" name="codiceContrattoSelezionato" value="1" style="float: left;" data-tipo="U">
          <input type="hidden" name="numQuote1" value="594.345000" id="numQuote1">
          <input type="hidden" name="quantitaEuro1" value="7906.571" id="quantitaEuro1">N.ro 594,345(7.906,571 €)</div>
          <div class="col-sm-7" style="margin-top:10px;">
            <input type="hidden" name="tipo1" value="U" id="tipo1">
              Saldo da acquisto singolo (PIC) - ROSSETTI STEFANO, FERRABOSCHI DANIELA
          </div>
      </div>
      <div class="row">
        <div class="form-field-input col-xs-4">
          <div class="col-xs-12"><label class="control-label" for="lopzioneRimborso">
          Tipo rimborso</label>
          </div>
          <div class="form-field col-xs-12">
            <select class="form-control" name="opzioneRimborso" onclick="tipoRimborso(1, true);" id="opzioneRimborso1" class=" width:90%; sfondoForm;" disabled=""><option value="PERQUOTE" id="optQuote1">PER QUOTE</option>
            <option value="PERIMPORTO" id="optImporto1">PER IMPORTO</option>
            <option value="TOTALE" id="optTotale1">TOTALE</option></select>
          </div>
        </div>
        <div class="form-field-input col-xs-4">
          <div class="col-xs-12">
          <label class="control-label" for="numeroQuoteRimborsoInt">
          N. quote da rimborsare</label>
          </div>
          <div class="form-field col-xs-12">
          <input type="text" name="numeroQuoteRimborsoInt" size="8" value="" onblur="DisabilitaImporto(1);" id="numeroQuoteRimborsoInt1" style="width:60%;float: left; text-align: right" class="form-control" disabled="">
          ,
          <input type="text" name="numeroQuoteRimborsoDec" maxlength="3" size="3" value="" id="numeroQuoteRimborsoDec1" style="width:20%;text-align: right" class="form-control" disabled="">
          </div>
        </div>
        <div class="form-field-input col-xs-4 ">
          <div class="col-xs-12">
          <label class="control-label" for="importoRimborsoInt">Imp. in € da rimborsare* </label>
          </div>
          <div class="form-field col-xs-12">
          <input type="text" name="importoRimborsoInt" size="8" value="" onblur="DisabilitaQuote(1);" id="importoRimborsoInt1" style="width:60%;float: left; text-align: right" class="form-control" disabled="">
          ,
          <input type="text" name="importoRimborsoDec" maxlength="3" size="3" value="" id="importoRimborsoDec1" style="width:20%;text-align: right" class="form-control" disabled="">
          </div>
        </div>
      </div>
      <input type="hidden" name="dimensioneCollezione" value="1" id="dimensioneCollezione">
   </div>
   <input type="hidden" name="i" value="" id="i">
    <label class="control-label">*La richiesta di rimborso verrà inviata sempre per numero di quote.</label>
    <hr class="separator">
     <h3 class="titleSection">AVVERTENZA</h3>
     <p>La presente rubrica PIR (rapporto PIR) &egrave; stata aperta dalla Casa di Gestione in capo al tuo codice fiscale contestualmente alla prima sottoscrizione del Fondo PIR che stai rimborsando. Ti ricordiamo che se nonchiudi il presente rapporto PIR in questo momento non ti sar&arave; consentito sottoscrivere un nuovo fondo PIR con un'altra Casa di Gestione.</p>
     <p><strong>Contestualmente al rimborso totale delle mie posizioni in PIR, richiedo l'estinzione del rapporto e la revoca del mandato PIR</strong><br>
     </p>
     <div class="form-field">
        <div class="col-xs-1">
            <input type="radio"> Si
        </div>
        <div class="col-xs-1">
           <input type="radio"> No
        </div>
    </div>

    <!--<div class="form-field-input col-xs-12">
       <div class="form-field">
          <div class="col-xs-12 margin-bottom10">
            <input type="checkbox" name="" value=""  id="">
            Estinzione del rapporto/Revoca mandato "PIR" (classe AP). Barrare in caso di consensuale estinzione del rapporto continuativo
          </div>
       </div>
    </div>-->
  </div>
</div>
<div id="estinzionePAC" style="display: none;">
<div class="divForm section clearfix">
 
<h3 class="titleSection">









 

Estinzione PAC
 
 
 
 

</h3>
<div class="bs-example">
 
<input type="hidden" name="messageEstinzione" value="Vuoi anche estinguere il PAC n.{0}?" id="messageEstinzione">
<p id="paramEstinzione" style="float: left"></p>
<div>
<label style="float: left; margin-top: 8px; margin-left: 20px; margin-right: 5px;">
SI
</label>
<input type="radio" name="estinzionePAC" value="Y" id="estinzionePACbutton" style="float:left; margin-top:10px;" class="control-label">
</div>
<div>
<label style="float: left; margin-top: 8px; margin-left: 20px; margin-right: 5px;">
NO
</label>
<input type="radio" name="estinzionePAC" value="N" id="estinzionePACbutton" style="float:left; margin-top:10px;" class="control-label">
</div>
</div>
</div>
</div>
</div>

 
<div class="actions pull-right ">
<input type="button" name="" value="Indietro" onclick="document.location.href = getPathContext() + '/investimenti/portafoglioFondi.do';" class="btn btn-primary">
<input type="submit" name="rimborso" value="Conferma" onclick="abilita();" class="button btn btn-primary">
</div>
 
</form>
<script>
$(document).ready(function() {
/* al caricamento della pagina */
$('#estinzionePAC').hide();
disabilitaOptions();
 
if($('#selezione').val() != "") {
var indice = 0;
for(i = 1; i <= parseInt($('#dimensioneCollezione').val()); i++) {
if($('#selezione').val() == $('#'+i).val()) {
indice = i;
}
}
attivazioneRiga(indice);
$('#i').val(indice);
$('#'+indice).attr('checked', true);
$('#numeroQuoteRimborsoInt'+indice).val($('#selezioneNumeroQuoteRimborsoInt').val());
$('#numeroQuoteRimborsoDec'+indice).val($('#selezionenumeroQuoteRimborsoDec').val());
$('#importoRimborsoInt'+indice).val($('#selezioneImportoRimborsoInt').val());
$('#importoRimborsoDec'+indice).val($('#selezioneImportoRimborsoDec').val());
$('#opzioneRimborso'+indice).val($('#selezioneOpzioneRimborso').val());
tipoRimborso(indice, false);
estinzionePAC($('#numContratto'+indice).val(), $('#tipo'+indice).val(), indice);
}

$("input:radio").click(function() {
if($(this).attr("name") == "codiceContrattoSelezionato") {
init();
disabilitaOptions();
$('#estinzionePAC').hide();
$('#estinzionePACbutton:checked').prop('checked', false)
 
var i = $(this).attr("id");
$('#i').val(i);
attivazioneRiga(i);
 
var numContratto = $('#numContratto'+i).val();
var tipo = $(this).data('tipo');
estinzionePAC(numContratto, tipo, i);
}
});
});


function scriviQuote(i) {
var quoteTot = $('#numQuote'+i).val();
var quotaInt;
var quotaDec;

var strQuoteTotSplit = quoteTot.split(".");
if (strQuoteTotSplit.length == 1) {
//solo la parte intera
quotaInt = strQuoteTotSplit[0];
quotaDec = '000';
} else {
//anche parte decimale
quotaInt = strQuoteTotSplit[0];
quotaDec = strQuoteTotSplit[1];
if(quotaDec.length > 3){
quotaDec = quotaDec.substring(0, 3);
}
}

$('#numeroQuoteRimborsoInt'+i).val(quotaInt);
$('#numeroQuoteRimborsoDec'+i).val(quotaDec);
}

function estinzionePAC(value, tipo, i) {
var importoEuro = $('#quantitaEuro'+i).val();
var numeroQuote = $('#numQuote'+i).val();
var opzione = $('#opzioneRimborso'+i).val();
 
if(tipo == "A") {
if(opzione == "TOTALE") {
$('#estinzionePAC').show();
        $('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",value));
} else if(opzione == "PERIMPORTO") {
var importoRimborsoInt = $("#importoRimborsoInt"+i).val();
var importoRimborsoDec = $("#importoRimborsoDec"+i).val();
 
if(parseFloat(importoRimborsoInt)+parseFloat("0." + importoRimborsoDec) == parseFloat(importoEuro)) {
        $('#estinzionePAC').show();
        $('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",value));
        scriviQuote(i);
        } 
 
$("input:text").live('change', function() {
var id = $(this).attr("id");
 
        if(id == "importoRimborsoInt"+i) {
        importoRimborsoInt = $(this).val();
        importoRimborsoDec = $("#importoRimborsoDec"+i).val();
        if(parseFloat(importoRimborsoInt)+parseFloat("0." + importoRimborsoDec) == parseFloat(importoEuro)) {
        $('#estinzionePAC').show();
        $('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",value));
        scriviQuote(i);
        } 
        }        
    });
$("input:text").live('change', function() {
var id = $(this).attr("id");
 
if(id == "importoRimborsoDec"+i) {
importoRimborsoDec = $(this).val();
importoRimborsoInt = $("#importoRimborsoInt"+i).val()
        if(parseFloat(importoRimborsoInt)+parseFloat("0." + importoRimborsoDec) == parseFloat(importoEuro)) {
        $('#estinzionePAC').show();
        $('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",value));
        scriviQuote(i);
        }  
        }  
    });
} else {
var quoteInt = $("#numeroQuoteRimborsoInt"+i).val();
var quoteDec = $("#numeroQuoteRimborsoDec"+i).val();
 
if(parseFloat(quoteInt)+parseFloat("0." + quoteDec) == parseFloat(numeroQuote)) {
        $('#estinzionePAC').show();
        $('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",value));
        scriviQuote(i);
        } 
 
$("input:text").live('change', function() {
var id = $(this).attr("id");
 
        if(id == "numeroQuoteRimborsoInt"+i) {
        quoteInt = $(this).val();
        quoteDec = $("#numeroQuoteRimborsoDec"+i).val();
        if(parseFloat(quoteInt)+parseFloat("0." + quoteDec) == parseFloat(numeroQuote)) {
        $('#estinzionePAC').show();
        $('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",value));
        scriviQuote(i);
        } 
        }        
    });
$("input:text").live('change', function() {
var id = $(this).attr("id");
 
if(id == "numeroQuoteRimborsoDec"+i) {
quoteDec = $(this).val();
quoteInt = $("#numeroQuoteRimborsoInt"+i).val()
        if(parseFloat(quoteInt)+parseFloat("0." + quoteDec) == parseFloat(numeroQuote)) {
        $('#estinzionePAC').show();
        $('#paramEstinzione').text($('#messageEstinzione').val().replace("{0}",value));
        scriviQuote(i);
        }  
        }  
    });
}
}
}

function attivazioneRiga(i) {
document.getElementById('opzioneRimborso'+i).disabled = false;
tipoRimborso(i, false);
}
</script>
