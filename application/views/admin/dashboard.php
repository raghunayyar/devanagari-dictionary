<!-- Todo : Implement Search Bar here -->
<section>

	<?php

		$formattributes = array('method' => 'POST', 'class' => 'form-horizontal');
		echo form_open('admin/signout', $formattributes, '');

		$submitbutton = array (
			'type' => 'submit',
			'class' => 'btn btn-primary',
		);
	?>
		<fieldset>

			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<?php echo form_submit($submitbutton, 'Sign Out'); ?>
				</div>
			</div>

		</fieldset>
	
	<?php
		echo validation_errors("<p class='error'></p>");
		echo form_close();
	?>
</section>