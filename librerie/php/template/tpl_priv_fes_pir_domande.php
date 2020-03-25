<h2>Domande frequenti</h2>
<div class="box-generico">
	  <div class="box-generico-comunicazioni">
	    <div class="panel-group" id="accordionDomande" role="tablist" aria-multiselectable="true"> 

	    	<?php 
	    		for($i=1;$i<20;$i++) {
	    	?>
	    	<!-- Blocco domanda -->
	        <div class="box-generico-comunicazioni-block">
	              <div class="panel panel-default">
	                <div class="panel-border">
	                  <div class="panel-heading" role="tab" id="doamanda<?php print $i; ?>">
	                    <h4 class="panel-title">
	                      <a class="collapsed" data-toggle="collapse" href="#collapsedomanda<?php print $i; ?>" aria-expanded="false" aria-controls="collapsedomanda<?php print $i; ?>" title="Chi lorem ipsum dolor sit amet?">
	                        <?php print $i; ?>. <?php print randomText(8,20); ?>?
	                      </a>
	                     </h4>
	                  </div>
	                  <div id="collapsedomanda<?php print $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq1">
	                    <div class="panel-body">
	                    	<p> <?php print randomText(40,100); ?>.</p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	          </div>
	          <hr>
	          <!-- Fine blocco domanda -->
	          <?php
	          	}
	          ?>

	       </div>
	     </div>
	 </div>
