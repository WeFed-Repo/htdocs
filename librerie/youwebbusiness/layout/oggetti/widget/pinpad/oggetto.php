<div class="pinpad">
  <form action="#">
    <div>
      <div><input type="text" readonly pattern="[0-9]{1}" name="pp1" value="" /></div>
      <div><input type="text" readonly pattern="[0-9]{1}" name="pp2" value="" /></div>
    </div>
    <div>
      <div><input type="text" readonly pattern="[0-9]{1}" name="pp3" value="" /></div>
      <div><input type="text" readonly pattern="[0-9]{1}" name="pp4" value="" /></div>
    </div>
    <div>
      <div><input type="text" readonly pattern="[0-9]{1}" name="pp5" value="" /></div>
      <div><input type="text" readonly pattern="[0-9]{1}" name="pp6" value="" /></div>
    </div>
  </form>
  <div>
    <div><input type="button" value="1" /></div>
    <div><input type="button" value="2" /></div>
    <div><input type="button" value="3" /></div>
  </div>
  <div>
    <div><input type="button" value="4" /></div>
    <div><input type="button" value="5" /></div>
    <div><input type="button" value="6" /></div>
  </div>
  <div>
    <div><input type="button" value="7" /></div>
    <div><input type="button" value="8" /></div>
    <div><input type="button" value="9" /></div>
  </div>
  <div>
    <div><button class="submit action" disabled />OK</button></div>
    <div><input type="button" value="0" /></div>
    <div>
      <button class="delete action" disabled >
        <img class="icon icon-autorizza" src="./fe/img/icon/delete.svg"></div>
      </button>
    </div>
  </form>
</div>

<script>
  $( function() {
    var $pp = $('.pinpad');
    var $ppInput = $pp.find('input[type="text"]');
    var $ppNum = $pp.find('input[type="button"]');
    var $ppInput = $pp.find('input[type="text"]');
    var $ppSubmit = $pp.find('button.action.submit');
    var $ppReset = $pp.find('button.action.delete');
    $ppNum.on('click',function(e) {
      var value = e.target.value;
      // Cerca primo valore vuoto e lo riempie
      $ppInput.each(function(i){
        var $cur = $ppInput.eq(i)[0];
        if(!$cur.value) {
          // setto il valore
          $cur.value = value;
          // disabilito o abilito i bottoni reset e submit
          $ppSubmit.attr('disabled', ((i + 1) < $ppInput.length) );
          $ppReset.attr('disabled', ((i + 1) < 1) );
          return false;
        }
      })
    });
    $ppSubmit.on('click',function(e) {
      e.preventDefault();
      $ppSubmit.attr('disabled','disabled');
      $ppReset.attr('disabled','disabled');
      alert('NOTE: inserire azione di submit qui');
      $ppInput.each(function(i){
        $ppInput.eq(i)[0].value = '';
      })
    });
    $ppReset.on('click',function(e) {
      $ppInput.each(function(i){
        var $cur = $ppInput.eq(i)[0];
        var $last = -1
        var isFirst = false
        // Se il primo valore è compilato
        if( $ppInput.eq(0)[0].value ) {
          if( !$cur.value ) {
            // Se sono sulla prima casella vuota, setto "$last" con l'index corrente - 1
            $last = i-1
          } else if( i == $ppInput.length-1 ) {
            // Se sono sull'ultima casella, "$last" è la casella corrente.
            $last = i
          }
          // Se la prima casella vuota è la prima carella nell'ordine disabilito il reset
          $ppReset.attr('disabled', (parseInt($last)==0) )
        }
        // Se "$last" non è -1, setto il valore di "$last" a vuoto ed esco dal ciclo.
        if($last>=0) {
          $ppInput.eq($last)[0].value = '';
          return false;
        }
        // se NON sono nell'ultima casella disabilito l'ok
        $ppSubmit.attr('disabled', ($last != $ppInput.length) )
      })
    });
  });
</script>
