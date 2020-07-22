<!-- TITOLO -->
<div class="row">
    <div class="col-xs-12">
        <h2>Identificazione</h2>
   	</div>
</div>
<!-- TITOLO -->
<div class="row">
	 <div class="col-xs-12 form-section-title">
		<h4>2. Identificazione tramite secondo documento d'identit&agrave;</h4>	
	 </div>
</div>

<!-- Intro -->
<div class="row">
	 <div class="col-xs-12">
		<p>Per completare la richiesta di apertura conto dovrai identificarti utilizzando un secondo documento d'identit&agrave;.</p>
	 </div>
</div>


<!-- Fine intro -->
<form id="aolStep4_noconto" action="" method="POST" class="validate">

	<!-- Raccolta dei dati -->
	<div class="modulo-doc">
		<div class="row">
	        <div class="col-md-6 form-group">
	            <label for="tipo_doc">Tipo di documento*</label>
	            <!--
				La select si popola AUTOMATICAMENTE: non occorre indicare opzioni.
				Nell'attributo DATA-NODOCS, indicare i valori delle opzioni da non includere nella select 
				in quanto filtrate rispetto al documento gia' inserito predecentemente.
				Tali valori devono essere separati da "pipe (|)". Di seguito' stata esemplificata la rimozione delle carte di identita'.

	        	-->
	            <select name="tipo_doc_int1" id="tipo_doc_int1" class="form-control" data-modulo-doc="tipo-documento" data-nodocs="cartaid-el|cartaid-ca|cartaid-ri">
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
	            <label for="gg_emissione_int1" data-modulo="doc-rilascio">Data di rilascio/rinnovo*</label>
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
	            <label for="comune_emissione_int1" data-modulo="doc-comune">Comune di rilascio*</label>
	            <select name="comune_emissione_int1" id="comune_emissione_int1" class="form-control">
	                <option value="">seleziona</option>
                    <option value="MILANO~20121~20162">MILANO</option>
	            </select>
	        </div>
	    </div>
	</div>
	<hr>
	<!-- Caricamento del file -->
	<div class="row">
			<div class="col-xs-12">
			<p>
				Carica il file del secondo documento d'identità che hai scelto.<br>
				Ricordati non potrai caricare file audio, video, script ( es: .mp3, .mp4, .odb)
			</p>
			<!-- Componente caricamento file TBD -->
			<div class="form-group">
				<label>Carica il tuo documento</label>
				<div class="input-group btn-file-group">
	                <input type="text" id="file_name_int1" name="file_name_int1" class="form-control btn-file-name" readonly="">
	                <span class="input-group-btn">
	                    <span class="btn btn-file">
	                        <input type="file" id="file_documento_int1" name="file_documento_int1" accept=".pdf,.jpg,.jpeg,.png"><span class="btn-file-action">Seleziona</span>
	                    </span>
	                </span>
	            </div>
			</div>
			<!-- Fine componente caricamento file TBD -->

		</div>
	</div>
	


	<!-- Fine raccolta dei dati -->

	<div class="spacer-no-border">&nbsp;</div>
	<div class="row">
		<div class="col-xs-12">
			<p class="note">(*) i campi contrassegnati con l'asterisco sono obbligatori</p>
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

<!-- SCRIPT -->
<script type="text/javascript" src="/wbresp/js/aol/step4_fdr_noconto.js"></script>
