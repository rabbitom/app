<?php
	$title = 'Canvas Aroma Diffuser';
	$android_url = 'https://play.google.com/store/apps/details?id=net.erabbit.aromadiffuser';
	$ios_url = 'https://itunes.apple.com/app/canvas-aroma-diffuser/id1046445257?l=zh&ls=1&mt=8';
?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<style type="text/css">
		body{background: url("../images/app_logo_canvas.png") #FFF no-repeat center;}
		.button{
			display: inline-block;
			position: relative;
			margin: 10px;
			padding: 20 40px;
			text-transform: uppercase;
			text-align: center;
			text-decoration: none;
			text-shadow: 1px 1px 1px rgba(255,255,255,.22);
			font: bold 40px/45px Arial, sans-serif;
		
			-webkit-border-radius: 30px;
			-moz-border-radius: 30px;
			border-radius: 30px;
		
			-webkit-box-shadow: 1px 1px 1px rgba(0,0,0,.29), inset 1px 1px 1px rgba(255,255,255,.44);
			-moz-box-shadow: 1px 1px 1px rgba(0,0,0,.29), inset 1px 1px 1px rgba(255,255,255,.44);
			box-shadow: 1px 1px 1px rgba(0,0,0,.29), inset 1px 1px 1px rgba(255,255,255,.44);
		
			-webkit-transition: all 0.15s ease;
			-moz-transition: all 0.15s ease;
			-o-transition: all 0.15s ease;
			-ms-transition: all 0.15s ease;
			transition: all 0.15s ease;
			
			color: #19667d;

			background: #70c9e3; /* Old browsers */
			background: -moz-linear-gradient(top,  #70c9e3 0%, #39a0be 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#70c9e3), color-stop(100%,#39a0be)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  #70c9e3 0%,#39a0be 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  #70c9e3 0%,#39a0be 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  #70c9e3 0%,#39a0be 100%); /* IE10+ */
			background: linear-gradient(top,  #70c9e3 0%,#39a0be 100%); /* W3C */
		}
		
		.button span {
			display: block;
			text-transform: none;
			font: italic normal 20px/22px Georgia, sans-serif;
			text-shadow: 2px 2px 2px rgba(255,255,255, .12);
		}
	
		.button:hover {
			-webkit-box-shadow: 1px 1px 1px rgba(0,0,0,.29), inset 0px 0px 2px rgba(0,0,0, .5);
			-moz-box-shadow: 1px 1px 1px rgba(0,0,0,.29), inset 0px 0px 2px rgba(0,0,0, .5);
			box-shadow: 1px 1px 1px rgba(0,0,0,.29), inset 0px 0px 2px rgba(0,0,0, .5);
		}
	
		.button:active {
			-webkit-box-shadow: inset 0px 0px 3px rgba(0,0,0, .8);
			-moz-box-shadow: inset 0px 0px 3px rgba(0,0,0, .8);
			box-shadow: inset 0px 0px 3px rgba(0,0,0, .8);
		}
		
		.atbottom {
			position: absolute;
			bottom: 0;
			left: 10%;
			right: 10%;
		}
		
		/* Green Color */

		.green {
			color: #3e5706;
		
			background: #a5cd4e; /* Old browsers */
			background: -moz-linear-gradient(top,  #a5cd4e 0%, #6b8f1a 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a5cd4e), color-stop(100%,#6b8f1a)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  #a5cd4e 0%,#6b8f1a 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  #a5cd4e 0%,#6b8f1a 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  #a5cd4e 0%,#6b8f1a 100%); /* IE10+ */
			background: linear-gradient(top,  #a5cd4e 0%,#6b8f1a 100%); /* W3C */
		}
		
		/* Blue Color */
		
		.blue {
			color: #19667d;
		
			background: #70c9e3; /* Old browsers */
			background: -moz-linear-gradient(top,  #70c9e3 0%, #39a0be 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#70c9e3), color-stop(100%,#39a0be)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  #70c9e3 0%,#39a0be 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  #70c9e3 0%,#39a0be 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  #70c9e3 0%,#39a0be 100%); /* IE10+ */
			background: linear-gradient(top,  #70c9e3 0%,#39a0be 100%); /* W3C */
		}
		
		.topright {
			position:absolute; top:0; right:0;
		}
		
        #mask{ display: none;  position: absolute;  top: 0%;  left: 0%;  width: 100%;  height: 100%;  background-color: black;  z-index:101;  -moz-opacity: 0.7;  opacity:.70;  filter: alpha(opacity=70);}
		#top{display: none;  z-index:102}
	</style>
	<script type="text/javascript">
        function checkForWechat(){
			function is_weixin() {
			    var ua = navigator.userAgent.toLowerCase();
			    if (ua.match(/MicroMessenger/i) == "micromessenger") {
			        return true;
			    } else {
			        return false;
			    }
			}
			var isWeixin = is_weixin();
			if(isWeixin){
	            document.getElementById("mask").style.display="block";
	            document.getElementById("top").style.display="block";
			}
        }
	</script>
</head>
<body onload="checkForWechat()">
<?php
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	if(stristr($_SERVER['HTTP_USER_AGENT'],'Android')) {
		echo '<a href="'.$android_url.'" class="green button atbottom">Download<span>from Google Play</span></a>';
	}else if(stristr($_SERVER['HTTP_USER_AGENT'],'iPhone')){
		echo '<a href="'.$ios_url.'" class="blue button atbottom">Download<span>from App Store</span></a>';
	}else {
		echo '
		for iOS users, please download from App Store:&nbsp;<br/><img src="../images/apple_logo.png"/><a href="'.$ios_url.'" class="blue button">Download<span>from App Store</span></a>
		<br/>
		for Android users, please download from Google Play:&nbsp;<br/><img src="../images/android_logo.png"/><a href="'.$android_url.'" class="green button">Download<span>from Google Play</span></a>
		';
	}
?>
	<div id="mask"></div>
	<div id="top" class="topright"><font size="40px" color="#ffffff">Please open this page in browser&nbsp;</font><img src="../images/arrow.png"/></div>
</body>
</html>
