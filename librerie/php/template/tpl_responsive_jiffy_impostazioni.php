<h2>Gestione servizio</h2>
<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul class="newLabel">
			<li><a href="#">Movimenti</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy_pagamenti.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#">Invia pagamento</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy_colletta.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#">Colletta</a></li>
			<li class="on"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_jiffy_impostazioni.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#">Impostazioni</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
			<p>In questa pagina puoi modificare le impostazioni di DailyPay by Jiffy</p>
			<ul>
				<li><strong>C/c invio pagamenti:</strong> puoi selezionare uno o pi&ugrave; conti tra quelli che vedi disponibili. Se non selezioni alcun conto il servizio non sar&agrave; pi&ugrave; configurato e non potrai n&egrave; inviare n&egrave; ricevere pagamenti.</li>
				<li>Alla voce <strong>&laquo;Preferito&raquo;</strong> selezioni il conto sul quale desideri ricevere gli accrediti. Ricorda che il sistema Jiffy di SIA associa <strong>un solo Iban per numero di cellulare.</strong></li>
			</ul>
			<form class="formGenerico borderFormRounded" role="form" id="form01">
				<div class="form-group">
					<div class="row" id="checkRow">
						<div class="col-sm-4">
							<label class="control-label">c/c invio pagamenti</label>
							<div class="checkbox">
		       					<label class="textWrapper">
				         			<input type="checkbox" name="" id="" checked>
				          			<span class="text">CC 01099 0000085969 EUR</span>
				        		</label>
	     					</div>
	     					<div class="checkbox">
		       					<label class="textWrapper">
				         			<input type="checkbox" name="" id="">
				          			<span class="text">CC 01099 0000086803 EUR</span>
				        		</label>
	     					</div>
						</div>
						<div class="col-sm-4">
							<label class="control-label">Preferito</label>
							<div class="radio">
		       					 <label class="textWrapper">
				         			<input type="radio" name="ccPref" id="" checked>
				         			<span></span>
				          		</label>
	     					</div>
	     					<div class="radio">
		       					 <label class="textWrapper" style="visibility:hidden">
				         			<input type="radio" name="ccPref" id="">
				         			<span></span>
				          		</label>
	     					</div>
						</div>
						<div class="col-sm-4">
							<label class="control-label">Numero di telefono</label>
							<span class="output">345*****89</span>
						</div>
					</div>
				</div>
				<script>
					var checkboxInRow = $('#checkRow').find('input[type="checkbox"]');
					checkboxInRow.click(function(){
						 $(this).is(':checked') ? $('#checkRow').find('input[type="radio"]').eq(checkboxInRow.index($(this))).closest('label').css('visibility','visible') : $('#checkRow').find('input[type="radio"]').eq(checkboxInRow.index($(this))).closest('label').css('visibility','hidden');
					});
				</script>
			</form>
			<div class="form-group btnWrapper">
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" id="">salva</a>
				</div>
			</div>
		</section>
		<section>
			<h4>Massimali</h4>
			<p>Trascina il cursore per impostare i massimali</p>
			<form class="formGenerico borderFormRounded preventivatore" role="form">
			    <div class="form-group">
			        <label class="control-label">Singola operazione</label>
				    <div id="confP2PSliderTransizione" class="slider-box sliderWithTicks sliderNoMidTicks">
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
			    <div class="form-group">
			        <label class="control-label">Giornaliero</label>
				    <div id="confP2PSliderGiornaliero" class="slider-box sliderWithTicks sliderNoMidTicks">
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
			    <div class="form-group">
			        <label class="control-label">Mensile</label>
				    <div id="confP2PSliderMensile" class="slider-box sliderWithTicks sliderNoMidTicks">
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
			    <div class="form-group btnWrapper">
					<div class="btn-align-left">
						<a type="button" class="btn btn-default">annulla</a>
					</div>
					<div class="btn-align-right">
						<a type="button" class="btn btn-primary" id="">salva</a>
					</div>
					<br class="clear">
				</div>
			</form>
			<div class="align-right">
				<img src="/wscmn/img/ret/logo_jiffy.gif" alt="Logo Jiffy" title="Jiffy">
			</div>

		<script>
			$(function () {
				var loadDatiConf = function () {
					var url = '/PtoP.do',
					pathLibrerie = '/librerie/include/commons/ajax',
					AjaxUrl = (!isLib)? pathSviluppo + url : pathLibrerie + url.replace(/\.do(\?)?/i, '.php$1'),
					parameters = {};
					jqAJAXCall('post', 'json', AjaxUrl, confPtoPsucc, confPtoPInsucc, parameters);
				}
				var confPtoPInsucc = function(data){
					alert('si &egrave; verificato un errore tecnico');
				}
				var confPtoPsucc = function(data) {
					if(data !== null)
					{
						
						$("#confP2PSliderTransizione").sliderPlus({
							min: 1,
							max: parseInt(data.P2PConf[0].maxsp),
							step: 1,
							value: data.P2PConf[0].defaultsp
						});
						$("#confP2PSliderGiornaliero").sliderPlus({
							min: 0,
							max: parseInt(data.P2PConf[0].maxg),
							step: 1,
							value: data.P2PConf[0].defaultg
						});
						$("#confP2PSliderMensile").sliderPlus({
							min: 0,
							max: parseInt(data.P2PConf[0].maxm),
							step: 1,
							value: data.P2PConf[0].defaultm
						});
					}
				}
			loadDatiConf();
			});
		</script>
		</section>
	</div>
</div>