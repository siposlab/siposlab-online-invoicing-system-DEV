<?php
	// For help on using hooks, please refer to http://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function clients_init(&$options, &$args){

		return TRUE;
	}

	function clients_header($contentType, &$args){
		$header='';

		switch($contentType){
			case 'tableview':
				$header='';
				break;


			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;

            default:
                break;

		}

		return $header;
	}

	function clients_footer($contentType, &$args){
		$footer='';

		switch($contentType){
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;

            default:
                break;
		}

		return $footer;
	}

	function clients_before_insert(&$data, &$args){

		return TRUE;
	}

	function clients_after_insert($data, &$args){

		return TRUE;
	}

	function clients_before_update(&$data, &$args){

		return TRUE;
	}

	function clients_after_update($data, &$args){

		return TRUE;
	}

	function clients_before_delete($selectedID, &$skipChecks, &$args){

		return TRUE;
	}

	function clients_after_delete($selectedID, &$args){

	}

	function clients_dv($selectedID, &$html, &$args){

	}

	function clients_csv($query, $args){

		return $query;
	}
