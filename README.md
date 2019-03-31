# Bitcoin Exchange Class Examples

![bitcoin](img/exchange.original.jpg)
![bitcoin2](img/2.png)

# Bitstamp

![bitstamp](img/bitstamp.png)

# Using

    $stamp = new bitstamp("KEY","SECRET","ID");

    $ticker = $stamp->ticker();
    $balance = $stamp->balance();

    var_dump($ticker);
    var_dump($balance);

# Bittrex

![bittrex](img/BittrexLogo_Color.jpg)

# Using

    $path = 'public/getmarkets';
    $params = [];

    $response = apiQuery($path, $params);
    var_dump($response);

# Cex IO

![cexapi](img/indir.png)

# Using

    // Create API Object
    $api = new cexapi("username", "api_key", "api_secret_code");

    // Test some API Methods
    echo "Ticker:<pre>", json_encode($api->ticker()), "</pre>";
    echo "Order Book:<pre>", json_encode($api->order_book()), "</pre>";
    echo "Balance:<pre>", json_encode($api->balance()), "</pre>";
    echo "Open Orders:<pre>", json_encode($api->open_orders()), "</pre>"

# Poloniex

![poloniex](img/Poloniex-logo-800px.png)

# Using

    $api_key    = '';
    $api_secret = '';
    $poloniex = new poloniex($api_key, $api_secret);

    var_dump($poloniex->get_balances()); //the wallet

    var_dump($poloniex->get_ticker('all'));
    var_dump($poloniex->get_volume());

    var_dump($poloniex->get_trade_history('BTC_BELA'));
    var_dump($poloniex->get_total_btc_balance());
    var_dump($poloniex->get_trading_pairs());

# Yobit

![yobit](img/download-2-300x146.png)

# Using

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
        $params = array('pair' => $xpair, 'type'=>'sell', 'rate'=>$price,'amount'=>$amount);
        $res = $yobit->apiQuery('Trade', $params);
        }
        catch(YoBitNetAPIException $e) {
                        echo $e->getMessage();
                }


        try
        {
        //buy example
        $params = array('pair' => $xpair, 'type'=>'buy', 'rate'=>$price,'amount'=>$amount);
        $res = $yobit->apiQuery('Trade', $params);
        }

        catch(YoBitNetAPIException $e) {
                        echo $e->getMessage();
                }
