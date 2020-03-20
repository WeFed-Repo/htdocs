<div class="login video-wrapper">

  <!-- colonna sx -->

  <form class="login__mask">

    <div class="login__mask__logo">
      <img src="./fe/img/logo@2x.png" />
    </div>

    <div class="login__mask__form pt-3">
      <div class="row">
        <div class="col-6 col-sm-12 col-md-6 mb-0">
          <label>Codice utente</label>
          <input type="text" class="form-control" placeholder="Codice postazione">
        </div>
        <div class="col-6 col-sm-12 col-md-6 mb-0">
          <label class="d-block d-sm-none d-md-block">&nbsp;</label>
          <input type="text" class="form-control" placeholder="Identificativo utente">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 mb-0">
          <label>Password</label>
          <input type="text" class="form-control" placeholder="Password">
        </div>
      </div>
  
    </div>

    <button class="btn btn-primary m-0 btn-block">Accedi</button>

    <div class="video-disclaimer mx-auto mb-0 mt-0 d-block d-md-none text-center " id="openVideo" data-video-toggle>
      <span>Scopri come cambierà l'interfaccia nei prossimi mesi...</span>
      <img src="./fe/img/scopri.svg">
    </div>

  </form>

  <!-- colonna dx -->

  <div class="login__info text-center">

    <div class="login__info__titolo d-none d-sm-block">
      <h2>You Business Web è:</h2>
    </div>

    <div class="login__info__parags d-none d-sm-block pb-3">
      <div class="login__info__parag">
        <div class="img">
          <img src="./fe/img/login/responsive.svg">
        </div>
        <div class="content">
          <h2>Responsive</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Distinctio natus, reiciendis</p> 
        </div>
      </div>
      <div class="login__info__parag">
        <div class="img">
          <img src="./fe/img/login/speed.svg">
        </div>
        <div class="content">
          <h2>Veloce</h2>
          <p>Dolor, fugit! Ex dolorum maxime minima necessitatibus 
            ratione ut minus vero soluta?</p>
        </div>
      </div>
    </div>

    <div class="login__info__icons">
      <div class="login__info__icon">
        <img src="./fe/img/login/login.svg">
        <span>Sicurezza</span>
      </div>
      <div class="login__info__icon">
        <img src="./fe/img/login/help.svg">
        <span>Bisogno di aiuto?</span>
      </div>
    </div>

  </div>

  <div class="video-modal" id="modalVideo" data-video>
    <button type="button" class="close" data-video-toggle>
      <span>&times;</span>
    </button>

      <div class="video-wrapper h-100 w-100">
        <div class='embed-container h-100 w-100'> 
          <iframe id="video" class="video" data-video-autoplay="true" frameborder="0"
                  src='https://player.vimeo.com/video/56282283?loop=0&title=0&texttrack=0&byline=0&controls=0&byline=0&portrait=0&background=1&transparent=0' 
                  webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
      </div>  

    </div>

</div>

<!-- NOTE: attenzione alle differenze delle classi di margine, text  e di display rispetto all'altro elemento .video-disclaimer -->
<div class="video-disclaimer mx-auto mb-0 mt-4 d-none d-md-flex text-left " id="openVideo" data-video-toggle>
  <span>Scopri come cambierà l'interfaccia nei prossimi mesi...
  </span>
  <img src="./fe/img/scopri.svg">
</div>

<!-- JS PER VIDEO -->
  <script src="https://player.vimeo.com/api/player.js"></script>
  <script src="./fe/js/jquery.vimeo.api.js"></script>

  <script>
    var $modal = $('[data-video]');
    var $wrapper = $('.video-wrapper');
    var $video = $('#video');
    var controls = '[data-video-toggle]';
    var isVideoAutoplay = $video.data('video-autoplay');
    $(document).ready(function(){
      $('.video-wrapper').attr('data-video-is-playing', false);
      $('#video').vimeo('pause');
      $(controls+'.paused').addClass("video-control-show");
      $("#video").vimeo("setVolume", 1);
    });
    function playVideo() {
      videoStatus = $(".video-wrapper").attr('data-video-is-playing');
      if( $modal.hasClass('is--opened') ) {
        // close and pause
        $modal.removeClass('is--opened');
        $('#video').vimeo('pause');
        $('.video-wrapper').attr('data-video-is-playing', false);
        // disabilita sempre l'autoplay quando si chiude
        $video.attr('data-video-autoplay', false);
        isVideoAutoplay = false;
      } else {
        // open
        $modal.addClass('is--opened');
        if (videoStatus == 'false') {
          $(controls).removeClass('paused').addClass('playing');
          if ( isVideoAutoplay === true ){
            $('#video').vimeo('play');
            $('.video-wrapper').attr('data-video-is-playing', true);
            // se è in autoplay, il volume va mutato (altrimenti smette di andare l'autoplay, per legge)
            $("#video").vimeo("setVolume", 0);
          } else {
            $('.video-wrapper').attr('data-video-is-playing', false);
            $("#video").vimeo("setVolume", 1); 
          }
        }
      }
    }
    $(document).on('click', controls, function(e) {
      playVideo($(this));
      e.preventDefault();
    });
  </script>
<!-- ./ JS PER VIDEO -->

