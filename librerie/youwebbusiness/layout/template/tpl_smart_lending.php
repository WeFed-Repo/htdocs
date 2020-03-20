<div class="d-flex flex-column align-items-start flex-sm-row align-items-sm-center w-100">
  <h1 class="flex-grow-1 mr-3 nowrap">
    Richiedi finanziamento
  </h1>
  <div class="align-item-end d-flex flex-row align-items-center mb-3">
    <span class="float-left mr-3 text-right">Alcuni rapporti potrebbero essere non disponibili</span>
    <button type="button" class="btn-icon-help float-right" data-modal-help></button>
  </div>
</div>

<!-- SELETTORE DOSSIER DI ESEMPIO -->
<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_dossier/oggetto.php'); ?>
<!-- END SELETTORE DOSSIER DI ESEMPIO -->

  <!-- SETTAGGI FINANZIAMENTO -->
  <section class="no-margin-section bordered mt-3 mb-3 p-x-3 py-4">
  <div class="row">
    <div class="col-12 m-auto">
      <div class="row justify-content-around">
        <div class="col-12 col-md-6 col-xl-5 mb-3 mb-md-0 text-center">
          <div id="prestitoTitle"></div>
          <ul id="prestitoCountDown" class="c-countdown"> <!-- countdown --> </ul>
          <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Iste ea optio quo excepturi veniam amet, labore dolores odit consequatur
          iusto alias. Veritatis hic ipsum fugit cum, quod quo eveniet.</p>
          <h4>Trascina per aumentare/diminuire l'importo</h4>
          <div class="c-range">
            <h3 class="mb-0 mt-3 p-0" id="prestitoLabel"></h3>
            <input id="prestitoRange" type="range" step="1" value="1" class="c-range-field">
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-5 mt-3 pr-xl-4 mt-md-0">
          <?php virtual('/youwebbusiness/layout/oggetti/widget/calcolo/oggetto.php'); ?>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- END SETTAGGI FINANZIAMENTO -->

  <!-- INFORMATIVE -->
  <section class="no-margin-section bordered mt-3 mb-3 p-3">
  <div class="row">
    <div class="col-12">
      <h2>Leggi i documenti informativi per proseguire</h2>
      <div class="d-flex align-items-center ">
        <button class="btn btn-link mb-0 mr-4 pl-0" id="doc1-button" data-modal-open="doc1">
          <img src="./fe/img/icon/pdf.svg">
          Foglio informativo
        </button>
        <button class="btn btn-link mb-0 mr-4 pl-0" id="doc2-button" data-modal-open="doc2">
          <img src="./fe/img/icon/pdf.svg">
          Minuta di contratto
        </button>
      </div>
    </div>
  </div>  
  </section>
  <!-- END INFORMATIVE -->


<!-- FORM DI RICHIESTA FINANZIAMENTO (campi hidden) -->
<!-- 
  NOTE IMPORTANTI: 
  NELLA POST, RECUPERARE SOLO IL VALORE DEI CAMPI IN QUESTA FORM. 
  Il range NON serve. 
-->

<!-- Pulsantiera -->
<div class="w-100">
  <form id="prestitoForm" action="" method="POST">
    <input type="hidden" id='prestitoValue'>
    <input type="hidden" id='foglio_informativo' data-control="doc1" value="0">
    <input type="hidden" id='minuta_di_contratto' data-control="doc2" value="0">
    <button class="btn btn-primary float-right" id="prestitoSubmit" disabled>
      RICHIEDI FINANZIAMENTO
    </button>
  </form>
</div>
<!-- Fine pulsantiera -->

<!-- END FORM DI RICHIESTA FINANZIAMENTO -->

<!-- MODALE HELP -->
  <?php virtual('/youwebbusiness/layout/oggetti/modale/modale_help/modale.php'); ?>
<!-- END MODALE HELP -->


<!-- MODALE di info TAN -->
<div class="modal fade" data-modal="tan">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <div>
          <h5 class="modal-title">TAN</h5>
        </div>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque 
          penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
          Nulla consequat massa quis enim. Donec pede justo, fringilla vel, 
          aliquet nec, vulputate eget, arcu.</p>
        <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
          Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras 
          dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. 
          Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. 
          Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
        <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. 
          Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper 
          ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget 
          condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque 
          sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. 
          Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero 
          venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus 
          tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales 
          sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit 
          cursus nunc,</p>
      </div>
    </div>
  </div>
</div>
<!-- END MODALE di info TAN -->

