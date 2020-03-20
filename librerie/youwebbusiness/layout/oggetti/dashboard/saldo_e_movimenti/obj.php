<!-- NOTE: il padre diretto di deve avere una classe d-flex per funzinare correttamente -->

<div class="dhb-carousel dhb-carousel--saldo-movimenti box bordered w-100 p-3 m-0 d-flex">

  <div id="carouselSaldoMovimenti" class="carousel slide autopaging">

    <div class="carousel-inner">

      <?php 
      $company = [ 
                   'Compagnia Softech media s.r.l.', 
                   'Lorem Ipsum', 
                   'Excepteur sint occaecat s.r.l.',
                   'Lorem Ipsum dolor sit amet', 
                   'Compagnia Test', 
                   'Compagnia Test2', 
                  ];
      
      for ($i=0; $i < 6; $i++) { ?> 

        <div class="carousel-item">
          <div class="carousel-item-centerer">
            <!-- inizio box -->
            <div>
              <div class="d-flex w-100 pb-1">
                <div class="col-12 text-center">
                  <h4 class="p-0 m-0 ellipsed"><?= $company[$i] ?></h4>
                  <a href="#">Vai ai movimenti</a>
                </div>
              </div>
              <div class="d-flex w-100 pb-1">
                <div class="flex-grow-1">
                  <strong class="text-uppercase">Conto corrente</strong>
                  <br />
                  <span class="ellipsed">23453450000321</span>
                </div>
                <div class="flex-grow-1 text-right">
                  <strong class="text-uppercase">Swift</strong>
                  <br />
                  <span class="ellipsed">3221323344</span>
                </div>
              </div>
              <div class="d-flex w-100 pb-1">
                <div class="flex-grow-1  flex-shrink-0 w-75">
                  <strong class="text-uppercase">Banca</strong>
                  <br />
                  <span class="ellipsed">Banca popolare di lorem ipsum dolor</span>
                </div>
                <div class="flex-grow-1 flex-shrink-0 text-right">
                  <strong class="text-uppercase">Divisa</strong>
                  <br />
                  <span class="">EUR</span>
                </div>
              </div>
              <div class="d-flex w-100 pb-1">
                <div class="flex-grow-1">
                  <strong class="text-uppercase">IBAN</strong>
                  <br />
                  <span class="ellipsed">IT24V03237464463443253425</span>
                </div>
              </div>
              <div class="d-flex w-100 pb-1 pt-2">
                <div class="flex-grow-1">
                  <strong class="text-uppercase ellipsed">Saldo disponibile</strong>
                  <br />
                  <p class="text-primary font-bold font-size-11">1.365.000,00</p>
                </div>
                <div class="flex-grow-1 text-right">
                  <strong class="text-uppercase ellipsed">Saldo finale</strong>
                  <br />
                  <p class="text-primary font-bold font-size-11">1.365.000,00</p>
                </div>
              </div>
            </div>
            <!-- fine box -->
          </div>
        </div>

      <?php } ?> 

    </div>

  </div>

</div>
