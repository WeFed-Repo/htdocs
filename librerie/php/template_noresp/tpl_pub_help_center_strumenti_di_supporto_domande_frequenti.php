          <div class="main_banner"> <img src="/img/ban_visual_help_center.jpg" alt="Help center" title="Help center" /> </div>
          <?php 
		  $menumode = "help";
		  virtual("/librerie/include/commons/navigazione/pub_all_con_nav_005.php");
		  ?>
          <?php 
		  $submenumode = "tpl_pub_help_center_strumenti";
		  virtual("/librerie/include/commons/navigazione/pub_all_con_nav_010.php");
		  ?>
          <h3  class="sub_section_tit">Domande frequenti</h3>
		  <!-- ESEMPIO DI FORM -->
		  <form action="/pub/xbank/faq.do" method="get">
<input type="hidden" value="nav_pub_xb_strumenti_supporto" name="tabId"/>
<input type="hidden" value="nav_pub_xb_domande_frequenti" name="OBS_KEY"/>
<input type="hidden" value="0" name="reload"/>
<div class="faq_select enfasi">
	<span class="label">Scegli un profilo:</span>
	<span>
	
	<select onchange="javascript:functionSubmit(this.form, '2','reload');" name="profilo">
  			
  					
  					<option value="0">Privati</option>
					
				
  					
  					<option selected="selected" value="1">Imprese</option>
					
				
   			</select>
	</span>
</div>

<div class="faq_select enfasi">
	<span class="label">Scegli una categoria:</span>
	<span align="right" id="categoria"><select onchange="javascript:functionSubmit(this.form, '1','reload');" name="categoria"> 
  		
  					<option value="0">--</option>
  				
  				 
		</select>
	</span>
</div>

<div class="faq_select enfasi">
	<span class="label">Scegli un argomento:</span>
	<span align="right" id="argomento">
				<select name="argomento"> 
  				<option value="0">--</option>
				</select>
	</span>
</div>

<div class="to_right invio_segnalazione_btn"> <a title="Invia" href="#1">Invia</a></div>
</form>
		  
		  <!-- FINE ESEMPIO DI FORM -->
		  <!-- RISULTATI -->
          <p class="gen_txt enfasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
          <p class="gen_txt ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ligula. Sed at enim. Fusce arcu justo, varius non, tristique sollicitudin, vestibulum eu, lectus. Cras ac tellus quis velit consequat tempor. Proin mauris dui, ultrices vel, pharetra sed, auctor non, augue. Integer odio dolor.</p>
          <p class="gen_txt enfasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
          <p class="gen_txt ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ligula. Sed at enim. Fusce arcu justo, varius non, tristique sollicitudin, vestibulum eu, lectus. <a href="#1">Cras ac tellus quis velit consequat tempor</a>. Proin mauris dui, ultrices vel, pharetra sed, auctor non, augue. Integer odio dolor.</p>
          <p class="gen_txt enfasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
          <p class="gen_txt ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ligula. Sed at enim. Fusce arcu justo, varius non, tristique sollicitudin, vestibulum eu, lectus. Cras ac tellus quis velit consequat tempor. Proin mauris dui, ultrices vel, pharetra sed, auctor non, augue. Integer odio dolor.</p>
          <p class="gen_txt enfasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
          <p class="gen_txt ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ligula. Sed at enim. Fusce arcu justo, varius non, tristique sollicitudin, vestibulum eu, lectus. Cras ac tellus quis velit consequat tempor. Proin mauris dui, ultrices vel, pharetra sed, auctor non, augue. Integer odio dolor.</p>
          <p class="gen_txt enfasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
          <p class="gen_txt ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ligula. Sed at enim. Fusce arcu justo, varius non, tristique sollicitudin, vestibulum eu, lectus. Cras ac tellus quis velit consequat tempor. Proin mauris dui, ultrices vel, pharetra sed, auctor non, augue. Integer odio dolor.</p>
          <p class="gen_txt enfasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
          <p class="gen_txt ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ligula. Sed at enim. Fusce arcu justo, varius non, tristique sollicitudin, vestibulum eu, lectus. <a href="#1">Cras ac tellus quis velit </a>consequat tempor. Proin mauris dui, ultrices vel, pharetra sed, auctor non, augue. Integer odio dolor.</p>
          <p class="gen_txt enfasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
          <p class="gen_txt ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ligula. Sed at enim. Fusce arcu justo, varius non, tristique sollicitudin, vestibulum eu, lectus. Cras ac tellus quis velit consequat tempor. Proin mauris dui, ultrices vel, pharetra sed, auctor non, augue. Integer odio dolor.</p>
          <p class="gen_txt enfasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
          <p class="gen_txt ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ligula. Sed at enim. Fusce arcu justo, varius non, tristique sollicitudin, vestibulum eu, lectus. Cras ac tellus quis velit consequat tempor. Proin mauris dui, ultrices vel, pharetra sed, auctor non, augue. Integer odio dolor.</p>
          <p class="gen_txt enfasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
          <p class="gen_txt ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ligula. Sed at enim. Fusce arcu justo, varius non, tristique sollicitudin, vestibulum eu, lectus. Cras ac tellus quis velit consequat tempor. Proin mauris dui, ultrices vel, pharetra sed, auctor non, augue. Integer odio dolor.</p>
          <p class="gen_txt enfasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
          <p class="gen_txt ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ligula. <a href="#1">Sed at enim</a>. Fusce arcu justo, varius non, tristique sollicitudin, vestibulum eu, lectus. Cras ac tellus quis velit consequat tempor. Proin mauris dui, ultrices vel, pharetra sed, auctor non, augue. Integer odio dolor.</p>
          <p class="gen_txt enfasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
          <p class="gen_txt ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ligula. Sed at enim. Fusce arcu justo, varius non, tristique sollicitudin, vestibulum eu, lectus. Cras ac tellus quis velit consequat tempor. Proin mauris dui, ultrices vel, pharetra sed, auctor non, augue. Integer odio dolor.</p>