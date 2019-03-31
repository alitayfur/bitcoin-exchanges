<?php
    include "poloniex.class.php";
	$api_key    = '';
	$api_secret = '';
	$poloniex = new poloniex($api_key, $api_secret);
	
	//var_dump($poloniex->get_balances()); the wallet
	
	//var_dump($poloniex->get_ticker('all'));
	//var_dump($poloniex->get_volume());
	




	
	//var_dump($poloniex->get_trade_history('BTC_BELA'));	
	//var_dump($poloniex->get_total_btc_balance());
    //var_dump($poloniex->get_trading_pairs());