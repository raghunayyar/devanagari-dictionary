<section id="searchresultspage" class="page">
	<div class="page-header col-lg-12">
		<h1>Search Results for '<?php echo $staticquery; ?>'</h1>
	</div>
	<!-- Search Results -->
	<div class="page-content">
		<div class="row">

		<?php
			$numberofcards = 0;
			foreach ($results as $key) {
			$numberofcards++;
		?>
		<div
			class='col-sm-3 resultcard cardspacer'
			data-id="<?php echo $key->Sno; ?>"
			data-card="<?php echo $numberofcards; ?>">
			<div class="cardheadholder">
				<h1 class="completealphabet"><?php echo $key->completealphabet; ?></h1>
			</div>
			<p class="separated"><?php echo str_replace(' ', '+', $key->seperated); ?></p>
			
			<div class="example">
				<span class="cardlabel">Example(s)</span>
				<p class="examples"><?php if (strlen($key->examples) > 1) echo $key->examples; else echo '-'; ?></p>
			</div>
			<a href='<?php echo base_url(); ?>index.php/home/result/<?php echo $key->Sno; ?>' class="btn btn-primary">Read More</a>
		</div>
		<?php } ?>
	</div>
</section>