<section id="creditspage" class="page">
	<div class="page-header col-lg-12">
		<h1>Search Results for '<?php echo $staticquery; ?>'</h1>
	</div>
	<!-- Search Results -->
	<div class="page-content">
		<div class="row">

		<?php
			foreach ($results as $key) {
		?>
		<div class='col-md-4 resultcard' data-id=''>
			<img src='http://placehold.it/150x150' alt='Girish Dalvi' />
			<h2><?php echo $key->completealphabet; ?></h2>
		</div>
		<?php } ?>
	</div>
</section>