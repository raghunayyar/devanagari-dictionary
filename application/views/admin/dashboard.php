<!-- Todo : Implement Search Bar here -->
<section>

	
	<div class="alert alert-success">
		<h4>
			<strong class="bold">Login Details:</strong>
			<span><?php echo $name; ?></span>
		</h4>	
	</div>

	<?php

		$formattributes = array('method' => 'POST', 'class' => 'col-sm-2');
		$signoutbutton = array (
			'type' => 'submit',
			'class' => 'btn btn-primary',
		);

		$acceptbutton = array (
			'type' => 'submit',
			'class' => 'btn btn-success',
		);
	?>

	<!-- Only the not accepted contributions-->
	<table class="table table-hover ">
		<thead>
			<tr>
				<th>Name</th>
				<th>Conjunct</th>
				<th>Feedback</th>
				<th>Reject</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Pradnya Naik</td>
				<td>Ka</td>
				<td>Lorem Ipsum is simply dummy text of the printing and 
					typesetting industry. Lorem Ipsum has been the industry's
					standard dummy text ever since the 1500s, when an unknown
					printer took a galley of type and scrambled it to make a type
					specimen PageMaker including versions of Lorem Ipsum.</td>
				<td>
					<button type="submit" class="btn btn-danger btn-xs">
						<i class="fa fa-trash fa-1x"></i>
					</button>
				</td>
			</tr>
			<tr>
				<td>Raghu Nayyar</td>
				<td>Ka</td>
				<td>Lorem Ipsum is simply dummy text of the printing and 
					typesetting industry. Lorem Ipsum has been the industry's
					standard dummy text ever since the 1500s, when an unknown
					printer took a galley of type and scrambled it to make a type
					specimen PageMaker including versions of Lorem Ipsum.</td>
				<td>
					<button type="submit" class="btn btn-danger btn-xs">
						<i class="fa fa-trash fa-1x"></i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>
	<fieldset>

		<div class="form-group">
			<div class="col-sm-12">
				<?php
					echo form_open('admin/signout', $formattributes, '');
					echo form_submit($signoutbutton, 'Sign Out');
					echo form_close();
				?>

				<?php
					echo form_open('admin/accept', $formattributes, '');
					echo form_submit($acceptbutton, 'Accept');
					echo form_close();
				?>
			</div>
		</div>

	</fieldset>
	
	<?php
		echo form_close();
	?>
</section>