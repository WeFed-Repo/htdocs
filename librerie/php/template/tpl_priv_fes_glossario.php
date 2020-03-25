<h2>Glossario</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aut quaerat nobis praesentium provident voluptas atque. Saepe dolorem animi eum aperiam labore ut numquam. Illum accusamus dignissimos laudantium libero ullam.</p>

<script type="text/javascript">
	// Esempio glossario dinamico in base ai contenuti
	var gloLetters = ("ABCDEFGHIJKLMNOPQRSTUVXYZ").split("");
	var gloLetterShow = function () {
			$("#glossario .glossarioSX li").removeClass("on");
			var letter = $(this).attr("data-letter");
			if (letter == "tutti"){
				$(".lettera").show();
			}
			else
			{
				$("#glossario .glossarioDX .lettera").hide();
				$("#lettera"+letter).show();
			}
			$(this).parents("li").addClass("on");
			
		}
	$(function(){

		/* Inizializzazione glossario */
		var gloList = $("<ul>").addClass("ben");

		$.each(gloLetters,function(i,v){
			var letter = $("<li>");
			if ($("#lettera"+v).length>0) {
				var letterlink = $("<a>").attr("data-letter",v).html(v).click(gloLetterShow);
				letter.append(letterlink);
			}
			else
			{
				letter.html(v);
				letter.addClass("off");
			}
			gloList.append(letter);
		});
		// Appende il "tutti"
		gloList.append($("<li>").append($("<a>").attr("data-letter","tutti").html("Tutti").click(gloLetterShow)));

		// Attiva la prima lettera disponibile tramite trigger
		$("#glossario .glossarioSX").empty().append(gloList);
		$("#glossario .glossarioSX a").eq(0).trigger("click")
		$("#glossario").removeClass("loading");


	});
</script>
<section>
	<div id="glossario" class="loading">
		<div class="glossarioSX">
		</div>
		<div class="glossarioDX">
			<div class="row">
				<div class="col-xs-12">
					<div id="letteraA" class="lettera">
						<div class="text-accordion">
							<a class="text-term"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i>Abbecedario</a>
							<div class="text-definition"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, dolorem illo molestiae itaque iure voluptatum eius necessitatibus illum ullam beatae.</p></div>
						</div>
						<div class="text-accordion">
							<a class="text-term"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i>Arrivo</a>
							<div class="text-definition"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, dolorem illo molestiae itaque iure voluptatum eius necessitatibus illum ullam beatae.</p></div>
						</div>
						<div class="text-accordion">
							<a class="text-term"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i>Avventura</a>
							<div class="text-definition"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, dolorem illo molestiae itaque iure voluptatum eius necessitatibus illum ullam beatae.</p></div>
						</div>
					</div>
					<div id="letteraB" class="lettera">
						<div class="text-accordion">
							<a class="text-term"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i>Bilancio</a>
							<div class="text-definition"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, dolorem illo molestiae itaque iure voluptatum eius necessitatibus illum ullam beatae.</p></div>
						</div>
						<div class="text-accordion">
							<a class="text-term"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i>Banca centrale europea</a>
							<div class="text-definition"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, dolorem illo molestiae itaque iure voluptatum eius necessitatibus illum ullam beatae.</p></div>
						</div>
						<div class="text-accordion">
							<a class="text-term"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i>Bancomat</a>
							<div class="text-definition"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, dolorem illo molestiae itaque iure voluptatum eius necessitatibus illum ullam beatae.</p></div>
						</div>
						<div class="text-accordion">
							<a class="text-term"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i>Beneficiario</a>
							<div class="text-definition"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, dolorem illo molestiae itaque iure voluptatum eius necessitatibus illum ullam beatae.</p></div>
						</div>
					</div>
					<div id="letteraG" class="lettera">
						<div class="text-accordion">
							<a class="text-term"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i>Gap</a>
							<div class="text-definition"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, dolorem illo molestiae itaque iure voluptatum eius necessitatibus illum ullam beatae.</p></div>
						</div>
						<div class="text-accordion">
							<a class="text-term"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i>Gestione patrimoniale</a>
							<div class="text-definition"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, dolorem illo molestiae itaque iure voluptatum eius necessitatibus illum ullam beatae.</p></div>
						</div>
						<div class="text-accordion">
							<a class="text-term"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i>Girata</a>
							<div class="text-definition"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, dolorem illo molestiae itaque iure voluptatum eius necessitatibus illum ullam beatae.</p></div>
						</div>
						<div class="text-accordion">
							<a class="text-term"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i>Giroconto</a>
							<div class="text-definition"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, dolorem illo molestiae itaque iure voluptatum eius necessitatibus illum ullam beatae.</p></div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>