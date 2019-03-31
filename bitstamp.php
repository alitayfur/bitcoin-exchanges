<?php
    include 'bitstamp.class.php';
     // replace with api keys
	$stamp = new bitstamp("KEY","SECRET","ID");

	$ticker = $stamp->ticker();
	$balance = $stamp->balance();

	var_dump($ticker);
	var_dump($balance);