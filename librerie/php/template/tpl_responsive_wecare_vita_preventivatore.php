<h2>Preventivo e acquisto online</h2>
<section>
	<p>
		<strong>Fai subito il preventivo</strong> personalizzato in base  alle tue esigenze e alle tue caratteristiche. Potrai <strong>acquistare</strong> la polizza direttamente <strong>online</strong>con addebito sul conto corrente Webank, <strong>scegliendo</strong> l'importo del capitale e la soluzione di pagamento che preferisci.<br />
		<br />
		E se il tuo stato di salute cambia, <strong>il premio rimane bloccato</strong> per tutta la durata della polizza!
	</p>
</section>
<section>
	<div class="tithelp">
		<h4>Preventivatore</h4>

		<div class="flRight"><a href="#!" data-toggle="modal" data-target="#layerInfoWecareVita" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a></div>
		<br class="clear">
	</div>
	<form id="prevAssContent" class="formGenerico borderFormRounded preventivatore" role="form">
	    <div class="form-group">
		    <div class="row">
		        <div class="col-sm-6">
	                <label class="control-label">Conto corrente</label>
	                <div class="form-inline">
	                    <div class="input-group">
	                        <select class="form-control">
	                            <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
	                            <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
	                        </select>
	                        <div class="input-group-addon">
	                            <a class="no-underline btn-icon" data-toggle="modal" data-target="#starAlert1">
	                                <i class="icon icon-star_fill" title="icon-star_fill"></i>
	                                <!--<i class="icon icon-star" title="icon-star"></i>-->
	                            </a>
	                        </div>
	                    </div>
	                </div>
		        </div>
		        <div class="col-sm-6">
		            <label class="control-label">Saldo disponibile</label>
		            <span class="output">99.999.999,99 &euro;</span>
	        	</div>
	        </div>
	    </div>
	    <div class="form-group">
	        <label class="control-label">Scegli il capitale da assicurare</label>
	        <!-- Slider capitale -->
		    <div id="prevAssSlider" class="hidden-xs slider-box sliderWithTicks">
	            <div class="slider-wrap">
	                <div class="slider-trail trail-bg">
	                    <div class="ui-slider-handle">
	                        <div class="slider-cursor"></div>
	                    </div>
	                </div>
					<div class="sliderTicks sliderTicksHighlight"></div>
	            </div>
		    </div>
		    <select id="prevAssSliderAlt" class="visible-xs form-control slider-alt"></select>
	    </div>
	    <div class="form-group">
	        <label class="control-label">Durata della polizza</label>
		    <div id="prevAssSlider2" class="hidden-xs slider-box sliderWithTicks">
	            <div class="slider-wrap">
	                <div class="slider-trail trail-bg">
	                    <div class="ui-slider-handle closeable" data-title="Per aumentare la durata polizza &egrave; necessario diminuire il capitale che vuoi assicurare." data-trigger="manual">
	                        <div class="sliderText"></div>
	                    </div>
	                </div>
					<div class="sliderTicks"></div>
	            </div>
		    </div>
		    <select id="prevAssSliderAlt2" class="visible-xs form-control slider-alt"></select>
	    </div>
	    <div class="form-group">
            <label id="btnGroupLabel" class="control-label">Fumi?</label>
		    <div id="btnGroup" class="hidden-xs btn-group btn-group-justified" role="group" aria-labelledby="btnGroupLabel">
			  <a href="#!" type="button" class="btn" role="button" data-value="0">Non Fumo</a>
			  <a href="#!" type="button" class="btn" role="button" data-value="20">Fino a 20 sigarette al giorno</a>
			  <a href="#!" type="button" class="btn" role="button" data-value="99">Pi&ugrave; di 20 sigarette al giorno</a>
			</div>
		    <select name="fumatore" class="visible-xs form-control btn-group-select"></select>
		</div>
		<div class="form-group">
			<div class="btn-align-center">
				<a type="button" class="btn btn-disabled btn-primary btn-big" id="calcola">calcola</a>
				<br class="clear">
			</div>
		</div>	
	</form>
	<div id="prevAssLinguettaContent" style="display: none;">
	    <div id="prevAssBanner">
		    <div class="imgWrapperResponsive align-center">
				<img class="img-responsive prevAssImg" src="/img/ret/img_wecare_vita_banner.png" alt="">
			</div>
		</div>
	    <div id="prevAssScelta">
	    	<h3 id="prevAssSceltaTit" class="align-center">Scegli la modalit&agrave; di pagamento</h3>
	    	<div id="prevAssSceltaBox">
				<div id="prevAssSceltaMese" class="prevAssSceltaBtn">
					<span class="prevAssSceltaVal"></span><span class="prevAssSceltaValSep">,</span><span class="prevAssSceltaValDec">00</span><br>
					<span class="prevAssSceltaValUnit">&euro;&nbsp;/&nbsp;mese</span>
				</div>
				<div class="prevAssSceltaSep">
					<span class="hidden-xs">- - -</span> oppure <span class="hidden-xs">- - -</span>
				</div>
				<div id="prevAssSceltaAnno" class="prevAssSceltaBtn">
					<span class="prevAssSceltaVal"></span><span class="prevAssSceltaValSep">,</span><span class="prevAssSceltaValDec">00</span><br>
					<span class="prevAssSceltaValUnit">&euro;&nbsp;/&nbsp;anno</span>
				</div>
	    	</div>
		<p style="display: none;">Se vuoi una soluzione diversa, cambia il capitale assicurato per scoprire un nuovo preventivo.
			Tieni a portata di mano il tuo cellulare, ti servir&agrave; per confermare l'acquisto.</p>
	</div>
