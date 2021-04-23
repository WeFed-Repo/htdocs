<!-- titolo -->
<section>
    <div class="titolo">
	    <h1>
            <div class="row">
                <div class="col-sm-8">
                    <!-- TITOLO -->
                        <span>Contratti e proposte</span>
                    <!-- /TITOLO -->
                 </div>
                <!-- NUMERO PAGINA -->
                <!-- /NUMERO PAGINA -->
            </div>
	    </h1>
    </div>
</section>
<!-- fine titolo -->

<!-- Tabs -->
<div class="section outerWrapperTab no-backgr">
	<div class="row">
		<div class="col-xs-12">
			<div class="innerWrapperTab">
				<ul>
					<li><a href="#" title="" role="button">In corso</a></li>
					<li class="on"><a role="button">Archivio</a></li>
				</ul>
			</div>
			<div class="separator"></div>
		</div>
	</div>
</div>
<!-- Fine tabs -->

<!-- Blocco filtri -->
<script>
/* Esempio */
</script>
<div class="formWrapper">
    <div class="form-group">
        <div class="row">
            <div class="form-field-input col-sm-3">
                <label class="control-label">Stato</label>
                <select class="form-control">
                    <option selected>Tutti</option>
                    <option>Lorem ipsum</option>
                    <option>Dolor sit</option>
                    <option>Amet consectetur</option>
                </select>
            </div>
            <div class="form-field-input col-sm-3">
                <label class="control-label">Categoria</label>
                <select class="form-control">
                    <option selected>Tutte</option>
                    <option>Lorem ipsum</option>
                    <option>Dolor sit</option>
                    <option>Amet consectetur</option>
                </select>
            </div>
            <div class="form-field-input col-sm-3">
                <label class="control-label">Avviata da</label>
                <select class="form-control">
                    <option selected>Tutti</option>
                    <option>Lorem ipsum</option>
                    <option>Dolor sit</option>
                    <option>Amet consectetur</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-field-input col-sm-3">
                <label class="control-label">Periodo</label>
                <select class="form-control" onchange="$('#dateRange').toggle($(this).val()=='scegli')">
                    <option selected>Ultimi 12 mesi</option>
                    <option>Lorem ipsum</option>
                    <option>Dolor sit</option>
                    <option value="scegli">Scegli date</option>
                </select>
            </div>
            <!-- Blocco selezione date -->
            <div id="dateRange">
                <div class="form-field-input col-sm-2">
                    <label class="control-label">Dal</label>
					<input type="text" name="dataEsecuzione" size="12" value="06/04/2017" id="dataEsecuzione" class="form-control datepicker wauto floatl-marginr10" />
			    </div>
            </div>
            <!-- Fine blocco selezione date -->
            <div class="form-field-input col-sm-1">
                Filtra
            </div>
        </div>
    </div>
</div>
<!-- Fine blocco filtri -->

<!-- Framework tabella -->

<!-- Fine framework tabella -->