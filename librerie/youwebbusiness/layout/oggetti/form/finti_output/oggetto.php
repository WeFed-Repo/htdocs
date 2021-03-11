
<a href="javascript:;" id="emulateLink">Trasforma in output</a>
<br>
<br>
<div class="bordered mb-4">
 <form class="form-grid needs-validation" novalidate>
    <div class="form-row">
      <div class="form-group col-sm-3">
        <label class="control-label">Text</label>
        <input type="text" class="form-control" placeholder="Text" id="inputField" value="Text">
      </div>
      <div class="form-group col-sm-3">
        <label class="control-label">Select</label>
        <select class="form-control" id="selectField">
          <option selected>Lorem</option>
          <option>Ipsum</option>
        </select>
      </div>
      <div class="form-group col-sm-3">
        <label class="control-label">Datepicker</label>
        <div class="input-group datepicker">
          <input type="text" id="dateField" class="form-control" data-datepicker autocomplete="off" placeholder="Data" value="30/03/2021"/>
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="icon icon-ico_calendario"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="form-group col-sm-3">
        <label class="control-label">Timepicker</label>
        <div class="input-group bootstrap-timepicker timepicker">
          <input type="text" id="timeField" class="input-group-addon form-control hasTimepicker" placeholder="00:00" data-timepicker="" value="2:15">
          <div class="input-group-append input-group-addon">
            <span class="input-group-text">
              <img src="./fe/img/icon/orologio.svg">
            </span>
          </div>
        </div>
      </div>
      <div class="form-group col-sm-3">
         <div class="form-check  radio">
           <input class="form-check-input" type="radio"  name="inlineRadioOptions" value="" id="radioField">
           <label class="form-check-label" for="radioField">Lorem ipsum</label>
         </div>
       </div>
       <div class="form-group col-sm-3">
         <div class="form-check  checkbox">
           <input class="form-check-input" type="checkbox" id="checkField" name="inlineRadioOptions" value="">
           <label class="form-check-label" for="checkField">Lorem ipsum</label>
         </div>
       </div>
       <div class="form-group col-sm-3">
         <div class="form-check  checkbox switch">
           <input class="form-check-input" type="checkbox" id="checkSwitch" name="checkSwitch">
           <label class="form-check-label" for="checkSwitch">Lorem ipsum</label>
         </div>
       </div>
       <div class="form-group col-sm-7">
          <label class="control-label">Textarea</label>
           <textarea id="textareaField" name="" rows="4" cols="50" class="form-control">lorem ipsum</textarea>
        </div>
    </div>
</form>
</div>
<!--EMULARE LA TRASFORMAZIONE IN FINTI OUTPUT DI CAMPI IN INPUT -->
<script>
   $("#emulateLink").on("click", function() {
      var idFieldToTransform = ['inputField','selectField', 'dateField', 'timeField', 'radioField', 'checkField', 'checkSwitch','textareaField'];
      $.each(idFieldToTransform,function(key,value){
        setOutputField(value)
      })
   })
   
   function setOutputField(idElTo) {
     var el = $('#' + idElTo);
        el.prop('disabled',true).closest('.form-group').addClass('field-output');
  }
  
</script>