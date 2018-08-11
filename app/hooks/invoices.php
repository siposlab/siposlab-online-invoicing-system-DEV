<?php

// For help on using hooks, please refer to http://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks


/**
 *
 * function to load templates from invoice templates folder
 *	then store them in csv file as option list
 */

function load_invoice_templates(){
	$dir = 'hooks/invoice-templates';
	$options = 'hooks/invoices.invoice_template.csv';
	$templates = glob($dir . '/*.php');
	$list = [];

	if($templates){
		foreach ($templates as $template) {
			$list[] = ucwords(str_replace('.php', '', str_replace('_', ' ', basename($template))));
		}
	}

	file_put_contents($options, implode(';;', $list));
}

function invoices_init() {
	load_invoice_templates();
	return TRUE;
}

function invoices_header($contentType) {
	$header = '';

	if ($contentType) {

			$header = '';

	}

	return $header;
}

function invoices_footer($contentType) {
	$footer = '';

	if ($contentType) {

			$footer = '';
	}

	return $footer;
}

function invoices_dv(&$html) {
	global $Translation;
	
	/* define all Translation strings needed by js code */
	ob_start();
	?>
	<script>
		window.Translation = window.Translation || {};
		window.Translation['back'] = '<?php echo html_attr($Translation['Back']); ?>';
	</script>
	<?php
	$form_code = ob_get_contents();
	ob_end_clean();

	$html .= $form_code;
}

function invoices_csv($query) {

	return $query;
}
