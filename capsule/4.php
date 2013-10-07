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


	<div id="capsule4" data-role="page" data-theme="c" >

	<div data-role="header" data-position="fixed"  >
	<h1>Capsule</h1>
	</div><!-- /header -->
	
	
		<div data-role="content">		<a href="http://kinapp.ca/infos.php"  rel-data="back" data-transition="pop"  data-role="button"  data-theme="c" data-inline="true" data-icon="back" >Retour</a>
		<div class="responsive">
		<div class="ui-grid-solo block-1 ">
	<h1>Prévention des blessures</h1>
		<p>Les blessures sportives sont courantes et la plupart seraient évitables en prenant quelques précautions. En voici quelques-unes&nbsp;:</p>
		
		<h3>S’assurer d’une progression d’entrainement lente et logique </h3>
		<p>En effet, un débutant doit s’assurer de commencer la pratique d’un sport avec un volume d’entrainement, une intensité et une fréquence d’entrainement faibles et augmenter chacun de ces paramètres de façon très progressive. Le manque de progression est souvent responsable de douleurs articulaires ou de tendinites (inflammation des tendons).</p>

		<h3>Utiliser des équipements adéquats et sécuritaires : </h3>
		<p>Des chaussures mal adaptées à l’activité pratiquée ou à la biomécanique du pratiquant peuvent amener des blessures telles que des problèmes articulaires, des douleurs lombaires, etc. De plus, le port d’équipements de sécurité (casque, protection des coudes, genoux, etc.) peut éviter ou minimiser les blessures en cas d’impact ou de chute, ce qui diminue les risques de déchirures ligamentaires, de commotions cérébrales et de fractures.</p>

		<h3>Faire un échauffement avant et un retour au calme progressif après l’entrainement </h3>
		<p>L’échauffement permet une préparation à l’exercice et le retour au calme contribue à une diminution progressive de l’intensité. Ces deux stratégies permettent de prévenir les blessures, telles que les élongations musculaires, les entorses ou les déchirures ligamentaires. Pour plus de détails, voir la capsule sur l’importance de l’échauffement et du retour au calme.</p>

		<h3>Accorder un temps de récupération suffisant entre deux entrainements</h3>
		<p>On suggère 48 heures de repos entre deux entrainements sollicitant le même groupe musculaire. Il peut être intéressant d’alterner une journée avec un entrainement cardiovasculaire et le suivant avec un entrainement musculaire. Cette stratégie peut éviter les blessures de surutilisation telles que le syndrome de la bandelette, les périostites tibiales et les tendinites. La fatigue mentale ou le manque de concentration entraine aussi un plus grand risque d’accidents, ceux-ci pouvant causer des entorses, des déchirures ligamentaires, des commotions cérébrales ou des fractures.</p>

		<h3>Entrainer les antagonistes </h3>
		<p>La spécialisation sportive peut amener des déséquilibres musculaires en développant certains muscles plus que d’autres. Le type de déséquilibre musculaire le plus souvent observé est antérieur / postérieur, c’est-à-dire que les muscles devant le corps sont plus développés que ceux derrière. Afin d’éviter certaines blessures telles que des élongations musculaires et des lombalgies, il est important d’entrainer les muscles qui sont moins sollicités dans le sport pratiqué, surtout ceux qui sont opposés aux muscles très développés. Un des déséquilibres musculaires souvent observés est une faiblesse des muscles ischio-jambiers (derrière la cuisse) en comparaison avec les quadriceps (devant la cuisse).</p>	

		<h3>Maintenir un bon niveau de flexibilité </h3>
		<p>Faire des étirements statiques régulièrement après l’entrainement peut éviter certaines blessures telles que les élongations musculaires, les entorses ou déchirures ligamentaires. Pour plus de détails, se référer à la capsule sur les étirements.</p>
				
<script>
var bonneReponse = "d";
</script>
	<?php	
		// le quizz de fin de page
	$question = 'Quels facteur parmi les suivants sont des moyens efficaces de prévenir les blessures?';
	$q1 = 'S’assurer d’un repos suffisant';
	$q2 = 'S’assurer d’un entrainement facile ';
	$q3 = 'S’assurer d’une progression logique et suffisamment lente.';
	$q4 = 'S’assurer d’un repos suffisant ainsi qu’une progression logique et suffisamment lente';
	$bonneReponse = 'd' ;
	$explication = '';
	
	//include("../inc/quiz.php");
	
		?>
	<style>
	#ref {font-size:0.8em;}
	</style>

<div id="ref">
Références :<br>
Les causes des blessures sportives :
http://sante.canoe.ca/condition_info_details.asp?disease_id=204<br>

Une enquête de Statistiques Canada révèle que plus du quart des blessures non-intentionnelles survenaient durant la pratique d’activités récréatives et sportives, voir les figure 2, figure 8, figure 11 :<br>
TREMBLAY, Benoît. Portrait des traumatismes d’origine récréative et sportive au Québec, édition 2007.<br>

Site internet de l’académie canadienne de médecine du sport et de l’exercice
www.casem-acmse.org
On y retrouve entre autre ceci concernant les commotions cérébrales :
http://www.casem-acmse.org/Media/Content/files/Concussion_supplement_f01-handout.pdf<br>

Tous les livres «clinical sports medicine» sont reconnus pour être très adaptés à la traumatologie sportive :
Brukner and khan, clinical sports medicine, 2007<br>

Notes de cours KIN242: Traumatologie sportive, Suzanne Labrecque, inédit. 2011<br>




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



