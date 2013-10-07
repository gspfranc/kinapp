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


	<div id="capsule12" data-role="page" data-theme="c" >

	<div data-role="header" data-position="fixed"  >
	<h1>Capsule</h1>
	</div><!-- /header -->
	
	
		<div data-role="content">		<a href="http://kinapp.ca/infos.php"  rel-data="back" data-transition="pop"  data-role="button"  data-theme="c" data-inline="true" data-icon="back" >Retour</a>
		<div class="responsive">
		<div class="ui-grid-solo block-1 ">
	<h1>Hydratation</h1>
	<p>Au cours d’une activité physique, la transpiration permet au corps de maintenir sa température en évitant qu’elle ne s’élève. Pour éviter de subir les désagréments que la perte de liquide par la transpiration peut engendrer, il est nécessaire de bien s’hydrater. Autrement, on pourrait ressentir de la fatigue, voir son niveau de performance diminué ou encore subir un coup de chaleur.</p>


	
		<h3>Quoi boire?</h3>
		<p>Pour un effort d’une durée inférieure à une heure, l’eau suffit à combler les besoins d’hydratation, sauf si l’effort est très intense ou qu’il fait très chaud. Dans ce dernier cas, un ajout en électrolytes (sels minéraux) sera de mise. Pour un effort plus long, un apport en énergie par des glucides devient nécessaire. Une boisson qui contient des glucides s’avère donc un bon choix, à condition que sa teneur soit d’au plus 8 grammes de glucides par 100 ml si elle est consommée avant ou pendant l’effort. Si la boisson est plus sucrée, elle risque de causer des malaises digestifs pendant l’effort. Les boissons sportives respectent généralement ce principe.</p>
		
		<h3>Que contiennent les boissons sportives?</h3>
		<p>Tous les sportifs peuvent profiter des avantages d’une boisson sportive, mais le choix s’avère particulièrement intéressant pour les athlètes pratiquant des sports d’endurance. Pour améliorer la performance, les boissons sportives doivent rencontrer certains critères. Elles doivent fournir de l’énergie sous forme de glucides, être absorbées rapidement, assurer une bonne hydratation et fournir les sels minéraux éliminés par la transpiration. Donc, les boissons sportives contiennent des glucides et des sels minéraux, comme le sodium et le potassium.</p>
		
	<h3>Comment savoir si notre niveau d’hydratation est suffisant?</h3>
		<p>Les meilleurs indicateurs du niveau d’hydratation sont la couleur et le volume de l’urine. Une bonne hydratation se traduit par une urine claire et abondante. Ces indicateurs peuvent toutefois être faussés si l’on consomme certains suppléments ou certains médicaments qui peuvent altérer la couleur de l’urine.</p>
		<p>De façon plus précise, la recommandation générale est de consommer 1 ml d’eau pour chaque calorie dépensée lors de l’effort. Ceci représente de 300 à 500 ml d’eau par heure d’entrainement si l’intensité est de moyenne à élevée. De cette manière, nous nous assurons d’être bien hydratés. </p>
	<h3>Qu’en est-il des boissons énergisantes?</h3>
			<p>Contrairement aux boissons sportives, les boissons énergisantes contiennent de la caféine, beaucoup de sucre et d’autres substances stimulantes. En termes d’hydratation, elles ne sont pas un choix adéquat lors de la pratique d’une activité physique.</p>
			
			
<script>
var bonneReponse = "d";
</script>
	<?php	
		// le quizz de fin de page
	$question = 'Quel ingrédient sont utiles à inclure à son plan d’hydratation si l’activité physique pratiquée dure plus d’une heure?';
	$q1 = 'Des glucides';
	$q2 = 'De la caféine';
	$q3 = 'Des sels minéraux';
	$q4 = 'Des glucides et des sels et minéraux';
	$bonneReponse = 'd' ;
	$explication = 'Des glucides pour fournir de l’énergie et des sels minéraux pour remplacer ceux perdus par la sueur.';
	
	//include("../inc/quiz.php");
	
		?>
	<style>
	#ref {font-size:0.8em;}
	</style>

<div id="ref">
Le site internet Extenso est le centre de références sur la nutrition de l’Université de Montréal. Il donne accès un résumé de la nutrition sportive «Bien s’hydrater pour performer» : http://www.extenso.org/article/bien-s-hydrater-pour-performer/ <br>

Autres sources auxquels référent l’article:<br>
American College of Sports Medecine, American Dietetic Association and Dietetician of Canada. Position statement: Nutrition and athletic performance. Med Sci Sports Exerc. 32: 2130-45, 2000.<br>
American College of Sport Medecine. Position stand on exercise and fluid replacement. Med Sci Sports Exerc 28 (1):i, 1996.<br>
Bar-Or O. Hydratation chez les jeunes athlètes. SNAC-PAC 6 (2):1, 1996.<br>
Murray R. Fluid needs in hot and cold environment. Int J Sport Nutr 5 (GSSI suppl):S62, 1995.<br>

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




