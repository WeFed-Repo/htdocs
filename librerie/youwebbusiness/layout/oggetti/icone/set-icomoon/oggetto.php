<style>
.icon-set-demo {
  width:100%;
}
.icon-set-demo .lib-ico-wrap {
  text-align:left;
}
.icon-set-demo .lib-ico-wrap .lib-ico-ph {
  top:0;
  left:0;
  position:absolute;
  background: #fff;
  width:40px;
  height:40px;
  border:solid 1px #ccc;
  text-align:center;
  padding: 7px;
}
.icon-set-demo .lib-ico-wrap .lib-ico-ph .icon {
  font-size:25px;
}

.lib-ico-name {width:100%;
  display:block;
  word-break:break-all;
  font-family: "roboto", "sans serif";
}
.lib-ico-cont {
  padding: 12px 0 5px 45px;
  min-height:40px;
  width:100%;
  position:relative;
  margin-bottom:15px;
}

.icon-search {
  margin: 0 0 25px;
  width:200px;
}

.icon-search input {
  border:solid 1px #ccc;
  padding: 7px;
  font-family: "roboto", "sans serif";
}
</style>

<div class="row">
  <div class="col-sm-12"> 
    <div class="icon-search">
      <script type="text/javascript">
          $(function(){$("#icoSearch").keyup(function(){
            var sstring = $(this).val();
            var allicon = $(".icon-set-demo .lib-ico-wrap").hide();
            $.each(allicon, function(i,ico){
              var ic = $(ico);
              if (ic.attr("data-name").indexOf(sstring)>=0) {
                ic.show();
              } 
            })
            console.log(sstring);
          })});
      </script>
      <input type="text" class="search" placeholder="ricerca..." id="icoSearch" />
    </div>
    <div class="row icon-set-demo">
      <?php 
      // Legge il json di configurazione
      $elefont = json_decode(file_get_contents("./fe/font/selection.json"),true);
      $icons = $elefont["icons"];
      foreach ($icons as $icon) {
        ?>
          <div class="lib-ico-wrap col-md-3 col-sm-4 col-xs-12" data-name="<?php print $icon["properties"]["name"]; ?>">
            <div class="lib-ico-cont">
              <div class="lib-ico-ph">
                <i class="icon icon-<?php print $icon["properties"]["name"]; ?>"></i>
              </div>
              <span class="lib-ico-name"><?php print $icon["properties"]["name"]; ?></span>
            </div>
          </div>
          
        <?php
      }
      ?>
    </div>
    </div>
</div>
