<script type="text/javascript">	
//inizializzazione datepicker

$(function () {
	
	$("#datepickerTool2").mask("99/99/9999");
	$("#datepickerTool2").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onSelect : setMaxDate,
    onClose: function(){
    	$('#datePickerWrapper').modal('hide');
    }
    })
   appendDatePickerIcon('datepickerTool2');
    function setMaxDate(){
		var dateSelected = $("#datepickerTool2").datepicker('getDate');
		var dateSelected = (dateSelected.getDate()) + '/' + (dateSelected.getMonth() +1)  + '/' + dateSelected.getFullYear();
		console.log(dateSelected);
		$("#datepickerTool3").mask("99/99/9999");
		$("#datepickerTool3").datepicker({
		minDate: 1,
		maxDate: dateSelected,
		showOtherMonths: true,
		showOn: "button",
		prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
		nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
		buttonImage: "/img/ret/pixel_trasp.gif",
		buttonImageOnly:true,
		beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
	    onClose: function(){
	    	$('#datePickerWrapper').modal('hide');
	    }
	    })
	    appendDatePickerIcon('datepickerTool3');
	}
	
	});
	
$(function () {
	
	
	
    
    
	});
</script>



<form class="formGenerico borderFormRounded searchFilter" role="form" id="form07">
<!--RIGA DIVISA IN TRE CAMPI -->
<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
				<label class="control-label">Lorem ipsum</label>
				<select class="form-control">
					<option>lorem</option>
					<option>lorem</option>
					<option>lorem</option>
				</select>
		</div>
		<div class="col-sm-6">
				<label class="control-label">Lorem ipsum</label>
				<select class="form-control">
					<option>lorem</option>
					<option>lorem</option>
					<option>lorem</option>
				</select>
		</div>
	</div>
</div>
<div class="form-group">
<div class="row">
	<div class="col-sm-6">
			<label class="control-label">Lorem ipsum</label>
			<select class="form-control">
				<option>lorem</option>
				<option>lorem</option>
				<option>lorem</option>
			</select>
	</div>
	<div class="col-sm-6">
		<label class="control-label">Periodo</label>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-inline">
				 <div class="form-group">
					  <div class="input-group">
					     <div class="input-group-addon first">Dal</div>
					     <input type="text" id="datepickerTool2" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
					     <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
					  </div>
					</div>
				</div> 
			</div>  
			<div class="col-sm-6">
			<div class="form-inline">
			  <div class="form-group">
				  <div class="input-group">
				     <div class="input-group-addon first">Al</div>
				     <input type="text" id="datepickerTool3" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
				     <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
				  </div>
				</div>
			</div>

		</div>
		</div>
	</div>
	
</div>
</div>
<div class="form-group">
			<div class="btn-align-center">
				<a type="button" class="btn btn-primary" id="">lorem</a>
				<br class="clear">
			</div>
		</div>
</form>