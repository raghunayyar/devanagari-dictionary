<div class="<?php echo $pageclass; ?> class">
	<div class="container-fluid">
		<div class="page-header col-lg-12">
			<h1 class="h1">Contributors</h1>
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