<script type="text/javascript">
/* Esempio interattivita' del form */
$(function(){
	btn1 = $("#buttonStep1");
	$(".graphicradio a").click(function(){
		btn1.removeClass("buttDis");
		var sel = $(this);
		var gp = sel.parents(".graphicradio");
		gp.find("a.selector").removeClass("selected");
		gp.find("input").eq(0).val(sel.addClass("selected").attr("data-value"));

		// Disattivazione del blocco successivo

	});

	// Funzione riscritta e semplificata per eventuali "forzature"
	abilitaStep = function (stepel) {
		stepel.removeClass("off").addClass("on");
		var imag = stepel.find(".steprichiestatit img");
		imag.attr("src",imag.attr("src").replace("off","on"));
		stepel.find(".stepCont").show();
	}

	// Bottone "prosegui" Step 1
	btn1.click(function(){
		if(!btn1.hasClass("buttDis")) 
		{
			// A seconda del valore prescelto mostra una strada differente
			var strongMethod = $("input[name=strumento]").val();

			if (strongMethod=="app") {
				/* APP */
				$(".steprichiesta.stepToken").hide();
				$(".steprichiesta.stepApp").show();

				/* Abilita lo step successivo (se non già abilitato) e ne mostra i contenuti*/
				abilitaStep($("#stepApp2"));
			}
			else
			{
				/* TOKEN */
				$(".steprichiesta.stepApp").hide();
				$(".steprichiesta.stepToken").show();

				/* Abilita lo step successivo (se non già abilitato) e ne mostra i contenuti*/
				abilitaStep($("#stepToken2"));

			}
		}
	}); 


	// Radio button STEP 2 TOKEN
	$("input[name=consegnaStrumento]").click(function(){
		// Abilita il pulsante per proseguire
		if($(this).is(":checked")) {
			$("#buttonStep2Token").removeClass("buttDis");
		}
		else
		{
			$("#buttonStep2Token").addClass("buttDis");
		}
		
	});

	// Pulsante prosegui step2 Token
	$("#buttonStep2Token").click(function(){
		if (!$(this).hasClass("buttDis")) abilitaStep($("#stepToken3"));
	});

});
</script>