</section>

<div class="modal fade" id="layerInfoWecareVita" tabindex="-1" role="dialog" aria-labelledby="labelInfoWecareVita">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="labelInfoWecareVita">Preventivatore</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Scegli il capitale da assicurare (&euro;)</h4>
                            <p>Scegli il capitale da assicurare tra le somme proposte.</p>

                            <h4>Durata della polizza (anni)</h4>
                            <p>Scegli la durata della polizza trascinando il cursore.</p>

                            <h4>Fumi?</h4>
                            <p>Sei considerato NON fumatore se non hai mai fumato negli ultimi 24 mesi e non hai smesso di fumare a seguito di esplicita richiesta medica.<br>
							Se fumi, o hai fumato nei 24 mesi precedenti, pi&ugrave; di 20 sigarette al giorno non &egrave; possibile sottoscrivere la polizza.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="layerInfoFumi99" tabindex="-1" role="dialog" aria-labelledby="labelInfoFumi99">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="labelInfoFumi99"><img src="/img/ret/tit_metlife_overlay.gif" alt=""></h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                        	<div class="imgWrapperResponsive">
                        		<img src="/img/ret/snoopy_ops.gif" alt="">
                        	</div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <h4>Siamo spiacenti</h4>
                            <p>Questo prodotto NON &egrave; adatto al tuo profilo, in quanto non &egrave; possibile aderire se fumi pi&ugrave; di 20 sigarette al giorno.<br>
							Ti consigliamo di vedere <strong>Wecare Protezione</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="fumatore" name="fumatore" value="">

<div class="modal fade" id="sliderError" tabindex="-1" role="dialog" aria-labelledby="sliderErrorTitle">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="sliderErrorTitle">Attenzione</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p id="sliderErrorText">Per aumentare la durata polizza &egrave; necessario diminuire il capitale che vuoi assicurare.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var librerie = true,
		pathLibrerie = '/librerie/include/commons/ajax/',
		prevAssConf = {
			"capitaleMax":250000,
			"durataMax":30,
			"durataMaxPerCapitale": {
				"50000":30,
				"100000":18,
				"150000":15,
				"200000":15,
				"250000":15
			}
		},
		prevAssSlider = {
			senior: false
		};
</script>
<script src="/wscmn/fe/js/priv_preventivatore_wecare_vita.js"></script>
