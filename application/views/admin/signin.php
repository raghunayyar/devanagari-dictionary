<!-- Todo : Implement Search Bar here -->
<div class="jumbotron">

	<?php

		$formattributes = array('method' => 'POST', 'class' => 'form-horizontal');
		echo form_open('admin/validate', $formattributes, '');

		$usernamelabel = array (
			'for' => 'username',
			'class' => 'col-lg-2 control-label',
		);

		$username = array (
			'name' => 'username',
			'type' => 'text',
			'class' => 'form-control',
			'placeholder' => 'Username',
			'autocomplete' => 'off'
		);

		$passwordlabel = array (
			'for' => 'passw',
			'class' => 'col-lg-2 control-label',
		);		

		$password = array (
			'name' => 'password',
			'type' => 'password',
			'class' => 'form-control',
			'placeholder' => 'Password..',
			'autocomplete' => 'off'
		);

		$submitbutton = array (
			'type' => 'submit',
			'class' => 'btn btn-primary',
		);
	?>
		<fieldset>
			
			<p><strong>Sign In</strong></p>

			<div class="form-group">
				<label for="username" class="col-lg-2 control-label">Username</label>
				<div class="col-lg-10">
					<?php echo form_input($username, '', ''); ?>
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="col-lg-2 control-label">Password</label>
				<div class="col-lg-10">
					<?php echo form_input($password, '', ''); ?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<?php echo form_submit($submitbutton, 'Sign In'); ?>
				</div>
			</div>

		</fieldset>
	
	<?php
		echo validation_errors("<p class='error'></p>");
		echo form_close();
	?>
</div>