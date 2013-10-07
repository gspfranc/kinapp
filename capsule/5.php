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


	<div id="capsule5" data-role="page" data-theme="c" >

	<div data-role="header" data-position="fixed"  >
	<h1>Capsule</h1>
	</div><!-- /header -->
	
	
		<div data-role="content">		<a href="http://kinapp.ca/infos.php"  rel-data="back" data-transition="pop"  data-role="button"  data-theme="c" data-inline="true" data-icon="back" >Retour</a>
		<div class="responsive">
		<div class="ui-grid-solo block-1 ">
	<h1> Nutrition sportive : quoi manger avant, pendant et après l’effort</h1>
	<h3>Avant l’effort :</h3>
	
		<p><strong>Objectif :</strong> Maximiser les réserves de glycogène, maximiser l’hydratation et éviter le plus possible la digestion pendant l’effort. Ces objectifs s’appliquent principalement aux exercices d’endurance aérobie.</p>
		
		<p><strong>Quoi manger: </strong>Des glucides (fruits et légumes, produits céréaliers). Moins il reste de temps avant l’effort, plus on réduira la quantité et plus on choisira des glucides faciles à digérer. Quelques heures avant l’effort on peut consommer des protéines de façon modérée. Les gras sont à éviter, car ils sont beaucoup plus longs à digérer. Il est également conseillé d’éviter les aliments riches en fibres, gazogènes ou épicés afin d’éviter les problèmes de digestion, particulièrement pendant les compétitions ou les épreuves.<br>
La surcharge en glycogène, qui consiste à maximiser ses réserves en glycogène musculaire avant une compétition, peut s’avérer intéressante pour les compétitions d’endurance de plus de 90 minutes. Il s’agit de consommer une plus grande proportion d’aliments riches en glucides (pâtes, pommes de terre, fruits et légumes, jus de fruit, etc.) dans les trois jours précédant la compétition, sans augmenter l’apport calorique total.
</p>

<h4>Exemples de collation à consommer avant un entrainement</h4>

<p>3 heures avant l’effort (on peut considérer un repas léger)</p>
<ul><li>céréales avec du lait et une banane</li><li>Soupe aux légumes avec des craquelins et un peu de thon ou quelques morceaux de fromage.</li></ul>

<p>2 heures avant l’effort</p>
<ul><li>Céréales avec du lait </li><li>Un yogourt et un fruit </li><li>Soupe aux légumes avec des craquelins</li></ul>


<p>1 heure avant l’effort</p>
<ul><li>Un fruit</li><li>Muffin maison (faible en gras)</li><li>Soupe aux légumes</li></ul>


<h3>Pendant l’effort</h3>

<p><strong>Objectif :</strong> Remplacer les pertes en eau et en sels minéraux (électrolytes) et fournir l’énergie nécessaire pour poursuivre l’effort.</p>
		
		<p><strong>Quoi manger, comment: </strong>Si l’activité dure moins d’une heure, boire simplement de l’eau peut être suffisant. Par temps chaud et/ou lors de sudation abondante, il sera important de refaire ses réserves en sels minéraux (électrolytes), parfois même pour une activité de moins d’une heure. Lors d’un effort important de plus d’une heure, il sera conseillé de consommer des glucides pour fournir de l’énergie. Les glucides liquides permettent une absorption plus facile en même temps qu’une réhydratation. </p>

		<p>Exemples:</p>
		<ul><li>Boisson sportive</li><li>Jus de fruit dilué avec de l’eau et une pincée de sel</li><li>Barre tendre sans noix</li><li>Fruits séchés (en s’assurant d’une hydratation adéquate)</li></ul>
		
		
	<h3>Après l’effort</h3>

<p><strong>Objectif :</strong> Réhydrater, réparer les muscles et restaurer les réserves de glycogène et d’électrolytes.</p>
		
		<p><strong>Quoi manger: </strong>Des glucides et des protéines. Il est important de prendre une collation contenant ces deux nutriments à l’intérieur des 30 minutes suivant l’entrainement, particulièrement si un entrainement intense est prévu le lendemain ou dans la même journée. </p>

		<p>Exemples:</p>
		<ul><li>Lait au chocolat</li><li>Sandwich au poulet</li><li>Sandwich au beurre d’arachide et banane</li><li>Barre tendre aux noix. </li></ul>	
		
<script>
var bonneReponse = "b";
</script>
	<?php	
		// le quizz de fin de page
	$question = 'De quels nutriments est-il préférable de limiter la consommation avant l’activité physique?';
	$q1 = 'Glucides';
	$q2 = 'Lipides (matières grasses)';
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
Livre : Ledoux, M. Lacombe, N. St-Martin, G. (2006). Nutrition sport et performance. Québec, Québec: Géopleinair<br>
Article scientifique : Chocolate milk as a post-exercise recovery aid<br>
Karp, J. R. Johnston, J.D. Tecklenburg, S. Mickleborough, T.D. Fly, A.D. Stager, J.M. (2006). Chocolate milk as a port-exercise recovery aid. International journal of sport nutrition and exercise metabolism, 16, p. 78-91<br>
Notes de cours: KIN217: Nutrition en activité physique, Pascale Morin et Martin Fréchette, inédit, 2012.
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




