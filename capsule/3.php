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


	<div id="capsule3" data-role="page" data-theme="c" >

	<div data-role="header" data-position="fixed"  >
	<h1>Capsule</h1>
	</div><!-- /header -->
	
	
		<div data-role="content">		<a href="http://kinapp.ca/infos.php"  rel-data="back" data-transition="pop"  data-role="button"  data-theme="c" data-inline="true" data-icon="back" >Retour</a>
		<div class="responsive">
		<div class="ui-grid-solo block-1 ">
		<h1>Mythes et réalités sur l’activité physique</h1>
				
		<h3>1.	Faire des redressements assis pour perdre de la graisse abdominale, ou la perte de poids localisée.</h3>
		
		<p>En fait, il n’y a pas de communication directe entre le muscle travaillé et la graisse sous-cutanée à proximité. La gestion du stockage de l’énergie (donc des graisses) passe tout d’abord par la circulation sanguine. C’est le cerveau qui décide où l’on perdra de la graisse et la meilleure façon d’y arriver est de faire des exercices combinant un travail aérobie (marche rapide, natation, vélo, etc.) et des exercices musculaires généraux. </p>
		
				<h3>2.	Les gens qui s’entrainent devraient consommer des suppléments de protéines.</h3>
		
		<p>En réalité, la majorité des Nord-Américains consomment déjà amplement de protéines dans leur alimentation régulière. À moins de faire un entrainement intensif en musculation, il est fort probable que le supplément de protéines soit de trop. Dans ce cas, les protéines consommées en trop sont généralement stockées sous forme de graisse ou éliminées dans l’urine. En conclusion, il est important de vérifier si notre besoin en protéines est déjà comblé avant de dépenser de l’argent dans des suppléments.</p>
		
				<h3>3.	Les étirements en début de séances préviennent les risques de blessures.</h3>
		
		<p>Afin de prévenir les blessures, il faudra choisir le bon type d’étirements avant une séance d’entrainement. Les étirements dynamiques, c’est-à-dire des <u>mouvements</u> mettant l’accent sur une grande amplitude articulaire, seront adéquats. Par contre, des étirements statiques effectués juste avant un effort musculaire augmenteront le risque de blessures. On entend par étirements statiques tenir une position d’étirement sans mouvement pendant un temps donné. Les étirements statiques sont conseillés après l’entrainement afin de prévenir la perte de flexibilité à long terme due à l’entrainement et au vieillissement.</p>
		
				<h3>4.	Le développement musculaire chez les femmes. </h3>
		
		<p>Le développement de la musculature nécessite une hormone, la testostérone, que les femmes ne produisent qu’en très petite quantité. Le développement de leur masse musculaire suite à un entrainement en musculation sera bien inférieur à celui des hommes. Les femmes ne devraient donc pas se priver de faire de la musculation de peur de gagner beaucoup de masse musculaire. D’autant plus que la musculation apporte d’autres bienfaits comme la préservation de la masse musculaire dans un processus de perte de poids, ou encore, la diminution de la perte osseuse en vieillissant, donc la prévention de l’ostéoporose.</p>
		
<script>
var bonneReponse = "b";
</script>		

	<?php	
		// le quizz de fin de page
	$question = 'Quels types d’étirements sont à privilégier en début de séance?';
	$q1 = 'Étirements statiques ';
	$q2 = 'Étirements dynamiques ';
	//$q3 = '';
	//$q4 = '';
	$bonneReponse = 'b' ;
	$explication = 'Les étirements dynamiques';
	
	//include("../inc/quiz.php");
	
		?>
	<style>
	#ref {font-size:0.8em;}
	</style>

<div id="ref">
Site internet de Kino-Québec: http://www.kino-quebec.qc.ca/maigrir.asp 
«Quel rôle peut jouer l'activité physique dans le contrôle du poids? Le point sur les mythes et la réalité.»<br>
 
Comité scientifique de Kino-Québec (2005) Activité physique et contrôle de la masse corporelle (Avis), ministère de l'Éducation, du Loisir et du Sport. <br>

Grediagin A et al. (1995) Exercise intensity does not effect body composition change in untrained, moderately overfat women J Am Diet Assoc 95:661-5. <br>

Tremblay A, JA Simoneau et C Bouchard (1994) Impact of exercise intensity on body fatness and skeletal muscle metabolism Metabolism 43:814-8.<br>

Les 7 sujets traités permettent de donner des idées pour les mythes qui seront choisis pour être démystifié dans l’application. Les explications ont été écrites par un kinésiologue, mais les ressources informationnelles ne sont malheureusement pas affichées :
http://www.passeportsante.net/fr/Actualites/Nouvelles/Fiche.aspx?doc=7-mythes-exercice-physique_20110706<br>

Suppléments de protéines pour grossir les muscles, sujet traité sur le site internet extenso : 
http://www.extenso.org/article/des-supplements-de-proteines-et-d-acides-amines-pour-faire-grossir-vos-muscles/<br>

L’article réfère aux sources suivantes :
American College of Sports Medecine, American Dietetic Association and Dietetician of Canada. Position statement: Nutrition and athletic performance. Med Sci Sports Exerc 2000;32: 2130-45.<br>

Gray-Donald K, Jacobs-Starkley L et Johnson-Down L. Food habits of Canadians: Reduction in fat intake over a generation. Can J Public Health 2000; 91(5): 381-5
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



