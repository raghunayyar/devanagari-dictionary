<div class="<?php echo $pageclass; ?>" ng-controller="ResultController">
	<div class="container-fluid">
		<section class="page">
		<!-- Search Results -->
			<div class="page-content">
				<div class="row">
					<div class="result-header col-md-12">
						<div class="col-md-5">
							<h1 class="completealphabet massive h1">
								<?php echo $result['completealphabet']; ?>
							</h1>
						</div>
						<table class="col-md-7 primary-details">
							<tbody>
								<tr>
									<td class="name">
										<span class="label">Split:</span>
									</td>
									<td class="definition">
										<span class="combination h2">
											<?php echo str_replace(' ', '&#2381<span class="add">+</span>', $result['seperated']); ?>
										</span>
									</td>
								</tr>
								<tr>
									<td class="name">
										<span class="label">Language:</span>
									</td>
									<td class="definition">
										<h3 class="language h3">
											<span><?php echo $result['languages']; ?></span>
										</h3>
									</td>
								</tr>
								<tr>
									<td class="name">
										<span class="label">Use Case:</span>
									</td>
									<td class="definition">
										<span class="examples h3">
											<span><?php echo $result['examples']; ?></span>
										</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<hr />

				<div class="row">

					<div class="col-md-12 heading-column">
						<h2 class="h2 conjunct-heading">
							<span>Alternate Form(s)</span>
						</h2>
					</div>
					<div class="clear"></div>

					<!-- 
						A foreach here to iterate through the images :
						currently I show the complete alphabet due to lack of 
						data. -->
					<div class="combination-container row">
						<?php if ($result['numberofglyphs'] > 0 ) { ?>
							<?php for ($i=1; $i <= $result['numberofglyphs']; $i++) { ?>
								<div class="col-md-4">
									<h1 class="completealphabet big combination-possibility h1">
										<img src="<?php echo base_url(); ?>images/<?php echo $result['sno'] . '/' . $result['sno'] . '.' . $i . '.png' ?>" />
									</h1>
								</div>
							<?php } ?>
						<?php } else { ?>
							<div class="col-md-12">
								<div class="panel" role="alert">
									<h1 class="h2 center">Coming Soon! :)</h4>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>

				<hr />

				<!--<div class="row">
					<div class="col-md-12 heading-column">
						<h2 class="h2 conjunct-heading">
							<span>Example Usage</span>
						</h2>
					</div>
					<div class="clear"></div>

					<div class="combination-container row">
						<div class="col-md-4">
							<h1 class="completealphabet big combination-possibility h1">
								<?php echo $result['completealphabet']; ?>
							</h1>
						</div>
						<div class="col-md-4">
							<h1 class="completealphabet big combination-possibility h1">
								<?php echo $result['completealphabet']; ?>
							</h1>
						</div>
						<div class="col-md-4">
							<h1 class="completealphabet big combination-possibility h1">
								<?php echo $result['completealphabet']; ?>
							</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<?php foreach ($result as $key) { ?>
						<table class="col-md-12 meaning-details">
							<tbody>
								<tr>
									<td class="name">
										<span class="label">Meaning</span>
									</td>
									<td class="definition">
										<span class="combination h4">
											Awesome Meaning of this awesome word
										</span>
									</td>
								</tr>
								<tr>
									<td class="name">
										<span class="label">Source</span>
									</td>
									<td class="definition">
										<span class="language h4">
											<span>Devanagari Source</span>
										</span>
									</td>
								</tr>
								<tr>
									<td class="name">
										<span class="label">Language</span>
									</td>
									<td class="definition">
										<span class="examples h4">
											<span>Hindi</span>
										</span>
									</td>
								</tr>
							</tbody>
						</table>
					<?php } ?>
				</div>

				<hr /> -->

				<div class="row">
					<div class="col-md-12 heading-column">
						<h2 class="h2 conjunct-heading">
							<span>Related Searches</span>
						</h2>
					</div>
					<div class="clear"></div>

					<!-- 
						A foreach here to iterate through the images :
						currently I show the complete alphabet due to lack of 
						data. -->
					<div class="combination-container row">
						<?php foreach ($relatedsearchresult as $key) { ?>
						<a class="col-md-3 resultcard cardspacer" href="<?php echo base_url(); ?>home/result/<?php echo $key->Sno; ?>">
							<div class="cardheadholder">
								<h3 class="completesmalleralphabet h3"><?php echo $key->completealphabet; ?></h3>
							</div>
							<p class="separated">
								<?php echo str_replace(' ', '&#2381<strong class="add">+</strong>', $key->seperated); ?>
							</p>
						</a>
						<?php  } ?>
					</div>
				</div>

				<hr />
					
				<div class="row">
					<button type="button" class="btn btn-primary btn-lg" ng-click="contributeclick()">
						Contribute
					</button>
				</div>
				<div class="row temporaryhide" id="contributionform">
					<?php
						$formattributes = array (
							'method' => 'POST',
							'class' => 'form-horizontal contribute-form',
							'id' => 'contributeform',
							'name' => 'contributeform'
						);
				
						$name = array (
							'name' => 'name',
							'type' => 'text',
							'class' => 'form-control',
							'placeholder' => 'Name...',
							'autocomplete' => 'off',
							'ng-model' => 'contributor.name',
							'required' => true
						);		

						$email = array (
							'name' => 'email',
							'type' => 'email',
							'class' => 'form-control',
							'placeholder' => 'Email...',
							'autocomplete' => 'off',
							'ng-model' => 'contributor.email',
							'required' => true
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
							'placeholder' => 'Suggestions...',
							'ng-model' => 'contributor.suggestions',
							'required' => true
						);


						$submitbutton = array (
							'type' => 'submit',
							'class' => 'btn btn-success pull-right submit-button',
							'ng-disabled' => 'contributeform.$invalid'
						);

					?>

					<?php echo form_open('home/contribute', $formattributes, ''); ?>

					<div class="col-lg-12 contribute-jumbo">
						<div class="form-group" ng-class="{
							'has-error': contributeform.name.$invalid && contributeform.name.$dirty
						}">
							<?php echo form_input($name, '', ''); ?>
						</div>

						<div class="form-group" ng-class="{
							'has-error': contributeform.email.$invalid && contributeform.email.$dirty
						}">
							<?php echo form_input($email, '', ''); ?>
						</div>
						
						<div class="form-group">
							<?php echo form_textarea($feedback); ?>
						</div>

						<?php echo form_input($url, '', ''); ?>
						<?php echo form_input($acceptance, '', ''); ?>
						
						<div class="form-group">
							<?php echo form_submit($submitbutton, 'Submit'); ?>
						</div>
					</div>
					
					<?php echo form_close(); ?>
				</div>
			</div>
		</section>
	</div>
</div>