          <!-- inizio banner principale -->
          <div class="main_banner"> <img src="/img/ban_visual_sicurezza.jpg" alt="sicurezza online" title="sicurezza online" /> </div>
          <!-- fine banner principale -->
          <!-- inizio navigazione principale -->
         <?php 
		  $menumode = "sicurezza";
		  virtual("/librerie/include/commons/navigazione/pub_all_con_nav_005.php");
		  ?>
          <!-- fine navigazione principale -->
          <!-- inizio titolo pagina grafico -->
            <div class="graphic_title">
		  	<h2><img alt="Lorem ipsum" src="/img/tt_gli_aspetti_operativi.gif"/></h2>
		  </div>
          <!-- fine titolo pagina grafico -->
          <!-- inizio contenuti testuali  -->
          <h3 class="generic_tit">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          <p class="plain_txt enfasi">Donec magna lacus, pharetra eu, vestibulum sed, tempus eget, ipsum</p>
          <p class="gen_txt"><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Quisque sagittis, quam vitae lacinia elementum, magna arcu fermentum quam, in ultricies odio nulla sit amet urna. Sed placerat rutrum ipsum. Donec tortor. Mauris commodo. Mauris rhoncus leo. Phasellus gravida. Nulla sit amet leo. </p>
          <!-- fine contenuti testuali  -->
          <!-- inizio accordion -->
          <div class="inner_frame">
            <!-- inizio privati -->
            <div class="accordion_box">
              <div class="ret_box">
                <!-- inizio tab  chiuso -->
                <h3 id="ret_tab_close" class="close"><a href="javascript:;" onclick="javascript: displayValue('ret_tab_open','block'); displayValue('ret_tab_close','none');">Privati</a></h3>
                <!-- fine tab  chiuso -->
                <!-- inizio tab  aperto -->
                <div id="ret_tab_open" style="display: none;">
                  <h3 class="open"><a href="javascript:;" onclick="javscript: displayValue('ret_tab_close','block'); displayValue('ret_tab_open','none');">Privati</a></h3>
                  <p class="gen_txt"><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Quisque sagittis, quam vitae lacinia elementum, magna arcu fermentum quam, in ultricies odio nulla sit amet urna. Sed placerat rutrum ipsum. Donec tortor. Mauris commodo. Mauris rhoncus leo. Phasellus gravida. Nulla sit amet leo. <strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Quisque sagittis, quam vitae lacinia elementum, magna arcu fermentum quam, in ultricies odio nulla sit amet urna. Sed placerat rutrum ipsum. Donec tortor. Mauris commodo. Mauris rhoncus leo. Phasellus gravida. Nulla sit amet leo. </p>
                </div>
                <!-- fine tab  aperto -->
              </div>
            </div>
            <!-- fine privati -->
            <!-- inizio imprese -->
            <div class="accordion_box">
              <div class="bus_box">
                <!-- inizio tab  chiuso -->
                <h3 id="bus_tab_close" class="close"><a href="javascript:;" onclick="javscript: displayValue('bus_tab_open','block'); displayValue('bus_tab_close','none');">Imprese</a></h3>
                <!-- fine tab  chiuso -->
                <!-- inizio tab  aperto -->
                <div id="bus_tab_open" style="display: none;">
                  <h3 class="open"><a href="javascript:;" onclick="javascript: displayValue('bus_tab_close','block'); displayValue('bus_tab_open','none');">Imprese</a></h3>
                  <p class="gen_txt"><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Quisque sagittis, quam vitae lacinia elementum, magna arcu fermentum quam, in ultricies odio nulla sit amet urna. Sed placerat rutrum ipsum. Donec tortor. Mauris commodo. Mauris rhoncus leo. Phasellus gravida. Nulla sit amet leo. </p>
                  <p class="gen_txt"><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Quisque sagittis, quam vitae lacinia elementum, magna arcu fermentum quam, in ultricies odio nulla sit amet urna. Sed placerat rutrum ipsum. Donec tortor. Mauris commodo. Mauris rhoncus leo. Phasellus gravida. Nulla sit amet leo. </p>
                </div>
                <!-- fine tab  aperto -->
              </div>
            </div>
            <!-- fine imprese -->
          </div>
          <!-- fine accordion -->