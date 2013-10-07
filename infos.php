<?php include("inc/header.php"); ?> 
<body> <?php include("inc/ieWarning.php"); ?>  
<div data-role="page" id="PageCapsule">

	<div data-role="header" data-position="fixed"  data-id="foo2">
		<h1>KinApp - L'application de la kinésiologie</h1>
	</div><!-- /header -->

 <div data-role="content">
	 <ul data-theme="e" data-role="listview" data-filter="true" data-filter-placeholder="Rechercher une capsule" >
<li><a href="capsule/1.php" data-transition="pop" ><p>Principes et méthodes d’entrainement musculaire</p></a></li>
<li><a href="capsule/2.php"  data-transition="pop" ><p>Principes et méthodes d’entrainement cardiovasculaire</p></a></li>
<li><a href="capsule/3.php"  data-transition="pop" ><p>Mythes et réalités sur l’activité physique</p></a></li>
<li><a href="capsule/4.php"  data-transition="pop" ><p>Prévention des blessures</p></a></li>
<li><a href="capsule/5.php"  data-transition="pop" ><p>Nutrition sportive : quoi manger avant, pendant et après l’effort</p></a></li>
<li><a href="capsule/6.php"  data-transition="pop" ><p>Importance des échauffements et du retour au calme</p></a></li>
<li><a href="capsule/7.php"  data-transition="pop" ><p>Les étirements</p></a></li>
<li><a href="capsule/8.php"  data-transition="pop" ><p>Qu’est-ce que la kinésiologie?</p></a></li>
<li><a href="capsule/9.php"  data-transition="pop" ><p>Contrôle du poids</p></a></li>
<li><a href="capsule/10.php"  data-transition="pop" ><p>Prise de masse musculaire</p></a></li>
<li><a href="capsule/11.php"  data-transition="pop" ><p>Suppléments alimentaires</p></a></li>
<li><a href="capsule/12.php"  data-transition="pop" ><p>Hydratation</p></a></li>
<li><a href="capsule/13.php"  data-transition="pop" ><p>Bénéfices de l’activité physique</p></a></li>
     </ul>
	
		
	</div><!-- /content 2-->
	
	
	<div data-role="footer" data-id= "foo1" data-theme="c" data-position="fixed"  class="nav-glyphish-example">
		<div data-role="navbar" class="nav-glyphish-example " data-grid="d">
		
		<ul>
			<li><a class="nav30" data-prefetch href="nouveau.php" id="home" data-icon="custom">Accueil</a></li>
			<li><a class="nav30 " data-prefetch href="liste.php" id="liste" data-icon="custom">Exercices</a></li>
			<li><a class="nav30 ui-btn-active ui-state-persist" data-prefetch href="#" id="info" data-icon="custom">Capsules</a></li>
			<li><a class="nav10" data-prefetch href="credit.php" id="credit" data-icon="custom">Crédit</a></li>
			<li><a class="nav10" data-rel="popup"  data-transition="pop" data-prefetch href="#popupMenu3" id="menu" data-icon="custom">Contact</a></li>
		</ul>
		</div>
		<div data-role="popup" id="popupMenu3" data-theme="d">
		<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-left">Close</a>
        <ul data-role="listview" data-inset="true" style="min-width:210px;" data-theme="a">
		         <li data-role="divider" data-theme="c">Contact</li>
               <li><a target="_blank" href="http://www.facebook.com/kinappsherbrooke">Page Facebook</a></li>
            <li><a target="_blank" href="http://twitter.com/kinapp2">Page Twitter</a></li>
            <li><a href="#contact3" data-rel="popup" data-position-to="window"  data-transition="pop" >Nous contacter</a></li>
        </ul>
		<div data-role="popup" id="contact3" data-overlay-theme="a" data-theme="c" class="ui-corner-all">
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

<script>

</script>

</div><!-- /page1 -->

</body>
</html>