<div class="box_login">
            <form name="login_privati" method="post" action="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_errore_login.php">
              <?php /*inizio tab navigation */ ?>
              <div class="tab_switch">
                 <div class="tab active_tab" onclick="showTab('tab1','tabMod1');document.getElementById('abilitaConto').href ='\/connect.php?page=str_interna_pub.php&tpl=tpl_pub_privati_abilita_il_conto.php';" id="tabMod1tab1"><a href="#1" title="Accesso Privati">Accesso Privati</a></div>
                 <div class="tab" onclick="showTab('tab2','tabMod1');document.getElementById('abilitaConto').href ='\/connect.php?page=str_interna_pub.php&tpl=tpl_pub_imprese_abilita_il_conto.php';" id="tabMod1tab2"><a href="#1" title="Accesso Imprese">Accesso Imprese</a></div>
 			  </div>
              <?php /*fine tab navigation */ ?>
              <?php /*inizio form privati*/ ?>
              <div id="tabMod1tab1content">
                <div class="form_login ret_log">
                  <div class="form_row">
                    <div class="double_field to_left"> <span>User id</span>
                      <input type="text" />
                    </div>
                    <div class="double_field to_right"> <span>Password</span>
                      <input type="password" />
                    </div>
                  </div>
                  <div class="form_row2">
                    <div class="field_with_help"><span>Cosa vuoi fare?</span>
                      <select onkeyup="if (event.keyCode == 13) document.login_privati.submit();">
                        <option>Seleziona</option>
                        <?php
						for ($i=0; $i<=300 ; $i++)
						{
						?>
						<option>list item <?php print $i; ?></option>
						<?php
						}
						?>
					  </select>
                    </div>
                    <div class="ico_help"> <a href="#1" title="Serve aiuto?">Serve aiuto?</a> </div>
                  </div>
                  <div class="sub_but"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_errore_login.php" title="Entra"><input type="image" title="Entra" alt="Entra" src="/img/ret/pixel_trasp.gif" class="entra"/></a> </div>
				  <div class="form_foot">
                    <div class="field_with_submit"><a href="#1" title="Hai perso la password?">Hai perso la password?</a> </div>
                  </div>
                </div>
              </div>
              <?php /*fine form privati*/ ?>
              <?php /*inizio form imprese*/ ?>
              <div id="tabMod1tab2content" class="hide_it">
                <div class="form_login bus_log">
                  <div class="form_row type_check">
                    <input name="accesso" type="radio" onclick="displayValue('cod_user','block');"  />
                    Accesso utente</div>
                  <div class="form_row type_check">
                    <input id="admin_login" name="accesso" type="radio" checked="checked" onclick="displayValue('cod_user','none');" />
                    Accesso amministatore</div>
                  <div class="form_row">
                    <div class="double_field to_left"> <span>Codice cliente</span> </div>
                    <div class="double_field to_right">
                      <input type="text" />
                    </div>
                  </div>
                  <div class="form_row" id="cod_user" style="display: none;">
                    <div class="double_field to_left"> <span>Codice utente</span> </div>
                    <div class="double_field to_right">
                      <input type="text" />
                    </div>
                  </div>
                  <div class="form_row">
                    <div class="double_field to_left"> <span>Password</span> </div>
                    <div class="double_field to_right">
                      <input type="password" />
                    </div>
                  </div>
                  <div class="form_foot">
                    <div class="field_with_submit"> <a href="#1" title="Hai perso la password?">Hai perso la password?</a> </div>
                    <div class="sub_but"> <a href="#" title="Entra"><input type="image" title="Entra" alt="Entra" src="/img/ret/pixel_trasp.gif" class="entra"/></a> </div>
                  </div>
                </div>
              </div>
              <?php /*fine form imprese*/ ?>
            </form>
            <?php /*inizio pulsante primo accesso*/ ?>
            <div class="service_button primo_accesso"> <a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_help_center_primo_accesso.php" title="Istruzioni primo accesso">Istruzioni primo accesso</a> </div>
            <?php /*fine pulsante primo accesso*/ ?>
            <?php /*inizio pulsante abilita il conto*/ ?>
            <div class="service_button ab_conto"> <a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_privati_abilita_il_conto.php" title="Abilita il tuo conto" id="abilitaConto">Abilita il tuo conto</a> </div>
            <?php /*fine pulsante abilita il conto*/ ?>
          </div>