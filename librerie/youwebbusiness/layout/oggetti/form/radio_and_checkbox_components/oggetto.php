<!-- notr: la griglia di form-row è creata a solo scopo esemplificativo. -->

<div class="bordered mb-4">
  <?php /* <form class="form-grid needs-validation" novalidate> */ ?>
  <form class="form-grid">

    <!-- radio BIG -->
    <!-- NOTE: aggiungere classe .big all'elemento .form-check. se si vuole aggiungere un paragrafo sotto il bottone, aggiungere anche la classe .mb-2 allo stesso elemento.
              E' possibile usare questa regola con qualsiasi tipo di input, che sia checkbox, radio o switch. -->
    <div class="form-row">
      <div class="form-group col-sm-6 col-md-4">
        <div class="form-check  radio big mb-2">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioOptions" value="">
          <label class="form-check-label" for="inlineRadioOptions">BIG Input </label>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      </div>
    </div>

  </form>
</div>
