<!-- Todo : Implement Widget 1 Here -->
<section class="col-md-12 well widget" id="ofthedaywidget">
	<div class="widget-header">
		<h3>glyph of the day</h3>
	</div>

	<?php foreach ($glyphofthedaydata as $key) { ?>

		<div class="leftcontent col-md-2">
			<h1 class="completealphabet"><?php echo $key->completealphabet; ?></h1>
		</div>
		<div class="rightcontent col-md-10">
			<div class="widgetgroup ">
				<h3 class="separated"><?php echo str_replace(' ', '+', $key->seperated); ?></h3>
			</div>
			<div class="widgetgroup imagearea">
				<span class="label">forms:</span>
				<img src="http://placehold.it/75X75" alt="Glyph" />
				<img src="http://placehold.it/75X75" alt="Glyph" />
				<img src="http://placehold.it/75X75" alt="Glyph" />
				<img src="http://placehold.it/75X75" alt="Glyph" />
			</div>
		</div>

	<?php } ?>	
</section>