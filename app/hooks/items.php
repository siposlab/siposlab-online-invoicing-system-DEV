<?php
	// For help on using hooks, please refer to http://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function items_init(){

		return TRUE;
	}

	function items_header($contentType){
		$header='';

		switch($contentType){
			case 'tableview':
				$header='';
				break;


            default:
                break;
		}

		return $header;
	}

	function items_footer($contentType){
		$footer='';

		switch($contentType){

			case 'detailview':
				$footer='';
				break;

            default:
                break;

		}

		return $footer;
	}
	

	function items_csv($query){

		return $query;
	}
	function items_batch_actions(){

		return array();
	}
