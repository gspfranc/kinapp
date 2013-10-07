<?php include("inc/header.php"); ?> 
<script type="text/javascript" src="inc/webapp.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="css/home.css" charset="utf-8">
<body> <?php include("inc/ieWarning.php"); ?>  
<div data-role="page" id="PageNouveau">

	<div data-role="header" data-position="fixed"  data-id="foo2">
		<h1>KinApp - L'application de la kinésiologie</h1>
	</div><!-- /header -->
<style>
#logo {
width:85% !important;
max-width:320px !important;
margin-left:auto;
margin-right:auto;
}

#logo img {
width:100%;
height:auto;


}
</style>
	<div data-role="content">
	<h1 id="logo"><img src="http://kinapp.ca/img/logo.png"></h1>

	
<div class="responsive">
	<div class="ui-grid-solo block-1" style="font-size: 1.2em; text-align:center">
			<p>Utilisez les boutons au bas pour naviguer dans l'application</p>	
	</div>
</div>	
	
<h2>Nouveautés</h2>	

<div class="responsive">
	<div class="ui-grid-solo block-1">
	<h3>Bienvenue<br>
	<span class="under"> Par: KinApp, le 9 avril 2013 </span>
	</h3>	
			<p>Laissez-vous guider par nos professionnels de la santé, spécialistes de l’activité physique.</p>	
			<p>
	</div>
</div>	
	<style>
	.under {
	font-size:0.8em;
	margin-top:none;
	}
	.ui-bar-b{
	border-color: transparent;
	}
	</style>
<div class="ui-grid-a responsive">
		<div class="ui-block-a block-2 block-first">
		<h3>Quoi de neuf?<br>
		</h3>
		
			<ul  data-role="listview" data-inset="true">
    <li class="divider" data-theme="c" data-role="list-divider">Nouveauté de cette semaine</li>
	 <li><a href="/content/6/index.php">
	 <img style="left:0.5em;border-radius: 9px;" src="http://kinapp.ca/content/6/thumb.png">
        <h2 style="white-space: normal;">Montée de banc</h2>
		<p>4 mai 2013</p>
		      
    </a></li>
	</ul>

</div>

		
			
		<div style="float-right" class="ui-block-b block-2">
		<h3>C'est un départ pour l'équipe KinApp <br>
	<span class="under"> Par: KinApp, le 9 avril 2013 </span></h3>
			<p>Le 9 avril, l’équipe de KinApp procède au lancement de KinApp, l’application web qui offre une nouvelle opportunité de s’entrainer. Elle est disponible gratuitement dès maintenant. Revenez régulièrement pour consulter les nouveautés !</p>	
		</div>
		
			
</div>

<div class="responsive">
		<div class="ui-grid-solo block-1">
		<img src="http://kinapp.ca/img/parasuco.png" style="display:block;margin-left:auto;margin-right:auto;max-width:200px;">
		</div>
</div>


	
	
	
	</div><!-- /content -->
	
<div data-role="footer" data-id= "foo1" data-theme="c" data-position="fixed"  class="nav-glyphish-example">
		<div data-role="navbar" class="nav-glyphish-example " data-grid="d">
		<ul>
			<li><a class="nav30 ui-btn-active ui-state-persist" data-prefetch href="#" id="home" data-icon="custom">Accueil</a></li>
			<li><a class="nav30" data-prefetch href="liste.php" id="liste" data-icon="custom">Exercices</a></li>
			<li><a class="nav30" data-prefetch href="infos.php" id="info" data-icon="custom">Capsules</a></li>
			<li><a class="nav10" data-prefetch href="credit.php" id="credit" data-icon="custom">Crédit</a></li>
			<li><a class="nav10" data-rel="popup" data-transition="pop" data-prefetch href="#popupMenu1" id="menu" data-icon="custom">Contact</a></li>
		</ul>
		</div>
		<div data-role="popup" id="popupMenu1" data-theme="d">
		<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-left">Close</a>
        <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="a">
            <li data-role="divider" data-theme="c">Contact</li>
            <li><a target="_blank" href="http://www.facebook.com/kinappsherbrooke">Page Facebook</a></li>
            <li><a target="_blank" href="http://twitter.com/kinapp2">Page Twitter</a></li>
            <li><a href="#contact1" data-rel="popup" data-position-to="window"  data-transition="pop" >Nous contacter</a></li>
        </ul>
		
		<div data-role="popup" id="contact1" data-overlay-theme="a" data-theme="c" class="ui-corner-all">
		<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
			<div data-role="header" data-theme="a" class="ui-corner-top">
				<?php include_once "contact.php"; ?>    </div></div>
	
		</div>
		
		<?php include("inc/footer-note.php"); ?>
		
	
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
</div><!-- /page1 -->

</body>
</html>