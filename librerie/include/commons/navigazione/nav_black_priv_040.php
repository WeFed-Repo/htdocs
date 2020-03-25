<!--<style>
/* Classi generali oggetto (chiuso) */
#navbisogni {width: 147px; margin: 0 0 10px 0; padding:0; display: block; float:left; clear:left;}
#navbisogni div.navbisognititle {overflow:hidden; width: 147px; margin: 0; padding:0; display: block; float:left; height: 45px; background-color: #dedede; background: transparent url(/img/ret/str_navbisogni_title_off.gif) no-repeat left top}
#navbisogni a.espandi {color: #666; width: 147px; margin: 0; padding:0; display: block; float:left; height: 26px; background: transparent url(/wscmn/img/ret/str_navbisogni_espandi.gif) no-repeat left top; text-align: center; line-height: 23px; color: #666; font-size: 10px;}
#navbisogni a.espandi:hover {color: #666 !important;}
#navbisogni a.chiudi {display:none; clear:left; color: #666; width: 147px; margin: -4px 0 0 0; padding:0; float:left; height: 30px; background-color: #efefef; text-align: center; line-height: 28px; color: #666; font-size: 10px; clear:left;background: transparent url(/wscmn/img/ret/str_navbisogni_chiudi.gif) no-repeat left top; overflow: visible;}
#navbisogni a.chiudi:hover {color: #666 !important}
* html #navbisogni a.chiudi {margin-top: -18px;}
#navbisogni .navbisognibody {display:none; width: 147px; float:left; background: transparent url(/wscmn/img/ret/str_navbisogni_bg.gif) no-repeat left top; padding:0 0 10px; margin:0;}
#navbisogni .navbisognibody span {font-size:11px; font-weight:bold; display: block; clear:left; padding: 10px 10px 0; margin:0;}
#navbisogni div.separator {border-top:1px dotted #CACACA;display:block;float:left;height:1px;margin:14px 0 0 10px;width:126px; line-height: 10px; overflow: hidden;}
* html #navbisogni div.separator {margin-left: 3px;}
#navbisogni .navbisognibody p {font-size: 10px; clear:left; display:block; padding: 0 10px !important}
#navbisogni .navbisognibody ul {margin:0; padding:3px 5px; }
#navbisogni .navbisognibody ul li {margin:0; padding:0; list-style-type: none;}
#navbisogni .navbisognibody ul li a {background:url("/wscmn/img/ret/str_dottie.gif") no-repeat scroll left 6px transparent; display:block;font-size:10px;line-height:11px;margin:0 0 0 6px;padding:2px 0 0 7px;}

/* Classi per oggetto aperto */
#navbisogni.expanded div.navbisognititle {background-image: url(/img/ret/str_navbisogni_title_on.gif);}
#navbisogni.expanded a.chiudi {display:block;}
#navbisogni.expanded .navbisognibody {display:block;}
#navbisogni.expanded a.espandi {display:none;}

</style>-->
<div id="navbisogni">
	<div class="navbisognititle"></div>
	<div class="navbisognibody"><span>Bisogno 1</span>
		<p>Lorem ipsum dolor sit amet dolor. Lorem ipsum dolor.</p>
		<ul><li><a href="#">Soluzione 1</a></li><li><a href="#">Soluzione 2</a></li></ul>
		<div class="separator"></div>
		<span>Bisogno 2 Bisogno 2 Bisogno 2 Bisogno 2 </span>
		<p>Lorem ipsum dolor sit amet dolor. Lorem ipsum dolor sit amet dolor.</p>
		<ul><li><a href="#">Soluzione 1 soluzione 1 soluzione1</a></li><li><a href="#">Soluzione 2 soluzione 2 soluzione2</a></li><li><a href="#">Soluzione 3 soluzione 3 soluzione3</a></li></ul>
	</div>
	<a href="javascript:;" onclick="this.parentNode.className = 'expanded';" class="espandi">espandi</a>
	<a href="javascript:;" onclick="this.parentNode.className = '';" class="chiudi" title="chiudi">chiudi</a>
</div>