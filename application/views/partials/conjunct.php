<section id="conjunctspage" class="page">
	<!-- Search Results -->
	<div class="page-content">
		<div class="row">

			<?php foreach ($result as $key) { ?>
				<div class="primary-search-container">
					<div class="col-lg-4 leftcontent">
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
				</div>
			<?php } ?>
		</div>
		<div class="combination-container">
			<div class="col-lg-4">
				<h1 class="completealphabet combination-possibility massive h1">
					<?php echo $key->completealphabet; ?>
				</h1>
			</div>
			<div class="col-lg-4">
				<h1 class="completealphabet combination-possibility massive h1">
					<?php echo $key->completealphabet; ?>
				</h1>
			</div>
			<div class="col-lg-4">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 heading-column">
				<h2 class="h2 conjunct-heading">
					<span>Alternate Form(s)</span>
				</h2>
			</div>
			<div class="clear"></div>

			<!-- 
				A foreach here to iterate through the images :
				currently I show the complete alphabet due to lack of 
				data. -->
			<div class="combination-container">
				<div class="col-lg-4">
					<h1 class="completealphabet combination-possibility massive h1">
						<?php echo $key->completealphabet; ?>
					</h1>
				</div>
				<div class="col-lg-4">
					<h1 class="completealphabet combination-possibility massive h1">
						<?php echo $key->completealphabet; ?>
					</h1>
				</div>
				<div class="col-lg-4">
					<h1 class="completealphabet combination-possibility massive h1">
						<?php echo $key->completealphabet; ?>
					</h1>
				</div>
			</div>
			
		</div>

		<div class="row">
			<div class="col-lg-12 heading-column">
				<h2 class="h2 conjunct-heading">
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
					<table class="col-lg-8 meaning-details">
						<tbody>
							<tr>
								<td class="name">
									<span class="label">Meaning</span>
								</td>
								<td class="definition">
									<span class="combination big h4">
										Awesome Meaning of this awesome word
									</span>
								</td>
							</tr>
							<tr>
								<td class="name">
									<span class="label">Source</span>
								</td>
								<td class="definition">
									<span class="language big h4">
										<span>Devanagari Source</span>
									</span>
								</td>
							</tr>
							<tr>
								<td class="name">
									<span class="label">Language</span>
								</td>
								<td class="definition">
									<span class="examples big h4">
										<span>Hindi</span>
									</span>
								</td>
							</tr>
						</tbody>
					</table>
				<?php } ?>
			</div>
			<div class="row">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contribute">
					Contribute
				</button>

				<!-- Modal -->
				<div class="modal fade" id="contribute" tabindex="-1" role="dialog" aria-labelledby="contributeLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title" id="contributeLabel">Contribute</h4>
							</div>
							<div class="modal-body">
								<?php 
									$formattributes = array('method' => 'POST', 'class' => 'form-horizontal', 'id' => 'contributeform');
									echo form_open('home/contribute', $formattributes, '');
									$name = array (
										'name' => 'name',
										'type' => 'text',
										'class' => 'form-control',
										'placeholder' => 'Name..',
										'autocomplete' => 'off'
									);		

									$email = array (
										'name' => 'email',
										'type' => 'email',
										'class' => 'form-control',
										'placeholder' => 'Email..',
										'autocomplete' => 'off'
									);

									$url = array (
										'name' => 'url',
										'type' => 'hidden',
										'value' => current_url()
									);

									$acceptance = array (
										'name' => 'acceptance',
										'type' => 'hidden',
										'value' => false
									);									

									$feedback = array (
										'class' => 'form-control keyboardInput',
										'rows' => '5',
										'name' => 'feedbacktextarea',
									);


									$submitbutton = array (
										'type' => 'submit',
										'class' => 'btn btn-primary',
										'data-dismiss' => 'modal'
									);

								?>
								<div class="form-group">
									<div class="col-sm-12">
										<?php echo form_input($name, '', ''); ?>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<?php echo form_input($email, '', ''); ?>
									</div>
								</div>
								
								<?php echo form_input($url, '', ''); ?>
								<?php echo form_input($acceptance, '', ''); ?>
								
								<div class="form-group">
									<div class="col-sm-12">
										<?php echo form_textarea($feedback); ?>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<?php echo form_submit($submitbutton, 'Submit'); ?>
							</div>
							
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>