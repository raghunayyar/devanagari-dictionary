<div class="<?php echo $pageclass; ?>">
	<div class="search-topbar">
		<div class="container-fluid">
			<div class="col-lg-9 search-topbar-interior">
				<h3 class="h3">Search Results for '<?php echo $staticquery; ?>'</h3>
			</div>
			<div class="col-lg-3 search-topbar-interior">
				<button class="btn btn-primary pull-right more-button" id="scrolltotop">Search More...</a>
			</div>
		</div>

	</div>
	<div class="container-fluid">
		<section id="searchresultspage" class="page">
			<!-- Search Results -->
			<div class="page-content">
				<div class="row">

				<?php
					$numberofcards = 0;
					foreach ($results as $key) {
					$numberofcards++;
				?>
				<a href="<?php echo base_url(); ?>home/result/<?php echo $key->Sno; ?>"
					class='col-lg-3 resultcard cardspacer'
					data-id="<?php echo $key->Sno; ?>"
					data-card="<?php echo $numberofcards; ?>">
					<div class="cardheadholder">
						<h3 class="completesmalleralphabet h3"><?php echo $key->completealphabet; ?></h3>
					</div>
					<p class="separated">
						<?php echo str_replace(' ', '&#2381<strong class="add">+</strong>', $key->seperated); ?>
					</p>
				</a>
				<?php } ?>
			</div>
		</section>
	</div>
</div>