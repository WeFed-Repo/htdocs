<?php
$mono = (isset($_GET['mono']) && $_GET['mono'] == "true");
$numInt = $mono? 1 : 3;

if ($mono) {
	$intestatari = ["Mario Rossi"];
} else {
	$intestatari = ["Mario Rossi","Daniele Verdi","Ettore Bianchi"];
}
?>
<script>
    var prova ="ok";
</script>
<!-- TITOLO -->
<div class="row">
    <div class="col-xs-12">
        <h2>Identificazione con bonifico</h2>
    </div>
</div>
<!-- TITOLO -->
<!-- Intro -->
<div class="row">
    <div class="col-xs-12">
        <p>Inserisci i tuoidati del bonifico e del secondo documento d'identit&agrave; e quelli di tutti i cointestatari per procedere nell'apertura conto.</p>
    </div>
</div>
<!-- Fine intro -->
<form id="aolStep4_bonifico" action="" method="POST" class="validate">
    <div class="row">
        <div class="col-xs-12">
        	<?php if (!$mono): ?>
			<!-- INTESTAZIONE GRUPPO ACCORDION -->
            <div class="panel-group accordion-group" id="accordion" role="tablist" aria-multiselectable="true">
            <!-- FINE - INTESTAZIONE GRUPPO ACCORDION -->
            <?php endif; ?>

                <?php
					foreach ($intestatari as $key => $nome) {
				?>

				<?php if (!$mono): ?>
				<!-- INTESTAZIONE ACCORDION <?php print ($key + 1) ?> -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading<?php print ($key +1 ) ?>">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" href="#!" data-target="#collapse_int<?php print ($key +1 ) ?>" aria-controls="collapse_int<?php print ($key +1 ) ?>" class="<?php if($key>0) print (" collapsed "); ?>">
                                <?php print strtoupper($nome)?> - Inserisci il tuo codice IBAN e i dati del tuo secondo documento d'identit&agrave;</a>
                        </h4>
                        <p>Compila i campi del tuo IBAN e del tuo secondo documento d'identit&agrave;</p>
                    </div>
                    <div id="collapse_int<?php print ($key +1 ) ?>" class="panel-collapse collapse <?php if($key==0) print (" in "); ?>" role="tabpanel" aria-labelledby="heading<?php print ($key +1 ) ?>">
                        <div class="panel-body">
                <!-- FINE - INTESTAZIONE ACCORDION <?php print ($key + 1) ?> -->
                <?php endif; ?>

                            <!-- DATI DEL CODICE IBAN -->
                            <div class="row">
                                <div class="col-xs-12 form-section-title">
                                    <h4>1. Inserisci il codice IBAN</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>per completare la richiesta di apertura conto dovrai identificarti effettuando un <strong>bonifico bancario da 100,00&euro;</strong> da un conto intestato o cointestato a tuo nome.
                                        <br>Accrediteremo l'importo sul tuo nuovo Conto Webank.</p>
                                </div>
                            </div>
                           
                            <!-- FINE DEI DATI DEL CODICE IBAN -->
                            <div class="spacer-no-border">&nbsp;</div>
                            <hr>
                            <!-- SECONDO DOCUMENTO DI IDENTITA' -->
                            <div class="row">
                                <div class="col-xs-12 form-section-title">
                                    <h4>2. Inserisci i dati del secondo documento d'identit&agrave;*</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>Per completare l'identificazione con bonifico sar&agrave; necessario inserire i dati relativi ad un <strong>secondo documento d'identit&agrave;</strong>. Scegli una tra le due opzioni per <strong>proseguire</strong>.
                                        <br>
                                        <br> Se non hai a portata di mano un secondo documento d'identit&agrave;, la richiesta di apertura conto verr&agrave; comunque salvata, potrai riprendere il processo al link che ti verr&agrave; fornito nella email di riepilogo.
                                    </p>
                                </div>
                            </div>
                            <!-- Selettore -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="radio radio-inline radiosecondodoc">
                                            <div class="col-xs-12 col-md-6">
                                                <input type="radio" name="secondodoc_int<?php print ($key +1 ) ?>" id="secondodoc_int<?php print ($key +1 ) ?>a" value="si">
                                                <label for="secondosi_int<?php print ($key +1 ) ?>a">Ho un secondo documento d'identit&agrave; con me</label>
                                            </div>
                                            <div class="col-xs-12 col-md-6 form-group radio radio-inline">
                                                <input type="radio" name="secondodoc_int<?php print ($key +1 ) ?>" id="secondodoc_int<?php print ($key +1 ) ?>b" value="no">
                                                <label for="secondono_int<?php print ($key +1 ) ?>b">Non possiedo un secondo documento di identit&agrave;</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fine selettore -->
                            <div class="spacer-no-border hidden-xs">&nbsp;</div>
                            <div class="modulo-doc sidocumento" style="display:none">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="tipo_doc_int<?php print ($key +1 ) ?>">Tipo di documento*</label>
                                        <!--
									La select si popola AUTOMATICAMENTE: non occorre indicare opzioni.
									Nell'attributo DATA-NODOCS, indicare i valori delle opzioni da non includere nella select 
									in quanto filtrate rispetto al documento gia' inserito predecentemente.
									Tali valori devono essere separati da "pipe (|)". Di seguito' stata esemplificata la rimozione delle carte di identita'.

						        	-->
                                        <select name="tipo_doc_int<?php print ($key +1 ) ?>" id="tipo_doc_int<?php print ($key +1 ) ?>" class="form-control" data-modulo-doc="tipo-documento">
                                            <?php 
										if ($key == 0 ) { ?>
                                            <option value="">Seleziona il tipo di documento</option>
                                            <option value="cartaid-el">Carta d'identit&agrave; elettronica</option>
                                            <option value="cartaid-ri">Carta d'identit&agrave; rinnovata</option>
                                            <option value="cartaid-ca" selected>Carta d'identit&agrave; cartacea</option>
                                            <option value="passaporto">Passaporto</option>
                                            <?php 
										}
										else
										{?>
                                            <option selected value="">Seleziona il tipo di documento</option>
                                            <?php 
										}
										?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="numero_doc_int<?php print ($key +1 ) ?>" data-modulo="doc-numero">Numero*</label>
                                        <input type="text" placeholder="Inserisci il numero del documento" maxlength="16" name="numero_doc_int<?php print ($key +1 ) ?>" id="numero_doc_int<?php print ($key +1 ) ?>" value="" class="textinput form-control">
                                    </div>
                                </div>
                                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="gg_emissione_int<?php print ($key +1 ) ?>" data-modulo="doc-rilascio">Data di rilascio/rinnovo*</label>
                                        <div class="input input-inline input-date">
                                            <input type="tel" pattern="\d+" placeholder="gg" maxlength="2" name="gg_emissione_int<?php print ($key +1 ) ?>" id="gg_emissione_int<?php print ($key +1 ) ?>" value="" class="textinput form-control nascGg ignore">
                                            <div class="nascSl">/</div>
                                            <input type="tel" pattern="\d+" placeholder="mm" maxlength="2" name="mm_emissione_int<?php print ($key +1 ) ?>" id="mm_emissione_int<?php print ($key +1 ) ?>" value="" class="textinput form-control nascGg ignore">
                                            <div class="nascSl">/</div>
                                            <input type="tel" pattern="\d+" placeholder="aaaa" maxlength="4" name="aa_emissione_int<?php print ($key +1 ) ?>" id="aa_emissione_int<?php print ($key +1 ) ?>" value="" class="textinput form-control nascAn ignore">
                                            <input type="text" name="emissione_int<?php print ($key +1 ) ?>" id="emissione_int<?php print ($key +1 ) ?>" class="hidden-input">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="gg_scadenza_int<?php print ($key +1 ) ?>" data-modulo="doc-scadenza">Data di scadenza*</label>
                                        <div class="input input-inline input-date">
                                            <input type="tel" pattern="\d+" placeholder="gg" maxlength="2" name="gg_scadenza_int<?php print ($key +1 ) ?>" id="gg_scadenza_int<?php print ($key +1 ) ?>" value="" class="textinput form-control nascGg ignore">
                                            <div class="nascSl">/</div>
                                            <input type="tel" pattern="\d+" placeholder="mm" maxlength="2" name="mm_scadenza_int<?php print ($key +1 ) ?>" id="mm_scadenza_int<?php print ($key +1 ) ?>" value="" class="textinput form-control nascGg ignore">
                                            <div class="nascSl">/</div>
                                            <input type="tel" pattern="\d+" placeholder="aaaa" maxlength="4" name="aa_scadenza_int<?php print ($key +1 ) ?>" id="aa_scadenza_int<?php print ($key +1 ) ?>" value="" class="textinput form-control nascAn ignore">
                                            <input type="text" name="scadenza_int<?php print ($key +1 ) ?>" id="scadenza_int<?php print ($key +1 ) ?>" class="hidden-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                               
                                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                                
                            </div>
                            <!-- FINE SECONDO DOCUMENTO DI IDENTITA' -->
                            <!-- SECONDO DOCUMENTO DI IDENTITA': NON LO POSSEGGO -->
                            <div class="nodocumento" style="display:none">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>In alternativa, scegli uno dei documenti tra quelli elencati di seguito.
                                            <br> Dovrai allegarne una copia insieme alla documentazione da spedire.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 form-group">
                                        <label for="tipo_altrodoc_int<?php print ($key +1 ) ?>">Tipo di documento*</label>
                                        <select name="tipo_altrodoc_int<?php print ($key +1 ) ?>" id="tipo_altrodoc_int<?php print ($key +1 ) ?>" class="form-control">
                                            <option selected value="">Seleziona il tipo di documento</option>
                                            <option value="cartaid-el">Carta d'identit&agrave; elettronica</option>
                                            <option value="cartaid-ri">Carta d'identit&agrave; rinnovata</option>
                                            <option value="cartaid-ca" selected>Carta d'identit&agrave; cartacea</option>
                                            <option value="passaporto">Passaporto</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- FINE SECONDO DOCUMENTO DI IDENTITA': NON LO POSSEGGO -->
                            <div class="spacer-no-border hidden-xs">&nbsp;</div>

				<?php if (!$mono): ?>
				<!-- CHIUSURA ACCORDION <?php print ($key + 1) ?> -->
                        </div>
                    </div>
                </div>
                <!-- FINE - CHIUSURA ACCORDION <?php print ($key + 1) ?> -->
                <?php endif; ?>

                <?php
					}
				?>

        	<?php if (!$mono): ?>
			<!-- CHIUSURA GRUPPO ACCORDION -->
            </div>
			<!-- FINE - CHIUSURA GRUPPO ACCORDION -->
            <?php endif; ?>

        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <p class="note">(*)I campi contrassegnati con l'asterisco sono obbligatori</p>
        </div>
    </div>
    <!-- Pulsanti -->
    <div class="row">
        <div class="col-xs-12">
            <div class="btn-console">
                <a class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
                <!--<button type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>-->
                <span id="btnSubmit"  class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</span>
            </div>
        </div>
    </div>
    <!-- Fine pulsanti -->
</form>

<!-- SCRIPT -->
<script type="text/javascript" src="/wbresp/js/aol/step4_bonifico.js"></script>