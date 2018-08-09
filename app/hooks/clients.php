<?php
	// For help on using hooks, please refer to http://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function clients_init(&$options){

		return TRUE;
	}

	function clients_header($contentType){
		$header='';

		switch($contentType){
			case 'tableview':
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

	function clients_footer($contentType){
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

	function clients_before_insert(&$data){

		return TRUE;
	}

	function clients_after_insert($data){

		return TRUE;
	}

	function clients_before_update(&$data){

		return TRUE;
	}

	function clients_after_update($data){

		return TRUE;
	}

	function clients_before_delete($selectedID, &$skipChecks){

		return TRUE;
	}

	function clients_after_delete($selectedID){

	}

	function clients_dv($selectedID, &$html){

	}

	function clients_csv($query){

		return $query;
	}
