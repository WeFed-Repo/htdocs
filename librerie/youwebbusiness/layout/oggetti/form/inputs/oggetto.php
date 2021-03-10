<!-- notr: la griglia di form-row è creata a solo scopo esemplificativo. -->

<div class="bordered mb-4">
  <?php /* <form class="form-grid needs-validation" novalidate> */ ?>
  <form class="form-grid needs-validation" novalidate>

    <!-- stato normale -->
    <div class="form-row">
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Text</label>
        <input type="text" class="form-control" placeholder="Text">
      </div>
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Select</label>
        <select  class="form-control">
          <option selected>Lorem</option>
          <option>Ipsum</option>
        </select>
      </div>
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Datepicker</label>
        <div class="input-group datepicker">
          <input type="text" class="form-control" data-datepicker autocomplete="off" placeholder="Data"/>
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="icon icon-ico_calendario"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Timepicker</label>
        <div class="input-group bootstrap-timepicker timepicker">
          <input type="text"class="input-group-addon form-control hasTimepicker" placeholder="00:00" data-timepicker="">
          <div class="input-group-append input-group-addon">
            <span class="input-group-text">
              <img src="./fe/img/icon/orologio.svg">
            </span>
          </div>
        </div>
      </div>
    </div>

    <!--SEPARATORE ALL'INTERNO DEI FORM -->
    <div class="form-row">
      <div class="form-group col-sm-12">
        <hr>
      </div>
    </div>
    
    
    <!-- stato disabilitato -->
    <div class="form-row">
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Text disabled</label>
        <input type="text" class="form-control" placeholder="Text" disabled>
      </div>
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Select disabled</label>
        <select  class="form-control" disabled>
          <option selected>Lorem</option>
          <option>Ipsum</option>
        </select>
      </div>
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Datepicker disabled</label>
        <div class="input-group datepicker">
          <input disabled type="text"class="input-group-addon form-control hasTimepicker" placeholder="00:00" data-timepicker="">
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="icon icon-ico_calendario"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Timepicker disabled</label>
        <div class="input-group bootstrap-timepicker timepicker">
          <input type="text" class="input-group-addon form-control hasTimepicker" data-timepicker="Time"  placeholder="00:00" disabled>
          <div class="input-group-append input-group-addon">
            <span class="input-group-text">
              <img src="./fe/img/icon/orologio.svg">
            </span>
          </div>
        </div>
      </div>
    </div>

    <!-- NOTE: per la validazione lato server, aggiungere la classe .is-invalid al
               .form-control e eventualmente aggiungere il messaggio di essore,
               subito dopo il campo input, con classe .invalid-feedback -->

    <!-- validazione -->
    <div class="form-row">
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Text</label>
        <input type="text" class="form-control is-invalid" placeholder="Text">
        <!-- messaggio d'errore personalizzabile -->
        <div class="invalid-feedback">Lorem Ipsum dolor sit amet</div>
      </div>
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Select</label>
        <select  class="form-control is-invalid">
          <option selected>Lorem</option>
          <option>Ipsum</option>
        </select>
        <!-- messaggio d'errore personalizzabile -->
        <div class="invalid-feedback">Lorem Ipsum dolor sit amet</div>
      </div>
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Datepicker</label>
        <div class="input-group datepicker">
          <input type="text" class="form-control is-invalid" data-datepicker autocomplete="off" placeholder="Data"/>
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="icon icon-ico_calendario"></i>
            </span>
          </div>
          <!-- messaggio d'errore personalizzabile -->
          <div class="invalid-feedback">Lorem Ipsum dolor sit amet</div>
        </div>
      </div>
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Timepicker</label>
        <div class="input-group bootstrap-timepicker timepicker">
          <input type="text" class="input-group-addon form-control is-invalid hasTimepicker" placeholder="00:00" data-timepicker="">
          <div class="input-group-append input-group-addon">
            <span class="input-group-text">
              <img src="./fe/img/icon/orologio.svg">
            </span>
          </div>
          <!-- messaggio d'errore personalizzabile -->
          <div class="invalid-feedback">Lorem Ipsum dolor sit amet</div>
        </div>
      </div>
    </div>

    <!-- helper con modale al click -->
    <div class="form-row">
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Helper con modale richiamato da icona
          <img data-modal-open="big" class="helper-label-icon" src="./fe/img/icon/help_2.svg">
        </label>
        <input type="text" class="form-control" placeholder="Input with helper icon">
      </div>
      <?php
        // MODALE
        virtual('/youwebbusiness/layout/oggetti/modale/modale_grande/modale.php');
      ?>
    </div>

    <?php /* * ?>
    <!-- ESEMPIO DI VALIDAZIONE -->
    <!-- test di errore validazione lato client ( campi required o con patterns )-->
    <div class="form-row">
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Text</label>
        <input pattern="^[a-zA-Z0-9]{5,5}$" type="text" class="form-control" placeholder="Text" required >
        <!-- messaggio d'errore personalizzabile -->
        <div class="invalid-feedback"> Valido con 5 caratteri alfanumerici (validazione con pattern HTML5) </div>
      </div>
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Select</label>
        <select  class="form-control" required >
          <option selected></option>
          <option value="1">Lorem</option>
          <option value="2">Ipsum</option>
        </select>
        <!-- messaggio d'errore personalizzabile -->
        <div class="invalid-feedback"> Scegli una voce </div>
      </div>
      <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Datepicker</label>
        <div class="input-group datepicker">
          <input type="text" class="form-control" data-datepicker autocomplete="off" placeholder="Data" required />
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="icon icon-ico_calendario"></i>
            </span>
          </div>
          <!-- messaggio d'errore personalizzabile -->
          <div class="invalid-feedback"> Compila la data </div>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">SUBMIT</button>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            $(this).find('.form-group.invalid').each(function(){
              $(this).removeClass('invalid');
            });
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
    <?php /**/ ?>

  </form>
</div>
