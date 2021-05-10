<script>
	var cgi_script = "/webankpub";
	var isCovid = true
	var dateCovidIni = "01/02/2020";
	var dateCovidEnd = "30/09/2021";
</script>

<!-- Template contatti -->
<div class="row">
    <div class="col-md-12">
        <h2>Richiedi apertura conto</h2>
    </div>
</div>
<div class="boxalert">
    <div class="boxcont">
        <p>Per aprire Conto Webank devi avere <strong>residenza in Italia</strong> ed essere <strong>maggiorenne</strong>.</p>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 form-section-title">1. A chi vuoi intestare il conto?</div>
</div>
<div class="spacer-no-border hidden-xs">&nbsp;</div>
<form id="aolStep0" action="/webankpub/aol/step1.do?BV_UseBVCookie=Yes&fromPageName=0&save=true" method="POST" class="validate">
    <input type="hidden" name="presaVisione" id="presaVisione" value="" />
    <div class="row">
        <div class="col-md-6">
            <select name="num_intestatari" id="num_intestatari" class="form-control" >
                <option value="1" selected>solo a me</option>
                <option value="2" >a me e a un'altra persona</option>
                <option value="3" >a me e ad altre due persone</option>
            </select>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 form-section-title">2. Inserisci i tuoi dati</div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="nome_int1" class="labelTooltip">Nome*</label> 
            <a href="javascript:;" data-toggle="tooltip" title="" id="ttNome" class="icoinfo" data-original-title="Scrivi il tuo nome per esteso, come &egrave; scritto sul documento di identit&agrave;"></a>
            <input type="text" placeholder="Nome completo (es: Maria Luisa Chiara)" name="nome_int1" id="nome_int1" value="" class="textinput form-control soloNome" required >
        </div>
        <div class="col-md-6 form-group">
            <label for="cognome_int1" class="labelTooltip">Cognome*</label>
            <a href="javascript:;" data-toggle="tooltip" title="" id="ttCognome" class="icoinfo" data-original-title="Scrivi il tuo cognome per esteso, come &egrave; scritto sul documento di identit&agrave;"></a>
            <input type="text" placeholder="Cognome completo (es: De luca)" name="cognome_int1" id="cognome_int1" value="" class="textinput form-control soloNome" required >
        </div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="gg_nascita_int1">Data di nascita*</label>
            <div class="input input-inline input-date">
                <input type="tel" pattern="\d+" placeholder="gg" maxlength="2" name="gg_nascita_int1" id="gg_nascita_int1" value="" class="textinput form-control nascGg ignore" >
                <div class="nascSl">/</div>
                <input type="tel" pattern="\d+" placeholder="mm" maxlength="2" name="mm_nascita_int1" id="mm_nascita_int1" value="" class="textinput form-control nascGg ignore" >
                <div class="nascSl">/</div>
                <input type="tel" pattern="\d+" placeholder="aaaa" maxlength="4" name="aa_nascita_int1" id="aa_nascita_int1" value="" class="textinput form-control nascAn ignore" >
                <input type="text" name="nascita_int1" id="nascita_int1" class="hidden-input" value="">
            </div>
        </div>
        <div class="col-md-6 form-group">
            <label>Sesso*</label> <br>
            <div class="radio radio-inline">
                <input type="radio" name="sesso_int1" id="sesso_int1a" value="M"  > <label for="sesso_int1a">M</label>
            </div>
            <div class="radio radio-inline">
                <input type="radio" name="sesso_int1" id="sesso_int1b" value="F"  > <label for="sesso_int1b">F</label>
            </div>
        </div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="cod_fiscale_int1">Codice fiscale*</label>
            <input type="text" placeholder="16 caratteri" maxlength="16" name="cod_fiscale_int1" id="cod_fiscale_int1" value="" class="textinput form-control" >
        </div>
        <div class="col-md-6 form-group">
            <label for="mail_int1" class="labelTooltip">Email*</label>
            <a href="javascript:;" data-toggle="tooltip" title="" id="ttEmail" class="icoinfo" data-original-title="Riceverai l'email con il codice per completare la richiesta di apertura di Conto Webank."></a>
            <input type="email" placeholder="Es. email@esempio.it" name="mail_int1" id="mail_int1" value="" class="textinput form-control" >
        </div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-md-6 form-group input-tel">
            <label for="telefono_3_int1" class="labelTooltip">Numero di cellulare*</label>
            <a href="javascript:;" data-toggle="tooltip" title="" id="ttCell" class="icoinfo" data-original-title="0039 &egrave; il prefisso internazionale per l'Italia.<br><br>Riceverai l'SMS con il codice per completare la richiesta di apertura di Conto Webank."></a>
            <div class="input input-inline">
                <input type="tel" maxlength="5" name="pref_intern_3_int1" id="pref_intern_3_int1" value="0039" class="textinput form-control numPref ignore" placeholder="Prefisso" > 
                <input type="tel" maxlength="10" name="telefono_3_int1" id="telefono_3_int1" value="" class="textinput form-control numCell ignore" placeholder="Senza spazi, barre o trattini" > 
                <input type="tel" name="tel_3_int1" id="tel_3_int1" class="hidden-input"  value="">
            </div>
        </div>
        <div class="col-md-6 form-group">
            <label for="operatore_int1">Operatore*</label> 
            <select name="operatore_int1" id="operatore_int1" class="form-control">
                <option value="">Seleziona</option>
                    <option value="WIND" >Wind</option>
                    <option value="VODAF" >Vodafone</option>
                    <option value="TRE" >Tre</option>
                    <option value="TIM" >Tim</option>
                    <option value="POSTE" >Poste Mobile</option>
                    <option value="COOP" >Coop Voce</option>
                    <option value="UNO" >Uno Mobile</option>
                    <option value="MTV" >Mtv Mobile</option>
                    <option value="ILIAD" >Iliad</option>
                    <option value="FASTWEB" >Fastweb Mobile</option>
                    <option value="DAILY" >Daily Telecom Mobile</option>
                    <option value="CONAD" >Conad Insim</option>
                    <option value="BT" >BT Mobile</option>
                    <option value="AMOBILE" >A-Mobile</option>
                    <option value="ALTRO" >Altro...</option>
            </select>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 form-section-title">3. Indica se hai un codice promozione o convenzione</div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="cod_prom_conv">Codice convenzione</label>
            <input type="tel" placeholder="opzionale" maxlength="10" name="cod_prom_conv" id="cod_prom_conv" value="" class="textinput form-control" >
        </div>
        <div class="col-md-6 form-group">
            <label for="cod_promotore">Codice promotore</label>
            <input type="tel" placeholder="opzionale" maxlength="10" name="cod_promotore" id="cod_promotore" value="" class="textinput form-control">
        </div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="cod_presentatore">Codice presentatore</label>
            <input type="tel" placeholder="opzionale" maxlength="18" name="cod_presentatore" id="cod_presentatore" value="" class="textinput form-control">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 form-section-title">4. Leggi l'informativa sul trattamento dei dati personali</div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-sm-12">
            <p>Prendi visione dell'informativa: per procedere occorre aprire il documento.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <a id="lnkInformativa" href="/webankpub/common/apriDocumento.do?isPDF=true&id=66" class="ico-pdf" target="_blank">Informativa sul trattamento dei dati personali*</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="checkbox check-inline">
                <input type="checkbox" name="informativaPrivacy" id="informativaOK" value="1" class="ignore">
                <input type="checkbox" name="informativaKO" id="informativaKO" class="hidden-input">
                <input type="checkbox" name="informativaDis" id="informativaDis" disabled >
                <label for="informativaOK">
                Dichiaro di aver letto attentamente l'informativa disponibile su documento elettronico (supporto durevole), di averne compreso e salvato il contenuto.</label>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <p>
                Esprimi la tua preferenza per:
            </p>
        </div>
    </div>
   <div class="row">
        <div class="col-sm-12">
            <p id="CONS_PRIV_GRUPPO">il trattamento dei miei dati a fini di ricerche di mercato, informazione commerciale, offerte dirette di prodotti o servizi della Banca e/o del Gruppo Banco BPM</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consGruppo" id="consGruppoSi" value="0" >
                <label for="consGruppoSi">Acconsento</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consGruppo" id="consGruppoNo" value="1" >
                <label for="consGruppoNo">Non acconsento</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p id="CONS_PRIV_PROFILAZIONE">il trattamento dei miei dati a fini di elaborazione di informazioni che consentano di analizzare preferenze, abitudini, scelte di consumo (profilazione), onde individuare prodotti e servizi in linea con i miei interessi</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consProf" id="consProfSi" value="0" >
                <label for="consProfSi">Acconsento</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consProf" id="consProfNo" value="1" >
                <label for="consProfNo">Non acconsento</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p id="CONS_PRIV_COMMERC_TERZI">il trattamento dei miei dati a fini di rilevazione della qualità dei servizi erogati, ricerche di mercato, informazione commerciale, offerte dirette di prodotti o servizi di società terze</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consCommTerz" id="consCommTerzSi" value="0" >
                <label for="consCommTerzSi">Acconsento</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consCommTerz" id="consCommTerzNo" value="1" >
                <label for="consCommTerzNo">Non acconsento</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p id="CONS_PRIV_DATI_TERZI">la comunicazione, da parte della Banca, dei miei dati a società terze a fini di rilevazione della qualità dei servizi erogati, ricerche di mercato, informazione commerciale, offerte dirette di loro prodotti o servizi</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consDatiTerz" id="consDatiTerzSi" value="0" >
                <label for="consDatiTerzSi">Acconsento</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consDatiTerz" id="consDatiTerzNo" value="1" >
                <label for="consDatiTerzNo">Non acconsento</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p id="CONS_PRIV_DATI_SENSIBILI">il trattamento di categorie particolari di dati (es. iscrizione a sindacati, partiti o altre associazioni, dati relativi alla salute), che potrebbero essere acquisiti dalla Banca per l’esecuzione di operazioni o di contratti.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consDatiSens" id="consDatiSensSi" value="0" >
                <label for="consDatiSensSi">Acconsento</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consDatiSens" id="consDatiSensNo" value="1" >
                <label for="consDatiSensNo">Non acconsento</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p class="obbligatorio">
                <br>(*) I campi contrassegnati con l'asterisco sono obbligatori</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <button id="btnSubmit" type="button" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>
        </div>
    </div>
</form>

<!-- Overlay -->
<div class="modal" id="alertpromo" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Attenzione</h4>
            </div>
            <div class="modal-body">
               Sei gi&agrave; correntista del Banco BPM.<br>Non &egrave; possibile attivare la promozione/convenzione sul conto, saranno applicate le condizioni standard.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- Overlay  -->
<!-- SCRIPT -->
<script type="text/javascript" src="/wbresp/js/aol/step0.js"></script>


