<!DOCTYPE html> 
<html> 
	<head> <title>KinApp</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

	<link rel="stylesheet" type="text/css" href="http://kinapp.ca/css/custom.css">
	<link rel="apple-touch-icon" href="icon/72.png" />
	<link rel="apple-touch-icon"  href="icon/72.png" /><script src="http://kinapp.ca/inc/quizz.js"></script>

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
	<!--[if lt IE 9]><script src="../../ie8/warning.js"></script><script>window.onload=function(){e("../../ie8/")}</script><![endif]-->


	<div id="capsule6" data-role="page" data-theme="c" >

	<div data-role="header" data-position="fixed"  >
	<h1>Capsule</h1>
	</div><!-- /header -->
	
	
		<div data-role="content">		<a href="http://kinapp.ca/infos.php"  rel-data="back" data-transition="pop"  data-role="button"  data-theme="c" data-inline="true" data-icon="back" >Retour</a>
		<div class="responsive">
		<div class="ui-grid-solo block-1 ">
	<h1>Importance des échauffements et du retour au calme</h1>
	<h3>Échauffement</h3>
	
		<p>Il est conseillé de commencer l’entrainement avec 5 à 10 minutes d’échauffement. Pourquoi?</p>
	<ul>
		<li>Pour préparer le système cardiovasculaire à l’effort en augmentant progressivement les fréquences cardiaques et le débit de sang dans les vaisseaux sanguin.</li>
		<li>Pour préparer les muscles à l’effort en augmentant la température corporelle et la circulation sanguine (dilatation des vaisseaux sanguins nourrissant les muscles).</li>
		<li>Pour préparer les articulations en augmentant progressivement leur niveau d’amplitude.</li>
		<li>Pour enclencher les processus de thermorégulation (principalement la transpiration).</li>
		<li>Pour se préparer mentalement à l’effort.</li>
	</ul>
	<p>Tout cela permet de prévenir les blessures et d’assurer un entrainement efficace.</p>

	<h4>Comment bien s’échauffer?</h4>
	<p>On conseille trois étapes :</p>
	<ol>
<li>Activité aérobie sous-maximale (ex : 5 minutes de vélo)</li>
<li>Étirements dynamiques avec grande amplitude articulaire</li>
<li>Réactivation : activité dynamique spécifique au sport pratiqué, à intensité modérée.</li>

	</ol>
	
	<h3>Retour au calme</h3>
	<p>Tout entrainement se termine généralement avec 5 à 10 minutes de retour au calme. Pourquoi? :</p>
	<ul>
<li>Pour diminuer progressivement la température du corps et la fréquence cardiaque.</li>
<li>Pour prendre le temps de ressentir les bienfaits de l’entrainement. </li>
<li>Si le retour au calme comporte des étirements statiques, ceux-ci permettront de maintenir une bonne flexibilité à long terme.<li>
</ul>

<p>Dans le cas des personnes prenant une médication régulant leurs fonctions cardiaques, le retour au calme progressif peut éviter les vertiges ou les évanouissements.</p>
		
<h4>Comment revenir au calme?</h4>
<p>On peut le faire en marchant de 2 à 5 minutes. Ensuite, on peut exécuter des étirements statiques des muscles travaillés au cours de l’entrainement. On peut finir en faisant quelques exercices de respiration. Il est aussi pertinent de revenir sur l’entrainement que l’on vient de réaliser afin d’en ressentir les bienfaits.  </p>

		
<script>
var bonneReponse = "b";
</script>
	<?php	
		// le quizz de fin de page
	$question = 'De quels nutriments est-il préférable de limiter la consommation avant l’activité physique?';
	$q1 = 'Glucides';
	$q2 = 'Lipides (matières grasses)	';
	$q3 = 'Protéines';
	//$q4 = '';
	$bonneReponse = 'b' ;
	$explication = 'Il est préférable d’éviter de consommer des lipides avant l’effort puisqu’ils nécessitent une digestion plus longue et cela nuit à l’activité.';
	
	//include("../inc/quiz.php");
	
		?>
	<style>
	#ref {font-size:0.8em;}
	</style>

<div id="ref">
Articles:<br>
Communicate the value of warm-up, cool-down and stretching<br>
Schnitzer, C. Trela, P. ( 2012). Communicate the value of warm-up, cool-down and stretching. International council on active aging<br>
Livre traitant des méthodes d’entraînement cardiovasculaire : Thibault, G. (2009). Entraînement cardio- Sports d’endurance et performance. Québec : Vélo Québec Éditions.<br>
Notes de cours : KIN 220 Initiation à la prescription en conditionnement physique adapté; Pierre Gauthier; inédit; 2011.<br>

Notes de cours : KIN 214 Méthodologie de l’entrainement physique II; Éric Roy; inédit; 2011.
</div>



	
		
		
		</div>
		
		</div>
		
	

		
		
		
		
		
	</div>
<script type="text/javascript">
 $('[data-role=page]').on('pageshow', function (event, ui) {
  try {
    _gaq.push( ['_trackPageview', event.target.id] );
    console.log(event.target.id);
  } catch(err) {
  }
});
</script>

	<?php include("footer.php"); ?> 
	</div><!-- /page1 -->

	</body>
</html>


