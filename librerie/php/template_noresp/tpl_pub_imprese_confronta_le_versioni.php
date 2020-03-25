          <!-- inizio banner principale -->
          <div class="main_banner"> <img src="/img/ban_visual_imprese.jpg" alt="Imprese" title="Lorem ipsum" /> </div>
          <!-- fine banner principale -->
          <!-- inizio navigazione principale -->
          <?php 
		  $menumode = "imprese";
		  virtual("/librerie/include/commons/navigazione/pub_all_con_nav_005.php");
		  ?>
          <!-- fine navigazione principale -->
          <!-- inizio titolo pagina grafico -->
            <div class="graphic_title">
		  	<h2><img alt="Lorem ipsum" src="/img/tt_confronta_le_versioni.gif"/></h2>
		  </div>
          <!-- fine titolo pagina grafico -->
          <!-- inizio contenuti testuali  -->
          <h3 class="generic_tit">Vuoi confrontare le versioni disponibili <br />
            per ogni versione BPM Banking?</h3>
          <p class="plain_txt enfasi">Basic, Classic o Plus, confronta per scegliere la versione pi&ugrave; adatta:</p>
          <!-- fine contenuti testuali  -->
          <!-- inizio form confronto  -->
          <form action="#1">
            <p class="gen_txt single_field"> <strong>Scegli un argomento</strong>
              <select>
                <option>Esigenze operative</option>
                <option>list item </option>
                <option>list item </option>
                <option>list item </option>
                <option>list item </option>
              </select>
            </p>
          </form>
          <!-- fine form confronto  -->
          <!-- inizio tabella risultati  -->
          <div class="table_frame">
            <h3 class="title">Confronta le versioni</h3>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th colspan="2" class="narrow_col">&nbsp;</th>
                <th class="large_col">Esigenze operative</th>
              </tr>
              <tr>
                <td class="ico_cell"><img src="/img/img_or_basic.gif" alt="Basic" title="Basic" /></td>
                <td class="name_cell">Basic</td>
                <td class="desc_cell">servizio operativo</td>
              </tr>
              <tr class="color_row">
                <td class="ico_cell"><img src="/img/img_or_classic.gif" alt="Classic" title="Classic" /></td>
                <td class="name_cell">Classic</td>
                <td class="desc_cell"><ul>
                    <li>semplici</li>
                    <li>quotidiane</li>
                  </ul></td>
              </tr>
              <tr>
                <td class="ico_cell"><img src="/img/img_or_plusmono.gif" alt="Plus monobanca" title="Plus monobanca" /></td>
                <td class="name_cell">Plus monobanca</td>
                <td class="desc_cell">gestione medio/elevata di quantità di dati solo su circuito BPM, estero</td>
              </tr>
              <tr class="color_row">
                <td><img src="/img/img_or_plusmulti.gif" alt="Plus multibanca" title="Plus multibanca" /></td>
                <td class="name_cell">Plus multibanca</td>
                <td class="desc_cell">gestione medio/elevata di quantità di dati solo su circuito multibanca, estero</td>
              </tr>
            </table>
          </div>
          <!-- fine tabella risultati  -->