          <!-- inizio banner principale -->
          <div class="main_banner"> <img src="/img/ban_visual_sicurezza.jpg" alt="sicurezza online" title="sicurezza online" /> </div>
          <!-- fine banner principale -->
           <!-- inizio navigazione principale -->
		   <?php 
		  $menumode = "sicurezza";
		  virtual("/librerie/include/commons/navigazione/pub_all_con_nav_005.php");
		  ?>
          <!-- fine navigazione principale -->
          <!-- inizio navigazione secondaria -->
         <?php 
		  $submenumode = "tpl_pub_sicurezza_online_come_proteggersi";
		  virtual("/librerie/include/commons/navigazione/pub_all_con_nav_010.php");
		  ?>
          <!-- fine navigazione secondaria -->
          <!-- inizio contenuti testuali  -->
          <!-- inizio titolo sottosezione -->
          <h3 class="sub_section_tit">Le minacce del web</h3>
          <!-- fine titolo sottosezione -->
          <!-- inizio tab navigation -->
          <div class="tab_switch">
            <div class="active_tab" onclick="showTab('tab1','tabMod2')" id="tabMod2tab1"><a href="#1" title="Phishing">Phishing</a></div>
            <div onclick="showTab('tab2','tabMod2')" id="tabMod2tab2"><a href="#1" title="Crimeware">Crimeware</a></div>
          </div>
          <!-- fine tab navigation -->
          <!-- inizio primo tab -->
          <div id="tabMod2tab1content">
            <h3 class="generic_tit">Phishing</h3>
            <p class="plain_txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis mollis nisi, in consequat est aliquam nec. Curabitur tincidunt, enim eu imperdiet bibendum, nibh elit pharetra dui, ut aliquet felis lacus quis augue. Nam est lacus, condimentum vel facilisis et, iaculis vel leo. Mauris luctus, diam a ultricies feugiat, diam est varius felis, in malesuada nunc eros quis sapien. Nam mi mauris, convallis at laoreet nec, hendrerit varius sapien. Quisque porttitor congue lectus. Integer vel erat posuere arcu ullamcorper volutpat sed vitae dolor. Aenean semper libero id elit ultrices fermentum. </p>
          </div>
          <!-- fine primo tab -->
          <!-- inizio secondo tab -->
          <div id="tabMod2tab2content" class="hide_it">
            <h3 class="generic_tit">Crimeware</h3>
            <p class="plain_txt">Donec molestie justo ut enim facilisis quis consequat arcu aliquet. Vivamus lacinia sem at sem scelerisque tempor. Mauris eget mi eros. Praesent tortor lectus, vulputate sed laoreet ac, mollis ac massa. Mauris sit amet mi vitae purus scelerisque auctor. Pellentesque eu felis orci. Morbi malesuada condimentum congue. Ut commodo, sapien vitae venenatis iaculis, metus dui rhoncus magna, quis pellentesque elit lectus ut magna. Suspendisse consequat dui et lectus tincidunt fringilla. Vivamus dui lacus, tristique quis interdum vel, viverra in nisi. Nam laoreet tempus egestas. Pellentesque rutrum magna nec nulla semper vel bibendum augue fringilla. Nulla quis turpis massa. Mauris id nisi diam. Mauris id felis at neque rhoncus commodo. Aliquam pellentesque, turpis sit amet viverra interdum, urna odio aliquet elit, vel bibendum urna nunc eget quam. Pellentesque accumsan ante quis sapien mattis hendrerit. </p>
          </div>
          <!-- fine secondo tab -->