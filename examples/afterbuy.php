<?php

require_once __DIR__ . './../vendor/autoload.php';

$config = array(
    'userId'     => 'userid',
    'userPass' => 'userpass',
    'partnerId'    => '123456',
    'partnerPass'    => '123',
    'errorLang'    => 'en',
);


$factory  = new Ns\Afterbuy\Factory();
$api = $factory->createRequest($config);
try {
    $soldItems =  $api->getSoldItems();
    $result = $soldItems->getResult();
    var_dump($result);
} catch (Exception $e) {
    echo $e;
}
