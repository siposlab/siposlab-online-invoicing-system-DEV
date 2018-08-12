<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function item_prices_init(){

		return TRUE;
	}

	function item_prices_header(){





	}

	function item_prices_footer(){





	}


	function item_prices_after_insert($data){
		update_item_latest_price($data['item']);
		return TRUE;
	}



	function item_prices_before_delete($selectedID){
		$GLOBALS['deleted_item_id'] = sqlValue("select item from item_prices where id='{$selectedID}'");
		return TRUE;
	}

	function item_prices_after_delete(){
		update_item_latest_price($GLOBALS['deleted_item_id']);
	}

	function item_prices_dv(){

	}

	function item_prices_csv($query){

		return $query;
	}
	function item_prices_batch_actions(){

		return array();
	}
