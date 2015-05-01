<div class="<?php echo $bodyclass; ?>">
	<div class="container-fluid">
		<section>

			
			<div class="alert alert-success">
				<h4>
					<strong class="bold">Login Details:</strong>
					<span><?php echo $name; ?></span>
				</h4>	
			</div>

			<?php

				$formattributes = array('method' => 'POST', 'class' => 'col-sm-2');
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
								<button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#rejectmodal">
									<i class="fa fa-trash fa-1x"></i>
								</button>
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