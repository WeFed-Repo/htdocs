<!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Librerie YouBusiness</title>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		
		<link href="./librerie/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" >
		<link href="./librerie/css/librerie.css" rel="stylesheet" type="text/css" media="all" >
		<script type="text/javascript" language="javascript" src="./librerie/js/jquery.min.js"></script>
		<script type="text/javascript" language="javascript" src="./librerie/js/bootstrap.min.js"></script>
	</head>
	<body>

  <style>
    #btnfiltra,#downloadfile {
      float:none;
      display:block;
      width:200px;
      margin:15px auto;
      background:#666;
      border-radius:10px;padding:15px 20px;
      font-weight:bold;
      color:#fff;
      cursor:pointer;
      text-align:center;
    }
    .loglabel {color:#aaa}
    #filetodownload, textarea {
			border:solid 1px #ddd;
			background:#fff;
			min-height: calc( 100vh - 220px );
			max-height:300px; 
			overflow:auto;
			font-size:12px;
			font-family: monospace;
			line-height:14px;
			padding:10px;
			color:#666;
		}
		a:disabled, button:disabled { opacity: 0.5; }
  </style>

  <script type="text/javascript">

    var filelist = [];

    $(function(){

        $("#btnfiltra").click(function(){
            var rawjson = JSON.parse($("#jsonchrome").val());

            $.each(rawjson["log"]["entries"],function(i,v){
                if(v.response.status===404) {
                    filelist.push(v.request.url);
                }
            });
            filelist = $.unique(filelist.sort());
            $("#filetodownload").append(filelist.join("<br>"))

            $("#step1").hide();
            $("#step2").show();
            
        });

        $("#downloadfile").click(function(){
            $(this).hide();
            $("#filetodownload").empty();
            $.each(filelist,function(i,v){
                $.ajax({
                    
                    url: "librerie_download_file.php",
                    datatype: "json",
                    method: "post",

                    data: {
                        localurl: v
                    },

                    success: function(data){
                        if (data.esito === "ok" ) {
                            $("#filetodownload").append(v + " ---> <b>"+data.msg+"</b></br>")
                        }
                        else
                        {
                            $("#filetodownload").append("<span color='red'>" + v + " ---> <b style='color:red'>"+data.msg+"</b></span></br>")
                        }
                        
                    },
                    error: function() {
                        $("#filetodownload").append("<span color='red'>" + v + " ---> <b style='color:red'>ERRORE</b></span></br>")
                    }
                })
            });
        });
    });
  </script>

	<header class="librerie">
			<div class="wrapper"> 
				<h1><a href="./index.php" class="btn-bak">&laquo;</a> Scarica file - Librerie YouBusiness</h1>
			</div>
		</header>
		<div id="main" class="librerie">
			<div class="wrapper">
			    
        <section id="step1">
				<p style="padding:30px 0">Incolla qui il "Copy all as HAR" dalla consolle/network di Chrome.</p>
        <textarea id="jsonchrome" style="width:100%;min-height:400px"></textarea>

				
	<a id="btnfiltra">FILTRA JSON RISULTATI</a>
</section>

<section id="step2" style="display:none" class="mt'3 pt-3">
        <p>Trovati i seguenti file da scaricare:</p>
        <div id="filetodownload" ></div>
            
        <a id="downloadfile">Scarica ora</a>

</section>


			</div>
		</div>
    
    
</body>