<!-- MODALE di info TAEG -->
<div class="modal fade" data-modal="taeg">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <div>
          <h5 class="modal-title">TAEG</h5>
        </div>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque 
          penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
          Nulla consequat massa quis enim. Donec pede justo, fringilla vel, 
          aliquet nec, vulputate eget, arcu.</p>
        <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
          Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras 
          dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. 
          Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. 
          Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
        <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. 
          Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper 
          ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget 
          condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque 
          sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. 
          Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero 
          venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus 
          tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales 
          sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit 
          cursus nunc,</p>
      </div>
    </div>
  </div>
</div>
<!-- END MODALE di info TAEG -->

<!-- MODALE DOCUMENTO 1 -->
<div class="modal fade" data-modal="doc1">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <div>
          <h5 class="modal-title">Foglio informativo</h5>
        </div>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
      </div>
      <div class="modal-body"> 
        <div id="doc1" class="c-scrolled-doc">
          <div class="c-scrolled-doc__innerWrap">
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
          </div>
        </div>
        <div class="alert-to-scroll">Visualizza il documento sino alla fine per procedere.</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary c-scrolled-doc__confirm" data-confirm="doc1" disabled data-dismiss="modal" aria-label="Close">
          Ho letto la documentazione
        </button>
      </div>
    </div>
  </div>
</div>
<!-- END MODALE DOCUMENTO 1 -->

<!-- MODALE DOCUMENTO 2 -->
<div class="modal fade" data-modal="doc2">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <div>
          <h5 class="modal-title">Minuta di contratto</h5>
        </div>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
      </div>
      <div class="modal-body">
        <div id="doc2" class="c-scrolled-doc">
          <div class="c-scrolled-doc__innerWrap">
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
          </div>
        </div>
        <div class="alert-to-scroll">Visualizza il documento sino alla fine per procedere.</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary c-scrolled-doc__confirm" data-confirm="doc2" disabled data-dismiss="modal" aria-label="Close">
          Ho letto la documentazione
        </button>
      </div>
    </div>
  </div>
</div>
<!-- END MODALE DOCUMENTO 2 -->

