
<?php include("../header.php"); ?> 
<h1><?php echo $titre; ?> </h1>
</div><!-- /header -->
<a href="http://kinapp.ca/liste.php"  rel-data="back" data-transition="pop"  data-role="button"  data-theme="c" data-inline="true" data-icon="back" >Retour</a>
<div data-role="content">
<style>
#gauche {width:68%;}
#droite {margin-top:5px;width:32%;}
</style>
	<div class="ui-grid-a responsive">
			<div id="gauche"class="ui-block-a">
				<div class="videoWrapper">		 
					<?php echo '<video width="auto" height="auto" poster ="http://kinapp.ca/content/'.$ID.'/poster.png" id="mon_video" class="video-js vjs-default-skin" controls  preload="auto"  data-setup="{}">' ?>
						 <source src="video.m4v" type="video/x-m4v" />	
						<source src="video.mp4" type="video/mp4" />
						<source src="video.ogv" type="video/ogg" />
						<source src="video.webm" type="video/webm" />
						Impossible d'afficher le vidéo, veuillez changer de navigateur
					</video>
				</div>
			</div>
		<div id="droite" style="background-color:white;"class="ui-block-b">
			<a href="#popImage" data-rel="popup" data-position-to="window" data-transition="fade">
						<?php  echo '<img style = " width: 100%; height:auto;"src="http://kinapp.ca/content/images/'.$ID.'.png">';?>
						</a>
		</div>
</div>
<div data-role="popup" id="popImage" data-overlay-theme="a" data-theme="d" data-corners="false">
    <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
	<?php  echo '<img style = "max-height:600px;" src="http://kinapp.ca/content/images/'.$ID.'.png">';?>
</div>

<div data-role="collapsible-set" data-theme="c" data-content-theme="d">
    <div data-role="collapsible">
        <h3>Points Critères</h3>
		<ul>
<?php	foreach ($texte as &$value) {
		echo '<li>'.$value.'</li>';	}			
		?>
		</ul>

    </div>





	</div>		
</div><!-- /content-->

<?php include("../footer.php"); ?> 
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




