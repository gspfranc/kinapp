<?php include("inc/header.php"); ?>  
<body> 
<?php include("inc/ieWarning.php"); ?>  

<div data-role="page" id="Pageliste" data-theme="c">

	<div data-role="header" data-position="fixed"  data-id="foo2">
				<h1>KinApp - L'application de la kinésiologie</h1>

	</div><!-- /header -->

	<div data-role="content">	
	 <ul data-theme="e" data-role="listview" data-filter="true" data-filter-placeholder="Rechercher un exercice" >
            <li class="divider" data-theme ="c" data-role="list-divider">Membre inférieur</li>
			<li><a href="content/1/" data-transition="pop" ><p>Squat arrière</p></a></li>
<li><a href="content/2/" data-transition="pop" ><p>Squat avant</p></a></li>
<li><a href="content/3/" data-transition="pop" ><p>Soulevé de terre</p></a></li>
<li><a href="content/4/" data-transition="pop" ><p>Soulevé de terre jambes tendues</p></a></li>
<li><a href="content/5/" data-transition="pop" ><p>Pont fessier</p></a></li>
<li><a href="content/6/" data-transition="pop" ><p>Montée de banc</p></a></li>
<li><a href="content/7/" data-transition="pop" ><p>Marche latérale avec élastique</p></a></li>
<!--li><a href="content/8/" data-transition="pop" ><p>Fentes avant</p></a></li-->
<li><a href="content/9/" data-transition="pop" ><p>Fentes arrières</p></a></li>
<li><a href="content/10/" data-transition="pop" ><p>Flexion des jambes sur ballon</p></a></li>
<li><a href="content/11/" data-transition="pop" ><p>Flexion des genoux en suspension</p></a></li>
<li><a href="content/12/" data-transition="pop" ><p>Flexion de la hanche en position pompe avec pieds sur ballon</p></a></li>
<li><a href="content/14/" data-transition="pop" ><p>Flexion plantaire à la cheville </p></a></li>
<li class="divider" data-theme ="c" data-role="list-divider">Tronc</li>
<li><a href="content/15/" data-transition="pop" ><p>Extension du tronc</p></a></li>
<li><a href="content/16/" data-transition="pop" ><p>Redressement assis sur ballon</p></a></li>
<li><a href="content/17/" data-transition="pop" ><p>Rotation du tronc bras tendus avec élastique</p></a></li>
<li><a href="content/18/" data-transition="pop" ><p>Antirotation du tronc avec élastique</p></a></li>
<li class="divider" data-theme ="c" data-role="list-divider">Membre supérieur</li>
<li><a href="content/19/" data-transition="pop" ><p>Développé couché</p></a></li>
<li><a href="content/20/" data-transition="pop" ><p>Écartés/flyes</p></a></li>
<li><a href="content/21/" data-transition="pop" ><p>Pompes prise rapprochée</p></a></li>
<li><a href="content/22/" data-transition="pop" ><p>Pompe</p></a></li>
<li><a href="content/23/" data-transition="pop" ><p>Développé assis avec haltères courts</p></a></li>
<li><a href="content/24/" data-transition="pop" ><p>Tirade horizontale à la barre en supination</p></a></li>
<li><a href="content/25/" data-transition="pop" ><p>Tirade horizontale prise large en pronation</p></a></li>
<li><a href="content/26/" data-transition="pop" ><p>Tirade à la poulie prise neutre</p></a></li>
<li><a href="content/27/" data-transition="pop" ><p>Tirade verticale à la poitrine</p></a></li>
<li><a href="content/28/" data-transition="pop" ><p>Traction à la barre en pronation</p></a></li>
<li><a href="content/29/" data-transition="pop" ><p>Traction à la barre en supination</p></a></li>
<li><a href="content/30/" data-transition="pop" ><p>Flexion des avant-bras</p></a></li>
<li><a href="content/31/" data-transition="pop" ><p>Répulsion aux barres parallèles</p></a></li>
<li><a href="content/32/" data-transition="pop" ><p>Extension des avant-bras à la poulie</p></a></li>
<li><a href="content/33/" data-transition="pop" ><p>Extension des avant-bras sur banc</p></a></li>
					

     </ul>

		
	</div><!-- /content 3-->	
	
	<div data-role="footer" data-id= "foo1" data-theme="c" data-position="fixed"  class="nav-glyphish-example">
		<div data-role="navbar" class="nav-glyphish-example " data-grid="d">
		<ul>
			<li><a class="nav30" data-prefetch href="nouveau.php" id="home" data-icon="custom">Accueil</a></li>
			<li><a class="nav30 ui-btn-active ui-state-persist" data-prefetch href="#" id="liste" data-icon="custom">Exercices</a></li>
			<li><a class="nav30" data-prefetch href="infos.php" id="info" data-icon="custom">Capsules</a></li>
			<li><a class="nav10" data-prefetch href="credit.php" id="credit" data-icon="custom">Crédit</a></li>
			<li><a class="nav10" data-rel="popup" data-transition="pop" data-prefetch href="#popupMenu2" id="menu" data-icon="custom">Contact</a></li>
		</ul>
		
		</div>
				<div data-role="popup" data-corners ="true" id="popupMenu2" data-theme="d">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-left">Close</a>
        <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="a">
            <li data-role="divider" data-theme="c">Contact</li>
            <li><a target="_blank" href="http://www.facebook.com/kinappsherbrooke">Page Facebook</a></li>
            <li><a target="_blank" href="http://twitter.com/kinapp2">Page Twitter</a></li>
            <li><a href="#contact4" data-rel="popup" data-position-to="window"  data-transition="pop" >Nous contacter</a></li>
        </ul>
		<div data-role="popup" id="contact4" data-overlay-theme="a" data-theme="c" class="ui-corner-all">
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
</div>



</body>
</html>