<!-- Comportamento range + dati mokkati -->
<script>
  var mocks = {
		'expiryOLD': '2019-10-26 19:37',
		'expiry2': '2020-11-02T23:59:59.000Z',
		'expiry': {
			'year': 2020,
			'month': 11,
			'day': 02,
			'hour': 23,
			'minute': 59,
			'second': 59,
		},
    'range': {
      'startIndex': 1,
      'data': [
        {'key':'5','value':'5.000','spese':'450','tan':'4,00','taeg':'5,10','rate':'12','totale':'2500'},
        {'key':'10','value':'10.000','spese':'2','tan':'2','taeg':'2','rate':'2','totale':'3000'},
        {'key':'15','value':'15.000','spese':'3','tan':'3','taeg':'3','rate':'3','totxale':'4000'},
        {'key':'20','value':'20.000','spese':'4','tan':'4','taeg':'4','rate':'4','totale':'5600'},
        {'key':'25','value':'25.000','spese':'5','tan':'5','taeg':'5','rate':'5','totale':'6700'},
        {'key':'30','value':'30.000','spese':'6','tan':'6','taeg':'6','rate':'6','totale':'8000'},
      ]
    }
  }

	var countVal;

  $(function(){

  // SETTING DEL RANGE

    var range = $('#prestitoRange');
    // crea la lista
    range.after('<ul class="c-range-legenda"></ul>')
    // la salva in una variabile
    var ul = range.next('ul');
    // calcola gli elementi totali
    var mr = mocks.range
    var length = mr.data.length
    var index = length-1
    // calcola il valore iniziale del range input, se non è presente o se è incorretto.
    var start = mr.startIndex ? ( mr.startIndex < length ) ? mr.startIndex : length : 1
    // mette allo step range gli attributi secondo i valori dell'array
    range.val( start )
          .attr('step', 1)
          .attr('min', 1)
          .attr('max', length)
    // crea la lista della legenda
    mr.data.forEach(function(mock) {
      ul.append('<li class="c-range-legenda__item">'+mock.key+'</li>')
    });
    // inizializza i box
    fillCalcolo( range.val() );
    // aggiorna in caso di change
    range.on('input, click, change',function(){
			fillCalcolo( range.val() )
		})

  // SETTING DEL COUNTDOWN
    // inizializza il countdown, poi lo aggiorna ogni secondo
    showCountdown();
    countVal = setInterval(function() { showCountdown() }, 1000);

  // SETTING SCROLL DOCS

  // Controllo SE il documento nella modale aperta corremtemente si deve scrollare
  // per essere letto sino alla fine. se è corto e non ha bisogno di scroll,
  // abilita il bottone di conferma in automatico.
  $('[data-modal]').on('shown.bs.modal', function () {
    if( ! $(this).find('.c-scrolled-doc').hasScrollBarVert() ) {
      confirm = $(this).find('[data-confirm]');
      confirm.removeAttr('disabled');
    }
  })

  // in caso di documento in cui è necessario scrollare:
  $('.c-scrolled-doc').bind('scroll',
    function(){
      var id = $(this).attr('id');
      var confirm = $('[data-confirm="'+id+'"]');
      // se l'utente scrolla tutto il docuemnto, il bottone di conferma viene abilitato.
      if($(this).scrollTop() + $(this).innerHeight()>=$(this)[0].scrollHeight) {
        confirm.removeAttr('disabled');
      }
    });

    // bottone di conferma di lettura del documento
    // (si abilita SE l'utente scrolla tutta la modale)
    $('[data-confirm]').on('click', function(){
      id = $(this).data('confirm');
      var control = $('[data-control="'+id+'"]');
      if(control.length>0) {
        control.val(1);
      } else {
        console.error('ERRORE: [data-control="'+id+'"] non esiste.')
      }
      // controlla se tutti i documenti sono stati confermati e, in caso, abilita il submit
      var isEmpty = false;

      $("[data-control]").filter(function () {
        var v = parseInt($(this).val());
        if( !isEmpty && v <= 0 ) isEmpty = true;
        // mostra spunta nel bottone se è già stato letto
        var btn = $('#'+$(this).data('control')+'-button');
        if( v && ! btn.hasClass('is--confirmed') ) {
          btn.addClass('is--confirmed');
        }
      }).length == 0;
      if( !isEmpty ) $('#prestitoSubmit').removeAttr('disabled')
    });

    $('#prestitoSubmit').on('click', function(e){
      e.preventDefault();
      // CREARE QUI LA CHIAMATA POST SOSTITUENDOLA AL LOCATION HREF.
      location.href = "strutt_priv.php?tpl=tpl_smart_lending_2.php";
    });

  });

  // riporto i calcoli corretti nei box secondo il valore impostato nel rangeInput.
  function fillCalcolo(value) {
    var boxContainer = $('#prestitoResult')
    var resultValue = $('#prestitoValue')
    var label = $('#prestitoLabel')
    var index = value-1
    var result = mocks.range.data[index]
    boxContainer.find('#calcolo-spese').find('.value').html(result.spese)
    boxContainer.find('#calcolo-tan').find('.value').html(result.tan)
    boxContainer.find('#calcolo-taeg').find('.value').html(result.taeg)
    boxContainer.find('#calcolo-rate').find('.value').html(result.rate)
    boxContainer.find('#calcolo-totale').find('.value').html(result.totale)
    // !!! IMPORTANTE: NELLA POST, RECUPERARE IL VALORE DI #prestitoValue,
    // non utilizzare il valore del range #prestitoRange !!!
    resultValue.val( result.value )
    label.html( result.value+'&euro;' )
  }

  function showCountdown() {
    var countdown = $('#prestitoCountDown');
    var mc = mocks.countdown
    // Settare la data nel json
		var exp = mocks.expiry;
		var countDownDate = new Date(exp.year, exp.month, exp.day, exp.hour, exp.minute, exp.second).getTime();
    var title = $('#prestitoTitle');
    // cerca la data odierna
    var now = new Date().getTime();
    // Fai un diff tra le date
    var distance = countDownDate - now;
    // Calcola la data
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // Scrivi il counter o il placeholder in caso sia scaduta l'offerta
    if (distance > 0) {
      // scrivi il titolo
      title.html( "<h3>Scegli l'importo, l'offerta scade tra:</h3>" );
      // resetta il counter
      countdown.empty();
      // riscrive il counter
      fillTimeBox(countdown,days,'giorni','giorno')
      fillTimeBox(countdown,hours,'ore','ora')
      fillTimeBox(countdown,minutes,'minuti','minuto')
      //fillTimeBox(countdown,seconds,'secondi','secondo')
    } else {
      clearInterval(countVal);
      title.html( "<h3>L'offerta è scaduta.</h3>" )
    }
  }

  function fillTimeBox(countdown,time,plural,singular) {
    countdown.append("<li class='c-countdown__item'> \
                        <span class='value'>"+time+"</span> \
                        <span class='key'>"+( time == 1 ? singular : plural )+"</span> \
                      </li>");
  }
</script>