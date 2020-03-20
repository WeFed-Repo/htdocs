<!-- NOTE: il padre diretto deve avere una classe d-flex per funzinare correttamente -->

<div class="dhb-carousel dhb-carousel--banner box bordered w-100 p-0 pl-0 pl-sm-3 m-0 d-flex">

  <div id="carouselBanner" class="carousel slide autoplay">

    <!-- NOTE: Gli indicators devono avere in indice data-slide-to progressivo e corrispondere ad ogni items -->

    <ol class="carousel-indicators">
      <li data-target="#carouselBanner" data-slide-to="0" class="active"></li>
      <li data-target="#carouselBanner" data-slide-to="1"></li>
      <li data-target="#carouselBanner" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="carousel-item-centerer">
          <?php virtual('/youwebbusiness/layout/oggetti/dashboard/banner/banner.php');?>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-item-centerer">
          <?php virtual('/youwebbusiness/layout/oggetti/dashboard/banner/banner_2.php');?>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-item-centerer">
          <?php virtual('/youwebbusiness/layout/oggetti/dashboard/banner/banner.php');?>
        </div>
      </div>
    </div>
  </div>

</div>