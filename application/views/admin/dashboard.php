<div class="<?php echo $bodyclass; ?>">
	<div class="container-fluid">
		<section>

			
			<div class="alert alert-success">
				<strong class="bold">Login Details:</strong>
				<p><?php echo $name; ?></p>
			</div>

			<?php

				$formattributes = array('method' => 'POST', 'class' => 'col-sm-2');
				$rejectform = array('method' => 'POST', 'class' => '');
				$allclearsignout = array('method' => 'POST', 'class' => '');
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
			<?php if (sizeof($approvelist) > 0) { ?>
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
					<tbody>
						<?php
							$numberofcards = 0;
							foreach ($approvelist as $key) {
								$numberofcards++;
						?>
						<tr>
							<td><?php echo $key->contributorname; ?></td>
							<td><?php echo $key->conjuctcontribution; ?></td>
							<td><?php echo $key->feedback; ?></td>
							<td>
								<?php echo form_open('admin/reject', $formattributes, ''); ?>
									<button type="submit" class="btn btn-danger btn-xs" value="<?php echo $key->SNo; ?>">
										<i class="fa fa-trash fa-1x"></i>
									</button>
								<?php echo form_close(); ?>
							</td>
						</tr>
						<?php } ?>
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
			<?php } else { ?>
				<div class="jumbotron center">
					<h3 class="h3">All Clear here</h3>
					<?php
						echo form_open('admin/signout', $allclearsignout, '');
						echo form_submit($signoutbutton, 'Sign Out');
						echo form_close();
					?>
				</div>
			<?php } ?>
		</section>
	</div>
</div>