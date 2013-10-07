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


	<div id="capsule2" data-role="page" data-theme="c" >

	<div data-role="header" data-position="fixed"  >
	<h1>Capsule</h1>
	</div><!-- /header -->
	
	
		<div data-role="content">		<a href="http://kinapp.ca/infos.php"  rel-data="back" data-transition="pop"  data-role="button"  data-theme="c" data-inline="true" data-icon="back" >Retour</a>
		<div class="responsive">
		<div class="ui-grid-solo block-1 ">
		<h1>Principes et méthodes d’entrainement cardiovasculaire</h1>
				
		<p>L’entrainement cardiovasculaire sera ajusté, en premier lieu, en fonction des objectifs poursuivis (exigences sportives, perte de poids, etc.) et des caractéristiques individuelles (forces et faiblesses, aptitudes naturelles, capacités de récupération, etc.).</p>
		
		<h3>Un peu de vocabulaire</h3>
		
		<p><strong>VO2max :</strong> Capacité maximale de consommation d’oxygène, très bon indice de la capacité d’effort aérobie d’un individu.</p>
		<p><strong>Effort aérobie :</strong> L’énergie nécessaire à l’effort est puisée en utilisant des processus physiologiques consommant de l’oxygène (intensité moins élevée pouvant être maintenu plus longtemps).</p>
		<p><strong>Effort anaérobie :</strong> L’énergie nécessaire au travail est puisée en utilisant des processus physiologiques ne consommant pas d’oxygène (intensité plus élevée ne pouvant être maintenue très longtemps).</p>

		
		<h3>Quelques principes de base </h3>
		
		<p><strong>Variabilité : </strong> Afin d’améliorer sa condition cardiovasculaire, l’entrainement devra être varié afin de stimuler diverses adaptations et de s’habituer mentalement et physiquement à diverses situations exigeant un effort physique. Ainsi, on variera les niveaux d’intensité de l’effort, les temps de repos et les volumes totaux d’entrainement par séance ou par semaine. </p>

		<p><strong>Intensité : </strong>Plus le temps passé à une intensité élevée est grand (grande vitesse de course ou grande résistance sur un vélo, par exemple), plus il y aura une grande amélioration du VO2max. L’entrainement par intervalles permet de maximiser le temps d’effort à haute intensité en accordant des temps de récupération actifs ou passifs entre de courtes portions d’efforts intenses.</p>

		<p><strong>Temps de repos : </strong>Plus un entrainement est intense, plus il est important d’arriver à cette séance d’entrainement dans un état reposé. Lors d’un entrainement à haute intensité, si l’objectif poursuivi est d’améliorer la capacité ou la puissance anaérobie (vitesse de sprint, par exemple), il est aussi important de s’accorder un temps de repos relativement long entre chaque répétition à haute intensité. Ainsi, chaque portion d’effort est effectuée au maximum des capacités de l’individu.</p>

		<p><strong>Volume et fréquence : </strong>Un volume ou une fréquence d’entrainement élevé (très longue sortie ou plusieurs jours d’entrainement sans repos) comporte de plus grands risques de fatigue et de surentrainement. Il est important de ne pas abuser de ce type d’entrainement.</p>

<script>
var bonneReponse = "b";
</script>

	<?php	
		// le quizz de fin de page
	$question = 'Quel paramètre, parmi les suivants, permettra une plus grande amélioration du VO2max?';
	$q1 = 'Volume d’entrainement élevé (temps de la séance) ';
	$q2 = 'Intensité élevée (vitesse, résistance, pente) ';
	$q3 = 'Fréquence d’entrainement élevé (nb d’entrainement par semaine) ';
	$q4 = 'Aucune de ces réponses';
	$bonneReponse = 'b' ;
	$explication = 'C’est pourquoi l’entrainement par intervalles est si populaire, il permet d’exécuter une plus grande portion de l’entrainement à intensité élevée.';
	
	//include("../inc/quiz.php");
	
		?>
	<style>
	#ref {font-size:0.8em;}
	</style>

<div id="ref">
Livre traitant des méthodes d’entraînement cardiovasculaire : Thibault, G. (2009). Entraînement cardio- Sports d’endurance et performance. Québec : Vélo Québec Éditions.<br>

Notes de cours : KIN 220 Initiation à la prescription en conditionnement physique adapté; Pierre Gauthier; inédit; 2011.<br>

Notes de cours : KIN 214 Méthodologie de l’entrainement physique II; Éric Roy; inédit; 2011.<br>

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




