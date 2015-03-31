<!-- Todo : Implement Widget 3 Here -->
<div class="col-md-6 widget well widget-half widget-right" id="popularglyphwidget">
	<div class="widget-header widget-header-custom">
		<h3>Most Popular Glyphs</h3>
	</div>
		<ul class="widget-element-list row">
		<?php foreach ($recentwidgetdata as $key) { ?>
			<li>
				<a href="<?php echo base_url(); ?>index.php/home/result/<?php echo $key->Sno; ?>" class="widget-link">
					<div class="leftcontent col-sm-3">
						<h1 class="completealphabet"><?php echo $key->completealphabet; ?></h1>
					</div>
					<div class="rightcontent col-sm-9">
						<div class="combination widgetgroup">
							<h3 class="separated"><?php echo str_replace(' ', '+', $key->seperated); ?></h3>
						</div>
						<div class="widgetgroup">
							<span class="label">Language:</span>
							<span class="value">NOT IN DB</span>
						</div>
						<div class="widgetgroup">
							<span class="label">Example:</span>
							<span class="value"><?php if (strlen($key->examples) > 1) echo $key->examples; else echo '-'; ?></span>
						</div>
						<div class="morebutton">
						</div>
					</div>
				</a>
				<div class="clear"></div>
			</li>
		<?php } ?>
	</ul>
</div>