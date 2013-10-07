	
	<script>

	</script>
	
	<div class="responsive">
		<div class="ui-grid-solo">
			<h2>Quiz</h2>
			<p><strong><?php echo $question; ?></strong></p>
			<form
			<fieldset data-role="controlgroup">
			<input onclick="checkq1('<?php echo $bonneReponse; ?>');" type="radio" name="q" id="qa" value="a" />
			<label for="qa"><?php echo $q1; ?></label>
			<input onclick="checkq1('<?php echo $bonneReponse; ?>');" type="radio" name="q" id="qb" value="b" />
			<label for="qb"><?php echo $q2; ?></label>
			<?php if( isset($q3) ){  ?>
			<input onclick="checkq1('<?php echo $bonneReponse; ?>');" type="radio" name="q" id="qc" value="c" />
			<label for="qc"><?php echo $q3; ?></label>
			<?php }  ?>
			<?php if(isset($q4)){  ?>
			<input onclick="checkq1('<?php echo $bonneReponse; ?>');" type="radio" name="q" id="qd" value="d"/>
			<label for="qd"><?php echo $q4; ?></label>
			<?php }  ?>
			</fieldset>
			</form>
						
			

			<a id="check" data-transition="pop" data-rel="popup" data-position-to="window" href="#incorrect" data-role="button" data-icon="check"  data-theme="b" data-inline="true" onclick="checkq1('<?php echo $bonneReponse; ?>');">Confirmer la réponse</a>
		</div>
		
		
		
		
<!-- Bonne réponse -->
<div data-role="popup" id="correct" data-theme="e">
	<div data-role="content">  
		<h1>Bravo ! C'est la bonne réponse</h1>
		<p><?php echo $explication; ?></p>
		<a data-theme="b" href="#content" data-role="button" data-inline="true" data-icon="arrow-r">Fermer</a>
	</div><!-- /content -->
</div><!-- /page -->

<!-- mauvaise réponse -->
<div data-role="popup" id="incorrect" data-theme="d">
	<div data-role="content">  
		<h1>Réponse Incorrecte</h1>
		<p>Vous y êtes presque.</p>
		<a data-theme="b" href="#content" data-role="button" data-inline="true" data-icon="arrow-r">Réessayer</a>
	</div><!-- /content -->
	</div><!-- /page -->