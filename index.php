<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="X-UA-Compatible" content="IE=EDGE"/>
 <meta charset="utf-8"/>
 <meta name="Generator" content="Xara HTML filter v.9.0.0.23"/>
 <meta name="XAR Files" content="index_htm_files/xr_files.txt"/>
 <title>index</title>
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link rel="stylesheet" href="index_htm_files/xr_fonts.css"/>
 <script><!--
 if(navigator.userAgent.indexOf('MSIE')!=-1 || navigator.userAgent.indexOf('Trident')!=-1){ document.write('<link rel="stylesheet" href="index_htm_files/xr_fontsie.css"/>');}
 --></script>
 <script>document.documentElement.className="xr_bgh0";</script>
 <link rel="stylesheet" href="index_htm_files/xr_main.css"/>
 <link rel="stylesheet" href="index_htm_files/xr_text.css"/>
 <script src="index_htm_files/roe.js"></script>
 <link rel="stylesheet" href="index_htm_files/ani.css"/>
 <style>
 html { background: url('index_htm_files/bg.gif'); }
  #xr_xr {top:0px; background: url('index_htm_files/bg.gif'); background-position: 100px 1500px;}
  .country4,.farcry4 { position: absolute; left:344px;top:189px; color: yellow;}
   .country3,.farcry3  { position: absolute;
  left: 564px;
  top: 189px;color: yellow;}
  .country2,.farcry2 { position: absolute;
  left: 457px;
  top: 214px;color: yellow;}
  .country1,.farcry1  {
	  position: absolute;
  left: 649px;
  top: 278px; color: yellow;}
  .country0,.farcry0  {
	    position: absolute;
  right: 679px;
  top: 278px; color: yellow;
  }
  .form { position: absolute; width:340px height: 340px;margin: 0 auto; left:410px;top:629px;}
  input, button { width: auto; height: 100px; font-size: 5em; color: gold}
  .att1 { color: red;  background-color: rgba(0,0,0,1); font-size: 3.5em; } 
  .att2 { color: green;  background-color: rgba(0,0,0,1); font-size: 3.5em; } 
 </style>
 
 <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js" integrity="sha256-J8ay84czFazJ9wcTuSDLpPmwpMXOm573OUtZHPQqpEU=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
	
	
	$('.choice1').on('click',  function() {
		
		
		
		$.ajax({
			type : 'POST', 
			url: 'test.php', 
			dataType : 'html',
			data: { choice : 'links' },
          
			success: function(result) {
			let player; 
			player = $('.choice1').text();
				$('#main').append(result);
			
			console.log(player);
		},
		complete: function(result) {   
			
			
		
		}	});
	
		return false;
		
		
	});
	$('.choice2').on('click', function(){
	
		$.ajax({
			type : 'POST', 
			url: 'test.php', 
			dataType : 'html',
			data: { choice : 'rechts' },
  
			success: function(result) {
	let player; 
	
		player = $('.choice2').text();
			$('#main').append(result);
		console.log(player);
		},
		complete: function(result) {   
			
			
		
		}	});
	
		return false;
	 
			
			});
			
});
</script>

</head>
<body class="xr_bgb0">
<div class="xr_ap" id="xr_xr" style="width: 960px; height: 1000px; left:50%; margin-left: -480px; text-align: left; top:0px;">
<div id='begin' style='width: 1000px; text-align: center; margin: 0 auto;'>

  <h1 style='color: gold; z-index:999' > WELKOM BIJ DE GAME SPACE SHIP OPERATOR </h1>
  <h2 style='color: gold; z-index:999'>Wie kies je links of rechts?</h2>

 <button class='choice1' style='color: gold'>LINKS</button>
 <button class='choice2' style='color: gold'>RECHTS</button>

</div>
 <script>var xr_xr=document.getElementById("xr_xr")</script>
