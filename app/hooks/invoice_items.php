<?php

// For help on using hooks, please refer to http://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

function invoice_items_init() {

	return TRUE;
}

function invoice_items_header($contentType) {
	$header = '';

	if ($contentType) {

			$header = '';
	}

	return $header;
}
function invoice_items_dv($selectedID, &$html) {
	global $Translation;
	if (isset($_REQUEST['dvprint_x'])){

        return;
    }


	ob_start();
	?>

	<script>
		$j(function () {
	<?php if (!$selectedID) { ?>
				$j('#qty').val("0");
				setTimeout(function () {
					$j('#deselect').removeClass('btn-warning').addClass('btn-default').get(0).lastChild.data = '<?php echo $Translation['Back']; ?>';
				}, 1000);

	<?php }else{ ?>
	setTimeout(function () {
					$j('#deselect').removeClass('btn-warning').addClass('btn-default').get(0).lastChild.data = '<?php echo $Translation['Back']; ?>';
				}, 1000);
	<?php }?>
		});


	</script>

	<?php
	$form_code = ob_get_contents();
	ob_end_clean();

	$html .= $form_code;
}

function invoice_items_csv($query) {

	return $query;
}
