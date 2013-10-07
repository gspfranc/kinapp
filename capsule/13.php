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


	<div id="capsule13" data-role="page" data-theme="c" >
	
	<div data-role="header" data-position="fixed"  >
	<h1>Capsule</h1>
	</div><!-- /header -->
	
		<div data-role="content">		<a href="http://kinapp.ca/infos.php"  rel-data="back" data-transition="pop"  data-role="button"  data-theme="c" data-inline="true" data-icon="back" >Retour</a>
		<div class="responsive">
		<div class="ui-grid-solo block-1 ">
	<h1>Bénéfices de l’activité physique</h1>
	<p>Bien que la sédentarité ne soit pas une cause directe de problèmes de santé, il est prouvé que les personnes sédentaires courent beaucoup plus de risques de souffrir de problèmes de santé de toutes sortes. De nombreuses études montrent clairement que le manque d’activité physique est un important facteur de risque de plusieurs de ces problèmes :</p>



	
	<h3>Exercice et santé mentale</h3>
	
		<p>Les effets de l’activité physique sur la santé psychologique sont plus difficiles à évaluer que ses effets sur la santé physique, mais on ne doit pas les ignorer. L’exercice a un effet apaisant en agissant au niveau des systèmes nerveux et hormonaux. Les endorphines libérées lors de l’effort ont une action euphorisante et la synthèse de la sérotonine et de la dopamine favorisent l’équilibre de l’humeur.</p>
		
		<h3>Exercice et santé cardiovasculaire</h3>
		<p>Les personnes qui pratiquent des activités physiques aérobies réduisent les risques d’hypertension artérielle, d’infarctus du myocarde, d’angine de poitrine, de claudication intermittente et d’accidents cérébraux vasculaires. Le taux de mauvais cholestérol est diminué et celui de bon cholestérol est augmenté par l’exercice. L’activité physique permet aussi de retarder le moment où une médication sera nécessaire pour contrôler des problèmes cardiovasculaires d’un individu.</p>
		
		<h3>Exercice et diabète de type II</h3>
		<p>L’activité physique augmente efficacement la sensibilité à l’insuline et contribue au maintien d’un poids santé, ce qui en fait un allié incontestable dans la prévention et le traitement du diabète de type II.</p>
		
	<h3>Exercice et certains cancers</h3>
		<p>Le cancer peut résulter de multiples causes dont la génétique, le tabagisme, l’obésité, la sédentarité et l’alimentation. La pratique de l’activité physique ne peut pas empêcher l’apparition d’un cancer, mais elle peut réduire significativement les risques d’être atteint de certaines de ses formes, comme le cancer du côlon, du sein et de la prostate.</p>
	
	
	<h3>Exercice et ostéoporose</h3>
			<p>L’ostéoporose est caractérisée par une diminution de la masse osseuse, ce qui rend les individus plus vulnérables aux fractures osseuses. L’activité physique stimule le processus de construction et de solidification des os. Les exercices ayant un impact sur la densité osseuse sont ceux impliquant un impact ou une tension sur les structures osseuses, par exemple, la course à pied, le tennis et la musculation. De plus, l’exercice améliore la force musculaire et la proprioception, ce qui permet de limiter les risques de chutes et par le fait même de fractures.</p>
			
			
<script>
var bonneReponse = "b";
</script>
	<?php	
		// le quizz de fin de page
	$question = 'La pratique de l’activité physique permet de guérir le cancer?';
	$q1 = 'Vrai';
	$q2 = 'Faux';
	//$q3 = 'Des sels minéraux';
	//$q4 = 'Des glucides et des sels et minéraux';
	$bonneReponse = 'b' ;
	$explication = 'Faux, mais la pratique de l’activité physique contribue à réduire le risque de développer certaines formes de cancer.';
	
	//include("../inc/quiz.php");
	
		?>
	<style>
	#ref {font-size:0.8em;}
	</style>

<div id="ref">
Livre : Thibault, G. Roy, A. (2009). Les bienfaits de l’activité physique. France : Chiron éditeur<br> 
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




