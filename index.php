<!DOCTYPE html> 
<html> 
<head> 
	<title>KinApp</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="apple-mobile-web-app-capable" content="no" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	<script src="FitText.js-master/jquery.fittext.js"></script>  
	
		<link rel="stylesheet" type="text/css" href="css/custom.css">

	
	<style>
	.ui-body-c {
	background-image:url('img/background.png') !important;
	background-color:#D9D9D9 !important;
	background-repeat:no-repeat;
	background-position:50% 0%; 
	}
	
	#logo{
	max-width:700px;
	width:85%;
	text-align:center;
	margin-left:auto;
	margin-right:auto;
	display: block;
	border: 0px solid black
	}
	
	#logo img {
	max-width:700px;
	width:100%;
	height:auto;
	
	}
	
	#rs, #start{
	max-width:500px;
	text-align:center;
	width:75%;
	margin-left:auto;
	margin-right:auto;
	display: block;
	}
	
	.dem {
	font-family: 'Arial Bold', sans-serif;
	font-size: 2.5em;
	color: #313133 !important;
	text-decoration: none;
	
     background: #fdfdfd;
     background: -webkit-linear-gradient( #fdfdfd, #c5c7c9);
     background:    -moz-linear-gradient( #fdfdfd, #c5c7c9);
     background:     -ms-linear-gradient( #fdfdfd, #c5c7c9);
     background:      -o-linear-gradient( #fdfdfd, #c5c7c9);
     background:         linear-gradient( #fdfdfd, #c5c7c9);
	
	}

#start {
margin-top: 0.5em;
}

#bouton_dem {
border:5px solid #afb2b4;
border-radius: 8px;
line-height:200%

}

.ui-grid-a .ui-block-a ,.ui-grid-a .ui-block-b{
width:45%;
}

.ui-grid-a .ui-block-b {
margin-left: 10% !important;
}

.but img {
width:100%;
height:auto;
}


.ui-bar, .ui-body {
	padding: .2em 15px !important;
}

@media all and (min-width: 780px) {
.but img {
max-height:150px;
width:auto;
}

#bouton_dem:hover{
border: #800000 5px solid
}


}


</style>
<script type="text/javascript">
 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-39532562-2']);
 _gaq.push(['_gat._anonymizeIp']);
(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(ga, s);
 })();
</script>
</head> 
<body> 
<h1>KinApp - L'application de la kinésiologie</h1>
<p>Application web sur le conditionnement physique et les saines habitudes de vie développée par des étudiants en kinésiologie de l'Université de Sherbrooke</p>
<div id ="IndexPage" data-role="page">

	<!--div data-role="header">
		
	</div--><!-- /header -->

<div data-role="content">	
<div id="logo" class="ui-bar">
<img src= "img/logo.png" >
</div>

<div id = "start" class="ui-bar">
<div class="ui-grid-solo" >
	<a href="nouveau.php" data-ajax="false" id = "bouton_dem" class=" dem but ui-block-a"><span id="span-dem">Démarrer</span></a>
</div><!-- /grid-a -->
</div>
<div id = "rs" class="ui-bar">
<div class="ui-grid-a">
	<a target="_blank" href="http://www.facebook.com/kinappsherbrooke" class="but ui-block-a"><img id="fb" src= "img/fb.png" ></a>
	<a target="_blank" href="http://twitter.com/kinapp2" class="but ui-block-b"><img id="tw" src= "img/twitter.png" ></a>
</div><!-- /grid-a -->
</div>
	
	</div><!-- /content -->

</div><!-- /page -->

<script type="text/javascript">
 $('[data-role=page]').on('pageshow', function (event, ui) {
  try {
    _gaq.push( ['_trackPageview', event.target.id] );
    console.log(event.target.id);
  } catch(err) {
  }
});
</script>

</body>
</html>