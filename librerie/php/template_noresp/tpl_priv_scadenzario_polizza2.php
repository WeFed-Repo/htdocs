<h1>Scadenza polizze</h1>
<div class="bannercatmutui paddBottomSmall">
	<img src="/img/ret/ban_concorsoPolizze.jpg" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum">
</div>
<p class="note txtAlCenter">Il concorso &egrave; valido dal 01/05/2015 al 31/12/2015. Estrazione finale entro il 01/01/2016. Montepremi: 1.000 euro.
	<a href="#" target="_blank">Regolamento</a>
</p>
<br class="clear">
<h3 class="verde">SEGNALACI LA DATA DI SCADENZA DELLA TUA POLIZZA VEICOLI</h3>
<br>
<p>Ti <strong>ricorderemo</strong> in anticipo, via <strong>email</strong> o <strong>sms</strong>, 
    la <strong>scadenza</strong> delle polizze per i veicoli che utilizzi per lavoro o nel tempo libero.
</p>

<form name="catScadAssForm" id="catScadAssForm" method="post" action="">
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
	<p>BLOCCO REGOLAMENTO</p>
<!-- BLOCCO EDITING GENERICO -->
	<div id="polizzaEditing" class="borderFormRounded margBottomMedium">
	    <div class="formGeneric">
	        <!--CONTENUTO HTML DI INPUT -->
			<div class="row-fluid" id="inputRow">
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
	                        <label class="nomefield">Tipo veicolo*</label>
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
	                        <label class="nomefield">Targa veicolo*</label>
	                        <input type="text" name="targaNew">
	                        <input type="hidden" name="progressivo" value="-1">
	                    </div>
	                </div>
	            </div>
	        </div>
	         <!--FINE CONTENUTO HTML DI INPUT -->
			 <!--CONTENUTO HTML DI OUTPUT -->
			<div class="row-fluid" id="outputRow" style="display:none">
				<div class="span3">				
	                <label class="nomefield colorver" id="nomePolizza">Polizza 1</label>
	            </div>
	            <div class="span3">
	                <label class="nomefield">Data scadenza*</label>
	                <div class="row-fluid noMargbottom">
	                    <div class="span10">	
	                        <span class="output">01/06</span>
	                    </div>
	                    <div class="span2">
	                        &nbsp;
	                    </div>
	                </div>
	            </div>
	            <div class="span3">
	                <div class="row-fluid noMargbottom">
	                    <div class="span10">
	                       <label class="nomefield">Tipo veicolo*</label>
						   <span class="output">Automobile</span>
	                    </div>
	                    <div class="span2">
	                        &nbsp;
	                    </div>
	                </div>
	            </div>
	            <div class="span3">
	                <div class="row-fluid ">
	                    <div class="span8">
	                        <label class="nomefield">Targa veicolo*</label>
	                        <span class="output">XXXXXX</span>
	                    </div>
					</div>
	            </div>
	        </div>
			<!--FINE CONTENUTO HTML DI OUTPUT -->
			 
			<!--CONTENUTO HTML COMUNE -->
			<div id="ricordami">
				<div class="row-fluid noMargbottom">
					<div class="span12">				
						<label class="nomefield">Ricordami la scadenza della polizza</label>
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
	       
	        </div>
			 <!--FINE CONTENUTO HTML COMUNE -->
			<div class="row-fluid">
	            <div class="span12">
	                <!--BOTTONIERA SALVA -->
					<div class="aButtoncons" id="btnProsegui">
	                    <span class="btnc"><a class="aButton" href="javascript:;" onclick="openDetailConcorso();"><span>salva e prosegui</span></a></span>
	                </div>
					<!--BOTTONIERA MODIFICA -->
					<div class="btnc aButtoncons boxrichiesta" id="btnModifica" style="display:none">
						<a href="javascript:;" class="modifica"><span>modifica</span></a>
					</div>
	            </div>
	        </div>
			<!--CONTENUTO HTML PER CONCORSO -->
			<div id="partecipaConcorso" style="display:none">
				<div class="row-fluid">
					<div class="span12">
						<strong class="colorBank">Vuoi partecipare al concorso &quot;La scadenza che ti premia&quot;?</strong><br class="clear"><br>
						<p>Per partecipare al concorso devi prendere visione di <a href="javascript;;" target="_blank" id="linkRegolamento">Regolamento e informativa privacy</a> e devi comunicare il tipo e la targa veicolo.
						Ti ricordiamo che i tuoi dati verranno trattati da BPM e comunicati a gruppo ADMA Marketing Advertising S.r.l per le sole finalit&agrave; legate al concorso.
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<label>
							<a href="javascript:;" class="hovfincont">
							<span class="hovfin" data-tooltip="Prima di procedere, occorre prendere visione del Regolamento del concorso e dell'informativa privacy, aprendo i relativi documenti in formato pdf"></span>
							<input type="radio" disabled="" id="radioPartecipa" name="radioPartecipa" value="partecipa"></a>Si, ho letto il regolamento e partecipo
						</label>
					</div>
					
					<div class="span6">
						<label>
							<input type="radio" id="radioPartecipaNo" name="radioPartecipa" value="noPartecipa">Grazie, non mi interessa
						</label>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!--BOTTONIERA CONFERMA -->
						<div class="aButtoncons" id="btnConferma">
							<span class="btnc"><a class="aButton" href="javascript:;" id="confermaBtn"><span>conferma</span></a></span>
						</div>
					</div>
				</div>
			</div>
			<!--FINE CONTENUTO HTML PER CONCORSO -->
	    </div>
	
	</div>
	<!-- FINE BLOCCO EDITING GENERICO -->
	<p>caso 'NON PARTECIPO'</p>
	
	<div id="polizzaOutput" class="borderFormRounded margBottomMedium">
		  <div class="formGeneric">
		 <!--CONTENUTO HTML DI OUTPUT -->
			<div class="row-fluid" id="outputRowNopartecipo">
				<div class="span3">				
	                <label class="nomefield colorver" id="nomePolizza">Polizza 1</label>
	            </div>
	            <div class="span3">
	                <label class="nomefield">Data scadenza*</label>
	                <div class="row-fluid noMargbottom">
	                    <div class="span10">	
	                        <span class="output">01/06</span>
	                    </div>
	                    <div class="span2">
	                        &nbsp;
	                    </div>
	                </div>
	            </div>
	            <div class="span3">
	                <div class="row-fluid noMargbottom">
	                    <div class="span10">
	                       <label class="nomefield">Tipo veicolo*</label>
						   <span class="output">Automobile</span>
	                    </div>
	                    <div class="span2">
	                        &nbsp;
	                    </div>
	                </div>
	            </div>
	            <div class="span3">
	                <div class="row-fluid ">
	                    <div class="span8">
	                        <label class="nomefield">Targa veicolo*</label>
	                        <span class="output">XXXXXX</span>
	                    </div>
						<div class="span4" id="editOutput">
	                        <div style="float:left">
	                            <a href="javascript:;" class="icoEdit" title="Clicca per modificare i dati">
	                            <img src="/img/ret/ico1gr_modifica.gif" alt="Clicca per modificare i dati">
	                            </a>
	                        </div>
	                        <div style="float:right">
	                            <a href="javascript:;" title="Clicca per eliminare la polizza dall'elenco">
	                            <img src="/img/ret/ico1gr_cancella.gif" alt="Clicca per eliminare la polizza dall'elenco">
	                            </a>
	                        </div>
	                        <br class="clear">
	                    </div>
	                </div>
	            </div>
	        </div>
			<div class="row-fluid" class="msgNoConc">
				<div class="span3">				
	                &nbsp;
	            </div>
	            <div class="span9">
	               <p>La targa non partecipa al concorso &quot;la scadenza che ti premia&quot; </p>
	            </div>
			</div>			
			 <!--FINE CONTENUTO HTML DI OUTPUT -->
		</div>
	</div>
	
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
	                        <div style="float:left"><a href="javascript:;" title="Clicca per modificare i dati">
	                            <img src="/img/ret/ico1gr_modifica.gif" alt="Clicca per modificare i dati"></a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<p>caso 'PARTECIPO'</p>
	<div id="polizzaOutput" class="borderFormRounded margBottomMedium">
		  <div class="formGeneric">
		 <!--CONTENUTO HTML DI OUTPUT -->
			<div class="row-fluid" id="outputRowpartecipo">
				<div class="span3">				
	                <label class="nomefield colorver" id="nomePolizza">Polizza 1</label>
	            </div>
	            <div class="span3">
	                <label class="nomefield">Data scadenza*</label>
	                <div class="row-fluid noMargbottom">
	                    <div class="span10">	
	                        <span class="output">01/06</span>
	                    </div>
	                    <div class="span2">
	                        &nbsp;
	                    </div>
	                </div>
	            </div>
	            <div class="span3">
	                <div class="row-fluid noMargbottom">
	                    <div class="span10">
	                       <label class="nomefield">Tipo veicolo*</label>
						   <span class="output">Automobile</span>
	                    </div>
	                    <div class="span2">
	                        &nbsp;
	                    </div>
	                </div>
	            </div>
	            <div class="span3">
	                <div class="row-fluid ">
	                    <div class="span8">
	                        <label class="nomefield">Targa veicolo*</label>
	                        <span class="output" id="targaSalvata">XXXXXX</span>
						 </div>
						<div class="span4" id="editOutput">
	                        <div style="float:left">
	                            <a href="javascript:;" id="icoEditTargaPartecipa" title="Clicca per modificare i dati">
	                            <img src="/img/ret/ico1gr_modifica.gif" alt="Clicca per modificare i dati">
	                            </a>
	                        </div>
	                        <div style="float:right">
	                            <a onclick="$('#polizzaToDelete').val('0');openPopOverLayer('layeralert02b', 'floating', 2)" href="javascript:;" title="Clicca per eliminare la polizza dall'elenco">
	                            <img src="/img/ret/ico1gr_cancella.gif" alt="Clicca per eliminare la polizza dall'elenco">
	                            </a>
	                        </div>
	                        <br class="clear">
	                    </div>
	                </div>
	            </div>
	        </div>
			<div class="row-fluid" id="msgSiConc">
				<div class="span3">				
	                &nbsp;
	            </div>
	            <div class="span9">
	               <label class="nomefield">Concorso &quot;La scadenza che ti premia&quot;</label>
				   <p>Si, partecipo al concorso</p>
	            </div>
			</div>			
			 <!--FINE CONTENUTO HTML DI OUTPUT -->
			<div class="row-fluid" id="inputRowpartecipo" style="display:none">
				<div class="span3">				
	                <label class="nomefield colorver" id="nomePolizza">Polizza 1</label>
	            </div>
	            <div class="span3">
	                <label class="nomefield">Data scadenza*</label>
	                <div class="row-fluid noMargbottom">
	                    <div class="span10">	
	                        <span class="output">01/06</span>
	                    </div>
	                    <div class="span2">
	                        &nbsp;
	                    </div>
	                </div>
	            </div>
				<div class="span3">
	                <div class="row-fluid noMargbottom">
	                    <div class="span10">
	                       <label class="nomefield">Tipo veicolo*</label>
						   <span class="output">Automobile</span>
	                    </div>
	                    <div class="span2">
	                        &nbsp;
	                    </div>
	                </div>
	            </div>
				 <div class="span3">
	                <div class="row-fluid ">
	                    <div class="span8">
	                        <label class="nomefield">Targa veicolo*</label>
	                        <input type="text" name="targaNew">
	                        <input type="hidden" name="progressivo" value="-1">
	                    </div>
	                </div>
	            </div>
			
			</div>
			
			<div class="row-fluid" id="msgSiConcEdit" style="display:none">
				<div class="span3">				
	                &nbsp;
	            </div>
	            <div class="span9">
	               <label class="nomefield">Concorso &quot;La scadenza che ti premia&quot;</label>
				   <label><input type="checkbox" name="checkPartecipo" checked id="checkPartecipo">Si, partecipo al concorso</label>
	            </div>
			</div>	
			<div class="row-fluid" class="msgNoConc" style="display:none">
				<div class="span3">				
	                &nbsp;
	            </div>
	            <div class="span9">
	               <p>La targa non partecipa al concorso &quot;la scadenza che ti premia&quot; </p>
	            </div>
			</div>						
			<div class="row-fluid" id="btnProseguiEditWrapper" style="display:none">
	            <div class="span12">
	                <!--BOTTONIERA SALVA -->
					<div class="aButtoncons" id="btnProseguiEdit">
	                    <span class="btnc"><a class="aButton" href="javascript:;" onclick=""><span>salva</span></a></span>
	                </div>
				</div>
			</div>
		</div>
	</div>
	
	<p>caso 'POST'</p>
	<div id="" class="borderFormRounded margBottomMedium">
		  <div class="formGeneric">
		 <!--CONTENUTO HTML DI OUTPUT -->
			<div class="row-fluid">
				<div class="span3">				
	                <label class="nomefield colorver" id="nomePolizza">Polizza 1</label>
	            </div>
	            <div class="span3">
	                <label class="nomefield">Data scadenza*</label>
	                <div class="row-fluid noMargbottom">
	                    <div class="span10">	
	                        <span class="output">01/06</span>
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
						   <span class="output">Automobile</span>
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
	                        <span class="output" id="targaSalvata">XXXXXX</span>
						 </div>
						<div class="span4" id="editOutput">
	                       <div style="float:right">
	                            <a href="javascript:;" data-tooltip="i dati inseriti non sono modificabili">
									<img src="/img/ret/ico1gr_info.gif" />
								</a>
								<!--<a onclick="$('#polizzaToDelete').val('0');openPopOverLayer('layeralert02b', 'floating', 2)" href="javascript:;" title="Clicca per eliminare la polizza dall'elenco">
	                            <img src="/img/ret/ico1gr_cancella.gif" alt="Clicca per eliminare la polizza dall'elenco">
	                            </a>-->
	                        </div>
	                        <br class="clear">
	                    </div>
	                </div>
	            </div>
	        </div>
			<div class="row-fluid">
				<div class="span3">				
	                &nbsp;
	            </div>
	            <div class="span9">
	               <label class="nomefield">Concorso "La scadenza che ti premia"</label>
				   <p>Si, partecipo al concorso</p>
	            </div>
			</div>			
			 <!--FINE CONTENUTO HTML DI OUTPUT -->
			
		</div>
	</div>
