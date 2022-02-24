<?php

$request = new HttpRequest();
$request->setUrl('https://img4me.p.rapidapi.com/');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData([
	'text' => 'Test Me',
	'font' => 'trebuchet',
	'size' => '12',
	'fcolor' => '000000',
	'bcolor' => 'FFFFFF',
	'type' => 'png'
]);

$request->setHeaders([
	'x-rapidapi-host' => 'img4me.p.rapidapi.com',
	'x-rapidapi-key' => 'f60054666bmsh93cc7725a58762dp1c611djsn7fcd1edb6bf8'
]);

try {
	$response = $request->send();

	echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;
}