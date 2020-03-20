<?php
$mono = (isset($_GET['mono']) && $_GET['mono'] == "true");
$numInt = $mono? 1 : 3;
?>
<!-- TITOLO -->
<div class="row">
    <div class="col-xs-12">
        <h2>Adempimenti legali</h2>
   	</div>
</div>
<!-- TITOLO -->

<form id="aolStep5">

<?php if (!$mono): ?>
<!-- INTESTAZIONE GRUPPO ACCORDION -->
    <div class="panel-group accordion-group" id="accordion" role="tablist" aria-multiselectable="true">
<!-- FINE - INTESTAZIONE GRUPPO ACCORDION -->
<?php endif; ?>


<?php for ($i = 1; $i <= $numInt; ++$i): ?>

    <?php if (!$mono): ?>
    <!-- INTESTAZIONE ACCORDION -->
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading_int<?php echo $i; ?>">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" href="#!" data-target="#collapse_int<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse_int<?php echo $i; ?>" class="<?php echo ($i == 1)? "" : "collapsed"; ?>">Normativa antiriciclaggio NOME COGNOME</a>
            </h4>
            <p>Compila i campi della normativa antiriciclaggio per il primo intestatario per procedere nell'apertura del conto corrente.</p>
        </div>
        <div id="collapse_int<?php echo $i; ?>" class="panel-collapse collapse<?php echo ($i == 1)? " in" : ""; ?>" role="tabpanel" aria-labelledby="heading_int<?php echo $i; ?>">
            <div class="panel-body">
    <!-- FINE - INTESTAZIONE ACCORDION -->
    <?php endif; ?>
				<div class="row">
                    <div class="col-sm-12 form-section-title">
                        <h4>1. Capitalizzazione periodica interessi</h4>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12 form-group">
						<p>Lorem ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit ipsum dolor sit</p>
					</div>
				</div>
				<div class="row">
                    <div class="col-sm-2 form-group">
                        <div class="radio radio-inline">
                            <input type="radio" name="politicEspostaAv_int<?php echo $i; ?>" id="politicEspostaAv_int<?php echo $i; ?>_S" value="si">
                            <label for="isbpmcliente_int<?php echo $i; ?>a">Autorizzo</label>
                        </div>
                    </div>
                    <div class="col-sm-10 form-group">
                        <div class="radio radio-inline">
                            <input type="radio" name="politicEspostaAv_int<?php echo $i; ?>" id="politicEspostaAv_int<?php echo $i; ?>_N" value="no">
                            <label for="isbpmcliente_int<?php echo $i; ?>b">Non autorizzo</label>
                        </div>
                    </div>						
				</div>
				<hr>
				
				
                <div class="row">
                    <div class="col-sm-12 form-section-title">
                        <h4>2. Questionario normativa antiriciclaggio</h4>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12 form-group">
						<label for="titeff_int<?php echo $i; ?>" class="labelTooltip">Titolare effettivo*</label>
						<a href="#!" data-toggle="tooltip" title="" id="ttNome" class="icoinfo" data-original-title="Per titolare effettivo si intende la persona fisica per conto della quale &egrave; realizzata un'operazione o un'attivit&agrave; (D.lgs n&deg;231/07)"></a>
						<div class="checkbox check-inline">
							<input type="checkbox" name="titolare_int<?php echo $i; ?>" id="titolare_int<?php echo $i; ?>" value="1">
							<label for="titolare_int<?php echo $i; ?>">Dichiaro di essere il Titolare effettivo del conto e di agire esclusivamente per conto mio.</label>
						</div>
					</div>
				</div>
				<div class="spacer-no-border hidden-xs">&nbsp;</div>
				<div class="row">
					<div class="col-md-12 form-group">
						<p><strong>Sei una persona politicamente esposta?*</strong></p>
						<p>Importante: prima di rispondere leggi la <a href="#!" class="persPol">definizione qui</a></p>
					</div>						
                    <div class="col-sm-2 form-group">
                        <div class="radio radio-inline">
                            <input type="radio" name="politicEspostaAv_int<?php echo $i; ?>" id="politicEspostaAv_int<?php echo $i; ?>_S" value="si">
                            <label for="isbpmcliente_int<?php echo $i; ?>a">S&Igrave;</label>
                        </div>
                    </div>
                    <div class="col-sm-10 form-group">
                        <div class="radio radio-inline">
                            <input type="radio" name="politicEspostaAv_int<?php echo $i; ?>" id="politicEspostaAv_int<?php echo $i; ?>_N" value="no">
                            <label for="isbpmcliente_int<?php echo $i; ?>b">No</label>
                        </div>
                    </div>						
				</div>
				<div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="usoConto_int<?php echo $i; ?>">Utilizzo del conto*</label>
                        <select name="usoConto_int<?php echo $i; ?>" id="usoConto_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="cittadinanza2Av_int<?php echo $i; ?>">Seconda cittadinanza</label>
                        <select name="cittadinanza2Av_int<?php echo $i; ?>" id="cittadinanza2Av_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                        </select>
                    </div>
                </div>
				<hr>
				 <div class="row">
                    <div class="col-sm-12 form-section-title">
                        <h4>3. Informazioni professionali e situazione patrimoniale </h4>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12 form-group">
						<label for="intestatario_int<?php echo $i; ?>">Intestatario</label>
						<span class="output">Mario Rossi</span>
					</div>
				</div>
				<div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="professioneAv_int<?php echo $i; ?>">Professione*</label>
                        <select name="professioneAv_int<?php echo $i; ?>" id="professioneAv_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="settoreAv_int<?php echo $i; ?>">Settore*</label>
                        <select name="settoreAv_int<?php echo $i; ?>" id="settoreAv_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                        </select>
                    </div>
                </div>
				<div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="dettaglioSettoreAv_int<?php echo $i; ?>">Dettaglio Settore*</label>
                        <select name="dettaglioSettoreAv_int<?php echo $i; ?>" id="dettaglioSettoreAv_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                        </select>
                    </div>                        
                </div>
				<div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="statoAttivitaAv_int<?php echo $i; ?>">Stato svolgimento*</label>
                        <select name="statoAttivitaAv_int<?php echo $i; ?>" id="statoAttivitaAv_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="provinciaAttivitaAv_int<?php echo $i; ?>">Provincia svolgimento*</label>
                        <select name="provinciaAttivitaAv_int<?php echo $i; ?>" id="provinciaAttivitaAv_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                        </select>
                    </div>
                </div>
				<div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="origineRedditoAv_int<?php echo $i; ?>">Origine del reddito*</label>
                        <select name="origineRedditoAv_int<?php echo $i; ?>" id="origineRedditoAv_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="originePatrimonioAv_int<?php echo $i; ?>" class="labelTooltip">Origine dei fondi*</label>
						<a href="#!" data-toggle="tooltip" title="" id="ttNome" class="icoinfo" data-original-title="Per 'origine dei fondi' si intende il capitale che impieghi sul conto corrente proveniente da fonti anche diverse dal reddito di lavoro (es. rendite immobiliari)"></a>
                        <select name="originePatrimonioAv_int<?php echo $i; ?>" id="originePatrimonioAv_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                        </select>
                    </div>
                </div>
				<div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="redditoAnnuoAv_int<?php echo $i; ?>">Reddito annuo netto*</label>
                        <select name="redditoAnnuoAv_int<?php echo $i; ?>" id="redditoAnnuoAv_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                        </select>
                    </div>                        
                </div>
				<hr>
				 <div class="row">
                    <div class="col-sm-12 form-section-title">
                        <h4>4. Informazioni aggiuntive (opzionali)</h4>
                    </div>
                </div>
				<div class="row">
                    <div class="col-md-6 form-group">
                        <label for="numeroComponentiAv_int<?php echo $i; ?>">Componenti nucleo familiare</label>
                        <select name="numeroComponentiAv_int<?php echo $i; ?>" id="numeroComponentiAv_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
						<label for="amministrazionePatrimonioAv_int<?php echo $i; ?>">Sei amministratore fondi familiari?</label>
						<br>
						<div class="radio radio-inline">
							<input type="radio" name="amministrazionePatrimonioAv_int<?php echo $i; ?>" id="amministrazionePatrimonioAv_int<?php echo $i; ?>a" value="si">
							<label for="amministrazionePatrimonioAv_int<?php echo $i; ?>">S&Igrave;</label>
						</div>
						<div class="radio radio-inline">
							<input type="radio" name="amministrazionePatrimonioAv_int<?php echo $i; ?>" id="amministrazionePatrimonioAv_int<?php echo $i; ?>b" value="no">
							<label for="amministrazionePatrimonioAv_int<?php echo $i; ?>">No</label>
						</div>
					</div>
                </div>
				<div class="spacer-no-border hidden-xs">&nbsp;</div>
				<div class="row">
                    <div class="col-md-6 form-group">
                        <label for="abitazioneAv_int<?php echo $i; ?>">Tipo di abitazione</label>
                        <select name="abitazioneAv_int<?php echo $i; ?>" id="abitazioneAv_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                        </select>
                    </div>
                </div>
				<div class="spacer-no-border hidden-xs">&nbsp;</div>
				<div class="row">
                    <div class="col-md-12 form-group">
                        <label for="abitazioneAv_int<?php echo $i; ?>">Indica i prodotti gi&agrave; posseduti:</label>                            
                    </div>
                </div>
				<div class="row">
                    <div class="col-md-6 form-group">
						<div class="radio radio-inline">
							<input type="radio" name="prodottiBancariAv_int<?php echo $i; ?>" id="prodottiBancariAv_int<?php echo $i; ?>a" value="1|Conto corrente e di deposito">
							<label for="prodottiBancariAv_int<?php echo $i; ?>a">Conto corrente e di deposito</label>
						</div>
                    </div>
					<div class="col-md-6 form-group">
						<div class="radio radio-inline">
							<input type="radio" name="prodottiBancariAv_int<?php echo $i; ?>" id="prodottiBancariAv_int<?php echo $i; ?>b" value="4|Derivati">
							<label for="prodottiBancariAv_int<?php echo $i; ?>b">Derivati</label>
						</div>
                    </div>
					<div class="col-md-6 form-group">
						<div class="radio radio-inline">
							<input type="radio" name="prodottiBancariAv_int<?php echo $i; ?>" id="prodottiBancariAv_int<?php echo $i; ?>c" value="2|Azioni e Obbligazioni">
							<label for="prodottiBancariAv_int<?php echo $i; ?>c">Azioni e Obbligazioni</label>
						</div>
                    </div>
					<div class="col-md-6 form-group">
						<div class="radio radio-inline">
							<input type="radio" name="prodottiBancariAv_int<?php echo $i; ?>" id="prodottiBancariAv_int<?php echo $i; ?>d" value="5|Prodotti assicurativi">
							<label for="prodottiBancariAv_int<?php echo $i; ?>d">Prodotti assicurativi</label>
						</div>
                    </div>
					<div class="col-md-6 form-group">
						<div class="radio radio-inline">
							<input type="radio" name="prodottiBancariAv_int<?php echo $i; ?>" id="prodottiBancariAv_int<?php echo $i; ?>e" value="3|Fondi comuni">
							<label for="prodottiBancariAv_int<?php echo $i; ?>e">Fondi comuni</label>
						</div>
                    </div>
					<div class="col-md-6 form-group">
						<div class="radio radio-inline">
							<input type="radio" name="prodottiBancariAv_int<?php echo $i; ?>" id="prodottiBancariAv_int<?php echo $i; ?>f" value="6|Carta di credito">
							<label for="prodottiBancariAv_int<?php echo $i; ?>f">Carta di credito</label>
						</div>
                    </div>
                </div>

    <?php if (!$mono): ?>
    <!-- CHIUSURA ACCORDION -->
            </div>
        </div>
    </div>
    <!-- FINE - CHIUSURA ACCORDION -->
    <?php endif; ?>