</form>
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
	        <a class="btnformright" href="javascript:;">
	        <img alt="" src="/img/ret/btn_left_ar.gif"/>
	        <span>ok</span>
	        <img alt="" src="/img/ret/btn_right_ar.gif"/>
	        </a>
	        <br class="clear" />
	    </div>
	    <div class="foot"></div>
	</div>	
	
	
	<!-- JS AGGIUNTO PER NUOVI COMPONENTI HTML va integrato nella funzione inserisci()--->
	<script type="text/javascript">
		$(function(){
		openDetailConcorso = function() {
			$(".formGeneric #inputRow,#btnProsegui").hide(); 
			$(".formGeneric #outputRow,#btnModifica,#partecipaConcorso").show(); //mostro la riga di output e diabilito i radio btn
			$('#prefContatto1,#prefContatto2').attr('disabled','disabled');
		}
		
		$('#linkRegolamento').click(function() {
			ableinput('','radioPartecipa');
		})
		
		$('#btnModifica').click(function() {
			$(".formGeneric #inputRow,#btnProsegui").show(); 
			$(".formGeneric #outputRow,#btnModifica,#partecipaConcorso").hide();
			$('#prefContatto1,#prefContatto2').removeAttr('disabled');
		})
		
		$('#icoEditTargaPartecipa').click(function() {
			$("#outputRowpartecipo,#msgSiConc").hide();
			$("#inputRowpartecipo").find('input[name=targaNew]').val($('#targaSalvata').html());
			$("#inputRowpartecipo,#msgSiConcEdit,#btnProseguiEditWrapper").show();
			$('#checkPartecipo').attr('checked','checked');
		})
		
		$('#btnProseguiEdit').click(function() {
			if($('#checkPartecipo').is(':checked')) {
			  $("#outputRowpartecipo,#msgSiConc").show();
			  $("#inputRowpartecipo,#msgSiConcEdit,#btnProseguiEditWrapper,.msgNoConc").hide();
			}
			else
			{
				$("#outputRowpartecipo,.msgNoConc").show();
				$("#inputRowpartecipo,#msgSiConcEdit,#btnProseguiEditWrapper").hide();
			}
		})
		
		})
	</script>
	
	