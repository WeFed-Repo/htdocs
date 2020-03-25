<!-- Richiesta -->
<h2>Gestione prelievo Cardless</h2>
<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul class="newLabel">
			<li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_richiesta.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Richiesta</a></li>
			<li class="on"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_massimali.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Massimali</a></li>
			<li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_elenco.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Elenco</a></li>
			<li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_disattivazione.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Disattivazione</a></li>
		</ul>
	</div>
	<div class="separator" style="min-width: 603px;"></div>
</div>
<!-- Blocco dei contenuti -->
<div class="tabindent">
	
	<h3>Imposta i massimali</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, et. Vel facere nihil quia modi dignissimos est tempore dolores. Quidem dignissimos aut adipisci odit! Alias molestiae vel provident at nobis.</p>

	<!--Esempio errore -->
	<section class="boxesitoWrap">
		<div class="boxesito negativo">
			<div class="text">
				<p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
			</div>
		</div>
	</section>
	<!-- Fine esempio errore -->

	<section>
		
		<script type="text/javascript">
		$(function(){

			// Inizializzazione degli slider (indicativa)

				$("#sliderMensile").sliderPlus({
					min: 10,
					max: 600,
					step: 10,
					value: 250,
					spinners: true,
					change: function() {
						$("#btnSalva").removeClass("btn-disabled");
					}
				});

				$("#sliderGiornaliero").sliderPlus({
					min: 10,
					max: 150,
					step: 10,
					value: 80,
					spinners: true,
					change: function() {
						$("#btnSalva").removeClass("btn-disabled");
					}
				});

		});
		</script>

		<div class="formGenerico borderFormRounded preventivatore">
			<div class="form-group">
		        <div class="row">
		            <div class="col-xs-12">
		                <label class="control-label">Complessivo mensile</label>
		               	<div id="sliderMensile" class="slider-box sliderWithTicks sliderNoMidTicks">
				            <div class="slider-wrap">
				                <div class="slider-trail trail-bg">
				                    <div class="ui-slider-handle">
				                        <div class="sliderText"></div>
				                    </div>
				                </div>
								<div class="sliderTicks"></div>
				            </div>
					    </div>
					    <select class="form-control slider-alt"></select>
				   </div>
	       	   </div>
		    </div>
		    <div class="form-group">
		        <div class="row">
		            <div class="col-xs-12">
		                <label class="control-label">Complessivo giornaliero</label>
		               	<div id="sliderGiornaliero" class="slider-box sliderWithTicks sliderNoMidTicks">
				            <div class="slider-wrap">
				                <div class="slider-trail trail-bg">
				                    <div class="ui-slider-handle">
				                        <div class="sliderText"></div>
				                    </div>
				                </div>
								<div class="sliderTicks"></div>
				            </div>
					    </div>
					    <select class="form-control slider-alt"></select>
				   </div>
	       	   </div>
		    </div>
		</div>
		<!-- Pulsantiera -->
		<div class="form-group btnWrapper">
			<div class="btn-align-right">
				<a type="button" class="btn btn-primary btn-disabled" id="btnSalva">salva</a>
			</div>
			<br class="clear">
		</div>
		<!-- Fine pulsantiera -->


	</section>
</div>
<!-- Fine blocco dei contenuti -->

