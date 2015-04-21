<div class="<?php echo $pageclass; ?>">
	<div class="search-topbar col-lg-12">
		<div class="col-lg-9 search-topbar-interior">
			<h2 class="h2">Search Results for '<?php echo $staticquery; ?>'</h2>
		</div>
		<div class="col-lg-3 search-topbar-interior">
			<button class="btn btn-primary pull-right more-button" id="scrolltotop">Search More...</a>
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
				<a href="<?php echo base_url(); ?>index.php/home/result/<?php echo $key->Sno; ?>"
					class='col-sm-3 resultcard cardspacer'
					data-id="<?php echo $key->Sno; ?>"
					data-card="<?php echo $numberofcards; ?>">
					<div class="cardheadholder">
						<h1 class="completealphabet"><?php echo $key->completealphabet; ?></h1>
					</div>
					<p class="separated"><?php echo str_replace(' ', '+', $key->seperated); ?></p>
					<p class="language">Hindi</p>
					<div class="example-container">
						<span class="cardlabel">Example(s)</span>
						<p class="examples"><?php if (strlen($key->examples) > 1) echo $key->examples; else echo '-'; ?></p>
					</div>
					<!--<a href='<?php echo base_url(); ?>index.php/home/result/<?php echo $key->Sno; ?>' class="btn btn-primary">Read More</a>-->
				</a>
				<?php } ?>
			</div>
		</section>
	</div>
</div>