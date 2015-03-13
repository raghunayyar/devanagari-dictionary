<!-- Todo : Implement Search Bar here -->
<section class="well widget" id="searchwidget">

		<?php
			echo validation_errors();

			$formattributes = array('method' => 'POST');
			echo form_open('home/search', $formattributes, '');

			$searchinput = array (
				'name' => 'searchinput',
				'type' => 'text',
				'class' => 'form-control keyboardInput',
				'placeholder' => 'Search for..'
			);
		?>

		<div class="input-group">
			<?php
				$alllang = array (
					'name'=> 'alllang',
					'id' => 'alllang',
					'value' => 'alllang',
					'checked' => TRUE
				);
			?>
			<?php echo form_checkbox($alllang); ?>
			<?php echo form_label('All Languages', 'alllang'); ?>

			<?php
				$hindilang = array (
					'name'=> 'hindilang',
					'id' => 'hindilang',
					'value' => 'hindilang',
					'checked' => FALSE
				);
			?>
			<?php echo form_checkbox($hindilang); ?>
			<?php echo form_label('Hindi', 'hindilang'); ?>

			<?php
				$marathilang = array (
					'name'=> 'marathilang',
					'id' => 'marathilang',
					'value' => 'marathilang',
					'checked' => FALSE
				);
			?>
			<?php echo form_checkbox($marathilang); ?>
			<?php echo form_label('Marathi', 'marathilang'); ?>
			
			<?php
				$palilang = array (
					'name'=> 'palilang',
					'id' => 'palilang',
					'value' => 'palilang',
					'checked' => FALSE
				);
			?>
			<?php echo form_checkbox($palilang); ?>
			<?php echo form_label('Pali', 'palilang'); ?>
		</div>

		<div class="input-group">
			<?php
				$allcomb = array (
					'name'=> 'allcomb',
					'id' => 'allcomb',
					'value' => 'allcomb',
					'checked' => TRUE
				);
			?>
			<?php echo form_checkbox($allcomb); ?>
			<?php echo form_label('All Combinations', 'allcomb'); ?>

			<?php
				$twocomb = array (
					'name'=> 'twocomb',
					'id' => 'twocomb',
					'value' => 'twocomb',
					'checked' => FALSE
				);
			?>
			<?php echo form_checkbox($twocomb); ?>
			<?php echo form_label('Combination of 2', 'twocomb'); ?>

			<?php
				$threecomb = array (
					'name'=> 'threecomb',
					'id' => 'threecomb',
					'value' => 'threecomb',
					'checked' => FALSE
				);
			?>
			<?php echo form_checkbox($threecomb); ?>
			<?php echo form_label('Combination of 3', 'threecomb'); ?>
			
			<?php
				$fourcomb = array (
					'name'=> 'fourcomb',
					'id' => 'fourcomb',
					'value' => 'fourcomb',
					'checked' => FALSE
				);
			?>
			<?php echo form_checkbox($fourcomb); ?>
			<?php echo form_label('Combination of 4', 'fourcomb'); ?>
		</div>
		<div class="input-group">
			<?php
				echo form_input($searchinput, '', '');
			?>

			<span class="input-group-btn">
				<?php
					$searchbutton = array (
						'class' => 'btn btn-primary',
						'name' => 'searchbutton'
					);

					echo form_submit($searchbutton,'Search', '');
				?>
			</span>

		</div>

		<div class="more-options">
			<p class="pull-left">Also Show: </h4>
			<div>
				<div class="btn btn-default btn-sm">
					<?php
						$voweloption = array (
							'name'=> 'voweloption',
							'id' => 'voweloption',
							'value' => 'voweloption',
							'checked' => TRUE
						);
					?>
					<?php echo form_checkbox($voweloption); ?>
					<?php echo form_label('Vowels', 'voweloption'); ?>
				</div>

				<div class="btn btn-default btn-sm">
					<?php
						$consonantsoption = array (
							'name'=> 'consonantsoption',
							'id' => 'consonantsoption',
							'value' => 'consonantsoption',
							'checked' => TRUE
						);
					?>
					<?php echo form_checkbox($consonantsoption); ?>
					<?php echo form_label('Consonants', 'consonantsoption'); ?>
				</div>

				<div class="btn btn-default btn-sm">
					<?php
						$numbersoption = array (
							'name'=> 'numbersoption',
							'id' => 'numbersoption',
							'value' => 'numbersoption',
							'checked' => FALSE
						);
					?>
					<?php echo form_checkbox($numbersoption); ?>
					<?php echo form_label('Numbers', 'numbersoption'); ?>
				</div>

				<div class="btn btn-default btn-sm">
					<?php
						$symbolsoption = array (
							'name'=> 'symbolsoption',
							'id' => 'symbolsoption',
							'value' => 'symbolsoption',
							'checked' => FALSE
						);
					?>
					<?php echo form_checkbox($symbolsoption); ?>
					<?php echo form_label('Symbols', 'symbolsoption'); ?>
				</div>
				<div class="btn btn-default btn-sm">
					<?php
						$consonentclustersoption = array (
							'name'=> 'consonentclustersoption',
							'id' => 'consonentclustersoption',
							'value' => 'consonentclustersoption',
							'checked' => FALSE
						);
					?>
					<?php echo form_checkbox($consonentclustersoption); ?>
					<?php echo form_label('Consonent Clusters', 'consonentclustersoption'); ?>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
</section>