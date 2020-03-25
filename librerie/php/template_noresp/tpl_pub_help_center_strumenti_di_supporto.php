          <!--
        	ATTENZIONE: il layer è posizionato in assoluto rispetto al div con classe "center_block" in modo
            da posizionarsi orizzontalmente centrato rispetto al blocco di contenuto centrale.
            Per disporlo verticalmente nella posizione desiderata
            occorre agire sullo stile in linea del div con classi "layer_cont frm_overlay".       
        -->
        
          <!-- inizio layer contatti -->
          <div class="layer_cont frm_overlay" style="display:none;" id="contactform">
            <div class="top_box"><a href="javascript:;" onclick="closeAlert('contactform');"><img src="/wscmn/img/ico1gr_close_layer.gif" alt="Chiudi" title="Chiudi" /></a></div>
            <div class="inner_box">
              <!-- inizio form  -->
              <form action="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_help_center_strumenti_di_supporto.php&openerror=1" method="post">
               <div class="form_title msg"> Tutti i campi sono obbligatori. </div>
                <div class="form_row">
                  <div class="frm_label">Sei un cliente: </div>
                  <div class="frm_fld">
                    <select name="typeRic" value="" onChange="functionOnChange('containerMess','testoMess',typeRic[typeRic.selectedIndex].value);">
                      <option>Seleziona</option>
                      <option>list item </option>
                      <option>list item </option>
                      <option>list item </option>
                      <option>list item </option>
                    </select>
                  </div>
				  <br class="clear" />
					<div class="txtvis" id="containerMess">
					     <div id="testoMess">
						 <img alt="" src="/wscmn/img/str_bg_sugg_top.gif"/>
						  <div class="testoMess2">
						 	Per modificare il tuo indirizzo email:
							<ul>
							<li>accedi all'area privata inserendo i tuoi codici di accesso</li>
							<li>clicca su Anagrafica e recapiti > modifica indirizzo Email</li>	
							<li>modifica l'indirizzo email precedentemente inserito</li>	
							<li>inserisci il codice di controllo che riceverai al nuovo indirizzo email</li>		
							</ul> 
					Per modificare gli indirizzi email associati ai firmatari della firma digitale:
							<ul>
							<li>accedi all'area privata inserendo i tuoi codici di accesso</li>
							<li>seleziona la voce Elenco Firmatari</li>	
							<li>scegli il nominativo desiderato e inserirsci il nuovo indirizzo email</li>		
							</ul>
							Se desideri ulteriori informazioni, prosegui con la compilazione del form.
						</div>	
						<img alt="" src="/wscmn/img/str_bg_sugg_bottom.gif"/>	
					</div>  
				</div> 
                </div>
                <div class="form_title enfasi"> I TUOI DATI </div>
                <div class="form_row">
                  <div class="frm_label"> Nome e cognome:</div>
                  <div class="frm_fld">
                    <input type="text" />
                  </div>
                </div>
                <div class="form_row">
                  <div class="frm_label"> Indirizzo email: </div>
                  <div class="frm_fld">
                    <input type="text" />
                  </div>
                </div>
                <div class="form_row">
                  <div class="frm_label"> Messaggio:</div>
                  <div class="frm_fld">
                    <textarea name="" cols="10" rows="8"></textarea>
                  </div>
                </div>
                <div class="form_row">
                  <div class="frm_label">Codice di controllo:</div>
                  <div class="frm_fld"> <img src="/wscmn/img/codice_placeholder.jpg" alt="Placeholder" title="Placeholder" /> </div>
                </div>
                <div class="form_row">
                  <div class="frm_label"> Digita il codice
                    visualizzato:</div>
                  <div class="frm_fld">
                    <input type="text" />
                  </div>
                </div>
                <div class="form_foot">
                  <input name="" type="submit" value="Invia" />
                </div>
              </form>
              <!-- fine form  -->
            </div>
          </div>
          <!-- fine layer contatti -->
		  
		   <!--
        	ATTENZIONE: il layer è posizionato in assoluto rispetto al div con classe "center_block" in modo
            da posizionarsi orizzontalmente centrato rispetto al blocco di contenuto centrale.
            Per disporlo verticalmente nella posizione desiderata
            occorre agire sullo stile in linea del div con classi "layer_cont frm_overlay".       
        	-->
          <!-- inizio layer contatti -->
          <div class="layer_cont txt_overlay" style="display:none;" id="contacttext">
            <div class="top_box"><a href="javascript:;" onclick="closeAlert('contacttext');"><img src="/wscmn/img/ico1gr_close_layer.gif" alt="Chiudi" title="Chiudi" /></a></div>
            <div class="inner_box">
			<div class="form_title enfasi">LOREM IPSUM DOLOR</div>
              <!-- inizio form  -->
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla magna nisl, vulputate rhoncus sodales a, vestibulum a mauris. Praesent facilisis risus gravida libero dignissim iaculis.<br />
                <br />
                Duis enim ante, volutpat sed bibendum et, convallis eget ligula. Aliquam aliquet, massa sed hendrerit hendrerit, eros eros rhoncus tellus, sit amet dignissim enim turpis at mauris. <br />
                <br />
                Vivamus et facilisis velit. Nam quis molestie odio. Nam laoreet massa massa, at sollicitudin dui. Donec et nisi nibh. Phasellus et sem vitae augue convallis hendrerit. Integer eget dui eget dui tincidunt tempor sed vel leo. In hac habitasse platea dictumst. </p>
              <!-- fine form  -->
            </div>
          </div>
          <!-- fine layer contatti -->
		  
		  <!--
        	ATTENZIONE: il layer è posizionato in assoluto rispetto al div con classe "center_block" in modo
            da posizionarsi orizzontalmente centrato rispetto al blocco di contenuto centrale.
            Per disporlo verticalmente nella posizione desiderata
            occorre agire sullo stile in linea del div con classi "layer_cont frm_overlay".       
        -->
        
          <!-- inizio layer contatti -->
          <div class="layer_cont frm_overlay" style="display: none;" id="contactformerror">
            <div class="top_box"><a href="javascript:;" onclick="closeAlert('contactformerror');"><img src="/wscmn/img/ico1gr_close_layer.gif" alt="Chiudi" title="Chiudi" /></a></div>
            <div class="inner_box">
              <!-- inizio form  -->
              <form action="#">
               <div class="form_title msg"> Tutti i campi sono obbligatori. </div>
                <div class="form_row frm_err">
                  <div class="frm_label">Sei un cliente: </div>
                  <div class="frm_fld">
                    <select>
                      <option>Seleziona</option>
                      <option>list item </option>
                      <option>list item </option>
                      <option>list item </option>
                      <option>list item </option>
                    </select>
                  </div>
                </div>
                <div class="form_title enfasi"> I TUOI DATI </div>
                <div class="form_row frm_err">
                  <div class="frm_label"> Nome e cognome:</div>
                  <div class="frm_fld">
                    <input type="text" />
                  </div>
                </div>
                <div class="form_row frm_err">
                  <div class="frm_label"> Indirizzo email: </div>
                  <div class="frm_fld">
                    <input type="text" />
                  </div>
                </div>
                <div class="form_row frm_err">
                  <div class="frm_label"> Messaggio:</div>
                  <div class="frm_fld">
                    <textarea name="" cols="10" rows="8"></textarea>
                  </div>
                </div>
                <div class="form_row frm_err">
                  <div class="frm_label">Codice di controllo:</div>
                  <div class="frm_fld"> <img src="/wscmn/img/codice_placeholder.jpg" alt="Placeholder" title="Placeholder" /> </div>
                </div>
                <div class="form_row frm_err">
                  <div class="frm_label"> Digita il codice
                    visualizzato:</div>
                  <div class="frm_fld">
                    <input type="text" />
                  </div>
                </div>
                <div class="form_foot">
                  <input name="" type="submit" value="Invia" />
                </div>
              </form>
              <!-- fine form  -->
            </div>
          </div>
          <!-- fine layer contatti -->
		  
		  
		  
		  <!-- inizio banner principale -->
          <div class="main_banner"> <img src="/img/ban_visual_help_center.jpg" alt="Help center" title="Help center" /> </div>
          <!-- fine banner principale -->
          <!-- inizio navigazione principale -->
         <?php 
		  $menumode = "help";
		  virtual("/librerie/include/commons/navigazione/pub_all_con_nav_005.php");
		  ?>
          <!-- fine navigazione principale -->
          <!-- inizio navigazione secondaria -->
          <?php 
		  $submenumode = "tpl_pub_help_center_strumenti";
		  virtual("/librerie/include/commons/navigazione/pub_all_con_nav_010.php");
		  ?>
          <!-- fine navigazione secondaria -->
          <!-- inizio titolo pagina grafico -->
           <div class="graphic_title">
		  	<h2><img alt="Lorem ipsum" src="/img/tt_strumenti_di_supporto.gif"/></h2>
		  </div>
          <!-- fine titolo pagina grafico -->
          <!-- inizio contenuto testuale su due colonne con sfondo colorato  -->
          <div class="spot_txt with_color">
            <div class="to_left">
              <h3 class="title"> Numero verde </h3>
              <p> Numero Verde attivo sul territorio nazonale per telefoni cellulari <br />
                e telefonia fissa </p>
            </div>
            <div class="to_right"> <strong class="big_txt"> 800.88.00.88</strong> </div>
          </div>
          <!-- fine  contenuto testuale su due colonne con sfondo colorato  -->
          <!-- inizio contenuto testuale su due colonne con sfondo colorato  -->
          <div class="spot_txt with_color">
            <div class="to_left">
              <h3 class="enfasi"> Risponditore automatico </h3>
              <ul>
                <li>attivo 24 ore su 24, 7 giorni su 7</li>
                <li>fornisce informazioni relative a:
                  <ul>
                    <li>- Blocco carte di pagamento </li>
                    <li>- Uso corretto do di User ID e Password </li>
                    <li>- Smarrimento Password</li>
                    <li>- Orari Customer Care</li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="to_right">
              <h3 class="enfasi"> Operatore </h3>
              <ul>
                <li>Attivo dal luned&igrave; al venerd&igrave; dalle 8:30 alle 22:00 e il sabato dalle 9:00 alle 17:30</li>
                <li>&egrave; richiesta identificazione tramite <strong>User ID</strong> e <strong>Password di livello</strong> (indicata sulla Carta dei Servizi Telematici)</li>
              </ul>
            </div>
          </div>
          <!-- fine  contenuto testuale su due colonne con sfondo colorato  -->
          <!-- inizio contenuto testuale su due colonne  -->
          <div class="spot_txt">
            <div class="to_left">
              <h3 class="title"> Numero internazionale </h3>
              <p>Dal luned&igrave; al venerd&igrave; dalle 8:30 alle 22:00 e il sabato dalle 9:00 alle 17:30.<br />
                Per ogni accesso utilizza <strong>User ID</strong> e <strong>Password di livello</strong> (indicata sulla Carta dei Servizi Telematici) </p>
            </div>
            <div class="to_right"> <strong class="big_txt"> +39 02.49941234</strong> </div>
          </div>
          <!-- fine  contenuto testuale su due colonne con sfondo colorato  -->
          <!-- inizio contenuto testuale con sfondo colorato  -->
          <div class="spot_txt with_color">
            <div class="inner_frame">
              <h3 class="title"> Contatti email </h3>
              <p>Compila la form o contattaci al nostro indirizzo e-mail <span class="enfasi"> &#8250; <a href="mailto:privati@bpmbanking.it">privati@bpmbanking.it</a></span>.<br />
                Ti risponderemo al pi&ugrave; presto!</p>
              <p>I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
              <p><span class="enfasi"> &#8250; <a href="javascript:;" onclick="openAlert ('contactform');">Usa la nostra form</a></span></p>
            </div>
          </div>
          <!-- fine contenuto testuale con sfondo colorato  -->
          <!-- inizio blocco titoletto + lista con icone -->
          <div class="inner_frame last_list_block">
            <h3 class="title">Area privata</h3>
            <ul class="iconed_list">
              <li> <img src="/img/img_or_help_center_in_chat.gif" alt="Help center in chat" /> &#8250; <a href="javascript:;" onclick="openAlert ('contacttext');">Help center in chat</a></li>
              <li><img src="/img/img_or_assistente_virtuale.gif" alt=" Assistenza virtuale" /> &#8250; <a href="javascript:;" onclick="openAlert ('contacttext');">Assistenza virtuale</a></li>
              <li><img src="/img/img_or_help_center_ti_richiama.gif" alt=" Help center ti richiama" /> &#8250; <a href="javascript:;" onclick="openAlert ('contacttext');">Help center ti richiama</a></li>
            </ul>
          </div>
          <!-- fine blocco titoletto + lista con icone -->