<section id="conjunctspage" class="page">
	<!-- Search Results -->
	<div class="page-content">
		<div class="row">

		<?php foreach ($result as $key) { ?>
			<div class="col-lg-4">
				<h1 class="completealphabet massive h1">
					<?php echo $key->completealphabet; ?>
				</h1>
			</div>
			<div class="col-log-8">
				<h2 class="combination big h2">
					<?php echo str_replace(' ', '+', $key->seperated); ?>
				</h2>
				<h3 class="examples">
					<?php echo $key->examples; ?>
				</h3>
			</div>
		<?php } ?>
			<div class="col-lg-12">
				<h3>Similar Results</h3>
			</div>

			<div class="col-lg-12">
				<a href="#" class="btn btn-primary">Contribute</a>
			</div>
	</div>
</section>