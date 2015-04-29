<div class="<?php echo $pageclass; ?>">
	<div class="container-fluid">
		<div class="row">
			<div class="page-header col-lg-12">
				<h3 class="h3">Contributors</h3>
			</div>
		</div>
		<div class="page-content col-lg-12">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Sr No.</th>
						<th>Name</th>
						<th>Email</th>
						<th>Conjunct</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$numberofcards = 0;
						foreach ($listofcontributors as $key) {
							$numberofcards++;
					?>
					<tr>
						<td><?php echo $numberofcards; ?></td>
						<td><?php echo $key->contributorname; ?></td>
						<td><?php echo $key->contributoremail; ?></td>
						<td><?php echo $key->conjuctcontribution; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>