<div id="xr_td" class="xr_td">
<div class="xr_ap xr_xri_" style="width: 960px; height: 1000px;">
  
 <div id='verder' style='z-index: -1;'> 
 <img class="xr_rn_ xr_ap" src="index_htm_files/10.png" alt="" title="" style=" left:137px;top:4px;width:656px;height:337px;"/>

 <img class="xr_rn_ xr_ap" src="index_htm_files/4.png" alt="" title="" style="left:67px;top:172px;width:814px;height:814px;"/>
 <img src='index_htm_files/2.gif' style='position:relative; margin-top:250px; margin-left:70px;' width='76' height='280'>
  <img src='index_htm_files/2.gif' style='position:absolute; top:250px; left:800px;' width='76' height='280'>
 <img class="xr_rn_ xr_ap bars ziekenhuis" src="index_htm_files/5.png" alt="" title="" style="left:287px;top:609px;width:118px;height:134px;"/>
<form action='' method='post' class='form'>
<input type='submit' class='frmsub' value='play'>
</form>
<p style='color: gold; font-size: 4.5em;z-index:999; position:absolute; top:450px; left:400px;' class='msg'></p>
 <img class="xr_rn_ xr_ap job scorro" id="set" src="index_htm_files/6.png" alt="" title="" style="left:547px;top:612px;width:116px;height:143px;"/>
 <img class="xr_rn_ xr_ap eigen eigenl" src="index_htm_files/7.png" alt="" title="" style="left:286px;top:359px;width:125px;height:121px;"/>
 <img class="xr_rn_ xr_ap eigen eigenr" src="index_htm_files/8.png" alt="" title="" style="left:544px;top:359px;width:119px;height:122px;"/>
 <span class="xr_ar leftc" style="left:142px;top:217px;width:100px;height:141px; background-color: #191919;"></span>
 <span class="xr_ar rightc" style="left:689px;top:218px;width:100px;height:141px; background-color: #191919;"></span>
 <span class="xr_ar topc" style="left:417px;top:14px;width:100px;height:141px; background-color: #191919;"></span>
 <img class="xr_rn_ xr_ap luc" src="index_htm_files/12.png" alt="" title="" style="left:552px;top:60px;width:158px;height:153px;"/>
 <span class="xr_ar xr_t245 ruc" style="left:254px;top:69px;width:100px;height:141px; background-color: #191919; -o-transform: matrix(0.694,0.720,0.720,-0.694,0,0); -webkit-transform: matrix(0.694,0.720,0.720,-0.694,0,0); -ms-transform: matrix(0.694,0.720,0.720,-0.694,0,0); transform: matrix(0.694,0.720,0.720,-0.694,0,0);"></span>
 <!--[if lt IE 9]><style>.xr_t245 {margin-left:-35px; margin-top:-14px;filter:progid:DXImageTransform.Microsoft.Matrix(M11=0.694,M21=0.720,M12=0.720,M22=-0.694,sizingMethod='auto expand')}</style><![endif]-->
 <span class="xr_ar" style="left:143px;top:479px;width:650px;height:147px; background: url('index_htm_files/bg.gif'); background-position: 100px 1500px;;"><img src='index_htm_files/1.gif' style='position: relative; margin-left: 175px;'width=76 height=150><img src='index_htm_files/1.gif' style='position: absolute;
  margin-left: 175px;
  margin-top: 00px;' width=76 height=150></span>
 <img class="xr_rn_ xr_ap" src="index_htm_files/15.png" alt="" title="" style="display: none;left:-86px;top:271px;width:258px;height:247px;"/>
 <img class="xr_rn_ xr_ap" src="index_htm_files/16.png" alt="" title="" style="display: none;left:-55px;top:335px;width:227px;height:226px;"/>
 <img class="xr_rn_ xr_ap" src="index_htm_files/17.png" alt="" title="" style="display: none;left:739px;top:315px;width:243px;height:246px;"/>
 <div id="xr_xo0" class="xr_ap" style="left:0; top:0; width:960px; height:100px; visibility:hidden; z-index:3;">
 <a href="" onclick="return(false);" onmousedown="xr_ppir(this);">
 </a>
 </div>
 <div id="xr_xd0"></div>
 </div>
</div>
</div>
</div>
<div id='main'> 
<!--[if lt IE 7]><script src="index_htm_files/png.js"></script><![endif]-->
<!--[if IE]><script>xr_aeh()</script><![endif]--><!--[if !IE]>--><script>xr_htm();repMobFonts();window.addEventListener('load', xr_aeh, false);</script><!--<![endif]-->


<div class='output'>
	
</div>

<script>
	
</script>
</div>
</body>
</html>