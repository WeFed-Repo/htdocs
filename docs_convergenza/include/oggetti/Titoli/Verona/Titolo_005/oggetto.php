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
			 		<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: lorem ipsum&pagCont=01','Help: lorem ipsum')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill icon-2x"></i ></a>
			 	
				</div>
				
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
	<?php 
					if ($site == "webank") 
				
					{
				?>
			 	<section>
			 		<p>In vitae dolor condimentum, fringilla nunc vitae, molestie sem. Nulla maximus fermentum mauris congue pellentesque. Mauris turpis sapien, vestibulum a <a href="#">egestas ut, luctus sed justo</a>. Aenean felis nisl, molestie id sapien ac, lacinia pulvinar est. Cras convallis erat non purus sollicitudin vehicula.</p>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li>
							<strong>Lorem ipsum dolor</strong> sit amet
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit
							<span class="txthelp">
								<strong data-title="In vitae dolor condimentum, fringilla nunc vitae, molestie sem. Nulla maximus fermentum mauris congue pellentesque. Mauris turpis sapien, vestibulum a egestas ut, luctus sed justo. Aenean felis nisl," data-toggle="tooltip" data-original-title="" title="">lorem ispum</strong>
							</span>
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit
							<span class="txthelp">
								<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: lorem ipsum&pagCont=01','Help: lorem ipsum');" class="no-underline">Link per l'apertura dell'overlayer </a>
							</span>
						</li>
						
							 <div id="helpDialog" class="modal fade  helpDialog fullScreen" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								 <div class="modal-dialog">
								    <div class="modal-content">
								       <div class="modal-header clearfix">
								          <button type="submit" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
								       </div>
								       <div class="modal-body">
								       </div>
								    </div>
								 </div>
							</div>
					</ul>
				</section>
				<?php
					}
				?>
</section>
