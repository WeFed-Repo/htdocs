<section>
	<form id="formAggiungiContatti">
		<div class="formWrapper">
			<div class="form-group">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
						<label class="control-label">Contatto*</label>
						<div class="form-field">
							<input type="text" id="contatto" name="contatto" class="form-control input-required">
						</div>
					</div>
					<?php 
					if ($site == "webank") 
					{
						?>
					<div class="form-field-input col-xs-12 col-sm-6 paddingTopMedium">
                    	<label><input type="checkbox" name="" id="">Contatto veloce</label>
                  	</div>
                  	<?php
					}?>	
                </div>
               
			</div>
			<div class="form-group">
				<div class="add-wrapper">
					<div class="addContoWrapper"></div>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
						 		<a class="link-text  btn-aggiungi" href="javascript:;" data-block="conto"><i class="icon icon-f-row_expand"></i> Aggiungi conto</a>
						 	</div>
						 </div>
					</div>
					
				</div>
			</div>
					
		    <div class="form-group">
		    	<div class="add-wrapper">
		    		<div class="addContoWrapper"></div>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
						 		<a class="link-text  btn-aggiungi" href="javascript:;" data-block="numero"><i class="icon icon-f-row_expand"></i> Aggiungi numero di telefono</a>
						 	</div>
						 </div>
					</div>
				</div>
		    </div>
		     <div class="form-group">
		    	<div class="add-wrapper">
		    		<div class="addContoWrapper"></div>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
						 		<a class="link-text  btn-aggiungi" href="javascript:;" data-block="carta"><i class="icon icon-f-row_expand"></i> Aggiungi carta prepagata</a>
						 	</div>
						 </div>
					</div>
				 </div>
		    </div>
		   <br>
		    <div class="form-group btnWrapper">
		    	<div class="btn-align-left">
		          <a type="button" href="#" class="btn btn-default noMargin" title="prosegui" id="">annulla</a>
		      </div>
		       <div class="btn-align-right">
		          <a type="button" href="#" class="btn btn-primary to-able disabled " title="prosegui" disabled id="proseguiAggiungiContatti">prosegui</a>
		      </div>
   			</div>
   		    <br>
   		    <br>
   			<p class="note">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet ex id erat pretium,</p>
		</div>
	</form>
</section>
  <script>
  	//chiamata per caricare html aggiunto
 	checkFocusOutToAble('formAggiungiContatti', ableButton);
 	//chiamata per caricare html aggiunto
 	var btnAggiungi= $('.btn-aggiungi');

    btnAggiungi.on('click', function(){
    	var  btnAdd = $(this),
    	bloccoToAdd,
    	urlToCall;
    	
    	 switch (btnAdd.attr('data-block')) {
    	 	case 'conto':
    	 	urlToCall = "/include/aggiungiConto.html";
    	 	break;

    	 	case 'numero':
    	 	urlToCall = "/include/aggiungiNumero.html";
    	 	break;

    	 	case 'carta':
    	 	urlToCall = "/include/aggiungiCarta.html";
    	 	break;
    	 	
    	}

    	console.log(urlToCall)

    	if(btnAdd.closest('.add-wrapper').find('.addContoWrapper').html()=='') {
	    	 $.ajax({
	          type: "POST",
	              url: urlToCall,
	              dataType: 'html',
	              success: function(result){
	                
	                addConto(result,btnAdd);
	                $('.select-provenienza').change(function(){
				 		if($(this).val()=== 'US'){
				 			$('.inner-input-hidden').show();
				 			$('.inner-input-hidden').find('#intestazioneUS,#bic').addClass('input-required');
				 			$('#proseguiAggiungiContatti').attr('disabled',true).addClass('disabled');
				 			checkFocusOutToAble('formAggiungiContatti', ableButton);
				 		}
				 		else {
				 			$('.inner-input-hidden').hide();
				 			$('.inner-input-hidden').find('#intestazioneUS,#bic').val('').removeClass('input-required');
				 			checkFocusOutToAble('formAggiungiContatti', ableButton);
				 		}
	 				})
	 				$('.icon-delete_table').on('click', function(){
	 					$(this).closest('.addContoWrapper').empty();
	 					restoreBtn();
						checkFocusOutToAble('formAggiungiContatti', ableButton);
	 				})
	          		},
	          		error: function(){
	    	 		console.log('error')
	    	 	}
	    	 	
	        })
    	}

    })
	

    function addConto(resultData,btnAdd) {
    	var wrapperNewConto = btnAdd.closest('.add-wrapper').find('.addContoWrapper');
    	wrapperNewConto.html(resultData);
    	if(wrapperNewConto.find('.input-required').length>0 && !$('#proseguiAggiungiContatti').hasClass('disabled'))
    	{
    		$('#proseguiAggiungiContatti').attr('disabled',true).addClass('disabled');
    		
    	}
    	checkFocusOutToAble('formAggiungiContatti', ableButton);
    }

    function restoreBtn() {
    	if($('#formAggiungiContatti').find('.input-required').val()!= '') {
    		$('#proseguiAggiungiContatti').attr('disabled',false).removeClass('disabled');
    	}
    	
    }

 	
  </script>