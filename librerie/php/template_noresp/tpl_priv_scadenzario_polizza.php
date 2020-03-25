<?php
	$isEmpty = !isset($_GET['list']);
?>
<script type="text/javascript">
	var librerie = true;
</script>

<h1 id="id_label">Scadenza polizze</h1>

<div class="bannercatmutui bannercatmutuinopad">
	<img src="/img/ret/ban_prestiti.jpg" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum">
</div>
<p class="note txtAlCenter">Il concorso &egrave; valido dal 01/05/2015 al 31/12/2015. Estrazione finale entro il 01/01/2016. Montepremi: 1.000 euro.
	<a href="javascript:openPopOverLayer('layeralert03b', 'floating', 2);">Regolamento</a></p>



<div class="fooform fooform_tit" id="id_aggiorna" style="display:none;"></div>
<br class="clear">
<h3 class="verde">SEGNALACI LA DATA DI SCADENZA DELLA TUA POLIZZA VEICOLI</h3>
<br/>
<p>Ti <strong>ricorderemo</strong> in anticipo, via <strong>email</strong> o <strong>sms</strong>, 
    la <strong>scadenza</strong> delle polizze per i veicoli che utilizzi per lavoro o nel tempo libero.
</p>
<br class="clear"/>
<form name="catScadAssForm" id="catScadAssForm" method="post" action="">
	<input type="hidden" id="keep" name="keep" value="yes" />
	<input type="hidden" id="method" name="method" value="" />
	<input type="hidden" id="polizzaToDelete" name="polizzaToDelete" value="-1" />

	<?php if (!$isEmpty) { ?>
	<div class="borderFormRounded margBottomMedium">
	    <div class="formGeneric">
	        <div class="row-fluid noMargbottom">
	            <div class="span3">				
	                <label class="nomefield colorver" data-name="nomePolizza">Polizza 1</label>
	            </div>
	            <div class="span3">
	                <label class="nomefield">Data scadenza*</label>
	                <span class="output" data-name="dataScadenzaNew" data-value="01/06">01/06</span>
	            </div>
	            <div class="span3">
	                <label class="nomefield">Tipo veicolo</label>
	                <span class="output" data-name="tipoVeicoloNew" data-value="AUTO">Automobile</span>
	            </div>
	            <div class="span3">
	                <div class="row-fluid">
	                    <div class="span8">
	                        <label class="nomefield">Targa veicolo</label>
	                        <span class="output" data-name="targaNew" data-value="as111as">as111as</span>
	                    </div>
	                    <div class="span4">
	                        <div style="float:left">
	                            <a href="javascript:;" class="icoEdit" title="Clicca per modificare i dati">
	                            <img src="/img/ret/ico1gr_modifica.gif" alt="Clicca per modificare i dati" />
	                            </a>
	                        </div>
	                        <div style="float:right">
	                            <a href="javascript:;" onclick="$('#polizzaToDelete').val('0');openPopOverLayer('layeralert02b', 'floating', 2)"
	                                title="Clicca per eliminare la polizza dall'elenco">
	                            <img src="/img/ret/ico1gr_cancella.gif" alt="Clicca per eliminare la polizza dall'elenco"/>
	                            </a>
	                        </div>
	                        <br class="clear"/>
	                    </div>
	                </div>
	                <!-- ALTRI DATI DA PASSARE ALL'EDITING -->
	                <input type="hidden" data-name="progressivo" data-value="0">
	                <!-- FINE ALTRI DATI DA PASSARE ALL'EDITING -->
	            </div>
	        </div>
	        <br>
	        <br>
	        <div id="concorsoOutSi" class="row-fluid noMargbottom">
	            <div class="span3">&nbsp;</div>
	            <div class="span9">
	                <span class="output" data-name="concorso" data-value="no">La targa non partecipa al concorso &quot;La scadenza che ti premia&quot;</span>
	            </div>
	    	</div>
	        <div id="concorsoOutNo" class="row-fluid noMargbottom" style="display:none;">
	            <div class="span3">&nbsp;</div>
	            <div class="span9">
	                <label class="nomefield">Concorso &quot;La scadenza che ti premia&quot;</label>
	                <span class="output" data-name="concorso" data-value="si">S&igrave;, partecipo al concorso</span>
	            </div>
	    	</div>
	    </div>
	</div>
	<?php } else { ?>
	<div class="boxesito attenzione" id="alertNoPolizze">
        <div class="middle">
            <span class="imgCont"></span>
            <div class="text">
                <div class="row-fluid">
                    <div class="span10">
                        <p>Al momento non hai inserito scadenze di polizze</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php } ?>

	<!-- BLOCCO EDITING GENERICO -->
	<div id="polizzaEditing" class="borderFormRounded margBottomMedium" style="display:none">
	    <div id="polizza1" class="formGeneric">
	        <div class="row-fluid">
	            <div class="span3">				
	                <label class="nomefield colorver" id="nomePolizza">Polizza 1</label>
	            </div>
	            <div class="span3">
	                <label class="nomefield">Data scadenza*</label>
	                <div class="row-fluid noMargbottom">
	                    <div class="span10">	
	                        <input type="text" class="withIco" name="dataScadenzaNew" placeholder="gg/mm" value="">	
	                    </div>
	                    <div class="span2">
	                        &nbsp;
	                    </div>
	                </div>
	            </div>
	            <div class="span3">
	                <div class="row-fluid noMargbottom">
	                    <div class="span10">
	                        <label class="nomefield">Tipo veicolo</label>
	                        <select name="tipoVeicoloNew">
	                            <option value="">--seleziona--</option>
	                            <option value="AUTO">Automobile</option>
	                            <option value="CICLOM">Ciclomotore</option>
	                            <option value="MOTO">Moto</option>
	                            <option value="CAMFUR">Camper</option>
	                            <option value="ALTRO">Altro</option>
	                        </select>
	                    </div>
	                    <div class="span2">
	                        &nbsp;
	                    </div>
	                </div>
	            </div>
	            <div class="span3">
	                <div class="row-fluid ">
	                    <div class="span8">
	                        <label class="nomefield">Targa veicolo</label>
	                        <input type="text" name="targaNew">
	                        <input type="hidden" name="progressivo" value="-1">
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row-fluid noMargbottom">
	            <div class="span12">				
	                <label class="nomefield">Ricordami la scadenza della polizza</label>
	            </div>
	        </div>
	        <div class="row-fluid" data-error="">
                <label for="prefContatto1" class="span6">
	                <input type="radio" name="prefContatto" value="EMAIL" checked="checked" id="prefContatto1">
	                Con una email<br><strong>CAMARO@TISCALI.IT</strong>
                </label>
                <label for="prefContatto2" class="span6">
	                <input type="radio" name="prefContatto" value="SMS" id="prefContatto2">
	                Con un sms<br><strong>328*****89</strong>
                </label>
	        </div>
	        <div class="row-fluid" data-error="">
			    <div class="span12">
			        <p><a target="_blank" href="http://www.bpm.it/it-com/contatti/richiesta-informazioni/content/0/informativa/InformativaPrivacy_sitoBPM_contatti.pdf">Informazioni sulla Privacy</a></p>
			    </div>
	        </div>
	        <div class="row-fluid">
	            <div class="span12">
	                <div class="aButtoncons">
	                    <span id="prosegui" class="btnc"><a class="aButton" href="javascript:;" onclick="prosegui();"><span>salva e prosegui</span></a></span>
	                    <span id="modifica" class="btnc" style="display:none;"><a class="aButton" href="javascript:;" onclick="modifica();"><span>modifica</span></a></span>
	                </div>
	            </div>
	        </div>
	       	<div id="concorso" class="formGeneric" style="display:none;">
		        <div class="row-fluid noMargbottom">
		            <div class="span12">				
		                <label class="nomefield">Vuoi partecipare al concorso &quot;la scadenza che ti premia&quot;?</label>
		            </div>
		        </div>
		        <div class="row-fluid" data-error="">
	                <label for="concorsoSi" class="span6">
		                <input type="radio" name="concorsoRisp" value="si" id="concorsoSi" checked="checked">
		                S&igrave;, ho letto il regolamento e partecipo
	                </label>
	                <label for="concorsoNo" class="span6">
		                <input type="radio" name="concorsoRisp" value="no" id="concorsoNo">
		                Grazie, non mi interessa
	                </label>
		        </div>
		        <div class="row-fluid">
		            <div class="span12">
		                <div class="aButtoncons">
		                    <span class="btnc"><a class="aButton" href="javascript:;" onclick="inserisci();"><span>conferma</span></a></span>
		                </div>
		            </div>
		        </div>
		    </div>
	    </div>
	</div>
	<!-- FINE BLOCCO EDITING GENERICO -->

	<div id="polizzaAgg"></div>
	<div id="aggiungiLink">
	    <a href="javascript:;" title="" class="openDet"><img src="/wscmn/img/ico1gr_indchiuso.gif" style="display:block; float:left;">
	    	<span style="display:block; float:left; margin-left:3px; font-weight:bold; text-decoration:underline; cursor:pointer">Aggiungi altre date di scadenza</span></a>
	    <br class="clear"/>
	</div>
	<br>

	<?php if (!$isEmpty) { ?>
	<div id="polizzaCompRicordo" class="borderFormRounded margBottomMedium">
	    <div class="formGeneric">
	        <div class="row-fluid noMargbottom">
	            <div class="span9">				
	                <label class="nomefield">La scadenza della polizza ti verr&agrave; ricordata via email all'indirizzo <strong>CAMARO@TISCALI.IT</strong></label>
	            </div>
	            <div class="span3">
	                <div class="row-fluid ">
	                    <div class="span8">
	                        &nbsp;
	                    </div>
	                    <div class="span4">
	                        <div style="float:left"><a href="javascript:;" onclick="$('#polizzaEditRicordo').show();$('#polizzaCompRicordo').hide()"
	                            title="Clicca per modificare i dati">
	                            <img src="/img/ret/ico1gr_modifica.gif" alt="Clicca per modificare i dati"/></a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div id="polizzaEditRicordo" class="borderFormRounded margBottomMedium" style="display:none">
	    <div class="formGeneric">
	        <div class="row-fluid noMargbottom">
	            <div class="span12">				
	                <label class="nomefield">La scadenza della polizza ti verr&agrave; ricordata:</label><br>
					<p>Ti <strong>ricorderemo</strong> in anticipo, via <strong>email</strong> o <strong>sms</strong>, 
					    la <strong>scadenza</strong> delle polizze per i veicoli che utilizzi per lavoro o nel tempo libero.
					</p>
	            </div>
	        </div>
	        <div class="row-fluid" data-error="">
	            <div class="span12">
	                <label for="prefContatto1" class="span6">
		                <input type="radio" name="prefContatto" value="EMAIL" checked="checked" id="prefContatto1">
		                Con una email<br><strong>CAMARO@TISCALI.IT</strong>
	                </label>
	                <label for="prefContatto2" class="span6">
		                <input type="radio" name="prefContatto" value="SMS" id="prefContatto2">
		                Con un sms<br><strong>328*****89</strong>
	                </label>
	            </div>
	        </div>
	        <div class="row-fluid" data-error="">
			    <div class="span12">
			        <p><a target="_blank" href="http://www.bpm.it/it-com/contatti/richiesta-informazioni/content/0/informativa/InformativaPrivacy_sitoBPM_contatti.pdf">Informazioni sulla Privacy</a></p>
			    </div>
	        </div>
	        <div class="row-fluid">
	            <div class="span12">
	                <div class="aButtonconsRight">
	                    <span class="btnc">
	                    	<a class="aButton" href="javascript:;" onclick="aggiornaPc();" id="demoSetErrorBtn"><span>salva</span></a>
	                    </span>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="formGeneric">
	</div>
	<?php } ?>

	<div class="layeralert2" id="layeralert02b" style="display: none;">
	    <div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert02b').dragHandle = new Draggable('layeralert02b',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert02b')"/></div>
	    <div class="body">
	        <br>
	        <p>Sei sicuro di eliminare la polizza dall'elenco?</p>
	        <br><br>
	        <a class="btnformleft" href="javascript:;" onclick="$('#polizzaToDelete').val('');closePopOverLayer('layeralert02b');">
	        <img alt="" src="/img/ret/btn_left_bi.gif"/>
	        <span>annulla</span>
	        <img alt="" src="/img/ret/btn_right_bi.gif"/>
	        </a>
	        <a class="btnformright" href="javascript:;" onclick="elimina();">
	        <img alt="" src="/img/ret/btn_left_ar.gif"/>
	        <span>ok</span>
	        <img alt="" src="/img/ret/btn_right_ar.gif"/>
	        </a>
	        <br class="clear" />
	    </div>
	    <div class="foot"></div>
	</div>
	<div class="layeralert2" id="layeralert03b" style="display: none;">
	    <div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert03b').dragHandle = new Draggable('layeralert03b',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert03b')"/></div>
	    <div class="body">
			<h3>Regolamento concorso &quot;La scadenza che ti premia&quot;</h3>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
			Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
			pellentesque eu, pretium quis, sem.
			 
			Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
			rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
			Cras dapibus. Vivamus elementum semper nisi.
			 
			Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,
			dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
			Aenean imperdiet.Etiam ultricies nisi vel augue.
			 
			Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,
			sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
			 
			Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
			Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
			Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,

			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
			Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
			Donec quam felis, ultricies nec,pellentesque eu, pretium quis, sem.
			 
			Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
			imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
			Vivamus elementum semper nisi.
			 
			Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
			Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
			Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.
			 
			Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,
			sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
			 
			Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
			Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
			Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
	        <br class="clear" />
	        <br class="clear" />
	    </div>
	    <div class="foot"></div>
	</div>

	<script type="text/javascript">
		var isLibrerie = (typeof librerie !== 'undefined' && librerie);

		// Inizializzazione
		$(function(){
			// Raccoglie l'html del box di editing e modifica di una polizza (e svuota il blocco di editing standard)
			polizzaEditCode = $("#polizzaEditing .formGeneric").html();
			$("#polizzaEditing .formGeneric").empty();
			
			// Funzione per icona "modifica"
			polizzaEdit = function()
			{
				// RESET: Rimuove tutti i blocchi di editing in giro per la pagina e mostra tutti i blocchetti di output e relative icone di editing
				$(".formGeneric.editing").remove();
				$(".formGeneric.output").show();
				$(".icoEdit").show();
				$("#aggiungiLink").show();
				$("#polizzaEditing").hide();
				
				// Nasconde il link premuto
				var linkEd = $(this);
				linkEd.hide();
				
				// Nasconde il contenuto del form
				var polizzaWrapper = linkEd.closest(".borderFormRounded");
				var newFg = $("<div>").addClass("formGeneric editing").html(polizzaEditCode);
				
				// Si comporta diversamente a seconda della richiesta
				if (polizzaWrapper.length)
				{
					// Acquisisce i dati dall'oggetto racchiuso in "formGeneric"
					var polName = polizzaWrapper.find("*[data-name=nomePolizza]").html();
					var polScadenza = polizzaWrapper.find("*[data-name=dataScadenzaNew]").attr("data-value");
					var polTipo = polizzaWrapper.find("*[data-name=tipoVeicoloNew]").attr("data-value");
					var polTarga = polizzaWrapper.find("*[data-name=targaNew]").attr("data-value");
					// var polContatto= polizzaWrapper.find("*[data-name=prefContatto]").attr("data-value");
					var polNumero = polizzaWrapper.find("*[data-name=progressivo]").attr("data-value");
					
					
					// Nasconde il blocchetto "attuale"
					polizzaWrapper.find(".formGeneric").addClass("output").hide();
					
					// Modifica il blocchetto newFg coi dati
					newFg.find("#nomePolizza").html(polName);
					newFg.find("input[name='dataScadenzaNew']").val(polScadenza);
					newFg.find("select[name='tipoVeicoloNew']").val(polTipo);
					newFg.find("input[name='targaNew']").val(polTarga);
					// newFg.find("input[name='prefContatto'][value='" + polContatto + "']").attr("checked",true);
					newFg.find("input[name='progressivo']").val(polNumero);
					
				}
				else
				{
					// Siamo in editing ed il Wrapper è sempre lo stesso
					polizzaWrapper = $("#polizzaEditing");
					polizzaWrapper.show();
				}
				
				// Immette l'html nel blocchetto e lo popola coi dati
				polizzaWrapper.append(newFg);
				var dsNew = polizzaWrapper.find("input[name='dataScadenzaNew']");
				//mask su input data scadenza
				dsNew.mask("99/99");
				// Inserimento controllo dato con fix del placeholder
				IEputPh(dsNew);
				
				if($("#alertNoPolizze").length){
					$("#alertNoPolizze").toggle();
				}
				if($("#linkPrivacy").length){
					$("#linkPrivacy").toggle();
				}
			}
			
			$(".icoEdit").click(polizzaEdit);
			$("#aggiungiLink").click(polizzaEdit);
		});

		validateForm = function(metodo){
			var url = cgi_script + '/wbOnetoone/scadenzaPolizzaValidator.do';
			var parameters = $("#catScadAssForm").serialize();
		    var failureFunc = function(jqXHR, exception) {
		            if (jqXHR.status === 0) {
		                alert('Not connect.\n Verify Network.');
		            } else if (jqXHR.status == 404) {
		                alert('Requested page not found [404].');
		            } else if (jqXHR.status == 500) {
		                alert('Internal Server Error [500].');
		            } else if (exception === 'parsererror') {
		                alert('Requested JSON parse failed.');
		            } else if (exception === 'timeout') {
		                alert('Time out error.');
		            } else if (exception === 'abort') {
		                alert('Ajax request aborted.');
		            } else {
		                alert('Uncaught Error.');
		            }
		    	};
		    var successFunc = function (data) {
				if(data.esito == 'ok'){
					var errors = [];
					if(metodo != "update_pc"){
						if (data.dataScadenza) {
							errors.push({ field: $("input[name='dataScadenzaNew']"), text: "Inserire una data scadenza valida nel formato gg/mm" });
						}
						if (data.targa) {
							errors.push({ field: $("input[name='targaNew']"), text: "Inserire una targa valida" });
						}
					}
					if (data.prefContatto) {
						errors.push({ field: $("#prefContatto1"), text: "Specificare il canale tramite il quale ti verranno ricordate le scadenze delle polizze" });
					}
					setErrors(errors, "#catScadAssForm");
					if (errors.length) {
						$(errors[0].field).trigger('focus');
					}
					if((!errors.length)){
						var form = document.catScadAssForm;
						if (isLibrerie) {
							form.action = "/connect.php?page=str_interna_priv.php&tpl=tpl_priv_scadenzario_polizza.php&list=true";
						}
						else {
							form.action = "/pri/wbOnetoone/2l/do/wbOnetoone/scadenzaPolizza.do?cf=0.8937196847532647&tabId=nav_priv_wbx_assicurazioni&OBSKEY=nav_priv_veicoli_multiprotezione_scad";
						}
						document.getElementById('method').value = metodo;
						form.submit();
					}
				}			
			};

			if (isLibrerie) {
				successFunc({
					"esito":"ok",
					"targa":false,
					"prefContatto":false,
					"dataScadenza":false
				});
			} else {
				jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
			}
		}
		
		elimina = function(index) {
			$("#catScadAssForm input[name='progressivo']").val(index);
			$("#catScadAssForm input[name='method']").val('delete');
			//alert($("#catScadAssForm").serialize());
			var form = document.catScadAssForm;
			if (isLibrerie) {
				form.action = "/connect.php?page=str_interna_priv.php&tpl=tpl_priv_scadenzario_polizza.php";
			}
			else {
				form.action = "/pri/wbOnetoone/2l/do/wbOnetoone/scadenzaPolizza.do?cf=0.4622066164998113&tabId=nav_priv_wbx_assicurazioni&OBSKEY=nav_priv_veicoli_multiprotezione_scad";
			}
			form.submit();
		}
		
		aggiornaPc = function() {
			validateForm('update_pc');
		}
		
		prosegui = function()
		{
			$('#prosegui').hide();
			$('#modifica').show();
			$('#concorso').show();
		}
		
		modifica = function()
		{
			$('#prosegui').show();
			$('#modifica').hide();
			$('#concorso').hide();
		}
		
		inserisci = function()
		{
			//alert($("#catScadAssForm").serialize());
			//alert($("#catScadAssForm input[name='progressivo']").val());
			if($("#catScadAssForm input[name='progressivo']").val() == "-1"){
				validateForm('insert');
			}else{
				validateForm('update');
			}
		}
	</script>
</form>
