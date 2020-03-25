<h2>Esempi di video player</h2>
<!-- JS DA IMPORTARE PER QUALSIASI VIDEO PLAYER -->
<script src="/wscmn/fe/js/priv_videoplayer.js" type="text/javascript"></script> 

<section>
<h3>Video player standalone</h3>
	<!-- VIDEO PLAYER STANDALONE -->
	<div id="videowrapper"></div>
	<script type="text/javascript">  
		getVideo({ 
			wrapper: "#videowrapper",  
			videopath : "https://media.webank.it/vod/video_comandi_vocali_saldo_e_partita.mp4",  
			autoplay: false, 
			initialVolume: 0.8 
		});  
	</script>
	<!-- FINE VIDEO PLAYER STANDALONE -->
</section>
<br>
<br>
<section>
	<!-- VIDEO LINK -->
	<h3>Video player link popup</h3>
	<ul>
		<li><a href="javascript:;" data-toggle="video-overlay" data-video-url="https://media.webank.it/vod/video_comandi_vocali_saldo_e_partita.mp4">Load tramite attributi</a><br>Non funziona se creato post onload</li>
		<li><a href="javascript:;" onclick="openVideo('https://media.webank.it/vod/video_comandi_vocali_saldo_e_partita.mp4');">Load tramite chiamata diretta</a><br>E' sufficiente importare il JS del video player in qualsiasi punto della pagina affinchè funzioni</li>
		<li><a href="javascript:;" onclick="openVideo('https://media.webank.it/vod/video_comandi_vocali_saldo_e_partita.mp4',{autostart:true});">Load via JS con forzature</a><br>Per ora l'unica disponibile e' l'autostart</li>
	</ul>
	<!-- FINE VIDEO LINK -->
</section>