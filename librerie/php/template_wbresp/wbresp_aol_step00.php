


<div class="row">
    <div class="col-md-12">
        <h2>Apri un conto in Webank</h2></div>
</div>



<!-- BOX ALERT -->
<div class="boxalert">
    <div class="boxcont">
        <p>Ti ricordiamo che l'offerta conto corrente Webank &egrave; rivolta ai soli <strong>residenti in Italia maggiorenni.</strong>.<br>
                Se desideri effettuare il trasloco in Webank al termine del processo di apertura conto riceverai una email contenente il modulo precompilato.
        </p>
    </div>
</div>
<!-- FINE BOX ALERT -->

<div class="row">
    <div class="col-sm-12 form-section-title">
        <h4>1. A chi vuoi intestare il conto</h4>
    </div>
</div>
<div class="spacer-no-border hidden-xs">&nbsp;</div>
<form id="aolStep0" action="" method="POST" class="validate">
    <div class="row">
        <div class="col-md-6">
            <select name="num_intestatari" id="num_intestatari" class="form-control">
                <option value="1" selected>solo a me</option>
                <option value="2">a me e a un'altra persona</option>
                <option value="3">a me e ad altre due persone</option>
            </select>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 form-section-title">
            <h4>2. Inserisci i dati anagrafici dell'intestatario</h4>
        </div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="nome_int1" class="labelTooltip">Nome*</label>
            <a href="javascript:;" data-toggle="tooltip" id="ttNome" class="icoinfo" title="<strong>Scrivi</strong> il tuo nome per esteso, come &egrave; scritto sul documento di identit&agrave;"></a>
            <input type="text" placeholder="Nome completo (es: Maria Luisa Chiara)" name="nome_int1" id="nome_int1" value="" class="textinput form-control" required>
        </div>
        <div class="col-md-6 form-group">
            <label for="cognome_int1" class="labelTooltip">Cognome*</label>
            <a href="javascript:;" data-toggle="tooltip" title="" id="ttCognome" class="icoinfo" data-original-title="Scrivi il tuo cognome per esteso, come &egrave; scritto sul documento di identit&agrave;"></a>
            <input type="text" placeholder="Cognome completo (es: De luca)" name="cognome_int1" id="cognome_int1" value="" class="textinput form-control" required>
        </div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
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
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="cod_fiscale_int1">Codice fiscale*</label>
            <input type="text" placeholder="Codice fiscale" maxlength="16" name="cod_fiscale_int1" id="cod_fiscale_int1" value="" class="textinput form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="mail_int1">Email*</label>
            <input type="email" required placeholder="Indirizzo email appartenente solo a te" name="mail_int1" id="mail_int1" value="" class="textinput form-control">
        </div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-md-6 form-group input-tel">
            <label for="num_tel_3_int1" class="labelTooltip">Numero di cellulare*</label>
            <a href="javascript:;" data-toggle="tooltip" title="" id="ttCellulare" class="icoinfo" data-original-title="Scrivi il tuo cognome per esteso, come &egrave; scritto sul documento di identit&agrave;"></a>
            <div class="input input-inline">
                <input type="tel" maxlength="4" name="pref_tel_3_int1" id="pref_tel_3_int1" value="0039" class="textinput form-control numPref ignore">
                <input type="tel" maxlength="10" name="num_tel_3_int1" id="num_tel_3_int1" value="" class="textinput form-control numCell ignore" placeholder="Numero appartenente solo a te">
                <input type="tel" name="tel_3_int1" id="tel_3_int1" class="hidden-input">
            </div>
        </div>
        <div class="col-md-6 form-group">
            <label for="operatore_int1">Operatore*</label>
            <select name="operatore_int1" id="operatore_int1" class="form-control">
                <option value="" selected>Scegli un operatore dalla lista</option>
                <option value="1">Operatore 1</option>
                <option value="2">Operatore 2</option>
                <option value="3">Operatore 3</option>
            </select>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 form-section-title">
            <h4>3. Indica i codici per le promozioni e le convenzioni</h4>
        </div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="cod_prom_conv">Codice convenzione</label>
            <input type="tel" pattern="\d+" placeholder="Inserisci il codice convenzione" maxlength="10" name="cod_prom_conv" id="cod_prom_conv" value="" class="textinput form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="cod_promotore">Codice promotore</label>
            <input type="tel" pattern="\d+" placeholder="Inserisci il codice promotore" maxlength="10" name="cod_promotore" id="cod_promotore" value="" class="textinput form-control">
        </div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="cod_presentatore">Codice presentatore</label>
            <input type="tel" pattern="\d+" placeholder="Inserisci il codice presentatore" maxlength="10" name="cod_presentatore" id="cod_presentatore" value="" class="textinput form-control">
        </div>
    </div>
    <hr>
	<!-- Banner Convenzione -->	
	 <div class="row">
		<div class="col-xs-12">	
			<div class="boxBannerConv">
				<div class="row">				
					<div class="col-md-7">			
						<h4>CONVENZIONE XX</h4>
						<p>Descrizione convenzione lorem ipsum sit dolor et amet</p>
					</div>
					 <div class="col-md-5">
						<a href="#">Visualizza il dettaglio dell'offerta</a>
					</div>
				</div>
			</div>	
		</div>	
    </div>
	<!-- Fine Banner Convenzione -->	
    <hr>


    <div class="row">
        <div class="col-sm-12 form-section-title">
            <h4>4. Leggi l'informativa sul trattamento di dati personali</h4>
        </div>
    </div>
    <div class="spacer-no-border hidden-xs">&nbsp;</div>
    <div class="row">
        <div class="col-sm-12">
            <p>Prendi visione dell'informativa; per procedere occorre aprire il documento.</p>
        </div>
    </div>
    <!--
	<div class="row">
        <div class="col-sm-12">
            <a id="lnkInformativa" href="#!" class="ico-pdf" target="_blank">Informativa sul trattamento dei dati personali</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="checkbox check-inline">
                <input type="checkbox" name="informativaOK" id="informativaOK" class="hidden-input ignore">
                <input type="checkbox" name="informativaKO" id="informativaKO" class="hidden-input">
                <input type="checkbox" name="informativaDis" id="informativaDis" disabled="true">
                <label for="informativaOK">Dichiaro di aver letto attentamente l'informativa disponibile su documento elettronico (supporto durevole), di averne compreso e salvato il contenuto.</label>
            </div>
        </div>
    </div>-->
    <div class="row">
		<div class="col-sm-12">
			<a id="lnkInformativa" href="/webankpub/common/apriDocumento.do?id=66" class="ico-pdf" target="_blank">Informativa sul trattamento dei dati personali*</a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="checkbox check-inline">
				<input type="checkbox" name="informativaPrivacy" id="informativaOK" value="1"  >
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
            <p>Con riferimento all'informativa resa chiediamo il tuo consenso al trattamento dei dati personali per finalit&agrave; non necessarie all'adempimento degli obblighi contrattuali descritti.
                <br>Esprimi la tua preferenza, se desideri o meno che i tuoi dati siano:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p>Utilizzati per l'invio, da parte della Banca, di comunicazioni che riguardano l'offerta di prodotti o di servizi del Gruppo BPM per elaborazione di studi e di ricerca di mercato*</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consenso1" id="consenso1a" value="1">
                <label for="consenso1a">Acconsento</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="radio radio-inline" data-toggle="tooltip" title="Lorem ipsum dolor sit amet consectetur adipiscing elit">
                <input type="radio" name="consenso1" id="consenso1b" value="0" >
                <label for="consenso1b">Non acconsento</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p>
                <br>utilizzati per l'invio, da parte della Banca, di comunicazioni che riguardano l'offerta di prodotti e di servizi di soggetti terzi*</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consenso2" id="consenso2a" value="1">
                <label for="consenso2a">Acconsento</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="radio radio-inline" data-toggle="tooltip" title="Lorem ipsum dolor sit amet consectetur adipiscing elit">
                <input type="radio" name="consenso2" id="consenso2b" value="0">
                <label for="consenso2b">Non acconsento</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p>
                <br>comunicati a societ&agrave; terze ai fini della promozione di prodotti o di servizi e di ricerche di mercato*</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="radio radio-inline">
                <input type="radio" name="consenso3" id="consenso3a" value="1">
                <label for="consenso3a">Acconsento</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="radio radio-inline" data-toggle="tooltip" title="Lorem ipsum dolor sit amet consectetur adipiscing elit">
                <input type="radio" name="consenso3" id="consenso3b" value="0">
                <label for="consenso3b">Non acconsento</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p class="note">(*) I campi contrassegnati con l'asterisco sono obbligatori</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <button type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>
        </div>
    </div>
</form>
<!-- Overlay -->
<div class="modal fade" id="tplOverlayer" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body feedback">
                <div class="row">
                    <div class="col-md-12 col-sm-12 light-thankyou-block">
                        <div class="title-content">
                            <strong>Lorem ipsum lorem ipsum</strong> Lorem ipsum lorem ipsum <strong>lorem ipsum</strong> lorem ipsum lorem ipsum lorem ipsum.
                            <br> Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay  fine -->

<!-- SCRIPT -->
<script type="text/javascript" src="/wbresp/js/aol/step0.js"></script>