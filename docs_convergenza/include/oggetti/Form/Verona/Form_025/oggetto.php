<form method="post" action="" id="" action="upload.php">		
<section>
	<div id="otp">
		<h3 class="titleSection titleForm">Tipo documento</h3>
		<div class="formWrapper">
			<div class="form-group">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
						<select name="" class="form-control" id="selectionDocument">             
		                    <option id="" selected="selected" value="ci_cartacea">Carta identità cartacea</option>
		                    <option value="ci_elettronica">Carta identità elettronica</option>
		                    <option value="passaporto">Passaporto</option>                                      
		                    <option value="pat_cartacea">Patente cartacea</option>                                      
		                    <option value="pat_elettronica">Patente elettronica</option>                                      
                    	</select>
                    </div>
				</div>
				<div class="row" id="fronteRetro-wrapper">
					<div class="form-field-input col-xs-12 col-sm-6">
						<label>
		                   <input type="checkbox" name="fronteRetro" id="fronteRetro">Fronte e Retro in un unico file
		                </label>
					</div>
				</div>
			</div>
			<div class="form-group" id="formati-wrapper">
				<div class="row">
					<div class="col-xs-12">
						<p>Immagine documento (<span class="small">Formati accettati: jpg, png, pdf. - Max: 5MB</span>)</p>
					</div>
				</div>
			</div>

			<div class="form-group wrapper-doc" id="wrapper-doc_cartaceo">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field alignCenter">
							<img src="/HT/fe/img/ci_cartacea_fronte.png" class="thumb">
							<output class="file-preview"></output>
							<div class="upload-wrapper">
								<label for="doc_cartaceo-front-upload" class="custom-file-upload btn btn-primary" data-label="Carica fronte">Carica fronte</label>
								<input id="doc_cartaceo-front-upload" type="file" accept="image/jpg"/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field alignCenter">
							<img src="/HT/fe/img/ci_cartacea_retro.png" class="thumb">
							<output class="file-preview"></output>
							<div class="upload-wrapper">
								<label for= "doc_cartaceo-retro-upload" class="custom-file-upload btn btn-primary" data-label="Carica retro">Carica retro</label>
								<input id="doc_cartaceo-retro-upload" type="file"/>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="form-group wrapper-doc" id="wrapper-doc_elettronica" style="display:none">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field alignCenter">
							<img src="/HT/fe/img/ci_elettronica_fronte.png" class="thumb">
							<output class="file-preview"></output>
							<div class="upload-wrapper">
								<label for="doc_elettronica-front-upload" class="custom-file-upload btn btn-primary" data-label="Carica fronte">Carica fronte</label>
								<input id="doc_elettronica-front-upload" type="file" accept="image/jpg"/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field alignCenter">
							<img src="/HT/fe/img/ci_elettronica_retro.png" class="thumb">
							<output class="file-preview"></output>
							<div class="upload-wrapper">
								<label for="doc_elettronica-retro-upload" class="custom-file-upload btn btn-primary" data-label="Carica retro">Carica retro</label>
								<input id="doc_elettronica-retro-upload" type="file"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group wrapper-doc" id="wrapper-doc_passaporto" style="display:none">
				<div class="row">
					<div class="form-field-input col-xs-12">
						<div class="form-field alignCenter">
							<img src="/HT/fe/img/passaporto.png" class="thumb">
							<output class="file-preview"></output>
							<div class="upload-wrapper">
								<label for="passaporto-upload" class="custom-file-upload btn btn-primary" data-label="Carica">Carica</label>
								<input id="passaporto-upload" type="file" accept="image/jpg"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group wrapper-doc" id="wrapper-pat_cartaceo" style="display:none">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field alignCenter">
							<img src="/HT/fe/img/pat_cartacea_front.png" class="thumb">
							<output class="file-preview"></output>
							<div class="upload-wrapper">
								<label for="pat_cartaceo-front-upload" class="custom-file-upload btn btn-primary" data-label="Carica fronte">Carica fronte</label>
								<input id="pat_cartaceo-front-upload" type="file" accept="image/jpg"/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field alignCenter">
							<img src="/HT/fe/img/pat_cartacea_retro.png" class="thumb">
							<output class="file-preview"></output>
							<div class="upload-wrapper">
								<label for= "pat_cartaceo-retro-upload" class="custom-file-upload btn btn-primary" data-label="Carica retro">Carica retro</label>
								<input id="pat_cartaceo-retro-upload" type="file"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group wrapper-doc" id="wrapper-pat_elettronica" style="display:none">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field alignCenter">
							<img src="/HT/fe/img/pat_elettronica_fronte.png" class="thumb">
							<output class="file-preview"></output>
							<div class="upload-wrapper">
								<label for="pat_elettronica-front-upload" class="custom-file-upload btn btn-primary" data-label="Carica fronte">Carica fronte</label>
								<input id="pat_elettronica-front-upload" type="file" accept="image/jpg"/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field alignCenter">
							<img src="/HT/fe/img/pat_elettronica_retro.png" class="thumb">
							<output class="file-preview"></output>
							<div class="upload-wrapper">
								<label for="pat_elettronica-retro-upload" class="custom-file-upload btn btn-primary" data-label="Carica retro">Carica retro</label>
								<input id="pat_elettronica-retro-upload" type="file"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group wrapper-doc" id="wrapper-doc_fronte-retro" style="display:none">
				<div class="row">
					<div class="form-field-input col-xs-12">
						<div class="form-field alignCenter">
							<img src="/HT/fe/img/ci_unico_file.png" class="thumb">
							<output class="file-preview"></output>
							<div class="upload-wrapper">
								<label for="file-front-upload" class="custom-file-upload btn btn-primary" data-label="Carica fronte">Carica fronte</label>
								<input id="file-front-upload" type="file" accept="image/jpg"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group wrapper-doc" id="wrapper-pat_fronte-retro" style="display:none">
				<div class="row">
					<div class="form-field-input col-xs-12">
						<div class="form-field alignCenter">
							<img src="/HT/fe/img/pat_cartacea_unico_file.png" class="thumb">
							<output class="file-preview"></output>
							<div class="upload-wrapper">
								<label for="file-front-upload" class="custom-file-upload btn btn-primary" data-label="Carica fronte">Carica fronte</label>
								<input id="file-front-upload" type="file" accept="image/jpg"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="formToActivate">
				<div class="form-group">
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-6">
							<label class="control-label">Numero del documento</label>
					<input type="text" name="" maxlength="" size="" value="" class="form-control clear-x" placeholder="testo placeholder" id="numDoc">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-6">
							<label class="control-label">Data rilascio</label>
							<div class="form-field">
				                <input id="ggRil" type="tel"  placeholder="gg" name="" maxlength="2" size="2" value="" id="" class="form-control input-inline">
				                <span class="fLeft paddingSmall"></span>
				                <input  id="mmRil" type="tel"  placeholder="mm" name="" maxlength="2" size="2" value="" id="" class="form-control input-inline">
				                <span class="fLeft paddingSmall"></span>
				                <input id="aaaaRil" type="tel" placeholder="aaaa" name="" maxlength="4" size="4" value="" id="" class="form-control input-inline">
	              			</div>
						</div>
						<div class="form-field-input col-xs-12 col-sm-6">
							<label class="control-label">Data di scadenza</label>
							<div class="form-field">
				                <input type="tel" id="ggSca" placeholder="gg" name="" maxlength="2" size="2" value="" id="" class="form-control input-inline">
				                <span class="fLeft paddingSmall"></span>
				                <input type="tel" id="mmSca" placeholder="mm" name="" maxlength="2" size="2" value="" id="" class="form-control input-inline">
				                <span class="fLeft paddingSmall"></span>
				                <input type="tel" id="aaaaSca" placeholder="aaaa" name="" maxlength="4" size="4" value="" id="" class="form-control input-inline">
	              			</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-4">
							<label class="control-label">Paese</label>
							<div class="form-field">
				               <select name="" class="form-control" id="paese">             
			                      <option id="" selected="selected" value="">Seleziona</option>
			                      <option value="Paese1">Paese1</option>
			                      <option value="Paese2">Paese2</option>
			                      <option value="Paese3">Paese3</option>
			                   </select>
	              			</div>
						</div>
						<div class="form-field-input col-xs-12 col-sm-4">
							<label class="control-label">Provincia</label>
							<div class="form-field">
				               <select name="" class="form-control" id="provincia">             
			                      <option id="" selected="selected" value="">Seleziona</option>
			                      <option value="Provincia1">Provincia1</option>
			                      <option value="Provincia2">Provincia2</option>
			                      <option value="Provincia3">Provincia3</option>
			                   </select>
	              			</div>
						</div>
						<div class="form-field-input col-xs-12 col-sm-4">
							<label class="control-label">Comune</label>
							<div class="form-field">
				               <select name="" class="form-control" id="comune">             
			                      <option id="" selected="selected" value="">Seleziona</option>
			                      <option value="Comune1">Comune1</option>
			                      <option value="Comune2">Comune2</option>
			                      <option value="Comune3">Comune3</option>
			                   </select>
	              			</div>
						</div>
					</div>
				</div>
			</div>
				<div class="overlayer-obj-toWrapper">
					<!--<div class="form-group">
						<div class="row">
							<div class="form-field-input col-xs-12 col-sm-6">
								<div class="form-field">
									<label class="control-label">
										Per proseguire inserisci la Password usa e getta dal tuo Token di sicurezza.
									</label>
								</div>
							</div>
							<div class="form-field-input col-xs-12 col-sm-6">
								<div class="form-field-input">
									<img src="/HT/fe/img/OTPWHV.png">
									<input type="text" id="codiceOTP" value="" size="" maxlength="" name="" autocomplete="off" tabindex="1" class="form-control wauto"> 
									<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=01','Help: lorem ipsum')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill icon-2x"></i></a>
								</div>
							</div>
						</div>
					</div>
					<p>La banca è sollevata da ogni responsabilità derivante da eventuale errata digitazione dei dati obbligatori inseriti.</p>
						-->
					<span id="otp">

	
	
	
		







	








