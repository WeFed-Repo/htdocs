<!--INCLUSIONE PLUGIN PER UPLOAD FILE -->
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="/wscmn/js/priv_jquery.iframe-transport_min.js"></script>
<!-- The basic File Upload plugin -->
<script src="/wscmn/js/priv_jquery.fileupload_min.js"></script>
<script>
	//settare variabile nello spazio vuoto per recuperare l'url del file per upload e delete 
	var srcDel = isLib ? '/librerie/php/upload/delete.php?nome_file=' : ''; 
	var url = isLib ? '/librerie/php/upload/upHand.php' : '';
</script>
<!--FINE INCLUSIONE PLUGIN PER UPLOAD FILE -->

<!--CODICE  TINY -->
<script src="/wscmn/tinymce/tinymce.min.js"></script>
<script>
        tinymce.init({
		selector:'textarea#elm1',
		language : 'it',
		statusbar : false,
		resize: false,
		height:'440px',
		width : "100%",
		theme : 'modern',
		menubar : false,
		toolbar: "bold | italic | underline | bullist | numlist",
		font_formats: "Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;AkrutiKndPadmini=Akpdmi-n",
		init_instance_callback : "stopInput"
		});
		function stopInput() {
			var oscuratore = false;
			$('#elm1_ifr').contents().find('.outputMail').eq(0).bind("click", function() {
				var ingombro = $(this).innerHeight() + 10 + 'px';
				if(oscuratore==false)
				{
					$(this).append('<div id="oscuratore" style="position:relative;z-index:1;background-color:transparent;height:' + ingombro + ';margin-top:-' + ingombro + '"></div>')
					oscuratore = true;
				}
			})
		}
		/*$(document).ready(function() {
		
			$('#elm1_ifr').contents().bind("focus", function() {
			alert('');
			})
			
		})*/
</script>

<!--fine CODICE  TINY -->

<!-- js che regola la PEC scrittura e lettura -->
<script src="/js/priv_ret_pec.js" type="text/javascript"></script>
<!--fine  js che regola la PEC scrittura e lettura  -->


<h1>Inbox</h1>

<div class="divtabellalist">

<table border="0" class="tabellalist">
	<tr>
		<td class="on first"><a href="#1" title="Lorem ipsum">Posta in arrivo</a></td>
		<td class="off"><a href="#1" title="Lorem ipsum lorem">Posta inviata</a></td>
		<td class="off"><a href="#1" title="Lorem ipsum">Scrivi a webank</a></td>
		<td class="end">&nbsp;</td>
	</tr>
</table>
</div>
<div class="mailContent">
	<div class="mailCons">
		<div class="left"><a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_pec_inbox_ricevuta.php" class="btnMailin verde">Torna all'elenco messaggi</a></div>
	</div>
	<form id="formMail">
		<fieldset class="repMail">
		  <label>Tipo richiesta:</label> <strong>lorem ipsum</strong>
		</fieldset>
		<fieldset class="repMail">
		  <label>Tipo richiesta:</label> 
		  <select id="selectMail">
			<option>seleziona</option>
			<option>rec</option>
		  </select>
		</fieldset>
		<fieldset class="repMail">
			<label>Oggetto:</label>
			<input type="text" id="oggettoMail">
		</fieldset>
		
		<div id="upload">
			<fieldset class="repMail">
				<label class="flLeft">Allegati:</label> 
				
				<div id="rowToClone" class="flLeft">
					<span class="btn btn-success fileinput-button">
						<input type="file" name="upl"  accept=".pdf,.png,.txt,.cvs"  class="uplId" onclick="upLoadFile()"/>
						<a href="#" class="allegati"><span class="spanAllegati"></span>Allega un file (pdf, png, txt, csv – max 5 Mb</a>
					 </span>
				</div>
				
			<!--FINE riga di UPLOAD DEI FILES -->
			</fieldset>
		</div>
		
		<!--FINE riga di UPLOAD DEI FILES -->
		<input type="hidden" id="contentMail"/>
		<fieldset class="repMail campoToCheck">
			<div class="textareaSpace">	
				<textarea id="elm1" name="elm1" style="width: 80%" class="tinymce">
					<p class="inputMail">
					</p><p></p>
				
					<div class="outputMail">
						<p>il XX/XX/XXXX Webank ha scritto, <br/><br/> sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem  ed ut perspiciatis unde omnis iste natus error sit volupted ut perspiciatis <br/><br/>unde omnis iste natus error sit volupted ut perspiciatis unde omnis iste natus error sit volupted ut perspiciatis unde omnis iste natus error sit volupted ut perspiciatis unde omnis iste natus error sit volupted ut perspiciatis <br/><br/>unde omnis iste natus error sit volupt Lorem ipsum dolor sit amet, <br/><br/>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in <br/><br/>culpa qui officia deserunt mollit anim id est laborum.  Excepteur sint occaecat cupidatat non proident, sunt in <br/><br/>culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in <br/><br/>culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</textarea>
			</div>
			<script>
			  function getContentMail() {
				var textMail = tinyMCE.get('elm1').getContent(); //prendi tutto il contenuto
				var textMailCleaned = $(textMail).filter('*').not('.outputMail').html(); //prendi tutto il contenuto tranne il testo di risposta
				$('.textareaSpace').append(textMailCleaned);
				}
			</script>
			<script type="text/javascript">	
			
				function setErrorsMail() {
					// Check giroconto
					
					var errors = [],
						tipoRichiestaField = $("#selectMail"),
						oggettoField = $("#oggettoMail"),
						testoField = $(".textareaSpace").closest('.repMail'),
						textMail = $('#elm1_ifr').contents().find('p,li').not('.outputMail');
						
					
					if (tipoRichiestaField.val() === 'seleziona') {
						errors.push({ field: tipoRichiestaField, text: "occorre selezionare il tipo richiesta" });
					}
					if (oggettoField.val() === '') {
						errors.push({ field: oggettoField, text: "occorre inserire l'oggetto'" });
					}
					if (textMail.text() == '') {
						errors.push({ field: testoField, text: "occorre inserire il testo della Mail" });
					}
					$('#elm1_ifr').contents().bind( "click", function() {
						if(testoField.hasClass('errore')) {
							testoField.focus();
							ttShow(null, testoField);
						}
					});
					
					setErrors(errors, "#formMail");
					
					if (errors.length) {
						$(errors[0].field).trigger('focus');
					}
					
					return (!errors.length);
				};
				
				
			
			</script>
			<div class="right" id="btnWrapperInvio"><a href="" class="btnMailin annulla"><span>Annulla</span><img src="/wscmn/img/ico1gr_annulla.gif" /></a>
				<a onclick="setErrorsMail()" href="javascript:;" class="btnMailin verde"><span>Invia</span><img src="/img/ico1gr_rispondi.gif" /></a>
			</div>
		</fieldset>
	</form>
</div>

<!-- OVERLAYER Controllo front end da popolare con messaggio status restituito-->
<div class="layeralert2" id="layeralert1" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert1').dragHandle = new Draggable('layeralert1',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closeAlert('layeralert1');  unobscurateAll();"/></div>
	<div class="body">
		<p></p>
	</div>
	<div class="foot"></div>
</div>


 
