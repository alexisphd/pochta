<?php
require_once 'Sending.php';
require_once 'Sender.php';
require_once 'Calculate.php';

use pochta\Sending;
use pochta\Sender;
use pochta\Calculate;

try {
    $obj = new Sending();
       $parcel = new Sender();
    $baseUrl = $parcel->getUrl($obj);
    $json = $parcel->makeJson($obj);
    // $res= $parcel->jsonSend($json,$baseUrl);
    $calc = new Calculate(150);

    $calc->getCalculation($obj, $baseUrl);

} catch (Error $error) {
    echo $error->getMessage();
}
