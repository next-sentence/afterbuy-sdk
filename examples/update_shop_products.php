<?php

require_once __DIR__ . './../vendor/autoload.php';

$config = [
    'userId'      => 'userid',
    'userPass'    => 'userpass',
    'partnerId'   => '123456',
    'partnerPass' => '123',
    'errorLang'   => 'en',
];

$factory = new Ns\Afterbuy\Factory();
$api     = $factory->createRequest($config);

try {
    $product = new \Ns\Afterbuy\Model\UpdateShopProducts\Product();
    $product->setProductIdent(
        (new \Ns\Afterbuy\Model\UpdateShopProducts\ProductIdent())
            ->setAnr(new \Ns\Afterbuy\Model\FloatType(12345))
    );

    $product->setBuyingPrice(new \Ns\Afterbuy\Model\FloatType(10.5));
    $product->setQuantity(5);
    $product->setStock(true);
    $product->setMinimumStock(3);
    $product->setWeight(new \Ns\Afterbuy\Model\FloatType(5.34));
    $product->setDiscontinued(false);
    $product->setFreeValue1('dd.mm.YYYY');
    $product->setFreeValue2('88');
    $product->setFreeValue3('5 days');

    $response = $api->updateShopProducts(
        [
            $product,
        ]
    );

    var_dump($response);
} catch (Exception $e) {
    echo $e;
}