<section>
<div id="otp">

	
		
		
			
			
				
					
				
				
							
			
				
					
				
				
			
						
	
	
		
			<h3 class="titleSection">
				











	</h3><h3 class="titleSection titleForm">

	
		Conferma richiesta
	
	
	
	

	</h3>



			
		
		<div class="formWrapper">
			<div class="form-group">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field">
							<label class="control-label">
								Per proseguire è necessario inserire la <b>Password usa e getta</b> riportata sul display del dispositivo di sicurezza Servizi You.
							</label>
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field-input">
								<img src="/HT/fe/img/OTPWT.png">
								<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control wauto" style="margin-top:5px"> 
								
									<a href="#" onclick="javascript:OpenHelp('/HT/HTML/HelpOtp.html')" class="no-underline btn-icon hidden-xs">
										<i class="icon icon-info_fill icon-2x"></i>
									</a>
								
						</div>
					</div>
				</div>
			</div>
		</div>


</div>
</section>






	



<script type="text/javascript">
$(function() {
	if ($("#helpDialog").length==0) {
		var helpDialog = $("<div>", {
				"class": "modal fade helpDialog",
				"id": "helpDialog",
				"tabindex": "-1",
				"role": "dialog",
				"aria-labelledby": "myLargeModalLabel"});
		var modalContent = $("<div>").addClass("modal-content");
		helpDialog.append($("<div>").addClass("modal-dialog")
				.append(modalContent));
		modalContent.append($("<div>").addClass("modal-header clearfix")
				.append($("<button>", {
					"type": "button",
					"class": "close",
					"data-dismiss": "modal",
					"aria-label": "Close"})
					.append($("<span>", {
						"aria-hidden":"true"}).html("&times;"))));
		modalContent.append($("<div>").addClass("modal-body"));
		$("body").prepend(helpDialog);
	}
});
</script>






	


