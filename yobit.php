<?php

set_time_limit(0);
ob_implicit_flush(1);

ini_set('precision', 8);
bcscale(8);

require_once('yobit.class.php');
$yobit = new yobit(
                    '', // API KEY
                    '' // API SECRET
                      );



$xpair='eags_btc';

  $data = array();
  $data['depth'] = $yobit->getPairDepth($xpair);
  $asks = $data['depth']['asks'];
  $count_asks = count($asks);
  $bids = $data['depth']['bids'];
  $count_bids = count($bids);

//var_dump($data['depth']);

$price_max_bids = $asks[0][0];
$price_min_asks = $bids[0][0];

echo "Price_max_bids: $price_min_asks \nPrice_min_asks: $price_max_bids";



try
{
//sell example
//$params = array('pair' => $xpair, 'type'=>'sell', 'rate'=>$price,'amount'=>$amount);
//        $res = $yobit->apiQuery('Trade', $params);
}
catch(YoBitNetAPIException $e) {
        echo $e->getMessage();
    }


try
{
//buy example
//$params = array('pair' => $xpair, 'type'=>'buy', 'rate'=>$price,'amount'=>$amount);
//        $res = $yobit->apiQuery('Trade', $params);
}

catch(YoBitNetAPIException $e) {
        echo $e->getMessage();
    }



?>
