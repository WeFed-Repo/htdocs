<!-- carousel universale spalla destra -->
<?php
	$totVal = rand(1,3);
?>
<div class="widget">
	<div class="wdg-carousel loading">
		<!-- Item -->
		<div><a href="#"><img src="/HT/fe/img/pl_carousel1.png" class="w-100"></a></div>
		<?php
		if($totVal>1) {
			for($i=2;$i<=$totVal;$i++)
			{
				?><div><img src="/HT/fe/img/pl_carousel<?php print $i; ?>.png" class="w-100"></div>
				<?php
			}
		}
		?>
		<!-- Fine item -->
	</div>
	<?php
		if ($site == "youweb") {
			?>
			<a href="#" class="cta marginBottomNega10 marginTopSmall ">Tutte le news</a>
			<?php
		}
	?>
</div>
<!-- /carousel universale spalla destra -->