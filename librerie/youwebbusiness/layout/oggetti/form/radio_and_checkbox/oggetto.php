<!-- notr: la griglia di form-row è creata a solo scopo esemplificativo. -->

<div class="bordered mb-4">
  <?php /* <form class="form-grid needs-validation" novalidate> */ ?>
  <form class="form-grid">

    <!-- NOTE: la struttura di radiobuttons e checkbox è identica, ad eccezione
               del type="" dell'input e della classe applicata al .form-check,
               che deve corrispondere al tipo di input desiderato -->

     <!-- NORMAL -->
     <div class="form-row">
       <div class="form-group col-sm-4">
         <div class="form-check  radio">
           <input class="form-check-input" type="radio" id="radio1" name="inlineRadioOptions" value="">
           <label class="form-check-label" for="radio1" >Input</label>
         </div>
       </div>
       <div class="form-group col-sm-4">
         <div class="form-check  checkbox">
           <input class="form-check-input" type="checkbox" id="check1" name="inlineRadioOptions" value="">
           <label class="form-check-label" for="check1">Input</label>
         </div>
       </div>
       <div class="form-group col-sm-4">
         <div class="form-check  checkbox switch">
           <input class="form-check-input" type="checkbox" id="switch1" name="notifica1">
           <label class="form-check-label" for="switch1">Input</label>
         </div>
       </div>
     </div>

     <!-- CHECKED -->
     <div class="form-row">
       <div class="form-group col-sm-4">
         <div class="form-check  radio">
           <input class="form-check-input" type="radio" id="radio2" name="inlineRadioOptions" value="" checked>
           <label class="form-check-label" for="radio2">Input checked</label>
         </div>
       </div>
       <div class="form-group col-sm-4">
         <div class="form-check  checkbox">
           <input class="form-check-input" type="checkbox" id="check2" name="inlineRadioOptions" value="" checked>
           <label class="form-check-label" for="check2">Input checked</label>
         </div>
       </div>
       <div class="form-group col-sm-4">
         <div class="form-check  checkbox switch">
           <input class="form-check-input" type="checkbox" id="switch2" name="notifica2" checked>
           <label class="form-check-label" for="switch2">Input checked</label>
         </div>
       </div>
     </div>

     <!-- DISABLED -->
     <div class="form-row">
       <div class="form-group col-sm-4">
         <div class="form-check  radio">
           <input class="form-check-input" type="radio" id="radio3" name="inlineRadioOptions" value="" disabled>
           <label class="form-check-label" for="radio3">Input disabled</label>
         </div>
       </div>
       <div class="form-group col-sm-4">
         <div class="form-check checkbox">
           <input class="form-check-input" type="checkbox" id="check3" name="inlineRadioOptions" value="" disabled>
           <label class="form-check-label" for="check3" >Input disabled</label>
         </div>
       </div>
       <div class="form-group col-sm-4">
         <div class="form-check  checkbox switch">
           <input class="form-check-input" type="checkbox" id="switch3" name="notifica3" disabled>
           <label class="form-check-label" for="switch3">Input disabled</label>
         </div>
       </div>
     </div>

     <!-- ERRORS -->
     <div class="form-row">
       <div class="form-group col-sm-4">
         <div class="form-check  radio">
           <input class="form-check-input is-invalid" type="radio" id="radio4" name="inlineRadioOptions" value="">
           <label class="form-check-label" for="radio4">Input</label>
           <!-- messaggio d'errore personalizzabile -->
           <div class="invalid-feedback">Lorem Ipsum dolor sit amet</div>
         </div>
       </div>
       <div class="form-group col-sm-4">
         <div class="form-check  checkbox">
           <input class="form-check-input is-invalid" type="checkbox" id="check4" name="inlineRadioOptions" value="">
           <label class="form-check-label" for="check4">Input</label>
           <!-- messaggio d'errore personalizzabile -->
           <div class="invalid-feedback">Lorem Ipsum dolor sit amet</div>
         </div>
       </div>
       <div class="form-group col-sm-4">
         <div class="form-check  checkbox switch">
           <input class="form-check-input is-invalid" type="checkbox" id="switch4" name="notifica1">
           <label class="form-check-label" for="switch4">Input</label>
           <!-- messaggio d'errore personalizzabile -->
           <div class="invalid-feedback">Lorem Ipsum dolor sit amet</div>
         </div>
       </div>
     </div>

  </form>
</div>