<?php endfor; ?>

<?php if (!$mono): ?>
<!-- CHIUSURA GRUPPO ACCORDION -->
</div>
<!-- FINE - CHIUSURA GRUPPO ACCORDION -->
<?php endif; ?>

    <div class="row">
        <div class="col-sm-12">
            <p class="note">(*) I campi contrassegnati con l'asterisco sono obbligatori</p>
        </div>
    </div>
    <hr>
<!-- Pulsanti -->
    <div class="row">
        <div class="col-xs-12">
            <div class="btn-console">
                <a class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
                <button type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>
            </div>
        </div>
    </div>
<!-- Fine pulsanti -->
</form>

<!-- Overlay persona politicamente esposta -->
<div class="modal fade" id="overlaypersPol" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Persona politicamente esposta</h4>
            </div>
            <div class="modal-body">
                <div class="uniqTooltipContent">Sei  una persona politicamente esposta se sei una persona residente in altri Stati comunitari o extracomunitari che occupa o ha occupato un'importante carica pubblica, o lo &egrave; un tuo familiare diretto o una persona con cui intrattieni stretti legami.<br><br><strong>Leggi tutti i dettagli (ai sensi del D.lgs 231/2007)</strong><br>
					<ol>
						<li><strong>PER PERSONE FISICHE CHE OCCUPANO O HANNO OCCUPATO IMPORTANTI CARICHE PUBBLICHE SI INTENDONO:</strong></li>
						<ol type="a">
							<li>i capi di Stato, i capi di Governo, i Ministri e i Vice Ministri o Sottosegretari;</li>
							<li>i parlamentari;</li>
							<li>i membri delle corti supreme, delle corti costituzionali e di altri organi giudiziari di alto livello le cui decisioni non sono generalmente soggette a ulteriore appello, salvo in circostanze eccezionali;</li>
							<li>i membri delle Corti dei conti e dei consigli di amministrazione delle banche centrali;</li>
							<li>gli ambasciatori, gli incaricati d'affari e gli ufficiali di alto livello delle forze armate;</li>
							<li>i membri degli organi di amministrazione, direzione o vigilanza delle imprese possedute dallo Stato.In nessuna delle categorie sopra specificate rientrano i funzionari di livello medio o inferiore. Le categorie di cui alle lettere da a) a e) comprendono, laddove applicabili, le posizioni a livello europeo e internazionale.</li>
						</ol>
						<li><strong>PER FAMILIARI DIRETTI SI INTENDONO:</strong></li>
						<ol type="a">
							<li>il coniuge;</li>
							<li>i figli e i loro coniugi;</li>
							<li>coloro che nell'ultimo quinquennio hanno convissuto con i soggetti di cui alle precedenti lettere;</li>
							<li>i genitori.</li>
						</ol>
						<li><strong>PER COLORO CON I QUALI LE PERSONE POLITICAMENTE ESPOSTE INTRATTENGONO NOTORIAMENTE STRETTI LEGAMI SI FA RIFERIMENTO A:</strong></li>
						<ol type="a">
							<li>qualsiasi persona fisica che ha notoriamente la titolarit&agrave; effettiva congiunta di entit&agrave; giuridiche o qualsiasi altra stretta relazione d'affari con una persona politicamente esposta;</li>
							<li>qualsiasi persona fisica che sia unica titolare effettiva di entit&agrave; giuridiche o soggetti giuridici notoriamente creati di fatto a beneficio della persona politicamente esposta.(D.lgs 231/2007)</li>
						</ol>
					</ol>
				</div>
            </div>   
			<div class="modal-footer">
			</div>
        </div>
    </div>
</div>
<!-- Overlay persona politicamente esposta - fine -->

<!-- SCRIPT -->
<script type="text/javascript" src="/wbresp/js/aol/step5.js"></script>