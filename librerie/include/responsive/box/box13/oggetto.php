<h3>Autocomplete rubrica</h3>
<!-- E' necessario avere un tag form esterno -->
<form class="formGeneric">
	<!-- INIZIO - HTML da copiare -->
	<!-- Mettere lo stesso id con cui si istanzierà l'oggetto "autoCompleteRubrica" -->
	<div id="container" class="addressContainer">
		<div class="addressWrap">
			<div class="addressBox autoComp">
				<!-- E' possibile modificare "maxlength" e "space" -->
				<input type="text" class="addressInput" maxlength="60" data-autosize-input='{ "space": 10 }' placeholder="Inserisci gli indirizzi email separati da una virgola">
			</div>
		</div>
		<div>
			<input type="text" class="autocompleteInput">
		</div>
		<div class="addressBookBtn"></div>
	</div>
	<!-- FINE - HTML da copiare -->
</form>


<!-- LAYER -->
<div class="layeralert2" id="layeralert2" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="this.parentNode.parentNode.style.display='none'"/>
	</div>
	<div class="body">
		<h3 class="verde">RUBRICA</h3>
		<!-- E' possibile modificare "maxlength" e "space" -->
		<div class="addressBookFilter">
			<input type="text" class="addressBookInput"><br>
		</div>
		<table class="addressBookBox"><tbody></tbody></table>
		<br class="clear">
		<a href="javascript:;" class="btnformright addressBookSubmit" title="Fatto"><img src="/img/ret/btn_left_ar.gif" alt=""><span>fatto</span><img src="/img/ret/btn_right_ar.gif" alt=""></a>
		<br class="clear">
	</div>
	<div class="foot"></div>
</div>
<br class="clear">
<script type="text/javascript" src="/wscmn/js/common_validation.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/priv_widgets.js"></script>
<script type="text/javascript">
$(function () {
	var url = 'http://libreriebpm/librerie/include/commons/ajax/rubrica/WsGestioneRubricaPDA.php',
		successFunc = function (json) {
			autoCompleteRubrica({
				data: filtraRubrica(json.listaRubricaAll),
				container: $('#container'),
				overlay: $('#layeralert2')
			});
		},
		failureFunc = function () { },
		parameters = {
			"onlyMail": "yes",
			"searchType": "ANAGRAFICA"
		};
	jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
});
</script>
