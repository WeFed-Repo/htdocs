<?php
    $site = $_GET["site"];
    $libs = 'webank';
    $libsurl = 'http://convergenza.webank.local';
    $colorLink = "#8ab10b";
    if ($site == 'youweb') {
		$libs ="youweb";
		$colorLink = "#122e5c";
	}
	
?>
<section>
	<div class="titolo">
		<h1>
			<div class="row">

				
				<div class="col-sm-8">
					<span>Lorem ipsum</span>
			 		<span class="hidden-xs">:&nbsp; lorem</span>
			 	<?php 
					if ($site == "youweb") 
				
					{
				?>
			 		
			 		<i class="icon icon-documento hidden-sm hidden-md hidden-lg" title="icon-documento" id="ico-documenti" onclick="OpenHelp('/template/modale_documenti.php')"></i>
			 		<div id="helpDialog" class="modal fade  helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header clearfix">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                        
                      </div>
                      </div>
                    </div>
                  </div>
				<?php
					}
				?>	
				</div>
				<?php 
					if ($site == "youweb") 
				
					{
				?>
				<div class="col-sm-4">	
			 		<div class="pager pull-right">
						<div class="circle current_page">1</div>
						<div class="circle ">2</div>
						<div class="circle ">3</div>
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</h1>
	</div>
</section>
	