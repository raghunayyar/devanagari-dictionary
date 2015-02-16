<!-- Todo : Implement Search Bar here -->
<section class=" well widget" id="searchwidget">

		<?php
			echo validation_errors();
			echo form_open('/home/search', '', '');

			$searchinput = array (
				'name' => 'searchinput',
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
						'name' => 'searchbutton'
					);

					echo form_submit($searchbutton,'Search', '');		
					echo form_close();
				?>
			</span>

		</div>

</section>