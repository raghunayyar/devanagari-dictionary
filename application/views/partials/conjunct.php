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
				<table class="col-lg-8 primary-details">
					<tbody>
						<tr>
							<td class="name">
								<span class="label">Glyph</span>
							</td>
							<td class="definition">
								<span class="combination big h2">
									<?php echo str_replace(' ', '+', $key->seperated); ?>
								</span>
							</td>
						</tr>
						<tr>
							<td class="name">
								<span class="label">Language</span>
							</td>
							<td class="definition">
								<span class="language big h3">
									<span>Hindi, Marathi (static)</span>
								</span>
							</td>
						</tr>
						<tr>
							<td class="name">
								<span class="label">Use Case</span>
							</td>
							<td class="definition">
								<span class="examples big h3">
									<span><?php echo $key->examples; ?></span>
								</span>
							</td>
						</tr>
					</tbody>
				</table>
			<?php } ?>
		</div>
		<div class="row">
			<div clas="col-lg-12">
				<h2 class="h2">
					<span>Alternate Form(s)</span>
				</h2>
			</div>
			<div class="clear"></div>

			<!-- 
				A foreach here to iterate through the images :
				currently I show the complete alphabet due to lack of 
				data. -->
			<div class="col-lg-4">
				<h1 class="completealphabet massive h1">
					<?php echo $key->completealphabet; ?>
				</h1>
			</div>
			<div class="col-lg-4">
				<h1 class="completealphabet massive h1">
					<?php echo $key->completealphabet; ?>
				</h1>
			</div>
			<div class="col-lg-4">
				<h1 class="completealphabet massive h1">
					<?php echo $key->completealphabet; ?>
				</h1>
			</div>
			
		</div>

		<div class="row">
			<div clas="col-lg-12">
				<h2 class="h2">
					<span>Example Word</span>
				</h2>
			</div>
			<div class="clear"></div>

			<!-- 
				A foreach here to iterate through the images :
				currently I show the complete alphabet due to lack of 
				data. -->
			<div class="row">

			<?php foreach ($result as $key) { ?>
				<div class="col-lg-12">
					<h1 class="examplealphabet massive h1">
						<?php echo $key->completealphabet; ?>
					</h1>
				</div>
				<table class="col-lg-8 primary-details">
					<tbody>
						<tr>
							<td class="name">
								<span class="label">Meaning</span>
							</td>
							<td class="definition">
								<span class="combination big h2">
									<?php echo str_replace(' ', '+', $key->seperated); ?>
								</span>
							</td>
						</tr>
						<tr>
							<td class="name">
								<span class="label">Source</span>
							</td>
							<td class="definition">
								<span class="language big h3">
									<span>Hindi, Marathi (static)</span>
								</span>
							</td>
						</tr>
						<tr>
							<td class="name">
								<span class="label">Language</span>
							</td>
							<td class="definition">
								<span class="examples big h3">
									<span><?php echo $key->examples; ?></span>
								</span>
							</td>
						</tr>
					</tbody>
				</table>
			<?php } ?>
		</div>
		</div>
	</div>
</section>