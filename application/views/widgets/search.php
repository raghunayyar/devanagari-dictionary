<!-- Todo : Implement Search Bar here -->
<section class=" well widget" id="searchwidget">

		<?php
			echo validation_errors();
			echo form_open('/home/search', '', '');

			$searchinput = array (
				'type' => 'text',
				'class' => 'form-control keyboardInput',
				'placeholder' => 'Search for..'
			);
		?>

		<div class="input-group">
			<?php
				echo form_input($searchinput, '', '');
			?>

			<span class="input-group-btn">
				<?php
					$searchbutton = array (
						'type' => 'button',
						'class' => 'btn btn-primary',
					);
					$searchicon = '<span class="glyphicon glyphicon-search" aria-hidden="true"></span>';

					echo form_button($searchbutton, $searchicon, '');		
					echo form_close();
				?>
			</span>

		</div>

</section>