<style>

.carousel-multicard .carousel-item-centerer {
  width: 100%;
  margin-left: 0px;
  margin-right: 0px;
}
.carousel-multicard .carousel-item-centerer > .row {
  margin-left: 0px;
  margin-right: 0px;
}

.carousel-multicard .carousel-inner {
  position:relative;
}

.carousel-multicard .carousel-card {
  height: 100%;
  padding: 0 5px 10px 5px;
}

/* ONLY for Mobile */
@media screen and (max-width: 575px) {
  .carousel-arrows-outside {
    margin: 0;
    width: 100%;
  }
  .carousel-multicard .carousel-item-centerer {
    width: calc(100% - 20%);
    margin-left: 10%;
    margin-right: 10%;
  }

  .carousel-multicard .carousel-item-centerer.prev-el {
    width: 100%;
    margin: 0px;
    padding: 0px;
  }

  .carousel-multicard .carousel-item-centerer.prev-right {
    position:absolute;
    top:0;
    right: calc(-100% + 10%);
  }

  .carousel-multicard .carousel-item-centerer.prev-left {
    position:absolute;
    top:0;
    left: calc(-100% + 10%);
  }
}


</style>

<div id="carouselMulticard" class="carousel carousel-multicard slide carousel-arrows-outside pb-3">
  <ol class="carousel-indicators">
    <li data-target="#carouselMulticard" data-slide-to="0" class="active"></li>
    <li data-target="#carouselMulticard" data-slide-to="1"></li>
    <li data-target="#carouselMulticard" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="carousel-item-centerer carousel-item-mobile d-sm-none">
        <div class="row row-eq-height">
          <!-- CARD Mobile -->
          <div class="col-12 ">
            <div class="carousel-card mobile-card">

              <!-- Contenuto Card MOBILE -->
              <div class="box-progetti bordered border-top-error light b-r-t box-with-shadow">
                <div href="#" class="el-p-a">
                  <a href="#"><i class="icon icon-circle_arrow_right"></i></a>
                </div>
                <div class="text-center pl-md-3 pr-md-3 pl-xl-5 pr-xl-5">
                  <span class="text color-gray1 font-size-16"><strong>Ristrutturazione immobile</strong></span>
                  <div class="arrow-box-wrapper"><p class="color-greenLink font-size-small">02 marzo   <i class="icon icon-arrow_right_text"></i> 30 novembre</p></div>
                  <hr>
                  <div class="font-size-small">
                    <p>
                      <span class="text-alert align-bottom-center"><i class="icon icon-warning color-error"></i>Budget superato</span>
                      <span class="text"><strong>150.000,00 €</strong></span>
                    </p>
                    <p>
                      <span class="text-alert">Budget prefissato</span>
                      <span class="text font-size-20 color-gray1"><strong>140.000,00 €</strong></span>
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center cta-wrapper">
                  <a href="#" class="cta-gray">Elimina</a>
                  <a href="#">Gestisci</a>
                </div>
              </div>
              <!-- END Contenuto Card -->

            </div>
          </div>
          <!-- END CARD Mobile -->
        </div>
      </div>
      <div class="carousel-item-centerer d-none d-sm-block">
        <div class="row row-eq-height">
          <!-- CARD DSKTP -->
          <div class="col-4">
            <div class="carousel-card desktop-card">

              <!-- Contenuto Card -->
              <div class="box-progetti bordered border-top-error light b-r-t box-with-shadow">
                <div href="#" class="el-p-a">
                  <a href="#"><i class="icon icon-circle_arrow_right"></i></a>
                </div>
                <div class="text-center pl-md-3 pr-md-3 pl-xl-5 pr-xl-5">
                  <span class="text color-gray1 font-size-16"><strong>Ristrutturazione immobile</strong></span>
                  <div class="arrow-box-wrapper"><p class="color-greenLink font-size-small">02 marzo   <i class="icon icon-arrow_right_text"></i> 30 novembre</p></div>
                  <hr>
                  <div class="font-size-small">
                    <p>
                      <span class="text-alert align-bottom-center"><i class="icon icon-warning color-error"></i>Budget superato</span>
                      <span class="text"><strong>150.000,00 €</strong></span>
                    </p>
                    <p>
                      <span class="text-alert">Budget prefissato</span>
                      <span class="text font-size-20 color-gray1"><strong>140.000,00 €</strong></span>
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center cta-wrapper">
                  <a href="#" class="cta-gray">Elimina</a>
                  <a href="#">Gestisci</a>
                </div>
              </div>
              <!-- END Contenuto Card -->

            </div>
          </div>
          <div class="col-4">
            <div class="carousel-card desktop-card">

              <!-- Contenuto Card -->
              <div class="box-progetti bordered border-top-warning light b-r-t box-with-shadow">					
                <div href="#" class="el-p-a">
                  <a href="#"><i class="icon icon-circle_arrow_right"></i></a>
                </div>                
                <div class="text-center pl-md-3 pr-md-3 pl-xl-5 pr-xl-5">
                  <span class="text color-gray1 font-size-16"><strong>Nuovi impianti Parma</strong></span>
                  <div class="arrow-box-wrapper"><p class="color-greenLink font-size-small">02 marzo   <i class="icon icon-arrow_right_text"></i> 30 novembre</p></div>
                  <hr>
                  <div class="font-size-small">
                    <p>
                      <span class="text-alert align-bottom-center"><i class="icon icon-attenzione color-warning"></i>Budget quasi esaurito</span>
                      <span class="text"><strong>98.000,00 €</strong></span>
                    </p>
                    <p>
                      <span class="text-alert">Budget prefissato</span>
                      <span class="text font-size-20 color-gray1"><strong>100.000,00 €</strong></span>
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center cta-wrapper">
                  <a href="#" class="cta-gray">Elimina</a>
                  <a href="#">Gestisci</a>
                </div>
              </div>
              <!-- END Contenuto Card -->

            </div>
          </div>
          <div class="col-4">
            <div class="carousel-card desktop-card">

              <!-- Contenuto Card -->
              <div class=" box-progetti bordered border-top-success light b-r-t box-with-shadow">
                <div href="#" class="el-p-a">
                  <a href="#"><i class="icon icon-circle_arrow_right"></i></a>
                </div>
                <div class="text-center pl-md-3 pr-md-3 pl-xl-5 pr-xl-5">
                  <span class="text color-gray1 font-size-16"><strong>Uffici Brescia</strong></span>
                  <div class="arrow-box-wrapper"><p class="color-greenLink font-size-small">02 marzo   <i class="icon icon-arrow_right_text"></i> 30 novembre</p></div>
                  <hr>
                  <div class="font-size-small">
                    <p>
                      <span class="text-alert">Totale spese effettuate</span>
                      <span class="text"><strong>8.000,00 €</strong></span>
                    </p>
                    <p>
                      <span class="text-alert">Budget prefissato</span>
                      <span class="text font-size-20 color-gray1"><strong>100.000,00 €</strong></span>
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center cta-wrapper">
                  <a href="#" class="cta-gray">Elimina</a>
                  <a href="#">Gestisci</a>
                </div>
              </div>
              <!-- END Contenuto Card -->

            </div>
          </div>
          <!-- END CARD DSKTP -->
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-item-centerer carousel-item-mobile d-sm-none">
        <div class="row row-eq-height">
          <!-- CARD Mobile -->
          <div class="col-12 ">
            <div class="carousel-card mobile-card">

              <!-- Contenuto Card MOBILE -->
              <div class="box-progetti bordered border-top-warning light b-r-t box-with-shadow">					
                <div href="#" class="el-p-a">
                  <a href="#"><i class="icon icon-circle_arrow_right"></i></a>
                </div>                
                <div class="text-center pl-md-3 pr-md-3 pl-xl-5 pr-xl-5">
                  <span class="text color-gray1 font-size-16"><strong>Nuovi impianti Parma</strong></span>
                  <div class="arrow-box-wrapper"><p class="color-greenLink font-size-small">02 marzo   <i class="icon icon-arrow_right_text"></i> 30 novembre</p></div>
                  <hr>
                  <div class="font-size-small">
                    <p>
                      <span class="text-alert align-bottom-center"><i class="icon icon-attenzione color-warning"></i>Budget quasi esaurito</span>
                      <span class="text"><strong>98.000,00 €</strong></span>
                    </p>
                    <p>
                      <span class="text-alert">Budget prefissato</span>
                      <span class="text font-size-20 color-gray1"><strong>100.000,00 €</strong></span>
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center cta-wrapper">
                  <a href="#" class="cta-gray">Elimina</a>
                  <a href="#">Gestisci</a>
                </div>
              </div>
              <!-- END Contenuto Card -->

            </div>
          </div>
          <!-- END CARD Mobile -->
        </div>
      </div>
      <div class="carousel-item-centerer d-none d-sm-block">
        <div class="row row-eq-height">
          <!-- CARD DSKTP -->
          <div class="col-4">
            <div class="carousel-card desktop-card">

              <!-- Contenuto Card -->
              <div class="box-progetti bordered border-top-$gray8 light b-r-t box-with-shadow">
                <div href="#" class="el-p-a">
                  <a href="#"><i class="icon icon-circle_arrow_right"></i></a>
                </div>
                <div class="text-center pl-md-3 pr-md-3 pl-xl-5 pr-xl-5">
                  <span class="text color-gray1 font-size-16"><strong>Ristrutturazione immobile</strong></span>
                  <div class="arrow-box-wrapper"><p class="color-$gray8 font-size-small"><i class="icon icon-calendario pr-1"></i>Scaduto il: 30 Nov 2020</p></div>
                  <hr>
                  <div class="font-size-small">
                    <p>
                      <span class="text-alert">Totale spese effettuate</span>
                      <span class="text"><strong>8.000,00 €</strong></span>
                    </p>
                    <p>
                      <span class="text-alert">Budget prefissato</span>
                      <span class="text font-size-20 color-gray1"><strong>100.000,00 €</strong></span>
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center cta-wrapper">
                  <a href="#" class="cta-gray">Elimina</a>
                  <a href="#">Gestisci</a>
                </div>
              </div>
              <!-- END Contenuto Card -->

            </div>
          </div>
          <div class="col-4">
            <div class="carousel-card desktop-card">

              <!-- Contenuto Card -->
              <div class="box-progetti bordered box-with-shadow">
                <div href="#" class="el-p-a with-label">
                    <span class="label-new">NUOVO</span>
                  <a href="#"><i class="icon icon-circle_arrow_right"></i></a>
                </div>
                <div class="text-center pl-md-3 pr-md-3 pl-xl-5 pr-xl-5">
                  <span class="text color-gray1 font-size-16"><strong>Nuovi impianti Parma</strong></span>
                  <div class="arrow-box-wrapper"><p class="color-greenLink font-size-small">02 marzo   <i class="icon icon-arrow_right_text"></i> 30 novembre</p></div>
                  <hr>
                  <div class="font-size-small">
                    <p>
                      <span class="text-alert">Totale spese effettuate</span>
                      <span class="text"><strong>0,00 €</strong></span>
                    </p>
                    <p>
                      <span class="text-alert">Budget prefissato</span>
                      <span class="text font-size-20 color-gray1"><strong>100.000,00 €</strong></span>
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center cta-wrapper">
                  <a href="#" class="cta-gray">Elimina</a>
                  <a href="#"><i class="icon icon-piu mr-0"></i>Aggiungi transazione</a>
                </div>
              </div>
              <!-- END Contenuto Card -->

            </div>
          </div>
          <div class="col-4">
            <div class="carousel-card desktop-card">

              <!-- Contenuto Card -->
              <div class="box-progetti bordered box-with-shadow">
                <div href="#" class="el-p-a with-label">
                    <span class="label-new">NUOVO</span>
                  <a href="#"><i class="icon icon-circle_arrow_right"></i></a>
                </div>
                <div class="text-center pl-md-3 pr-md-3 pl-xl-5 pr-xl-5">
                  <span class="text color-gray1 font-size-16"><strong>Nuovi impianti Parma</strong></span>
                  <div class="arrow-box-wrapper"><p class="color-greenLink font-size-small">02 marzo   <i class="icon icon-arrow_right_text"></i> 30 novembre</p></div>
                  <hr>
                  <div class="font-size-small">
                    <p>
                      <span class="text-alert">Totale spese effettuate</span>
                      <span class="text"><strong>0,00 €</strong></span>
                    </p>
                    <p>
                      <span class="text-alert">Budget prefissato</span>
                      <span class="text font-size-20 color-gray1"><strong>100.000,00 €</strong></span>
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center cta-wrapper">
                  <a href="#" class="cta-gray">Elimina</a>
                  <a href="#"><i class="icon icon-piu mr-0"></i>Aggiungi transazione</a>
                </div>
              </div>
              <!-- END Contenuto Card -->

            </div>
          </div>
          <!-- END CARD DSKTP -->
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-item-centerer carousel-item-mobile d-sm-none">
        <div class="row row-eq-height">
          <!-- CARD Mobile -->
          <div class="col-12 ">
            <div class="carousel-card mobile-card">

              <!-- Contenuto Card MOBILE-->
              <div class=" box-progetti bordered border-top-success light b-r-t box-with-shadow">
                <div href="#" class="el-p-a">
                  <a href="#"><i class="icon icon-circle_arrow_right"></i></a>
                </div>
                <div class="text-center pl-md-3 pr-md-3 pl-xl-5 pr-xl-5">
                  <span class="text color-gray1 font-size-16"><strong>Uffici Brescia</strong></span>
                  <div class="arrow-box-wrapper"><p class="color-greenLink font-size-small">02 marzo   <i class="icon icon-arrow_right_text"></i> 30 novembre</p></div>
                  <hr>
                  <div class="font-size-small">
                    <p>
                      <span class="text-alert">Totale spese effettuate</span>
                      <span class="text"><strong>8.000,00 €</strong></span>
                    </p>
                    <p>
                      <span class="text-alert">Budget prefissato</span>
                      <span class="text font-size-20 color-gray1"><strong>100.000,00 €</strong></span>
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center cta-wrapper">
                  <a href="#" class="cta-gray">Elimina</a>
                  <a href="#">Gestisci</a>
                </div>
              </div>
              <!-- END Contenuto Card -->

            </div>
          </div>
          <!-- END CARD Mobile -->
        </div>
      </div>
      <div class="carousel-item-centerer d-none d-sm-block">
        <div class="row row-eq-height">
          <!-- CARD DSKTP -->
          <div class="col-4">
            <div class="carousel-card desktop-card">

              <!-- Contenuto Card -->
              <div class="box-progetti bordered box-with-shadow">
                <div href="#" class="el-p-a with-label">
                    <span class="label-new">NUOVO</span>
                  <a href="#"><i class="icon icon-circle_arrow_right"></i></a>
                </div>
                <div class="text-center pl-md-3 pr-md-3 pl-xl-5 pr-xl-5">
                  <span class="text color-gray1 font-size-16"><strong>Nuovi impianti Parma</strong></span>
                  <div class="arrow-box-wrapper"><p class="color-greenLink font-size-small">02 marzo   <i class="icon icon-arrow_right_text"></i> 30 novembre</p></div>
                  <hr>
                  <div class="font-size-small">
                    <p>
                      <span class="text-alert">Totale spese effettuate</span>
                      <span class="text"><strong>0,00 €</strong></span>
                    </p>
                    <p>
                      <span class="text-alert">Budget prefissato</span>
                      <span class="text font-size-20 color-gray1"><strong>100.000,00 €</strong></span>
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center cta-wrapper">
                  <a href="#" class="cta-gray">Elimina</a>
                  <a href="#"><i class="icon icon-piu mr-0"></i>Aggiungi transazione</a>
                </div>
              </div>
              <!-- END Contenuto Card -->

            </div>
          </div>
          <div class="col-4">
            <div class="carousel-card desktop-card">

              <!-- Contenuto Card -->
              <div class="box-progetti bordered box-with-shadow">
                <div href="#" class="el-p-a with-label">
                    <span class="label-new">NUOVO</span>
                  <a href="#"><i class="icon icon-circle_arrow_right"></i></a>
                </div>
                <div class="text-center pl-md-3 pr-md-3 pl-xl-5 pr-xl-5">
                  <span class="text color-gray1 font-size-16"><strong>Nuovi impianti Parma</strong></span>
                  <div class="arrow-box-wrapper"><p class="color-greenLink font-size-small">02 marzo   <i class="icon icon-arrow_right_text"></i> 30 novembre</p></div>
                  <hr>
                  <div class="font-size-small">
                    <p>
                      <span class="text-alert">Totale spese effettuate</span>
                      <span class="text"><strong>0,00 €</strong></span>
                    </p>
                    <p>
                      <span class="text-alert">Budget prefissato</span>
                      <span class="text font-size-20 color-gray1"><strong>100.000,00 €</strong></span>
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center cta-wrapper">
                  <a href="#" class="cta-gray">Elimina</a>
                  <a href="#"><i class="icon icon-piu mr-0"></i>Aggiungi transazione</a>
                </div>
              </div>
              <!-- END Contenuto Card -->

            </div>
          </div>
          <div class="col-4">
            <div class="carousel-card desktop-card">

              <!-- Contenuto Card -->
              <div class="box-progetti bordered box-with-shadow">
                <div href="#" class="el-p-a with-label">
                    <span class="label-new">NUOVO</span>
                  <a href="#"><i class="icon icon-circle_arrow_right"></i></a>
                </div>
                <div class="text-center pl-md-3 pr-md-3 pl-xl-5 pr-xl-5">
                  <span class="text color-gray1 font-size-16"><strong>Nuovi impianti Parma</strong></span>
                  <div class="arrow-box-wrapper"><p class="color-greenLink font-size-small">02 marzo   <i class="icon icon-arrow_right_text"></i> 30 novembre</p></div>
                  <hr>
                  <div class="font-size-small">
                    <p>
                      <span class="text-alert">Totale spese effettuate</span>
                      <span class="text"><strong>0,00 €</strong></span>
                    </p>
                    <p>
                      <span class="text-alert">Budget prefissato</span>
                      <span class="text font-size-20 color-gray1"><strong>100.000,00 €</strong></span>
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center cta-wrapper">
                  <a href="#" class="cta-gray">Elimina</a>
                  <a href="#"><i class="icon icon-piu mr-0"></i>Aggiungi transazione</a>
                </div>
              </div>
              <!-- END Contenuto Card -->

            </div>
          </div>
          <!-- END CARD DSKTP -->
        </div>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev d-none d-sm-block" href="#carouselMulticard" role="button" data-slide="prev">
    <img src="./fe/img/icon/left-arrow.svg">
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next d-none d-sm-block" href="#carouselMulticard" role="button" data-slide="next">
    <img src="./fe/img/icon/right-arrow.svg">
    <span class="sr-only">Next</span>
  </a>
</div>

<script>
  $(function(){
    $('.carousel-multicard.carousel .carousel-item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().addClass("prev-el prev-right").appendTo($(this));
        if (next.next().length > 0) {
            next.next().children(':first-child').clone().addClass("prev-el prev-left").appendTo($(this));
        } else {
            $(this).siblings(':first').children(':first-child').clone().addClass("prev-el prev-left").appendTo($(this));
        }
    });
  });
</script>