<div class="boxrichiesta">
	
	<!-- STEP 1 -->
	<div class="steprichiesta on">
		<div class="steprichiestatit">
			<img alt="Lorem ipsum dolor" src="/img/ret/str_tit_uno_on.gif">
			<h2 class="richiestaTit">Scegli lo strumento per la strong authentication</h2>
			<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
		</div>
		<div class="formGeneric steprichiestacont">
			<div id="formRichiestaFirmaStep1">
				<div class="graphicradio">
					<input type="hidden" name="strumento">
					<div class="row-fluid">
						<div class="span6">
							<a class="selector" data-value="app">
								<img src="/wscmn/img/ret/strong_smartphone.png">
								<span class="titoletto">App</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quod distinctio impedit facere voluptas veniam saepe perspiciatis sint, odio recusandae, maxime cum officia quidem ipsa quis. Fugit voluptates consequatur odit.</p>
							</a>
						</div>
						<div class="span6">
							<a class="selector" data-value="token">
								<img src="/wscmn/img/ret/strong_token.png">
								<span class="titoletto">Token</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quod distinctio impedit facere voluptas veniam saepe perspiciatis sint, odio recusandae, maxime cum officia quidem ipsa quis. Fugit voluptates consequatur odit.</p>
							</a>
						</div>
					</div>
					
				</div>
				<div class="btnc aButtoncons"><a class="nextstep first aButton buttDis" href="javascript:;" id="buttonStep1" ><span>lorem</span></a></div>
			</div>
		</div>
	</div>
	<!-- FINE STEP 1 -->

	<!-- STEP 2 APP -->
	<div class="steprichiesta last off stepApp" id="stepApp2">
		<div class="steprichiestatit">
			<img alt="Compila la richiesta" src="/img/ret/str_tit_due_off.png">
			<h2 class="richiestaTit">Richiedi lo strumento scelto per la strong authentication</h2>
			<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
		</div>
		<div class="formGeneric steprichiestacont">
			<div id="stepApp2Cont" style="display:none" class="stepCont">
				<!-- FORM OTP APP -->
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tenetur quam, commodi praesentium atque ipsam quaerat a facilis reiciendis laudantium amet dolore tempore repellendus cumque. Quibusdam illum deleniti magnam asperiores.</p>
				<div class="formgeneric">
					<form>
						<div class="row-fluid paddBottomLarge">
							<div class="span6">
								<label class="nomefield">Codice OTP</label>
								<input type="text">
							</div>
						</div>
						<div class="row-fluid">
							<div class="aButtoncons">
								<div class="aButtonconsLeft">
									<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>lorem ipsum</span></a></span>
								</div>
								<div class="aButtonconsRight">
									<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>lorem ipsum</span></a></span>
								</div>
							</div>	
						</div>
					</form>
				</div>
				<!-- FINE FORM OTP APP -->
			</div>
		</div>
	</div>
	<!-- FINE STEP 2 -->

	<div class="steprichiesta off stepToken" style="display:none"  id="stepToken2">
		<div class="steprichiestatit">
			<img alt="Compila la richiesta" src="/img/ret/str_tit_due_off.png">
			<h2 class="richiestaTit">Richiedi lo strumento scelto per la strong authentication (TOKEN)</h2>
			<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
		</div>
		<div class="formGeneric steprichiestacont">
			<div id="stepToken2Cont" style="display:none" class="stepCont">
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tenetur quam, commodi praesentium atque ipsam quaerat a facilis reiciendis laudantium amet dolore tempore repellendus cumque. Quibusdam illum deleniti magnam asperiores.</p>
				<div class="formGeneric">
					<form>
						<div class="row-fluid">
							<label class="span12">
								<input type="radio" name="consegnaStrumento" value="1">
								<span class="text">
									<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequatur illum, praesentium aliquid.</strong>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sint provident voluptatum iusto fugiat, asperiores quidem enim velit amet, laboriosam blanditiis eveniet officiis. Sequi doloremque assumenda inventore quibusdam consequatur nihil!
								</span>
							</label>
						</div>
						<div class="row-fluid">
							<label class="span12">
								<input type="radio" name="consegnaStrumento" value="2">
								<span class="text">
									<strong>Consectetur adipisicing elit. Cupiditate consequatur illum, praesentium aliquid.</strong><br>
									Libero sint provident voluptatum iusto fugiat, asperiores quidem enim velit amet, laboriosam blanditiis eveniet officiis. Sequi doloremque assumenda inventore quibusdam consequatur nihil!
								</span>
							</label>
						</div>
					</form>
					<div class="btnc aButtoncons"><a class="nextstep first aButton buttDis" href="javascript:;" id="buttonStep2Token" ><span>Conferma lorem</span></a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="steprichiesta last off stepToken" style="display:none" id="stepToken3">
		<div class="steprichiestatit">
			<img alt="Compila la richiesta" src="/img/ret/str_tit_tre_off.png">
			<h2 class="richiestaTit">Completa la richiesta per lo strumento scelto per la Strong Authentication</h2>
			<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
		</div>
		<div class="formGeneric steprichiestacont">
			<div id="stepToken3Cont" style="display:none" class="stepCont">
				<!-- FORM OTP TOKEN -->
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio tenetur quam, commodi praesentium atque ipsam quaerat a facilis reiciendis laudantium amet dolore tempore repellendus cumque. Quibusdam illum deleniti magnam asperiores.</p>
				<div class="formgeneric">
					<form>
						<div class="row-fluid paddBottomLarge">
							<div class="span6">
								<label class="nomefield">Codice OTP</label>
								<input type="text">
							</div>
						</div>
						<div class="row-fluid">
							<div class="aButtoncons">
								<div class="aButtonconsLeft">
									<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>lorem ipsum</span></a></span>
								</div>
								<div class="aButtonconsRight">
									<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>lorem ipsum</span></a></span>
								</div>
							</div>	
						</div>
					</form>
				</div>
				<!-- FINE FORM OTP TOKEN -->
			</div>
		</div>
	</div>
	
	<div class="stepbottom"></div>
</div>