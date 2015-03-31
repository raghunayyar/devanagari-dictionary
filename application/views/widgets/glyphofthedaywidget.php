<!-- Todo : Implement Widget 1 Here -->
<section class="col-md-12 well widget widget-full widget-top" id="ofthedaywidget">
	<div class="widget-header">
		<h3>conjunct of the day</h3>
	</div>

	<?php foreach ($glyphofthedaydata as $key) { ?>

		<div class="leftcontent col-md-3">
			<div class="completealphabet">
				<h1><?php echo $key->completealphabet; ?></h1>
				<h3 class="separated"><?php echo str_replace(' ', '+', $key->seperated); ?></h3>
			</div>
		</div>
		<div class="rightcontent col-md-9">
			<div class="widgetgroup">
				<span class="label">Language:</span>
				<span class="answer">Hindi, English</span>
			</div>
			<div class="widgetgroup spacer">
				<span class="label">Use Case:</span>
				<span class="answer">Some use case here.</span>
			</div>
			<div class="widgetgroup imagearea">
				<span class="label">other forms of this conjunct:</span>
				<img src="http://placehold.it/75X75" alt="Glyph" />
				<img src="http://placehold.it/75X75" alt="Glyph" />
				<img src="http://placehold.it/75X75" alt="Glyph" />
				<img src="http://placehold.it/75X75" alt="Glyph" />
				<span class="moreforms">2 more forms..</span>
			</div>
		</div>

	<?php } ?>	
</section>