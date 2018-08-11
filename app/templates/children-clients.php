<?php if(!isset($Translation)) {die('No direct access allowed.');} ?>
<?php $current_table = 'clients'; ?>
<?php
	$cleaner = new CI_Input();
	$cleaner->charset = datalist_db_encoding;
?>
<script>

		var panelID = "panel_<?php echo "{$parameters['ChildTable']}-{$parameters['ChildLookupField']}"; ?>";
		var mbWidth = window.innerWidth * 0.9;
		var mbHeight = window.innerHeight * 0.8;
		if(mbWidth > 1000){ mbWidth = 1000; }
		if(mbHeight > 800){ mbHeight = 800; }

</script>

<div class="row">

		<div class="table-responsive">
			<table class="table table-striped table-hover table-condensed table-bordered">
				<thead>
					<tr>
						<?php if($config['open-detail-view-on-click']){ ?>
							<th>&nbsp;</th>
						<?php } ?>
						<?php if(is_array($config['display-fields'])) foreach($config['display-fields'] as $fieldIndex => $fieldLabel){ ?>
							<th 
								<?php if($config['sortable-fields'][$fieldIndex]){ ?>
									onclick="<?php echo $current_table; ?>GetChildrenRecordsList({
										Verb: 'sort', 
										SortBy: <?php echo $fieldIndex; ?>, 
										SortDirection: '<?php echo ($parameters['SortBy'] == $fieldIndex && $parameters['SortDirection'] == 'asc' ? 'desc' : 'asc'); ?>'
									});" 
									style="cursor: pointer;" 
								<?php } ?>
								class="<?php echo "{$current_table}-{$config['display-field-names'][$fieldIndex]}"; ?>">
								<?php echo $fieldLabel; ?>
								<?php if($parameters['SortBy'] == $fieldIndex && $parameters['SortDirection'] == 'desc'){ ?>
									<i class="glyphicon glyphicon-sort-by-attributes-alt text-warning"></i>
								<?php }elseif($parameters['SortBy'] == $fieldIndex && $parameters['SortDirection'] == 'asc'){ ?>
									<i class="glyphicon glyphicon-sort-by-attributes text-warning"></i>
								<?php } ?>
							</th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>

						<td class="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][1]}"; ?>" id="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][1]}-" . html_attr($record[$config['child-primary-key-index']]); ?>"><?php echo safe_html($record[1]); ?></td>
						<td class="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][2]}"; ?>" id="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][2]}-" . html_attr($record[$config['child-primary-key-index']]); ?>"><?php echo safe_html($record[2]); ?></td>
						<td class="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][3]}"; ?>" id="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][3]}-" . html_attr($record[$config['child-primary-key-index']]); ?>"><?php echo safe_html($record[3]); ?></td>
						<td class="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][4]}"; ?>" id="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][4]}-" . html_attr($record[$config['child-primary-key-index']]); ?>"><?php echo safe_html($record[4]); ?></td>
						<td class="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][5]}"; ?>" id="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][5]}-" . html_attr($record[$config['child-primary-key-index']]); ?>"><?php echo safe_html($record[5]); ?></td>
						<td class="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][6]}"; ?>" id="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][6]}-" . html_attr($record[$config['child-primary-key-index']]); ?>"><?php echo safe_html($record[6]); ?></td>
						<td class="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][7]}"; ?>" id="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][7]}-" . html_attr($record[$config['child-primary-key-index']]); ?>"><?php echo safe_html($record[7]); ?></td>
						<td class="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][8]}"; ?>" id="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][8]}-" . html_attr($record[$config['child-primary-key-index']]); ?>"><a href="mailto:<?php echo isEmail($record[8]); ?>" class="btn btn-info" title="<?php echo html_attr($record[8]); ?>"><i class="glyphicon glyphicon-envelope"></i></a></td>
						<td class="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][9]}"; ?>" id="<?php echo "{$parameters['ChildTable']}-{$config['display-field-names'][9]}-" . html_attr($record[$config['child-primary-key-index']]); ?>"><?php if($record[9]){ ?><a href="link.php?t=<?php echo $parameters['ChildTable']; ?>&f=website&i=<?php echo urlencode($record[$config['child-primary-key-index']]); ?>" target="_blank"><?php echo $cleaner->xss_clean($record[9]); ?></a><?php } ?></td>
					</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="<?php echo count($config['display-fields'] + $config['open-detail-view-on-click'] ? 1 : 0); ?>">
							<?php if($totalMatches){ ?>
								<?php if($config['show-page-progress']){ ?>
									<span style="margin: 10px;">
										<?php $firstRecord = ($parameters['Page'] - 1) * $config['records-per-page'] + 1; ?>
										<?php echo str_replace(array('<FirstRecord>', '<LastRecord>', '<RecordCount>'), array($firstRecord, $firstRecord + count($records) - 1, $totalMatches), $Translation['records x to y of z']); ?>
									</span>
								<?php } ?>
							<?php }else{ ?>
								<span class="text-danger" style="margin: 10px;"><?php echo $Translation['No matches found!']; ?></span>
							<?php } ?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<?php if($totalMatches){ ?>
			<div class="row hidden-print">
				<div class="col-xs-12">
					<button type="button" class="btn btn-default" onclick="<?php echo $current_table; ?>GetChildrenRecordsList({ Verb: 'page', Page: 'previous' });"><i class="glyphicon glyphicon-chevron-left"></i></button>
					<button type="button" class="btn btn-default" onclick="<?php echo $current_table; ?>GetChildrenRecordsList({ Verb: 'page', Page: 'next' });"><i class="glyphicon glyphicon-chevron-right"></i></button>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="col-xs-1 md-hidden lg-hidden"></div>
</div>
<script>$j(function(){ $j('img[src^="thumbnail.php?i=&"').parent().hide(); });</script>
