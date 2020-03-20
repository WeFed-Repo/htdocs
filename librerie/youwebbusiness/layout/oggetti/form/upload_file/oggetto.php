<p>L'input di tipo file è composto da 3 elementi:</p>
<ul>
  <li>INPUT di tipo FILE - nascosto da CSS. Deve avere un ID UNIVOCO in pagina</li>
  <li>BUTTON con attributo "data-file" corrispondente all'ID UNIVOCO dell'input FILE.</li>
  <li>INPUT di tipo TEXT - con attributo "data-file" corrispondente all'ID UNIVOCO dell'input FILE. <u>Deve essere readonly</u></li>
</ul>
<p>L'input di tipo TEXT si comporta come un placeholder dell'input FILE e serve per poter stilare il file input anche per IE.</p>
<p>IMPORTANTE: Ricordare sempre di inserire l'attributo "data-file" nel bottone e nel text: questo attributo triggera in JS il click sull'input FILE.</p>
<p> Se se vuole disabilitare il file upload, applicare il disabled a tutti e tre gli inputs! </p>

<div class="bordered mb-4">
  <form class="form-grid needs-validation" novalidate>

    <div class="form-row">
      <div class="form-group col col-md-8 col-lg-6">
        <label class="control-label">Upload</label>
        <div class="form-row">
          <div class="form-group col-8">
            <input class="form-control" id="upload" name="upload" type="file"/>
            <input data-file="upload" class="form-control" type="text" placeholder="Scegli file" readonly/>
          </div>
          <div class="form-group col">
            <button data-file="upload" class="btn btn-white btn-block">Scegli il file</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ESEMPIO DISABILITATO -->
    <div class="form-row">
      <div class="form-group col col-md-8 col-lg-6">
        <label class="control-label">Upload disabled</label>
        <div class="form-row">
          <div class="form-group col-8">
            <input class="form-control" id="upload" name="upload" type="file" disabled/>
            <input data-file="upload" class="form-control" type="text" placeholder="Scegli file" readonly disabled/>
          </div>
          <div class="form-group col">
            <button data-file="upload" class="btn btn-white btn-block" disabled>Scegli il file</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ESEMPIO ERROR -->
    <div class="form-row">
      <div class="form-group col col-md-8 col-lg-6">
        <label class="control-label">Upload error</label>
        <div class="form-row">
          <div class="form-group col-8">
            <input class="form-control is-invalid" id="upload" name="upload" type="file"/>
            <input data-file="upload" class="form-control is-invalid" type="text" placeholder="Scegli file" readonly/>
            <div class="invalid-feedback">Lorem Ipsum dolor sit amet</div>
          </div>
          <div class="form-group col">
            <button data-file="upload" class="btn btn-white btn-block">Scegli il file</button>
          </div>
        </div>
      </div>
    </div>

  </form>
</div>

<script>
  $("[type='file']").on("change", function() {
    var id = $(this).attr('id');
    var fileName = $(this).val().split("\\").pop();
    $("input[type='text'][data-file='"+id+"']").val(fileName);
  });
  $("[data-file]").on("click", function(event) {
    event.preventDefault()
    var id = $(this).data('file');
    var input = $('#'+id);
    input.trigger( "click" );
  });
</script>