<?php



function apiQuery($path, array $req = array()) {

	$req['apikey'] = API_KEY;
	$req['nonce'] = time();
	
	$queryString = http_build_query($req, '', '&');
	$requestUrl = API_URL . $path . '?' . $queryString;	
	$sign = hash_hmac('sha512', $requestUrl, PRIVATE_KEY);
	
	static $curlHandler = null;
	
	if (is_null($curlHandler)) {
		$curlHandler = curl_init();
		curl_setopt($curlHandler, CURLOPT_CAINFO, __DIR__."\cacert.pem");
		curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curlHandler, CURLOPT_HTTPHEADER, array('apisign:'.$sign));
		curl_setopt($curlHandler, CURLOPT_HTTPGET, true);
		curl_setopt($curlHandler, CURLOPT_URL, $requestUrl);
		curl_setopt($curlHandler, CURLOPT_SSL_VERIFYPEER, TRUE);
	}
	
	// run the query
	$response = curl_exec($curlHandler);
	
	if ($response === false) {
		throw new Exception('Could not get reply: ' . curl_error($curlHandler));
	}
	
	$json = json_decode($response, true);
	if (!$json) {
		throw new Exception('Invalid data received, please make sure connection is working and requested API exists');
	}
	
	return $json;
}

