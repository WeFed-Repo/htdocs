<?php
$mono = (isset($_GET['mono']) && $_GET['mono'] == "true");
$numInt = $mono? 1 : 3;
?>


<div class="row">
    <div class="col-md-12">
        <h2>Inserisci i dati personali</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <p>Inserisci i campi dei tuoi dati personali per procedere all'apertura del conto corrente.</p>
    </div>
</div>

<form id="aolStep1" action="#" method="POST">

<div class="row">
                    <div class="col-sm-12 form-section-title">
                        <h4>2.Inserisci i dati del tuo documento di identit&agrave;</h4>
                    </div>
                </div>
                
                <div class="modulo-doc">
                <div class="row">
        <div class="col-md-6 form-group">
            <label for="gg_nascita_int1">Data nascita*</label>
            <div class="input input-inline input-date">
                <input type="tel" pattern="\d+" placeholder="gg" maxlength="2" name="gg_nascita_int1" id="gg_nascita_int1" value="" class="textinput form-control nascGg ignore">
                <div class="nascSl">/</div>
                <input type="tel" pattern="\d+" placeholder="mm" maxlength="2" name="mm_nascita_int1" id="mm_nascita_int1" value="" class="textinput form-control nascGg ignore">
                <div class="nascSl">/</div>
                <input type="tel" pattern="\d+" placeholder="aaaa" maxlength="4" name="aa_nascita_int1" id="aa_nascita_int1" value="" class="textinput form-control nascAn ignore">
                <input type="text" name="nascita_int1" id="nascita_int1" class="hidden-input">
            </div>
        </div>
        <div class="spacer-no-border hidden-xs">&nbsp;</div>
        <div class="col-md-6 form-group">
            <label for="sesso">Sesso*</label>
            <br>
            <div class="radio radio-inline">
                <input type="radio" name="sesso_int1" id="sesso_int1a" value="Maschio">
                <label for="sxm">M</label>
            </div>
            <div class="radio radio-inline">
                <input type="radio" name="sesso_int1" id="sesso_int1b" value="Femmina">
                <label for="sxf">F</label>
            </div>
        </div>
    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="tipo_doc_int1">Tipo di documento*</label>
                            <select name="tipo_doc_int1" id="tipo_doc_int1" class="form-control" data-modulo-doc="tipo-documento">
                               <option selected value="">Seleziona il tipo di documento</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="numero_doc_int1" data-modulo="doc-numero">Numero*</label>
                            <input type="text" placeholder="Inserisci il numero del documento" maxlength="16" name="numero_doc_int1" id="numero_doc_int1" value="" class="textinput form-control">
                        </div>
                    </div>
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="gg_emissione_int1"data-modulo="doc-rilascio">Data di rilascio/rinnovo*</label>
                            <div class="input input-inline input-date">
                                <input type="tel" pattern="\d+" placeholder="gg" maxlength="2" name="gg_emissione_int1" id="gg_emissione_int1" value="" class="textinput form-control nascGg ignore">
                                <div class="nascSl">/</div>
                                <input type="tel" pattern="\d+" placeholder="mm" maxlength="2" name="mm_emissione_int1" id="mm_emissione_int1" value="" class="textinput form-control nascGg ignore">
                                <div class="nascSl">/</div>
                                <input type="tel" pattern="\d+" placeholder="aaaa" maxlength="4" name="aa_emissione_int1" id="aa_emissione_int1" value="" class="textinput form-control nascAn ignore">
                                <input type="text" name="emissione_int1" id="emissione_int1" class="hidden-input">
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="gg_scadenza_int1" data-modulo="doc-scadenza">Data di scadenza*</label>
                            <div class="input input-inline input-date">
                                <input type="tel" pattern="\d+" placeholder="gg" maxlength="2" name="gg_scadenza_int1" id="gg_scadenza_int1" value="" class="textinput form-control nascGg ignore">
                                <div class="nascSl">/</div>
                                <input type="tel" pattern="\d+" placeholder="mm" maxlength="2" name="mm_scadenza_int1" id="mm_scadenza_int1" value="" class="textinput form-control nascGg ignore">
                                <div class="nascSl">/</div>
                                <input type="tel" pattern="\d+" placeholder="aaaa" maxlength="4" name="aa_scadenza_int1" id="aa_scadenza_int1" value="" class="textinput form-control nascAn ignore">
                                <input type="text" name="scadenza_int1" id="scadenza_int1" class="hidden-input">
                            </div>
                        </div>
                    </div>
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="stato_emissione_int1">Paese di rilascio*</label>
                            <select name="stato_emissione_int1" id="stato_emissione_int1" class="form-control">
                                <option value="">seleziona</option>
                                <option value="ITALIA" selected="selected">ITALIA</option>
                                <option value="ABU DHABI">ABU DHABI</option>
                                <option value="AFGHANISTAN">AFGHANISTAN</option>
                                <option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
                                <option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
                                <option value="AJMAN">AJMAN</option>
                                <option value="ALBANIA">ALBANIA</option>
                                <option value="ALGERIA">ALGERIA</option>
                                <option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
                                <option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
                                <option value="ANDORRA">ANDORRA</option>
                                <option value="ANGOLA">ANGOLA</option>
                                <option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
                                <option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="provincia_emissione_int1">Provincia di rilascio*</label>
                            <select name="provincia_emissione_int1" id="provincia_emissione_int1" class="form-control">
                                <option value="">seleziona</option>
                                <option value="MI">MI</option>
                            </select>
                        </div>
                    </div>
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="comune_emissione_int1"data-modulo="doc-comune">Comune di rilascio*</label>
                            <select name="comune_emissione_int1" id="comune_emissione_int1" class="form-control">
                                <option value="">seleziona</option>
                                <option value="MILANO~20121~20162">MILANO</option>
                            </select>
                        </div>
                    </div>
                </div>
<!-- Pulsanti -->
<div class="row">
    <div class="col-xs-12">
        <div class="btn-console">
            <a class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
            <!--<button id="submitStep1" type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>-->
            <span id="btnSubmit"  class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</span>
         </div>
    </div>
</div>
<!-- Fine pulsanti -->

</form>

<!-- SCRIPT -->
<script type="text/javascript" src="/wbresp/js/aol/statiprovinciecomuni.js?a=415"></script>
<script type="text/javascript" src="/wbresp/js/aol/step1.js"></script>