</span>

				</div>
		</div>
	</div>
</section>
</form>			
<!-- funzini per upload -->
<script type="text/javascript">
	$(function () {
	$('#modaleStatico').on('shown.bs.modal',function(event){
		var imgSrc = $(event.relatedTarget).find('img').attr('src');
		$(event.target).find('.modal-body').empty().append('<img class="prevZoom" src="' + imgSrc + '"/>');
	})
	var btnFileToUpload = $('.upload-wrapper input');
	var selectionDoc = document.getElementById('selectionDocument');
	var selectionOneDoc = document.getElementById('fronteRetro');
	var isWrapped = true;
	selectionDoc.addEventListener('change', setDocSelected,false);
	btnFileToUpload.on('change', setUploaded);
	selectionOneDoc.addEventListener('click', setOnlyOneDoc,false);
	setLayer();
	function setDocSelected(){
		$('.wrapper-doc .thumb').eq(0).show().next('span').remove();
		for(i=0;i<=$('.custom-file-upload').length;i++){
			$('.custom-file-upload').eq(i).html($('.custom-file-upload').eq(i).attr('data-label'));
		}
		
		//resetto l'upload
		switch(this.value){
			case 'ci_cartacea':
				$('.wrapper-doc').hide();
		        $('#wrapper-doc_cartaceo,#fronteRetro-wrapper,#formati-wrapper').show();
		        $('#fronteRetro').attr('disabled',false);
			break;
			case 'ci_elettronica':
				$('.wrapper-doc').hide();
		        $('#wrapper-doc_elettronica').show();
		        $('#fronteRetro').attr('disabled',true);
			break;
			case 'passaporto':
				$('.wrapper-doc').hide();
				$('#wrapper-doc_passaporto').show();
				$('#fronteRetro').attr('disabled',true);
			break;
			case 'pat_cartacea':
				$('.wrapper-doc').hide();
		        $('#wrapper-pat_cartaceo').show();
		        $('#fronteRetro').attr('disabled',false);
			break;
			case 'pat_elettronica':
				$('.wrapper-doc').hide();
		        $('#wrapper-pat_elettronica').show();
		        $('#fronteRetro').attr('disabled',true);
			break;
		}
	}

	function setUploaded(evt){

		const fileToUpload = this.files[0];
			if (window.File && window.FileReader && window.FileList && window.Blob) {
			  var files = evt.target.files; 
			  for (var i = 0, f; f = files[i]; i++) {
			  // Only process image files.
		     

		      if (!f.type.match('image/png') && !f.type.match('image/jpeg') && !f.type.match('pdf')) {
		      	alert('formato non corretto');
		        continue;
		      }
		     var reader = new FileReader();
				reader.onload = (function(theFile) {
			    const fileprev = $(evt.target).closest('.form-field').find('.file-preview').eq(0);
			    const imgPlaceholder=$(evt.target).closest('.form-field').find('.thumb:visible').eq(0);
			    const spanToRemove = $(evt.target).closest('.form-field').find('span').eq(0);
			    var isPdf = f.type.match('pdf');
		        return function(e) {;
		          // Render thumbnail.
		          var span = document.createElement('span');
		          if(isPdf) {
		          	span.innerHTML = ['<img class="thumb pdf" src="/HT/fe/img/file-pdf.png"',
		                            'title=""','onclick=javascript:;', '"/>"'].join('');
		          }
		          else{
		          	  span.innerHTML = ['<a href="javascript:;" data-toggle="modal" data-target="#modaleStatico"><img class="thumb" src="', e.target.result,
		                            '" title="', escape(theFile.name), '"/></a>'].join('');
		          }
		          $(imgPlaceholder).hide();
		          $(spanToRemove).remove();
		          $(span).insertBefore(fileprev);
		          $(evt.target).prev('label').eq(0).html('modifica');
		         
		        };
		      })(f);

		      // Read in the image file as a data URL.
		      reader.readAsDataURL(f);
		    }
			} else {
			  //eventuale soluzione alternativa se non supportato
			  alert('non supportato');
			}
	}
	function  setOnlyOneDoc(){
		//alert($(this).is(':checked'));
		if($(this).is(':checked') && $('#selectionDocument').val()==='ci_cartacea'){
			$('#wrapper-doc_cartaceo').hide();
			$('#wrapper-doc_fronte-retro').show();
		}
		else if(!$(this).is(':checked') && $('#selectionDocument').val()==='ci_cartacea') {
			$('#wrapper-doc_cartaceo').show();
			$('#wrapper-doc_fronte-retro').hide();
		}
		else if($(this).is(':checked') && $('#selectionDocument').val()==='pat_cartacea'){
			$('#wrapper-pat_cartaceo').hide();
			$('#wrapper-pat_fronte-retro').show();
		}
		else if(!$(this).is(':checked') && $('#selectionDocument').val()==='pat_cartacea'){
			$('#wrapper-pat_cartaceo').show();
			$('#wrapper-pat_fronte-retro').hide();
		}
	}
	function setLayer(){
		$('.overlayer-obj-toWrapper').wrap('<div class="overlayer-obj-Wrapper">');
		$('<div class="overlayer-layer">').insertAfter('.overlayer-obj-toWrapper');
		isWrapped = true;
	}
	function unSetLayer(){
		$('.overlayer-obj-toWrapper').unwrap('<div class="overlayer-obj-Wrapper">');
		$('.overlayer-layer').remove();
		isWrapped = false;
	}
	function checkFocusOut(){
		const fieldsArray = ['numDoc','ggRil','mmRil','aaaaRil','ggSca','mmSca','aaaaSca','paese', 'provincia', 'comune'];
		var isEmpty = true
		//console.log($('#chiRil').val());
		$.each(fieldsArray,function(index,value){
			$('#' + value).val() == '' ? isEmpty=true : isEmpty=false;
		})
		
		if(!isEmpty){
			unSetLayer();
		}
		else if (!isWrapped) {
			setLayer();
		}
	}
	const inputToActivate = $('.formToActivate').find('input,select');
	inputToActivate.on('focusout',checkFocusOut);
	})
	//overlayer oggetto bottom


</script>




<div id="modaleStatico" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title">TITOLO MODALE</h1>
      </div>
      <div class="modal-body">
       
      </div>
      <div class="modal-footer">
       	<div class="align-right">
			<input type="button" name="chiudi" value="Chiudi" data-dismiss="modal" class="btn  btn-primary" alt="Chiudi">
		</div>
		</div>
    </div>
	</div>
</div>
