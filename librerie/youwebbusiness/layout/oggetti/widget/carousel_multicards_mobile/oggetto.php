<style>
.carousel-multicard-mobile .carousel-card {

  border-radius: 3px;
  box-shadow: 0 1px 7.5px 0 rgba(67, 67, 67, 0.17);
  background-color: #ffffff;
  
  height:300px;
}

.carousel-multicard-mobile .carousel-inner {
  position:relative;
}

.carousel-multicard-mobile .carousel-item-centerer {
  width: calc(100% - 20%);
  margin-left: 10%;
  margin-right: 10%;
}

.carousel-multicard-mobile .carousel-item-centerer.prev-el {
  width: 100%;
  margin: 0px;
  padding: 0px;
}

.carousel-multicard-mobile .carousel-item-centerer.prev-right {
  position:absolute;
  top:0;
  right: calc(-100% + 10%);
}

.carousel-multicard-mobile .carousel-item-centerer.prev-left {
  position:absolute;
  top:0;
  left: calc(-100% + 10%);
}

</style>

<div id="carouselMulticardMobile" class="carousel carousel-multicard-mobile slide carousel-arrows-outside pb-3">
  <ol class="carousel-indicators">
    <li data-target="#carouselMulticardMobile" data-slide-to="0" class="active"></li>
    <li data-target="#carouselMulticardMobile" data-slide-to="1"></li>
    <li data-target="#carouselMulticardMobile" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="carousel-item-centerer">
        <div class="row row-eq-height">
          <div class="col-12">
            <div class="carousel-card" style="background-color:green;">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mattis risus quis congue hendrerit. Curabitur consequat purus eu porttitor ultricies. Cras luctus, elit in convallis finibus, nisi nunc auctor nunc, at condimentum lorem velit efficitur metus. Vivamus sed dui a nibh tincidunt dapibus. Pellentesque varius diam sapien, ut scelerisque odio laoreet sed.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-item-centerer">
        <div class="row row-eq-height">
          <div class="col-12">
            <div class="carousel-card" style="background-color:red;">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mattis risus quis congue hendrerit. Curabitur consequat purus eu porttitor ultricies. Cras luctus, elit in convallis finibus, nisi nunc auctor nunc, at condimentum lorem velit efficitur metus. Vivamus sed dui a nibh tincidunt dapibus. Pellentesque varius diam sapien, ut scelerisque odio laoreet sed.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-item-centerer">
        <div class="row row-eq-height">
          <div class="col-12">
            <div class="carousel-card" style="background-color:orange;">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mattis risus quis congue hendrerit. Curabitur consequat purus eu porttitor ultricies. Cras luctus, elit in convallis finibus, nisi nunc auctor nunc, at condimentum lorem velit efficitur metus. Vivamus sed dui a nibh tincidunt dapibus. Pellentesque varius diam sapien, ut scelerisque odio laoreet sed.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselMulticardMobile" role="button" data-slide="prev">
    <img src="./fe/img/icon/left-arrow.svg">
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselMulticardMobile" role="button" data-slide="next">
    <img src="./fe/img/icon/right-arrow.svg">
    <span class="sr-only">Next</span>
  </a>
</div>



<script>
  $(function(){
    $('.carousel-multicard-mobile.carousel .carousel-item').each(function () {
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

