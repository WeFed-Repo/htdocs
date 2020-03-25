          <!-- inizio banner principale -->
          <div class="main_banner"> <img src="/img/ban_visual_privati.jpg" alt="Privati" title="Privati" /> </div>
          <!-- fine banner principale -->
          <!-- inizio navigazione principale -->
          <?php 
		  $menumode = "privati";
		  virtual("/librerie/include/commons/navigazione/pub_all_con_nav_005.php");
		  ?>
          <!-- fine navigazione principale -->
          <!-- inizio titolo pagina grafico -->
            <div class="graphic_title">
		  	<h2><img alt="Lorem ipsum" src="/img/tt_funzioni_disponibili.gif"/></h2>
		  </div>
          <!-- fine titolo pagina grafico -->
          <!-- inizio contenuto multimediale -->
		   <div id="media_box"></div>
 			<script type="text/javascript">			
			var fo = new FlashObject("/wscmn/swf/pub_catalogo_privati.swf", "mymovie", "504", "450", "9", "#FFFFFF");
			 fo.addParam("quality", "high");		
			 fo.addParam("wmode", "opaque");
			 fo.write("media_box");
			</script>
          <!-- fine contenuto multimediale -->
          <!-- inizio download pdf  + visualizza demo -->
          <div class="bottom_link">
            <div> <a href="#1" class="pdf_doc" title="Scarica il PDF">Scarica il PDF</a> </div>
            <div> <a href="#1" class="v_demo" title="Visualizza la demo">Visualizza la demo</a> </div>
			<br clear="all"/>
          </div>
          <!-- fine  download pdf  + visualizza demo  -->